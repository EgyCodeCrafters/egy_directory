<!doctype html>

<html lang="ar" dir="rtl">

<head>
    @include('partials.head')
</head>

<body>

<div class="container">


    @include('partials.nav')

    <div class="row">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </div>


    <footer class="row">

        @include('partials.footer')

    </footer>

</div>

</body>

</html>
