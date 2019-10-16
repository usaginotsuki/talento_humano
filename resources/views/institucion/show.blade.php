
<form action="/institucion/store"  method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
INS_NOMBRE: <input type="text" name="INS_NOMBRE"  ><br>
INS_FIRMA_DIRECTOR: <input type="text" name="INS_FIRMA_DIRECTOR"  ><br>
INS_PIE_DIRECTOR: <input type="text" name="INS_PIE_DIRECTOR"  ><br>
INS_PIE_DIRECTOR2: <input type="text" name="INS_PIE_DIRECTOR2" ><br>
INS_AUX: <input type="text" name="INS_AUX"  ><br>

<input type="submit" value="Submit">
</form>