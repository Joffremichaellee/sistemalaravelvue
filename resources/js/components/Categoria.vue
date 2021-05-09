<template>

    <main>
            <!-- Breadcrumb -->
            <div class="container-fluid">

                <div class="card">     
                   
                        <div class=" card-primary">

                            <div class="card-header">
                                <h3 class="card-title">Nueva Categoria</h3>
                            </div>

                            <div class="row">
                
                                <div class="col-md-6">

                                    <div class="card-body">

                                        <form id="quickForm" @submit.prevent="addProduct"   method="POST" enctype = "multipart / form-data">
                                            
                                            <div  class="form-group">
                                                <label for="name">Name </label><!-- <label v-if="this.errorNombre == 1" class=" text-danger">&nbsp;&nbsp;&nbsp;Ingrese Nombre </label>-->
                                                <div v-if="this.errorNombre == 1">
                                                    <input type="text" v-model="nombre" name="text" style="border-radius:0;" class="form-control" placeholder="name">
                                                </div>
                                                <div v-else>
                                                    <input type="text" v-model="nombre" name="text" style="border-radius:0;" class="form-control " placeholder="name">
                                                </div>
                                            </div>
                                          

                                            <!--<div v-if="this.errorNombre == 1" class="mb-4 text-danger">Ingrese el nombre</div>-->
                                            
                                            <div v-show="errorCategoria" class="form-group row div-error">
                                                <div class="text-center text-error">
                                                    <div v-for="error in errorMostrarMsjCategoria" :key="error" v-text="error">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="descripcion" >descripcion</label>
                                                <input type="text"  v-model="descripcion" style="border-radius:0;" class="form-control" placeholder="descripcion">
                                            </div>

                                            <div class="form-group">

                                                <label for="imagen" name="file">Imagen(100x100)</label><!--<label v-if="this.errorImagen == 1" class=" text-danger">&nbsp;&nbsp;&nbsp;Ingrese la imagen </label>
-->
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        
                                                        <div>
                                                            <input type="file" class="custom-file-input" name="file" @change="obtenerImagen" id="imagen">
                                                            <label class="custom-file-label" name="file" style="border-radius:0;" for="imagen">Imagen</label>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            </div>

                                            <figure v-if="imagen">
                                                <img width="100"  height="100" name="file" :src="imagen" alt="Foto de la Categoria">
                                            </figure>
                                            
                                            <br>
                                            
                                            <div class="form-group row">

                                                <div class="col-md-12">
                                                    <a type="button"  style="border-radius:0;" href="/categoria" class="btn btn-secondary">Cerrar</a>
                                                    <button type="submit"  style="border-radius:0;"  class="btn btn-primary" >Registrar Venta</button>
                                                </div>

                                            </div>

                                        </form>
                                        

                                    </div>
                                    
                                </div>

                            </div>
                        
                        </div>
                    

                </div>

            </div>

    </main>

</template>

<script>

    $(function () {
  
  $('#quickForm').validate({
    rules: {
    email: {
        required: true,
        email: true,
      },
      text: {
        required: true,
        text: false,
      },
      descripcion: {
        required: true,
        descripcion: false,
      },
      file: {
        required: true,
        file: false,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Ingrese un nombre para la categoria",
        email : "Ingrese un correo valido",
      },
      text: {
        required: "Ingrese un nombre para la categoria",
      },
      file: {
        required: "Ingrese una imagen para la categoria",
         file : "Ingrese un correo valido",
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});


    export default {
        mounted() {
            this.listarCategoria();
            
        },
        data (){
            return {
                
                listado : '',
                prueba: '',
                imagenMiniatura: '',
                categoria_id: 0,
                nombre : '',
                descripcion : '',
                arrayCategoria : [],
                modal : 0,
                imagenpreview : '',
                image : '',
                listado:1,
                tituloModal : '',
                tipoAccion : 0,
                errorCategoria : 0,
                errorNombre : 0,
                errorImagen : 0,
                errorImagen : '',
                errorMostrarMsjCategoria : [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio : 'nombre',
                buscar : ''
            }
        },
        computed:{
            imagen(){
                return this.imagenMiniatura;
            }
        },
        
        methods : {
            
            listarCategoria (){
                let me=this;
                var url= '/categoria' ;
                axios.get(url).then(function (response) {
                    me.listado ='/categoria';
                })
               
                .catch(function (error) {
                    console.log(error);
                });
            },
            obtenerImagen(e){

                let file = e.target.files[0];
                this.image = file;
                this.cargarImagen(file); 

            },
            cargarImagen(file){
                let reader = new FileReader();

                reader.onload = (e) => {
                    this.imagenMiniatura = e.target.result;
                }

                reader.readAsDataURL(file);
            },
            addProduct(){
                if (this.validarCategoria()){
                    return;
                }
                let me = this;
                let formData = new FormData();
                formData.append('nombre',this.nombre);
                formData.append('descripcion',this.descripcion);
                formData.append('image',this.image);

                axios.post('/categoria/storecategoria',formData)
                .then(function(responses) {
                    me.nombre='';
                    me.descripcion='';
                    me.imagenMiniatura = '';
                    me.guardarCategoria();
                    window.location = '/categoria';

                    console.log(responses.data);
                })
            }, 
            
            mostrarDetalle(){
                let me=this;
                
                me.listado=0;
               
            },
            cerrarRegistro(){
                this.nombre='';
                this.descripcion='';
                this.imagenMiniatura='';
            },
            
            guardarCategoria(){
            
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'La categoria ha sido guardada exitosamente',
                    showConfirmButton: false,
                    timer: 1500
                })

            },
            validarCategoria(){
              
                this.errorNombre =0;
                this.errorImagen =0;

                if (!this.nombre) {

                   this.errorNombre =1;
                    
                }
                if(!this.imagenMiniatura){
                    
                    this.errorImagen =1;

                }
              
            },
           
        },
        
    }
</script>

<style>


    @media only screen and (max-width: 606px) and (min-width: 320px)  {

        .button-registrar{
            padding: .325rem .525rem;
            font-size: .77rem;
            line-height: 1.5;
            border-radius: .15rem;
        }

        .button-importar{
            padding: .325rem .525rem;
            font-size: .77rem;
            line-height: 1.5;
            border-radius: .15rem;
        }

        .button-exportar{
            padding: .325rem .525rem;
            font-size: .77rem;
            line-height: 1.5;
            border-radius: .15rem;
        }

        .button-reportar{
            padding: .325rem .525rem;
            font-size: .77rem;
            line-height: 1.5;
            border-radius: .15rem;
            /**padding: .225rem .525rem;
            font-size: .805rem;
            line-height: 1.5;
            border-radius: .15rem; */
        }

    }
    

        @media only screen and (max-width: 553px) and (min-width: 320px)  {

        table.table{
                flex: 1 1 auto;
                min-height: 1px;
                padding: 1.25rem;
        }

    }

</style>    