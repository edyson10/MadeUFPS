function cargarModal() {
    $.ajax({
        url: "datos.php",
        type: "POST",
        data: datos
    })
    $.post('../model/mostrarActividades.php', function(data) {
        var pushedData = jQuery.parseJSON(data);
        $.each(pushedData, function(i, serverData) {
            console.log(pushedData);
        })
    })
}