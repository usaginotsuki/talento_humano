$("#periodo").change(function(event){

    $.ajax({
      url: "comboMateria/"+event.target.value,
      type: "GET",
      dataType: "json",
      error: function(element){
        console.log(element.type);
      }, 
      success: function(respuesta){
        console.log(respuesta);
        //$("#materiaCombo").empty();
       // alert($("#materiaCombo").attr('id'));
        for(i = 0; i<respuesta.length; i++){
            $("#materiaCombo").append("<option value='"+respuesta[i].MAT_CODIGO+"'>"
                +respuesta[i].MAT_ABREVIATURA+"</option>");
        }
      }
    });
});