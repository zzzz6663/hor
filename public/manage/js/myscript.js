/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */

function change_dash(pos){
    $('#cont').fadeOut(400);
    var ss= lara_ajax('/admin/dash?pos='+pos)
    console.log('sss')
    $('#cont').html(ss.body)
    $('#cont').fadeIn(800 )
}

(function ($) {
    $(document).ready(function () {
        if ($('#admin').length){
            console.log('sdsdgfg')
            change_dash('discount')
        }

        $('body').on('click', '.side_menu', function() {
            var ele=$(this)
            $('.side_menu').removeClass('active')
            ele.addClass('active')
            var pos= ele.data('pos')

            change_dash(pos)

        })
        // $('#product_form').submit(function(event) {

        $('body').on('submit', '#product_form', function(event) {
            event.preventDefault();
            var res= lara_ajax('/admin/product',new FormData(this ),'  بندی ثبت شد ' )
        })

            /* do something here */
        $('body').on('submit', '#category_form', function(event){
            event.preventDefault();
            var res= lara_ajax('/admin/category',new FormData(this ),'دسته بندی ثبت شد ' ,'category')

        })








    })
})(jQuery);
