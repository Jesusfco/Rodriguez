@extends('layouts.admin')

@section('title', 'Generar Recibo') 

@section('styles')
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css">
@endsection
@section('content')         

<h2>Crear Pago del cliente</h2>

<form class="row" role="form" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
  
  {{ csrf_field() }}

  <div class="form-group col s12">
    <label for="exampleInputEmail1">Trabajo</label>
    <input type="text" name="client" class="autocomplete" id="work" placeholder="Nombre del trabajo" required>
    <input type="hidden" name="work_id" id="work_id" required>
  </div>

  <div class="form-group col s12 m6">
    <label for="exampleInputEmail1">Monto</label>
    <input type="number" name="amount" class="form-control"  required>
  </div>

  <div class="form-group col s12 m6">
    <label for="exampleInputPassword1">Fecha</label>
    <input type="date" name="date" class="form-control"  required>
  </div>                                               
  
  <div class=" col l6 s12">
    <button type="submit" class="btn btn-default">Generar Recibo</button>
  </div>

</form>

@endsection

@section('scripts')

  <script src="https://code.jquery.com/ui/1.9.1/jquery-ui.min.js" integrity="sha256-UezNdLBLZaG/YoRcr48I68gr8pb5gyTBM+di5P8p6t8=" crossorigin="anonymous"></script>  
  <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      

      function validateForm() {

       

        let id = $('#client_id').val();

          if(id == null) {

            alert('Seleccione un Trabajo de las sugerencias');
            return false;

          } else {

            return true;

          }         

      }      
      
  </script>

<script>		

  let sugest = [];

  $(document).ready(function() {

    let link = "{{ url('app/util/workSugest')}}";			

    $('#work').autocomplete({

      source: function(request, response) {

        $.ajax({
          method: 'GET',
          url: link,
          dataType: "json",
          data: {term: request.term },

          success: function(data) {
            console.log(data);
            

            let works = [];
            for(let d of data) {
              works.push({value: d.title, data: d.id});
            }
            

            response(works);
          }

        });

      }, // another stuff

      minLength: 3,
      select: function(event, ui) {
        
        $('#work_id').val(ui.item.data);
        
      }

    });

  });


  function validateForm() {

    let id = $('#work_id').val();

    if(id == null) {

      alert('Seleccione a un Cliente de las sugerencias');
      return false;

    } else {

      return true;

    }

  }
  

  
</script>
@endsection