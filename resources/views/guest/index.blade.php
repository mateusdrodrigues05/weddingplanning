@extends('layouts.master')

@section('title', 'Convidados')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')

    @if ($errors->any())
        <div class="bg-red-50 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="page-header">
        <div>
            <div class="eyebrow">Gestão</div>
            <h1>Convidados</h1>
        </div>
        <button class="btn btn-primary" onclick="openModal()">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
                <path d="M12 5v14M5 12h14" />
            </svg>
            <span class="btn-text">Adicionar Convidado</span>
        </button>
    </div>

    <div class="stats-row">
        <div class="stat-pill">
            <div class="stat-icon total"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="14" r="6" />
                    <circle cx="15" cy="14" r="6" />
                </svg></div>
            <div>
                <div class="stat-num" id="stat-total">{{ $guests->count() }}</div>
                <div class="stat-lbl">Total</div>
            </div>
        </div>
        <div class="stat-pill">
            <div class="stat-icon confirmed"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6L9 17l-5-5" />
                </svg></div>
            <div>
                <div class="stat-num" id="stat-confirmed">{{ $guests->where('rsvp_status', 'confirmed')->count() }}</div>
                <div class="stat-lbl">Confirmados</div>
            </div>
        </div>
        <div class="stat-pill">
            <div class="stat-icon pending"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M12 7v5l3 3" />
                </svg></div>
            <div>
                <div class="stat-num" id="stat-pending">{{ $guests->where('rsvp_status', 'pending')->count() }}</div>
                <div class="stat-lbl">Pendentes</div>
            </div>
        </div>
        <div class="stat-pill">
            <div class="stat-icon declined"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg></div>
            <div>
                <div class="stat-num" id="stat-declined">{{ $guests->where('rsvp_status', 'declined')->count() }}</div>
                <div class="stat-lbl">Recusados</div>
            </div>
        </div>
    </div>

    <div class="toolbar">
        <div class="search-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="11" cy="11" r="7" />
                <path d="M21 21l-4.3-4.3" />
            </svg>
            <input type="text" id="searchInput" placeholder="Pesquisar convidado..." oninput="render()">
        </div>

        <button class="filter-btn" id="filterBtn" onclick="toggleFilterPanel()" title="Filtros">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M4 6h16M7 12h10M10 18h4" />
            </svg>
        </button>

        <div class="filter-panel" id="filterPanel">
            <div class="chips">
                <div class="chip active" onclick="setFilter('all', this)">Todos</div>
                <div class="chip" onclick="setFilter('confirmed', this)">Confirmados</div>
                <div class="chip" onclick="setFilter('pending', this)">Pendentes</div>
                <div class="chip" onclick="setFilter('declined', this)">Recusados</div>
            </div>
            <div class="view-toggle">
                <button class="view-btn active" id="btn-grid" title="Vista em grelha" onclick="setView('grid', this)">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7" rx="1.5" />
                        <rect x="14" y="3" width="7" height="7" rx="1.5" />
                        <rect x="3" y="14" width="7" height="7" rx="1.5" />
                        <rect x="14" y="14" width="7" height="7" rx="1.5" />
                    </svg>
                </button>
                <button class="view-btn" id="btn-list" title="Vista em lista" onclick="setView('list', this)">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round">
                        <path d="M8 6h13M8 12h13M8 18h13" />
                        <path d="M3 6h.01M3 12h.01M3 18h.01" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="grid" id="guestGrid">
        @foreach ($guests as $guest)
            <div class="guest-card card-enter" data-status="{{ $guest->rsvp_status }}" data-name="{{ $guest->name }}">
                <div class="seal {{ $guest->rsvp_status }}">
                    @if ($guest->rsvp_status == 'confirmed')
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round">
                            <path d="M20 6L9 17l-5-5" />
                        </svg>
                    @elseif($guest->rsvp_status == 'declined')
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round">
                            <path d="M18 6L6 18M6 6l12 12" />
                        </svg>
                    @elseif($guest->rsvp_status == 'pending')
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                            stroke-linecap="round">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 7v5l3 2"></path>
                        </svg>
                    @endif
                </div>

                <div class="card-top">
                    <div class="avatar">
                        {{ Str::of($guest->name)->explode(' ')->map(fn($word) => Str::substr($word, 0, 1))->join('') }}
                    </div>
                    <div>
                        <div class="guest-name">{{ $guest->name }}</div>
                        <div class="guest-contact">{{ $guest->email }}</div>
                        @if ($guest->companions_adult > 0 || $guest->companions_children > 0)
                            <p class="text-[11px] text-gray-400 mt-0.5 flex items-center gap-1.5">
                                @if ($guest->companions_adult > 0)
                                    <span><i class="fa-solid fa-person"></i> {{ $guest->companions_adult }}</span>
                                @endif
                                @if ($guest->companions_adult > 0 && $guest->companions_children > 0)
                                    <span class="text-gray-300 ">|</span>
                                @endif
                                @if ($guest->companions_children > 0)
                                    <span><i class="fa-solid fa-child-dress"></i> {{ $guest->companions_children }}</span>
                                @endif
                            </p>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <div class="status-text confirmed">{{ $guest->rsvp_status }}</div>
                    <div class="card-actions">
                        <a href="{{ route('guest.show', $guest->id) }}" class="icon-btn" title="Editar">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <div class="icon-btn" title="Copiar link">
                            <i class="fa-solid fa-link"></i>
                        </div>
                        <button class="icon-btn" title="Remover"
                            onclick="openDeleteModal({{ $guest->id }}, '{{ $guest->name }}')"><i
                                class="fa-solid fa-xmark"></i></button>

                    </div>
                </div>
            </div>
        @endforeach

        {{-- ============================================= --}}
        {{-- FIM do bloco a substituir por @foreach --}}
        {{-- ============================================= --}}

    </div>

    <!-- Modal -->
    <div class="modal-overlay" id="createModalOverlay" style="display: none;">
        <div class="modal">
            <form action="{{ route('guests.store') }}" method="POST">
                @csrf

                <div class="modal-header">
                    <h2>Adicionar Convidado</h2>
                    <button type="button" class="modal-close" onclick="closeModal()">✕</button>
                </div>
                <div class="sub">O link de confirmação é gerado automaticamente ao guardar.</div>

                <div class="field">
                    <label>Nome completo</label>
                    <input type="text" name="name" placeholder="Ex: Carla Sousa" required>
                </div>
                <div class="field-row">
                    <div class="field">
                        <label>Telemóvel</label>
                        <input type="text" name="phone" placeholder="912 345 678" required>
                    </div>
                    <div class="field">
                        <label>Email (opcional)</label>
                        <input type="text" name="email" placeholder="carla@email.com">
                    </div>
                </div>

                <div class="modal-note">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10 13a5 5 0 007.5.5l2-2a5 5 0 00-7-7l-1 1" />
                        <path d="M14 11a5 5 0 00-7.5-.5l-2 2a5 5 0 007 7l1-1" />
                    </svg>
                    Depois de guardado, podes copiar o link único para enviar por WhatsApp ou email.
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn btn-ghost" onclick="closeModal()">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Convidado</button>
                </div>
            </form>
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
        let currentFilter = 'all';
        let currentView = 'grid';

        function openModal() {
            document.getElementById('createModalOverlay').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('createModalOverlay').style.display = 'none';
        }

        function render() {
            const search = document.getElementById('searchInput').value.toLowerCase();
            const cards = document.querySelectorAll('#guestGrid .guest-card');
            let visibleCount = 0;

            cards.forEach(card => {
                const status = card.dataset.status;
                const name = card.dataset.name.toLowerCase();

                const matchesFilter = currentFilter === 'all' || status === currentFilter;
                const matchesSearch = name.includes(search);

                if (matchesFilter && matchesSearch) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Mostra "sem resultados" se nada corresponder
            let emptyState = document.getElementById('emptyState');
            if (visibleCount === 0) {
                if (!emptyState) {
                    emptyState = document.createElement('div');
                    emptyState.id = 'emptyState';
                    emptyState.className = 'empty-state';
                    emptyState.textContent = 'Nenhum convidado encontrado.';
                    document.getElementById('guestGrid').appendChild(emptyState);
                }
            } else if (emptyState) {
                emptyState.remove();
            }
        }

        function setFilter(filter, el) {
            currentFilter = filter;
            document.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
            el.classList.add('active');
            render();
        }

        function setView(view, el) {
            currentView = view;
            document.getElementById('guestGrid').className = view === 'grid' ? 'grid' : 'list-view';
            document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
            el.classList.add('active');
        }



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

        //filtros
        function toggleFilterPanel() {
            document.getElementById('filterPanel').classList.toggle('active');
        }

        // fecha o painel se clicares fora dele
        document.addEventListener('click', function(e) {
            const panel = document.getElementById('filterPanel');
            const btn = document.getElementById('filterBtn');
            if (!panel.contains(e.target) && !btn.contains(e.target)) {
                panel.classList.remove('active');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Livewire.dispatch('guest-created');
            @endif
        });
    </script>
@endsection
