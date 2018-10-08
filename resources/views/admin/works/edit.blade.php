@extends('layouts.admin')
@section('title', 'Editar Trabajo') 

@section('styles')
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css">
@endsection
@section('content')         

<h2>Editar Trabajo</h2>

            <form class="row" role="form" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                        {{ csrf_field() }}

                        <div class="form-group">
                          <label for="exampleInputEmail1">Cliente</label>
                          <input type="text" name="client" class="autocomplete" id="client" value="{{ $work->user->name }}" placeholder="Cliente" required>
                          <input type="hidden" name="client_id" value="{{ $work->user_id }}" id="client_id" required>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Titulo</label>
                          <input type="text" value="{{ $work->title }}" name="title" class="form-control"  placeholder="Nombre del Trabajo" required>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Resumen</label>
                          <input type="text" value="{{ $work->resume }}" name="resume" class="form-control"  placeholder="Escribe brevemente de que se el trabajo" required>
                        </div>

                        
                        <div class="form-group  col l4 s12">
                          <label>Costo</label>
                          <input type="text" disabled value=" ${{ $work->cost }}" class="form-control" required>
                        </div>
                        
                       <div class="input-field col l4 s12">
                        <select name="status" v-model="status">            
                          <option value="1" selected>Planifiación</option>
                          <option value="2">Proceso</option>          
                          <option value="3">Entregado</option>          
                        </select>
                        <label>Status</label>
                      </div>

                      <div class="input-field col l4 s12">
                        <select name="public" v-model="public">            
                          <option value="0" selected>Sin Publicar</option>
                          <option value="1">Publico</option>                                    
                        </select>
                        <label>Publico</label>
                      </div>

                      <div class="input-field col l6 s12">
                        <select name="service_id" v-model="service">            
                          <option value="1" selected>Software</option>
                          <option value="2">Publico</option>                                    
                          <option value="3">Fotografía</option>                                    
                        </select>
                        <label>Tipo de servicio</label>
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
                          
                            
                      <div class=" col l12 s12">
                        <label>Redacta tu Trabajo</label>
                        <textarea name="editor1" id="editor1" rows="10" cols="80">

                        </textarea>
                        <input type="hidden" class="contenidoNota" name="description">
                      </div>
                        
                        <div class="form-group  col l12 s12">
                          <label>Iframe de Youtube</label>
                          <input type="text" name="youtube" class="form-control" name="youtube">
                        </div>
                        
                        <div class=" col l6 s12">
                          <button type="submit" class="btn btn-default">Actualizar Trabajo</button>
                        </div>

                      </form>

@endsection

@section('scripts')
  <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>  
  <script src="https://code.jquery.com/ui/1.9.1/jquery-ui.min.js" integrity="sha256-UezNdLBLZaG/YoRcr48I68gr8pb5gyTBM+di5P8p6t8=" crossorigin="anonymous"></script>  
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
  <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace( 'editor1' );

      function validateForm() {

        var data = CKEDITOR.instances.editor1.getData();
        $('.contenidoNota').val(data);

        let id = $('#client_id').val();

          if(id == null) {

            alert('Seleccione a un Cliente de las sugerencias');
            return false;

          } else {

            return true;

          }         

      }

      $(document).ready(function(){
        $('select').formSelect();
      });
      
  </script>

<script>
    
  var app = new Vue({
      el: '#app',
      

      data: {
         description: {
             status: {{ $work->work_status_id }},
             public: {{ $work->public }},
             service: {{ $work->service_id }},             

         },

         descriptions: [],



      },

     
  });

<script>		

  let sugest = [];

  $(document).ready(function() {

    let link = "{{ url('app/util/clientSugest')}}";			

    $('#client').autocomplete({

      source: function(request, response) {

        $.ajax({
          method: 'GET',
          url: link,
          dataType: "json",
          data: {term: request.term },

          success: function(data) {
            console.log(data);
            

            let users = [];
            for(let d of data) {
              users.push({value: d.name, data: d.id});
            }
            

            response(users);
          }

        });

      }, // another stuff

      minLength: 3,
      select: function(event, ui) {
        console.log(ui);
        $('#client_id').val(ui.item.data);
        // $('#client').val(ui.item.date);
      }

    });

  });


  function validateForm() {

    let id = $('#client_id').val();

    if(id == null) {

      alert('Seleccione a un Cliente de las sugerencias');
      return false;

    } else {

      return true;

    }

  }
  

  
</script>
@endsection