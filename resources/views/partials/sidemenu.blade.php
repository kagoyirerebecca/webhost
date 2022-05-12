<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            
            <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            
            <div>
                <p>
                    <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Clientsdomains
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                      <a href="{{route('clientsdomains.index')}}"> Manage</a>
                      <a href="{{route('clientsdomains.create')}}"> Add clientsdomains</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>