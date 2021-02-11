/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */

(function ($) {
    $(document).ready(function () {


        $('.tab-nav li').click(function(){
        var a= $(this).index();
        var b= $(this).parent().siblings('.tab-container');
            $(this).addClass('active').siblings().removeClass('active');
            b.children('li').eq(a).addClass('active').siblings().removeClass('active');
        })


        if($('#product').length){



        $(window).bind('scroll', function () {
            var a = 180;
            if ($(window).scrollTop() > a) {
                $('#product').addClass('fixed');
            } else {
                $('#product').removeClass('fixed');
            }
        });

        }

      
        // user course
        if ($('.slides').length) {
            $('.slides').owlCarousel({
                            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
                loop: true,
                margin: 0,
                nav: true,
                dots: true,
                navText: [  
                '<span><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">'+
                '<path d="M0.354507 8.50611L8.6662 0.194424C8.94136 -0.0713231 9.37983 -0.0636932 9.64558 0.211469C9.90483 0.479894 9.90483 0.905422 9.64558 1.17381L1.82358 8.9958L9.64558 16.8178C9.91599 17.0883 9.91599 17.5267 9.64558 17.7972C9.37508 18.0676 8.93665 18.0676 8.6662 17.7972L0.354507 9.4855C0.0840931 9.215 0.0840931 8.77657 0.354507 8.50611Z" fill="black"/>'+'</svg></span>','<span><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">'+
                '<path d="M9.64549 8.50611L1.3338 0.194424C1.05864 -0.0713231 0.620169 -0.0636932 0.354422 0.211469C0.0951686 0.479894 0.0951686 0.905422 0.354422 1.17381L8.17642 8.9958L0.354422 16.8178C0.0840078 17.0883 0.0840078 17.5267 0.354422 17.7972C0.624917 18.0676 1.06335 18.0676 1.3338 17.7972L9.64549 9.4855C9.91591 9.215 9.91591 8.77657 9.64549 8.50611Z" fill="black"/>'+'</svg></span>' ],
                items: 1,
                rtl: true
            })
        }// user course
       


        if ($('.discount-list').length) {
            $('.discount-list').owlCarousel({
                            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                navText: [  
                '<span><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">'+
                '<path d="M9.64549 8.50611L1.3338 0.194424C1.05864 -0.0713231 0.620169 -0.0636932 0.354422 0.211469C0.0951686 0.479894 0.0951686 0.905422 0.354422 1.17381L8.17642 8.9958L0.354422 16.8178C0.0840078 17.0883 0.0840078 17.5267 0.354422 17.7972C0.624917 18.0676 1.06335 18.0676 1.3338 17.7972L9.64549 9.4855C9.91591 9.215 9.91591 8.77657 9.64549 8.50611Z" fill="#fff"/>'+'</svg></span>','<span><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">'+
                '<path d="M0.354507 8.50611L8.6662 0.194424C8.94136 -0.0713231 9.37983 -0.0636932 9.64558 0.211469C9.90483 0.479894 9.90483 0.905422 9.64558 1.17381L1.82358 8.9958L9.64558 16.8178C9.91599 17.0883 9.91599 17.5267 9.64558 17.7972C9.37508 18.0676 8.93665 18.0676 8.6662 17.7972L0.354507 9.4855C0.0840931 9.215 0.0840931 8.77657 0.354507 8.50611Z" fill="#fff"/>'+'</svg></span>' ],
                items: 3,
                rtl: true,
                responsive : {
                    0 : {
                    items: 2,
                    },
                    480 : {
                    items: 2,
                    },
                    1100 : {
                    items: 2,
                        
                    },
                    1300 : {
                    items: 3,
                        
                    }
                }
            })
        }


        if ($('.product-list').length) {
            // $('.product-list').owlCarousel({
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            //     loop: true,
            //     center: true,
            //     margin: 10,
            //     nav: true,
            //     dots: false,
            //     navText: [  
            //     '<span><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">'+
            //     '<path d="M9.64549 8.50611L1.3338 0.194424C1.05864 -0.0713231 0.620169 -0.0636932 0.354422 0.211469C0.0951686 0.479894 0.0951686 0.905422 0.354422 1.17381L8.17642 8.9958L0.354422 16.8178C0.0840078 17.0883 0.0840078 17.5267 0.354422 17.7972C0.624917 18.0676 1.06335 18.0676 1.3338 17.7972L9.64549 9.4855C9.91591 9.215 9.91591 8.77657 9.64549 8.50611Z" fill="#fff"/>'+'</svg></span>','<span><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">'+
            //     '<path d="M0.354507 8.50611L8.6662 0.194424C8.94136 -0.0713231 9.37983 -0.0636932 9.64558 0.211469C9.90483 0.479894 9.90483 0.905422 9.64558 1.17381L1.82358 8.9958L9.64558 16.8178C9.91599 17.0883 9.91599 17.5267 9.64558 17.7972C9.37508 18.0676 8.93665 18.0676 8.6662 17.7972L0.354507 9.4855C0.0840931 9.215 0.0840931 8.77657 0.354507 8.50611Z" fill="#fff"/>'+'</svg></span>' ],
            //     items: 3,
            //     rtl: true,
            //     responsive : {
            //         0 : {
            //         items: 2,
            //         },
            //         480 : {
            //         items: 2,
            //         },
            //         1100 : {
            //         items: 2,
                        
            //         },
            //         1300 : {
            //         items: 4,
                        
            //         }
            //     }
            // })

            $('.product-list').each(function(){

                var a= $(this).children('li').length;
                console.log(a);
                if(a>3){
                     var b= a-1;
                }else{                    
                     var b= 0;
                }

            $(this).slick({
              centerMode: true,
              // rtl: true,
              centerPadding: '220px',
              prevArrow: '<button type="button" class="slick-prev"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.64549 8.50611L1.3338 0.194424C1.05864 -0.0713231 0.620169 -0.0636932 0.354422 0.211469C0.0951686 0.479894 0.0951686 0.905422 0.354422 1.17381L8.17642 8.9958L0.354422 16.8178C0.0840078 17.0883 0.0840078 17.5267 0.354422 17.7972C0.624917 18.0676 1.06335 18.0676 1.3338 17.7972L9.64549 9.4855C9.91591 9.215 9.91591 8.77657 9.64549 8.50611Z" fill="#fff"></path></svg></button>',
              nextArrow: '<button type="button" class="slick-next"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.354507 8.50611L8.6662 0.194424C8.94136 -0.0713231 9.37983 -0.0636932 9.64558 0.211469C9.90483 0.479894 9.90483 0.905422 9.64558 1.17381L1.82358 8.9958L9.64558 16.8178C9.91599 17.0883 9.91599 17.5267 9.64558 17.7972C9.37508 18.0676 8.93665 18.0676 8.6662 17.7972L0.354507 9.4855C0.0840931 9.215 0.0840931 8.77657 0.354507 8.50611Z" fill="#fff"></path></svg></button>',
              slidesToShow: 2,
              initialSlide:b,
              dots: true,
              speed: 300,
              responsive: [
                {
                  breakpoint: 1100,
                  settings: {
                    
                    centerMode: true,
                    centerPadding: '240px',
              initialSlide:a-1,

                    slidesToShow: 1
                  }
                },
                {
                  breakpoint: 720,
                  settings: {
                    
                    centerMode: true,
                    centerPadding: '140px',
              initialSlide:a-1,

                    slidesToShow: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    
                    centerMode: true,
                    centerPadding: '50px',
              initialSlide:a-1,

                    slidesToShow: 1
                  }
                },
                {
                  breakpoint: 180,
                  settings: {
                    
                    centerMode: true,
                    centerPadding: '50px',
              initialSlide:a-1,

                    slidesToShow: 1
                  }
                }
              ]
            });
            })

            $('.product-list').on('afterChange', function(event, slick, currentSlide, nextSlide){
                var a= $(slick.$slides.get(currentSlide)).children().attr('class');
                $('body').attr('class',a);
            });

            function rowd(){



                var ddd= $('.tab-container > li.active .slick-dots li').length+1;
                if($('.tab-container > li.active').hasClass('don')){
                }else{
                    $('.tab-container > li.active').addClass('don');

                    setTimeout(function(){ 

                for (let i = 0; i < ddd; i++) { 
                    setTimeout(function(){ 
                        $('.tab-container > li.active .slick-prev').click();
                     }, i*400);
                }
                     }, 500);

                }
            }

            if($(window).width()<720){

                rowd();

                $('#shop .tab-nav li ').click(function(){
                rowd();

                })
            }

            

        }



        if($( ".js-player" ).length){
            const players = Array.from(document.querySelectorAll('.js-player')).map(p => new Plyr(p));
   
        }


        if($("#countdown").length){
            $("#countdown").each(function(){
                var a = $(this).data('time');
                $(this).countdowntimer({
                    dateAndTime : a,
                    size : "lg",
                    displayFormat: 'DHMS',
                    labelsFormat: true
                });
            })

            }


        if($("#countup1").length){

            window.onload = function() {
  // Month Day, Year Hour:Minute:Second, id-of-element-container
  countUpFromTime("nov 1, 2020 12:00:00", 'countup1'); // ****** Change this line!
};
function countUpFromTime(countFrom, id) {
  countFrom = new Date(countFrom).getTime();
  var now = new Date(),
      countFrom = new Date(countFrom),
      timeDifference = (now - countFrom);
    
  var secondsInADay = 60 * 60 * 1000 * 24,
      secondsInAHour = 60 * 60 * 1000;
    
  days = Math.floor(timeDifference / (secondsInADay) * 1);
  years = Math.floor(days / 365);
  if (years > 1){ days = days - (years * 365) }
  hours = Math.floor((timeDifference % (secondsInADay)) / (secondsInAHour) * 1);
  mins = Math.floor(((timeDifference % (secondsInADay)) % (secondsInAHour)) / (60 * 1000) * 1);
  secs = Math.floor((((timeDifference % (secondsInADay)) % (secondsInAHour)) % (60 * 1000)) / 1000 * 1);

  var idEl = document.getElementById(id);
  // idEl.getElementsByClassName('years')[0].innerHTML = years;
  idEl.getElementsByClassName('days')[0].innerHTML = days;
  idEl.getElementsByClassName('hours')[0].innerHTML = hours;
  idEl.getElementsByClassName('minutes')[0].innerHTML = mins;
  idEl.getElementsByClassName('seconds')[0].innerHTML = secs;

  clearTimeout(countUpFromTime.interval);
  countUpFromTime.interval = setTimeout(function(){ countUpFromTime(countFrom, id); }, 1000);
}
}





    if($("input[type='number']").length){
        
     $("input[type='number']").inputSpinner()
    }





    })
})(jQuery);