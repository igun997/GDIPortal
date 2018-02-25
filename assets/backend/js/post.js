$(document).ready(function() {
      $("#post").DataTable();
      tinymce.init({
        selector: 'textarea', // change this value according to your HTML
        auto_focus: 'element1'
      });
      $("#post").on('click', '.hapus', function(event) {
        event.preventDefault();
        swal({
          title: 'Apakah Kamu Yakin ?',
          text: "Proses Ini Tidak Dapat Dikembalikan!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus'
        }).then((result) => {
          if (result.value) {
            $.ajax({
              url: base_url+'/data/artikelhapus',
              type: 'POST',
              dataType: 'json',
              data: {id_post: $(this).data('id')}
            })
            .done(function(a) {
              if(a.status){
                swal(
                  'Berhasil Di Hapus',
                  a.msg,
                  'success'
                )
              }else{
                swal(
                  'Gagal Di Hapus',
                  a.msg,
                  'error'
                )
              }
            })
            .fail(function() {
              swal(
                'Network Error',
                'Kamu Terputus dari jaringan',
                'error'
              )
            })
            .always(function() {
              console.log("complete");
            });

          }
        });
      });
    });
