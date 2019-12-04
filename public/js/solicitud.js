 $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
        }
    });

$("#SOL_FECHA_USO").change(function(event){
  var data = $("#SOL_FECHA_USO").val();
  console.log($("#SOL_FECHA_USO").val());
    $.ajax({
      url: "horarioFecha",
      type: "POST",
      data: {fecha:data,_method: 'PATCH'},
      dataType: "json",
      error: function(element){
        console.log(element.type);
      }, 
      success: function(respuesta){
        console.log(respuesta)
      }
    });
});

$("#materiaCombo").change(function(event){
  $.ajax({
    url: "comboGuia/"+event.target.value,
    type: "GET",
    dataType: "json",
    error: function(element){
      console.log(element.type);
    }, 
    success: function(respuesta){
      $("#guiaCombo").find('option')
      .remove()
      .end()
      .append('<option value="0">---------------------------Seleccione---------------------------</option>');
     if(respuesta.length<=0){
      alert("No tiene guias");
     }
      for(i = 0; i<respuesta.length; i++){
          $("#guiaCombo").append("<option value='"+respuesta[i].GUI_CODIGO+"'>"
              +respuesta[i].GUI_NUMERO+" : "+respuesta[i].GUI_TEMA+"</option>");
      }
    }
  });
});