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
            }
        }
    });

    $('input[name="PER_FECHAS"]').daterangepicker({
        drops: 'up',
        cancelClass: "btn-danger",
        locale: {
            format: "DD-MM-YYYY",
            separator: " al ",
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "Desde",
            toLabel: "Hasta",
            customRangeLabel: "Custom",
            weekLabel: "W",
            daysOfWeek: ["Dom","Lun","Mar","Mie","Jue","Vie","Sab"],
            monthNames: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
            firstDay: 1
        },
    });
});