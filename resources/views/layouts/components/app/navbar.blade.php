<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
            <li class="nav-item">
                {{-- <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                    <i class="ti ti-bell-ringing"></i>
                    <div class="notification bg-primary rounded-circle"></div>
                </a> --}}
                {{-- if this user login is pengembang and not yet verified show this text  --}}
                @php
                    if (auth()->user()->hasRole('Pengembang') && auth()->user()->dataPengembang->is_verified == 0) {
                        echo '<span class="badge text-bg-danger typewriter">Data Anda sedang ditinjau</span>';
                    }
                @endphp
                {{-- <span class="badge text-bg-danger typewriter">Data Anda sedang ditinjau</span> --}}
            </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                {{-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank"
                    class="btn btn-primary">Download Free</a> --}}
                <h6>{{ auth()->user()->name }}</h6>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="" width="35"
                            height="35" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="{{ route('page.user.myprofile') }}"
                                class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-user fs-6"></i>
                                <p class="mb-0 fs-3">My Profile</p>
                            </a>

                            {{-- ---------------------------- Logout Action --------------------------- --}}
                            <a href="{{ route('logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            {{-- ---------------------------- Logout Action --------------------------- --}}

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
