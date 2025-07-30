@extends('layouts.app')

<div class="container">
    @section('content')
        <div class="row">
            <div class="jumbotron">


                <a target="_blank"
                    href="https://www.islamweb.net/ar/article/37855/%D9%8A%D8%A7-%D8%B9%D8%A8%D8%A7%D8%AF%D9%8A-%D8%A5%D9%86%D9%8A-%D8%AD%D8%B1%D9%85%D8%AA-%D8%A7%D9%84%D8%B8%D9%84%D9%85-%D8%B9%D9%84%D9%89-%D9%86%D9%81%D8%B3%D9%8A">
                    <p>يا عبادي : إنّي حرّمت الظلم على نفسي ، وجعـلته بيـنكم محرما ؛ فلا تـظـالـمـوا</p>
                </a>
                <h1 class="display-6">أهلا بكم في دليل المنصورية</h1>
                <p class="lead">خدمة مجانية لتسهيل الوصول لأصحاب المهن وأرباب الحرف.</p>

            </div>
        </div>



        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-3 mb-3">
                    <div class="card bg-light mb-3">
                        <a href="{{ url('category', $category->id) }}">
                            <div class="card-header">
                                <h5 class="card-title">
                                    {{ $category->name }}
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $category->description }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="row">
            <section class=" bg-info text-white text-center py-5  mb-5">
                <div class="container">
                    <h2 class="fw-bold text-white">حمّل تطبيق دليل المنصورية الآن! 📱</h2>
                    <p class="lead mt-3">أسهل طريقة للوصول إلى أرقام وأعمال المنصورية بين يديك! حمل التطبيق الآن واستمتع
                        بتجربة سلسة وسريعة.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.mokhalid.home_service">

                        <div class="btn btn-primary">
                            <i class="fab fa-google-play"></i> تحميل من Google Play
                        </div>


                    </a>

                </div>
            </section>
        </div>


        <div class="row">
            <div class="col-md-12">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/3uW3WMcE08w?si=-ubVW7vB_g-WvvPy"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    @endsection
</div>
