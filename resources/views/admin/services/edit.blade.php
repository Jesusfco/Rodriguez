@extends('layouts.admin')
@section('title', 'Editar Servicio') 

@section('content')            
<h1>Editar Servicio</h1>
<form role="form" method="POST" enctype="multipart/form-data" onsubmit="return crearNoticia()">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" value="{{ $service->name }}" name="name" class="form-control"  placeholder="Nombre del servicio" required>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Resumen</label>
              <input type="text" value="{{ $service->resume }}" name="resume" class="form-control"  placeholder="Escribe brevemente de que se trara el servicio" required>
            </div>                                                                                                                             
            
          
                    
            <label>Redacta toda la informacion de tu servicio</label>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
              {{ $service->youtube }}
            </textarea>
            <input type="hidden" class="contenidoNota" name="description" >

            <div class="file-field input-field col l6 s12">
              <div class="btn">
                <span>Imagen</span>
                <input type="file" name="img" accept="image/x-png,image/gif,image/jpeg">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>

            <div class="input-field col l4 s12">
                <select name="public" v-model="public">            
                  <option value="0">Sin Publicar</option>
                  <option value="1">Publico</option>                                    
                </select>
                <label>Publico</label>
              </div>
            
            <div class="form-group">
              <label>Iframe de Youtube</label>
            <input type="text" name="youtube" value="{{ $service->youtube }}" class="form-control" name="youtube">
            </div>
            
            
            <button type="submit" class="btn btn-default">Editar Servicio</button>
          </form>
@endsection

@section('scripts')
  <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.        

    function crearNoticia(){
        var data = CKEDITOR.instances.editor1.getData();
        $('.contenidoNota').val(data);        
    }

    $(document).ready(function(){
      $('select').formSelect();
      CKEDITOR.replace( 'editor1' );
    });
      
    
  var app = new Vue({
      el: '#app',
      

      data: {
                      
             public: {{ $service->public }},             

      },      

     
  });
    </script>
@endsection