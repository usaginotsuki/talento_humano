@extends('app')
@section('content')
 <body >

        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{url('empresa/edit/'.$empresa->EMP_CODIGO.'')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
            <a href="{{url('empresa/destroy/'.$empresa->EMP_CODIGO.'')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div >
@endsection