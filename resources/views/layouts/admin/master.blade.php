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

    <header class="navbar navbar-expand-md d-print-none">
        <div class="container-xl" bis_skin_checked="1">
            <!-- BEGIN NAVBAR TOGGLER -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle primary navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- END NAVBAR TOGGLER -->

            <!-- BEGIN NAVBAR LOGO -->
            <div class="navbar-brand navbar-brand-autodark pe-0 pe-md-3" bis_skin_checked="1">
                <a href="." aria-label="Tabler">
                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="32" viewBox="0 0 232 68"
                        class="navbar-brand-image">
                        <path
                            d="M64.6 16.2C63 9.9 58.1 5 51.8 3.4 40 1.5 28 1.5 16.2 3.4 9.9 5 5 9.9 3.4 16.2 1.5 28 1.5 40 3.4 51.8 5 58.1 9.9 63 16.2 64.6c11.8 1.9 23.8 1.9 35.6 0C58.1 63 63 58.1 64.6 51.8c1.9-11.8 1.9-23.8 0-35.6zM33.3 36.3c-2.8 4.4-6.6 8.2-11.1 11-1.5.9-3.3.9-4.8.1s-2.4-2.3-2.5-4c0-1.7.9-3.3 2.4-4.1 2.3-1.4 4.4-3.2 6.1-5.3-1.8-2.1-3.8-3.8-6.1-5.3-2.3-1.3-3-4.2-1.7-6.4s4.3-2.9 6.5-1.6c4.5 2.8 8.2 6.5 11.1 10.9 1 1.4 1 3.3.1 4.7zM49.2 46H37.8c-2.1 0-3.8-1-3.8-3s1.7-3 3.8-3h11.4c2.1 0 3.8 1 3.8 3s-1.7 3-3.8 3z"
                            fill="#066fd1" style="fill: var(--tblr-navbar-logo-color, var(--tblr-primary, #066fd1))">
                        </path>
                        <path
                            d="M105.8 46.1c.4 0 .9.2 1.2.6s.6 1 .6 1.7c0 .9-.5 1.6-1.4 2.2s-2 .9-3.2.9c-2 0-3.7-.4-5-1.3s-2-2.6-2-5.4V31.6h-2.2c-.8 0-1.4-.3-1.9-.8s-.9-1.1-.9-1.9c0-.7.3-1.4.8-1.8s1.2-.7 1.9-.7h2.2v-3.1c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v3.1h3.4c.8 0 1.4.3 1.9.8s.8 1.2.8 1.9-.3 1.4-.8 1.8-1.2.7-1.9.7h-3.4v13c0 .7.2 1.2.5 1.5s.8.5 1.4.5c.3 0 .6-.1 1.1-.2.5-.2.8-.3 1.2-.3zm28-20.7c.8 0 1.5.3 2.1.8.5.5.8 1.2.8 2.1v20.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2-.8-.8-1.2-.8-2.1c-.8.9-1.9 1.7-3.2 2.4-1.3.7-2.8 1-4.3 1-2.2 0-4.2-.6-6-1.7-1.8-1.1-3.2-2.7-4.2-4.7s-1.6-4.3-1.6-6.9c0-2.6.5-4.9 1.5-6.9s2.4-3.6 4.2-4.8c1.8-1.1 3.7-1.7 5.9-1.7 1.5 0 3 .3 4.3.8 1.3.6 2.5 1.3 3.4 2.1 0-.8.3-1.5.8-2.1.5-.5 1.2-.7 2-.7zm-9.7 21.3c2.1 0 3.8-.8 5.1-2.3s2-3.4 2-5.7-.7-4.2-2-5.8c-1.3-1.5-3-2.3-5.1-2.3-2 0-3.7.8-5 2.3-1.3 1.5-2 3.5-2 5.8s.6 4.2 1.9 5.7 3 2.3 5.1 2.3zm32.1-21.3c2.2 0 4.2.6 6 1.7 1.8 1.1 3.2 2.7 4.2 4.7s1.6 4.3 1.6 6.9-.5 4.9-1.5 6.9-2.4 3.6-4.2 4.8c-1.8 1.1-3.7 1.7-5.9 1.7-1.5 0-3-.3-4.3-.9s-2.5-1.4-3.4-2.3v.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.5-.8-1.2-.8-2.1V18.9c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v10c.8-1 1.8-1.8 3.2-2.5 1.3-.7 2.8-1 4.3-1zm-.7 21.3c2 0 3.7-.8 5-2.3s2-3.5 2-5.8-.6-4.2-1.9-5.7-3-2.3-5.1-2.3-3.8.8-5.1 2.3-2 3.4-2 5.7.7 4.2 2 5.8c1.3 1.6 3 2.3 5.1 2.3zm23.6 1.9c0 .8-.3 1.5-.8 2.1s-1.3.8-2.1.8-1.5-.3-2-.8-.8-1.3-.8-2.1V18.9c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v29.7zm29.3-10.5c0 .8-.3 1.4-.9 1.9-.6.5-1.2.7-2 .7h-15.8c.4 1.9 1.3 3.4 2.6 4.4 1.4 1.1 2.9 1.6 4.7 1.6 1.3 0 2.3-.1 3.1-.4.7-.2 1.3-.5 1.8-.8.4-.3.7-.5.9-.6.6-.3 1.1-.4 1.6-.4.7 0 1.2.2 1.7.7s.7 1 .7 1.7c0 .9-.4 1.6-1.3 2.4-.9.7-2.1 1.4-3.6 1.9s-3 .8-4.6.8c-2.7 0-5-.6-7-1.7s-3.5-2.7-4.6-4.6-1.6-4.2-1.6-6.6c0-2.8.6-5.2 1.7-7.2s2.7-3.7 4.6-4.8 3.9-1.7 6-1.7 4.1.6 6 1.7 3.4 2.7 4.5 4.7c.9 1.9 1.5 4.1 1.5 6.3zm-12.2-7.5c-3.7 0-5.9 1.7-6.6 5.2h12.6v-.3c-.1-1.3-.8-2.5-2-3.5s-2.5-1.4-4-1.4zm30.3-5.2c1 0 1.8.3 2.4.8.7.5 1 1.2 1 1.9 0 1-.3 1.7-.8 2.2-.5.5-1.1.8-1.8.7-.5 0-1-.1-1.6-.3-.2-.1-.4-.1-.6-.2-.4-.1-.7-.1-1.1-.1-.8 0-1.6.3-2.4.8s-1.4 1.3-1.9 2.3-.7 2.3-.7 3.7v11.4c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.6-.8-1.3-.8-2.1V28.8c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v.6c.7-1.3 1.8-2.3 3.2-3 1.3-.7 2.8-1 4.3-1z"
                            fill-rule="evenodd" clip-rule="evenodd" fill="#4a4a4a"
                            style="fill: var(--tblr-navbar-logo-color, #4a4a4a)"></path>
                    </svg>
                </a>
            </div>
            <!-- END NAVBAR LOGO -->

            <!-- BEGIN NAVBAR ACTIONS -->
            <div class="navbar-nav flex-row order-md-last" bis_skin_checked="1">
                <div class="d-none d-md-flex me-3" bis_skin_checked="1">
                    <!-- BEGIN NOTIFICATIONS -->
                    <div class="nav-item dropdown d-none d-md-flex" bis_skin_checked="1">
                        <a href="#" class="nav-link px-0" data-bs-toggle="dropdown"
                            aria-label="Show notifications" data-bs-auto-close="outside" aria-expanded="false">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"
                                class="icon">
                                <path
                                    d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                                </path>
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                            </svg>
                            <span class="badge bg-red"></span>
                        </a>
                        <!-- BEGIN NAVBAR NOTIFICATIONS -->
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card"
                            bis_skin_checked="1">
                            <div class="card" bis_skin_checked="1">
                                <div class="card-header d-flex" bis_skin_checked="1">
                                    <h2 class="card-title">Notifications</h2>
                                    <button type="button" class="btn-close ms-auto"
                                        data-navbar-notifications-close="" aria-label="Close"></button>
                                </div>
                                <div class="list-group list-group-flush list-group-hoverable" bis_skin_checked="1">
                                    <div class="list-group-item" bis_skin_checked="1">
                                        <div class="row align-items-center" bis_skin_checked="1">
                                            <div class="col-auto" bis_skin_checked="1">
                                                <span class="status-dot status-dot-animated bg-red d-block"><span
                                                        class="visually-hidden">Unread</span></span>
                                            </div>
                                            <div class="col text-truncate" bis_skin_checked="1">
                                                <a href="#" class="text-body d-block">Example 1</a>
                                                <div class="d-block text-secondary text-truncate mt-n1"
                                                    bis_skin_checked="1">Change deprecated html tags to text decoration
                                                    classes (#29604)</div>
                                            </div>
                                            <div class="col-auto" bis_skin_checked="1">
                                                <a href="#" class="list-group-item-actions"
                                                    aria-label="Add to favorites">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" aria-hidden="true" focusable="false"
                                                        class="icon text-muted">
                                                        <path
                                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item" bis_skin_checked="1">
                                        <div class="row align-items-center" bis_skin_checked="1">
                                            <div class="col-auto" bis_skin_checked="1">
                                                <span class="status-dot d-block"><span
                                                        class="visually-hidden">Read</span></span>
                                            </div>
                                            <div class="col text-truncate" bis_skin_checked="1">
                                                <a href="#" class="text-body d-block">Example 2</a>
                                                <div class="d-block text-secondary text-truncate mt-n1"
                                                    bis_skin_checked="1">justify-content:between ⇒
                                                    justify-content:space-between (#29734)</div>
                                            </div>
                                            <div class="col-auto" bis_skin_checked="1">
                                                <a href="#" class="list-group-item-actions show"
                                                    aria-label="Remove from favorites">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" aria-hidden="true" focusable="false"
                                                        class="icon text-yellow">
                                                        <path
                                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item" bis_skin_checked="1">
                                        <div class="row align-items-center" bis_skin_checked="1">
                                            <div class="col-auto" bis_skin_checked="1">
                                                <span class="status-dot d-block"><span
                                                        class="visually-hidden">Read</span></span>
                                            </div>
                                            <div class="col text-truncate" bis_skin_checked="1">
                                                <a href="#" class="text-body d-block">Example 3</a>
                                                <div class="d-block text-secondary text-truncate mt-n1"
                                                    bis_skin_checked="1">Update change-version.js (#29736)</div>
                                            </div>
                                            <div class="col-auto" bis_skin_checked="1">
                                                <a href="#" class="list-group-item-actions"
                                                    aria-label="Add to favorites">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" aria-hidden="true" focusable="false"
                                                        class="icon text-muted">
                                                        <path
                                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item" bis_skin_checked="1">
                                        <div class="row align-items-center" bis_skin_checked="1">
                                            <div class="col-auto" bis_skin_checked="1">
                                                <span class="status-dot status-dot-animated bg-green d-block"><span
                                                        class="visually-hidden">Unread</span></span>
                                            </div>
                                            <div class="col text-truncate" bis_skin_checked="1">
                                                <a href="#" class="text-body d-block">Example 4</a>
                                                <div class="d-block text-secondary text-truncate mt-n1"
                                                    bis_skin_checked="1">Regenerate package-lock.json (#29730)</div>
                                            </div>
                                            <div class="col-auto" bis_skin_checked="1">
                                                <a href="#" class="list-group-item-actions"
                                                    aria-label="Add to favorites">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" aria-hidden="true" focusable="false"
                                                        class="icon text-muted">
                                                        <path
                                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" bis_skin_checked="1">
                                    <div class="row" bis_skin_checked="1">
                                        <div class="col" bis_skin_checked="1"><button type="button"
                                                class="btn w-100">Archive all</button></div>
                                        <div class="col" bis_skin_checked="1"><button type="button"
                                                class="btn w-100">Mark all as read</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END NAVBAR NOTIFICATIONS -->
                    </div>

                    <!-- END NOTIFICATIONS -->
                </div>

                <!-- BEGIN USER MENU -->
                <div class="nav-item dropdown" bis_skin_checked="1">
                    <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown"
                        aria-label="Open user menu">
                        <span style="background-image: url(./static/avatars/000m.jpg)"
                            class="avatar avatar-sm"></span>
                        <div class="d-none d-xl-block ps-2" bis_skin_checked="1">
                            <div bis_skin_checked="1">Paweł Kuna</div>
                            <div class="mt-1 small text-secondary" bis_skin_checked="1">UI Designer</div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" bis_skin_checked="1">
                        <a class="dropdown-item"
                            href="./profile.html"><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
                                focusable="false" class="icon dropdown-item-icon">
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            </svg>
                            Profile</a>
                        <a class="dropdown-item"
                            href="#"><!-- Download SVG icon from http://tabler.io/icons/icon/chart-pie -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
                                focusable="false" class="icon dropdown-item-icon">
                                <path
                                    d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a.9 .9 0 0 0 -1 -.8">
                                </path>
                                <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5"></path>
                            </svg>
                            Analytics</a>
                        <div class="dropdown-divider" bis_skin_checked="1"></div>
                        <a class="dropdown-item" href="./settings.html">Settings &amp; Privacy</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <a class="dropdown-item" href="./sign-in.html">Sign out</a>
                    </div>
                </div>
                <!-- END USER MENU -->
            </div>
            <!-- END NAVBAR ACTIONS -->
        </div>
    </header>

    <!-- Conteúdo principal -->
    <div class="content">

        <main class="main">
            @yield('content')
        </main>

    </div>

    <!-- JS -->
    {{-- <script src="{{ asset('build/assets/app.js') }}"></script> --}}

    <!-- Alpine.js (se não vier já dentro do app.js compilado) -->
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

    @yield('scripts')

</body>

</html>
