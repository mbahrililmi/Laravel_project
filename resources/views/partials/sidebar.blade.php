<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @if (Auth()->user()->role == 1)
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ ($title==='Dashboard')? 'active': '' }}" href="{{ route('admin') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link {{ ($title==='Kategori Buku')? 'active': '' }}" href="{{ route('admin.category') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Kategori
                </a>
                <a class="nav-link {{ ($title==='Buku')? 'active': '' }}" href="{{ route('admin.book') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Buku
                </a>
                @endif
                @if (Auth()->user()->role == 0)
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link {{ ($title==='Kategori Buku')? 'active': '' }}" href="{{ route('member.category') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Kategori
                </a>
                <a class="nav-link {{ ($title==='Buku')? 'active': '' }}" href="{{ route('member.book') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Buku
                </a>
                @endif
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">
                @if (Auth()->user()->role == 0)
                Logged in as: Member
                @endif
                @if (Auth()->user()->role == 1)
                Logged in as: Admin
                @endif
            </div>
            {{ auth()->user()->username }}
        </div>
    </nav>
</div>