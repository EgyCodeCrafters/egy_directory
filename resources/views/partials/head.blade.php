<meta charset="utf-8">
<!-- load bootstrap from a cdn -->
<meta name="viewport" content="width=device-width, initial-scale=1">


@hasSection('head')
    @yield('head')
@else
    <title>دليل المنصورية</title>
    <meta property="og:title" content="دليل المنصورية">
@endif

<meta property="og:description" content="خدمة مجانية لتسهيل الوصول لأصحاب المهن وأرباب الحرف.">
<meta name="description" content="خدمة مجانية لتسهيل الوصول لأصحاب المهن وأرباب الحرف.">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

<!-- Bootswatch theme -->
<link href="https://bootswatch.com/5/sketchy/bootstrap.rtl.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<style>
    body {
        font-size: larger;
        font-family: "Amiri", serif !important;

    }

    h1, h2 {
        color: #009ca1;
    }

    a {
        text-decoration: none;
    }

    .card {
        transition: background-color 0.3s ease; /* Transition property for a smooth color change */
    }

    .card a {
        color: #333;
    }

    .card a:hover {
        color: #009ca1;
    }

    .card:hover {
        background-color: #eee; /* Change this to your desired primary color */
    }


    .jumbotron {

        margin: 2em 0;

    }

    .a2a_kit {
        text-align: left;
        font-size: smaller;
    }
</style>
