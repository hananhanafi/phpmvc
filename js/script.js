$(function(){
    
    $('.btnTambah').on('click',function(){
        $('#forModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('modal-body form').attr('action', 'http://localhost/pvpmvc/public/mahasiswa/tambah');
        $('#nama').val('');
        $('#nim').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
        
    });
    
    $('.btnUbah').on('click',function(){
        $('#forModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');
        const id = $(this).data('id');

        //ajax menggunakan jquery
        $.ajax({
            //url method yang ingin dijalankan
            url : 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            //data yang dikirimkan
            data : {id : id},
            //methodnya post/get
            method : 'post',
            //tipe data nya
            dataType : 'json',
            //fungction jika data berjasil
            success : function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
    
});