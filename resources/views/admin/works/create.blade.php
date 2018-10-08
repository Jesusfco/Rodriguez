@extends('layouts.admin')
@section('styles')
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css">
@endsection
@section('content')         

<h2>Crear Trabajo</h2>

            <form role="form" method="POST" enctype="multipart/form-data" onsubmit="return crearNoticia()">
                        {{ csrf_field() }}

                        <div class="form-group">
                          <label for="exampleInputEmail1">Cliente</label>
                          <input type="text" name="client" class="form-control" id="client" placeholder="Cliente" required>
                          <input type="hidden" name="client_id" id="client_id" required>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Titulo</label>
                          <input type="text" name="title" class="form-control"  placeholder="Titulo de la noticia" required>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Resumen</label>
                          <input type="text" name="resume" class="form-control"  placeholder="Escribe brevemente de que se trara la noticia" required>
                        </div>

                        <div class="file-field input-field col l6 s12">
                          <div class="btn">
                            <span>Imagen</span>
                            <input type="file" name="img" accept="image/x-png,image/gif,image/jpeg">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>                                               
                            
                        <div class="form-group">
                          <label>Costo</label>
                          <input type="number" name="cost" class="form-control" required>
                        </div>
                        
                       <div class="input-field col l6 s12">
                        <select name="status">            
                          <option value="1" selected>Planifiación</option>
                          <option value="2">Proceso</option>          
                          <option value="3">Entregado</option>          
                        </select>
                        <label>Status</label>
                      </div>

                      <div class="input-field col l6 s12">
                        <select name="status">            
                          <option value="0" selected>Sin Publicar</option>
                          <option value="1">Publico</option>                                    
                        </select>
                        <label>Status</label>
                      </div>
                                
                        <label>Redacta tu Trabajo</label>
                        <textarea name="editor1" id="editor1" rows="10" cols="80">

                        </textarea>
                        <input type="hidden" class="contenidoNota" name="description" required>
                        
                        <div class="form-group">
                          <label>Iframe de Youtube</label>
                          <input type="text" name="youtube" class="form-control" name="youtube">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-default">Crear Nuevo Trabajo</button>
                      </form>

@endsection

@section('scripts')
  <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>  
  <script src="https://code.jquery.com/ui/1.9.1/jquery-ui.min.js" integrity="sha256-UezNdLBLZaG/YoRcr48I68gr8pb5gyTBM+di5P8p6t8=" crossorigin="anonymous"></script>  
  <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace( 'editor1' );

      function crearNoticia(){
          var data = CKEDITOR.instances.editor1.getData();
          $('.contenidoNota').val(data);

          if(data.length == 0) return false;

//            return false;
      }

      $(document).ready(function(){
        $('select').formSelect();
      });
  </script>

<script>		

  let sugest = [];

  $(document).ready(function() {

    let link = "{{ url('app/clientSugest')}}";			

    $('#client').autocomplete({

      source: function(request, response) {

        $.ajax({

          url: link,
          dataType: "json",
          data: {term: request.term },

          success: function(data) {
            console.log(data);
            response(data);
            sugest = data;
          }

        });

      }, // another stuff

      minLength: 3,
      select: function(event, ui) {
        
        $('#client_id').val(ui.item.id);
      }

    });

  });

  function validateForm() {

    let id = $('#idAsesor').val();

    if(id == null) {

      alert('Seleccione a un Asesor de las sugerencias');
      return false;

    } else {

      return true;

    }

  }
  

  
</script>
@endsection