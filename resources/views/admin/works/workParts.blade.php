@extends('layouts.admin')
@section('title', 'Partes del Trabajo') 

@section('styles')
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css">
@endsection
@section('content')         

<h2>Trabajo: <br>{{ $work->title }}</h2>
<h5>Cliente: {{ $work->user->name }}</h5>
<p>Costo Total: $<span>@{{ work.cost }}</span></p> 
<form v-if="!editMode" class="row" v-on:submit.prevent="create()">
        <div class="form-group col s12">
            <label for="exampleInputEmail1">Titulo</label>
            <input type="text" placeholder="titulo" v-model="newPart.title" required>            
        </div>

        <div class="form-group col s12 m6">
            <label for="exampleInputEmail1" >Costo</label>
            <input type="number" placeholder="titulo" v-model="newPart.cost" required>            
        </div>

        <div class="form-group col s12 m6">
            <select name="status" v-model="newPart.status">            
                <option value="1">Planifiación</option>
                <option value="2">Proceso</option>          
                <option value="3">Entregado</option>          
                </select>
            <label>Status</label>            
        </div>

        <div class="form-group col s12">
            <label for="exampleInputEmail1">Descripción</label>
            <textarea v-model="newPart.description">            </textarea>
        </div>

        <div class="form-group col s12">
            <button class="btn green">Agregar</button>
        </div>
</form>

<form v-if="editMode" class="row" v-on:submit.prevent="update()">
        <div class="form-group col s12">
            <label for="exampleInputEmail1">Titulo</label>
            <input type="text" placeholder="titulo" v-model="editPart.title" required>            
        </div>

        <div class="form-group col s12 m6">
            <label for="exampleInputEmail1" >Costo</label>
            <input type="number" placeholder="titulo" v-model="editPart.cost" required>            
        </div>

        <div class="form-group col s12 m6">
            <select name="status" v-model="editPart.status">            
                <option value="1">Planifiación</option>
                <option value="2">Proceso</option>          
                <option value="3">Entregado</option>          
                </select>
            <label>Status</label>            
        </div>

        <div class="form-group col s12">
            <label for="exampleInputEmail1">Descripción</label>
            <textarea v-model="editPart.description">            </textarea>
        </div>

        <div class="form-group col s12">
            <button class="btn green">Actualizar</button>
        </div>
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
            <td>$@{{ part.cost }}</td>
            <td v-if="part.status == 1">Planificación</td>
            <td v-if="part.status == 2">En Progreso</td>
            <td v-if="part.status == 3">Finalizado</td>
            <td>@{{ part.created_at }}</td>
            <td>
                <button v-on:click="edit(part)" class="btn blue">Editar</button>
                <button v-on:click="destroy(part.id)"  class="btn red">Eliminar <i class="material-icons">trash</i></button>
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
     

    $(document).ready(function(){
    $('select').formSelect();
    });
    
    
    var app = new Vue({
        el: '#app',
      

        data: {
            work: {
             id: {{ $work->id }},
                cost: {{ $work->cost }},
                status: {{ $work->work_status_id }},
                public: {{ $work->public }},
                service: {{ $work->service_id }},  
                parts: [],                

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
        },

        created: function () {

            axios.get('getParts')
                .then(function(response) {
                    
                    for(let d of response.data) {
                        app.work.parts.push(d);
                    }
                    
                }).catch(function(error) {

                });

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
                this.editMode = true;
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

                        app.editMode = !app.editMode;                        

                        for(let i = 0; x < app.work.parts.length; i++) {

                            if(app.work.parts[i].id == response.data.id) { 
                                app.work.parts[i] = response.data; 
                            }

                        }                                                                        

                    }).catch(function(error) {                        

                    });
            }, 

            destroy: function(id) {

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
            },                      

      },

     
  });

</script>
@endsection