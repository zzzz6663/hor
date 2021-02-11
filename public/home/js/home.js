

function  close_popup(){
    $('.popup').fadeOut(600)
}

$(document).ready(function(){
    if (jQuery) {
        var show=false
        var pos=0
        var now=- $( window ).width()
        var name;
        $('.register_next_page').click(function(){
            name=$('#name').val(); name=name.trim()
            if (name.length<2){
                noty('لطفا نام خود را وارد نمایید')
                return
            }
            $('.name').text(name)

            pos++
            $('.secand').css('transform','translateX('+(now*pos)+'px)');
        })
        $('.register_prve_page').click(function(){
            pos--
            $('.secand').css('transform','translateX('+(now*pos)+'px)');
        })


        $('.mob_in').hide(200);
        $('.mob_out').hide(200);
        $('input[type=radio][name=live]').change(function() {
            if (!show){

                $('#moile').focus();
                $('#mobile_section').show(500)
                if (this.value == 'out') {
                    $('#mobile').inputmask("999-999-999-999");
                    $('#mobile').val('00')


                }
                else if (this.value == 'iran') {
                    $('#mobile').inputmask("9999-999-9999");
                    $('#mobile').val('09')


                }
            }
        });



        $('#go_to_user_panel').click(function(){
            var str
            var country=get_radio_val('live');

            if (show){
                var email= $('#email').val();
                if (email.length<4){
                    noty('لطفا ایمیل  خود را به درستی وارد نمایید  ')
                    return
                }
                str={
                    'name':name,
                    'email':email,
                    'country':country
                }

            }else {
                var mobile

                mobile= $('#mobile').val();
                mobile=mobile.trim(); mobile=escapeHtml(mobile)
                mobile=mobile.split("-").join("");
                mobile=mobile.split("_").join("");
                if (mobile.length<11){
                    noty('لطفا تلفن همراه خود را به درستی وارد نمایید  ')
                    return
                }
                str={
                    'name':name,
                    'mobile':Number(mobile),
                    'country':country
                }
            }

            var jqXHR=   $.ajax('/user_create',{
                type:'post',
                data: JSON.stringify(str),
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type':'application/json,charset=utf-8'
                },
                datatype:'json',
                async:false,
                cache:false,
                contentType: false,
                processData: false,
                success:function (data) {
                },
                error: function (request, status, error) {
                }
            });
            console.log(JSON.parse(jqXHR.responseText))
            var res= JSON.parse(jqXHR.responseText)
            var all = Object.keys(res);
            if (all[0]=='status'){
                noty('ثبت نام با موفقیت انجام شد ','green','  ثبت نام ')
                setTimeout(
                    function()
                    {
                        window.location.href='/profile'
                    }, 1500);
            }
            if (all[0]=='message'){
                noty(   res.errors[Object.keys(res.errors)[0]],'red','اخطار   ')
            }

            //  if (all[0]=='message'){
            //      noty(   res.errors[Object.keys(res.errors)[0]],'red','اخطار   ')
            //  }

        })




        $('.inter_but').click(function(){
            var element=$(this)
            if (show){

                element.text('ورود با ایمیل')
                $('#mobile_section').show(200)
                $('#email_section').hide(800)
                show=false
            }else {
                $('#email').inputmask({
                    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
                    greedy: false,
                    onBeforePaste: function (pastedValue, opts) {
                        pastedValue = pastedValue.toLowerCase();
                        return pastedValue.replace("mailto:", "");
                    },
                    definitions: {
                        '*': {
                            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
                            casing: "lower"
                        }
                    }
                });
                element.text('ورود با موبایل ')
                $('#mobile_section').hide(200)
                $('#email_section').show(800)
                show=true
            }
        })












        //    ==================user panel start================
        var user_name
        if ($('#profile-page').length){
            user_name=$('#profile-page').data('name');
            user_name +=' جان '
        }

        $('#open_comment_popup').click(function(){
            $('.send_comment_popup').fadeIn(600)
        })
        $('.open_bmi_popup').click(function(){
            $('.show_bmi_popup').fadeIn(600)
        })
        $('.popup_close').click(function(){
            close_popup()
        })

        $('body').on('submit', '#profile_comment', function(event) {
            event.preventDefault();
            var res= lara_ajax('/profile/insert_user_comment',new FormData(this ),'   نظرت  ثبت شد ' )
                if (res.status=='ok'){
                    $('#comment_textarea').val('');
                    close_popup()
                }
        })

        // $('#add_cart_form_but').click(function(){

        // $("body").click(function(e){
        //         if(e.target.className !== "popup")
        //         {
        //             $("#popup").hide(800);
        //         }
        //     }
        // );
        $('body').on('click', '.add_cart_form_but', function() {
            $('.cart_add_popup').fadeIn(600)

            var element=$(this)
            var id=element.data('id')
            console.log(id)
            var res= lara_ajax('/profile/cart/add/'+id,'','       محصول به سبد اضافه شد    ','',false )
            if (res.status=='ok'){
                noty('محصول به سبد اضافه شد ' ,'green')
            }
            if (res.status=='added'){
                noty('محصول قبلا به سبد خرید اضافه شده  ' ,'red')
            }
        })



        // $('#insert_new_user_comment').click(function(){
        //     var comment=$('#comment_textarea').val();
        //     comment=escapeHtml(comment)
        //     comment=comment.trim()
        //     // if (comment.length<10){
        //     //     noty('حداقل ده   کاراکتر را وارد نمایید','red','اخطار')
        //     //     return
        //     // }
        //
        //     var  str={
        //         'comment':comment,
        //     }
        //
        //
        //
        //     var res= lara_ajax('/profile/insert_user_comment',str)
        //
        //     var all = Object.keys(res);

        // })




        $('#insert_password').click(function(){
            var password=$('#password').val();
            var  str={
                'password':password,
            }
            var res=  lara_ajax('/profile/update_password',str)
            console.log( res)

            var all = Object.keys(res);
            if (all[0]=='status'){
                $('#comment_textarea').val('');
                close_popup()
                noty(user_name+ '       رمز عبورت ثبت شد '   ,'green','  ثبت   ')
            }
            if (all[0]=='message'){
                noty(   res.errors[Object.keys(res.errors)[0]],'red','اخطار   ')
            }
        })
        $("#password").on("keyup", function(e) {
            console.log('11s')
            var element=$(this)
            var pass=element.val()
            console.log(pass)
            if (pass.length==4){
                $('#insert_password').css('background','#FF81AE')
            }else {
                $('#insert_password').css('background','#f9afcb')
            }
        });

        $(".bmi").focus(function(){
            var element=$(this)
            element.val('')
        });
        $('#cal_bmi').click(function(){
            var weight=$('#weight_inp').val() ;weight=Number(weight)
            var height=$('#height_inp').val();height=Number(height)
            var new_height=height/100;
            var bmi= weight/(new_height*new_height)
            // bmi= Math.round(bmi * 10) / 10
            $('.bmi_uc').text( bmi.toFixed(1))
            $('.weight_uc').text(weight)
            $('.height_uc').text(height)
            var  bmi_res=$('.bmi_res');
            var color
            var res
            console.log('bmi'+bmi)
            switch (true){
                case bmi<=16 : color='#0089ff';res='لاغری شدید';  break;
                case (bmi<=16 && bmi<17) : color='#75B8F3'; res='لاغری متوسط';  break;
                case (bmi<=17  && bmi<18.5 ) : color='#A0CFF1'; res='لاغری خفیف';  break;
                case (bmi<=18.5   && bmi<25) : color='#45dc14'; res='  نرمال ';  break;
                case (bmi<=25   && bmi<30) : color='#F7F444'; res='  اضافه وزن ';  break;
                case (bmi<=30   && bmi<35) : color='#f79844'; res='  چاقی کلاس I ';  break;
                case (bmi<=35   && bmi<40) : color='#d6741f'; res='  چاقی کلاس III ';  break;
                case bmi>40 :color='#b81919';res='  چاقی کلاس I ';  break;

            }
            close_popup()
            console.log('res'+res)
            console.log('color'+color)
            bmi_res.text(res)
            bmi_res.css('background',color)

        });

        $('#open_exit_popup').click(function(){
            $('.show_exit_popup').fadeIn(600)
        })



        //    ==================user panel end================



    }
});
