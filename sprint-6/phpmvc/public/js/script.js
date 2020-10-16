$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Santri');
        $('.modal-footer button[type=submit]').html('Tambah Data')
    });

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Santri');
        $('.modal-footer button[type=submit]').html('Ubah Data')
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/santri/ubah');

        const id = $(this).data('id');
    
        $.ajax({
            url: 'http://localhost/phpmvc/public/santri/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });


});