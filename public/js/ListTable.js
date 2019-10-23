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
    var table = document.querySelector('#tabla');
    var tableBody = table.querySelector('tbody');
    var input = document.querySelector('#buscar');
    var originalRows = [
        ...table.querySelectorAll('tbody tr')
    ].map(row => {
        var newRow = document.createElement('TR');
      newRow.innerHTML = row.innerHTML;      
      return newRow;
    });
    input.addEventListener('input', evt => {
        var value = evt.target.value;
        var rows = originalRows
        .filter(row => {
          var cells = [...row.querySelectorAll('td')];
                return (
            evt.target.value === ''
            || cells.find(cell => {
              return cell.textContent.includes(value);
            })
          )
        })
        .map(row => row.outerHTML);        
      tableBody.innerHTML = rows.join('');
      if (value !== '') {
            tableBody.querySelectorAll('tr td').forEach(row => {
          var text = row.textContent;
          var html = text.replace(new RegExp(value, 'g'), `<strong>${value}</strong>`)
          row.innerHTML = html;
        })
      
      }
});
});