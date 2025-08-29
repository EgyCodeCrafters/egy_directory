@extends('layouts.app')

<div class="container">
    @section('content')
        <div class="row">
            <p class="lead">خدمة مجانية لتسهيل الوصول لأصحاب المهن وأرباب الحرف.</p>
        </div>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-3 mb-3">
                    <div class="card bg-light mb-3">
                        <a href="{{ url('category', $category->id) }}" class="text-decoration-none text-dark">
                            <div class="card-header">
                                <h5 class="card-title mb-0 d-flex justify-content-between align-items-center">
                                    {{ $category->name }}
{{--                                    <span class="float-start">--}}
{{--            <a class="btn btn-sm btn-info" href="#add">--}}
{{--                اضافة--}}
{{--            </a>--}}
{{--        </span>--}}
                                </h5>
                            </div>

                        </a>
                        @if ($category->subCategories->count())
                            <div class="card-body">

                                <div class="d-flex flex-wrap gap-2">
                                    @foreach ($category->subCategories as $subCategory)
                                        <a href="{{ url('category',[
    'category_id'=>$category->id,
    'sub_category_id'=>$subCategory->id,
]) }}"
                                            class="badge bg-secondary text-decoration-none text-white">
                                            {{ $subCategory->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
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
