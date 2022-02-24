<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ ($title==='Dashboard')? 'active': '' }}" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
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
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>