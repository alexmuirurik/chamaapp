<aside class="sidebar rounded-end-2" id="sidebar-main">
    <div class="sidebar-head d-flex align-items-center ps-4">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand d-flex gap-1" href="{{ route('index') }}" target="_blank">
            <img src="{{asset('assets/img/logo-ct-dark.png')}}" class="bg-dark rounded-circle img-fluid" alt="main_logo" height="25" width="25">
            <span class="ms-1 fw-bold">{{config('app.name')}}</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="sidebar-body w-auto" id="sidenav-collapse-main">
        <ul class="nav navbar-nav">
            <li class="nav-item ps-4 py-2 mb-1 {{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
                <a class="nav-link d-flex" href="{{ route('index') }}" wire:navigate>
                    <div class="icon">
                        <i class="fa-solid fa-home"></i>
                    </div>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item ps-4 py-2 mb-1 {{ Route::currentRouteName() == 'members.index' ? 'active' : '' }}">
                <a class="nav-link d-flex" href="{{ route('members.index') }}" wire:navigate>
                    <div class="icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <span class="nav-link-text">Members</span>
                </a>
            </li>
            <li class="nav-item ps-4 py-2 mb-1{{ str_contains(request()->url(), 'meetings') == true ? 'active' : '' }}">
                <a class="nav-link d-flex " href="{{ route('meetings.index') }}" wire:navigate>
                    <div class="icon">
                        <i class="fa-solid fa-calendar"></i>
                    </div>
                    <span class="nav-link-text">Meetings</span>
                </a>
            </li>
            <li class="nav-item ps-4 py-2 mb-1 {{ str_contains(request()->url(), 'deposits') == true ? 'active' : '' }}">
                <a class="nav-link d-flex" href="{{ route('deposits.index') }}" wire:navigate>
                    <div class="icon">
                        <i class="fa-solid fa-piggy-bank"></i>
                    </div>
                    <span class="nav-link-text">Deposits</span>
                </a>
            </li>
            <li class="nav-item ps-4 py-2 mb-1 {{ str_contains(request()->url(), 'loans') == true ? 'active' : '' }}">
                <a class="nav-link d-flex" href="{{ route('loans.index') }}" wire:navigate>
                    <div class="icon">
                        <i class="fa-brands fa-leanpub"></i>
                    </div>
                    <span class="nav-link-text">Loans</span>
                </a>
            </li>
            <li class="nav-item ps-4 py-2 mb-1 {{ Route::currentRouteName() == 'shares' ? 'active' : '' }}">
                <a class="nav-link d-flex" href="{{ route('shares.index') }}" wire:navigate>
                    <div class="icon">
                        <i class="fa-solid fa-drum-steelpan"></i>
                    </div>
                    <span class="nav-link-text">Shares</span>
                </a>
            </li>
            <hr class="horizontal dark my-2"></hr>
            <li class="nav-item ps-4 py-2 mb-1 {{ Route::currentRouteName() == 'chama' ? 'active' : '' }}">
                <a class="nav-link d-flex" href="{{ route('chama.index') }}" wire:navigate>
                    <div class="icon">
                        <i class="fa-solid fa-group-arrows-rotate"></i>
                    </div>
                    <span class="nav-link-text">Chamas</span>
                </a>
            </li>
            <li class="nav-item ps-4 py-2 mb-1 {{ Route::currentRouteName() == 'mem' ? 'active' : '' }}">
                <a class="nav-link d-flex" href="{{ route('members.index') }}" wire:navigate>
                    <div class="icon">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                    <span class="nav-link-text">Billing</span>
                </a>
            </li>
            <li class="nav-item ps-4 py-2 mb-1 {{ Route::currentRouteName() == 'settings' ? 'active' : '' }}">
                <a class="nav-link d-flex" href="{{ route('deposits.index') }}" wire:navigate>
                    <div class="icon">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <span class="nav-link-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-50 mx-auto" src="/img/illustrations/icon-documentation-warning.svg"
                alt="sidebar_illustration">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <h6 class="mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
                </div>
            </div>
        </div>
        <a href="/docs/bootstrap/overview/argon-dashboard/index.html" target="_blank"
            class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
        <a class="btn btn-primary btn-sm mb-0 w-100"
            href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank" type="button">Upgrade to PRO</a>
    </div>
</aside>
