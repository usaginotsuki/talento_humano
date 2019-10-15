<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF=8">
  <title>Reporte</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Octavo Nivel 'B'">
  <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
  <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <style>
    .mini {
        font-size: 65%;
        display: inline-block;
    }
    .center {
        display: flex;
        justify-content: center;
    }
  </style>
</head>
<body style="background-color: white;">
    <div class="container">
        <div class="row center">
            <img src="{{URL::asset('images/reportes/encabezado.png')}}" alt="" width="90%">
        </div>
        <hr>
        <p>
            <span class="h4">SALA: &emsp;
                <span class="font-weight-300">{{ $horario->laboratorio->LAB_NOMBRE }}</span>
            </span>
            <br>
            <span class="h6">PERIODO: &emsp;
                <span style="font-weight: 300;">{{ $horario->periodo->PER_NOMBRE }}</span>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <span class="h6">CAPACIDAD: &emsp;
                <span style="font-weight: 300;">{{ $horario->laboratorio->LAB_CAPACIDAD }} PCs</span>
            </span>
        </p>
        <table class="table table-bordered table-sm">
            <thead>
                <tr class="d-flex">
                    <th class="col text-center">HORA</th>
                    <th class="col text-center">LUNES</th>
                    <th class="col text-center">MARTES</th>
                    <th class="col text-center">MIERCOLES</th>
                    <th class="col text-center">JUEVES</th>
                    <th class="col text-center">VIERNES</th>
                </tr>
            </thead>
            <tbody>
                @for ($x = 1; $x <= 13; $x++)
                <tr class="d-flex">
                    <td class="col text-center">{{ $horario['HOR_HORA'.$x] }}</td>
                    <!-- <td class="table-secondary col"> -->
                    @if ($horario['HOR_LUNES'.$x] != NULL)
                    <td class="col">
                        <span class="small">{{ $horario['HOR_LUNES'.$x] }}</span>
                        <br>
                        <b class="mini font-weight-bold">{{ $horario['HOR_LUNES_DOC'.$x] }}</b>
                    </td>
                    @else
                    <td class="col"></td>
                    @endif
                    @if ($horario['HOR_MATES'.$x] != NULL)
                    <td class="col">
                        <span class="small">{{ $horario['HOR_MATES'.$x] }}</span>
                        <br>
                        <b class="mini font-weight-bold">{{ $horario['HOR_MATES_DOC'.$x] }}</b>
                    </td>
                    @else
                    <td class="col"></td>
                    @endif
                    @if ($horario['HOR_MIERCOLES'.$x] != NULL)
                    <td class="col">
                        <span class="small">{{ $horario['HOR_MIERCOLES'.$x] }}</span>
                        <br>
                        <b class="mini font-weight-bold">{{ $horario['HOR_MIERCOLES_DOC'.$x] }}</b>
                    </td>
                    @else
                    <td class="col"></td>
                    @endif
                    @if ($horario['HOR_JUEVES'.$x] != NULL)
                    <td class="col">
                        <span class="small">{{ $horario['HOR_JUEVES'.$x] }}</span>
                        <br>
                        <b class="mini font-weight-bold">{{ $horario['HOR_JUEVES_DOC'.$x] }}</b>
                    </td>
                    @else
                    <td class="col"></td>
                    @endif
                    @if ($horario['HOR_VIERNESv'.$x] != NULL)
                    <td class="col">
                        <span class="small">{{ $horario['HOR_VIERNES'.$x] }}</span>
                        <br>
                        <b class="mini font-weight-bold">{{ $horario['HOR_VIERNES_DOC'.$x] }}</b>
                    </td>
                    @else
                    <td class="col"></td>
                    @endif
                </tr>
                @endfor
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <span>Ing. Edgar F. Montaluisa P. MSc.</span>
        <br>
        <span>JEFE DE LABORATORIO DE REDES E INFORMÁTICA</span>
    </div>
</body>