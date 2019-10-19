
<!DOCTYPE html>

<html>


 <head>
 
  <title>Control </title>   
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   
 </head>

  @extends('app')
  @section('content')
  
  @include ('shared.navbar')
 

    <body>
 
    <?php dd($informacion); ?>
    <div  class="container">
        
        <form  action="/control/init"  method="post">
            <div class="row"> 
                  
                      <div class="col">
                            <div class="form-group">
                                <label for="CON_DIA">Dia*</label>
                                <input type="date" class="form-control" value="{{$informacion[0]->dia}}" name="CON_DIA"  required>

                            </div>
                    </div>
    
            </div>

        </form>
      

    </div>
    


 
    </body>

  @endsection

</html>




