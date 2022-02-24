<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @if (Auth()->user()->role == 1)
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ ($title==='Dashboard')? 'active': '' }}" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                @endif
                
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="/category">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Kategori
                </a>
                <a class="nav-link" href="/book">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Buku
                </a>
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