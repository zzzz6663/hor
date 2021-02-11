@extends('old')
@section('main_body')
{{--    <form action="" id="valid_form">--}}
    <div id="box" class="rows">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>

                        <form action="#" id="dddd">
                            <input type="text" hidden   name="sdsd">
                        <div  class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon1.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات هویتی</h3>
                                    <span class="level-number">
										مرحله ی 1 از 13
									</span>
                                    <span class="detail">
										  پرونده ی خودت رو با دقت تشکیل بده .
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="active"><span></span></li>
                                        <li><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">
{{--                                    <section>--}}
{{--                                        <div class="section-title">--}}
{{--                                            <span>اسم، فامیل</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="input-container gray">--}}
{{--                                            <input type="text" placeholder="مثلا : مریم، میترا، بابک ....">--}}
{{--                                            <span class="exp">به چه اسمی صدات کنیم؟</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="input-container gray">--}}
{{--                                            <input type="text" placeholder="مثلا: احمدی، جعفری....">--}}
{{--                                            <span class="exp">فامیلت رو چی بنویسیم ؟</span>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
                                    <section class="birthday">
                                        <div class="section-title">
                                            <span>کی به دنیا اومدی ؟</span>
                                        </div>
                                        <div class="input-container gray birthday">
                                            <label for="">من متولد..</label>
                                            <ul>
                                                <li class="day">
                                                    <select   name="day"  id="day_select" >
                                                        <option selected disabled>روز</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option  value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>

                                                    </select>
{{--                                                    <input type="text" placeholder="01">--}}
                                                </li>
                                                <li class="month">
                                                    <select  name="month"   id="month_select"   >
                                                        <option selected disabled>ماه</option>
                                                        <option value=" فروردین"> فروردین</option>
                                                        <option value="اردیبهشت">اردیبهشت</option>
                                                        <option value=" خرداد"> خرداد</option>
                                                        <option value="تیر">تیر</option>
                                                        <option value=" مرداد"> مرداد</option>
                                                        <option value="شهریور">شهریور</option>
                                                        <option value="مهر">مهر</option>
                                                        <option value="آبان">آبان</option>
                                                        <option value="آذر">آذر</option>
                                                        <option value="دی">دی</option>
                                                        <option value="بهمن">بهمن</option>
                                                        <option value="اسفند">اسفند</option>
                                                    </select>
{{--                                                    <input type="text" placeholder="فروردین">--}}
                                                </li>
                                                <li class="year">
                                                    <select   name="year"  id="year_select" >
                                                        <option selected disabled>سال</option>
                                                    <?php
                                                        for($i=1300;$i<1399;$i++){?>
                                                            <option value="<?=$i?>"><?=$i?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </li>
                                            </ul>
                                            <span class="exp left">هستم.</span>
                                        </div>
                                        <div class="icon">
                                            <img id="cacke" src="/images/cake.png" alt="">
                                        </div>
                                    </section>
                                    <section class="gender">
                                        <div class="section-title">
                                            <span>جنسیت خودت رو انتخاب کن...</span>
                                        </div>
                                        <ul class="gender">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="gender" id="male" value="male">
                                                    <label for="male">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="84.069" height="76.452" viewBox="0 0 84.069 76.452">
                                                            <g id="wedding-suit" transform="translate(0 -12.086)">
                                                                <path id="Path_88" data-name="Path 88" d="M123.076,24.278V12.086L114.567,15.4l-8.508-3.315V24.278l8.508-3.315Z" transform="translate(-72.638)" fill="#05445e"/>
                                                                <path id="Path_89" data-name="Path 89" d="M71.018,91.122l13.051.446-9.9-58.983-.145-.867-16.96-6.9L42.035,61.487,27,24.813l-16.959,6.9L0,91.568l13.051-.446,5.736-32.492.126,6.455L17.531,83.869,16.1,97.255H36.513L42.034,87.22l5.521,10.035H67.97L66.537,83.869,65.155,65.061l.126-6.444ZM61.782,51.247H51.7V47.465H61.782Z" transform="translate(0 -8.716)" fill="#05445e"/>
                                                            </g>
                                                        </svg>

                                                        <span>
													یک مرد جذاب
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="gender" id="female" value="female">
                                                    <label for="female">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="77.264" height="77.264" viewBox="0 0 77.264 77.264">
                                                            <g id="wedding-dress" transform="translate(1.751 1.751)">
                                                                <path id="Path_90" data-name="Path 90" d="M227.843,31.6a27,27,0,0,0,21.649,0L255.5,13.174c.621-1.983.081-5.418-3.433-6.044V-1.751h-4.622V8.574h0a16.814,16.814,0,0,1-8.722,2.62h-.12a16.883,16.883,0,0,1-8.814-2.674V-1.751H225.17v8.9c-3.453.689-3.95,4.071-3.341,6.026Zm0,0" transform="translate(-201.786 0)" fill="#05445e"/>
                                                                <path id="Path_91" data-name="Path 91" d="M52.314,438.152a50.97,50.97,0,0,1-15.433,2.489,50.988,50.988,0,0,1-15.435-2.489,99.734,99.734,0,0,0-23.2,23.584C11.71,468.9,24.591,472.6,36.881,472.93c12.289-.33,25.169-4.032,38.632-11.194a99.731,99.731,0,0,0-23.2-23.584Zm0,0" transform="translate(0 -397.417)" fill="#05445e"/>
                                                                <path id="Path_92" data-name="Path 92" d="M239.179,437.469l-.007.006,0,0Zm0,0" transform="translate(-217.655 -396.8)" fill="#05445e"/>
                                                            </g>
                                                        </svg>

                                                        <span>
													یک خانم زیبا
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>
                                    <div class="text">
                                        <p class="bold center">
                                            یک
                                            <span class="sex_txt"></span>
                                            جذاب هستم و
                                            ( {{$user->name}}  )
                                            صدام می زنن.
                                            شماره مویابلم
                                            {{$user->mobile}}
                                             هست. و...
                                        </p>
                                        <p class="bold large">تصمیم گرفتم اصولی تغییر کنم.</p>
                                    </div>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                        <form action="#" id="f_step_">
                        <div hidden  class="box-container" >
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon1.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات هویتی</h3>
                                    <span class="level-number">
										مرحله ی 1 از 13
									</span>
                                    <span class="detail">
										  پرونده ی خودت رو با دقت تشکیل بده .
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">
                                    <section class="city">
                                        <div class="section-title">
                                            <span>کدوم شهر زندگی می کنی ؟ </span>
                                        </div>
                                        <div class="select-container">
                                            <select>
                                                <option value="">شهرت رو انتخاب کن</option>
                                                <option value="">تهران</option>
                                                <option value="">اصفهان</option>
                                                <option value="">شیراز</option>
                                                <option value="">مشهد</option>
                                                <option value="">تبریز</option>
                                                <option value="">همدان</option>
                                                <option value="">اراک</option>
                                                <option value="">سنندج</option>
                                                <option value="">ارومیه</option>
                                                <option value="">یزد</option>
                                                <option value="">سمنان</option>
                                            </select>
                                        </div>

                                    </section>
                                    <section class="country">
                                        <div class="section-title">
                                            <span>کدوم کشور زندگی می کنی؟</span>
                                        </div>
                                        <div class="select-container">
                                            <select>
                                                <option value="">کشور رو انتخاب کن</option>
                                                <option value="">فرانسه</option>
                                                <option value="">آلمان</option>
                                                <option value="">انگلیس</option>
                                                <option value="">امارات</option>
                                                <option value="">کانادا</option>
                                                <option value="">اسپانیا</option>
                                                <option value="">پرتقال</option>
                                                <option value="">هلند</option>
                                                <option value="">دانمارک</option>
                                                <option value="">برزیل</option>
                                            </select>
                                        </div>

                                    </section>

                                    <section class="edjucation">
                                        <div class="section-title">
                                            <span>چقدر درس خوندی ؟</span>
                                        </div>
                                        <ul class="edjucation">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="edjucation" id="elementary" value="elementary">
                                                    <label for="elementary">
														<span>
														دبستان
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="edjucation" id="highschool" value="highschool">
                                                    <label for="highschool">
														<span>
														 دبیرستان
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="edjucation" id="diploma" value="diploma">
                                                    <label for="diploma">
														<span>
														دیپلم
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="edjucation" id="postgraduate" value="postgraduate">
                                                    <label for="postgraduate">
														<span>
														 فوق دیپلم
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="edjucation" id="bachelor" value="bachelor">
                                                    <label for="bachelor">
														<span>
														 لیسانس
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="edjucation" id="master" value="master">
                                                    <label for="master">
														<span>
														فوق لیسانس
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="edjucation" id="doctor" value="doctor">
                                                    <label for="doctor">
														<span>
														دکتری
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="edjucation" id="professor" value="professor">
                                                    <label for="professor">
														<span>
														 پروفسوری
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="edjucation" id="student" value="student">
                                                    <label for="student">
														<span>
														دانشجو
														</span>
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </section>

                                    <section>
                                        <div class="section-title">
                                            <span>چه رشته ای تحصیل کردی ؟</span>
                                        </div>
                                        <div class="input-container gray">
                                            <input type="text" placeholder=" مثلا: پزشکی، روانشناسی،مهندسی ....">
                                        </div>

                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden  class="box-container blue">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon2.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات فیزیکی</h3>
                                    <span class="level-number">
										مرحله ی 2 از 13
									</span>
                                    <span class="detail">
										 با دقت آخرین وزن و قدت رو وارد کن.
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="weight">
                                        <div class="section-title">
                                            <span>چند کیلو وزن داری ؟</span>
                                        </div>
                                        <div class="input-container svg_parent gray">
                                            <br>
                                            <input class="auto-save" required    id="weightinputw" name="bweight"  type="number" data-weight="" value="">

                                        </div>
                                        <br>
                                        <br>
                                        <br>

                                        <div class="section-title">
                                            <span>قدت چقدره ؟</span>
                                        </div>
                                        <div class="input-container svg_parent gray">
                                            <br>
                                            <input class="auto-save" required  id="ghadinput" name="height" type="number" data-height="" value="">

                                        </div>


                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden  class="box-container blue">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon2.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات فیزیکی</h3>
                                    <span class="level-number">
										مرحله ی 2 از 13
									</span>
                                    <span class="detail">
										 مقدار فعالیت فیزیکیت رو برامون بگو.
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="activity">
                                        <div class="section-title mar">
                                            <span>چقدر در طول روز فعالیت داری؟</span>
                                        </div>

                                        <ul class="activity">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="ativity" id="low" value="low">
                                                    <label for="low">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.33" height="31.15" viewBox="0 0 19.33 31.15">
                                                            <g id="old-man-with-hat-walking-with-cane" transform="translate(-10.414 0)">
                                                                <g id="Group_44" data-name="Group 44" transform="translate(10.414 0)">
                                                                    <path id="Path_126" data-name="Path 126" d="M28.994,17.647c.4.255-.183-.275-.293-.421-.39-.515-.756-1.046-1.123-1.576q-.649-.939-1.277-1.893c-.541-.821-1.643-.923-2.523-1.146a37.173,37.173,0,0,0-3.685-.763c-2.171-.773-5.035,1.593-3.535,4.157.055.094.108.19.163.284a5.245,5.245,0,0,1-5,1.775c-1.315-.138-1.629,1.376-.963,2.207v15.69h.963V20.787a7.713,7.713,0,0,0,6.4-2.035q.981,1.782,1.912,3.589a20.839,20.839,0,0,0-4.483,4.224,1.415,1.415,0,0,0-.2,1.612,1.754,1.754,0,0,0,.054.534q.751,2.968,1.5,5.938c.532,2.111,3.87,1.508,3.334-.613l-1.5-5.939c-.006-.023-.013-.044-.02-.068a16.017,16.017,0,0,1,3.7-3.226c.169,3.3.337,6.8.507,9.854a1.7,1.7,0,0,0,3.386-.177c-.232-4.2-.464-9.251-.7-13.451a1.638,1.638,0,0,0-.329-.931,3.386,3.386,0,0,0-.226-.565q-.989-1.926-2.038-3.824.441.117.878.238c.958,1.554,2.019,3.54,3.482,4.469C29.128,21.531,30.736,18.753,28.994,17.647Z" transform="translate(-10.414 -5.06)" fill="#05445e"/>
                                                                    <path id="Path_127" data-name="Path 127" d="M20.076,1.791A2.712,2.712,0,0,0,16.618.14a2.713,2.713,0,0,0-1.871,3.344Z" transform="translate(-12.238 0)" fill="#05445e"/>
                                                                    <path id="Path_128" data-name="Path 128" d="M12.464,6.828,21.052,4.1c.128-.041.213-.137.189-.215L19.288,3.6,13.734,5.365l-1.548,1.4C12.211,6.84,12.335,6.869,12.464,6.828Z" transform="translate(-11.181 -1.557)" fill="#05445e"/>
                                                                    <path id="Path_129" data-name="Path 129" d="M19.373,9.408A2.75,2.75,0,0,0,21.16,5.953l-5.242,1.67A2.749,2.749,0,0,0,19.373,9.408Z" transform="translate(-12.795 -2.575)" fill="#05445e"/>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                        <span class="title">فعالیت بسیار کم</span>
                                                        <span class="text"> خانم ها و آقایان دارای کهولت سن و دیسک کمر و یا کسانی که هیچ فعالیتی ندارند.</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="ativity" id="light" value="light">
                                                    <label for="light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30.069" height="30.067" viewBox="0 0 30.069 30.067">
                                                            <g id="waiting-room" transform="translate(-3 -3.008)">
                                                                <g id="Group_46" data-name="Group 46" transform="translate(0 0.008)">
                                                                    <g id="Group_45" data-name="Group 45" transform="translate(0 0)">
                                                                        <path id="Path_130" data-name="Path 130" d="M66.772,112.185a2.756,2.756,0,1,1,2.756-2.756A2.755,2.755,0,0,1,66.772,112.185Z" transform="translate(-40.593 -99.785)" fill="#05445e"/>
                                                                        <path id="Path_131" data-name="Path 131" d="M.687,247.1H7.024l2.636-11.86a.689.689,0,1,1,1.346.3L8.267,247.862v4.058a.689.689,0,0,1-1.378,0v-3.445H2.755v3.445a.689.689,0,0,1-1.378,0v-3.445H.689a.689.689,0,0,1,0-1.378Z" transform="translate(22.047 -219.541)" fill="#05445e"/>
                                                                        <path id="Path_132" data-name="Path 132" d="M284.928.008a7.578,7.578,0,1,1-7.578,7.578A7.586,7.586,0,0,1,284.928.008Zm-2.756,8.267h2.756a.689.689,0,0,0,.689-.689V3.453a.689.689,0,1,0-1.378,0V6.9h-2.067a.689.689,0,1,0,0,1.378Z" transform="translate(-274.35 2.992)" fill="#05445e"/>
                                                                        <path id="Path_133" data-name="Path 133" d="M66.082,221.608H70.9V216.1a2.756,2.756,0,1,1,5.511,0v7.578a2.069,2.069,0,0,1-2.067,2.067h-6.2v4.822a2.067,2.067,0,0,1-4.133,0v-6.889a2.069,2.069,0,0,1,2.067-2.067Z" transform="translate(-47.481 -199.563)" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                        <span class="title">فعالیت سبک</span>
                                                        <span class="text"> فعالیت پشت میزی، زنان خانه دار بدون ورزش و کسانی تحرک روزانه شغلی دارند.</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="ativity" id="moderate" value="moderate">
                                                    <label for="moderate">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.682" height="37.508" viewBox="0 0 27.682 37.508">
                                                            <g id="stretching-exercises" transform="translate(-8.102 0)">
                                                                <g id="Group_47" data-name="Group 47" transform="translate(8.102 0)">
                                                                    <path id="Path_134" data-name="Path 134" d="M33.566.008a16.276,16.276,0,0,0-13.037,7.87A62.66,62.66,0,0,0,14.073,20.16,98.281,98.281,0,0,0,8.24,34.25c-.953,2.833,3.325,4.681,4.283,1.835a111.863,111.863,0,0,1,4.164-10.69c1.579,3.534,3.183,7.056,4.906,10.523,1.335,2.691,5.353.331,4.023-2.351C23.842,30,22.194,26.373,20.571,22.736c.021-.07.047-.139.069-.209a1.919,1.919,0,0,0,.9.038l7.453-1.4a1.887,1.887,0,0,0,1.3-2.291c-.5-2.787-2.09-4.726-4.067-6.561a6.528,6.528,0,0,0-2.358-2.758c2.2-3.559,5.8-5.491,10.475-5.9C36.728,3.444,35.933-.2,33.566.008ZM24.517,15.852a8.674,8.674,0,0,1,1.532,2.09l-3.606.676A20.4,20.4,0,0,1,24.517,15.852Z" transform="translate(-8.102 0)" fill="#05445e"/>
                                                                    <circle id="Ellipse_44" data-name="Ellipse 44" cx="3.198" cy="3.198" r="3.198" transform="translate(18.358 6.282)" fill="#05445e"/>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                        <span class="title">فعالیت متوسط</span>
                                                        <span class="text">3 روز در هفته ورزش 45 تا 60 دقیقه ای میرم و کسانی که ورزش سبک می کنند.</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="ativity" id="heavy" value="heavy">
                                                    <label for="heavy">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.389" height="36.169" viewBox="0 0 27.389 36.169">
                                                            <g id="exercise" transform="translate(-62.144 0)">
                                                                <g id="Group_49" data-name="Group 49" transform="translate(82.436 7.914)">
                                                                    <g id="Group_48" data-name="Group 48" transform="translate(0)">
                                                                        <path id="Path_135" data-name="Path 135" d="M356.357,112.435a.877.877,0,0,0-1.326-.175c-1.6,1.445-1.715,1.543-2.131,1.961l-2.272-.313-.231.624a2.545,2.545,0,0,1,.111,1.928l.453.062a17.733,17.733,0,0,0-1.545,2.643,15.007,15.007,0,0,0,.394,4.267,15.99,15.99,0,0,1,3.136-6.637l.907.125a1.271,1.271,0,0,0,1.05-2.18l1.286-1.164A.892.892,0,0,0,356.357,112.435Z" transform="translate(-349.396 -112.033)" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_51" data-name="Group 51" transform="translate(81.055 7.198)">
                                                                    <g id="Group_50" data-name="Group 50" transform="translate(0)">
                                                                        <path id="Path_136" data-name="Path 136" d="M331.42,101.943a.876.876,0,0,0-1.126.518l-.443,1.2a2.535,2.535,0,0,1,1.666.547l.421-1.139A.876.876,0,0,0,331.42,101.943Z" transform="translate(-329.851 -101.888)" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_53" data-name="Group 53" transform="translate(62.144 14.022)">
                                                                    <g id="Group_52" data-name="Group 52" transform="translate(0)">
                                                                        <path id="Path_137" data-name="Path 137" d="M83.877,217.724a3.3,3.3,0,0,0,.856-6.043l-2.177-5.566a16,16,0,0,1-1-7.622c-.09.015.015,0-1.782.2a17.751,17.751,0,0,0,1.15,8.057l1.727,4.415-1.112-.148L80.5,208.375l-.268,2.471-3.245-.431a2.7,2.7,0,0,1-.99.949l.542.026a1.034,1.034,0,0,1,.993.963,1.017,1.017,0,0,1-1.065,1.069l-3.582-.173a1.019,1.019,0,1,1,.192-2.026,2.762,2.762,0,0,1-1.06-1.468l-1.781-.237.879-2.761a1.472,1.472,0,0,0,.062-.592l-.3-3.024a24.358,24.358,0,0,1-3.019-.6l.359,3.612-.908,2.852a5.53,5.53,0,0,0-3.366,9.6l-.817.818a.715.715,0,0,0-.084.928.7.7,0,0,0,1.06.079l1.008-1.008a5.505,5.505,0,0,0,2.562.629c.825,0,14.455-2.107,14.455-2.107l2.445,2.482a.7.7,0,1,0,1-.984Zm-12.9-3.027a3.306,3.306,0,1,1-3.473-3.473A3.318,3.318,0,0,1,70.977,214.7Z" transform="translate(-62.144 -198.493)" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_55" data-name="Group 55" transform="translate(73.169 0)">
                                                                    <g id="Group_54" data-name="Group 54" transform="translate(0 0)">
                                                                        <path id="Path_138" data-name="Path 138" d="M222.315.32a2.808,2.808,0,1,0,1.336,3.455A2.808,2.808,0,0,0,222.315.32Z" transform="translate(-218.208 0)" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_57" data-name="Group 57" transform="translate(67.016 5.651)">
                                                                    <g id="Group_56" data-name="Group 56" transform="translate(0)">
                                                                        <path id="Path_139" data-name="Path 139" d="M145.091,84.585l-4.373.491-2.652-3.159,2.665,1.878,3.2-.359s-4.711-2.067-7.553-3.324a1.8,1.8,0,0,0-2.31,1.18l-2.817,7.418a1.85,1.85,0,0,0,.9,2.453c.3.165.008.081,5.766,1.155l-.688,6.357a1.526,1.526,0,1,0,3.035.328l.84-7.763a1.526,1.526,0,0,0-1.238-1.665l-2.422-.452.606-1.463-1.931-4.107,3.09,3.682a1.272,1.272,0,0,0,1.116.446l5.017-.563a1.293,1.293,0,0,0,1.163-1.265A1.272,1.272,0,0,0,145.091,84.585Z" transform="translate(-131.106 -79.988)" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                        <span class="title">فعالیت سنگین</span>
                                                        <span class="text"> دقیقه ای میرم و 60 تا 45 روز در هفته ورزش 3 کسانی که ورزش سبک می کنند.</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="ativity" id="veryheavy" value="veryheavy">
                                                    <label for="veryheavy">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="36.353" height="33.93" viewBox="0 0 36.353 33.93">
                                                            <g id="weightlifting" transform="translate(0 -17.067)">
                                                                <g id="Group_59" data-name="Group 59" transform="translate(0 19.21)">
                                                                    <g id="Group_58" data-name="Group 58" transform="translate(0 0)">
                                                                        <path id="Path_140" data-name="Path 140" d="M35.206,51.095h-.967V47.857a.606.606,0,0,0-.606-.606H31.977a.606.606,0,0,0-.606.606v3.237H29.254a1.684,1.684,0,0,0-3.352-.337l-.036.336H22.95a5.258,5.258,0,0,1-9.551,0H10.492l-.036-.336a1.684,1.684,0,0,0-3.352.337H4.982V47.857a.606.606,0,0,0-.606-.606H2.72a.606.606,0,0,0-.606.606v3.237H1.147a1.147,1.147,0,1,0,0,2.295h.967v3.237a.606.606,0,0,0,.606.606H4.376a.606.606,0,0,0,.606-.606V53.389H7.346l.662,6.259a1.686,1.686,0,0,0,2.944.931l2.368-2.71v6.446L7.193,66.8a2.191,2.191,0,0,0-1.341,1.7L4.63,76.516a2.191,2.191,0,0,0,4.331.661L10,70.395l5.667-2.3h5.031l5.667,2.3L27.4,77.177a2.191,2.191,0,0,0,4.331-.661L30.5,68.5a2.191,2.191,0,0,0-1.341-1.7L22.989,64.3V57.812l2.418,2.767a1.686,1.686,0,0,0,2.944-.931l.662-6.259h2.358v3.237a.606.606,0,0,0,.606.606h1.656a.606.606,0,0,0,.606-.606V53.389h.967a1.147,1.147,0,1,0,0-2.295ZM10.953,55.457l-.219-2.068H12.76Zm14.453,0L23.6,53.389h2.026Z" transform="translate(0 -47.251)" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_61" data-name="Group 61" transform="translate(14.391 17.067)">
                                                                    <g id="Group_60" data-name="Group 60" transform="translate(0 0)">
                                                                        <circle id="Ellipse_45" data-name="Ellipse 45" cx="3.783" cy="3.783" r="3.783" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                        <span class="title">فعالیت بسیار سنگین</span>
                                                        <span class="text">ورزشکار های حرفه ای با روزی 2 نوبت تمرین</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>

                                    </section>


                                    <section class="excercise">
                                        <div class="section-title">
                                            <span>چه ورزشی می کنی،ورزشکار ؟</span>
                                        </div>
                                        <ul class="excercise">
                                            <li class="num1">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="yoga" value="yoga">
                                                    <label for="yoga">
                                                        <span class="title">یوگا</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num2">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="spinning" value="spinning">
                                                    <label for="spinning">
                                                        <span class="title">اسپینینگ</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num3">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="trx" value="trx">
                                                    <label for="trx">
                                                        <span class="title">TRX</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num4">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="bodybuilding" value="bodybuilding">
                                                    <label for="bodybuilding">
                                                        <span class="title">بدنسازی</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num5">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="soccer" value="soccer">
                                                    <label for="soccer">
                                                        <span class="title">فوتبال</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num6">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="brightonics" value="brightonics">
                                                    <label for="brightonics">
                                                        <span class="title">برایتونیک</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num7">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="aerobics" value="aerobics">
                                                    <label for="aerobics">
                                                        <span class="title">ایروبیک </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num8">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="fitness" value="fitness">
                                                    <label for="fitness">
                                                        <span class="title">فیتنس</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num9">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="basketball" value="basketball">
                                                    <label for="basketball">
                                                        <span class="title">بسکتبال</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num10">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="volleyball" value="volleyball">
                                                    <label for="volleyball">
                                                        <span class="title">والیبال</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num11">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="handball" value="handball">
                                                    <label for="handball">
                                                        <span class="title">هندبال</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num12">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="swim" value="swim">
                                                    <label for="swim">
                                                        <span class="title">شنا</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num13">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="gymnastics" value="gymnastics">
                                                    <label for="gymnastics">
                                                        <span class="title">ژیمیناستیک </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num14">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="martialarts" value="martialarts">
                                                    <label for="martialarts">
                                                        <span class="title">ورزش های رزمی</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num15">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="wrestle" value="wrestle">
                                                    <label for="wrestle">
                                                        <span class="title">کشتی</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num16">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="powerliftig" value="powerliftig">
                                                    <label for="powerliftig">
                                                        <span class="title">پاور لیفتیگ</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num17">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="parkour" value="parkour">
                                                    <label for="parkour">
                                                        <span class="title">پارکور</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num18">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="cycling" value="cycling">
                                                    <label for="cycling">
                                                        <span class="title">دوچرخه سواری </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num19">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="excercise" id="excerciseother" value="excerciseother">
                                                    <label for="excerciseother">
                                                        <span class="title">سایر</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="input-container gray other-excersize ">
                                            <label for="">ورزش خود را وارد نمایید.</label>
                                            <input type="text">
                                        </div>
                                    </section>


                                    <section class="week">
                                        <div class="section-title">
                                            <span>چند روز در هفته تمرین می کنی ؟</span>
                                        </div>
                                        <ul class="week">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="week" id="day1" value="day1">
                                                    <label for="day1">
                                                        <span class="title">1</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="week" id="day2" value="day2">
                                                    <label for="day2">
                                                        <span class="title">2</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="week" id="day3" value="day3">
                                                    <label for="day3">
                                                        <span class="title">3</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="week" id="day4" value="day4">
                                                    <label for="day4">
                                                        <span class="title">4</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="week" id="day5" value="day5">
                                                    <label for="day5">
                                                        <span class="title">5</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="week" id="day6" value="day6">
                                                    <label for="day6">
                                                        <span class="title">6</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>


                                    <section class="time">
                                        <div class="section-title">
                                            <span>چه ساعتی در روز تمرین می کنی ؟</span>
                                        </div>
                                        <div class="text">
                                            <span>از ساعت</span>
                                            <div class="input-container gray inline">
                                                <input type="text">
                                            </div>
                                            <span>تا</span>
                                            <div class="input-container gray inline">
                                                <input type="text">
                                            </div>
                                            <span>تمرین میکنم</span>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li class="small"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="size">
                                        <div class="section-title">
                                            <span>اندازه سایز اندام هات رو گرفتی ؟ </span>
                                        </div>
                                        <div class="text">
                                            <p>اندازه دوره ران، اندازه دور گردن و	 .....</p>
                                        </div>

                                        <ul class="size">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="size" id="yes" value="yes">
                                                    <label for="yes">
                                                        <span class="text">بله دارم و می خوام وارد کنم</span>
                                                        <span class="cir">	</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="size" id="no" value="no">
                                                    <label for="no">
                                                        <span class="text">نه فعلا ندارم</span>
                                                        <span class="cir">	</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>

                                    </section>




                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="neck">
                                        <div class="section-title">
                                            <span>سایز دور گردن</span>
                                        </div>

                                        <div class="text">
                                            <p>متر رو بذار دور گلوت و اندازه بزن</p>
                                        </div>
                                        <div class="women-sec">
                                            <span>دور گردن اینجاست</span>
                                            <img src="/images/arrow.svg" alt="" class="arrow">
                                            <img class="women" src="/images/women.svg" alt="">

                                        </div>
                                        <div class="man-sec">
                                            <img class="man" src="/images/man.svg" alt="">

                                        </div>

                                        <div id="neck-container">
                                        </div>


                                        <div id="neck-slider"></div>
                                        <div id="neck">
                                            <div>

                                                <input id="neckinput" type="text" value="180">
                                                <!-- <span class="num"></span><span>.</span><span class="dec"></span> -->
                                            </div>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="wrist">
                                        <div class="section-title">
                                            <span>سایز دور مچ</span>
                                        </div>

                                        <div class="text">
                                            <p>متر رو بذار رو مچت و اندازه بزن .</p>
                                        </div>
                                        <div class="women-sec">
                                            <span>دور مچ اینجاست</span>
                                            <img src="/images/arrow3.svg" alt="" class="arrow">
                                            <img class="women" src="/images/women2.svg" alt="">

                                        </div>
                                        <div class="man-sec">
                                            <img src="/images/arrow2.svg" alt="" class="arrow">
                                            <img class="man" src="/images/man2.svg" alt="">

                                        </div>

                                        <div id="wrist-container">
                                        </div>


                                        <div id="wrist-slider"></div>
                                        <div id="wrist">
                                            <div>

                                                <input id="wristinput" type="text" value="180">
                                                <!-- <span class="num"></span><span>.</span><span class="dec"></span> -->
                                            </div>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="chest">
                                        <div class="section-title">
                                            <span>سایز دور سینه</span>
                                        </div>

                                        <div class="text">
                                            <p>متر رو بذار رو سینه ات اندازه بزن .</p>
                                        </div>
                                        <div class="women-sec">
                                            <span>دور سینه اینجاست</span>
                                            <img src="/images/arrow2.svg" alt="" class="arrow">
                                            <img class="women" src="/images/women.svg" alt="">

                                        </div>


                                        <div id="chest-container">
                                        </div>


                                        <div id="chest-slider"></div>
                                        <div id="chest">
                                            <div>

                                                <input id="chestinput" type="text" value="180">
                                                <!-- <span class="num"></span><span>.</span><span class="dec"></span> -->
                                            </div>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="chest">
                                        <div class="section-title">
                                            <span>سایز دور سینه</span>
                                        </div>

                                        <div class="text">
                                            <p>متر رو بذار رو سینه ات اندازه بزن .</p>
                                        </div>
                                        <div class="women-sec">
                                            <span>دور سینه اینجاست</span>
                                            <img src="/images/arrow2.svg" alt="" class="arrow">
                                            <img class="women" src="/images/women.svg" alt="">

                                        </div>


                                        <div id="chest-container">
                                        </div>


                                        <div id="chest-slider"></div>
                                        <div id="chest">
                                            <div>

                                                <input id="chestinput" type="text" value="180">
                                                <!-- <span class="num"></span><span>.</span><span class="dec"></span> -->
                                            </div>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="waste">
                                        <div class="section-title">
                                            <span>سایز دور کمر </span>
                                        </div>

                                        <div class="text">
                                            <p>دست رو بچسبون کنار بدنت و بکش پایین گودترین جای بدنت رو پیدا کن و اندازه بزن.</p>
                                        </div>
                                        <div class="women-sec">
                                            <span>دور کمر اینجاست</span>
                                            <img src="/images/arrow4.svg" alt="" class="arrow">
                                            <img class="women" src="/images/women.svg" alt="">

                                        </div>
                                        <div class="man-sec">
                                            <img class="man" src="/images/man.svg" alt="">

                                        </div>

                                        <div id="waste-container">
                                        </div>


                                        <div id="waste-slider"></div>
                                        <div id="waste">
                                            <div>

                                                <input id="wasteinput" type="text" value="180">
                                                <!-- <span class="num"></span><span>.</span><span class="dec"></span> -->
                                            </div>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="arm">
                                        <div class="section-title">
                                            <span>سایز دور بازو </span>
                                        </div>

                                        <div class="text">
                                            <p>متر رو بذار وسط بازوت و اندازه بزن .</p>
                                        </div>
                                        <div class="women-sec">
                                            <span>دور باز اینجاست</span>
                                            <img src="/images/arrow5.svg" alt="" class="arrow">
                                            <img class="women" src="/images/women4.svg" alt="">

                                        </div>
                                        <div class="man-sec">
                                            <img src="/images/arrow6.svg" alt="" class="arrow">
                                            <img class="man" src="/images/man4.svg" alt="">

                                        </div>

                                        <div id="arm-container">
                                        </div>


                                        <div id="arm-slider"></div>
                                        <div id="arm">
                                            <div>

                                                <input id="arminput" type="text" value="180">
                                                <!-- <span class="num"></span><span>.</span><span class="dec"></span> -->
                                            </div>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="naf">
                                        <div class="section-title">
                                            <span>سایز دور ناف</span>
                                        </div>

                                        <div class="text">
                                            <p>متر رو بذار رو ناف و دقیقا دور ناف رو اندازه بزن.</p>
                                        </div>
                                        <div class="women-sec">
                                            <span>دور ناف اینجاست</span>
                                            <img src="/images/arrow4.svg" alt="" class="arrow">
                                            <img class="women" src="/images/women.svg" alt="">

                                        </div>
                                        <div class="man-sec">
                                            <img class="man" src="/images/man.svg" alt="">
                                            <img src="/images/arrow6.svg" alt="" class="arrow">
                                            <span>دور ناف اینجاست</span>
                                        </div>

                                        <div id="naf-container">
                                        </div>


                                        <div id="naf-slider"></div>
                                        <div id="naf">
                                            <div>

                                                <input id="nafinput" type="text" value="180">
                                                <!-- <span class="num"></span><span>.</span><span class="dec"></span> -->
                                            </div>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="hip">
                                        <div class="section-title">
                                            <span>سایز دور باسن</span>
                                        </div>

                                        <div class="text">
                                            <p>برجسته ترین جای پایین تنه را اندازه بزن .</p>
                                        </div>
                                        <div class="women-sec">
                                            <span>دور باسن اینجاست</span>
                                            <img src="/images/arrow4.svg" alt="" class="arrow">
                                            <img class="women" src="/images/women.svg" alt="">

                                        </div>
                                        <div class="man-sec">
                                            <img class="man" src="/images/man.svg" alt="">
                                        </div>

                                        <div id="hip-container">
                                        </div>


                                        <div id="hip-slider"></div>
                                        <div id="hip">
                                            <div>

                                                <input id="hipinput" type="text" value="180">
                                                <!-- <span class="num"></span><span>.</span><span class="dec"></span> -->
                                            </div>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon3.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سایز گیری</h3>
                                    <span class="level-number">
										مرحله ی3 از 13
									</span>
                                    <span class="detail">
										بدو یه متر بردار بیار که می خوایم اندازه بزنیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section class="ran">
                                        <div class="section-title">
                                            <span>سایز دور ران</span>
                                        </div>

                                        <div class="text">
                                            <p>متر رو بذار دقیقا دور ران رو اندازه بزن.</p>
                                        </div>
                                        <div class="women-sec">
                                            <span>دور ران اینجاست</span>
                                            <img src="/images/arrow4.svg" alt="" class="arrow">
                                            <img class="women" src="/images/women.svg" alt="">

                                        </div>
                                        <div class="man-sec">
                                            <img class="man" src="/images/man.svg" alt="">
                                            <img src="/images/arrow7.svg" alt="" class="arrow">
                                            <span>دور ران اینجاست</span>
                                        </div>

                                        <div id="ran-container">
                                        </div>


                                        <div id="ran-slider"></div>
                                        <div id="ran">
                                            <div>

                                                <input id="raninput" type="text" value="180">
                                                <!-- <span class="num"></span><span>.</span><span class="dec"></span> -->
                                            </div>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container lblue">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon4.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات شغلی</h3>
                                    <span class="level-number">
										مرحله ی4 از 13
									</span>
                                    <span class="detail">
										 دقیق از شرایط شغلیت برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">
                                    <section class="job">
                                        <div class="section-title">
                                            <span>(اسم) جان، شغلت چیه ؟</span>
                                        </div>
                                        <div class="select-container">
                                            <select>
                                                <option value="">پزشک</option>
                                                <option value="">کاسب</option>
                                                <option value="">معلم</option>
                                                <option value="">کارگز</option>
                                                <option value="">خانه دار</option>
                                                <option value="">کارمند</option>
                                                <option value="">راننده</option>
                                                <option value="">بیکار</option>
                                            </select>
                                        </div>

                                    </section>

                                    <section>
                                        <div class="section-title">
                                            <span>مکان شغلت کجاست؟</span>
                                        </div>
                                        <div class="input-container gray">
                                            <input type="text" placeholder="مثلا:بیمارستان، دفترکار، مغازه و  ...">
                                        </div>

                                    </section>

                                    <section class="time">
                                        <div class="section-title">
                                            <span>چه ساعتی سرکار هستی ؟ </span>
                                        </div>
                                        <div class="text">
                                            <span>از ساعت</span>
                                            <div class="input-container gray inline">
                                                <input type="text">
                                            </div>
                                            <span>:</span>
                                            <div class="input-container gray inline">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <span>تا ساعت </span>
                                            <div class="input-container gray inline">
                                                <input type="text">
                                            </div>
                                            <span>:</span>
                                            <div class="input-container gray inline">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </section>

                                    <section class="workstate">
                                        <div class="section-title">
                                            <span>معمولا سرکار چه حالت فیزیکی داری؟</span>
                                        </div>
                                        <ul class="workstate">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="workstate" id="behinddesk" value="behinddesk">
                                                    <label for="behinddesk">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60.561" height="95.379" viewBox="0 0 60.561 95.379">
                                                                <g id="icon" transform="translate(-34.748)">
                                                                    <path id="Path_648" data-name="Path 648" d="M93.063,38.13a2.243,2.243,0,0,0-2.239,2.243V53.266a6.726,6.726,0,0,1-5.562,6.613c-.706-1.829-3.234-3.1-6.78-3.1h-10l.135-1.305c.052-.568.08-1.1.08-1.644h9.781a8.139,8.139,0,0,0,8.232-8.937l-3-35.949A9.953,9.953,0,0,0,73.993,0H56.053a9.957,9.957,0,0,0-9.721,8.939l-3,35.949a8.136,8.136,0,0,0,8.229,8.937h9.783a15.542,15.542,0,0,0,.083,1.644l.135,1.305h-10c-3.541,0-6.072,1.275-6.777,3.1a6.735,6.735,0,0,1-5.562-6.613V40.377a2.24,2.24,0,1,0-4.48,0V53.269A11.234,11.234,0,0,0,45.965,64.494h.615a15.234,15.234,0,0,0,9.477,3.216h6.6l1.192,11.922H57.947c-5.475,0-10.864,3.076-12.271,7l-1.651,4.614a2.326,2.326,0,0,0-2.27,2.028c0,1.16,1.226,2.1,2.732,2.1s2.734-.944,2.734-2.1a1.92,1.92,0,0,0-.98-1.572l1.541-4.312c1.071-3,5.723-5.511,10.159-5.511h5.967v9.494a2.149,2.149,0,0,0-1.608,1.9c0,1.16,1.228,2.1,2.729,2.1s2.734-.933,2.734-2.1a2.149,2.149,0,0,0-1.614-1.9V81.879h5.969c4.433,0,9.089,2.528,10.155,5.511L83.817,91.7a1.928,1.928,0,0,0-.982,1.572c0,1.16,1.228,2.1,2.734,2.1s2.734-.944,2.734-2.1a2.324,2.324,0,0,0-2.271-2.028l-1.65-4.614c-1.409-3.933-6.8-7-12.271-7H66.2l1.195-11.922H74a15.2,15.2,0,0,0,9.47-3.216h.614A11.237,11.237,0,0,0,95.309,53.269V40.377A2.258,2.258,0,0,0,93.063,38.13Zm-38.9-21.309H75.883a1.121,1.121,0,1,1,0,2.242H54.162a1.121,1.121,0,0,1,0-2.242Zm0,6.729H75.883a1.121,1.121,0,1,1,0,2.242H54.162a1.121,1.121,0,0,1,0-2.242Zm0,8.979a1.12,1.12,0,0,1,0-2.24H75.883a1.12,1.12,0,1,1,0,2.24Z" fill="#05445e"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <span>
														پشت میز
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="workstate" id="standing" value="standing">
                                                    <label for="standing">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48.572" height="95.5" viewBox="0 0 48.572 95.5">
                                                                <g id="girl" transform="translate(-125.795)">
                                                                    <g id="Group_409" data-name="Group 409" transform="translate(125.795 19.113)">
                                                                        <g id="Group_408" data-name="Group 408" transform="translate(0)">
                                                                            <path id="Path_649" data-name="Path 649" d="M174.139,134.86c-.062-.168-6.183-16.917-8.879-24.761-1.739-5.062-4.656-7.628-8.669-7.628H143.572c-4.012,0-6.929,2.566-8.668,7.628-2.7,7.844-8.817,24.593-8.879,24.761a3.749,3.749,0,1,0,7.042,2.575c.051-.14,4.248-11.623,7.242-20.078a4.249,4.249,0,0,0,1.536,2.169l.009,5.493L135.4,141.279a1.566,1.566,0,0,0,1.088,2.1c.963.231,2.238.547,3.62.892v30.088a4.5,4.5,0,1,0,9,0V146.4a10.929,10.929,0,0,0,1.942,0v27.962a4.5,4.5,0,1,0,9,0V144.267c1.382-.345,2.655-.66,3.618-.891a1.568,1.568,0,0,0,1.089-2.1l-6.448-16.258.009-5.493a4.247,4.247,0,0,0,1.536-2.169c2.993,8.455,7.191,19.939,7.242,20.078a3.749,3.749,0,0,0,7.042-2.575Z" transform="translate(-125.795 -102.471)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_411" data-name="Group 411" transform="translate(141.893 0)">
                                                                        <g id="Group_410" data-name="Group 410" transform="translate(0)">
                                                                            <circle id="Ellipse_64" data-name="Ellipse 64" cx="8.188" cy="8.188" r="8.188" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
														ایستاده
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="workstate" id="behindcar" value="behindcar">
                                                    <label for="behindcar">
                                                        <div class="img">
                                                            <svg id="steering-wheel" xmlns="http://www.w3.org/2000/svg" width="92.397" height="92.397" viewBox="0 0 92.397 92.397">
                                                                <g id="Group_413" data-name="Group 413">
                                                                    <g id="Group_412" data-name="Group 412">
                                                                        <path id="Path_650" data-name="Path 650" d="M46.2,0A46.2,46.2,0,1,0,92.4,46.2,46.379,46.379,0,0,0,46.2,0Zm0,10.828A35.618,35.618,0,0,1,80.124,36.286a2.684,2.684,0,0,0-1.372-1.47C71.292,31.363,59.44,27.25,46.2,27.25s-25.093,4.113-32.553,7.566a2.685,2.685,0,0,0-1.372,1.47A35.618,35.618,0,0,1,46.2,10.828ZM11.527,53.169a2.706,2.706,0,0,0,2.232,1.984l6.5.9A19.045,19.045,0,0,1,36.341,72.134l.9,6.5a2.685,2.685,0,0,0,1.6,2.074A35.673,35.673,0,0,1,11.527,53.169ZM46.2,54.32A8.121,8.121,0,1,1,54.32,46.2,8.13,8.13,0,0,1,46.2,54.32Zm7.355,26.392a2.685,2.685,0,0,0,1.6-2.074l.9-6.5A19.045,19.045,0,0,1,72.134,56.056l6.5-.9a2.707,2.707,0,0,0,2.233-1.984A35.673,35.673,0,0,1,53.554,80.712Z" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                                <g id="Group_415" data-name="Group 415" transform="translate(43.492 43.492)">
                                                                    <g id="Group_414" data-name="Group 414">
                                                                        <path id="Path_651" data-name="Path 651" d="M243.707,241a2.707,2.707,0,1,0,2.707,2.707A2.709,2.709,0,0,0,243.707,241Z" transform="translate(-241 -241)" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
														پشت ماشین
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="workstate" id="walking" value="walking">
                                                    <label for="walking">
                                                        <div class="img">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="71.102" height="89.972" viewBox="0 0 71.102 89.972">
                                                                <g id="man-walking" transform="translate(-5.428)">
                                                                    <g id="Group_2289" data-name="Group 2289" transform="translate(5.428 0)">
                                                                        <circle id="Ellipse_925" data-name="Ellipse 925" cx="8.378" cy="8.378" r="8.378" transform="translate(8.939)" fill="#05445e"/>
                                                                        <path id="Path_1354" data-name="Path 1354" d="M75.412,73.073c-9.984-14.9-21.4-34.313-23.32-37.59a9.853,9.853,0,0,0-.72-1.8c-2.281-4.445-4.665-8.839-7.1-13.2,2.58.2,5.166.4,7.744.6q2.66,5.241,5.307,10.482c2.849,5.627,11.281.676,8.439-4.935-2.281-4.507-4.984-14.645-10.871-15.1q-9.4-.73-18.79-1.458c-.153-.012-.283.009-.429.009a9.508,9.508,0,0,0-11.29,6.9c-3.2,6.934-7.8,12.348-15.514,14.608-6.039,1.766-3.466,11.2,2.6,9.427A31.633,31.633,0,0,0,28.723,28.654c2.515,4.485,4.971,9,7.325,13.572A63.458,63.458,0,0,0,22.39,55.091a4.361,4.361,0,0,0-.923,4.074,5.278,5.278,0,0,0,.149,1.484Q23.9,69.7,26.19,78.738c1.618,6.425,11.789,4.6,10.157-1.867q-2.177-8.617-4.356-17.238A48.172,48.172,0,0,1,44.826,48.819a5.119,5.119,0,0,0,2.284-2.56c6.708,10.28,13.418,24.5,20.122,33.122C71.323,84.641,79.509,78.343,75.412,73.073Z" transform="translate(-5.428 7.236)" fill="#05445e"/>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
																راه رفتن
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="workstate" id="bending" value="bending">
                                                    <label for="bending">
                                                        <div class="img">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="51.251" height="90.398" viewBox="0 0 51.251 90.398">
                                                                <g id="Group_2290" data-name="Group 2290" transform="translate(19970.154 8992)">
                                                                    <path id="Path_1355" data-name="Path 1355" d="M59.921,21.628v0l-3.4,40.011H43.789V46.559H45.4V59.89c2.74-.371,5.7-1.781,7.007-4.708.053-.282.467-1.611.63-2.012,4.539-11.421,3.024-23.194-2.131-34.1-4.536-9.586-22.1-1.2-17.587,8.335a28.544,28.544,0,0,1,1.088,2.646c-3.46-1.345-6.959-2.591-10.472-3.808l-.3.362-1.251,3.446,1.851-3.678-3.062-.637c-4.555.44-5.909,8.132-.569,9.976,5.077,1.752,10.145,3.529,15.066,5.673A28.611,28.611,0,0,1,34.26,47.5a41.859,41.859,0,0,0-14.244,2.472,5.807,5.807,0,0,0-3.805,5.013c-.85,10.983,3.238,19.06,7.343,25.514a5.81,5.81,0,0,0,9.8-6.236C29.85,68.752,28.131,64.4,27.781,59.8A27.255,27.255,0,0,1,34.3,59.11V51.4h1.737V61.64h-6.13v5.484H63.475L67.348,21.63Z" transform="translate(-19986.252 -8984.793)" fill="#05445e"/>
                                                                    <circle id="Ellipse_926" data-name="Ellipse 926" cx="10.626" cy="10.626" r="10.626" transform="translate(-19965.363 -8992)" fill="#05445e"/>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
															خم کاری
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="workstate" id="youwork" value="youwork">
                                                    <label for="youwork">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="83.625" height="86.42" viewBox="0 0 83.625 86.42">
                                                                <g id="construction-worker" transform="translate(-7.918)">
                                                                    <path id="XMLID_304_" d="M52.9,125.439a3.353,3.353,0,0,0,3.663-4.963l1.626-6.654,2.031.5a1.407,1.407,0,0,0,1.737-1.463l-.927-13.588a.756.756,0,0,0-1.4-.342l-7.089,11.628a1.4,1.4,0,0,0,.868,2.1l2.03.5-1.378,5.631-7.088-1.631-7.986-11.7c-.955-1.4-2.378-1.5-4.083-1.5v26.5h4.052V160.7h-8.1V139.4H27.9V160.7H19.8V130.455h4.05v-26.5c-1.955,0-3.553.218-4.366,2L8.223,130.613a3.376,3.376,0,0,0,6.143,2.8L19.805,121.5v6.124H19.8a2.832,2.832,0,0,0-2.832,2.833V160.7a2.832,2.832,0,0,0,2.832,2.833,4.051,4.051,0,1,0,8.1,0,2.834,2.834,0,0,0,1.477-.415,2.813,2.813,0,0,0,1.475.415,4.051,4.051,0,1,0,8.1,0,2.832,2.832,0,0,0,2.832-2.833V130.455a2.832,2.832,0,0,0-2.832-2.833h-.009V117.367l3.194,4.679a3.369,3.369,0,0,0,2.03,1.387Z" transform="translate(0 -81.166)" fill="#05445e"/>
                                                                    <rect id="XMLID_303_" width="5.388" height="11.391" transform="translate(26.682 22.791)" fill="#05445e"/>
                                                                    <path id="XMLID_300_" d="M71.915,13.465a7.885,7.885,0,0,0,15.77,0,2.827,2.827,0,0,0,2.761-2.82,10.648,10.648,0,0,0-21.3,0A2.828,2.828,0,0,0,71.915,13.465ZM74.134,5.29v.8a1.415,1.415,0,1,0,2.83,0V3.382a7.882,7.882,0,0,1,1.418-.407V6.092a1.417,1.417,0,0,0,2.833,0V2.975a7.773,7.773,0,0,1,1.415.407v2.71a1.418,1.418,0,0,0,2.835,0v-.8a7.773,7.773,0,0,1,2.146,5.356H71.983A7.758,7.758,0,0,1,74.134,5.29Z" transform="translate(-50.424)" fill="#05445e"/>
                                                                    <path id="XMLID_299_" d="M257.174,435.467H239.7a1.415,1.415,0,0,0-1.418,1.416v6.332a1.415,1.415,0,0,0,1.418,1.416h17.47a1.417,1.417,0,0,0,1.414-1.416v-6.332A1.416,1.416,0,0,0,257.174,435.467Z" transform="translate(-189.706 -358.602)" fill="#05445e"/>
                                                                    <path id="XMLID_298_" d="M385.554,435.467h-17.47a1.415,1.415,0,0,0-1.418,1.416v6.332a1.415,1.415,0,0,0,1.418,1.416h17.47a1.417,1.417,0,0,0,1.415-1.416v-6.332A1.416,1.416,0,0,0,385.554,435.467Z" transform="translate(-295.425 -358.602)" fill="#05445e"/>
                                                                    <path id="XMLID_297_" d="M385.554,307.078h-17.47a1.416,1.416,0,0,0-1.418,1.417v6.331a1.415,1.415,0,0,0,1.418,1.417h17.47a1.416,1.416,0,0,0,1.415-1.417v-6.331A1.417,1.417,0,0,0,385.554,307.078Z" transform="translate(-295.425 -252.875)" fill="#05445e"/>
                                                                    <path id="XMLID_296_" d="M257.174,307.078H239.7a1.416,1.416,0,0,0-1.418,1.417v6.331a1.415,1.415,0,0,0,1.418,1.417h17.47a1.416,1.416,0,0,0,1.414-1.417v-6.331A1.417,1.417,0,0,0,257.174,307.078Z" transform="translate(-189.706 -252.875)" fill="#05445e"/>
                                                                    <path id="XMLID_295_" d="M302.473,372.686v6.333a1.415,1.415,0,0,0,1.418,1.416h17.47a1.417,1.417,0,0,0,1.416-1.416v-6.333a1.418,1.418,0,0,0-1.416-1.417h-17.47A1.416,1.416,0,0,0,302.473,372.686Z" transform="translate(-242.563 -305.736)" fill="#05445e"/>
                                                                    <path id="XMLID_294_" d="M302.473,244.3v6.331a1.415,1.415,0,0,0,1.418,1.417h17.47a1.416,1.416,0,0,0,1.416-1.417V244.3a1.417,1.417,0,0,0-1.416-1.417h-17.47A1.416,1.416,0,0,0,302.473,244.3Z" transform="translate(-242.563 -200.016)" fill="#05445e"/>
                                                                    <path id="XMLID_293_" d="M436.211,371.269H429.6a1.415,1.415,0,0,0-1.415,1.417v6.333a1.415,1.415,0,0,0,1.415,1.416h6.615a1.417,1.417,0,0,0,1.415-1.416v-6.333A1.417,1.417,0,0,0,436.211,371.269Z" transform="translate(-346.083 -305.736)" fill="#05445e"/>
                                                                    <path id="XMLID_292_" d="M436.211,242.888H429.6a1.415,1.415,0,0,0-1.415,1.417v6.331a1.414,1.414,0,0,0,1.415,1.417h6.615a1.416,1.416,0,0,0,1.415-1.417V244.3A1.417,1.417,0,0,0,436.211,242.888Z" transform="translate(-346.083 -200.016)" fill="#05445e"/>
                                                                </g>
                                                            </svg>


                                                        </div>
                                                        <span>
																کار یدی
														</span>
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </section>

                                    <section>
                                        <div class="input-container gray">

                                            <label for="">اگه چیزی هست که در مورد شغلت می خوای بهمون بگی این زیر بنویس؟</label>
                                            <textarea name="" id="workother" cols="30" rows="10" placeholder="مثلا: من خیلی سرکار میخورم و ...."></textarea>
                                            <div class="charNum"><span id="charsLeft">0</span>/ 500</div>
                                        </div>

                                    </section>

                                    <section class="stress">
                                        <div class="section-title">
                                            <span>(اسم) کارت استرس آور هست ؟ </span>
                                        </div>

                                        <ul class="stress">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="stress" id="stno" value="stno">
                                                    <label for="stno">
                                                        <span class="text">نه کارم استرس نداره خداروشکر </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="stress" id="little" value="little">
                                                    <label for="little">
                                                        <span class="text">آره یکم استرس دارم سرکار</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="stress" id="styes" value="styes">
                                                    <label for="styes">
                                                        <span class="text">خیلی زیاد سرکار استرس دارم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>

                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"/>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"/>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section class="illness">
                                        <div class="section-title">
                                            <span>با کدوم بیماری دست و پنجه نرم می کنی ؟</span>
                                        </div>
                                        <ul class="illness">
                                            <li class="num1">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="none" value="none">
                                                    <label for="none">
                                                        <span class="title">هیچکدام</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num2">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="thyroid" value="thyroid">
                                                    <label for="thyroid">
                                                        <span class="title">تیروئید</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num3">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="fattyliver" value="fattyliver">
                                                    <label for="fattyliver">
                                                        <span class="title">کبد چرب</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num4">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="constipation" value="constipation">
                                                    <label for="constipation">
                                                        <span class="title">یبوست</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num5">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="polycystic" value="polycystic">
                                                    <label for="polycystic">
                                                        <span class="title small">پلی کیستیک</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num6">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="diabetes" value="diabetes">
                                                    <label for="diabetes">
                                                        <span class="title">دیابت</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num7">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="anemia" value="anemia">
                                                    <label for="anemia">
                                                        <span class="title">کم خونی</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num8">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="migraine" value="migraine">
                                                    <label for="migraine">
                                                        <span class="title">میگرن </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num9">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="stomachdiscomfort" value="stomachdiscomfort">
                                                    <label for="stomachdiscomfort">
                                                        <span class="title">ناراحتی معده </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num10">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="bloodpressure" value="bloodpressure">
                                                    <label for="bloodpressure">
                                                        <span class="title">فشار خون </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num11">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="kidneystone" value="kidneystone">
                                                    <label for="kidneystone">
                                                        <span class="title">سنگ کلیه </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num12">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="cancer" value="cancer">
                                                    <label for="cancer">
                                                        <span class="title">سرطان</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num13">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="ms" value="ms">
                                                    <label for="ms">
                                                        <span class="title">Ms </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num14">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="parkinson" value="parkinson">
                                                    <label for="parkinson">
                                                        <span class="title">پارکینسون</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num15">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="rheumatoiddiseases" value="rheumatoiddiseases">
                                                    <label for="rheumatoiddiseases">
                                                        <span class="title">بیماری های روماتوئیدی </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num16">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="gout" value="gout">
                                                    <label for="gout">
                                                        <span class="title">نقرس</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num17">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="depression" value="depression">
                                                    <label for="depression">
                                                        <span class="title">افسردگی </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num18">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="cataracts" value="cataracts">
                                                    <label for="cataracts">
                                                        <span class="title">آب مروارید</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="num19">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="illness" id="otherillness" value="otherillness">
                                                    <label for="otherillness">
                                                        <span class="title">سایر</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="selected">

                                        </div>
                                        <div class="input-container gray other-disess ">
                                            <label for="">چه بیماری داری که ما نداشتیم؟</label>
                                            <textarea name="" cols="30" rows="10" placeholder="اسم بیماریت رو اینجا بنویس"></textarea>
                                        </div>
                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li class="small"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title">
                                            <span>کبد چربت چه گریدی هست ؟ </span>
                                        </div>
                                        <div class="input-container shadow">
                                            <input type="text" placeholder="">
                                        </div>
                                        <div class="input-container shadow">
                                            <input type="text" placeholder="">
                                        </div>
                                        <div class="input-container shadow">
                                            <input type="text" placeholder="">
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title">
                                            <span>کبد چربت چه گریدی هست ؟ </span>
                                        </div>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section>
                                        <div class="section-title small">
                                            <span>کبد چربت چه گریدی داره (اسم) ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="" cols="30" rows="10" placeholder=""></textarea>
                                        </div>
                                    </section>


                                    <section>
                                        <div class="section-title small">
                                            <span>چه داروهایی به خاطر کبدت مصرف می کنی ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="" cols="30" rows="10" placeholder=""></textarea>
                                        </div>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">


                                    <section>
                                        <div class="section-title small">
                                            <span>بخاطر دیابتت چه قرص یا انسولینی مصرف می کنی (اسم) جان؟</span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="" cols="30" rows="10" placeholder=""></textarea>
                                        </div>
                                    </section>


                                    <section>
                                        <div class="section-title small">
                                            <span>چه زمان هایی قرص یا انسولینت رو مصرف می کنی ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="" cols="30" rows="10" placeholder=""></textarea>
                                        </div>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>عکس آخرین آزمایشت رو برامون آپلود کن.</span>
                                        </div>
                                        <div class="input-container gray small">
                                            <input type="file">
                                        </div>
                                    </section>


                                    <section class="popradio shadow">
                                        <div class="section-title small">
                                            <span>نوع کم خونیت کدوم یکی از گزینه هاست؟</span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="anemia" id="anemiatibc" value="anemiatibc">
                                                    <label for="anemiatibc">
                                                        <span class="text">TIBC</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="anemia" id="anemiafritin" value="anemiafritin">
                                                    <label for="anemiafritin">
                                                        <span class="text">Fritin</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="anemia" id="anemiahgb" value="anemiahgb">
                                                    <label for="anemiahgb">
                                                        <span class="text">Hgb</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="anemia" id="anemiano" value="anemiano">
                                                    <label for="anemiano">
                                                        <span class="text">نمی دونم </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </section>



                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>چه داروهایی به خاطر تیروئدت مصرف می کنی ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>دوز مصرفی داروهات چقدر هست ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>


                                    <section class="popradio shadow">
                                        <div class="section-title small">
                                            <span>(اسم) نوع تیروئیدت کدوم گزینه هست ؟</span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="thyroid" id="thyroidlow" value="thyroidlow">
                                                    <label for="thyroidlow">
                                                        <span class="text">تیروئید کم کار </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="thyroid" id="thyroidhigh" value="thyroidhigh">
                                                    <label for="thyroidhigh">
                                                        <span class="text">تیروئید پر کار </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </section>



                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>چند بار در هفته حملات میگرنی بهت دست میده ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>چه داروهایی بخاطر میگرنت مصرف می کنی ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>



                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>خب فکر کن ببین چه غذاهایی باعث ناراحتی معدت میشه ؟</span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>چه داروهایی بخاطر ناراحتی معدت مصرف می کنی ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>



                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>آخرین آزمایش خونت رو برامون آپلود کن.</span>
                                        </div>
                                        <div class="input-container gray small">
                                            <input type="file">
                                        </div>
                                    </section>



                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>سنگ کلیه ات از چه نوعی هست ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>چه داروهایی بخاطر سنگ کلیه ات مصرف  می کنی ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>


                                    <section class="popradio shadow">
                                        <div class="section-title small">
                                            <span>آیا سنگ کلیه در خانواده شما ارثی هست ؟ </span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="kidney" id="kidneyyes" value="kidneyyes">
                                                    <label for="kidneyyes">
                                                        <span class="text">بله ارثی هست</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="kidney" id="kidneyno" value="kidneyno">
                                                    <label for="kidneyno">
                                                        <span class="text">نه خداروشکر فقط من دارم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </section>


                                    <section class="popradio shadow">
                                        <div class="section-title small">
                                            <span>الان سنگ کلیه ات در چه وضعیتی هست؟</span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="kidneysit" id="kidneysityes" value="kidneysityes">
                                                    <label for="kidneysityes">
                                                        <span class="text">خداروشکر برطرف شده </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="kidneysit" id="kidneysitno" value="kidneysitno">
                                                    <label for="kidneysitno">
                                                        <span class="text">در حال برطرف شدن هست</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="kidneysit" id="kidneysitalways" value="kidneysitalways">
                                                    <label for="kidneysitalways">
                                                        <span class="text">کلا کلیه من سنگ ساز هست </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>



                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>چه سرطانی داری (اسم) جان ؟</span>
                                        </div>
                                        <div class="input-container gray mini">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section class="popradio shadow">
                                        <div class="section-title small">
                                            <span>الان در کدوم مرحله درمان هستی ؟ </span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="cancer" id="cancerchemotherapy" value="cancerchemotherapy">
                                                    <label for="cancerchemotherapy">
                                                        <span class="text">شیمی درمانی </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="cancer" id="cancerradiotherapy" value="cancerradiotherapy">
                                                    <label for="cancerradiotherapy">
                                                        <span class="text">پرتو درمانی </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="cancer" id="cancernone" value="cancernone">
                                                    <label for="cancernone">
                                                        <span class="text">هیچکدام</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </section>


                                    <section>
                                        <div class="section-title small">
                                            <span>دکتر برات چند جلسه شیمی درمانی تخمین زده؟</span>
                                        </div>
                                        <div class="input-container gray mini">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>الان در کدوم جلسه شیمی درمانی هستی؟</span>
                                        </div>
                                        <div class="input-container gray mini">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>دکتر برات چند جلسه پرتو درمانی تخمین زده؟</span>
                                        </div>
                                        <div class="input-container gray mini">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>الان در کدوم جلسه پرتو درمانی هستی؟</span>
                                        </div>
                                        <div class="input-container gray mini">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>


                                    <section class="popradio shadow">
                                        <div class="section-title small">
                                            <span>کدوم عوارض درمان تاحالا برات پیش اومده؟</span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="complications" id="complicationsappetite" value="complicationsappetite">
                                                    <label for="complicationsappetite">
                                                        <span class="text">کاهش اشتها</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="complications" id="complicationsnausea" value="complicationsnausea">
                                                    <label for="complicationsnausea">
                                                        <span class="text">حالت تهوع </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="complications" id="complicationsdiarrhea" value="complicationsdiarrhea">
                                                    <label for="complicationsdiarrhea">
                                                        <span class="text">اسهال</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="complications" id="complicationsconstipation" value="complicationsconstipation">
                                                    <label for="complicationsconstipation">
                                                        <span class="text">یبوست</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="complications" id="complicationsulcer" value="complicationsulcer">
                                                    <label for="complicationsulcer">
                                                        <span class="text">زخم دهانی </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>



                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>چه داروهایی برات تجویز شده ؟</span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>مکمل دریافتی که برات تجویز شده رو بنویس</span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>






                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>چه داروهایی برات تجویز شده ؟</span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>مکمل دریافتی که برات تجویز شده رو بنویس</span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>






                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>(اسم) جان چه دارویی برات تجویز شده ؟</span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>چند وقت هست که افسردگی داری ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>






                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>چه زمانی آب مروارید گرفتی ؟ </span>
                                        </div>
                                        <div class="input-container gray small">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>


                                    <section class="popradio shadow">
                                        <div class="section-title small">
                                            <span>آیا آب مرواریدت درمان شده ؟ </span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="pearl" id="pearlyes" value="pearlyes">
                                                    <label for="pearlyes">
                                                        <span class="text">بله </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="pearl" id="pearlno" value="pearlno">
                                                    <label for="pearlno">
                                                        <span class="text">خیر</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>چقدر از زمان درمانت می گذره ؟ </span>
                                        </div>
                                        <div class="input-container gray mini">
                                            <textarea name="#" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </section>






                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title">
                                            <span>چه داروهایی می خوری ؟</span>
                                        </div>
                                        <div class="plus">
											<span class="plus-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="22.752" height="22.752" viewBox="0 0 22.752 22.752">
												  <g id="Group_426" data-name="Group 426" transform="translate(-50.289 -229)">
												    <g id="Ellipse_80" data-name="Ellipse 80" transform="translate(50.289 229)" fill="#fff" stroke="#05445e" stroke-width="3">
												      <circle cx="11.376" cy="11.376" r="11.376" stroke="none"/>
												      <circle cx="11.376" cy="11.376" r="9.876" fill="none"/>
												    </g>
												    <g id="Group_425" data-name="Group 425" transform="translate(54.418 233.358)">
												      <line id="Line_37" data-name="Line 37" x2="14.264" transform="translate(0 7.132)" fill="none" stroke="#05445e" stroke-width="2"/>
												      <line id="Line_38" data-name="Line 38" y1="14.264" transform="translate(7.132)" fill="none" stroke="#05445e" stroke-width="2"/>
												    </g>
												  </g>
												</svg>
											</span>
                                            <div class="input-container gray small">
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>
                                                هر داروی جدیدی خواستی اضافه کنی، دکمه ی + رو بزن.
                                            </p>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title">
                                            <span>کدوم قسمت از بدنت درد می کنه؟</span>
                                        </div>
                                        <div class="input-container gray">
                                            <textarea name="" id="bodypain" cols="30" rows="10" placeholder="مثلا: پاهام و کمرم خیلی درد میکنه ..."></textarea>
                                            <div class="charNum"><span id="charsLeft2">0</span>/ 500</div>
                                        </div>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section class="danger">
                                        <div class="section-title">
                                            <span>کدوم یکی از کارهای زیر و انجام میدی ؟</span>
                                        </div>

                                        <ul class="danger">
                                            <div class="line"></div>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="danger" id="cigarettes" value="cigarettes">
                                                    <label for="cigarettes">
                                                        <span class="text">من سیگار می کشم .</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="danger" id="alcohol" value="alcohol">
                                                    <label for="alcohol">
                                                        <span class="text">الکل مصرف می کنم .</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="danger" id="hookah" value="hookah">
                                                    <label for="hookah">
                                                        <span class="text">قلیان می کشم.</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="danger" id="sitted" value="sitted">
                                                    <label for="sitted">
                                                        <span class="text">بیشتر روز رو نشستم.</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="danger" id="marijuana" value="marijuana">
                                                    <label for="marijuana">
                                                        <span class="text">ماریجوانا می کشم.</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="danger" id="drug" value="drug">
                                                    <label for="drug">
                                                        <span class="text">مواد مخدر مصرف می کنم .</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>

                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات پزشکی</h3>
                                    <span class="level-number">
										مرحله ی 5 از 13
									</span>
                                    <span class="detail">
										  با دقت بیماری هات رو برامون بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section class="record">
                                        <div class="subscttion">
                                            <div class="section-title number">
                                                <span class="num">1</span><span>آیا به راحتی سرما می خوری ؟ </span>
                                            </div>

                                            <ul class="sub">
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="sarma" id="saryes" value="saryes">
                                                        <label for="saryes">
                                                            <span class="text">بله </span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="sarma" id="sarno" value="sarno">
                                                        <label for="sarno">
                                                            <span class="text">خیر</span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="subscttion">
                                            <div class="section-title number">
                                                <span class="num">2</span><span>آیا کمبود ویتامین دی داری ؟ </span>
                                            </div>

                                            <ul class="sub">
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="vitamin" id="vitayes" value="vitayes">
                                                        <label for="vitayes">
                                                            <span class="text">بله </span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="vitamin" id="vitano" value="vitano">
                                                        <label for="vitano">
                                                            <span class="text">خیر</span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="vitamin" id="vitadontno" value="vitadontno">
                                                        <label for="vitadontno">
                                                            <span class="text">نمی دونم</span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="subscttion">
                                            <div class="section-title number">
                                                <span class="num">3</span><span>آیا در طول روز احساس خستگی زیاد می کنی؟ </span>
                                            </div>

                                            <ul class="sub">
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="tired" id="tireyes" value="tireyes">
                                                        <label for="tireyes">
                                                            <span class="text">بله </span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="tired" id="tireno" value="tireno">
                                                        <label for="tireno">
                                                            <span class="text">خیر</span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="subscttion">
                                            <div class="section-title number">
                                                <span class="num">4</span><span>سابقه زایمان داری ؟</span>
                                            </div>

                                            <ul class="sub">
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="preg" id="pregyes" value="pregyes">
                                                        <label for="pregyes">
                                                            <span class="text">بله </span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="preg" id="pregno" value="pregno">
                                                        <label for="pregno">
                                                            <span class="text">خیر</span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="subscttion">
                                            <div class="section-title number">
                                                <span class="num last">5</span><span>چه مدت از آخرین زایمان شما می گذره؟</span>
                                            </div>

                                            <div class="input-container gray small">
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>

                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container blue">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon6.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>عادات غذایی</h3>
                                    <span class="level-number">
										مرحله ی 6 از 13
									</span>
                                    <span class="detail">
										برامون از عادت های غذاییت بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li class="presmall"><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                        <li class="small"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section class="meal">
                                        <div class="section-title">
                                            <span>کدوم یکی از وعده هات رو میل نمی کنی؟</span>
                                        </div>
                                        <ul class="meal">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="meal" id="snack" value="snack">
                                                    <label for="snack">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="46.576" height="46.646" viewBox="0 0 46.576 46.646">
                                                                <g id="nuts" transform="translate(-0.357 0)">
                                                                    <g id="Group_453" data-name="Group 453" transform="translate(18.987 0)">
                                                                        <g id="Group_452" data-name="Group 452" transform="translate(0 0)">
                                                                            <path id="Path_830" data-name="Path 830" d="M198.5,1.346l-.9-1.08A.8.8,0,0,0,196.473.2a.788.788,0,0,0-.061.061l-.9,1.079a13.662,13.662,0,0,0-3.162,8.733,4.658,4.658,0,1,0,9.315,0A13.663,13.663,0,0,0,198.5,1.346Zm-1.5,11.837a3.105,3.105,0,0,1-3.105-3.105,12.116,12.116,0,0,1,2.8-7.739l.3-.363.3.364a12.11,12.11,0,0,1,2.8,7.739A3.105,3.105,0,0,1,197.009,13.183Z" transform="translate(-192.351 0)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_455" data-name="Group 455" transform="translate(29.078 5.42)">
                                                                        <g id="Group_454" data-name="Group 454">
                                                                            <path id="Path_831" data-name="Path 831" d="M304.5,55.861a8.16,8.16,0,0,0-8.151,8.151,3.493,3.493,0,1,0,6.986,0,1.164,1.164,0,0,1,1.164-1.164,3.493,3.493,0,0,0,0-6.986Zm0,5.434a2.717,2.717,0,0,0-2.717,2.717,1.941,1.941,0,1,1-3.881,0,6.606,6.606,0,0,1,6.6-6.6,1.941,1.941,0,1,1,0,3.881Z" transform="translate(-296.351 -55.861)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_457" data-name="Group 457" transform="translate(4.938 4.641)">
                                                                        <g id="Group_456" data-name="Group 456" transform="translate(0)">
                                                                            <path id="Path_832" data-name="Path 832" d="M59.355,52.207a.777.777,0,0,0-.347.05l-.25.1.318-1.273a1.863,1.863,0,0,0-2.259-2.259l-1.274.319.1-.251a.776.776,0,0,0-.1-.747.765.765,0,0,0-.686-.311,8.044,8.044,0,0,0-4.87,2.4c-2.725,2.728-3.216,6.667-1.1,8.783a4.685,4.685,0,0,0,3.387,1.327,6.227,6.227,0,0,0,.887-.064,8.471,8.471,0,0,0,6.9-7.227A.776.776,0,0,0,59.355,52.207Zm-4.493-1.3,2.334-.582a.31.31,0,0,1,.376.376L56.99,53.03l-3.458,1.333Zm1.708,5.91a6.556,6.556,0,0,1-3.631,1.921,3.383,3.383,0,0,1-2.956-.823c-1.515-1.514-1.02-4.468,1.1-6.59a6.986,6.986,0,0,1,2.6-1.662L51.451,55.44a.776.776,0,0,0,1,1L58.23,54.22A6.982,6.982,0,0,1,56.57,56.817Z" transform="translate(-47.567 -47.829)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_459" data-name="Group 459" transform="translate(22.865 19.394)">
                                                                        <g id="Group_458" data-name="Group 458">
                                                                            <path id="Path_833" data-name="Path 833" d="M239.683,199.872a4.658,4.658,0,0,0-3.292,1.364,13.663,13.663,0,0,0-3.94,8.41l-.13,1.4a.776.776,0,0,0,.7.843c.024,0,.049,0,.073,0h.071l1.4-.127a13.663,13.663,0,0,0,8.411-3.94,4.661,4.661,0,0,0-3.293-7.957Zm2.2,6.855,0,0a12.11,12.11,0,0,1-7.452,3.493l-.472.043.043-.472a12.1,12.1,0,0,1,3.493-7.452,3.105,3.105,0,0,1,4.391,4.391Z" transform="translate(-232.318 -199.872)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_461" data-name="Group 461" transform="translate(11.224 17.064)">
                                                                        <g id="Group_460" data-name="Group 460">
                                                                            <path id="Path_834" data-name="Path 834" d="M120.5,175.861a3.493,3.493,0,0,0-3.493,3.493,1.164,1.164,0,0,1-1.164,1.164,3.493,3.493,0,0,0,0,6.986,8.16,8.16,0,0,0,8.151-8.151A3.493,3.493,0,0,0,120.5,175.861Zm-4.658,10.091a1.941,1.941,0,1,1,0-3.881,2.717,2.717,0,0,0,2.717-2.717,1.941,1.941,0,0,1,3.881,0A6.606,6.606,0,0,1,115.844,185.952Z" transform="translate(-112.351 -175.861)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_463" data-name="Group 463" transform="translate(36.063 13.432)">
                                                                        <g id="Group_462" data-name="Group 462">
                                                                            <path id="Path_835" data-name="Path 835" d="M373.776,138.429c-3,0-5.434,3.134-5.434,6.986a8.049,8.049,0,0,0,1.749,5.137.776.776,0,0,0,1.3-.186l.109-.244.675,1.126a1.863,1.863,0,0,0,3.2,0l.675-1.126.109.244a.776.776,0,0,0,.6.454.738.738,0,0,0,.109.008.776.776,0,0,0,.594-.276,8.049,8.049,0,0,0,1.749-5.137C379.21,141.563,376.772,138.429,373.776,138.429Zm.266,12.02a.311.311,0,0,1-.533,0l-1.237-2.062,1.5-3.388,1.5,3.388Zm2.953-2.023h0l-2.51-5.654a.776.776,0,0,0-1.419,0l-2.507,5.654a6.971,6.971,0,0,1-.662-3.011c0-3,1.741-5.434,3.881-5.434s3.881,2.438,3.881,5.434A6.971,6.971,0,0,1,376.995,148.427Z" transform="translate(-368.341 -138.429)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_465" data-name="Group 465" transform="translate(5.414 31.435)">
                                                                        <g id="Group_464" data-name="Group 464">
                                                                            <path id="Path_836" data-name="Path 836" d="M64.489,335.139l-.127-1.4a13.662,13.662,0,0,0-3.94-8.41,4.658,4.658,0,0,0-6.587,6.587,13.662,13.662,0,0,0,8.41,3.94l1.4.127h.071a.776.776,0,0,0,.779-.773Q64.492,335.176,64.489,335.139Zm-2.1-.828a12.11,12.11,0,0,1-7.452-3.493,3.105,3.105,0,0,1,0-4.391l0,0a3.105,3.105,0,0,1,4.391,0h0a12.1,12.1,0,0,1,3.493,7.452l.043.472Z" transform="translate(-52.471 -323.967)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_467" data-name="Group 467" transform="translate(32.183 29.484)">
                                                                        <g id="Group_466" data-name="Group 466">
                                                                            <path id="Path_837" data-name="Path 837" d="M336.5,303.861a3.493,3.493,0,0,0-3.493,3.493,1.164,1.164,0,0,1-1.164,1.164,3.493,3.493,0,1,0,0,6.986A8.16,8.16,0,0,0,340,307.354,3.493,3.493,0,0,0,336.5,303.861Zm-4.658,10.091a1.941,1.941,0,0,1,0-3.881,2.717,2.717,0,0,0,2.717-2.717,1.941,1.941,0,1,1,3.881,0A6.606,6.606,0,0,1,331.844,313.952Z" transform="translate(-328.351 -303.861)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_469" data-name="Group 469" transform="translate(18.912 34.123)">
                                                                        <g id="Group_468" data-name="Group 468">
                                                                            <path id="Path_838" data-name="Path 838" d="M204.074,358.979a8.467,8.467,0,0,0-6.909-7.233,4.9,4.9,0,0,0-4.269,1.262c-2.118,2.118-1.63,6.055,1.1,8.782a8.044,8.044,0,0,0,4.87,2.395.626.626,0,0,0,.066,0,.776.776,0,0,0,.724-1.055l-.1-.25,1.273.318a1.862,1.862,0,0,0,2.26-2.258l-.318-1.274.25.1a.775.775,0,0,0,1.053-.783Zm-2.574,2.635a.311.311,0,0,1-.3.082l-2.329-.582-1.332-3.459L201,358.987l.58,2.332A.3.3,0,0,1,201.5,361.613Zm-5.033-6.037a.776.776,0,0,0-1,1l2.224,5.773a6.972,6.972,0,0,1-2.6-1.661c-2.118-2.118-2.611-5.074-1.1-6.587a3.169,3.169,0,0,1,2.3-.871,4.72,4.72,0,0,1,.659.048,6.56,6.56,0,0,1,3.633,1.92,6.979,6.979,0,0,1,1.66,2.6Z" transform="translate(-191.579 -351.663)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_471" data-name="Group 471" transform="translate(0.357 17.808)">
                                                                        <g id="Group_470" data-name="Group 470" transform="translate(0)">
                                                                            <path id="Path_839" data-name="Path 839" d="M7.683,189.517h0a3.493,3.493,0,1,0-4.88-5l-.059.059a8.151,8.151,0,0,0,0,11.527,3.493,3.493,0,1,0,4.939-4.939A1.164,1.164,0,0,1,7.683,189.517Zm-1.1,5.492a1.986,1.986,0,0,1-2.744,0,6.6,6.6,0,0,1,0-9.331h0a1.941,1.941,0,0,1,2.744,2.745,2.721,2.721,0,0,0,0,3.843A1.941,1.941,0,0,1,6.586,195.009Z" transform="translate(-0.357 -183.524)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
														میان وعده
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="meal" id="dinner" value="dinner">
                                                    <label for="dinner">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="49.133" height="32.09" viewBox="0 0 49.133 32.09">
                                                                <path id="chicken-leg" d="M47.079,25.124H39.506c.455-.151.909-.316,1.352-.493,2.9-1.158,4.367-2.52,4.367-4.047,0-2.347-1.9-3.136-3.579-3.831a11.357,11.357,0,0,1-2.071-1.025.72.72,0,0,0-.816,1.186,12.427,12.427,0,0,0,2.335,1.169c1.719.713,2.691,1.18,2.691,2.5,0,.843-1.262,1.831-3.462,2.711a35.84,35.84,0,0,1-6.948,1.829H31.019a10.454,10.454,0,0,0,3.491-5.267A14.473,14.473,0,0,1,38.63,13.24a2.176,2.176,0,0,0,.7-1.872l4.1-3.054a.332.332,0,0,1,.383-.007,2.941,2.941,0,0,0,2.645.472,2.447,2.447,0,0,0,1.463-1.339,2.649,2.649,0,0,0-.009-2.117,2.706,2.706,0,0,0-2.164-1.618,2.706,2.706,0,0,0-.9-2.55A2.649,2.649,0,0,0,42.84.515a2.449,2.449,0,0,0-1.715,1,2.941,2.941,0,0,0-.341,2.664.332.332,0,0,1-.12.362l-4.144,3a2.176,2.176,0,0,0-2,.108A14.473,14.473,0,0,1,26.977,9.6a10.37,10.37,0,0,0-6.3,1.914,9.2,9.2,0,0,0-3.649,5.768,8.28,8.28,0,0,0,1.447,6.454,8.143,8.143,0,0,0,1.3,1.39H10.659c-5.538-1.116-8.23-3.877-8.23-8.441a14.328,14.328,0,0,1,4.257-9.82,15.264,15.264,0,0,1,11-4.64A22.548,22.548,0,0,1,31.3,7a.72.72,0,0,0,.887-1.134A24.015,24.015,0,0,0,17.683.783,16.693,16.693,0,0,0,5.656,5.857,15.777,15.777,0,0,0,.989,16.683a8.8,8.8,0,0,0,5.125,8.441H2.054a2.054,2.054,0,0,0,0,4.109h2.61a.1.1,0,0,1,.092.061l.457,1.119a3.487,3.487,0,0,0,3.241,2.177H40.679a3.487,3.487,0,0,0,3.241-2.177l.457-1.118a.1.1,0,0,1,.092-.062h2.61a2.054,2.054,0,0,0,0-4.109ZM41.509,5.7a1.775,1.775,0,0,0,.654-1.935,1.614,1.614,0,0,1,.12-1.4A1.009,1.009,0,0,1,43,1.945a1.206,1.206,0,0,1,.915.3A1.247,1.247,0,0,1,44.3,3.575a1.2,1.2,0,0,0,1.14,1.553h0A1.247,1.247,0,0,1,46.6,5.9a1.205,1.205,0,0,1,.012.963A1.011,1.011,0,0,1,46,7.418a1.615,1.615,0,0,1-1.375-.306,1.775,1.775,0,0,0-2.043.046l-3.892,2.895L37.58,8.548ZM19.637,22.882a6.853,6.853,0,0,1-1.192-5.344,7.768,7.768,0,0,1,3.085-4.866,8.985,8.985,0,0,1,5.456-1.634,15.84,15.84,0,0,0,8.258-2.144.71.71,0,0,1,.817.044l.009.007a.591.591,0,0,1,.079.088L37.8,11.274a.562.562,0,0,1,.06.1l0,0a.709.709,0,0,1-.2.8,15.836,15.836,0,0,0-4.518,7.237,8.988,8.988,0,0,1-3.193,4.716,8.029,8.029,0,0,1-1.789.991H22.5a6.768,6.768,0,0,1-2.865-2.242Zm27.441,4.911H15.349a.72.72,0,0,0,0,1.439h27.5l-.259.636a2.054,2.054,0,0,1-1.908,1.282H8.453a2.054,2.054,0,0,1-1.908-1.282l-.259-.636H12a.72.72,0,0,0,0-1.439H2.054a.615.615,0,0,1,0-1.23H47.079a.615.615,0,0,1,0,1.23Zm0,0" transform="translate(0 -0.499)" fill="#05445e"/>
                                                            </svg>

                                                        </div>
                                                        <span>
														شام
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="meal" id="lunch" value="lunch">
                                                    <label for="lunch">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="56.875" height="41.707" viewBox="0 0 56.875 41.707">
                                                                <g id="meal" transform="translate(0 -68.272)">
                                                                    <g id="Group_451" data-name="Group 451" transform="translate(0 68.272)">
                                                                        <g id="Group_450" data-name="Group 450">
                                                                            <path id="Path_824" data-name="Path 824" d="M239.454,81.642a.948.948,0,0,0,.847,1.7,4.452,4.452,0,0,0,2.42-3.692A3.377,3.377,0,0,0,241.5,77.08c-.464-.464-.67-.693-.67-1.226s.206-.761.67-1.226a3.377,3.377,0,0,0,1.226-2.566,4.448,4.448,0,0,0-2.42-3.691.948.948,0,0,0-.853,1.693,2.584,2.584,0,0,1,1.377,2c0,.533-.206.761-.67,1.226a3.3,3.3,0,0,0,0,5.132c.464.464.67.693.67,1.226A2.586,2.586,0,0,1,239.454,81.642Z" transform="translate(-212.388 -68.272)" fill="#05445e"/>
                                                                            <path id="Path_825" data-name="Path 825" d="M172.56,127.039a2.581,2.581,0,0,1-1.377,2,.948.948,0,0,0,.853,1.694,4.452,4.452,0,0,0,2.42-3.692,3.377,3.377,0,0,0-1.226-2.566c-.464-.464-.67-.693-.67-1.226a2.58,2.58,0,0,1,1.372-2,.948.948,0,0,0-.847-1.7,4.448,4.448,0,0,0-2.42,3.691,3.377,3.377,0,0,0,1.226,2.566C172.354,126.278,172.56,126.507,172.56,127.039Z" transform="translate(-151.706 -113.77)" fill="#05445e"/>
                                                                            <path id="Path_826" data-name="Path 826" d="M309.1,127.046a2.58,2.58,0,0,1-1.376,2,.948.948,0,0,0,.852,1.694,4.45,4.45,0,0,0,2.42-3.692,3.377,3.377,0,0,0-1.226-2.566c-.464-.464-.67-.693-.67-1.226a2.58,2.58,0,0,1,1.372-2,.948.948,0,0,0-.847-1.7,4.446,4.446,0,0,0-2.42,3.691,3.377,3.377,0,0,0,1.226,2.566C308.889,126.285,309.1,126.513,309.1,127.046Z" transform="translate(-273.074 -113.776)" fill="#05445e"/>
                                                                            <path id="Path_827" data-name="Path 827" d="M111.886,242.722a1.887,1.887,0,0,1,1.6.887.949.949,0,0,0,1.268.317,1.855,1.855,0,0,1,2.2.249.948.948,0,0,0,1.587-.634,1.885,1.885,0,0,1,3.458-.916.983.983,0,0,0,1.58,0,1.939,1.939,0,0,1,2.965-.238.949.949,0,0,0,1.585-.317,1.889,1.889,0,0,1,3.665.628c0,.02-.013.111-.015.131a.949.949,0,0,0,1.267.964,1.79,1.79,0,0,1,2.029.49.949.949,0,0,0,1.585-.317,1.881,1.881,0,0,1,3.59.159.948.948,0,0,0,1.268.632,1.886,1.886,0,0,1,2.3.746.946.946,0,0,0,1.267.318,1.881,1.881,0,0,1,2.338.373.948.948,0,0,0,1.411-1.266,3.811,3.811,0,0,0-3.93-1.086,3.777,3.777,0,0,0-3.184-1.086,3.769,3.769,0,0,0-6.23-.519,3.741,3.741,0,0,0-1.921-.461,3.783,3.783,0,0,0-6.608-1.439,3.88,3.88,0,0,0-4.174.374,3.776,3.776,0,0,0-5.771,1.311,3.731,3.731,0,0,0-2.447-.077,3.765,3.765,0,0,0-2.684-1.119.948.948,0,0,0,0,1.9Z" transform="translate(-98.615 -219.974)" fill="#05445e"/>
                                                                            <path id="Path_828" data-name="Path 828" d="M55.929,324.262H.95A.948.948,0,0,0,0,325.21a4.745,4.745,0,0,0,4.74,4.74h1a8.543,8.543,0,0,0,8.479,7.583H42.658a8.542,8.542,0,0,0,8.478-7.583h1a4.745,4.745,0,0,0,4.74-4.74A.948.948,0,0,0,55.929,324.262Zm-3.792,3.792h-1.9a.948.948,0,0,0-.948.948,6.643,6.643,0,0,1-6.635,6.635H14.221a6.645,6.645,0,0,1-6.568-5.687h38.8a.948.948,0,0,0,0-1.9H4.742a2.849,2.849,0,0,1-2.682-1.9H54.819A2.849,2.849,0,0,1,52.137,328.054Z" transform="translate(-0.002 -295.826)" fill="#05445e"/>
                                                                            <path id="Path_829" data-name="Path 829" d="M.575,240.746l13.271,5.687a.948.948,0,1,0,.747-1.742L1.322,239a.948.948,0,0,0-.747,1.742Z" transform="translate(0 -219.97)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
														ناهار
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="meal" id="breakfast" value="breakfast">
                                                    <label for="breakfast">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="51" height="40.8" viewBox="0 0 51 40.8">
                                                                <g id="breakfast" transform="translate(0 -48)">
                                                                    <g id="Group_437" data-name="Group 437" transform="translate(8.5 51.4)">
                                                                        <g id="Group_436" data-name="Group 436" transform="translate(0 0)">
                                                                            <path id="Path_817" data-name="Path 817" d="M97,80a17,17,0,1,0,17,17A17,17,0,0,0,97,80Zm0,32.3A15.3,15.3,0,1,1,112.3,97,15.3,15.3,0,0,1,97,112.3Z" transform="translate(-80 -80)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_439" data-name="Group 439" transform="translate(44.2 48.001)">
                                                                        <g id="Group_438" data-name="Group 438">
                                                                            <path id="Path_818" data-name="Path 818" d="M421.51,48.173a2.081,2.081,0,0,0-2.275.452A10.98,10.98,0,0,0,416,56.439V67.561a2.55,2.55,0,0,0,1.7,2.394V86.261a2.55,2.55,0,1,0,5.1,0V50.1A2.081,2.081,0,0,0,421.51,48.173ZM421.1,86.261a.85.85,0,1,1-1.7,0V70.111h1.7Zm0-17.85h-2.55a.85.85,0,0,1-.85-.85V56.439a9.292,9.292,0,0,1,2.739-6.611.367.367,0,0,1,.264-.116.417.417,0,0,1,.158.033.37.37,0,0,1,.239.358Z" transform="translate(-416 -48.013)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_441" data-name="Group 441" transform="translate(15.3 62.45)">
                                                                        <g id="Group_440" data-name="Group 440" transform="translate(0 0)">
                                                                            <path id="Path_819" data-name="Path 819" d="M147.4,184a3.4,3.4,0,1,0,3.4,3.4A3.4,3.4,0,0,0,147.4,184Zm0,5.1a1.7,1.7,0,1,1,1.7-1.7A1.7,1.7,0,0,1,147.4,189.1Z" transform="translate(-144 -184)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_443" data-name="Group 443" transform="translate(11.9 58.2)">
                                                                        <g id="Group_442" data-name="Group 442">
                                                                            <path id="Path_820" data-name="Path 820" d="M125.673,148.821l-1.494-1.494a.946.946,0,0,1-.279-.674A2.656,2.656,0,0,0,121.247,144h-3.4a2.67,2.67,0,0,0-1.876.777l-3.194,3.194a2.635,2.635,0,0,0-.777,1.876v3.606a2.635,2.635,0,0,0,.777,1.876l1.494,1.494a.946.946,0,0,1,.279.674,2.656,2.656,0,0,0,2.653,2.653h1.7a2.67,2.67,0,0,0,1.876-.777l2.344-2.344a.961.961,0,0,1,.674-.279,2.656,2.656,0,0,0,2.653-2.653v-3.4A2.635,2.635,0,0,0,125.673,148.821Zm-.923,5.276a.954.954,0,0,1-.953.953,2.67,2.67,0,0,0-1.876.777l-2.344,2.344a.961.961,0,0,1-.674.279h-1.7a.954.954,0,0,1-.953-.953,2.635,2.635,0,0,0-.777-1.876l-1.494-1.494a.946.946,0,0,1-.279-.674v-3.606a.946.946,0,0,1,.279-.674l3.194-3.194a.961.961,0,0,1,.674-.279h3.4a.954.954,0,0,1,.953.953,2.635,2.635,0,0,0,.777,1.876l1.494,1.494a.946.946,0,0,1,.279.674Z" transform="translate(-112 -144)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_445" data-name="Group 445" transform="translate(18.7 66.7)">
                                                                        <g id="Group_444" data-name="Group 444" transform="translate(0 0)">
                                                                            <path id="Path_821" data-name="Path 821" d="M191.053,227.65l-3.4-3.4a.85.85,0,0,0-1.451.6v1.7a.85.85,0,0,1-.85.85,2.55,2.55,0,0,0-2.55,2.55.85.85,0,0,1-.85.85,2.55,2.55,0,0,0-2.55,2.55.85.85,0,0,1-.85.85h-1.7a.85.85,0,0,0-.6,1.451l3.4,3.4a.85.85,0,0,0,.6.249h1.7a2.55,2.55,0,0,0,2.55-2.55.85.85,0,0,1,.85-.85,2.55,2.55,0,0,0,2.55-2.55.85.85,0,0,1,.85-.85,2.55,2.55,0,0,0,2.55-2.55v-1.7A.85.85,0,0,0,191.053,227.65Zm-1.451,2.3a.85.85,0,0,1-.85.85,2.55,2.55,0,0,0-2.55,2.55.85.85,0,0,1-.85.85,2.55,2.55,0,0,0-2.55,2.55.85.85,0,0,1-.85.85H180.6l-1.721-1.721a2.55,2.55,0,0,0,2.219-2.529.85.85,0,0,1,.85-.85,2.55,2.55,0,0,0,2.55-2.55.85.85,0,0,1,.85-.85,2.55,2.55,0,0,0,2.529-2.219L189.6,228.6Z" transform="translate(-176.002 -224.002)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_447" data-name="Group 447" transform="translate(24.65 54.801)">
                                                                        <g id="Group_446" data-name="Group 446">
                                                                            <path id="Path_822" data-name="Path 822" d="M245.5,120.9l-.146-.145-4.25-4.25-3.546-3.545a3.254,3.254,0,1,0-4.6,4.6l.146.145,4.25,4.25,3.546,3.545a3.254,3.254,0,0,0,4.6-4.6Zm-11.238-6.834a1.554,1.554,0,0,1,.991-.36h0a1.568,1.568,0,0,1,1.1.455l2.1,2.1h-4.388A1.555,1.555,0,0,1,234.261,114.069Zm1.493,3.89h4.4l2.55,2.55h-4.4Zm8.439,6.44a1.555,1.555,0,0,1-.991.36h0a1.566,1.566,0,0,1-1.1-.456l-2.1-2.094h4.388A1.555,1.555,0,0,1,244.193,124.4Z" transform="translate(-232.002 -112.01)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_449" data-name="Group 449" transform="translate(0 48)">
                                                                        <g id="Group_448" data-name="Group 448">
                                                                            <path id="Path_823" data-name="Path 823" d="M6.8,48v6.8H5.1V48H3.4v6.8H1.7V48H0V59.05a4.232,4.232,0,0,0,1.7,3.378V86.25a2.55,2.55,0,1,0,5.1,0V62.428A4.232,4.232,0,0,0,8.5,59.05V48ZM5.1,86.25a.85.85,0,0,1-1.7,0V63.3H5.1Zm1.7-27.2a2.55,2.55,0,0,1-5.1,0V56.5H6.8Z" transform="translate(0 -48)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
														صبحانه
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="full">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="meal" id="allmeal" value="allmeal">
                                                    <label for="allmeal">

														<span>
														همه ی وعده ها رو می خورم
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <section class="meal2">
                                        <div class="section-title">
                                            <span>کدوم وعده ها رو بیرون میل می کنی ؟</span>
                                        </div>
                                        <ul class="meal2">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="outmeal" id="outsnack" value="outsnack">
                                                    <label for="outsnack">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="46.576" height="46.646" viewBox="0 0 46.576 46.646">
                                                                <g id="nuts" transform="translate(-0.357 0)">
                                                                    <g id="Group_453" data-name="Group 453" transform="translate(18.987 0)">
                                                                        <g id="Group_452" data-name="Group 452" transform="translate(0 0)">
                                                                            <path id="Path_830" data-name="Path 830" d="M198.5,1.346l-.9-1.08A.8.8,0,0,0,196.473.2a.788.788,0,0,0-.061.061l-.9,1.079a13.662,13.662,0,0,0-3.162,8.733,4.658,4.658,0,1,0,9.315,0A13.663,13.663,0,0,0,198.5,1.346Zm-1.5,11.837a3.105,3.105,0,0,1-3.105-3.105,12.116,12.116,0,0,1,2.8-7.739l.3-.363.3.364a12.11,12.11,0,0,1,2.8,7.739A3.105,3.105,0,0,1,197.009,13.183Z" transform="translate(-192.351 0)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_455" data-name="Group 455" transform="translate(29.078 5.42)">
                                                                        <g id="Group_454" data-name="Group 454">
                                                                            <path id="Path_831" data-name="Path 831" d="M304.5,55.861a8.16,8.16,0,0,0-8.151,8.151,3.493,3.493,0,1,0,6.986,0,1.164,1.164,0,0,1,1.164-1.164,3.493,3.493,0,0,0,0-6.986Zm0,5.434a2.717,2.717,0,0,0-2.717,2.717,1.941,1.941,0,1,1-3.881,0,6.606,6.606,0,0,1,6.6-6.6,1.941,1.941,0,1,1,0,3.881Z" transform="translate(-296.351 -55.861)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_457" data-name="Group 457" transform="translate(4.938 4.641)">
                                                                        <g id="Group_456" data-name="Group 456" transform="translate(0)">
                                                                            <path id="Path_832" data-name="Path 832" d="M59.355,52.207a.777.777,0,0,0-.347.05l-.25.1.318-1.273a1.863,1.863,0,0,0-2.259-2.259l-1.274.319.1-.251a.776.776,0,0,0-.1-.747.765.765,0,0,0-.686-.311,8.044,8.044,0,0,0-4.87,2.4c-2.725,2.728-3.216,6.667-1.1,8.783a4.685,4.685,0,0,0,3.387,1.327,6.227,6.227,0,0,0,.887-.064,8.471,8.471,0,0,0,6.9-7.227A.776.776,0,0,0,59.355,52.207Zm-4.493-1.3,2.334-.582a.31.31,0,0,1,.376.376L56.99,53.03l-3.458,1.333Zm1.708,5.91a6.556,6.556,0,0,1-3.631,1.921,3.383,3.383,0,0,1-2.956-.823c-1.515-1.514-1.02-4.468,1.1-6.59a6.986,6.986,0,0,1,2.6-1.662L51.451,55.44a.776.776,0,0,0,1,1L58.23,54.22A6.982,6.982,0,0,1,56.57,56.817Z" transform="translate(-47.567 -47.829)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_459" data-name="Group 459" transform="translate(22.865 19.394)">
                                                                        <g id="Group_458" data-name="Group 458">
                                                                            <path id="Path_833" data-name="Path 833" d="M239.683,199.872a4.658,4.658,0,0,0-3.292,1.364,13.663,13.663,0,0,0-3.94,8.41l-.13,1.4a.776.776,0,0,0,.7.843c.024,0,.049,0,.073,0h.071l1.4-.127a13.663,13.663,0,0,0,8.411-3.94,4.661,4.661,0,0,0-3.293-7.957Zm2.2,6.855,0,0a12.11,12.11,0,0,1-7.452,3.493l-.472.043.043-.472a12.1,12.1,0,0,1,3.493-7.452,3.105,3.105,0,0,1,4.391,4.391Z" transform="translate(-232.318 -199.872)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_461" data-name="Group 461" transform="translate(11.224 17.064)">
                                                                        <g id="Group_460" data-name="Group 460">
                                                                            <path id="Path_834" data-name="Path 834" d="M120.5,175.861a3.493,3.493,0,0,0-3.493,3.493,1.164,1.164,0,0,1-1.164,1.164,3.493,3.493,0,0,0,0,6.986,8.16,8.16,0,0,0,8.151-8.151A3.493,3.493,0,0,0,120.5,175.861Zm-4.658,10.091a1.941,1.941,0,1,1,0-3.881,2.717,2.717,0,0,0,2.717-2.717,1.941,1.941,0,0,1,3.881,0A6.606,6.606,0,0,1,115.844,185.952Z" transform="translate(-112.351 -175.861)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_463" data-name="Group 463" transform="translate(36.063 13.432)">
                                                                        <g id="Group_462" data-name="Group 462">
                                                                            <path id="Path_835" data-name="Path 835" d="M373.776,138.429c-3,0-5.434,3.134-5.434,6.986a8.049,8.049,0,0,0,1.749,5.137.776.776,0,0,0,1.3-.186l.109-.244.675,1.126a1.863,1.863,0,0,0,3.2,0l.675-1.126.109.244a.776.776,0,0,0,.6.454.738.738,0,0,0,.109.008.776.776,0,0,0,.594-.276,8.049,8.049,0,0,0,1.749-5.137C379.21,141.563,376.772,138.429,373.776,138.429Zm.266,12.02a.311.311,0,0,1-.533,0l-1.237-2.062,1.5-3.388,1.5,3.388Zm2.953-2.023h0l-2.51-5.654a.776.776,0,0,0-1.419,0l-2.507,5.654a6.971,6.971,0,0,1-.662-3.011c0-3,1.741-5.434,3.881-5.434s3.881,2.438,3.881,5.434A6.971,6.971,0,0,1,376.995,148.427Z" transform="translate(-368.341 -138.429)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_465" data-name="Group 465" transform="translate(5.414 31.435)">
                                                                        <g id="Group_464" data-name="Group 464">
                                                                            <path id="Path_836" data-name="Path 836" d="M64.489,335.139l-.127-1.4a13.662,13.662,0,0,0-3.94-8.41,4.658,4.658,0,0,0-6.587,6.587,13.662,13.662,0,0,0,8.41,3.94l1.4.127h.071a.776.776,0,0,0,.779-.773Q64.492,335.176,64.489,335.139Zm-2.1-.828a12.11,12.11,0,0,1-7.452-3.493,3.105,3.105,0,0,1,0-4.391l0,0a3.105,3.105,0,0,1,4.391,0h0a12.1,12.1,0,0,1,3.493,7.452l.043.472Z" transform="translate(-52.471 -323.967)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_467" data-name="Group 467" transform="translate(32.183 29.484)">
                                                                        <g id="Group_466" data-name="Group 466">
                                                                            <path id="Path_837" data-name="Path 837" d="M336.5,303.861a3.493,3.493,0,0,0-3.493,3.493,1.164,1.164,0,0,1-1.164,1.164,3.493,3.493,0,1,0,0,6.986A8.16,8.16,0,0,0,340,307.354,3.493,3.493,0,0,0,336.5,303.861Zm-4.658,10.091a1.941,1.941,0,0,1,0-3.881,2.717,2.717,0,0,0,2.717-2.717,1.941,1.941,0,1,1,3.881,0A6.606,6.606,0,0,1,331.844,313.952Z" transform="translate(-328.351 -303.861)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_469" data-name="Group 469" transform="translate(18.912 34.123)">
                                                                        <g id="Group_468" data-name="Group 468">
                                                                            <path id="Path_838" data-name="Path 838" d="M204.074,358.979a8.467,8.467,0,0,0-6.909-7.233,4.9,4.9,0,0,0-4.269,1.262c-2.118,2.118-1.63,6.055,1.1,8.782a8.044,8.044,0,0,0,4.87,2.395.626.626,0,0,0,.066,0,.776.776,0,0,0,.724-1.055l-.1-.25,1.273.318a1.862,1.862,0,0,0,2.26-2.258l-.318-1.274.25.1a.775.775,0,0,0,1.053-.783Zm-2.574,2.635a.311.311,0,0,1-.3.082l-2.329-.582-1.332-3.459L201,358.987l.58,2.332A.3.3,0,0,1,201.5,361.613Zm-5.033-6.037a.776.776,0,0,0-1,1l2.224,5.773a6.972,6.972,0,0,1-2.6-1.661c-2.118-2.118-2.611-5.074-1.1-6.587a3.169,3.169,0,0,1,2.3-.871,4.72,4.72,0,0,1,.659.048,6.56,6.56,0,0,1,3.633,1.92,6.979,6.979,0,0,1,1.66,2.6Z" transform="translate(-191.579 -351.663)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_471" data-name="Group 471" transform="translate(0.357 17.808)">
                                                                        <g id="Group_470" data-name="Group 470" transform="translate(0)">
                                                                            <path id="Path_839" data-name="Path 839" d="M7.683,189.517h0a3.493,3.493,0,1,0-4.88-5l-.059.059a8.151,8.151,0,0,0,0,11.527,3.493,3.493,0,1,0,4.939-4.939A1.164,1.164,0,0,1,7.683,189.517Zm-1.1,5.492a1.986,1.986,0,0,1-2.744,0,6.6,6.6,0,0,1,0-9.331h0a1.941,1.941,0,0,1,2.744,2.745,2.721,2.721,0,0,0,0,3.843A1.941,1.941,0,0,1,6.586,195.009Z" transform="translate(-0.357 -183.524)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
														میان وعده
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="outmeal" id="outdinner" value="outdinner">
                                                    <label for="outdinner">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="49.133" height="32.09" viewBox="0 0 49.133 32.09">
                                                                <path id="chicken-leg" d="M47.079,25.124H39.506c.455-.151.909-.316,1.352-.493,2.9-1.158,4.367-2.52,4.367-4.047,0-2.347-1.9-3.136-3.579-3.831a11.357,11.357,0,0,1-2.071-1.025.72.72,0,0,0-.816,1.186,12.427,12.427,0,0,0,2.335,1.169c1.719.713,2.691,1.18,2.691,2.5,0,.843-1.262,1.831-3.462,2.711a35.84,35.84,0,0,1-6.948,1.829H31.019a10.454,10.454,0,0,0,3.491-5.267A14.473,14.473,0,0,1,38.63,13.24a2.176,2.176,0,0,0,.7-1.872l4.1-3.054a.332.332,0,0,1,.383-.007,2.941,2.941,0,0,0,2.645.472,2.447,2.447,0,0,0,1.463-1.339,2.649,2.649,0,0,0-.009-2.117,2.706,2.706,0,0,0-2.164-1.618,2.706,2.706,0,0,0-.9-2.55A2.649,2.649,0,0,0,42.84.515a2.449,2.449,0,0,0-1.715,1,2.941,2.941,0,0,0-.341,2.664.332.332,0,0,1-.12.362l-4.144,3a2.176,2.176,0,0,0-2,.108A14.473,14.473,0,0,1,26.977,9.6a10.37,10.37,0,0,0-6.3,1.914,9.2,9.2,0,0,0-3.649,5.768,8.28,8.28,0,0,0,1.447,6.454,8.143,8.143,0,0,0,1.3,1.39H10.659c-5.538-1.116-8.23-3.877-8.23-8.441a14.328,14.328,0,0,1,4.257-9.82,15.264,15.264,0,0,1,11-4.64A22.548,22.548,0,0,1,31.3,7a.72.72,0,0,0,.887-1.134A24.015,24.015,0,0,0,17.683.783,16.693,16.693,0,0,0,5.656,5.857,15.777,15.777,0,0,0,.989,16.683a8.8,8.8,0,0,0,5.125,8.441H2.054a2.054,2.054,0,0,0,0,4.109h2.61a.1.1,0,0,1,.092.061l.457,1.119a3.487,3.487,0,0,0,3.241,2.177H40.679a3.487,3.487,0,0,0,3.241-2.177l.457-1.118a.1.1,0,0,1,.092-.062h2.61a2.054,2.054,0,0,0,0-4.109ZM41.509,5.7a1.775,1.775,0,0,0,.654-1.935,1.614,1.614,0,0,1,.12-1.4A1.009,1.009,0,0,1,43,1.945a1.206,1.206,0,0,1,.915.3A1.247,1.247,0,0,1,44.3,3.575a1.2,1.2,0,0,0,1.14,1.553h0A1.247,1.247,0,0,1,46.6,5.9a1.205,1.205,0,0,1,.012.963A1.011,1.011,0,0,1,46,7.418a1.615,1.615,0,0,1-1.375-.306,1.775,1.775,0,0,0-2.043.046l-3.892,2.895L37.58,8.548ZM19.637,22.882a6.853,6.853,0,0,1-1.192-5.344,7.768,7.768,0,0,1,3.085-4.866,8.985,8.985,0,0,1,5.456-1.634,15.84,15.84,0,0,0,8.258-2.144.71.71,0,0,1,.817.044l.009.007a.591.591,0,0,1,.079.088L37.8,11.274a.562.562,0,0,1,.06.1l0,0a.709.709,0,0,1-.2.8,15.836,15.836,0,0,0-4.518,7.237,8.988,8.988,0,0,1-3.193,4.716,8.029,8.029,0,0,1-1.789.991H22.5a6.768,6.768,0,0,1-2.865-2.242Zm27.441,4.911H15.349a.72.72,0,0,0,0,1.439h27.5l-.259.636a2.054,2.054,0,0,1-1.908,1.282H8.453a2.054,2.054,0,0,1-1.908-1.282l-.259-.636H12a.72.72,0,0,0,0-1.439H2.054a.615.615,0,0,1,0-1.23H47.079a.615.615,0,0,1,0,1.23Zm0,0" transform="translate(0 -0.499)" fill="#05445e"/>
                                                            </svg>

                                                        </div>
                                                        <span>
														شام
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="outmeal" id="outlunch" value="outlunch">
                                                    <label for="outlunch">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="56.875" height="41.707" viewBox="0 0 56.875 41.707">
                                                                <g id="meal" transform="translate(0 -68.272)">
                                                                    <g id="Group_451" data-name="Group 451" transform="translate(0 68.272)">
                                                                        <g id="Group_450" data-name="Group 450">
                                                                            <path id="Path_824" data-name="Path 824" d="M239.454,81.642a.948.948,0,0,0,.847,1.7,4.452,4.452,0,0,0,2.42-3.692A3.377,3.377,0,0,0,241.5,77.08c-.464-.464-.67-.693-.67-1.226s.206-.761.67-1.226a3.377,3.377,0,0,0,1.226-2.566,4.448,4.448,0,0,0-2.42-3.691.948.948,0,0,0-.853,1.693,2.584,2.584,0,0,1,1.377,2c0,.533-.206.761-.67,1.226a3.3,3.3,0,0,0,0,5.132c.464.464.67.693.67,1.226A2.586,2.586,0,0,1,239.454,81.642Z" transform="translate(-212.388 -68.272)" fill="#05445e"/>
                                                                            <path id="Path_825" data-name="Path 825" d="M172.56,127.039a2.581,2.581,0,0,1-1.377,2,.948.948,0,0,0,.853,1.694,4.452,4.452,0,0,0,2.42-3.692,3.377,3.377,0,0,0-1.226-2.566c-.464-.464-.67-.693-.67-1.226a2.58,2.58,0,0,1,1.372-2,.948.948,0,0,0-.847-1.7,4.448,4.448,0,0,0-2.42,3.691,3.377,3.377,0,0,0,1.226,2.566C172.354,126.278,172.56,126.507,172.56,127.039Z" transform="translate(-151.706 -113.77)" fill="#05445e"/>
                                                                            <path id="Path_826" data-name="Path 826" d="M309.1,127.046a2.58,2.58,0,0,1-1.376,2,.948.948,0,0,0,.852,1.694,4.45,4.45,0,0,0,2.42-3.692,3.377,3.377,0,0,0-1.226-2.566c-.464-.464-.67-.693-.67-1.226a2.58,2.58,0,0,1,1.372-2,.948.948,0,0,0-.847-1.7,4.446,4.446,0,0,0-2.42,3.691,3.377,3.377,0,0,0,1.226,2.566C308.889,126.285,309.1,126.513,309.1,127.046Z" transform="translate(-273.074 -113.776)" fill="#05445e"/>
                                                                            <path id="Path_827" data-name="Path 827" d="M111.886,242.722a1.887,1.887,0,0,1,1.6.887.949.949,0,0,0,1.268.317,1.855,1.855,0,0,1,2.2.249.948.948,0,0,0,1.587-.634,1.885,1.885,0,0,1,3.458-.916.983.983,0,0,0,1.58,0,1.939,1.939,0,0,1,2.965-.238.949.949,0,0,0,1.585-.317,1.889,1.889,0,0,1,3.665.628c0,.02-.013.111-.015.131a.949.949,0,0,0,1.267.964,1.79,1.79,0,0,1,2.029.49.949.949,0,0,0,1.585-.317,1.881,1.881,0,0,1,3.59.159.948.948,0,0,0,1.268.632,1.886,1.886,0,0,1,2.3.746.946.946,0,0,0,1.267.318,1.881,1.881,0,0,1,2.338.373.948.948,0,0,0,1.411-1.266,3.811,3.811,0,0,0-3.93-1.086,3.777,3.777,0,0,0-3.184-1.086,3.769,3.769,0,0,0-6.23-.519,3.741,3.741,0,0,0-1.921-.461,3.783,3.783,0,0,0-6.608-1.439,3.88,3.88,0,0,0-4.174.374,3.776,3.776,0,0,0-5.771,1.311,3.731,3.731,0,0,0-2.447-.077,3.765,3.765,0,0,0-2.684-1.119.948.948,0,0,0,0,1.9Z" transform="translate(-98.615 -219.974)" fill="#05445e"/>
                                                                            <path id="Path_828" data-name="Path 828" d="M55.929,324.262H.95A.948.948,0,0,0,0,325.21a4.745,4.745,0,0,0,4.74,4.74h1a8.543,8.543,0,0,0,8.479,7.583H42.658a8.542,8.542,0,0,0,8.478-7.583h1a4.745,4.745,0,0,0,4.74-4.74A.948.948,0,0,0,55.929,324.262Zm-3.792,3.792h-1.9a.948.948,0,0,0-.948.948,6.643,6.643,0,0,1-6.635,6.635H14.221a6.645,6.645,0,0,1-6.568-5.687h38.8a.948.948,0,0,0,0-1.9H4.742a2.849,2.849,0,0,1-2.682-1.9H54.819A2.849,2.849,0,0,1,52.137,328.054Z" transform="translate(-0.002 -295.826)" fill="#05445e"/>
                                                                            <path id="Path_829" data-name="Path 829" d="M.575,240.746l13.271,5.687a.948.948,0,1,0,.747-1.742L1.322,239a.948.948,0,0,0-.747,1.742Z" transform="translate(0 -219.97)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
														ناهار
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="outmeal" id="outbreakfast" value="outbreakfast">
                                                    <label for="outbreakfast">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="51" height="40.8" viewBox="0 0 51 40.8">
                                                                <g id="breakfast" transform="translate(0 -48)">
                                                                    <g id="Group_437" data-name="Group 437" transform="translate(8.5 51.4)">
                                                                        <g id="Group_436" data-name="Group 436" transform="translate(0 0)">
                                                                            <path id="Path_817" data-name="Path 817" d="M97,80a17,17,0,1,0,17,17A17,17,0,0,0,97,80Zm0,32.3A15.3,15.3,0,1,1,112.3,97,15.3,15.3,0,0,1,97,112.3Z" transform="translate(-80 -80)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_439" data-name="Group 439" transform="translate(44.2 48.001)">
                                                                        <g id="Group_438" data-name="Group 438">
                                                                            <path id="Path_818" data-name="Path 818" d="M421.51,48.173a2.081,2.081,0,0,0-2.275.452A10.98,10.98,0,0,0,416,56.439V67.561a2.55,2.55,0,0,0,1.7,2.394V86.261a2.55,2.55,0,1,0,5.1,0V50.1A2.081,2.081,0,0,0,421.51,48.173ZM421.1,86.261a.85.85,0,1,1-1.7,0V70.111h1.7Zm0-17.85h-2.55a.85.85,0,0,1-.85-.85V56.439a9.292,9.292,0,0,1,2.739-6.611.367.367,0,0,1,.264-.116.417.417,0,0,1,.158.033.37.37,0,0,1,.239.358Z" transform="translate(-416 -48.013)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_441" data-name="Group 441" transform="translate(15.3 62.45)">
                                                                        <g id="Group_440" data-name="Group 440" transform="translate(0 0)">
                                                                            <path id="Path_819" data-name="Path 819" d="M147.4,184a3.4,3.4,0,1,0,3.4,3.4A3.4,3.4,0,0,0,147.4,184Zm0,5.1a1.7,1.7,0,1,1,1.7-1.7A1.7,1.7,0,0,1,147.4,189.1Z" transform="translate(-144 -184)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_443" data-name="Group 443" transform="translate(11.9 58.2)">
                                                                        <g id="Group_442" data-name="Group 442">
                                                                            <path id="Path_820" data-name="Path 820" d="M125.673,148.821l-1.494-1.494a.946.946,0,0,1-.279-.674A2.656,2.656,0,0,0,121.247,144h-3.4a2.67,2.67,0,0,0-1.876.777l-3.194,3.194a2.635,2.635,0,0,0-.777,1.876v3.606a2.635,2.635,0,0,0,.777,1.876l1.494,1.494a.946.946,0,0,1,.279.674,2.656,2.656,0,0,0,2.653,2.653h1.7a2.67,2.67,0,0,0,1.876-.777l2.344-2.344a.961.961,0,0,1,.674-.279,2.656,2.656,0,0,0,2.653-2.653v-3.4A2.635,2.635,0,0,0,125.673,148.821Zm-.923,5.276a.954.954,0,0,1-.953.953,2.67,2.67,0,0,0-1.876.777l-2.344,2.344a.961.961,0,0,1-.674.279h-1.7a.954.954,0,0,1-.953-.953,2.635,2.635,0,0,0-.777-1.876l-1.494-1.494a.946.946,0,0,1-.279-.674v-3.606a.946.946,0,0,1,.279-.674l3.194-3.194a.961.961,0,0,1,.674-.279h3.4a.954.954,0,0,1,.953.953,2.635,2.635,0,0,0,.777,1.876l1.494,1.494a.946.946,0,0,1,.279.674Z" transform="translate(-112 -144)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_445" data-name="Group 445" transform="translate(18.7 66.7)">
                                                                        <g id="Group_444" data-name="Group 444" transform="translate(0 0)">
                                                                            <path id="Path_821" data-name="Path 821" d="M191.053,227.65l-3.4-3.4a.85.85,0,0,0-1.451.6v1.7a.85.85,0,0,1-.85.85,2.55,2.55,0,0,0-2.55,2.55.85.85,0,0,1-.85.85,2.55,2.55,0,0,0-2.55,2.55.85.85,0,0,1-.85.85h-1.7a.85.85,0,0,0-.6,1.451l3.4,3.4a.85.85,0,0,0,.6.249h1.7a2.55,2.55,0,0,0,2.55-2.55.85.85,0,0,1,.85-.85,2.55,2.55,0,0,0,2.55-2.55.85.85,0,0,1,.85-.85,2.55,2.55,0,0,0,2.55-2.55v-1.7A.85.85,0,0,0,191.053,227.65Zm-1.451,2.3a.85.85,0,0,1-.85.85,2.55,2.55,0,0,0-2.55,2.55.85.85,0,0,1-.85.85,2.55,2.55,0,0,0-2.55,2.55.85.85,0,0,1-.85.85H180.6l-1.721-1.721a2.55,2.55,0,0,0,2.219-2.529.85.85,0,0,1,.85-.85,2.55,2.55,0,0,0,2.55-2.55.85.85,0,0,1,.85-.85,2.55,2.55,0,0,0,2.529-2.219L189.6,228.6Z" transform="translate(-176.002 -224.002)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_447" data-name="Group 447" transform="translate(24.65 54.801)">
                                                                        <g id="Group_446" data-name="Group 446">
                                                                            <path id="Path_822" data-name="Path 822" d="M245.5,120.9l-.146-.145-4.25-4.25-3.546-3.545a3.254,3.254,0,1,0-4.6,4.6l.146.145,4.25,4.25,3.546,3.545a3.254,3.254,0,0,0,4.6-4.6Zm-11.238-6.834a1.554,1.554,0,0,1,.991-.36h0a1.568,1.568,0,0,1,1.1.455l2.1,2.1h-4.388A1.555,1.555,0,0,1,234.261,114.069Zm1.493,3.89h4.4l2.55,2.55h-4.4Zm8.439,6.44a1.555,1.555,0,0,1-.991.36h0a1.566,1.566,0,0,1-1.1-.456l-2.1-2.094h4.388A1.555,1.555,0,0,1,244.193,124.4Z" transform="translate(-232.002 -112.01)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_449" data-name="Group 449" transform="translate(0 48)">
                                                                        <g id="Group_448" data-name="Group 448">
                                                                            <path id="Path_823" data-name="Path 823" d="M6.8,48v6.8H5.1V48H3.4v6.8H1.7V48H0V59.05a4.232,4.232,0,0,0,1.7,3.378V86.25a2.55,2.55,0,1,0,5.1,0V62.428A4.232,4.232,0,0,0,8.5,59.05V48ZM5.1,86.25a.85.85,0,0,1-1.7,0V63.3H5.1Zm1.7-27.2a2.55,2.55,0,0,1-5.1,0V56.5H6.8Z" transform="translate(0 -48)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span>
														صبحانه
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="full">
                                                <div class="radio-content">
                                                    <input type="checkbox" name="outmeal" id="nonemeal" value="nonemeal">
                                                    <label for="nonemeal">

														<span>
														معمولا بیرون غذا نمی خورم
														</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container blue">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon6.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>عادات غذایی</h3>
                                    <span class="level-number">
										مرحله ی 6 از 13
									</span>
                                    <span class="detail">
										برامون از عادت های غذاییت بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section>
                                        <div class="section-title small">
                                            <span>از کدوم غذا یا ماده ی غذایی متنفری ؟</span>
                                        </div>

                                        <div class="input-container gray">
                                            <textarea name="" id="food1" cols="30" rows="10" placeholder="مثلا: خورش قرمه سبزی، سیب،پیتزا  ..."></textarea>
                                            <div class="charNum"><span id="charsLeft3">10</span>/ 500</div>
                                        </div>

                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>عاشق کدوم غذا یا ماده غذایی هستی؟</span>
                                        </div>

                                        <div class="input-container gray">
                                            <textarea name="" id="food2" cols="30" rows="10" placeholder="مثلا: خورش قرمه سبزی، سیب،پیتزا  ..."></textarea>
                                            <div class="charNum"><span id="charsLeft4">10</span>/ 500</div>
                                        </div>

                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>به کدوم ماده ی غذایی حساسیت داری؟</span>
                                        </div>

                                        <div class="input-container gray">
                                            <textarea name="" id="food3" cols="30" rows="10" placeholder="مثلا: کدو، هویج، خورش کرفس و   ..."></textarea>
                                            <div class="charNum"><span id="charsLeft5">10</span>/ 500</div>
                                        </div>

                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container blue">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon6.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>عادات غذایی</h3>
                                    <span class="level-number">
										مرحله ی 6 از 13
									</span>
                                    <span class="detail">
										برامون از عادت های غذاییت بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section class="popradio">
                                        <div class="section-title small">
                                            <span>معمولا برای ناهار شرکت هستی ؟ </span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="worklunch" id="worklunchyes" value="worklunchyes">
                                                    <label for="worklunchyes">
                                                        <span class="text">بله </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="worklunch" id="worklunchno" value="worklunchno">
                                                    <label for="worklunchno">
                                                        <span class="text">خیر</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <section class="popradio">
                                        <div class="section-title small">
                                            <span>آیا صبحانه میل می کنی، (اسم) جان؟</span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="breakfeast" id="breakfeastyes" value="breakfeastyes">
                                                    <label for="breakfeastyes">
                                                        <span class="text">بله </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="breakfeast" id="breakfeastno" value="breakfeastno">
                                                    <label for="breakfeastno">
                                                        <span class="text">خیر</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>چرا صبحانه نمی خوری ؟ </span>
                                        </div>

                                        <div class="input-container gray small">
                                            <textarea name="" cols="30" rows="10" placeholder="مثلا: عادت ندارم یا وقت ندارم بخورم"></textarea>
                                        </div>
                                    </section>

                                    <section class="popradio">
                                        <div class="section-title small">
                                            <span>چند بار در هفته غذای سرخ شده می خوری؟</span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="fried" id="friedallday" value="friedallday">
                                                    <label for="friedallday">
                                                        <span class="text">هر روز</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="fried" id="friednotall" value="friednotall">
                                                    <label for="friednotall">
                                                        <span class="text">یک روز در میان </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="fried" id="frieddayweek" value="frieddayweek">
                                                    <label for="frieddayweek">
                                                        <span class="text">روز در هفته 2</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="fried" id="friedlow" value="friedlow">
                                                    <label for="friedlow">
                                                        <span class="text">خیلی کم </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container blue">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon6.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>عادات غذایی</h3>
                                    <span class="level-number">
										مرحله ی 6 از 13
									</span>
                                    <span class="detail">
										برامون از عادت های غذاییت بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section class="popradio shadow">
                                        <div class="section-title small">
                                            <span>کدوم عادت ها رو داری ؟ </span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitfasteat" value="habitfasteat">
                                                    <label for="habitfasteat">
                                                        <span class="text">تند، تند غذا می خورم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitdistract" value="habitdistract">
                                                    <label for="habitdistract">
                                                        <span class="text">معمولا حواسم به غذا خوردنم نیست</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitcandy" value="habitcandy">
                                                    <label for="habitcandy">
                                                        <span class="text">هر موقع شیرینی می بینم می خورم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitchuklet" value="habitchuklet">
                                                    <label for="habitchuklet">
                                                        <span class="text">خیلی شکلات می خورم و مقاومت ندارم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitchew" value="habitchew">
                                                    <label for="habitchew">
                                                        <span class="text">درست لقمه رو نمی جوم </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitsigar" value="habitsigar">
                                                    <label for="habitsigar">
                                                        <span class="text">بعد از غذا سیگار می کشم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitangry" value="habitangry">
                                                    <label for="habitangry">
                                                        <span class="text">وقتی عصبانی میشم خیلی می خورم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitstress" value="habitstress">
                                                    <label for="habitstress">
                                                        <span class="text">وقتی استرس دارم شروع می کنم به خوردن</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitsalt" value="habitsalt">
                                                    <label for="habitsalt">
                                                        <span class="text">زیاد به غذاهام نمک می زنم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="cock" value="cock">
                                                    <label for="cock">
                                                        <span class="text">خیلی نوشابه می خورم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitfast" value="habitfast">
                                                    <label for="habitfast">
                                                        <span class="text">نمی تونم خودم رو جلوی فست فود بگیرم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="habit" id="habitice" value="habitice">
                                                    <label for="habitice">
                                                        <span class="text">عاشق بستنی ام و هر موقع ببینیم، میخورم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <section class="popradio">
                                        <div class="section-title small">
                                            <span>عادت دیگه هم هست که بخوای بگی؟</span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="anotherhabit" id="anotherhabitno" value="anotherhabitno">
                                                    <label for="anotherhabitno">
                                                        <span class="text">نه همه رو گفتم </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="anotherhabit" id="anotherhabityes" value="anotherhabityes">
                                                    <label for="anotherhabityes">
                                                        <span class="text">آره باز هم هست</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>بقیه عادت ها رو بگو ...</span>
                                        </div>

                                        <div class="input-container gray">
                                            <textarea name="" id="food4" cols="30" rows="10" placeholder="مثلا: خورش قرمه سبزی، سیب،پیتزا ..."></textarea>
                                            <div class="charNum"><span id="charsLeft6">0</span>/ 500</div>
                                        </div>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon7.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>خواب </h3>
                                    <span class="level-number">
										مرحله ی 7  از 13
									</span>
                                    <span class="detail">
										خب بگو ببینم خوابت چجوریه ؟
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">

                                    <section class="wakeup">
                                        <div class="section-title  small">
                                            <span>چه ساعتی از خواب بیدار میشی ؟ </span>
                                        </div>
                                        <div class="select-container">
                                            <select>
                                                <option value="">ساعت بیداریت رو بنویس</option>
                                                <option value="">1:00</option>
                                                <option value="">2:00</option>
                                                <option value="">3:00</option>
                                                <option value="">4:00</option>
                                                <option value="">5:00</option>
                                                <option value="">6:00</option>
                                                <option value="">7:00</option>
                                                <option value="">8:00</option>
                                                <option value="">9:00</option>
                                                <option value="">10:00</option>
                                                <option value="">11:00</option>
                                                <option value="">12:00</option>
                                                <option value="">13:00</option>
                                                <option value="">14:00</option>
                                                <option value="">15:00</option>
                                                <option value="">16:00</option>
                                                <option value="">17:00</option>
                                                <option value="">18:00</option>
                                                <option value="">19:00</option>
                                                <option value="">20:00</option>
                                                <option value="">21:00</option>
                                                <option value="">22:00</option>
                                                <option value="">23:00</option>
                                                <option value="">24:00</option>
                                            </select>
                                        </div>

                                    </section>

                                    <section class="sleep">
                                        <div class="section-title small">
                                            <span>چه ساعتی می خوابی (اسم) ؟ </span>
                                        </div>
                                        <div class="select-container">
                                            <select>
                                                <option value="">ساعت خوابت رو بنویس</option>
                                                <option value="">1:00</option>
                                                <option value="">2:00</option>
                                                <option value="">3:00</option>
                                                <option value="">4:00</option>
                                                <option value="">5:00</option>
                                                <option value="">6:00</option>
                                                <option value="">7:00</option>
                                                <option value="">8:00</option>
                                                <option value="">9:00</option>
                                                <option value="">10:00</option>
                                                <option value="">11:00</option>
                                                <option value="">12:00</option>
                                                <option value="">13:00</option>
                                                <option value="">14:00</option>
                                                <option value="">15:00</option>
                                                <option value="">16:00</option>
                                                <option value="">17:00</option>
                                                <option value="">18:00</option>
                                                <option value="">19:00</option>
                                                <option value="">20:00</option>
                                                <option value="">21:00</option>
                                                <option value="">22:00</option>
                                                <option value="">23:00</option>
                                                <option value="">24:00</option>
                                            </select>
                                        </div>

                                    </section>

                                    <section class="popradio">
                                        <div class="section-title small">
                                            <span>آیا به راحتی خوابت می بره ؟ </span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="easysleep" id="easysleepyes" value="easysleepyes">
                                                    <label for="easysleepyes">
                                                        <span class="text">بله </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="easysleep" id="easysleepno" value="easysleepno">
                                                    <label for="easysleepno">
                                                        <span class="text">خیر</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>چرا از خوابت راضی نیستی ؟ </span>
                                        </div>

                                        <div class="input-container gray small">
                                            <textarea name="" cols="30" rows="10" placeholder="مثلا: خیلی فکر می کنم ، دیر خوابم میبره"></textarea>
                                        </div>
                                    </section>

                                    <section class="popradio">
                                        <div class="section-title small">
                                            <span>آیا تو رختخواب با گوشیت کار می کنی؟ </span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="bedphone" id="bedphoneyes" value="bedphoneyes">
                                                    <label for="bedphoneyes">
                                                        <span class="text">بله </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="bedphone" id="bedphoneno" value="bedphoneno">
                                                    <label for="bedphoneno">
                                                        <span class="text">خیر</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon8.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>سابقه رژیمی </h3>
                                    <span class="level-number">
										مرحله ی 8 از 13
									</span>
                                    <span class="detail">
										از رژیم های قبلیت بگو
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="step">
                                    <ul>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                        <li class="active"><span></span></li>
                                    </ul>
                                </div>
                                <div class="form">
                                    <section class="record bullet">
                                        <div class="subscttion">
                                            <div class="section-title number">
                                                <span class="bullet"></span><span>آیا تا به حال رژیم داشته اید ؟ </span>
                                            </div>

                                            <ul class="sub">
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="regime" id="regimeyes" value="regimeyes">
                                                        <label for="regimeyes">
                                                            <span class="text">بله </span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-content">
                                                        <input type="radio" name="regime" id="regimeno" value="regimeno">
                                                        <label for="regimeno">
                                                            <span class="text">خیر</span>
                                                            <span class="cir"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="subscttion">
                                            <div class="section-title number">
                                                <span class="bullet"></span><span>چه مدت از آخرین رژیمت می گذره ؟ </span>
                                            </div>

                                            <div class="input-container gray small">
                                                <input type="text" placeholder="مثلا : یکسال ">
                                            </div>
                                        </div>
                                        <div class="subscttion">
                                            <div class="section-title number">
                                                <span class="bullet"></span><span>چقدر تغییر وزن داشتی ؟ </span>
                                            </div>

                                            <div class="input-container gray small">
                                                <input type="text" placeholder="مثلا : 4 کیلو کاهش داشتم">
                                            </div>
                                        </div>

                                    </section>


                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container lblue">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon9.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>هدف </h3>
                                    <span class="level-number">
										مرحله ی 9  از 13
									</span>
                                    <span class="detail">
										خب حالا بهمون بگو چه رژیمی میخوای
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="form">

                                    <section class="popradio icon">
                                        <div class="section-title small mar">
                                            <span>کدوم یک از برنامه های غذایی رو می خوای؟</span>
                                        </div>
                                        <div class="text">
                                            <p>می تونی چندتا رو باهم انتخاب کنی.</p>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="goal" id="goaldecweight" value="goaldecweight">
                                                    <label for="goaldecweight">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="41.25" height="42.004" viewBox="0 0 41.25 42.004">
                                                                <g id="fitness" transform="translate(0 0)">
                                                                    <path id="Path_949" data-name="Path 949" d="M78.325,22.18a20.935,20.935,0,0,0-2.1-5.853l-.007-.015c-.376-.744-.766-1.465-1.146-2.166-1.238-2.284-2.406-4.442-2.5-6.405-.208-4.466,1.723-6.228,1.8-6.3a.81.81,0,0,0,.248-.906A.824.824,0,0,0,73.847,0H49.258a.825.825,0,0,0-.782.537.8.8,0,0,0,.245.9c.082.073,2.013,1.836,1.806,6.3-.091,1.963-1.26,4.121-2.5,6.405-.38.7-.77,1.422-1.146,2.166l-.007.014a20.289,20.289,0,0,0-2.159,6.255c0,.023-.007.046-.009.069a12.786,12.786,0,0,0-.1,2.581,34.594,34.594,0,0,0,.768,5.1.82.82,0,1,0,1.6-.353,33.036,33.036,0,0,1-.734-4.851c-.018-.277-.024-.551-.022-.822l11.664,8.963a5.512,5.512,0,0,0,2.841,1.076v6.023H50.271c-.3-.741-.895-2.254-1.533-4.156a.82.82,0,0,0-1.556.522c.933,2.78,1.751,4.7,1.786,4.777a.821.821,0,0,0,.754.5H73.383a.821.821,0,0,0,.754-.5c.159-.37,3.888-9.142,4.356-16.275a12.922,12.922,0,0,0-.161-3.007c0-.015,0-.03-.007-.045ZM52.166,7.818A11.241,11.241,0,0,0,50.9,1.641H72.209A11.238,11.238,0,0,0,70.94,7.818c.109,2.338,1.365,4.656,2.693,7.11.277.511.555,1.025.826,1.543-2.982,2.187-7.741,3.479-12.907,3.479s-9.925-1.292-12.907-3.479c.271-.518.549-1.032.826-1.543,1.33-2.454,2.585-4.772,2.694-7.11ZM46.409,22.371A17.621,17.621,0,0,1,47.9,17.956c3.271,2.288,8.275,3.634,13.649,3.634S71.931,20.244,75.2,17.956a18.259,18.259,0,0,1,1.42,4.031L63.543,32.037a4.087,4.087,0,0,1-4.651-.074Zm30.447,2.752c-.388,5.913-3.228,13.279-4.021,15.239H62.373V34.272a5.033,5.033,0,0,0,2.169-.933l12.323-9.469a11.012,11.012,0,0,1-.009,1.254Zm0,0" transform="translate(-40.928 0)" fill="#05445e" fill-rule="evenodd"/>
                                                                    <path id="Path_950" data-name="Path 950" d="M242.226,150.314a.82.82,0,0,0,.82-.82V147a.82.82,0,1,0-1.641,0v2.5A.82.82,0,0,0,242.226,150.314Zm0,0" transform="translate(-221.602 -134.184)" fill="#05445e" fill-rule="evenodd"/>
                                                                    <path id="Path_951" data-name="Path 951" d="M4.589,54.434a.82.82,0,1,0,1.16,1.16l2.377-2.377a.815.815,0,0,0,0-1.161L5.749,49.677a.82.82,0,0,0-1.16,1.16l.978.978H.82a.82.82,0,1,0,0,1.641H5.567Zm0,0" transform="translate(0 -45.381)" fill="#05445e" fill-rule="evenodd"/>
                                                                    <path id="Path_952" data-name="Path 952" d="M408.325,51.815h-4.746l.978-.978a.82.82,0,0,0-1.16-1.16l-2.378,2.378a.831.831,0,0,0-.193.865.884.884,0,0,0,.193.3l2.378,2.378a.82.82,0,0,0,1.16-1.16l-.978-.978h4.746a.82.82,0,0,0,0-1.641Zm0,0" transform="translate(-367.896 -45.381)" fill="#05445e" fill-rule="evenodd"/>
                                                                    <path id="Path_953" data-name="Path 953" d="M65.5,397.133a.82.82,0,1,0-.82.82A.822.822,0,0,0,65.5,397.133Zm0,0" transform="translate(-58.624 -363.801)" fill="#05445e" fill-rule="evenodd"/>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span class="text">برنامه کاهش وزن </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="goal" id="goal" value="goal">
                                                    <label for="goal">
                                                        <div class="img">
                                                            <svg id="waist" xmlns="http://www.w3.org/2000/svg" width="33.683" height="43.925" viewBox="0 0 33.683 43.925">
                                                                <path id="Shape" d="M3.972,14.391c-.654,1.973-2.471,6.744-2.444,6.67C-.833,27.571-.029,36.05,4.3,43.217a1.478,1.478,0,0,0,1.26.707H28.128a1.479,1.479,0,0,0,1.26-.707c4.467-7.4,5.1-16.032,2.68-22.417-.853-2.241-1.672-4.349-2.355-6.409,2.624-.9,3.969-2.047,3.969-3.407,0-1.527-1.741-2.818-5.041-3.749a14.178,14.178,0,0,1,1.426-5.118A1.464,1.464,0,0,0,28.759,0H4.927A1.464,1.464,0,0,0,3.616,2.116,14.158,14.158,0,0,1,5.042,7.234C1.741,8.165,0,9.455,0,10.984c0,1.36,1.346,2.5,3.972,3.408Zm27.142,8.148a20.4,20.4,0,0,1,.593,2.555c-1.475.844-3.368,1.782-5.643,2.794a25.316,25.316,0,0,0-9.222,6.785A25.319,25.319,0,0,0,7.62,27.888c-2.275-1.015-4.167-1.95-5.643-2.793a20.485,20.485,0,0,1,.593-2.554c2.216,1.67,6.565,3.82,14.271,3.82S28.9,24.209,31.114,22.539ZM5.55,42.46a26.333,26.333,0,0,1-3.77-15.8c1.432.789,3.186,1.648,5.244,2.563a23.417,23.417,0,0,1,9.084,6.89V42.46Zm22.578,0H17.574V36.116a23.415,23.415,0,0,1,9.085-6.89c2.058-.916,3.813-1.776,5.245-2.563A26.31,26.31,0,0,1,28.128,42.46Zm4.09-31.477c0,.479-.8,1.266-2.949,2.014a15.6,15.6,0,0,1-.677-4.247C31.081,9.5,32.219,10.388,32.219,10.984ZM4.924,1.464H28.761a16.109,16.109,0,0,0-.892,11.963,32.9,32.9,0,0,1-3.881.752L26.12,12.26a.732.732,0,0,0-.98-1.088l-3.661,3.3a.783.783,0,0,0,.2,1.268c3.8,3.426,3.567,3.3,3.949,3.3a.732.732,0,0,0,.49-1.276L23.8,15.679a34.73,34.73,0,0,0,4.51-.856c.686,2.074,1.473,4.1,2.291,6.25C24.35,26.2,9.333,26.2,3.079,21.073c.811-2.132,1.6-4.17,2.291-6.25a34.859,34.859,0,0,0,4.508.855L7.565,17.761a.732.732,0,0,0,.49,1.277c.39,0,.236.04,4.151-3.483a.732.732,0,0,0,0-1.088l-3.661-3.3a.732.732,0,0,0-.98,1.088L9.7,14.179a32.6,32.6,0,0,1-3.881-.752A16.1,16.1,0,0,0,4.924,1.464Zm.17,7.287A15.6,15.6,0,0,1,4.415,13c-2.151-.748-2.951-1.536-2.951-2.015,0-.6,1.139-1.482,3.629-2.236Z" fill="#05445e"/>
                                                                <path id="Shape-2" data-name="Shape" d="M22.195,23.126a2.4,2.4,0,0,0,2.2-2.563A2.4,2.4,0,0,0,22.195,18,2.4,2.4,0,0,0,20,20.563,2.4,2.4,0,0,0,22.195,23.126Zm0-3.661c.39,0,.732.513.732,1.1s-.342,1.1-.732,1.1-.732-.513-.732-1.1S21.8,19.464,22.195,19.464Z" transform="translate(-5.353 -4.82)" fill="#05445e"/>
                                                            </svg>

                                                        </div>
                                                        <span class="text">برنامه تثبیت وزن</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="goal" id="goalincweight" value="goalincweight">
                                                    <label for="goalincweight">
                                                        <div class="img">
                                                            <svg id="weight-scale" xmlns="http://www.w3.org/2000/svg" width="41.069" height="41.069" viewBox="0 0 41.069 41.069">
                                                                <path id="Path_954" data-name="Path 954" d="M37.46,0H3.61A3.614,3.614,0,0,0,0,3.61V37.46a3.614,3.614,0,0,0,3.61,3.61H37.46a3.614,3.614,0,0,0,3.61-3.61V3.61A3.614,3.614,0,0,0,37.46,0Zm1.2,37.46a1.2,1.2,0,0,1-1.2,1.2H3.61a1.2,1.2,0,0,1-1.2-1.2V3.61a1.2,1.2,0,0,1,1.2-1.2H37.46a1.2,1.2,0,0,1,1.2,1.2Zm0,0" fill="#05445e"/>
                                                                <path id="Path_955" data-name="Path 955" d="M105.235,66.288A22.65,22.65,0,0,0,91.358,62a22.958,22.958,0,0,0-13.877,4.624,1.2,1.2,0,0,0-.24,1.686l6.352,8.45a1.2,1.2,0,0,0,1.684.24,10.138,10.138,0,0,1,12.163,0,1.2,1.2,0,0,0,1.684-.24l6.352-8.45a1.2,1.2,0,0,0,.229-.893,2.1,2.1,0,0,0-.469-1.13ZM97.888,74.4A11.116,11.116,0,0,0,93,72.346V68.679a1.2,1.2,0,0,0-2.406,0v3.667A14.7,14.7,0,0,0,84.828,74.4l-4.919-6.544a20.732,20.732,0,0,1,22.9,0Zm0,0" transform="translate(-70.823 -57.026)" fill="#05445e"/>
                                                            </svg>
                                                        </div>
                                                        <span class="text">برنامه افزایش وزن</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="goal" id="goalpregnant" value="goalpregnant">
                                                    <label for="goalpregnant">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="28.039" height="47.173" viewBox="0 0 28.039 47.173">
                                                                <g id="maternity" transform="translate(-103.834)">
                                                                    <g id="Group_494" data-name="Group 494" transform="translate(112.81 31.925)">
                                                                        <g id="Group_493" data-name="Group 493" transform="translate(0)">
                                                                            <path id="Path_956" data-name="Path 956" d="M207.942,346.5a3.24,3.24,0,0,0-1.708.491,3.24,3.24,0,0,0-1.708-.491,3.308,3.308,0,0,0-3.274,3.334c0,1.043.753,2.3,2.3,3.839a24.257,24.257,0,0,0,2.12,1.864.922.922,0,0,0,1.12,0,24.2,24.2,0,0,0,2.12-1.864c1.549-1.54,2.3-2.8,2.3-3.839A3.309,3.309,0,0,0,207.942,346.5Zm-1.709,7.125c-1.6-1.329-3.138-3.035-3.138-3.791a1.462,1.462,0,0,1,1.43-1.49,1.391,1.391,0,0,1,1.031.458.922.922,0,0,0,1.356,0,1.391,1.391,0,0,1,1.031-.458,1.462,1.462,0,0,1,1.429,1.49C209.371,350.592,207.836,352.3,206.233,353.629Z" transform="translate(-201.251 -346.504)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_496" data-name="Group 496" transform="translate(103.834 15.294)">
                                                                        <g id="Group_495" data-name="Group 495" transform="translate(0)">
                                                                            <path id="Path_957" data-name="Path 957" d="M116.571,175.554a2.482,2.482,0,0,0-2.01-.633,9.626,9.626,0,0,0-6.486,4.2.922.922,0,0,0,1.584.945,7.8,7.8,0,0,1,5.184-3.324.719.719,0,0,1,.523.207,1.618,1.618,0,0,1,.55,1.137.863.863,0,0,1-.587.817,7.589,7.589,0,0,0-3.519,2.017l-3.531,4.395A1.712,1.712,0,0,1,106.9,186a.678.678,0,0,1-.521-.237c-.887-.969-.711-4.128-.636-5.477.012-.208.022-.4.029-.56.361-8.333,3.611-10.706,8.737-11.835l.317-.07a.922.922,0,0,0-.4-1.8l-.317.07c-3.407.75-5.743,2.038-7.352,4.052-1.745,2.185-2.644,5.2-2.831,9.5-.007.157-.017.338-.028.538-.142,2.556-.185,5.4,1.117,6.825a2.529,2.529,0,0,0,1.82.835l.111,0q.1,0,.193-.006a10.094,10.094,0,0,0,1.018,4.289.922.922,0,0,0,1.659-.806,8.272,8.272,0,0,1-.834-3.644v-.512a3.861,3.861,0,0,0,.729-.7l3.531-4.395a6.311,6.311,0,0,1,2.664-1.422,2.707,2.707,0,0,0,1.85-2.557A3.439,3.439,0,0,0,116.571,175.554Z" transform="translate(-103.834 -166.002)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_498" data-name="Group 498" transform="translate(109.661 42.407)">
                                                                        <g id="Group_497" data-name="Group 497" transform="translate(0)">
                                                                            <path id="Path_958" data-name="Path 958" d="M168.7,460.591l-.024-.025a.922.922,0,1,0-1.347,1.26l.039.042a.922.922,0,0,0,1.331-1.277Z" transform="translate(-167.076 -460.274)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_500" data-name="Group 500" transform="translate(120.493 15.289)">
                                                                        <g id="Group_499" data-name="Group 499">
                                                                            <path id="Path_959" data-name="Path 959" d="M290.13,167.784a13.879,13.879,0,0,0-4.361-1.823.922.922,0,1,0-.413,1.8,12.043,12.043,0,0,1,3.783,1.581.922.922,0,0,0,.99-1.556Z" transform="translate(-284.64 -165.938)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_502" data-name="Group 502" transform="translate(126.931 18.931)">
                                                                        <g id="Group_501" data-name="Group 501">
                                                                            <path id="Path_960" data-name="Path 960" d="M356.152,205.8l-.049-.051a.922.922,0,0,0-1.327,1.281l.041.043a.922.922,0,0,0,1.334-1.273Z" transform="translate(-354.517 -205.47)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_504" data-name="Group 504" transform="translate(112.094 21.34)">
                                                                        <g id="Group_503" data-name="Group 503">
                                                                            <path id="Path_961" data-name="Path 961" d="M212.022,232.324a.922.922,0,1,0-1.606.907c.931,1.648,1,3.58,1,5.934v2.81c0,3.245-.743,7.8-4.284,11.088a10.276,10.276,0,0,1-3.6,1.763l-.181.048a1.472,1.472,0,0,1-.708-2.854,9.044,9.044,0,0,0,3.5-1.685c2.435-2.26,2.309-5.757,2.2-8.843-.024-.665-.047-1.293-.047-1.909a.928.928,0,0,0-.02-.192,3.478,3.478,0,0,0,.379-1.1c.279-1.72-.838-3.175-1.735-4.343a5.05,5.05,0,0,1-.9-1.408.922.922,0,0,0-1.844,0,4.54,4.54,0,0,0,1.277,2.531c.717.933,1.529,1.991,1.377,2.925a3.117,3.117,0,0,1-1.527,1.847.922.922,0,1,0,1.033,1.528c.051-.035.1-.07.149-.1,0,.1.007.2.01.292.1,2.822.207,5.74-1.609,7.425a7.669,7.669,0,0,1-2.765,1.269,3.319,3.319,0,0,0-1.687,5.208,14.837,14.837,0,0,1-1.7.147,8.369,8.369,0,0,1-3.893-.961.922.922,0,0,0-.861,1.631,10.221,10.221,0,0,0,4.754,1.174,21.76,21.76,0,0,0,5.065-.786c.062-.014.125-.032.187-.05l.057-.015.014,0,.025-.007a11.8,11.8,0,0,0,4.312-2.173c3.188-2.959,4.873-7.261,4.873-12.44v-2.81C213.265,236.626,213.171,234.359,212.022,232.324Z" transform="translate(-193.486 -231.618)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_506" data-name="Group 506" transform="translate(108.913)">
                                                                        <g id="Group_505" data-name="Group 505" transform="translate(0)">
                                                                            <path id="Path_962" data-name="Path 962" d="M167.843,0a7.112,7.112,0,0,0-2.975.65,3.792,3.792,0,0,0-4.385,6.186.917.917,0,0,0,.208.116c0,.068-.005.136-.005.2V8.29A7.157,7.157,0,0,0,175,8.29V7.157A7.165,7.165,0,0,0,167.843,0Zm-6.661,2.63a1.95,1.95,0,0,1,1.846-.765,7.176,7.176,0,0,0-1.944,2.942A1.95,1.95,0,0,1,161.182,2.63ZM167.843,13.6a5.319,5.319,0,0,1-5.278-4.718c1.387-.1,4.39-.535,6.383-2.307a7.6,7.6,0,0,0,4.18,2.256A5.32,5.32,0,0,1,167.843,13.6Zm1.985-8.935a.922.922,0,0,0-1.538-.084c-1.381,1.868-4.382,2.335-5.756,2.452a5.311,5.311,0,0,1,10.616-.082A5.232,5.232,0,0,1,169.828,4.667Z" transform="translate(-158.955)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span class="text">برنامه بارداری</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="goal" id="goalmilk" value="goalmilk">
                                                    <label for="goalmilk">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32.521" height="43.192" viewBox="0 0 32.521 43.192">
                                                                <g id="baby-drinking-bottle" transform="translate(-63.249 0)">
                                                                    <g id="Group_508" data-name="Group 508" transform="translate(67.297 12.724)">
                                                                        <g id="Group_507" data-name="Group 507">
                                                                            <path id="Path_963" data-name="Path 963" d="M115.9,153.561a.844.844,0,0,0-1.191.065,1.1,1.1,0,0,1-1.545.084.707.707,0,0,1-.054-1,.533.533,0,0,1,.3-.182.159.159,0,0,1,.143.044.844.844,0,0,0,1.126-1.256,1.836,1.836,0,0,0-1.5-.458,2.2,2.2,0,0,0-1.318.726,2.4,2.4,0,0,0,.184,3.38,2.784,2.784,0,0,0,3.927-.214A.843.843,0,0,0,115.9,153.561Z" transform="translate(-111.239 -150.841)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_510" data-name="Group 510" transform="translate(63.249 0)">
                                                                        <g id="Group_509" data-name="Group 509">
                                                                            <path id="Path_964" data-name="Path 964" d="M95.471,6.823l-3.3-5.714A2.218,2.218,0,0,0,89.143.3l-9.4,5.429-.932.538a2.338,2.338,0,0,0-.991,2.911,8.23,8.23,0,0,0-.67-.762,8.121,8.121,0,0,0-6.168-2.37.85.85,0,0,0-.153-.015,1.992,1.992,0,0,1-1.99-1.99,1.425,1.425,0,0,1,1.424-1.423c.467,0,.97.23.97.734a.844.844,0,1,0,1.687,0A2.491,2.491,0,0,0,70.258.93a3.114,3.114,0,0,0-3.111,3.11,3.666,3.666,0,0,0,1.1,2.622,8.137,8.137,0,0,0-2.636,13.244,9.852,9.852,0,0,0-2.364,6.431v6.928a9.937,9.937,0,0,0,9.926,9.926H87.463a3.466,3.466,0,0,0,3.462-3.462V37.712a3.463,3.463,0,0,0-6.58-1.508H78.855V33.687a3.263,3.263,0,0,0-1.561-2.782V27.951h3.926a2.887,2.887,0,0,0,2.574-1.6l.014-.03,3.838-8.663a2.868,2.868,0,0,0-5.157-2.513l-.016.035-3.068,7.039H74.963a.844.844,0,1,0,0,1.687h5a.843.843,0,0,0,.773-.507l3.28-7.525a1.181,1.181,0,0,1,2.113,1.056l-.014.03-3.837,8.66a1.189,1.189,0,0,1-1.054.647h-8.69a1.182,1.182,0,0,1-1.181-1.181.844.844,0,1,0-1.687,0,2.871,2.871,0,0,0,2.868,2.868h3.076v2.474H64.936V26.337a8.178,8.178,0,0,1,1.982-5.361,8.145,8.145,0,0,0,12.353-4.765.844.844,0,1,0-1.634-.421,6.458,6.458,0,1,1-.312-4.151,2.052,2.052,0,0,0-.088.254,2.014,2.014,0,0,0,2.953,2.266.414.414,0,0,1,.565.152.844.844,0,0,0,1.461-.844,2.1,2.1,0,0,0-2.87-.769.327.327,0,1,1-.327-.567,2.1,2.1,0,0,0,.769-2.87l-.375-.649a.649.649,0,0,1,.237-.885l.2-.116,2.17,3.758a.844.844,0,1,0,1.461-.844l-2.17-3.758,1.255-.724.456.791a.844.844,0,0,0,1.461-.844L84.029,5.2l1.095-.632.456.791a.844.844,0,0,0,1.461-.844l-.456-.791L87.68,3.09l.457.791A.844.844,0,0,0,89.6,3.038l-.456-.791.845-.488a.532.532,0,0,1,.725.194l3.3,5.714a.532.532,0,0,1-.194.725l-3.459,2A.844.844,0,1,0,91.2,11.85l3.459-2a2.218,2.218,0,0,0,.812-3.03ZM84.93,37.891h0a.844.844,0,0,0,.816-.63,1.776,1.776,0,0,1,3.493.451v2.017A1.777,1.777,0,0,1,87.463,41.5H75.825a1.807,1.807,0,0,1,0-3.613Zm-9.336-5.778a1.577,1.577,0,0,1,1.575,1.575V36.2H75.825A3.492,3.492,0,0,0,72.832,41.5a8.249,8.249,0,0,1-7.9-8.231V32.113H75.593Z" transform="translate(-63.249 0)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_512" data-name="Group 512" transform="translate(87.3 11.798)">
                                                                        <g id="Group_511" data-name="Group 511">
                                                                            <path id="Path_965" data-name="Path 965" d="M349.794,140.1a.845.845,0,1,0,.246.6A.851.851,0,0,0,349.794,140.1Z" transform="translate(-348.354 -139.856)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Group_514" data-name="Group 514" transform="translate(73.203 11.051)">
                                                                        <g id="Group_513" data-name="Group 513">
                                                                            <path id="Path_966" data-name="Path 966" d="M182.686,131.253a.843.843,0,1,0,.247.6A.85.85,0,0,0,182.686,131.253Z" transform="translate(-181.246 -131.006)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span class="text">برنامه شیردهی </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="goal" id="goalathlete" value="goalathlete">
                                                    <label for="goalathlete">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="42.708" height="26.693" viewBox="0 0 42.708 26.693">
                                                                <g id="dumbbell" transform="translate(0.001)">
                                                                    <path id="Path_967" data-name="Path 967" d="M40.205,9.176h-.834V5.422A3.335,3.335,0,0,0,34.28,2.585,3.341,3.341,0,0,0,31.03,0h0a3.341,3.341,0,0,0-3.337,3.337V9.176H15.015V3.337a3.337,3.337,0,0,0-6.588-.752A3.335,3.335,0,0,0,3.336,5.422V9.176H2.5a2.506,2.506,0,0,0-2.5,2.5v3.337a2.506,2.506,0,0,0,2.5,2.5h.834v3.754a3.335,3.335,0,0,0,5.091,2.837,3.341,3.341,0,0,0,3.251,2.585h0a3.341,3.341,0,0,0,3.337-3.337V17.517H27.692v5.839a3.337,3.337,0,0,0,6.588.752,3.335,3.335,0,0,0,5.091-2.837V17.517h.834a2.506,2.506,0,0,0,2.5-2.5V11.678a2.506,2.506,0,0,0-2.5-2.5ZM3.336,15.849H2.5a.835.835,0,0,1-.834-.834V11.678a.835.835,0,0,1,.834-.834h.834Zm5,5.422a1.668,1.668,0,0,1-3.337,0V5.422a1.668,1.668,0,1,1,3.337,0Zm5.006,2.085a1.67,1.67,0,0,1-1.668,1.668h0a1.67,1.67,0,0,1-1.668-1.668V3.337a1.669,1.669,0,0,1,3.338,0Zm14.34-10.844H21.854a.834.834,0,1,0,0,1.668h5.833v1.668H15.011v-5H27.687ZM32.7,23.356a1.669,1.669,0,0,1-3.338,0V13.389a.491.491,0,0,1,0,.054V13.25a.491.491,0,0,1,0,.054V3.337a1.67,1.67,0,0,1,1.668-1.668h0A1.67,1.67,0,0,1,32.7,3.337Zm5-2.085a1.668,1.668,0,0,1-3.337,0V5.422a1.668,1.668,0,1,1,3.337,0Zm3.337-6.256a.835.835,0,0,1-.834.834h-.834v-5h.834a.835.835,0,0,1,.834.834Zm0,0" fill="#05445e"/>
                                                                    <path id="Path_968" data-name="Path 968" d="M212.851,151.668a.834.834,0,0,1,0-1.668h0a.834.834,0,0,1,0,1.668Zm0,0" transform="translate(-194.331 -137.488)" fill="#05445e"/>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span class="text">برنامه ورزشکاری</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <section class="fat-kind">
                                        <div class="section-title small">
                                            <span>نوع چاقی که داری رو انتخاب کن ؟ </span>
                                        </div>

                                        <ul>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="fatkind" id="sedentary" value="sedentary">
                                                    <label for="sedentary">
                                                        <div class="img">
                                                            <img src="/images/intersection3.png" alt="">
                                                        </div>
                                                        <span class="text">کم تحرکی</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="fatkind" id="fatkindstress" value="fatkindstress">
                                                    <label for="fatkindstress">
                                                        <div class="img">
                                                            <img src="/images/intersection2.png" alt="">

                                                        </div>
                                                        <span class="text">استرس</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="fatkind" id="overeating" value="overeating">
                                                    <label for="overeating">
                                                        <div class="img">
                                                            <img src="/images/intersection1.png" alt="">

                                                        </div>
                                                        <span class="text">پرخوری</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="fatkind" id="intravenous" value="intravenous">
                                                    <label for="intravenous">
                                                        <div class="img">
                                                            <img src="/images/intersection6.png" alt="">

                                                        </div>
                                                        <span class="text">وریدی</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="fatkind" id="metabolic" value="metabolic">
                                                    <label for="metabolic">
                                                        <div class="img">
                                                            <img src="/images/intersection5.png" alt="">

                                                        </div>
                                                        <span class="text">متابولیک</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="checkbox" name="fatkind" id="breadandrice" value="breadandrice">
                                                    <label for="breadandrice">
                                                        <div class="img">
                                                            <img src="/images/intersection4.png" alt="">

                                                        </div>
                                                        <span class="text">نان و برنج</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>توی هفته چندم بارداریت هستی،مامان قشنگ؟</span>
                                        </div>

                                        <div class="input-container gray">
                                            <input type="text" placeholder="مثلا : یکسال ">
                                        </div>
                                    </section>


                                    <section>
                                        <div class="section-title small">
                                            <span>اگه دکترت غذای خاصی رو برات ممنوع کرده برامون بنویس:</span>
                                        </div>

                                        <div class="input-container gray">
                                            <textarea name="" id="food9" cols="30" rows="10" placeholder="مثلا: خورش قرمه سبزی، سیب،پیتزا ..."></textarea>
                                            <div class="charNum"><span id="charsLeft10">0</span>/ 500</div>
                                        </div>
                                    </section>


                                    <section>
                                        <div class="section-title small">
                                            <span>کوچولوی قشنگت چند ماه به دنیا اومده؟</span>
                                        </div>

                                        <div class="input-container gray">
                                            <input type="text" placeholder="مثلا : یکسال ">
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>انگیزه ات برای تغییر چیه (اسم) ؟</span>
                                        </div>

                                        <div class="input-container gray">
                                            <textarea name="" id="food6" cols="30" rows="10" placeholder="مثلا : میخوام سالم باشم یا درد کمتری داشته باشم"></textarea>
                                            <div class="charNum"><span id="charsLeft8">0</span>/ 500</div>
                                        </div>
                                    </section>


                                    <section class="popradio">
                                        <div class="section-title small">
                                            <span>خوب فکر کن ببین باز هم چیزی هست که بخوای بهمون بگی ؟</span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="allsay" id="allsayno" value="allsayno">
                                                    <label for="allsayno">
                                                        <span class="text">نه همه چی رو گفتم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="allsay" id="allsayyes" value="allsayyes">
                                                    <label for="allsayyes">
                                                        <span class="text">آره باید یه چیزی بهتون بگم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>خب چی میخوای بهمون بگی (اسم) ؟ </span>
                                        </div>

                                        <div class="input-container gray">
                                            <textarea name="" id="food7" cols="30" rows="10" placeholder="مثلا : من بیماری هام باعث میشه نتونم درست غذا بخورم..."></textarea>
                                            <div class="charNum"><span id="charsLeft9">0</span>/ 500</div>
                                        </div>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات تکمیلی</h3>
                                    <span class="level-number">
										مرحله ی 10 از 13
									</span>
                                    <span class="detail">
										  داریم کامل باهات آشنا میشیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="form">

                                    <section class="menuprogram">
                                        <div class="section-title small">
                                            <span>دلت می خواد برنامه ی ناهارت رو چه شکلی طراحی کنیم ؟ </span>
                                        </div>
                                        <ul class="menuprogram">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="menuprogram" id="meghdar" value="meghdar">
                                                    <label for="meghdar">
                                                        <div class="top">

                                                            <div class="img">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                                                    <g id="scale" transform="translate(-2 -2)">
                                                                        <path id="Path_969" data-name="Path 969" d="M51.167,2H2.833A.833.833,0,0,0,2,2.833,9.177,9.177,0,0,0,11.167,12H22v3.333H20.333a.833.833,0,0,0-.833.833v4.167H15.817a4.167,4.167,0,0,0-4.142,3.707L9.082,47.373A4.167,4.167,0,0,0,13.224,52H40.776a4.167,4.167,0,0,0,4.142-4.627L42.325,24.04a4.167,4.167,0,0,0-4.142-3.707H34.5V16.167a.833.833,0,0,0-.833-.833H32V12H42.833A9.177,9.177,0,0,0,52,2.833.833.833,0,0,0,51.167,2ZM38.183,22a2.5,2.5,0,0,1,2.483,2.223L43.26,47.557a2.506,2.506,0,0,1-.622,1.943,2.47,2.47,0,0,1-1.863.833H13.224a2.47,2.47,0,0,1-1.862-.833,2.506,2.506,0,0,1-.623-1.944l2.593-23.333A2.5,2.5,0,0,1,15.817,22Zm-5.35-5v3.333H31.167V18.667H29.5v1.667H27.833V18.667H26.167v1.667H24.5V18.667H22.833v1.667H21.167V17Zm-9.167-1.667V12h6.667v3.333Zm19.167-5H11.167A7.51,7.51,0,0,1,3.713,3.667H50.287A7.51,7.51,0,0,1,42.833,10.333Z" fill="#05445e"/>
                                                                        <path id="Path_970" data-name="Path 970" d="M20,41A10,10,0,1,0,30,31,10,10,0,0,0,20,41Zm10-.833a.833.833,0,1,1-.833.833A.833.833,0,0,1,30,40.167Zm-.833-7.458v5.944a2.5,2.5,0,1,0,1.667,0V32.709a8.333,8.333,0,1,1-1.667,0Z" transform="translate(-3 -4.833)" fill="#05445e"/>
                                                                        <rect id="Rectangle_418" data-name="Rectangle 418" width="10" height="1.667" transform="translate(8.667 7)" fill="#05445e"/>
                                                                    </g>
                                                                </svg>

                                                            </div>
                                                            <div class="left">
                                                                <h4>برنامه مقداری</h4>
                                                                <p> این نوع برنامه بهت کمک می کنه بتونی با هر غذایی به رژیمت وفادار باشی.</p>
                                                            </div>

                                                        </div>
                                                        <div class="bottom">
                                                            <p class="bold"> این نوع طراحی مناسب کسانی است که سرکار ناهار می خورند و کسانی که نمی توانند طبق منوی مشخصی ناهار میل کنند.</p>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="menuprogram" id="menure" value="menure">
                                                    <label for="menure">
                                                        <div class="top">

                                                            <div class="img">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="53.5" height="53.5" viewBox="0 0 53.5 53.5">
                                                                    <g id="barbecue" transform="translate(0.001)">
                                                                        <path id="Path_971" data-name="Path 971" d="M45.665,7.835a26.75,26.75,0,0,0-37.83,37.83,26.75,26.75,0,0,0,37.83-37.83ZM26.749,51.41A24.66,24.66,0,1,1,51.41,26.75a24.688,24.688,0,0,1-24.66,24.66Zm0,0" transform="translate(0 0)" fill="#05445e"/>
                                                                        <path id="Path_972" data-name="Path 972" d="M87.354,60.5A21.7,21.7,0,0,0,75.1,53.044a1.045,1.045,0,1,0-.43,2.045,19.425,19.425,0,0,1,10.156,5.725h-6.2L76.779,59.49a4.962,4.962,0,0,0-6.426.523,5.02,5.02,0,0,0-.651.8H56.422a19.432,19.432,0,0,1,10.268-5.747,1.045,1.045,0,0,0-.419-2.048A21.634,21.634,0,1,0,87.354,60.5Zm-.8,25.021H78.035a7.434,7.434,0,0,0-2.271-6.144h4.385a7.137,7.137,0,0,0,2.584.715q.293.024.583.024A7.141,7.141,0,0,0,90.15,75.02a19.424,19.424,0,0,1-3.594,10.5ZM51.782,79.372H65.493a7.425,7.425,0,0,0-2.31,5.383,7.56,7.56,0,0,0,.038.761H54.7a19.478,19.478,0,0,1-2.918-6.144Zm3.912-2.9a5.666,5.666,0,0,0,1.175.813H51.33a19.642,19.642,0,0,1-.242-3.072,19.415,19.415,0,0,1,.245-3.072h2.055v.005a7.314,7.314,0,0,0,2.3,5.326Zm21.819.667c.036.05.074.1.111.146H66.072a2.792,2.792,0,0,0,.9-.669l1.016-1.132a2.8,2.8,0,0,0-.636-4.267l-.124-.075h5.973ZM61.286,75.073a3.67,3.67,0,0,1-.111-.584l1.49,1.953a2.8,2.8,0,0,0,1.045.84H60.673a2.192,2.192,0,0,0,.168-.179A2.233,2.233,0,0,0,61.286,75.073Zm5.021-7.19a.137.137,0,0,1-.126.043,6.119,6.119,0,0,0-4.043.769,1.045,1.045,0,0,0-.015,1.8L66.275,73a.711.711,0,0,1,.162,1.083l-1.016,1.133a.711.711,0,0,1-1.095-.044l-2.943-3.857a1.045,1.045,0,0,0-1.786.209,6.124,6.124,0,0,0-.327,4.1.137.137,0,0,1-.029.13.129.129,0,0,1-.118.05,3.536,3.536,0,0,1-2.034-.894c-2.162-1.94-2.155-5.763.014-8.18s5.969-2.838,8.131-.9a3.536,3.536,0,0,1,1.109,1.925.128.128,0,0,1-.037.123ZM65.273,84.756a5.355,5.355,0,1,1,5.355,5.355A5.361,5.361,0,0,1,65.273,84.756ZM86.541,62.9a19.625,19.625,0,0,1,3.077,6.725,7.129,7.129,0,0,0-2.142-2.457L81.533,62.9ZM73.873,60.642a2.884,2.884,0,0,1,1.687.546l10.7,7.683a5.049,5.049,0,1,1-7.047,7.046l-7.683-10.7a2.893,2.893,0,0,1,2.346-4.578Zm-4.043,5.8L71.7,69.049H68.042a2.224,2.224,0,0,0,.347-1.714,5.609,5.609,0,0,0-1.76-3.056A6.733,6.733,0,0,0,64.206,62.9H68.93a4.965,4.965,0,0,0,.9,3.535ZM59.357,62.9a8.447,8.447,0,0,0-5.745,6.144H51.788A19.616,19.616,0,0,1,54.71,62.9ZM70.628,93.751a19.488,19.488,0,0,1-14.212-6.144h7.335a7.443,7.443,0,0,0,13.753,0H84.84a19.488,19.488,0,0,1-14.212,6.144Zm0,0" transform="translate(-43.879 -47.461)" fill="#05445e"/>
                                                                        <path id="Path_973" data-name="Path 973" d="M247.045,51.09a1.045,1.045,0,1,0-.739-.306A1.053,1.053,0,0,0,247.045,51.09Zm0,0" transform="translate(-220.295 -43.88)" fill="#05445e"/>
                                                                        <path id="Path_974" data-name="Path 974" d="M384.411,222.35a1.042,1.042,0,0,0,.739-.306l.48-.48a1.045,1.045,0,0,0-1.478-1.478l-.48.48a1.045,1.045,0,0,0,.739,1.784Zm0,0" transform="translate(-343.308 -196.815)" fill="#05445e"/>
                                                                        <path id="Path_975" data-name="Path 975" d="M339.185,225.743a1.045,1.045,0,0,0,1.478,0l.3-.3a1.045,1.045,0,0,0-1.478-1.478l-.3.3A1.045,1.045,0,0,0,339.185,225.743Zm0,0" transform="translate(-303.47 -200.293)" fill="#05445e"/>
                                                                        <path id="Path_976" data-name="Path 976" d="M317.678,173.514a1.041,1.041,0,0,0,.739-.306l.369-.369a1.045,1.045,0,0,0-1.478-1.478l-.369.369a1.045,1.045,0,0,0,.739,1.784Zm0,0" transform="translate(-283.548 -153.181)" fill="#05445e"/>
                                                                        <path id="Path_977" data-name="Path 977" d="M285.2,169.764a1.041,1.041,0,0,0,.739-.306l.148-.147a1.045,1.045,0,0,0-1.478-1.478l-.148.148a1.045,1.045,0,0,0,.739,1.784Zm0,0" transform="translate(-254.46 -150.022)" fill="#05445e"/>
                                                                        <path id="Path_978" data-name="Path 978" d="M247.045,323.587a1.045,1.045,0,0,0,1.045-1.045v-.473a1.045,1.045,0,1,0-2.09,0v.473A1.045,1.045,0,0,0,247.045,323.587Zm0,0" transform="translate(-220.295 -287.479)" fill="#05445e"/>
                                                                        <path id="Path_979" data-name="Path 979" d="M221.738,341.213l.45.146a1.045,1.045,0,1,0,.646-1.988l-.45-.146a1.045,1.045,0,0,0-.646,1.988Zm0,0" transform="translate(-197.922 -303.733)" fill="#05445e"/>
                                                                        <path id="Path_980" data-name="Path 980" d="M232.5,365.08a1.045,1.045,0,0,0-1.46.231l-.278.383a1.045,1.045,0,1,0,1.691,1.228l.278-.383A1.045,1.045,0,0,0,232.5,365.08Zm0,0" transform="translate(-206.468 -326.754)" fill="#05445e"/>
                                                                        <path id="Path_981" data-name="Path 981" d="M260.668,365.312a1.045,1.045,0,1,0-1.691,1.228l.278.383a1.045,1.045,0,0,0,1.691-1.228Zm0,0" transform="translate(-231.738 -326.754)" fill="#05445e"/>
                                                                        <path id="Path_982" data-name="Path 982" d="M267.719,341.41a1.053,1.053,0,0,0,.323-.051l.45-.146a1.045,1.045,0,1,0-.646-1.988l-.45.146a1.045,1.045,0,0,0,.323,2.039Zm0,0" transform="translate(-238.809 -303.732)" fill="#05445e"/>
                                                                    </g>
                                                                </svg>


                                                            </div>
                                                            <div class="left">
                                                                <h4>برنامه منویی</h4>
                                                                <p> با این نوع طراحی باید طبق منوی غذاییت آشپزی کن یا برات آشپزی کنن.</p>
                                                            </div>

                                                        </div>
                                                        <div class="bottom">
                                                            <p class="bold"> این نوع طراحی مناسب برای زنان خانه دار و یا کسانی که برایشان آشپزی می کنند مناسب است.</p>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon5.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>اطلاعات تکمیلی</h3>
                                    <span class="level-number">
										مرحله ی 10 از 13
									</span>
                                    <span class="detail">
										  داریم کامل باهات آشنا میشیم
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="form">

                                    <section class="menuprogram">
                                        <div class="section-title small">
                                            <span>دلت می خواد برنامه ی شامت رو چه شکلی طراحی کنیم ؟ </span>
                                        </div>
                                        <ul class="menuprogram">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="menuprogram" id="meghdar" value="meghdar">
                                                    <label for="meghdar">
                                                        <div class="top">

                                                            <div class="img">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                                                    <g id="scale" transform="translate(-2 -2)">
                                                                        <path id="Path_969" data-name="Path 969" d="M51.167,2H2.833A.833.833,0,0,0,2,2.833,9.177,9.177,0,0,0,11.167,12H22v3.333H20.333a.833.833,0,0,0-.833.833v4.167H15.817a4.167,4.167,0,0,0-4.142,3.707L9.082,47.373A4.167,4.167,0,0,0,13.224,52H40.776a4.167,4.167,0,0,0,4.142-4.627L42.325,24.04a4.167,4.167,0,0,0-4.142-3.707H34.5V16.167a.833.833,0,0,0-.833-.833H32V12H42.833A9.177,9.177,0,0,0,52,2.833.833.833,0,0,0,51.167,2ZM38.183,22a2.5,2.5,0,0,1,2.483,2.223L43.26,47.557a2.506,2.506,0,0,1-.622,1.943,2.47,2.47,0,0,1-1.863.833H13.224a2.47,2.47,0,0,1-1.862-.833,2.506,2.506,0,0,1-.623-1.944l2.593-23.333A2.5,2.5,0,0,1,15.817,22Zm-5.35-5v3.333H31.167V18.667H29.5v1.667H27.833V18.667H26.167v1.667H24.5V18.667H22.833v1.667H21.167V17Zm-9.167-1.667V12h6.667v3.333Zm19.167-5H11.167A7.51,7.51,0,0,1,3.713,3.667H50.287A7.51,7.51,0,0,1,42.833,10.333Z" fill="#05445e"/>
                                                                        <path id="Path_970" data-name="Path 970" d="M20,41A10,10,0,1,0,30,31,10,10,0,0,0,20,41Zm10-.833a.833.833,0,1,1-.833.833A.833.833,0,0,1,30,40.167Zm-.833-7.458v5.944a2.5,2.5,0,1,0,1.667,0V32.709a8.333,8.333,0,1,1-1.667,0Z" transform="translate(-3 -4.833)" fill="#05445e"/>
                                                                        <rect id="Rectangle_418" data-name="Rectangle 418" width="10" height="1.667" transform="translate(8.667 7)" fill="#05445e"/>
                                                                    </g>
                                                                </svg>

                                                            </div>
                                                            <div class="left">
                                                                <h4>برنامه مقداری</h4>
                                                                <p> این نوع برنامه بهت کمک می کنه بتونی با هر غذایی به رژیمت وفادار باشی.</p>
                                                            </div>

                                                        </div>
                                                        <div class="bottom">
                                                            <p class="bold"> این نوع طراحی مناسب کسانی است که سرکار ناهار می خورند و کسانی که نمی توانند طبق منوی مشخصی ناهار میل کنند.</p>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="menuprogram" id="menure" value="menure">
                                                    <label for="menure">
                                                        <div class="top">

                                                            <div class="img">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="53.5" height="53.5" viewBox="0 0 53.5 53.5">
                                                                    <g id="barbecue" transform="translate(0.001)">
                                                                        <path id="Path_971" data-name="Path 971" d="M45.665,7.835a26.75,26.75,0,0,0-37.83,37.83,26.75,26.75,0,0,0,37.83-37.83ZM26.749,51.41A24.66,24.66,0,1,1,51.41,26.75a24.688,24.688,0,0,1-24.66,24.66Zm0,0" transform="translate(0 0)" fill="#05445e"/>
                                                                        <path id="Path_972" data-name="Path 972" d="M87.354,60.5A21.7,21.7,0,0,0,75.1,53.044a1.045,1.045,0,1,0-.43,2.045,19.425,19.425,0,0,1,10.156,5.725h-6.2L76.779,59.49a4.962,4.962,0,0,0-6.426.523,5.02,5.02,0,0,0-.651.8H56.422a19.432,19.432,0,0,1,10.268-5.747,1.045,1.045,0,0,0-.419-2.048A21.634,21.634,0,1,0,87.354,60.5Zm-.8,25.021H78.035a7.434,7.434,0,0,0-2.271-6.144h4.385a7.137,7.137,0,0,0,2.584.715q.293.024.583.024A7.141,7.141,0,0,0,90.15,75.02a19.424,19.424,0,0,1-3.594,10.5ZM51.782,79.372H65.493a7.425,7.425,0,0,0-2.31,5.383,7.56,7.56,0,0,0,.038.761H54.7a19.478,19.478,0,0,1-2.918-6.144Zm3.912-2.9a5.666,5.666,0,0,0,1.175.813H51.33a19.642,19.642,0,0,1-.242-3.072,19.415,19.415,0,0,1,.245-3.072h2.055v.005a7.314,7.314,0,0,0,2.3,5.326Zm21.819.667c.036.05.074.1.111.146H66.072a2.792,2.792,0,0,0,.9-.669l1.016-1.132a2.8,2.8,0,0,0-.636-4.267l-.124-.075h5.973ZM61.286,75.073a3.67,3.67,0,0,1-.111-.584l1.49,1.953a2.8,2.8,0,0,0,1.045.84H60.673a2.192,2.192,0,0,0,.168-.179A2.233,2.233,0,0,0,61.286,75.073Zm5.021-7.19a.137.137,0,0,1-.126.043,6.119,6.119,0,0,0-4.043.769,1.045,1.045,0,0,0-.015,1.8L66.275,73a.711.711,0,0,1,.162,1.083l-1.016,1.133a.711.711,0,0,1-1.095-.044l-2.943-3.857a1.045,1.045,0,0,0-1.786.209,6.124,6.124,0,0,0-.327,4.1.137.137,0,0,1-.029.13.129.129,0,0,1-.118.05,3.536,3.536,0,0,1-2.034-.894c-2.162-1.94-2.155-5.763.014-8.18s5.969-2.838,8.131-.9a3.536,3.536,0,0,1,1.109,1.925.128.128,0,0,1-.037.123ZM65.273,84.756a5.355,5.355,0,1,1,5.355,5.355A5.361,5.361,0,0,1,65.273,84.756ZM86.541,62.9a19.625,19.625,0,0,1,3.077,6.725,7.129,7.129,0,0,0-2.142-2.457L81.533,62.9ZM73.873,60.642a2.884,2.884,0,0,1,1.687.546l10.7,7.683a5.049,5.049,0,1,1-7.047,7.046l-7.683-10.7a2.893,2.893,0,0,1,2.346-4.578Zm-4.043,5.8L71.7,69.049H68.042a2.224,2.224,0,0,0,.347-1.714,5.609,5.609,0,0,0-1.76-3.056A6.733,6.733,0,0,0,64.206,62.9H68.93a4.965,4.965,0,0,0,.9,3.535ZM59.357,62.9a8.447,8.447,0,0,0-5.745,6.144H51.788A19.616,19.616,0,0,1,54.71,62.9ZM70.628,93.751a19.488,19.488,0,0,1-14.212-6.144h7.335a7.443,7.443,0,0,0,13.753,0H84.84a19.488,19.488,0,0,1-14.212,6.144Zm0,0" transform="translate(-43.879 -47.461)" fill="#05445e"/>
                                                                        <path id="Path_973" data-name="Path 973" d="M247.045,51.09a1.045,1.045,0,1,0-.739-.306A1.053,1.053,0,0,0,247.045,51.09Zm0,0" transform="translate(-220.295 -43.88)" fill="#05445e"/>
                                                                        <path id="Path_974" data-name="Path 974" d="M384.411,222.35a1.042,1.042,0,0,0,.739-.306l.48-.48a1.045,1.045,0,0,0-1.478-1.478l-.48.48a1.045,1.045,0,0,0,.739,1.784Zm0,0" transform="translate(-343.308 -196.815)" fill="#05445e"/>
                                                                        <path id="Path_975" data-name="Path 975" d="M339.185,225.743a1.045,1.045,0,0,0,1.478,0l.3-.3a1.045,1.045,0,0,0-1.478-1.478l-.3.3A1.045,1.045,0,0,0,339.185,225.743Zm0,0" transform="translate(-303.47 -200.293)" fill="#05445e"/>
                                                                        <path id="Path_976" data-name="Path 976" d="M317.678,173.514a1.041,1.041,0,0,0,.739-.306l.369-.369a1.045,1.045,0,0,0-1.478-1.478l-.369.369a1.045,1.045,0,0,0,.739,1.784Zm0,0" transform="translate(-283.548 -153.181)" fill="#05445e"/>
                                                                        <path id="Path_977" data-name="Path 977" d="M285.2,169.764a1.041,1.041,0,0,0,.739-.306l.148-.147a1.045,1.045,0,0,0-1.478-1.478l-.148.148a1.045,1.045,0,0,0,.739,1.784Zm0,0" transform="translate(-254.46 -150.022)" fill="#05445e"/>
                                                                        <path id="Path_978" data-name="Path 978" d="M247.045,323.587a1.045,1.045,0,0,0,1.045-1.045v-.473a1.045,1.045,0,1,0-2.09,0v.473A1.045,1.045,0,0,0,247.045,323.587Zm0,0" transform="translate(-220.295 -287.479)" fill="#05445e"/>
                                                                        <path id="Path_979" data-name="Path 979" d="M221.738,341.213l.45.146a1.045,1.045,0,1,0,.646-1.988l-.45-.146a1.045,1.045,0,0,0-.646,1.988Zm0,0" transform="translate(-197.922 -303.733)" fill="#05445e"/>
                                                                        <path id="Path_980" data-name="Path 980" d="M232.5,365.08a1.045,1.045,0,0,0-1.46.231l-.278.383a1.045,1.045,0,1,0,1.691,1.228l.278-.383A1.045,1.045,0,0,0,232.5,365.08Zm0,0" transform="translate(-206.468 -326.754)" fill="#05445e"/>
                                                                        <path id="Path_981" data-name="Path 981" d="M260.668,365.312a1.045,1.045,0,1,0-1.691,1.228l.278.383a1.045,1.045,0,0,0,1.691-1.228Zm0,0" transform="translate(-231.738 -326.754)" fill="#05445e"/>
                                                                        <path id="Path_982" data-name="Path 982" d="M267.719,341.41a1.053,1.053,0,0,0,.323-.051l.45-.146a1.045,1.045,0,1,0-.646-1.988l-.45.146a1.045,1.045,0,0,0,.323,2.039Zm0,0" transform="translate(-238.809 -303.732)" fill="#05445e"/>
                                                                    </g>
                                                                </svg>


                                                            </div>
                                                            <div class="left">
                                                                <h4>برنامه منویی</h4>
                                                                <p> با این نوع طراحی باید طبق منوی غذاییت آشپزی کن یا برات آشپزی کنن.</p>
                                                            </div>

                                                        </div>
                                                        <div class="bottom">
                                                            <p class="bold"> این نوع طراحی مناسب برای زنان خانه دار و یا کسانی که برایشان آشپزی می کنند مناسب است.</p>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container dark">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon10.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>خدا قوت قهرمان</h3>
                                    <span class="level-number">
										مرحله ی11 از 13
									</span>
                                    <span class="detail">
										 خداقوت قهرمان خوش گذشت بهت ؟
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="form">

                                    <section class="popradio">
                                        <div class="section-title small">
                                            <span>رو این شماره واتس آپ داری؟</span>
                                        </div>
                                        <div class="text">
                                            <p class="left bold mar0">
                                                9999-999-9999
                                            </p>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="whatsapp" id="whatsappyes" value="whatsappyes">
                                                    <label for="whatsappyes">
                                                        <span class="text">بله </span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="whatsapp" id="whatsappno" value="whatsappno">
                                                    <label for="whatsappno">
                                                        <span class="text">خیر</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="whatsapp" id="whatsappnoall" value="whatsappnoall">
                                                    <label for="whatsappnoall">
                                                        <span class="text">نه کلا واتس آپ ندارم تلگرام دارم.</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>شماره واتس آپ وارد کن .</span>
                                        </div>

                                        <div class="input-container gray">
                                            <input type="text" placeholder="مثلا : یکسال ">
                                        </div>
                                    </section>

                                    <section>
                                        <div class="section-title small">
                                            <span>ایمیلت رو وارد کن  .<span class="red">(واجب نیست)</span></span>
                                        </div>

                                        <div class="input-container gray">
                                            <input type="text" placeholder="مثلا : یکسال ">
                                        </div>
                                    </section>

                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>

                        <form action="#" id="f_step_">
                        <div hidden class="box-container lblue">
                            <div class="box-top">
                                <div class="icon">
                                    <img src="/images/icon11.png" alt="">
                                </div>
                                <div class="title">

                                    <h3>پرداخت </h3>
                                    <span class="level-number">
										مرحله ی 13 از 13
									</span>
                                    <span class="detail">
										 به چشم سرمایه گذای نگاه کن
									</span>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="form">

                                    <section class="popradio icon">
                                        <div class="section-title small">
                                            <span>برای سرمایه گذاری رو خودت تصمیم گرفتی؟</span>
                                        </div>

                                        <ul class="sub">
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="pay" id="payyes" value="payyes">
                                                    <label for="payyes">
                                                        <div class="img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="42.906" height="35.039" viewBox="0 0 42.906 35.039">
                                                                <g id="credit-card" transform="translate(0 -46.937)">
                                                                    <g id="Group_534" data-name="Group 534" transform="translate(0 46.937)">
                                                                        <g id="Group_533" data-name="Group 533">
                                                                            <path id="Path_1011" data-name="Path 1011" d="M40.351,108.053h0l-1.735-.187v-1.2H0v4.291H37.185v1.43H0V127.4a2.856,2.856,0,0,0,2.047,2.729,2.832,2.832,0,0,0,2.538,2.845l33.022,3.706a2.77,2.77,0,0,0,.307.016,2.868,2.868,0,0,0,2.844-2.564L42.889,111.2A2.864,2.864,0,0,0,40.351,108.053ZM22.168,118.848a.715.715,0,0,1,.715-.715H34.324a.715.715,0,0,1,.715.715v6.411a.715.715,0,0,1-.715.715H22.883a.715.715,0,0,1-.715-.715v-6.411Zm-10.011-3.6h5.721a.715.715,0,1,1,0,1.43H12.157a.715.715,0,1,1,0-1.43Zm6.436,3.575a.715.715,0,0,1-.715.715H15.732a.715.715,0,0,1,0-1.43h2.145A.715.715,0,0,1,18.592,118.822ZM3.575,115.247H9.3a.715.715,0,1,1,0,1.43H3.575a.715.715,0,1,1,0-1.43Zm-.715,3.575a.715.715,0,0,1,.715-.715h9.3a.715.715,0,0,1,0,1.43h-9.3A.715.715,0,0,1,2.86,118.822Zm38.606-7.762-2.132,22.932a1.429,1.429,0,0,1-1.572,1.27L4.74,131.555a1.43,1.43,0,0,1-1.271-1.291H35.754a2.863,2.863,0,0,0,2.86-2.86v-18.1l1.583.169A1.435,1.435,0,0,1,41.466,111.06Z" transform="translate(0 -101.661)" fill="#05445e"/>
                                                                            <rect id="Rectangle_426" data-name="Rectangle 426" width="10.011" height="4.981" transform="translate(23.598 17.902)" fill="#05445e"/>
                                                                            <path id="Path_1012" data-name="Path 1012" d="M38.617,49.8a2.863,2.863,0,0,0-2.86-2.86H2.862A2.863,2.863,0,0,0,0,49.8v.715H38.617Z" transform="translate(-0.002 -46.937)" fill="#05445e"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <span class="text small">بله همین الان پرداخت می کنم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio-content">
                                                    <input type="radio" name="pay" id="payno" value="payno">
                                                    <label for="payno">
                                                        <div class="img">
                                                            <svg id="sad" xmlns="http://www.w3.org/2000/svg" width="32.524" height="32.524" viewBox="0 0 32.524 32.524">
                                                                <g id="Group_535" data-name="Group 535">
                                                                    <path id="Path_1013" data-name="Path 1013" d="M16.262,0A16.262,16.262,0,1,0,32.524,16.262,16.28,16.28,0,0,0,16.262,0Zm5.421,8.131a2.71,2.71,0,1,1-2.71,2.71A2.71,2.71,0,0,1,21.683,8.131Zm-10.841,0a2.71,2.71,0,1,1-2.71,2.71A2.71,2.71,0,0,1,10.841,8.131ZM24.368,24.3a1.355,1.355,0,0,1-1.75-.782,7.027,7.027,0,0,0-6.356-4.547A7.026,7.026,0,0,0,9.9,23.522a1.355,1.355,0,0,1-1.266.873,1.359,1.359,0,0,1-1.266-1.839,9.785,9.785,0,0,1,8.89-6.294,9.785,9.785,0,0,1,8.887,6.289A1.355,1.355,0,0,1,24.368,24.3Z" fill="#05445e"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <span class="text small">بله تصمیم گرفتم اما فعلا نمی تونم پرداخت کنم</span>
                                                        <span class="cir"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>



                                    <div class="pagianation">
                                        <div class="button next">
											<span class="button">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <g id="arrow-point-to-right" transform="translate(-97.139 0)">
												    <path id="Path_93" data-name="Path 93" d="M111.184,14.044l-10.99,10.989A1.79,1.79,0,0,1,97.663,22.5l9.724-9.724L97.663,3.055A1.79,1.79,0,0,1,100.194.524l10.99,10.99a1.79,1.79,0,0,1,0,2.531Z" transform="translate(0 0)"></path>
												  </g>
												</svg>
											</span>
                                        </div>
                                        <div class="button prev">
											<span class="button">
												<svg id="arrow-point-to-right" xmlns="http://www.w3.org/2000/svg" width="14.569" height="25.558" viewBox="0 0 14.569 25.558">
												  <path id="Path_93" data-name="Path 93" d="M97.663,14.044l10.99,10.989a1.79,1.79,0,1,0,2.531-2.531l-9.724-9.724,9.724-9.724A1.79,1.79,0,0,0,108.652.524l-10.99,10.99a1.79,1.79,0,0,0,0,2.531Z" transform="translate(-97.139 0)"></path>
												</svg>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </form>











                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    </form>--}}

@endsection

