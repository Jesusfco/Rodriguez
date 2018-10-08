@extends('layouts.admin')
@section('title', 'Partes del Trabajo') 

@section('styles')
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css">
@endsection
@section('content')         

<h2>{{ $work->title }}</h2>
<h5>{{ $work->user->name }}</h5>
<p>Costo Total: $<span>@{{ work.cost }}</span></p>

<form>

</form>

<table>
    <thead>        
        <th>Titulo</th>
        <th>Descripción</th>
        <th>Costo</th>
        <th>Status</th>
        <th>Creado</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <tr v-for="part in work.parts">            
            <td>@{{ part.title }}</td>
            <td>@{{ part.description }}</td>
            <td>@{{ part.cost }}</td>
            <td v-if="part.status == 1">Planificación</td>
            <td v-if="part.status == 2">En Progreso</td>
            <td v-if="part.status == 3">Finalizado</td>
            <td>@{{ part.created_at }}</td>
            <td>

            </td>
        </tr>
    </tbody>
</table>
                        
                        
@endsection

@section('scripts')
  <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>  
  <script src="https://code.jquery.com/ui/1.9.1/jquery-ui.min.js" integrity="sha256-UezNdLBLZaG/YoRcr48I68gr8pb5gyTBM+di5P8p6t8=" crossorigin="anonymous"></script>  
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
  <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
    //   CKEDITOR.replace( 'editor1' );      

    //     var data = CKEDITOR.instances.editor1.getData();
    //     $('.contenidoNota').val(data);

    //     let id = $('#client_id').val();

    //       if(id == null) {

    //         alert('Seleccione a un Cliente de las sugerencias');
    //         return false;

    //       } else {

    //         return true;

    //       }         

    //   }

      $(document).ready(function(){
        $('select').formSelect();
      });
      
  </script>

<script>
    
  var app = new Vue({
      el: '#app',
      

      data: {
         work: {
             id: {{ $work->id }},
             cost: {{ $work->cost }},
             status: {{ $work->work_status_id }},
             public: {{ $work->public }},
             service: {{ $work->service_id }},  
             parts: [
                 @foreach($work->parts as $part)
                    {id: {{$part->id}},
                    work_id: {{$part->work_id}},
                    title:"{{ $part->title }}",
                    description:"{{ $part->description }}",
                    cost: {{$part->cost}},
                    status: {{ $part->status}},
                    created_at: "{{ $part->created_at}}",
                    },
                 @endforeach
             ],

         }, 

         newPart: {
             id: null,
             work_id: {{ $work->id }},
             cost: 0,
             status: 1,
             title: '',
             description: '',
             created_at: '',
         },

         editMode: false,

         editPart: {
            id: null,
            work_id: null,
            cost: 0,
            status: 1,
            title: '',
            description: '',
            created_at: '',
         },
                 
         methods: {

            create: function() {

                var formD = new FormData();
                formD.append('work_id', this.work.id);
                formD.append('cost', this.newPart.cost);
                formD.append('status', this.newPart.status);
                formD.append('title', this.newPart.title);     
                formD.append('description', this.newPart.description);     

                axios.post('storePart', formD)

                    .then(function(response) {

                        app.work.parts.push(response.data);
                        app.setNewPart();


                    }).catch(function(error) {

                        // app.uploading = false;
                        // app.errorHandler(error, i);

                    });

            },

            setNewPart: function() {
                this.newPart = {
                    id: null,
                    work_id: this.work.id,
                    cost: 0,
                    status: 1,
                    title: '',
                    description: '',
                    created_at: '',
                };
            },

            edit: function(part) {
                this.editMode =  true;
                this.editPart = part;
            },

            update: function() {
                var formD = new FormData();
                formD.append('id', this.editPart.id);
                formD.append('work_id', this.editPart.work_id);
                formD.append('cost', this.editPart.cost);
                formD.append('status', this.editPart.status);
                formD.append('title', this.editPart.title);     
                formD.append('description', this.editPart.description);     

                axios.post('updatePart', formD)

                    .then(function(response) {

                        for(let i = 0: x < app.work.parts.length; i++) {

                            if(app.work.parts[i].id == response.data.id) {

                                app.work.parts[i] = response.data;

                            }

                        }
                        
                        app.editMode = false;


                    }).catch(function(error) {

                        // app.uploading = false;
                        // app.errorHandler(error, i);

                    });
            }, 

            delete: function(id) {

                var formD = new FormData();
                formD.append('id', id);                

                axios.post('deletePart', formD)

                    .then(function(response) {

                         let i = 0;

                        for(let d of app.work.parts) {
                            if(d.id == id) {
                                break;
                            }

                            i++;
                        }

                        app.work.parts.splice(i,1);


                    }).catch(function(error) {

                        // app.uploading = false;
                        // app.errorHandler(error, i);

                    });
            }
            
         }


      },

     
  });

</script>
@endsection