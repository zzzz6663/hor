<div id="content">
    <div class="title">
        <h1>دسته بندی</h1>
    </div>


    <form   id="category_form" method="post"   >
        @csrf
        {{--    <form action="#" id="product_form"   >--}}
        {{--    @csrf--}}
        {{--    @method('post')--}}
        <div class="sms">
            <div class="right fnone">
                <div>
                    <div>

                        <label for="name">عنوان</label>
                        <input type="text"   id="name" name="name" placeholder=" مثلا رژیم جدید">
                    </div>



                    <div>
                        <ul class="btns">
                            <input type="submit" value="ثبت"  class="btn1">
                            {{--                        <li class="sendt" id="insert_product1">--}}
                            {{--                            	                				<span class="send">--}}

                            {{--                            	                                     <span >   ثبت </span>--}}
                            {{--                            	                				</span>--}}
                            {{--                        </li>--}}
                        </ul>
                    </div>
                </div>

            </div>


        </div>
    </form>


    <div class="table">

        <table class="mali">

            <thead>
            <tr>
                <th>
                    <span class="fid">id</span>
                </th>
                <th>
                    <span>نام</span>
                </th>

                <th>
                    <span>حذف</span>
                </th>

            </tr>
            </thead>

            <tbody>

            @foreach($categories  as $cat)
            <tr class="first">
                <td>

                    <span class="empty">{{$cat->id}}</span>
                </td>
                <td>

                    <span class="empty">{{$cat->name}}</span>
                </td>


            </tr>
            @endforeach



            </tbody>



        </table>


    </div>

    <div id="pagination" data-cat="category" class="pagination">
        {{ $categories->links() }}

    </div>

    @include('admin.menus.pagination')



</div>
