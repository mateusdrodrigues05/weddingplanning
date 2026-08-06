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
            @if(!empty($guest->email))
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

            

            @if(!empty($guest->phone))
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
            
            @if(!empty($guest->table_id))
                <div class="info-item">
                    <dt class="info-item__label">Mesa</dt>
                    <dd class="info-item__value" data-field="mesa">{{$guest->table_id}}</dd>
                </div>
            @else
                <div class="info-item">
                    <dt class="info-item__label">Mesa</dt>
                    <dd class="info-item__value" data-field="mesa">-</dd>
                </div>
            @endif
            

            @if(!empty($companions))
                <div class="info-item">
                    <dt class="info-item__label">Total de pessoas</dt>
                    <dd class="info-item__value" data-field="total-pessoas">{{ $companions }}</dd>
                </div>
            @else
                <div class="info-item">
                    <dt class="info-item__label">Não Traz Acompanhantes</dt>
                </div>
            @endif
            
        </dl>

        @if(!empty($guest->notes))
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


        @if(!empty($companions))
            <!-- Acompanhantes -->
            <div class="section-divider">
                <h2 class="section-title">Acompanhantes</h2>

                <ul class="companion-list" data-field="acompanhantes-lista">

                    <!-- Item: adulto -->
                    <li class="companion-item">
                        <div class="companion-item__left">
                            <span class="companion-avatar">A</span>
                            <span class="companion-item__name">Ana Pereira</span>
                        </div>
                        <span class="badge badge--adulto">Adulto</span>
                    </li>

                    <!-- Item: criança (com idade) -->
                    <li class="companion-item">
                        <div class="companion-item__left">
                            <span class="companion-avatar">T</span>
                            <span class="companion-item__name">Tomás Pereira</span>
                        </div>
                        <span class="badge badge--crianca">Criança · 6 anos</span>
                    </li>

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

    <!-- Rodapé / ações -->
    <div class="guest-card__footer">
        <button type="button" class="btn btn--outline-green" data-action="editar">Editar</button>
        <button type="button" class="btn btn--outline-clay" data-action="remover">Remover</button>
    </div>

@endsection

@section('scripts')
    <script>
        // Placeholder: substituir por integração real (fetch/form submit) conforme a tua lógica de backend.
        document.querySelector('[data-action="remover"]')?.addEventListener('click', () => {
            const confirmado = confirm('Tens a certeza que queres remover este convidado?');
            if (confirmado) {
                console.log('Remover convidado — ligar aqui à tua lógica.');
            }
        });

        document.querySelector('[data-action="editar"]')?.addEventListener('click', () => {
            console.log('Editar convidado — ligar aqui à tua lógica.');
        });

        function voltarConvidados(event) {
            event.preventDefault();

            if (document.referrer && document.referrer.includes(window.location.host)) {
                window.history.back();
            } else {
                window.location.href = '/convidados'; // fallback route
            }
        }
    </script>
@endsection
