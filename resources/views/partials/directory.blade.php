<div class="col-md-3 mb-3">
    <div class="card bg-light mb-3">
        <div class="card-header">
            <h5 class="card-title">  {{ $directory->name }}</h5>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $directory->description }}</p>
            <ul>


                @if($directory->name!="الشيخ محمدي عبدالمجيد عبدالجيد -رحمه الله-")
                    @if(!empty($directory->phone))
                        <li><a target="_blank" href="tel:{{             Str::of(urldecode($directory->phone))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '')
 }}">{{ $directory->phone }} <i class="fas fa-solid fa-mobile"></i></a></li>
                    @endif


                    @if(!empty($directory->whatsapp))
                        <li>
                            <a target="_blank"
                               href="https://wa.me/+2{{ Str::of(urldecode($directory->whatsapp))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '')  }}">{{ $directory->whatsapp }}
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif
                @endif
                @if(filter_var($directory->facebook, FILTER_VALIDATE_URL))
                    <li>
                        <a target="_blank"
                           href="{{$directory->facebook}}">فيسبوك
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                @endif


                @if(!empty($directory->google_map))
                    <li>
                        <a target="_blank"
                           href="{{$directory->google_map}}"> الموقع على الخريطة
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </a>


                    </li>
                @endif

                @if(!empty($directory->website))
                    <li>
                        <a target="_blank"
                           href="{{$directory->website}}"> الموقع الالكتروني
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </a>

                    </li>
                @endif

                @if(!empty($directory->telegram))
                    <li>
                        <a target="_blank"
                           href="{{$directory->telegram}}">تليجرام
                            <i class="fab fa-telegram" aria-hidden="true"></i>
                        </a>

                    </li>
                @endif



                @if(!empty($directory->youtube))
                    <li>
                        <a target="_blank"
                           href="{{$directory->youtube}}"> يوتيوب
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                        </a>

                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
