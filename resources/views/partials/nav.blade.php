<nav class="row  mb-4 navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">دليل المنصورية</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">




                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        التصنيفات
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                            @if ($category->subcategories->count())
                                <li class="dropdown-submenu position-relative">
                                    <a class="dropdown-item dropdown-toggle" href="#">
                                        {{ $category->name }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach ($category->subcategories as $subcategory)
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url("sub-category/$subcategory->id") }}">
                                                    {{ $subcategory->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a class="dropdown-item" href="{{ url("category/$category->id") }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a target="_blank" class="nav-link active" aria-current="page"
                        href="https://chat.whatsapp.com/IlsC7PnPgXR5dqQbKTIXv5">
                        <i class="fab fa-whatsapp"></i>
                        واتساب</a>
                </li>


                <li class="nav-item">
                    <a target="_blank" class="nav-link active" aria-current="page"
                        href="https://play.google.com/store/apps/details?id=com.mokhalid.home_service">
                        <i class="fab fa-android"></i>
                        تطبيق الأندرويد</a>
                </li>
                <li class="nav-item">
                    <a target="_blank" class="nav-link active" aria-current="page"
                        href="https://www.facebook.com/dalil.el.mansorya">
                        <i class="fab fa-facebook"></i>
                        فيسبوك</a>
                </li>

                <li class="nav-item">
                    <a href="/add" class="btn btn-primary">اضافة</a>
                </li>


            </ul>
            <form method="post" action="/search" class="d-flex">
                @csrf
                <input required class="form-control me-2" name="query" type="search" placeholder="بحث"
                    aria-label="بحث">
                <button class="btn btn-outline-dark" type="submit">بحث</button>
            </form>

        </div>
    </div>
</nav>
