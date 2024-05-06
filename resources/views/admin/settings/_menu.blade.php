<!-- Navigation -->
<div class="col-12 col-lg-4">
    <div class="d-flex justify-content-between flex-column mb-3 mb-md-0">
        <ul class="nav nav-align-left nav-pills flex-column">
            <li class="nav-item mb-1">
                <a class="nav-link active" href="{{ route('admin.settings.index') }}">
                    <i class="bx bx-store me-2"></i>
                    <span class="align-middle">{{ __('admin-main.settings.menu.main') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.settings.notifications') }}">
                    <i class="bx bx-bell me-2"></i>
                    <span class="align-middle">{{ __('admin-main.settings.menu.notifications') }}</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /Navigation -->
