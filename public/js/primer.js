$("#materiaCombo").change(function(event){
    $.ajax({
      url: "comboGuia/"+event.target.value,
      type: "GET",
      dataType: "json",
      error: function(element){
        console.log(element.type);
      }, 
      success: function(respuesta){
        $("#guiaCombo").empty();
       // alert($("#materiaCombo").attr('id'));
       if(respuesta[0] == null){
        alert("No tiene guias");
       }
        for(i = 0; i<respuesta.length; i++){
            $("#guiaCombo").append("<option value='"+respuesta[i].GUI_CODIGO+"'>"
                +respuesta[i].GUI_TEMA+"</option>");
        }
      }
    });
});