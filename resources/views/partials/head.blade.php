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
<link href="https://bootswatch.com/5/brite/bootstrap.rtl.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Cairo&family=Karla:ital,wght@1,300&family=Noto+Kufi+Arabic:wght@600&display=swap"
    rel="stylesheet">


@vite('resources/css/app.css')
