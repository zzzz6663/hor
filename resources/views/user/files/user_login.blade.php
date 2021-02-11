@extends('mater')
@section('main_body')
    <div id="login-page">
        <div class="form page36">

            <div>
                <img src="/home/images/33-top.svg" alt="" class="top show-for-desktop">
                <img src="/home/images/33-bot.svg" alt="" class="bot show-for-desktop">
                <img src="/home/images/33m-top.svg" alt="" class="top show-for-mobile">
                <img src="/home/images/33m-bot.svg" alt="" class="bot show-for-mobile">
                <span class="left">
					<img src="/home/images/close.svg" alt="">
				</span>
                <div class="right-side">
                    <div>

                        <img src="/home/images/slide36.png" alt="">
                    </div>
                </div>
                <div class="left-side">
                    <div>

                        <div class="login-form">
                            <div class="title">

                                <h3>شماره همراهت رو وارد کن</h3>
                            </div>


                            <div class="input-container">
                                <input type="text" placeholder="- - - -">
                            </div>
                            <div class="input-container">
                                <input type="text" placeholder="- - - -">
                            </div>
                            <p >
                                اگر از قبل برای پروندت رمز انتخاب نکردی، فیلد رمز رو خالی بذار .
                            </p>


                            <div class="link-container green">
                                <span class="link">ورود با ایمیل</span>
                            </div>

                            <div class="button-container">
		                  		<span class="button">
		                  			ورود به پرونده
		                  		</span>
                            </div>

                            <div class="link-container">
                                <a href="{{route('user.register')}}" class="link">میخوام ثبت نام کنم</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

