
$('.people_button').click(function (e) {
    var uid = $(this).attr('data-id');
    $.ajax({
        type: "POST",
        url: "ajax/ajax.php",
        data: 'action=golos&id='+uid,
        dataType: "html",
        cache: false,
        success: function (data) {
            if (data == true) {
                location.reload();
            } else {
                alert("Ошибка:"+data);
            }
        }
    });
    e.preventDefault();
});