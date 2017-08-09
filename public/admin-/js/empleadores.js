$(document).ready(function() {

    $('.eliminarEmpleador').on('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: baseURL + '/panel/empleadores/' + $(this).data('id'),
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            type: 'DELETE',

            success: function(res) {
                if(res.status == 1) {
                    $('#empleador-' + res.id).remove();
                }
            },

            error: function(res) {
                alert('No se pudo eliminar al empleador, verifique su conexión a internet y actualize la página.');
            }
        });
    
    });

});