$(document).ready(function() {

    $('.eliminarEmpleado').on('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: baseURL + '/panel/empleados/' + $(this).data('id'),
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            type: 'DELETE',

            success: function(res) {
                if(res.status == 1) {
                    $('#empleado-' + res.id).remove();
                }
            },

            error: function(res) {
                alert('No se pudo eliminar el empleado, verifique su conexión a internet y actualize la página.');
            }
        });
    
    });

});