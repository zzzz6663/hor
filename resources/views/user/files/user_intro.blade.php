@extends('mater')
@section('main_body')
    <div class="slides owl-carousel owl-theme">
        <div class="slid green">
            <div>
                <div class="right-side">
                    <div>
                        <img src="/home/images/slide1.png" alt="">
                    </div>
                </div>
                <div class="left-side">
                    <div>

						<span class="close">
							<img src="/home/images/close.svg" alt="">
						</span>
                        <div class="title">
                            <h3>به رژیمت عادت کن</h3>
                        </div>
                        <div class="text">
                            با حوروس فیت عادت کن فیت باشی. به اندازه و خوشمزه بخور و خوش هیکل
                            <br>باش
                        </div>

                        <div class="button">
                            <a href="{{route('user.register')}}">ثبت نام</a>
{{--                            <span>ﺛﺒﺖ ﻧﺎم</span>--}}
                        </div>
                        <div class="link">
                            <a href="{{route('user.login')}}">ﻗﺒﻠﺎ ﺛﺒﺖ ﻧﺎم ﮐﺮدم  </a>
{{--                            <span>ﻗﺒﻠﺎ ﺛﺒﺖ ﻧﺎم ﮐﺮدم</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slid red">
            <div>
                <div class="right-side">
                    <div>
                        <img src="/home/images/slide2.png" alt="">
                    </div>
                </div>
                <div class="left-side">
                    <div>

						<span class="close">
							<img src="/home/images/close.svg" alt="">
						</span>
                        <div class="title">
                            <h3>تحت هر شرایطی که باشی</h3>
                        </div>
                        <div class="text">
                            اولین رژیم کاملا شخصی سازی شده بر اساس شرایط مالی، فیزیکی و محیطی هر فرد
                        </div>

                        <div class="button">
                            <a href="{{route('user.register')}}">ثبت نام</a>
{{--                            <span>ﺛﺒﺖ ﻧﺎم</span>--}}
                        </div>
                        <div class="link">
                            <a href="{{route('user.login')}}">ﻗﺒﻠﺎ ﺛﺒﺖ ﻧﺎم ﮐﺮدم  </a>
{{--                            <span>ﻗﺒﻠﺎ ﺛﺒﺖ ﻧﺎم ﮐﺮدم</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slid yellow">
            <div>
                <div class="right-side">
                    <div>
                        <img src="/home/images/slide3.png" alt="">
                    </div>
                </div>
                <div class="left-side">
                    <div>

						<span class="close">
							<img src="/home/images/close.svg" alt="">
						</span>
                        <div class="title">
                            <h3>فقط فکر موفقیت باش</h3>
                        </div>
                        <div class="text">
                            اصلا نگران اراده نباش ما بهت یاد میدیم چجوری به رژیمت وفادار بمونی
                        </div>

                        <div class="button">
                            <a href="{{route('user.register')}}">ثبت نام</a>
{{--                            <span>ﺛﺒﺖ ﻧﺎم</span>--}}
                        </div>
                        <div class="link">
                            <a href="{{route('user.login')}}">ﻗﺒﻠﺎ ﺛﺒﺖ ﻧﺎم ﮐﺮدم  </a>
{{--                            <span>ﻗﺒﻠﺎ ﺛﺒﺖ ﻧﺎم ﮐﺮدم</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slid blue">
            <div>
                <div class="right-side">
                    <div>
                        <img src="/home/images/slide4.png" alt="">
                    </div>
                </div>
                <div class="left-side">
                    <div>

						<span class="close">
							<img src="/home/images/close.svg" alt="">
						</span>
                        <div class="title">
                            <h3>سیستم کسب درآمد</h3>
                        </div>
                        <div class="text">
                            اولین سیستم کسب درآمد از رژیم غذایی در ایرانکه می تونی با دعوت دوستات پول در بیاری
                        </div>

                        <div class="button">
                            <a href="{{route('user.register')}}">ثبت نام</a>

{{--                            <span>ﺛﺒﺖ ﻧﺎم</span>--}}
                        </div>
                        <div class="link">
                            <a href="{{route('user.login')}}">ﻗﺒﻠﺎ ﺛﺒﺖ ﻧﺎم ﮐﺮدم  </a>
{{--                            <span>ﻗﺒﻠﺎ ﺛﺒﺖ ﻧﺎم ﮐﺮدم</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

