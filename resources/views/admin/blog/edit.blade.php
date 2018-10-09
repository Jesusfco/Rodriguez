@extends('layouts.admin')
@section('title', 'Editar Blog') 

@section('content') 

<h1>Editar Blog</h1>
            <form role="form" method="POST" enctype="multipart/form-data" onsubmit="return crearNoticia()">
                        {{ csrf_field() }}

                        <div class="form-group">
                          <label for="exampleInputEmail1">Titulo</label>
                          <input type="text" name="title" class="form-control" value="{{ $blog->title }}"  placeholder="Titulo de la noticia" required>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Resumen</label>
                          <input type="text" name="resume" value="{{ $blog->resume }}" class="form-control"  placeholder="Escribe brevemente de que se trara la noticia" required>
                        </div>

                        <div class="form-group">
                          <label>Imagen</label>
                          <input type="file" name="img" id="imagen" accept="image/x-png,image/gif,image/jpeg">

                          <p class="help-block">Cargue una fotografía de la noticia</p>
                        </div>
                        
                        <div class="row"><div class="col-sm-12 col-lg-3">
                            
                         <div class="form-group">
                          <label>Fecha</label>
                          <input type="date" value="{{ $blog->date }}" name="date" class="form-control" required>
                        </div>
                        
                        </div></div>
                                
                        <label>Redacta tu noticia</label>
                        <textarea name="editor1" id="editor1" rows="10" cols="80">
                        {{ $blog->description }}
                        </textarea>
                        <input type="hidden" class="contenidoNota" name="description" required>
                        
                        <div class="form-group">
                          <label>Iframe de Youtube</label>
                          <input type="text" value="{{ $blog->youtube }}" name="youtube" class="form-control" name="youtube">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-default">Editar Blog</button>
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

        function crearNoticia(){
            var data = CKEDITOR.instances.editor1.getData();
            $('.contenidoNota').val(data);

            if(data.length == 0) return false;

//            return false;
        }
    </script>
@endsection