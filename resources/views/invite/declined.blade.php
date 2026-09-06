<!-- pending.blade.php -->
<link rel="stylesheet" href="/css/declined.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<div class="wp-pending-page">
    <div class="wp-pending-card">

        <div class="wp-pending-icon">
            <i class="fa-regular fa-bell"></i>
        </div>

        <h1 class="wp-pending-title">Ainda não respondeste ao nosso convite</h1>
        <p class="wp-pending-subtitle">
            Se foi esquecimento, sem problema! Contacta os noivos para confirmares a tua presença.
        </p>

        <div class="wp-pending-names">
            Margarida &amp; David
        </div>

        <div class="wp-pending-divider">
            <span></span>
            <i class="fa-solid fa-gem"></i>
            <span></span>
        </div>

        <div class="wp-pending-message">
            <p>
                O teu lugar está reservado, mas ainda não temos a tua confirmação.
            </p>
        </div>

        <div class="wp-pending-guest">
            <span class="wp-detail-label">Convite para</span>
            <p class="wp-pending-guest-name">{{ $guest->name }}</p>
        </div>

        <a href="tel:{{ $wedding->contact_phone ?? '#' }}" class="wp-pending-btn">
            <i class="fa-solid fa-phone"></i> Contactar os noivos
        </a>

        <p class="wp-pending-footer">
            Preferes falar diretamente? Contacta os noivos pelo número acima.
        </p>

    </div>
</div>