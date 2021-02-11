/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */

(function ($) {
    $(document).ready(function () {
        var level_lenght
        var pos=0


        if (  $('.box-container').length){
            level_lenght=$('.box-container').length
            console.log(level_lenght)
            var level=$('.box-container')
        }

        var  go=false
        $('.next').click(function(e){
            var f='f_step_'+pos
            console.log( f)
            var form=$('#dddd')
            console.log( form)

            // var go=valid_form('q_form')
            // console.log(str)
            // $('#dddd').hide()
           var str=form.serializeArray()
            console.log( str)
            var res=lara_ajax('/profile/valid_questionnaire')
            console.log( res)

            if (go){
                // console.log(res)
                level.eq(pos).hide(300)
                level.eq(pos+1).show(800)
                pos++
            }

        });
        $('.prev').click(function(e){
            level.eq(pos).hide(300)
            level.eq(pos-1).show(800)
            pos--
        });


        if (pos==0){
            setInterval(function(){
                var day= $('#day_select').val()
                var month= $('#month_select').val()
                var year= $('#year_select').val()
                if (day!=null && month!=null && year!=null   ){
                    $('#cacke').attr("src","/images/cake_on.png");
                }
            }, 200);

        }

        $('input[type=radio][name=gender]').change(function() {
           var res=$(this).val()
          if (res=='male'){
            $('.sex_txt').text('مرد')
          }else {
              $('.sex_txt').text('زن ')
          }
        });




































































            if($('.select-container select').length>0){
        $('.select-container select').each(function(){
            $(this).select2();
        });
      }

      if($('form section.edjucation ul').length>0){
        $("form section.edjucation ul").mCustomScrollbar({
            documentTouchScroll: true,
            axis:"x" // horizontal scrollbar
        });
      }

      if($('form section.workstate ul').length>0){
        $("form section.workstate ul").mCustomScrollbar({
            documentTouchScroll: true,
            axis:"x" // horizontal scrollbar
        });
      }



      if($('form section.excercise ul').length>0){
        $("form section.excercise ul").mCustomScrollbar({
            documentTouchScroll: true,
            axis:"x" // horizontal scrollbar
        });
      }

      if($('form section.illness ul').length>0){
        $("form section.illness ul").mCustomScrollbar({
            documentTouchScroll: true,
            axis:"x" // horizontal scrollbar
        });
      }
      if($('.box-container .box-content').length>0 & $(window).width()>660){
        $(".box-container .box-content").mCustomScrollbar({
            // scrollbarPosition: "inside",
            mouseWheelPixels: 250,
            theme: 'dark-thin',
            axis:"y" // horizontal scrollbar
        });
        $(window).resize(function(){
             if( $(window).width()>660){
                $(".box-container .box-content").mCustomScrollbar({
                    // scrollbarPosition: "inside",
                    theme: 'dark-thin',
                    axis:"y" // horizontal scrollbar
                });
            }else{
                $(".box-container .box-content").mCustomScrollbar("destroy");
            }
        })
      }
      if($('.box-container .level1').length>0 & $(window).width()>660){
        $(".box-container .level1").mCustomScrollbar({
            // scrollbarPosition: "inside",
            mouseWheelPixels: 250,
            theme: 'dark-thin',
            axis:"y" // horizontal scrollbar
        });
        $(window).resize(function(){
             if( $(window).width()>660){
                $(".box-container .level1").mCustomScrollbar({
                    // scrollbarPosition: "inside",
                    theme: 'dark-thin',
                    axis:"y" // horizontal scrollbar
                });
            }else{
                $(".box-container .level1").mCustomScrollbar("destroy");
            }
        })
      }




      // Start Dises
      $('form section.excercise .excercise label').click(function(e){
        e.preventDefault();
        var a= $(this).attr('for');
        var b= $('#'+a);


            if ($(b).is(':checked')) {

                $(b).prop("checked", false);
                if(a=='excerciseother'){
                    $('.other-excersize').slideUp();
                }

            }else{
                $(b).prop("checked", true);
                if(a=='excerciseother'){
                    $('.other-excersize').slideDown();
                }
            }


        })
      if($('.other-excersize').length){
        if ($('#excerciseother').is(':checked')) {
$('.other-excersize').slideDown();
        }
      }
      // End Exersize

      // Start Dises
      $('form section.illness .illness label').click(function(e){
        e.preventDefault();
        var a= $(this).attr('for');
        var b= $('#'+a);


            if ($(b).is(':checked')) {

                $(b).prop("checked", false);
                if(a=='otherillness'){
                    $('.other-disess').slideUp();
                }

            }else{
                $(b).prop("checked", true);
                if(a=='otherillness'){
                    $('.other-disess').slideDown();
                }
            }


        })
      if($('.other-disess').length){
        if ($('#otherillness').is(':checked')) {
$('.other-disess').slideDown();
        }
      }
      // End  Dises









      if($('#workother').length>0){
        $('#workother').limit('500','#charsLeft');
      }

      if($('#bodypain').length>0){
        $('#bodypain').limit('500','#charsLeft2');
      }


      if($('#food1').length>0){
        $('#food1').limit('500','#charsLeft3');
      }


      if($('#food2').length>0){
        $('#food2').limit('500','#charsLeft4');
      }


      if($('#food3').length>0){
        $('#food3').limit('500','#charsLeft5');
      }
      if($('#food4').length>0){
        $('#food4').limit('500','#charsLeft6');
      }
      if($('#food5').length>0){
        $('#food5').limit('500','#charsLeft7');
      }
      if($('#food6').length>0){
        $('#food6').limit('500','#charsLeft8');
      }
      if($('#food7').length>0){
        $('#food7').limit('500','#charsLeft9');
      }
      if($('#food8').length>0){
        $('#food8').limit('500','#charsLeft10');
      }
      if($('#food9').length>0){
        $('#food9').limit('500','#charsLeft11');
      }



      if($('.illness input').length>0){

      function selected(){
        $('.selected').empty();
        setTimeout(function(){

        $('.illness input:checked').each(function(){
            var a= $(this).attr('id');
            var b= $(this).siblings('label').text();
            var c= '<span id="'+a+'">'+b+'<span></span></span>';
            $('.selected').append(c);
        })
        },200)
      }

      selected();

      $('form section.illness .illness label').click(function(){
        selected();
      })
      // $(document).on("click", "a.remove" , function() {
        $(document).on('click','.selected span', function(){
        // $('.selected span').on("click", function(){
            $(this).remove();
            var a= $(this).attr('id');
            console.log('a');
            $('input#'+a).prop("checked", false);
        // $('.selected').empty();
        // setTimeout(function(){

        //     selected();
        // },500)
        })
      }






      if($('.meal').length>0){

      function mealcheck(){

        setTimeout(function(){
          if($('#allmeal:checked').is(':checked')){

            $('input#snack').prop("checked", false);
            $('input#lunch').prop("checked", false);
            $('input#dinner').prop("checked", false);
            $('input#breakfast').prop("checked", false);

          }
        },200)
      }

      mealcheck();

      $('form section.meal label').click(function(){
        var a= $(this).attr('for');
        if(a=='allmeal'){
            mealcheck();
        }else{
            setTimeout(function(){
            if($('#allmeal:checked').length==0 && $('form section.meal input:checked').length==4){
            console.log($('form section.meal input:checked').length);

                $('input#snack').prop("checked", false);
                $('input#lunch').prop("checked", false);
                $('input#dinner').prop("checked", false);
                $('input#breakfast').prop("checked", false);

            $('input#allmeal').prop("checked", true);

            }else{
                $('input#allmeal').prop("checked", false);

            }
            },200);

        }
      })

      }

      if($('.meal2').length>0){

      function meal2check(){

        setTimeout(function(){
          if($('#nonemeal:checked').is(':checked')){

            $('input#outsnack').prop("checked", false);
            $('input#outlunch').prop("checked", false);
            $('input#outdinner').prop("checked", false);
            $('input#outbreakfast').prop("checked", false);

          }
        },200)
      }

      meal2check();

      $('form section.meal2 label').click(function(){
        var a= $(this).attr('for');
        if(a=='nonemeal'){
            meal2check();
        }else{
            setTimeout(function(){
            if($('#nonemeal:checked').length==0 && $('form section.meal2 input:checked').length==4){

                $('input#outsnack').prop("checked", false);
                $('input#outlunch').prop("checked", false);
                $('input#outdinner').prop("checked", false);
                $('input#outbreakfast').prop("checked", false);

            $('input#nonemeal').prop("checked", true);

            }else{
                $('input#nonemeal').prop("checked", false);

            }
            },200);

        }
      })

      }








      $('form section .plus .plus-item').click(function(){
        var a= $(this).parent();
        var b= '<div class="input-container gray small"><input type="text" placeholder=""></div>';
        a.prepend(b);
      })



if($('#slider-start').length){
    function sliderstart(){

var startSlider = document.getElementById('slider-start');

noUiSlider.create(startSlider, {
    start: 180,
    direction: 'ltr',
    range: {
        'min': [0],
        'max': [360]
    }
});



// var directionField = document.getElementById('weight');
var degreeimage = $('#degree-image');

startSlider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    // console.log(a);

    $('#weightinput').val(values[handle]);
    $('#weight span.dec').text(a);
    $('#weight span.num').text(b);
    degreeimage.css('transform','rotateZ('+values[handle]+'deg)');

    $('#weightinput')[0].addEventListener('change', function () {
        startSlider.noUiSlider.set([this.value, null]);
    });
});
    }
sliderstart();

}




if($('#ghad-start').length){
    function ghadstart(){

var ghadSlider = document.getElementById('ghad-start');

noUiSlider.create(ghadSlider, {
    start: 180,
    orientation: "vertical",
    range: {
        'min': [0],
        'max': [300]
    }
});



// var directionField = document.getElementById('ghad');
//var degreeimage = $('#degree-image');

ghadSlider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    // var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    // console.log(a);
    $('#ghadinput')[0].addEventListener('change', function () {
        ghadSlider.noUiSlider.set([this.value, null]);
    });
    $('#ghad span.num').text(b);
    $('#ghadinput').val(b);
    $('#ruller-container .ruller-inside').css('background-position', '0px '+-b+'px');;
});


    }
ghadstart();

}





if($('#neck-slider').length){
    function neckstart(){

var neckslider = document.getElementById('neck-slider');

noUiSlider.create(neckslider, {
    start: 60,
    range: {
        'min': [0],
        'max': [120]
    }
});



// var directionField = document.getElementById('neck');
//var degreeimage = $('#degree-image');

neckslider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    // var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    var c=(-b-106)*2;
    // console.log(a);
    $('#neckinput')[0].addEventListener('change', function () {
        neckslider.noUiSlider.set([this.value, null]);
    });
    $('#neck span.num').text(b);
    $('#neckinput').val(b);
    $('#neck-container').css('background-position', c+'px 0px');
});


    }
neckstart();

}




if($('#wrist-slider').length){
    function wriststart(){

var wristslider = document.getElementById('wrist-slider');

noUiSlider.create(wristslider, {
    start: 60,
    range: {
        'min': [0],
        'max': [120]
    }
});



// var directionField = document.getElementById('wrist');
//var degreeimage = $('#degree-image');

wristslider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    // var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    var c=(-b-106)*2;
    // console.log(a);
    $('#wristinput')[0].addEventListener('change', function () {
        wristslider.noUiSlider.set([this.value, null]);
    });
    $('#wrist span.num').text(b);
    $('#wristinput').val(b);
    $('#wrist-container').css('background-position', c+'px 0px');
});


    }
wriststart();

}


if($('#chest-slider').length){
    function cheststart(){

var chestslider = document.getElementById('chest-slider');

noUiSlider.create(chestslider, {
    start: 100,
    range: {
        'min': [0],
        'max': [200]
    }
});



// var directionField = document.getElementById('chest');
//var degreeimage = $('#degree-image');

chestslider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    // var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    var c=(-b-66)*2;
    // console.log(a);
    $('#chestinput')[0].addEventListener('change', function () {
        chestslider.noUiSlider.set([this.value, null]);
    });
    $('#chest span.num').text(b);
    $('#chestinput').val(b);
    $('#chest-container').css('background-position', c+'px 0px');
});


    }
cheststart();

}


if($('#waste-slider').length){
    function wastestart(){

var wasteslider = document.getElementById('waste-slider');

noUiSlider.create(wasteslider, {
    start: 100,
    range: {
        'min': [0],
        'max': [200]
    }
});



// var directionField = document.getElementById('waste');
//var degreeimage = $('#degree-image');

wasteslider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    // var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    var c=(-b-66)*2;
    // console.log(a);
    $('#wasteinput')[0].addEventListener('change', function () {
        wasteslider.noUiSlider.set([this.value, null]);
    });
    $('#waste span.num').text(b);
    $('#wasteinput').val(b);
    $('#waste-container').css('background-position', c+'px 0px');
});


    }
wastestart();

}




if($('#arm-slider').length){
    function armstart(){

var armslider = document.getElementById('arm-slider');

noUiSlider.create(armslider, {
    start: 60,
    range: {
        'min': [0],
        'max': [120]
    }
});



// var directionField = document.getElementById('arm');
//var degreeimage = $('#degree-image');

armslider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    // var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    var c=(-b-106)*2;
    // console.log(a);
    $('#arminput')[0].addEventListener('change', function () {
        armslider.noUiSlider.set([this.value, null]);
    });
    $('#arm span.num').text(b);
    $('#arminput').val(b);
    $('#arm-container').css('background-position', c+'px 0px');
});


    }
armstart();

}


if($('#naf-slider').length){
    function nafstart(){

var nafslider = document.getElementById('naf-slider');

noUiSlider.create(nafslider, {
    start: 100,
    range: {
        'min': [0],
        'max': [200]
    }
});



// var directionField = document.getElementById('naf');
//var degreeimage = $('#degree-image');

nafslider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    // var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    var c=(-b-66)*2;
    // console.log(a);
    $('#nafinput')[0].addEventListener('change', function () {
        nafslider.noUiSlider.set([this.value, null]);
    });
    $('#naf span.num').text(b);
    $('#nafinput').val(b);
    $('#naf-container').css('background-position', c+'px 0px');
});


    }
nafstart();

}


if($('#hip-slider').length){
    function hipstart(){

var hipslider = document.getElementById('hip-slider');

noUiSlider.create(hipslider, {
    start: 100,
    range: {
        'min': [0],
        'max': [200]
    }
});



// var directionField = document.getElementById('hip');
//var degreeimage = $('#degree-image');

hipslider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    // var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    var c=(-b-66)*2;
    // console.log(a);
    $('#hipinput')[0].addEventListener('change', function () {
        hipslider.noUiSlider.set([this.value, null]);
    });
    $('#hip span.num').text(b);
    $('#hipinput').val(b);
    $('#hip-container').css('background-position', c+'px 0px');
});


    }
hipstart();

}


if($('#ran-slider').length){
    function ranstart(){

var ranslider = document.getElementById('ran-slider');

noUiSlider.create(ranslider, {
    start: 60,
    range: {
        'min': [0],
        'max': [120]
    }
});



// var directionField = document.getElementById('ran');
//var degreeimage = $('#degree-image');

ranslider.noUiSlider.on('update', function (values, handle) {
    // alert((10.1212348).toFixed(2))
    // var a= Math.floor((values[handle]-Math.floor(values[handle]))*100);
    var b= Math.floor(values[handle]);
    var c=(-b-106)*2;
    // console.log(a);
    $('#raninput')[0].addEventListener('change', function () {
        ranslider.noUiSlider.set([this.value, null]);
    });
    $('#ran span.num').text(b);
    $('#raninput').val(b);
    $('#ran-container').css('background-position', c+'px 0px');
});


    }
ranstart();

}







if($(".countdown").length){
$(".countdown").each(function(){
var a=$(this).data('time');
$(this).countdowntimer({
    dateAndTime : a,
    size : "lg",
    displayFormat: 'HMS',
    labelsFormat: false
});
})

}




    })
})(jQuery);
