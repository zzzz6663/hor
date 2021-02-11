<div id="content">
    <div class="title">
        <h1>  محصولات </h1>
    </div>



    <form   id="product_form" method="post" enctype="multipart/form-data"  >
        @csrf

    <div class="sms">
        <div class="right fnone">
            <div>
                <div>

                    <label for="name">عنوان</label>
                    <input type="text"   id="name" name="name" placeholder=" مثلا رژیم جدید">
                </div>
                <div>
                    <label id="info">متن صفحه داخلی </label>
                    <textarea class="editor"  name="info" id="info" cols="30" rows="10" placeholder="ﻣﺘﻦ   را اﯾﻨﺠﺎ وارد ﮐﻨﯿﺪ"></textarea>
                </div>
                <div>
                    <label id="txt_after">   متن بعد از پر کردن     پرسشنامه </label>
                    <textarea class="editor" name="txt_after" id="txt_after" cols="30" rows="10" placeholder="ﻣﺘﻦ   را اﯾﻨﺠﺎ وارد ﮐﻨﯿﺪ"></textarea>
                </div>

                <div>
                    <label id="txt_before">   متن    قبل از پرسشنامه      </label>
                    <textarea class="editor" name="txt_before" id="txt_before" cols="30" rows="10" placeholder="ﻣﺘﻦ   را اﯾﻨﺠﺎ وارد ﮐﻨﯿﺪ"></textarea>
                </div>
                <div>
                    <label for="color">رنگ</label>
                    <input type="text" name="color" id="color" placeholder=" color1  ">
                </div>
                <div>
                    <label for="price">قیمت</label>
                    <input type="number" name="price" id="price" placeholder=" 10,000   ">
                </div>
                <div>
                    <label for="day_p">مدت زمان</label>
                    <input type="number" name="day_p" id="day_p" placeholder=" 30 روز   ">
                </div>
                <div>
                    <div class="div"  >
                        <div class="d2">
                            <div>
                                <div  class="checkbox">
                                    <input type="checkbox" name="show" id="show" >
                                    <label for="show">نمایش</label>
                                </div>
                            </div>
                        </div>
                        <div class="d2">
                            <div>
                                <label for="day_p">دسته بندی  </label>
                                <select name="categories[]" id="cat" multiple>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div style="clear: both">
                    <label for="sound">   انتخاب فایل صدا </label>
                    <input type="file" id="sound" name="sound"  >
                </div>

                <div style="clear: both">
                    <label for="img">   انتخاب   عکس </label>
                    <input type="file" id="img" name="img"  accept="image/png,image/jpeg,image/jpg"  >
                </div>

                <div>
                    <ul class="btns">
                        <input type="submit" value="ثبت" class="btn1">






                    </ul>
                </div>
            </div>

        </div>
    </div>
    </form>








<div class="table">

    <table>

        <thead>
        <tr>
            <th>
                <span class="fid">id</span>
            </th>
            <th>
                <span>نام</span>
            </th>
            <th>
                <span>   دسته بندی</span>
            </th>
            <th>
                <span>زمان </span>
            </th>
            <th>
                <span>قیمت </span>
            </th>
            <th>
                <span>  تعداد  فروش </span>
            </th>
            <th>
                <span>تخفیف جاری</span>
            </th>
            <th>
                <span></span>
            </th>
        </tr>
        </thead>

        <tbody>
        <tr class="first">
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
        </tr>

        @foreach($products as $product)
            <tr>
                <td class="rowd">
		        					<span>
		        						<span class="green">
		                            	{{$loop->index+1}}
		        						</span>
		        					</span>
                </td>
                <td class="name">
		        					<span>
		        					{{$product->name}}
		        					</span>
                </td>
                <td class="phone">
		        					<span>
		        						@foreach($product->categoreis as $category)
                                            {{$category->name}}
                                            @endforeach
		        					</span>
                </td>
                <td class="pass">
		        					<span>

                                        @foreach($product->categoreis as $category)
                                            {{$category->name}}
                                            {{$product->day_p}}
                                            @switch($category->name)

                                                @case('مشاوره')
                                                {{'دقیقه  '}}
                                                @break
                                                @case('رژیم')
                                                {{' روز'}}
                                                @break
                                                @case('برنامه ورزشی')
                                                {{'روز '}}
                                                @break
                                            @endswitch
                                        @endforeach

		        					</span>
                </td>
                <td class="takmil">
		        					<span>
		        							{{number_format($product->price)}}
                                        تومان
		        					</span>
                </td>
                <td class="time">
		        					<span>

		        					</span>
                </td>
                <td class="stat">
		        					<span>
		        					</span>
                </td>
                <td class="edit">
		        					<span>
		        						<span class="edit2">
		        							<svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M26.0122 23.5634C26.5577 23.5634 27 23.9969 27 24.5317C27 25.0219 26.6284 25.427 26.1462 25.4912L26.0122 25.5H15.7065C15.1609 25.5 14.7187 25.0665 14.7187 24.5317C14.7187 24.0415 15.0903 23.6364 15.5724 23.5723L15.7065 23.5634H26.0122ZM15.9888 1.37493C17.859 -0.458309 20.8924 -0.458309 22.7626 1.37493L24.7041 3.27809C26.5743 5.11133 26.5743 8.08477 24.7041 9.918L10.1109 24.2229C9.27646 25.0409 8.1451 25.4998 6.96422 25.4998H0.987811C0.432622 25.4998 -0.0135228 25.0515 0.000313348 24.5074L0.150647 18.5962C0.180536 17.4789 0.646905 16.4138 1.453 15.6236L15.9888 1.37493ZM14.859 5.2185L2.84997 16.993C2.40189 17.4322 2.14221 18.0253 2.12561 18.6457L2.00018 23.5626L6.96422 23.5633C7.54833 23.5633 8.11005 23.3617 8.55342 22.9976L8.71395 22.8535L20.7825 11.0235L14.859 5.2185ZM21.3656 2.7443C20.2669 1.66734 18.4845 1.66734 17.3858 2.7443L16.257 3.849L22.179 9.654L23.3071 8.54863C24.3447 7.53151 24.4024 5.91649 23.48 4.83293L23.3071 4.64746L21.3656 2.7443Z" fill="white"></path>
                                              </svg>

		        						</span>
		        					</span>
                </td>
            </tr>
            @endforeach

        <tr class="last">
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
            <td>
                <span class="empty"></span>
            </td>
        </tr>
        </tbody>

    </table>



    <div id="pagination" data-cat="product" class="pagination">
        {{ $products->links() }}

    </div>

    @include('admin.menus.pagination')


</div>


</div>


