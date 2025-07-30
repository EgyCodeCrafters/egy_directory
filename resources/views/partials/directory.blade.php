<div class="col-md-3 mb-3">
    <div class="card bg-light mb-3">
        <div class="card-header">
            <a href="{{ url('directory', $directory->id) }}">
                <h5 class="card-title"> {{ $directory->name }}</h5>
            </a>
        </div>
        <div class="card-body">
            <p class="card-text">{{ \Illuminate\Support\Str::limit($directory->description, 250) }}</p>
            <ul>

                @if ($directory->name != 'الشيخ محمدي عبدالمجيد عبدالجيد -رحمه الله-')
                    @if (!empty($directory->phone))
                        <li><a target="_blank"
                                href="tel:{{ Str::of(urldecode($directory->phone))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '') }}">{{ $directory->phone }}
                                <i class="fas fa-solid fa-mobile"></i></a></li>
                    @endif


                    @if (!empty($directory->whatsapp))
                        <li>

                            <a target="_blank"
                                href="https://api.whatsapp.com/send?phone=+2{{ Str::of(urldecode($directory->whatsapp))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '') }}&text=توصلت لرقمك من دليل المنصورية http://directory.egycodecrafters.com/ ">
                                {{ $directory->whatsapp }}
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif
                @endif
                @if (filter_var($directory->facebook, FILTER_VALIDATE_URL))
                    <li>
                        <a target="_blank" href="{{ $directory->facebook }}">فيسبوك
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                @endif


                @if (filter_var($directory->behance, FILTER_VALIDATE_URL))
                    <li>
                        <a target="_blank" href="{{ $directory->behance }}">Behance
                            <i class="fab fa-behance"></i>
                        </a>
                    </li>
                @endif

                @if (!empty($directory->google_map))
                    <li>
                        <a target="_blank" href="{{ $directory->google_map }}"> الموقع على الخريطة
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </a>


                    </li>
                @endif

                @if (!empty($directory->website))
                    <li>
                        <a target="_blank" href="{{ $directory->website }}"> الموقع الالكتروني
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </a>

                    </li>
                @endif

                @if (!empty($directory->telegram))
                    <li>
                        <a target="_blank" href="{{ $directory->telegram }}">تليجرام
                            <i class="fab fa-telegram" aria-hidden="true"></i>
                        </a>

                    </li>
                @endif



                @if (!empty($directory->youtube))
                    <li>
                        <a target="_blank" href="{{ $directory->youtube }}"> يوتيوب
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                        </a>

                    </li>
                @endif
            </ul>
            @foreach ($directory->categories as $category)
                <span class="badge alert-dark">
                    <a href="{{ url("category/$category->id") }}">{{ $category->name }}</a>
                </span>
            @endforeach

        </div>
    </div>
</div>
