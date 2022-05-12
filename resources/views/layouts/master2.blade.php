
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head-css')
    </head>
    <body class="sb-nav-fixed">
        @include('partials.top')
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('partials.sidebar2')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        @yield('content')
                        
                    </div>
                </main>
                @include('partials.footer2')
            </div>
        </div>
        @include('partials.footer-js')
    </body>
</html>
