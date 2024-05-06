<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item"><a class="nav-link {{ $page == 'profile' ? 'active' : ''}}" href="{{ route('settings.profile') }}"><i class="bx bx-user me-1"></i> {{ __("Profile") }}</a></li>
    <li class="nav-item"><a class="nav-link {{ $page == 'security' ? 'active' : ''}}" href="{{ route('settings.security') }}"><i class="bx bx-lock-alt me-1"></i> {{ __("Security") }}</a></li>
    <li class="nav-item"><a class="nav-link {{ $page == 'notification' ? 'active' : ''}}" href="{{ route('settings.notification') }}"><i class="bx bx-bell me-1"></i> {{ __("Notifications") }}</a></li>
</ul>
