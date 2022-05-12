<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            
            <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            @if(auth()->user()->rights==1)
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse1"
                aria-expanded="false" aria-controls="collapse1">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Clientsdomains
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <div class="collapse" id="collapse1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('clientsdomains.index')}}">Manage</a>
                    <a class="nav-link" href="{{route('clientsdomains.create')}}">Add clientsdomains</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse2"
                aria-expanded="false" aria-controls="collapse2">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Domains
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <div class="collapse" id="collapse2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('domains.index')}}">Manage</a>
                    <a class="nav-link" href="{{route('domains.create')}}">Add domains</a>
                    <a class="nav-link" href="{{route('domains.show')}}">All data</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse3"
                aria-expanded="false" aria-controls="collapse3">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Clientshostings
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <div class="collapse" id="collapse3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('hostings.index')}}">Manage</a>
                    <a class="nav-link" href="{{route('hostings.create')}}">Add hostings</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse4"
                aria-expanded="false" aria-controls="collapse4">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Packages
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <div class="collapse" id="collapse4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('packages.index')}}">Manage</a>
                    <a class="nav-link" href="{{route('packages.create')}}">Add package</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse5"
                aria-expanded="false" aria-controls="collapse5">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Users
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <div class="collapse" id="collapse5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('users.index')}}">Manage</a>
                    <a class="nav-link" href="{{route('users.create')}}">Add user</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse6"
                aria-expanded="false" aria-controls="collapse6">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Reports
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <div class="collapse" id="collapse6" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    
                </nav>
            </div>
            @else
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse1"
                aria-expanded="false" aria-controls="collapse1">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Clientsdomains
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <div class="collapse" id="collapse1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('clientsdomains.listings','Getuserid($id)')}}">List</a>

                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse3"
                aria-expanded="false" aria-controls="collapse3">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Clientshostings
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <div class="collapse" id="collapse3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('hostings.index')}}">Manage</a>
                    
                </nav>
            </div>
            @endif
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>