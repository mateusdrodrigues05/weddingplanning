
{{-- This file is used for menu items by any Backpack v7 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>{{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('log') }}">
        <i class="la la-terminal nav-icon"></i> Logs
    </a>
</li>

<x-backpack::menu-item title="Guests" icon="la la-question" :link="backpack_url('guest')" />





