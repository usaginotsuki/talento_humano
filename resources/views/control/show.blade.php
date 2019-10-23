
<form action="/control/store"  method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
CON_DIA: <input type="date" name="CON_DIA"  ><br>
CON_HORA_ENTRADA: <input type="time" name="CON_HORA_ENTRADA"  ><br>
CON_HORA_SALIDA: <input type="time" name="CON_HORA_SALIDA"  ><br>
CON_LAB_ABRE: <input type="text" name="CON_LAB_ABRE" ><br>
CON_HORA_ENTRADA_R: <input type="time" name="CON_HORA_ENTRADA_R"  ><br>
CON_REG_FIRMA_ENTRADA: <input type="text" name="CON_REG_FIRMA_ENTRADA"  ><br>
CON_HORA_SALIDA_R: <input type="time" name="CON_HORA_SALIDA_R"  ><br>
CON_REG_FIRMA_SALIDA: <input type="text" name="CON_REG_FIRMA_SALIDA"  ><br>
CON_LAB_CIERRA: <input type="text" name="CON_LAB_CIERRA" ><br>
CON_OBSERVACIONES: <input type="text" name="CON_OBSERVACIONES"  ><br>
CON_NUMERO_HORAS: <input type="number" name="CON_NUMERO_HORAS"  ><br>
CON_NOTA: <input type="text" name="CON_NOTA"  ><br>
CON_EXTRA: <input type="number" name="CON_EXTRA"  ><br>
CON_GUIA: <input type="number" name="CON_GUIA" ><br>
GUI_CODIGO: <input type="number" name="GUI_CODIGO"  ><br>

<input type="submit" value="Submit">
</form>