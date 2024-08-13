$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function removeRow(id,url) {
    if(confirm('Xóa mà không khôi phục.Bạn có chắc không')) {
        $.ajax({
            type: "DELETE",
            url:  url ,
            data: {id},
            dataType: "JSON",
            success: function (result) {
               if(result.error === false) {
                    alert(result.message);
                    location.reload();
               } else {
                    alert('Xóa lỗi vui lòng thử lại');
               }
            }
        });
    }
}

/*Upload File */
$('#upload').change(function () {
    const form = new FormData();
    form.append('file', $(this)[0].files[0]);

    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        dataType: 'JSON',
        data: form,
        url: '/admin/upload/services',
        success: function (results) {
           
            if (results.error != false) {
                $('#image_show').html('<a href="' + results.url + '" target="_blank">' +
                    '<img src="' + results.url + '" width="100px"></a>');

                $('#file').val(results.url);
            } else {
                alert('Upload File Lỗi');
            }
        }
    });
});