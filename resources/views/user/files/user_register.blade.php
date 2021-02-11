@extends('mater')
@section('main_body')


    <div id="first">
        <div class="secand">
            <div class="third">
                <div id="login-page">
                    <div  class="form    p_form   page1  ">

                        <div>
                            <img src="/home/images/5-top.svg" alt="" class="top show-for-desktop">
                            <img src="/home/images/5-bot.svg" alt="" class="bot show-for-desktop">
                            <img src="/home/images/5m-top.svg" alt="" class="top show-for-mobile">
                            <img src="/home/images/5m-bot.svg" alt="" class="bot show-for-mobile">
                            <span class="left">
                                    <img src="/home/images/left.svg" alt="">
                                </span>
                            <div class="right-side">
                                <div>
                                    <img src="/home/images/slide5.png" alt="">
                                </div>
                            </div>
                            <div class="left-side">
                                <div>


                                    <div class="input-container">
                                        <label for="">چی صدات کنیم؟</label>
                                        <input  type="text" id="name" placeholder="احسان">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="name-text  ">
                                    <span>
                                        لطفا اسم خودت رو به فارسی بنویس <br>
                                        تا بتونیم بهتر کنارت باشیم.
                                    </span>
                                        </div>
                                    </div>



                                    <div class="button-container">
                                        <span data-page-name="1" data-page-trans="slide-in-from-right"  class="register_next_page button">برو بریییییم</span>
                                    </div>

                                    <div class="link-container">
                                        <a href="{{route('user.login')}}" class="link">قبلاً فرم پر کردم</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="third">

                <div id="login-page">
                    <div  class="form      p_form page2   ">

                        <div>
                            <img src="/home/images/6-top.svg" alt="" class="top show-for-desktop">
                            <img src="/home/images/6-bot.svg" alt="" class="bot show-for-desktop">
                            <img src="/home/images/6m-top.svg" alt="" class="top show-for-mobile">
                            <img src="/home/images/6m-bot.svg" alt="" class="bot show-for-mobile">
                            <span class="left register_prve_page">
                            <img src="/home/images/left.svg" alt="">
                        </span>
                            <div class="left-side">
                                <div>

                                    <div class="title">

                                        <h3>رژیم حوروس فیت شرط داره...</h3>
                                    </div>
                                    <p><span class="name"></span>  جان، اولین شرط ما تصمیم شماست:</p>
                                    <p class="green"><span class="name"></span>  آیا واقعا تصمیم گرفتی تغییر کنی؟</p>

                                    <div class="button-container">
                                        <span class="button register_next_page" >بله تصمیم گرفتم پرانرژی شروع کنم</span>

                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <span class="   " >          نه</span>
                                </div>
                            </div>
                            <div class="right-side">
                                <div>
                                    <img src="/home/images/slide6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="third">

                <div id="login-page">
                    <div  class="form     p_form  page3  ">

                        <div>
                            <img src="/home/images/7-top.svg" alt="" class="top show-for-desktop">
                            <img src="/home/images/7-bot.svg" alt="" class="bot show-for-desktop">
                            <img src="/home/images/7m-top.svg" alt="" class="top show-for-mobile">
                            <img src="/home/images/7m-bot.svg" alt="" class="bot show-for-mobile">
                            <span class="left register_prve_page">
                            <img src="/home/images/left.svg" alt="">
                        </span>
                            <div class="left-side">
                                <div>

                                    <div class="login-form">
                                        <div class="title">

                                            <h3>کجا زندگی میکنی؟</h3>
                                        </div>



                                        <div class="living">
                                            <div class="lable-container">
                                                <input  type="radio" id="iran" name="live" value="iran">
                                                <label class="iran" for="iran">
                                                    ایران
                                                </label>
                                            </div>
                                            <div class="lable-container">
                                                <input  type="radio" id="out" name="live" value="out"  >
                                                <label class="out" for="out">
                                                    خارج از ایران
                                                </label>
                                            </div>
                                        </div>
                                        <div id="email_section" hidden>
                                            <div class="input-container">
                                                <label for="email" >        ایمیلت رو وارد کن
                                                </label>
                                                <input  type="text" id="email"  style="direction:LTR;"   >

                                            </div>
                                            <p class="show-for-desktop">
                                                با شماره همراهت پرونده تشکیل میشه و از این به بعد میتونی با شماره همراهت وارد پرونده‌ات بشی. حواست باشه زمان پر کردن پرسشنامه vpn رو خاموش کنی.
                                            </p>

                                            <p class="show-for-mobile">
                                                با شماره همراهت پرونده تشکیل میشه و از این به بعد میتونی با شماره همراهت وارد پرونده‌ات بشی. حواست باشه زمان پر کردن پرسشنامه vpn رو خاموش کنی.
                                            </p>
                                        </div>
                                        <div id="mobile_section" hidden>
                                        <div class="input-container">
                                            <label for="mobile" >شماره همراهت رو وارد کن</label>
                                            <input  type="tel" id="mobile"     style="direction: ltr;" >
{{--                                            <input  type="tel" id="mobile" class="mob_out inp" value="00" style="direction: ltr;" >--}}

                                        </div>
                                        <p class="show-for-desktop">
                                            با شماره همراهت پرونده تشکیل میشه و از این به بعد میتونی با شماره همراهت وارد پرونده‌ات بشی. حواست باشه زمان پر کردن پرسشنامه vpn رو خاموش کنی.
                                        </p>

                                        <p class="show-for-mobile">
                                            با شماره همراهت پرونده تشکیل میشه و از این به بعد میتونی با شماره همراهت وارد پرونده‌ات بشی. حواست باشه زمان پر کردن پرسشنامه vpn رو خاموش کنی.
                                        </p>
                                        </div>
                                        <div class="button-container">
                                        <span class="button" id="go_to_user_panel">
                                            شروع کن
                                        </span>
                                        </div>




                                        <div class="link-container show-for-desktop">
                                            <a href="{{route('user.login')}}" class="link">ورود به پرونده</a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="right-side">
                                <div>
                                    <div class="link-container show-for-mobile">
                                        <span class="link inter_but">ورود با ایمیل</span>
                                    </div>
                                    <img src="/home/images/slide7.png" alt="">
                                    <div class="link-container show-for-desktop">
                                        <span class="link inter_but">ورود با ایمیل</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

