<script>
    $(document).ready(function(){
        $('.pagination a').unbind('click').bind('click', function (e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            var category;
            if ($('#pagination').length){
                category=$('#pagination').data('cat')
            }
            fetch_data(page,category);
        });
        function fetch_data(page,category)
        {
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type':'application/json,charset=utf-8'
                },
                url:"/admin/dash?pos="+category+"&page="+page,
                type:'post',
                cache:false,
                success:function(data)
                {
                    $('#cont').html(data.body);
                }
            });
        }

    });
</script>
