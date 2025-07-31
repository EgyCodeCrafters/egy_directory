<!doctype html>

<html lang="ar" dir="rtl">

<head>
    @include('partials.head')
</head>

<body>

    <div class="container">


        @include('partials.nav')

        <div class="row">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')

        </div>


        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">


            @include('partials.footer')

            @stack('scripts')

        </footer>

    </div>

</body>

</html>
