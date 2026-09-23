@extends('layouts.master')

@section('title', 'Convidados - Show')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')



    <!-- Cabeçalho -->
    <div class="guest-card__header">
        <!-- Breadcrumb / voltar -->
        <a href="{{ route('guests') }}" class="back-link">&larr; Voltar aos convidados</a>

        <h1 class="guest-card__name" data-field="nome">{{ $guest->name }}</h1>
        <span class="badge badge--{{ $guest->rsvp_status }}" data-field="rsvp-badge">{{ $guest->rsvp_status }}</span>
    </div>

    <!-- Corpo -->
    <div class="guest-card__body">

        <dl class="info-grid">
            @if (!empty($guest->email))
                <div class="info-item">
                    <dt class="info-item__label">Email</dt>
                    <dd class="info-item__value" data-field="email">{{ $guest->email }}</dd>
                </div>
            @else
                <div class="info-item">
                    <dt class="info-item__label">Email</dt>
                    <dd class="info-item__value" data-field="email">-</dd>
                </div>
            @endif



            @if (!empty($guest->phone))
                <div class="info-item">
                    <dt class="info-item__label">Telefone</dt>
                    <dd class="info-item__value" data-field="telefone">{{ $guest->phone }}</dd>
                </div>
            @else
                <div class="info-item">
                    <dt class="info-item__label">Telefone</dt>
                    <dd class="info-item__value" data-field="telefone">-</dd>
                </div>
            @endif

            @if (!empty($guest->table_id))
                <div class="info-item">
                    <dt class="info-item__label">Mesa</dt>
                    <dd class="info-item__value" data-field="mesa">{{ $guest->table_id }}</dd>
                </div>
            @else
                <div class="info-item">
                    <dt class="info-item__label">Mesa</dt>
                    <dd class="info-item__value" data-field="mesa">-</dd>
                </div>
            @endif


            @if ($companionsCount > 0)
                <div class="info-item">
                    <dt class="info-item__label">Total de acompanhantes</dt>
                    <dd class="info-item__value" data-field="total-pessoas">{{ $companionsCount }}</dd>
                </div>
            @else
                <div class="info-item">
                    <dt class="info-item__label">Não Traz Acompanhantes</dt>
                </div>
            @endif

        </dl>

        @if (!empty($guest->notes))
            <div data-field="notas-wrapper">
                <dt class="info-item__label">Notas</dt>
                <dd class="info-item__value" data-field="notas">{{ $guest->notes }}</dd>
            </div>
        @else
            <div data-field="notas-wrapper">
                <dt class="info-item__label">Notas</dt>
                <dd class="info-item__value" data-field="notas">-</dd>
            </div>
        @endif


        @if ($companionsCount > 0)
            <!-- Acompanhantes -->
            <div class="section-divider">
                <h2 class="section-title">Acompanhantes</h2>

                <ul class="companion-list" data-field="acompanhantes-lista">

                    @foreach ($companions as $companion)
                        <!-- Item: adulto -->
                        <li class="companion-item">
                            <div class="companion-item__left">
                                <span
                                    class="companion-avatar">{{ Str::of($companion->name)->explode(' ')->map(fn($word) => Str::substr($word, 0, 1))->join('') }}</span>
                                <span class="companion-item__name">{{ $companion->name }}</span>
                            </div>
                            @if ($companion->age >= 18)
                                <span class="badge badge--adulto">Adulto</span>
                            @else
                                <span class="badge badge--crianca">Criança</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- @else --}}
            {{-- <div class="section-divider">
                <h2 class="section-title">Acompanhantes</h2>

                <p class="empty-state hidden" data-field="acompanhantes-vazio">
                    Este convidado não tem acompanhantes registados.
                </p>
            </div>
        @endif --}}

    </div>

    <div class="wp-companions-modal">
        <!-- Rodapé / ações -->
        <div class="guest-card__footer">

            <button type="button" class="btn btn--outline-green open-trigger" data-action="editar">Editar</button>
            <button type="button" class="btn btn--outline-clay" data-action="remover"
                onclick="openDeleteModal({{ $guest->id }}, '{{ $guest->name }}')">Remover</button>
        </div>

        @if (session('success'))
            <div class="toast toast-success" id="toast-message">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="toast toast-error" id="toast-message">
                {{ session('error') }}
            </div>
        @endif

        <!-- Modal Edit Companions-->
        <div class="modal-overlay">
            <div class="modal">
                <div class="modal-header">
                    <div>
                        <h2>Acompanhantes</h2>
                        <p>Adicione ou remova os acompanhantes deste convidado.</p>
                    </div>
                    <button type="button" class="close-btn" aria-label="Fechar">&times;</button>
                </div>

                

                <div class="modal-body">
                    @if ($companionsCount > 0)
                        <p class="section-label">Atuais</p>
                        <div class="companion-list">
                            @foreach ($companions as $companion)
                                <div class="companion-row">
                                    <div class="companion-avatar">AS</div>
                                    <div class="companion-info">
                                        <div class="companion-name">{{ $companion->name }}</div>
                                        <div class="companion-age">{{ $companion->age }}</div>
                                    </div>
                                    <form action="{{ route('companion.delete', $companion->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="remove-btn" data-id="{{ $companion->id }}" aria-label="Remover {{ $companion->name }}">
                                            &times;
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <p class="section-label">Adicionar novo</p>

                    <button type="button" class="add-companion-btn">
                        <span class="plus-icon">+</span>
                        Adicionar acompanhante
                    </button>
                    
                    <div class="add-form-wrapper">
                        <div class="add-form">
                            <form action="{{ route('companion.store', $guest->id) }}" method="POST" style="width: 100%;">
                                @csrf

                                <div class="field field-name">
                                    <label>Nome</label>
                                    <input type="text" name="name" class="new-companion-name" placeholder="Nome do acompanhante" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="field field-age">
                                    <label>Idade</label>
                                    <input type="hidden" name="age" id="companion-age" value="{{ old('age') }}">

                                    <div class="age-presets">
                                        <button type="button" class="age-preset-btn" data-age="under3">&lt;3</button>
                                        <button type="button" class="age-preset-btn" data-age="under12">&lt;12</button>
                                        <button type="button" class="age-preset-btn" data-age="over12">&gt;12</button>
                                    </div>

                                    @error('age')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="add-btn" aria-label="Adicionar acompanhante">+</button>
                            </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-secondary">Cancelar</button>
                    <button type="button" class="btn-primary">Guardar alterações</button>
                </div>
            </div>
        </div>

    </div>

    <!--Modal delete-->
    <!-- Modal de eliminar (fica fora do loop de cards) -->
    <div class="modal-overlay" id="deleteModalOverlay" style="display:none;">
        <div class="modal">
            <div class="modal-header">
                <h2>Remover Convidado</h2>
                <button type="button" class="modal-close" onclick="closeDeleteModal()">✕</button>
            </div>
            <p>Queres mesmo eliminar <strong id="deleteGuestName"></strong>?</p>

            <div class="modal-actions">
                <button type="button" class="btn btn-ghost" onclick="closeDeleteModal()">Não</button>
                <button type="button" class="btn btn-primary" style="background:#ef4444;"
                    onclick="confirmDelete()">Sim, eliminar</button>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function voltarConvidados(event) {
            event.preventDefault();

            if (document.referrer && document.referrer.includes(window.location.host)) {
                window.history.back();
            } else {
                window.location.href = '/convidados'; // fallback route
            }
        }

        // modal edit companions
        const modal = document.querySelector('.wp-companions-modal');

        const el = (selector) => modal.querySelector(selector);

        const openModal = () => {
            el('.modal-overlay').classList.add('active');
            renderCompanions();
            hideAddForm();
        };

        const closeModal = () => el('.modal-overlay').classList.remove('active');

        const showAddForm = () => {
            el('.add-form-wrapper').classList.add('active');
            el('.add-companion-btn').style.display = 'none';
            // el('.new-companion-name').focus();
        };

        const hideAddForm = () => {
            el('.add-form-wrapper').classList.remove('active');
            el('.add-companion-btn').style.display = 'flex';
            el('.new-companion-name').value = '';
            el('.new-companion-age').value = '';
            el('.form-error').classList.remove('active');
        };

        const addCompanion = () => {
            const name = el('.new-companion-name').value.trim();
            const age = parseInt(el('.new-companion-age').value, 10);

            if (!name || isNaN(age) || age < 0) {
                e.preventDefault(); // stop the form from submitting
                el('.form-error').classList.add('active');
                return;
            }
        };

        const saveCompanions = () => {
            console.log('Companions to save:', companions);
            closeModal();
        };

        document.addEventListener('DOMContentLoaded', () => {
            if (!modal) return;

            modal.querySelector('.open-trigger')?.addEventListener('click', openModal);
            modal.querySelector('.close-btn').addEventListener('click', closeModal);
            modal.querySelector('.btn-secondary').addEventListener('click', closeModal);
            modal.querySelector('.btn-primary').addEventListener('click', saveCompanions);
            modal.querySelector('.add-companion-btn').addEventListener('click', showAddForm);
            modal.querySelector('.add-btn').addEventListener('click', addCompanion);

            modal.querySelector('.new-companion-age').addEventListener('keydown', e => {
                if (e.key === 'Enter') addCompanion();
            });

            document.addEventListener('keydown', e => {
                if (e.key === 'Escape') closeModal();
            });
        });




        
        //Modal delete guest
        let guestIdToDelete = null;

        function openDeleteModal(id, name) {
            guestIdToDelete = id;
            document.getElementById('deleteGuestName').textContent = name;
            document.getElementById('deleteModalOverlay').style.display = 'flex';
        }

        function closeDeleteModal() {
            document.getElementById('deleteModalOverlay').style.display = 'none';
        }

        function confirmDelete() {
            fetch(`/guests/${guestIdToDelete}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = "{{ route('guests') }}";
                    } else {
                        alert('Erro ao eliminar convidado.');
                    }
                });
        }

        //=========Age Range Modal Create Companion on Guest Edit=========
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.age-preset-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.getElementById('companion-age').value = btn.dataset.age;

                    document.querySelectorAll('.age-preset-btn').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                });
            });
        });
    </script>


@endsection
