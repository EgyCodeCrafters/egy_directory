<!doctype html>

<html lang="ar" dir="rtl">

<head>

    @include('includes.head')

</head>

<body>

<div class="container">


    @include('includes.nav')



    <div class="row">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </div>


    <footer class="row">

        @include('includes.footer')

    </footer>

</div>

</body>

</html>
