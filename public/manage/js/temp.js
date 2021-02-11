/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */

(function ($) {
    $(document).ready(function () {

        $('.switch').click(function(){
          if($('#sidebar').hasClass('active')){
            $('#sidebar').removeClass('active');
          }else{
            $('#sidebar').addClass('active');
          }
        })

        $('.tabnav li').click(function(){
        var a= $(this).index();
        var b= $(this).parent().parent().siblings('.tab-container');
            $(this).addClass('active').siblings().removeClass('active');
            b.children().children('li').eq(a).addClass('active').siblings().removeClass('active');
        })


    })
})(jQuery);