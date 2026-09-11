<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wedding Planning')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Manrope:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- CSS compilado (Tailwind via Vite) -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">





    <!-- Ou, se não usares Vite e tiveres o CSS diretamente em public/css -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
</head>

<body class="bg-[#FAF9F6] text-stone-800" style="font-family: 'Manrope', sans-serif;">

    <div class="app">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="brand-mark">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="14" r="6" />
                    <circle cx="15" cy="14" r="6" />
                </svg>
                <div class="brand">Margarida &amp; David</div>
            </div>
            <div class="brand-sub">8 Maio 2027</div>

            {{-- <div class="nav-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 11l9-8 9 8" />
                    <path d="M5 10v10h14V10" />
                    <path d="M9 20v-6h6v6" />
                </svg>Início</div> --}}
            <a href="{{ route('guests') }}" style="text-decoration: none">
                <div class="nav-link active"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="8" r="3" />
                        <path d="M2 20c0-3.3 3.1-6 7-6s7 2.7 7 6" />
                        <circle cx="17" cy="9" r="2.5" />
                        <path d="M23 20c0-2.6-2-4.8-4.7-5.6" />
                    </svg>Convidados</div>
            </a>



            {{-- <div class="nav-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 8h18M5 8v10M19 8v10M3 8l2-4h14l2 4" />
                </svg>Mesas</div>
            <div class="nav-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="6" width="20" height="14" rx="2" />
                    <path d="M2 10h20" />
                    <circle cx="17" cy="14" r="1.3" fill="currentColor" stroke="none" />
                </svg>Orçamento</div>
            <div class="nav-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3" />
                    <path
                        d="M19.4 15a1.7 1.7 0 00.3 1.9l.1.1a2 2 0 11-2.8 2.8l-.1-.1a1.7 1.7 0 00-1.9-.3 1.7 1.7 0 00-1 1.5V21a2 2 0 11-4 0v-.1a1.7 1.7 0 00-1-1.6 1.7 1.7 0 00-1.9.3l-.1.1a2 2 0 11-2.8-2.8l.1-.1a1.7 1.7 0 00.3-1.9 1.7 1.7 0 00-1.5-1H3a2 2 0 110-4h.1a1.7 1.7 0 001.6-1 1.7 1.7 0 00-.3-1.9l-.1-.1a2 2 0 112.8-2.8l.1.1a1.7 1.7 0 001.9.3H9a1.7 1.7 0 001-1.5V3a2 2 0 114 0v.1a1.7 1.7 0 001 1.5 1.7 1.7 0 001.9-.3l.1-.1a2 2 0 112.8 2.8l-.1.1a1.7 1.7 0 00-.3 1.9V9a1.7 1.7 0 001.5 1H21a2 2 0 110 4h-.1a1.7 1.7 0 00-1.5 1z" />
                </svg>Definições</div> --}}

                <div style="margin-top: auto;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="nav-link"
                    style="width: 100%; border: none; background: none; cursor: pointer; text-align: left;">

                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" y1="12" x2="9" y2="12" />
                    </svg>

                    Logout
                </button>
            </form>
        </div>
        </div>

        

        <!-- Mobile menu overlay -->
        <div class="wp-menu-overlay" id="wpMenuOverlay" onclick="closeMobileMenu()"></div>

        <!-- Conteúdo principal -->
        <div class="content">

            <main class="main">
                @yield('content')
            </main>

        </div>
    </div>

    <!-- JS -->
    {{-- <script src="{{ asset('build/assets/app.js') }}"></script> --}}

    <!-- Alpine.js (se não vier já dentro do app.js compilado) -->
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

    @yield('scripts')

</body>

</html>
