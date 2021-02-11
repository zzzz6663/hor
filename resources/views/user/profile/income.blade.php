@extends('mater')
@section('main_body')


    <div id="income">
        <div>
            <div class="topd">
				<span class="left">
					<img src="/home/images/left.svg" alt="">
				</span>
                <h2>ﮐﺴﺐ درآﻣﺪ</h2>

            </div>


            <div class="right-side">
                <div class="video-box">
                    <div class="top">
                        <video id="player" class="js-player" playsinline controls data-poster="images/practice.png">
                            <source src="/home/images/video.mp4" type="video/mp4" />

                        </video>
                    </div>
                    <div class="info">
                        <h4>آﻣﻮزش ﺳﯿﺴﺘﻢ ﮐﺴﺐ درآﻣﺪ</h4>
                        <p>ﻗﺒﻞ از ﺷﺮوع ﯾﺎد ﺑﮕﯿﺮ ﮐﻪ ﭼﺠﻮری ﺑﺎﯾﺪ ﺷﺮوع ﮐﻨﯽ ﺑﻪ ﮐﺴﺐ درآﻣﺪ از حورورس ﻓﯿﺖ</p>
                    </div>
                </div>

                <div class="name">
                    <div class="title">
                        <h4>  {{$user->name}}  </h4>
                    </div>

                    <ul>
                        <li>
                            <div class="wallet">
                                <span>ﻣﻮﺟﻮدی ﮐﯿﻒ ﭘﻮل:</span>
                                <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M64.0646 19.9669H62.5696L43.0092 0.406557C42.4677 -0.134957 41.5895 -0.134957 41.0481 0.406557L36.0371 5.41774L15.9957 0.0476743C15.2558 -0.150765 14.4954 0.288409 14.2972 1.02822L9.22293 19.9669H5.82408C2.61272 19.9669 0 22.5795 0 25.791C0 25.868 0.00291211 25.9444 0.00582422 26.0206C0.00263477 26.0588 0 26.0971 0 26.136V64.0667C0 67.8896 3.11041 71 6.93346 71H56.5765C56.598 71 56.619 70.9986 56.6405 70.9983H64.0645C67.8875 70.9983 70.9978 67.8881 70.9978 64.0649V26.9002C70.9979 23.0771 67.8877 19.9669 64.0646 19.9669ZM62.8257 22.7402H64.0646C66.3585 22.7402 68.2246 24.6065 68.2246 26.9002V38.0138C68.2246 39.8261 66.7501 41.3005 64.938 41.3005H63.5099V35.775C63.5099 32.0002 60.4773 28.9225 56.7207 28.8451L62.8257 22.7402ZM37.4321 7.9449C37.4323 7.94476 37.4324 7.94449 37.4325 7.94435L42.0288 3.34807L60.1624 21.4816L52.8474 28.7966H50.3106L53.6287 25.4783C54.1702 24.9368 54.1702 24.0587 53.6287 23.5172C52.5062 22.3947 52.5062 20.5683 53.6287 19.4458C54.1702 18.9043 54.1702 18.0262 53.6287 17.4846L46.0256 9.88173C45.4841 9.34022 44.606 9.34022 44.0644 9.88173C42.9418 11.0044 41.1154 11.0044 39.993 9.88173C39.4515 9.34022 38.5733 9.34022 38.0319 9.88173L19.117 28.7967H16.5802L37.4321 7.9449ZM33.3511 23.5868C30.1855 23.5868 27.5333 25.8221 26.8864 28.7967H23.0389L39.134 12.7016C40.9106 13.7605 43.1468 13.7605 44.9233 12.7016L50.8087 18.587C49.7499 20.3634 49.7499 22.5999 50.8087 24.3763L46.3882 28.7967H39.8159C39.169 25.8219 36.5169 23.5868 33.3511 23.5868ZM36.9269 28.7967H29.7759C30.3386 27.3716 31.7288 26.3603 33.3514 26.3603C34.974 26.3603 36.3641 27.3716 36.9269 28.7967ZM15.1145 26.3401L18.7868 12.6348C19.7937 12.651 20.7954 12.3939 21.6924 11.8757C22.5896 11.3578 23.3116 10.6213 23.8026 9.7389L30.0435 11.4111L20.9867 20.4679L15.1145 26.3401ZM16.6173 3.08542L33.7726 7.68212L32.3081 9.14677L23.3457 6.74525C22.9903 6.64998 22.6118 6.69991 22.2934 6.88378C21.9749 7.06766 21.7425 7.37052 21.6474 7.7258C21.4482 8.46853 20.9719 9.08936 20.306 9.4739C19.64 9.85844 18.8641 9.9605 18.1212 9.7615C17.3817 9.5632 16.6211 10.0022 16.4229 10.7421L11.573 28.8417H9.71591L16.6173 3.08542ZM5.82408 22.7402H8.47951L6.84457 28.8417H5.82394C4.14171 28.8417 2.7733 27.4731 2.7733 25.791C2.77344 24.1088 4.14213 22.7402 5.82408 22.7402ZM68.2246 64.0649C68.2246 66.3588 66.3584 68.2249 64.0646 68.2249H62.1207C62.9925 67.0656 63.5099 65.6255 63.5099 64.0665V58.4953H64.342C65.7902 58.4953 67.1308 58.0289 68.2246 57.2404V64.0649ZM68.2246 51.8393C68.2246 53.9802 66.4828 55.722 64.342 55.722H35.2217C32.0103 55.722 29.3976 53.1094 29.3976 49.8979C29.3976 46.6864 32.0102 44.0738 35.2217 44.0738H39.4243C40.1902 44.0738 40.811 43.4528 40.811 42.6871C40.811 41.9213 40.1902 41.3004 39.4243 41.3004H35.2217C30.4811 41.3004 26.6243 45.1571 26.6243 49.8977C26.6243 54.6384 30.4811 58.4951 35.2217 58.4951H60.7366V64.0664C60.7366 66.3388 58.9049 68.1919 56.6407 68.2264H9.42941V52.6107C9.42941 51.845 8.80858 51.224 8.04269 51.224C7.27681 51.224 6.65597 51.845 6.65597 52.6107V68.2163C4.49103 68.0731 2.7733 66.2671 2.7733 64.0667V30.7494C3.66122 31.2977 4.70611 31.615 5.82394 31.615H56.5763C58.8702 31.615 60.7364 33.4812 60.7364 35.775V41.3005H50.71C49.9441 41.3005 49.3232 41.9215 49.3232 42.6872C49.3232 43.453 49.9441 44.0739 50.71 44.0739H64.938C66.149 44.0739 67.2772 43.7155 68.2246 43.1011V51.8393Z" fill="white" fill-opacity="0.31"/>
                                </svg>

                                <div class="price">
                                    50,000,000 تومان
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="contact">
                                <p>
                                    <span>ﺷﻤﺎره ﺗﻠﻔﻦ</span>
                                    <span>{{$user->mobile}}</span>
                                </p>
                                <p>
                                    <span>ﺷﻤﺎره ﭘﺮوﻧﺪه</span>
                                    <span>112281244</span>
                                </p>
                            </div>
                        </li>
                    </ul>

                    <div class="button">
                        <span>درﺧﻮاﺳﺖ ﺑﺮداﺷﺖ وﺟﻪ</span>
                    </div>
                </div>
            </div>

            <div class="left-side">

                <div class="refbox">
                    <div class="title">
                        <h4>ﻟﯿﻨﮏ ﻫﺎی دﻋﻮت</h4>
                    </div>

                    <div class="single-ref">
                        <p>ﻟﯿﻨﮏ دﻋﻮت ﺑﺎ 30% ﺗﺨﻔﯿﻒ<span>

							<span class="tooltip">
								ﻗﺒﻞ از ﺷﺮوع ﯾﺎد ﺑﮕﯿﺮ ﮐﻪ ﭼﺠﻮری ﺑﺎﯾﺪ ﺷﺮوع ﮐﻨﯽ
							</span>
						؟
					</span></p>
                        <div class="bottom">
                            <input type="text" value="www.horosfit.com/hor/47338497" readonly>
                            <span class="copy">
								کپی لینک
								<svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M10.4402 3.17236C10.4402 3.17236 4.50585 3.17546 4.49657 3.17546C2.36307 3.1886 1.04199 4.59238 1.04199 6.73362V13.8422C1.04199 15.9943 2.37312 17.4035 4.52518 17.4035C4.52518 17.4035 10.4588 17.4012 10.4689 17.4012C12.6024 17.388 13.9242 15.9835 13.9242 13.8422V6.73362C13.9242 4.58156 12.5923 3.17236 10.4402 3.17236Z" fill="white" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7601 0.853516C12.7601 0.853516 6.82567 0.856608 6.8164 0.856608C4.68289 0.869749 3.36182 2.27353 3.36182 4.41477V11.5234C3.36182 13.6754 4.69294 15.0846 6.845 15.0846C6.845 15.0846 12.7786 15.0823 12.7887 15.0823C14.9222 15.0692 16.244 13.6646 16.244 11.5234V4.41477C16.244 2.26271 14.9121 0.853516 12.7601 0.853516Z" fill="white" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M12.6119 11.2698H7.03076" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M12.6119 8.03275H7.03076" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M9.1604 4.80447H7.03076" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>

							</span>
                        </div>
                    </div>

                    <div class="single-ref">
                        <p>ﻟﯿﻨﮏ دﻋﻮت ﺑﺎ 40% ﺗﺨﻔﯿﻒ<span>
						<span class="tooltip">
								ﻗﺒﻞ از ﺷﺮوع ﯾﺎد ﺑﮕﯿﺮ ﮐﻪ ﭼﺠﻮری ﺑﺎﯾﺪ ﺷﺮوع ﮐﻨﯽ
							</span>
						؟</span></p>
                        <div class="bottom">
                            <input type="text" value="www.horosfit.com/hor/47338497" readonly>
                            <span class="copy">
								کپی لینک
								<svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M10.4402 3.17236C10.4402 3.17236 4.50585 3.17546 4.49657 3.17546C2.36307 3.1886 1.04199 4.59238 1.04199 6.73362V13.8422C1.04199 15.9943 2.37312 17.4035 4.52518 17.4035C4.52518 17.4035 10.4588 17.4012 10.4689 17.4012C12.6024 17.388 13.9242 15.9835 13.9242 13.8422V6.73362C13.9242 4.58156 12.5923 3.17236 10.4402 3.17236Z" fill="white" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7601 0.853516C12.7601 0.853516 6.82567 0.856608 6.8164 0.856608C4.68289 0.869749 3.36182 2.27353 3.36182 4.41477V11.5234C3.36182 13.6754 4.69294 15.0846 6.845 15.0846C6.845 15.0846 12.7786 15.0823 12.7887 15.0823C14.9222 15.0692 16.244 13.6646 16.244 11.5234V4.41477C16.244 2.26271 14.9121 0.853516 12.7601 0.853516Z" fill="white" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M12.6119 11.2698H7.03076" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M12.6119 8.03275H7.03076" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M9.1604 4.80447H7.03076" stroke="#AAAAAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>

							</span>
                        </div>
                    </div>

                </div>

                <div class="pay-history">
                    <div class="title">
                        <h4>زیر مجموعه‌ها</h4>
                    </div>

                    <div class="list mCustomScrollbar" data-mcs-theme="dark">

                        <div class="single-pay">
                            <div class="price">
                                <span class="number">10,000</span>
                                <span class="un"> تومان</span>
                            </div>
                            <div class="right">
                                <h5>احسان دلیخون</h5>
                                <span class="date">تاریخ عضویت: 1399/5/29</span>

                            </div>
                        </div>
                        <div class="single-pay">
                            <div class="price">
                                <span class="number">10,000</span>
                                <span class="un"> تومان</span>
                            </div>
                            <div class="right">
                                <h5>احسان دلیخون</h5>
                                <span class="date">تاریخ عضویت: 1399/5/29</span>

                            </div>
                        </div>
                        <div class="single-pay">
                            <div class="price">
                                <span class="number">10,000</span>
                                <span class="un"> تومان</span>
                            </div>
                            <div class="right">
                                <h5>احسان دلیخون</h5>
                                <span class="date">تاریخ عضویت: 1399/5/29</span>

                            </div>
                        </div>
                        <div class="single-pay">
                            <div class="price">
                                <span class="number">10,000</span>
                                <span class="un"> تومان</span>
                            </div>
                            <div class="right">
                                <h5>احسان دلیخون</h5>
                                <span class="date">تاریخ عضویت: 1399/5/29</span>

                            </div>
                        </div>



                        <div class="pagination">
                            <ul>
                                <li><span>1</span></li>
                                <li class="active"><span>2</span></li>
                                <li><span>3</span></li>
                                <li><span>4</span></li>
                                <li><span>5</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection

