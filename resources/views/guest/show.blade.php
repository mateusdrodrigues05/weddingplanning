@extends('layouts.master')

@section('title', 'Convidados - Show')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')



    <!-- Cabeçalho -->
    <div class="guest-card__header">
        <!-- Breadcrumb / voltar -->
        <a href="javascript:history.back()" class="back-link">&larr; Voltar aos convidados</a>

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
        @else
            <div class="section-divider">
                <h2 class="section-title">Acompanhantes</h2>

                <p class="empty-state hidden" data-field="acompanhantes-vazio">
                    Este convidado não tem acompanhantes registados.
                </p>
            </div>
        @endif

    </div>

    <div class="wp-companions-modal">
        <!-- Rodapé / ações -->
        <div class="guest-card__footer">

            <button type="button" class="btn btn--outline-green open-trigger" data-action="editar">Editar</button>
            <button type="button" class="btn btn--outline-clay" data-action="remover"
                onclick="openDeleteModal({{ $guest->id }}, '{{ $guest->name }}')">Remover</button>
        </div>

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
                                    <button type="button" class="remove-btn" data-id="1"
                                        aria-label="Remover Ana Silva">&times;</button>
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
                            <div class="field field-name">
                                <label>Nome</label>
                                <input type="text" class="new-companion-name" placeholder="Nome do acompanhante">
                            </div>
                            <div class="field field-age">
                                <label>Idade</label>
                                <input type="number" class="new-companion-age" placeholder="0" min="0"
                                    max="120">
                            </div>
                            <button type="button" class="add-btn" aria-label="Adicionar acompanhante">+</button>
                        </div>
                        <p class="form-error">Preencha o nome e a idade corretamente.</p>
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

        //modal edit companions

        function companionsModalEl() {
            return document.querySelector('.wp-companions-modal');
        }

        function openCompanionsModal() {
            companionsModalEl().querySelector('.modal-overlay').classList.add('active');
            renderCompanions();
            hideAddForm();
        }

        function closeCompanionsModal() {
            companionsModalEl().querySelector('.modal-overlay').classList.remove('active');
        }

        function showAddForm() {
            const root = companionsModalEl();
            root.querySelector('.add-form-wrapper').classList.add('active');
            root.querySelector('.add-companion-btn').style.display = 'none';
            root.querySelector('.new-companion-name').focus();
        }

        function hideAddForm() {
            const root = companionsModalEl();
            root.querySelector('.add-form-wrapper').classList.remove('active');
            root.querySelector('.add-companion-btn').style.display = 'flex';
            root.querySelector('.new-companion-name').value = '';
            root.querySelector('.new-companion-age').value = '';
            root.querySelector('.form-error').classList.remove('active');
        }

        function addCompanion() {
            const root = companionsModalEl();
            const nameInput = root.querySelector('.new-companion-name');
            const ageInput = root.querySelector('.new-companion-age');
            const error = root.querySelector('.form-error');

            const name = nameInput.value.trim();
            const age = parseInt(ageInput.value, 10);

            if (!name || isNaN(age) || age < 0) {
                error.classList.add('active');
                return;
            }

            error.classList.remove('active');
            companions.push({
                id: nextTempId--,
                name,
                age
            });
            renderCompanions();
            hideAddForm();
        }

        function removeCompanion(id) {
            companions = companions.filter(c => c.id !== id);
            renderCompanions();
        }

        function saveCompanions() {
            console.log('Companions to save:', companions);
            closeCompanionsModal();
        }

        document.addEventListener('DOMContentLoaded', () => {
            const root = companionsModalEl();
            if (!root) return;

            root.querySelector('.open-trigger')?.addEventListener('click', openCompanionsModal);
            root.querySelector('.close-btn').addEventListener('click', closeCompanionsModal);
            root.querySelector('.btn-secondary').addEventListener('click', closeCompanionsModal);
            root.querySelector('.btn-primary').addEventListener('click', saveCompanions);
            root.querySelector('.add-companion-btn').addEventListener('click', showAddForm);
            root.querySelector('.add-btn').addEventListener('click', addCompanion);

            root.querySelector('.new-companion-age').addEventListener('keydown', e => {
                if (e.key === 'Enter') addCompanion();
            });

            document.addEventListener('keydown', e => {
                if (e.key === 'Escape') closeCompanionsModal();
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
                        location.reload(); // refreshes the page, guest list updates
                    } else {
                        alert('Erro ao eliminar convidado.');
                    }
                });
        }
    </script>


@endsection
