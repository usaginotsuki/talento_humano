$(document).ready(function() {
    $('#ListTable').DataTable({
        language: {
            search: "Buscar:",
            info: "Mostrando del _START_ al _END_ de <b>_TOTAL_ registros</b>",
            emptyTable: "No hay datos disponibles en la tabla",
            infoEmpty: "No hay registros que mostrar",
            lengthMenu: "Mostrar _MENU_ registros",
            paginate: {
                first:    'Primero',
                    previous: 'Anterior',
                    next:     'Siguiente',
                    last:     'Último'
            },
        }
    });
} );