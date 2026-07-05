@extends('layouts.master')

@section('title', 'Convidados')

@section('content')

    <div class="page-header">
        <div>
            <div class="eyebrow">Gestão</div>
            <h1>Convidados</h1>
        </div>
        <button class="btn btn-primary" onclick="openModal()">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
                <path d="M12 5v14M5 12h14" />
            </svg>
            Adicionar Convidado
        </button>
    </div>

    <div class="stats-row">
        <div class="stat-pill">
            <div class="stat-icon total"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="14" r="6" />
                    <circle cx="15" cy="14" r="6" />
                </svg></div>
            <div>
                <div class="stat-num" id="stat-total">6</div>
                <div class="stat-lbl">Total</div>
            </div>
        </div>
        <div class="stat-pill">
            <div class="stat-icon confirmed"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6L9 17l-5-5" />
                </svg></div>
            <div>
                <div class="stat-num" id="stat-confirmed">3</div>
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
                <div class="stat-num" id="stat-pending">2</div>
                <div class="stat-lbl">Pendentes</div>
            </div>
        </div>
        <div class="stat-pill">
            <div class="stat-icon declined"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg></div>
            <div>
                <div class="stat-num" id="stat-declined">1</div>
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
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <path d="M8 6h13M8 12h13M8 18h13" />
                    <path d="M3 6h.01M3 12h.01M3 18h.01" />
                </svg>
            </button>
        </div>
    </div>

    <div class="grid" id="guestGrid">

        {{-- ============================================= --}}
        {{-- A PARTIR DAQUI: substituir por @foreach ($guests as $guest) --}}
        {{-- Cada .guest-card abaixo é UM convidado --}}
        {{-- ============================================= --}}

        <div class="guest-card card-enter" data-status="confirmed" data-name="ana silva">
            <div class="seal confirmed">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                    stroke-linecap="round">
                    <path d="M20 6L9 17l-5-5" />
                </svg>
            </div>
            <div class="card-top">
                <div class="avatar">AS</div>
                <div>
                    <div class="guest-name">Ana Silva</div>
                    <div class="guest-contact">ana.silva@email.com</div>
                </div>
            </div>
            <div class="card-footer">
                <div class="status-text confirmed">Confirmado</div>
                <div class="card-actions">
                    <button class="icon-btn" title="Editar">✎</button>
                    <button class="icon-btn" title="Remover">✕</button>
                </div>
            </div>
        </div>

        <div class="guest-card card-enter" data-status="pending" data-name="joão pereira">
            <div class="seal pending">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M12 7v5l3 3" />
                </svg>
            </div>
            <div class="card-top">
                <div class="avatar">JP</div>
                <div>
                    <div class="guest-name">João Pereira</div>
                    <div class="guest-contact">joao.pereira@email.com</div>
                </div>
            </div>
            <div class="card-footer">
                <div class="status-text pending">Pendente</div>
                <div class="card-actions">
                    <button class="icon-btn" title="Editar">✎</button>
                    <button class="icon-btn" title="Remover">✕</button>
                </div>
            </div>
        </div>

        <div class="guest-card card-enter" data-status="confirmed" data-name="mariana costa">
            <div class="seal confirmed">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                    stroke-linecap="round">
                    <path d="M20 6L9 17l-5-5" />
                </svg>
            </div>
            <div class="card-top">
                <div class="avatar">MC</div>
                <div>
                    <div class="guest-name">Mariana Costa</div>
                    <div class="guest-contact">mariana.costa@email.com</div>
                </div>
            </div>
            <div class="card-footer">
                <div class="status-text confirmed">Confirmado</div>
                <div class="card-actions">
                    <button class="icon-btn" title="Editar">✎</button>
                    <button class="icon-btn" title="Remover">✕</button>
                </div>
            </div>
        </div>

        <div class="guest-card card-enter" data-status="declined" data-name="ricardo santos">
            <div class="seal declined">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                    stroke-linecap="round">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
            </div>
            <div class="card-top">
                <div class="avatar">RS</div>
                <div>
                    <div class="guest-name">Ricardo Santos</div>
                    <div class="guest-contact">Sem email</div>
                </div>
            </div>
            <div class="card-footer">
                <div class="status-text declined">Recusado</div>
                <div class="card-actions">
                    <button class="icon-btn" title="Editar">✎</button>
                    <button class="icon-btn" title="Remover">✕</button>
                </div>
            </div>
        </div>

        <div class="guest-card card-enter" data-status="pending" data-name="beatriz oliveira">
            <div class="seal pending">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M12 7v5l3 3" />
                </svg>
            </div>
            <div class="card-top">
                <div class="avatar">BO</div>
                <div>
                    <div class="guest-name">Beatriz Oliveira</div>
                    <div class="guest-contact">beatriz.oliveira@email.com</div>
                </div>
            </div>
            <div class="card-footer">
                <div class="status-text pending">Pendente</div>
                <div class="card-actions">
                    <button class="icon-btn" title="Editar">✎</button>
                    <button class="icon-btn" title="Remover">✕</button>
                </div>
            </div>
        </div>

        <div class="guest-card card-enter" data-status="confirmed" data-name="tiago fernandes">
            <div class="seal confirmed">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                    stroke-linecap="round">
                    <path d="M20 6L9 17l-5-5" />
                </svg>
            </div>
            <div class="card-top">
                <div class="avatar">TF</div>
                <div>
                    <div class="guest-name">Tiago Fernandes</div>
                    <div class="guest-contact">tiago.fernandes@email.com</div>
                </div>
            </div>
            <div class="card-footer">
                <div class="status-text confirmed">Confirmado</div>
                <div class="card-actions">
                    <button class="icon-btn" title="Editar">✎</button>
                    <button class="icon-btn" title="Remover">✕</button>
                </div>
            </div>
        </div>

        {{-- ============================================= --}}
        {{-- FIM do bloco a substituir por @foreach --}}
        {{-- ============================================= --}}

    </div>

@endsection

@section('scripts')
    <script>
        let currentFilter = 'all';
        let currentView = 'grid';

        function render() {
            const search = document.getElementById('searchInput').value.toLowerCase();
            const cards = document.querySelectorAll('#guestGrid .guest-card');
            let visibleCount = 0;

            cards.forEach(card => {
                const status = card.dataset.status;
                const name = card.dataset.name;

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

        function openModal() {
            alert('Modal de adicionar convidado — a implementar depois');
        }
    </script>
@endsection
