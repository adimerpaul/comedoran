<template>
    <div class="container" >
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableCaption" class="col-lg-12 col-12 layout-spacing" >
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <!--                                    <h4> i.Crear Comunicado</h4>-->
                                    <form action="" @submit.prevent="buscar">
                                    <div class="row">

                                        <div class="col-sm-1">
                                            <label for="">Gestion</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <select name="" class="form-control" id="" required v-model="gestion_id">
                                                <option v-for="i in gestions" :value="i.id">{{i.nombre}} {{i.tipo}}</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-success">
                                                <i class="fa fa-cog"></i> Buscar
                                            </button>
                                        </div>

                                    </div>
                                    </form>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Colocar notas</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <!--                                                        <svg> ... </svg>-->
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--                                                    <p class="modal-text">-->
                                                    <!--                                                        Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.-->
                                                    <form method="post" @submit.prevent="update">
                                                        <h5>1)ASPECTOS ACADEMICOS (max 50 Puntos)</h5>
                                                        <div class="form-group">

                                                            <div class="form-group">
                                                                <label for="aa" >a) Calificacion gestion anterior (max 50 Puntos)</label>
                                                                <input id="aa" type="text" name="txt" v-model="dato.nombre" placeholder="0" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                        <h5>1)ASPECTOS SOCIOECONOMICOS (max 50 Puntos)</h5>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="ba" >a) Ingreso grupo familiar (max 20 Puntos)</label>
                                                                <input id="ba" type="text" name="txt" v-model="dato.nombre" placeholder="0" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="bb" >b) Estado actual de los padres y condiciones del hijo (max 5 Puntos)</label>
                                                            <input id="bb" type="text" name="txt" v-model="dato.nombre" placeholder="0" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="bc" >c) Grado de instruccion de quien depende el estudiante (max 5 Puntos)</label>
                                                            <input id="bc" type="text" name="txt" v-model="dato.nombre" placeholder="0" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="bd" >d) Tendencia de la vivienda (max 10 Puntos)</label>
                                                            <input id="bd" type="text" name="txt" v-model="dato.nombre" placeholder="0" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="be" >e) Ubicacion de la vivienda (max 5 Puntos)</label>
                                                            <input id="be" type="text" name="txt" v-model="dato.nombre" placeholder="0" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="bf" >f) Procedecia de la vivienda (max 5 Puntos)</label>
                                                            <input id="bf" type="text" name="txt" v-model="dato.nombre" placeholder="0" class="form-control" required="">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                                                            <button type="submit" class="btn btn-success">guardar</button>
                                                        </div>
                                                    </form>

                                                    <!--                                                    </p>-->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Datos del postulante</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <!--                                                        <svg> ... </svg>-->
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--                                                    <p class="modal-text">-->
                                                    <!--                                                        Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.-->
                                                    <form method="post" @submit.prevent="">
                                                        <div class="form-group">
                                                            <pre>{{dato}}</pre>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-eye"></i> Cancelar</button>
<!--                                                            <button type="submit" class="btn btn-success">guardar</button>-->
                                                        </div>
                                                    </form>

                                                    <!--                                                    </p>-->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table mb-4">
                                    <!--                                    <caption>List of all users</caption>-->
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nombre</th>
                                        <th>Facultad</th>
                                        <th class="">Carrera</th>
<!--                                        <th class="">Fin</th>-->
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(i,index) in datos" :key="index">
                                        <td class="text-center">{{index+1}}</td>
                                        <td >{{i.user.ficha[0].paterno}} {{i.user.ficha[0].materno}} {{i.user.ficha[0].nombre}}</td>
<!--                                        <td :class="i.estado=='VISIBLE'?'text-success':'text-danger'">{{i.estado}}</td>-->
                                        <td>{{i.user.ficha[0].facultad}}</td>
                                        <td>{{i.user.ficha[0].carrera}}</td>
<!--                                        <td>{{i.fin}}</td>-->
<!--                                        <td class=""><span class="badge":class="i.color=='note-personal'?'badge-success':i.color=='note-work'?'badge-warning':i.color=='note-social'?'badge-secondary':i.color=='note-important'?'badge-danger':'badge-dark'">color</span></td>-->
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"  ><i class="fa fa-book"></i> Nota</button>
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ver" @click="ver(i)"><i class="fa fa-eye"></i> Datos</button>
                                            </div>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import { VueEditor } from "vue2-editor";
import axios from 'axios';
import moment from "moment";
export default {
    data:function (){
        return {
            gestions:[],
            dato:{color:'note-personal'},
            datos:[],
            gestion_id:{},
            // content: ''
        }
    },
    created() {
        axios.get('/gestion').then(res=>{
            this.gestions=res.data;
            // console.log(res.data);
            // res.data.forEach(r=>{
            //     // if( moment().isBetween(r.inicio, r.fin) && r.tipo=='NUEVOS'){
            //     //     this.gestions.push(r);
            //     // }
            //     this.gestions=res.data;
            // });

        })
        // this.misdatos();
        // console.log('Component mounted.')
    },
    methods:{
        ver(i){
            this.dato=i;
            console.log(this.dato);
        },
        buscar(){
            axios.get('/buscar/'+this.gestion_id).then(res=>{
                console.log(res.data);
                this.datos=res.data;
                // res.data.forEach(r=>{
                //     console.log(r.user);
                //     // this.datos.push(r);
                // })
            })
        },
        misdatos(){
            axios.get('/gestion').then(res=>{
                // console.log(res.data);
                this.datos=res.data;
                // res.data.forEach(r=>{
                //     console.log(r);
                //     this.datos.push(r);
                // })

            })
        },
        store(){
            axios.post('/gestion',this.dato).then(res=>{
                // this.datos=res.data;
                this.misdatos();
                this.$toast.open({
                    message: "Dato creado",
                    type: "success",
                    duration: 3000,
                    dismissible: true
                });
                this.dato={tipo:''};
                this.dato={color:'note-personal'};
                $('#exampleModal').modal('hide');
            })
        },
        mostrar(i){
            // console.log(i);
            axios.get('/gestion/'+i.id).then(res=>{
                this.misdatos();
                this.$toast.open({
                    message: "Datos Actualizados",
                    type: "success",
                    duration: 3000,
                    dismissible: true
                });
            })
        },
        modificar(i){
            $('#modificar').modal('show');
            this.dato=i;
        },
        update(){
            axios.put('/gestion/'+this.dato.id,this.dato).then(res=>{
                // this.datos=res.data;
                this.misdatos();
                $('#modificar').modal('hide');
                this.$toast.open({
                    message: "Dato modificado",
                    type: "warning",
                    duration: 3000,
                    dismissible: true
                });
                this.dato={color:'note-personal'};
            })
        },
        eliminar(i){
            this.$fire({
                title: 'Seguro de eliminar??',
                // text: "You won't be able to revert this!",
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si!'
            }).then((r) => {
                if (r.value){
                    axios.delete('/gestion/'+i.id).then(res=>{
                        this.misdatos();
                        // $('#modal-default').modal('hide');
                        this.$toast.open({
                            message: "Dato Eliminado",
                            type:"error",
                            duration: 3000,
                            dismissible: true
                        });
                        this.dato={color:'note-personal'};
                    })
                }
            })

        }
    },
    components: {
        VueEditor
    },
}
</script>

