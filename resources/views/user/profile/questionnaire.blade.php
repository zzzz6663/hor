@extends('mater')
@section('main_body')


    <div id="login-page">
        <div class="form page13">

            <div>
                <img src="/home/images/13-top.svg" alt="" class="top show-for-desktop">
                <img src="/home/images/13-bot.svg" alt="" class="bot show-for-desktop">
                <img src="/home/images/13m-top.svg" alt="" class="top show-for-mobile">
                <img src="/home/images/13m-bot.svg" alt="" class="bot show-for-mobile">
                <span class="left" onclick="window.location.href='{{route('user.profile')}}'">
							<img src="/home/images/left.svg" alt="">
						</span>
                <div class="right-side">
                    <div>
                        <img src="/home/images/slide13.png" alt="">
                    </div>
                </div>
                <div class="left-side">
                    <div>

                        <h3>پرسشنامه رژیم غذایی</h3>
                        <p>
                            ببین {{$user->name}} برای اینکه بتونیم دقیقا بر اساس خواسته و نیازت رژیم طراحی کنیم باید کامل تورو بشناسیم.
                        </p>

                        <p class="green">
                            مرحله‌ی بعد باید یه پرسشنامه‌ی ۳۱ مرحله‌ای رو با دقت و پر انرژی تکمیل کنی. راستی {{$user->name}} اگه حوصله نداری پرسشنامه‌ی ساده رو پر کن ما تلفنی برات تکمیلش میکنیم.
                        </p>


                        <div class="button-container">
                            <span class="button" onclick="  window.location.href='{{route('user.pro_questionnaire')}}'">پرسشنامه‌ی پیشرفته</span>
                        </div>

{{--                        <div class="link-container">--}}
{{--                            <span class="link">پرسشنامه‌ساده</span>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

