<link rel="stylesheet" href="{{ asset('css/confirmed.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- confirmed.blade.php -->
<div class="wp-confirmed-page">
    <div class="wp-confirmed-card" id="rsvpSuccess">

        <div class="wp-confirmed-icon">
            <i class="fa-solid fa-heart"></i>
        </div>

        <h1 class="wp-confirmed-title">Presença Confirmada!</h1>
        <p class="wp-confirmed-subtitle">
            Estamos muito felizes que você vai celebrar conosco.
        </p>

        <div class="wp-confirmed-names">
            Margarida &amp; David
        </div>

        <div class="wp-confirmed-divider">
            <span></span>
            <i class="fa-solid fa-gem"></i>
            <span></span>
        </div>

        <div class="wp-confirmed-details">

            <div class="wp-detail-item">
                <div class="wp-detail-icon">
                    <i class="fa-regular fa-calendar"></i>
                </div>
                <div class="wp-detail-text">
                    <span class="wp-detail-label">Data</span>
                    <span class="wp-detail-value">8 Maio 2027</span>
                </div>
            </div>

            <div class="wp-detail-item">
                <div class="wp-detail-icon">
                    <i class="fa-regular fa-clock"></i>
                </div>
                <div class="wp-detail-text">
                    <span class="wp-detail-label">Horário</span>
                    <span class="wp-detail-value">12:00 — Cerimónia</span>
                </div>
            </div>

            <div class="wp-detail-item">
                <div class="wp-detail-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="wp-detail-text">
                    <span class="wp-detail-label">Local</span>
                    <span class="wp-detail-value">Sé Catedral de Beja</span>
                    <span class="wp-detail-subvalue">Beja</span>
                </div>
            </div>

            <div class="wp-detail-item">
                <div class="wp-detail-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="wp-detail-text">
                    <span class="wp-detail-label">Local</span>
                    <span class="wp-detail-value">Quinta dos Magalhães em Beringel</span>
                    <span class="wp-detail-subvalue">Beringel</span>
                </div>
            </div>

            <div class="wp-detail-item">
                <div class="wp-detail-icon">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                <div class="wp-detail-text">
                    <span class="wp-detail-label">Dress Code</span>
                    <span class="wp-detail-value">Nenhum</span>
                </div>
            </div>

        </div>

        <div class="wp-confirmed-guests">
            <span class="wp-detail-label">Confirmados</span>
            <p class="wp-confirmed-guest-names">
                {{ $guest->name }}
                @foreach($guest->companions as $companion)
                    , {{ $companion->name }}
                @endforeach
            </p>
        </div>

        <a href="https://maps.app.goo.gl/qny38v8Q6DSSuBeb8" target="_blank" class="wp-confirmed-btn">
            <i class="fa-solid fa-map-location-dot"></i> Ver no mapa
        </a>

        <p class="wp-confirmed-footer">
            Alguma dúvida ou precisa alterar algo? Entre em contacto connosco.
        </p>

    </div>
</div>