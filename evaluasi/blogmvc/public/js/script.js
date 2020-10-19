$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Create Article');
        $('.modal-footer button[type=submit]').html('Create')
    });

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Edit Article');
        $('.modal-footer button[type=submit]').html('Done')
        $('.modal-body form').attr('action', 'http://localhost/blogmvc/public/article/update');

        const id = $(this).data('id');
    
        $.ajax({
            url: 'http://localhost/blogmvc/public/article/getUpdate',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#category').val(data.category);
                $('#title').val(data.title);
                $('#pic').val(data.pic);
                $('#content').val(data.content);
                $('#author').val(data.author);
                $('#id').val(data.id);
            }
        });
    });


});