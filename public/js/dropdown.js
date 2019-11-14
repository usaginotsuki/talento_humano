$("#MAT_CODIGO").change(event => {
    $.get(`/docente/${event.target.value}`, function(res, sta){
        console.log(event.target.value);
        console.log(res);
        $("#DOC_CODIGO").empty();
        res.forEach(element => {
            $("#DOC_CODIGO").append(`<option value=${element.DOC_CODIGO}> ${element.DOC_NOMBRES} ${element.DOC_APELLIDOS} </option>`);
        });
    });
});