var path='/chapapp/'
function escapeHtml(text) {
    if (text.length>0){
        return text.trim()
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }else {
        return ' ';
    }

}
function pure_mony(text) {
    if (text.length>0){
        return text.trim()
            .replace(/,/g, "")
            .replace('تومان', "")
            .replace(' ', "")

    }else {
        return '';
    }

}
function escapechar(text) {
    if (text.length>0){
        return text.trim()
            .replace(/&/g, "")
            .replace(/</g, "")
            .replace(/>/g, "")
            .replace(/"/g, "")
            .replace(/'/g, "");
    }else {
        return ' ';
    }

}

function note_success(str ,element ){

    $('body').overhang({
        type: "success",
        message: str
    });

}
function note_error(str,element){
    $('body').overhang({
        type: "error",
        message: str,
        closeConfirm: false
    });
}

function note_success2(str ,element ){
    $.notify(
        str,
        { position:"top center" ,
            className: 'success',
        }
    );
}
function note_error2(str){
    $.notify(
        str,
        { position:"top center" ,
            className: 'error',
        }
    );
}
function change_location(){
    alert(123)
}
function load_animation(){
    $('body').loadingModal({
        position:'auto',
        text:'لطفا صبر نمایید .....',
        color:'#fff',
        opacity:'0.7',
        backgroundColor:'rgb(۲۵,۱۰۹,۱۸۰)',
        animation:'cubeGrid'
    });
}
function stop_animation(){
    $('body').loadingModal('destroy');
}
function  get_select_val(name ){
    return $('select[name='+name+']').find(":selected").val();
}
function valid_form(form,url,reset=true ,show=true) {
    var new_form=form
    var ss=form+' *';
    var form=$('#'+form);
    console.log(form)
    form.validate();

    if(!form.valid()){
        $('#'+ss).filter(':input[required]:visible').each(function(){
            var element=$(this);

            // console.log('class id'+element.attr('class'))
            // console.log('element id'+element.attr('id'))
            // console.log('tagName  '+element.prop("tagName"))
            if (!element.valid()) {
                console.log('name:  '+element.prop("name"))
                $([document.documentElement, document.body]).animate({
                    scrollTop: (element.offset().top-200)
                }, 500);
                // var label = $("label[for='" + element.attr('id') + "']");
                // element.removeClass('animated bounce');
                // label.removeClass('animated bounce');
                // var par=  element.closest('.input-container')
                // par.removeClass('animated bounce');
                // var color=par.css("border-color")
                // element.css('border', '1px solid red');
                // if (show){
                //     note_error('تمام فیلد ها را به درستی وارد کنید  ',par)
                //
                // }
                setTimeout(function(){par.addClass('animated bounce');label.addClass('animated bounce');}, 1000);
                setTimeout(function(){   }, 3000);
                return  false
            }
        });
        return false
    }else {
        var str = form.serializeArray();
        var d_form= new_form+ ' input[type=checkbox]:not(:checked)'
        str = str.concat(
            jQuery('#'+d_form).map(
                function() {
                    return {"name": this.name, "value": false}
                }).get()
        );
        console.log(str)

        var jqXHR=  $.ajax(path+url,{
            type:'post',
            data: str,
            async:false,
            success:function (data) {
                if (reset){
                    note_success2( 'ثبت شد ',form)
                    form.each(function(){
                        this.reset();
                    });
                }
            },
            error: function (request, status, error) {
            }
        });
    }
    return jqXHR.responseText;
}
function downloadURI(uri, name) {
    var link = document.createElement("a");

    link.download = name;
    link.href = uri;
    document.body.appendChild(link);
    link.click();
    link='';

}
function noty(message,color='red',title='اخطار',position='topCenter'){
    console.log('errrrrr')
    iziToast.show({
        title: title,
        color: color,
        position:position,
        animateInside:true,
        rtl: true,
        message:  message,
        titleSize: '25px',
        messageSize: '20px',
    });
}
function  get_radio_val(name ){
    return $('input[name='+name+']:checked').val();
}
function  push_input_coookies(input_name ,name ){
    var val = $('input[name ='+input_name+']').val();
    Cookies.set(name,  val);
}
function  get_cookies_by_name( name ){
   return Cookies.get(name)
}
function lara_ajax(url,str ,message,menu,show=true){
            console.log( JSON.stringify(str) )
        // $.ajaxSetup({
        //     'headers':{
        //        'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content
        //     }
        // })
    // var  str={
    //     'title':'sdd',
    // }
        var jqXHR=   $.ajax(url,{
            type:'post',
            data:  str,
            headers:{
                'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                // 'Content-Type':'application/json,charset=utf-8'
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

    if (show){
        if (all[0]=='status'){
            $(this).trigger("reset");
            noty( message   ,'green','  ثبت   ')
            if ($('#admin').length){
                change_dash(menu)
            }
        }
        if (all[0]=='message'){
            noty(   res.errors[Object.keys(res.errors)[0]],'red','اخطار   ')
        }
    }

        return res ;

}
function  simple_ajax(url,str='' ){

    var jqXHR=   $.ajax(path+url,{
        data: str,
        type:'post',
        async:false,
        success:function (data) {
            stop_animation()
        },
        error: function (request, status, error) {
            stop_animation()
        }
    });
    return jqXHR.responseText;
}
function  simple_json_ajax(url,str='' ){

    var jqXHR=   $.ajax(path+url,{
        data: str,
        type:'post',
        dataType:'json',
        async: false,
        success:function (data) {
            stop_animation()
            // console.log('res'+data.htm)
        },
        error: function (request, status, error) {
            console.log('request'+request)
            console.log('status'+status)
            console.log('error'+error)
            stop_animation()
            note_error('خطایی پیش امده لطفا مجدد سعی کنید')
        }
    });
     return JSON.parse(jqXHR.responseText);
}

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}
function copyToClipboard2(txt) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(txt).select();
    document.execCommand("copy");
    $temp.remove();
}
