

<div id="content">
    <div class="title">
        <h1>اﻓﺰودن ﺗﺨﻔﯿﻒ ﺟﺪﯾﺪ</h1>


    </div>
    <div class="add-takhfif">
        <div class="left">
            <div>
                <div class="upload-box">
                    <label for="pic">
                        <span class="top">+</span>
                        <span>افزودن عکس</span>
                    </label>
                    <input name="image" type="file" id="pic">
                </div>

                <div class="rowd">
                    <div class="section">
                        <label for="product">بخش</label>
                        <select name="products" id="product" multiple>
                           @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                               @endforeach
                        </select>
                    </div>
                </div>

                <div class="rowd">
                    <div class="checkbox">
                        <input id="show" name="show" type="checkbox">
                        <label for="show">ﻧﻤﺎﯾﺶ ﺗﺨﻔﯿﻒ</label>
                    </div>
                </div>

                <div class="rowd">
                    <div class="checkbox">
                        <input id="remember" name="remember" type="checkbox">
                        <label for="remember">ﯾﺎد آور ﺗﺨﻔﯿﻒ</label>
                    </div>
                </div>


                <div class="rowd">
                    <div class="takhfif-mode">
                        <label for="type">ﺣﺎﻟﺖ ﺗﺨﻔﯿﻒ</label>
                        <select name="type" id="type">
                            <option value="counter"> شمارنده </option>
                            <option value="timer">  زمان سنج</option>
                        </select>
                    </div>
                </div>


                <div class="rowd">
                    <div class="time">
                        <label for="expired_at">زﻣﺎن ﺗﺨﻔﯿﻒ</label>
                        <span class="time">
		        						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										 	<path d="M16 0C24.848 0 32 7.168 32 16C32 24.848 24.848 32 16 32C7.168 32 0 24.848 0 16C0 7.168 7.168 0 16 0ZM15.44 7.888C14.784 7.888 14.24 8.416 14.24 9.088V17.168C14.24 17.584 14.464 17.968 14.832 18.192L21.104 21.936C21.296 22.048 21.504 22.112 21.728 22.112C22.128 22.112 22.528 21.904 22.752 21.52C23.088 20.96 22.912 20.224 22.336 19.872L16.64 16.48V9.088C16.64 8.416 16.096 7.888 15.44 7.888Z" fill="white"></path>
										</svg>
		        					</span>
                    </div>
                </div>


                <div class="rowd">
                    <div class="takhfif-count">
                        <label for="count">ﺗﻌﺪاد ﺗﺨﻔﯿﻒ</label>
                        <input type="number" id="count" name="count" placeholder="ﻣﺜﻠﺎ : 80">
                    </div>
                </div>

            </div>
        </div>
        <div class="right">
            <div class="rowd">
                <div class="hright">
                    <label for="name">ﻧﺎم ﺗﺨﻔﯿﻒ</label>
                    <input type="text" id="name" name="name" placeholder="ﻧﺎم ﺗﺨﻔﯿﻒ را وارد ﮐﻨﯿﺪ">
                </div>
                <div class="hleft">
                    <label for="code">ﮐﺪ ﺗﺨﻔﯿﻒ</label>
                    <input type="text" name="code" placeholder="ﮐﺪ ﺗﺨﻔﯿﻒ را وارد ﮐﻨﯿﺪ">
                </div>
            </div>
            <div class="rowd">
                <label for="info_discount">ﺗﻮﺿﯿﺤﺎت ﺗﺨﻔﯿﻒ</label>
                <textarea name="info_discount" id="info_discount" cols="30" rows="10" placeholder="ﺗﻮﺿﯿﺤﺎت ﺗﺨﻔﯿﻒ را وارد ﮐﻨﯿد"></textarea>
            </div>
            <div class="rowd">
                <label for="info_sale">ﺗﻮﺿﯿﺤﺎت ﺧﺮﯾﺪ</label>
                <textarea name="info_sale" id="info_sale" cols="30" rows="10" placeholder="ﺗﻮﺿﯿﺤﺎت ﺧﺮﯾﺪ را وارد ﮐﻨﯿﺪ"></textarea>
            </div>
            <div class="percent-load">
                <label for="">ﺑﺎرﮔﺬاری ﺻﺪا</label>
                <div class="percent">
                    <span class="color" style="width: 80%;"></span>
                    <span class="name">Some File.mp3 - 80%</span>
                </div>
            </div>
            <div class="rowd">

                <label class="lright" for="percent">درﺻﺪ ﺗﺨﻔﯿﻒ</label>
                <input class="fleft" id="percent" name="percent" type="text" placeholder="ﻣﺜﻠﺎ : 80">
            </div>
            <div class="rowd">
                <div class="totall-price">
                    <label for="" class="lright">ﻗﯿﻤﺖ ﺗﻤﺎم ﺷﺪه</label>
                    <div class="price">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="rowd">
                <div class="buttons">
                    <span class="add">+ اﻓﺰودن ﺗﺨﻔﯿﻒ</span>
                    <span class="view">ﻣﺸﺎﻫﺪه ﺗﺨﻔﯿﻒ ﻫﺎ</span>
                </div>
            </div>
        </div>
    </div>





</div>
