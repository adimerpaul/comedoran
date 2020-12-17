<template>
    <div class="container">
        <div class="row " >
            <div class="col-md-12" v-if="gestions.length==0">
                <h4 class="p-1 mb-1 bg-danger text-white text-center">
                    No esta habilitado ninguna gestion
                </h4>
            </div>
            <div class="col-md-12" v-else>
                <div class="row layout-top-spacing" >
                    <div id="basic" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Postulantes Antiguos</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area" >
                                <form class="simple-example" @submit.prevent="updateAvatar">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <h5>I. COMPRAR VALOR</h5>
                                            <small>Adquirir el valor de Bs. 5,00 en Tesoro Universitario.
                                                Buscar a: Cajero
                                                En: Tesoro Universitario
                                            </small>
                                            <input type="file" class="form-control" @change="getImage">
                                            <h5>II. SOLICITAR FORMULARIO DE RENOVACION No 2</h5>
                                            <small>El formulario sera entregado a los postulantes en el Departamento de Asuntos Estudiantiles
                                                <br>
                                                Buscar a: Secretaria
                                                En: Departamento de Asuntos Estudiantiles
                                            </small>
                                            <input type="file" class="form-control" @change="getImage2">
                                            <h5>III. PAPELETA DE PAGO DE LA MATRICULA UNIVERSITARIA</h5>
                                            <small>
                                                Se refiere a la Matricula Universitaria correspondiente a la gestion academica en curso. Se exigira  el docuemento original y una fotocopia  simple
                                                <br>
                                                Entrega en :Departamento de Asuntos Estudiantiles
                                            </small>
                                            <input type="file" class="form-control" @change="getImage3">
                                            <h5>IV. FORMULARIO DE ACTUALIZACION DE INFORMACION Nº1</h5>
                                            <small>
                                                Se refiere a la Matricula Universitaria correspondiente a la gestion academica en curso. Se exigira  el docuemento original y una fotocopia  simple
                                                <br>
                                                Entrega en :Departamento de Asuntos Estudiantiles
                                            </small>
                                            <input type="file" class="form-control" @change="getImage4">
                                            <h5>V. CERTIFICADO DE CALIFICACIONES DE LA GESTION ACADEMICA INMEDIANTA ANTERIOR</h5>
                                            <small>
                                                El Departamento de Asuntos Estudiantiles podra prescindir de este documento si logra tener acceso a los sistemas Informaticos de Calificaciones de las diferentes Unidades facultativas
                                            </small>
                                            <input type="file" class="form-control" @change="getImage5">
                                        </div>
                                        <button class="btn btn-success btn-block submit-fn mt-2" type="submit">
                                            <i class="fa fa-save"></i> ENVIAR INFORMACION
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="col-md-2">-->
            <!--                <div id="navSection" data-spy="affix" class="nav  sidenav">-->
            <!--                    <div class="sidenav-content">-->
            <!--                        <a href="#basic" class="active nav-link">Comprar valor</a>-->
            <!--                        <a href="#email" class="nav-link">Ficha Social</a>-->
            <!--                        <a href="#select" class="nav-link">Papeleta de pago de la matricula universitaria</a>-->
            <!--                        <a href="#custom_styles" class="nav-link">Hoja croquis de la vivienda</a>-->
            <!--                        <a href="#browser_default" class="nav-link">Cedula de identidad</a>-->
            <!--                        <a href="#tooltips" class="nav-link">Libreta de calificaciones</a>-->
            <!--                        <a href="#tooltips" class="nav-link">Papeleta de pago del ultimo mes de uno o ambos progenitores</a>-->
            <!--                        <a href="#tooltips" class="nav-link">Certificado de la actividad laboral</a>-->
            <!--                        <a href="#tooltips" class="nav-link">Cedula de identidad vigentes</a>-->
            <!--                        <a href="#tooltips" class="nav-link">Libreta de familia</a>-->
            <!--                        <a href="#tooltips" class="nav-link">Certificado de defuncion</a>-->
            <!--                        <a href="#tooltips" class="nav-link">Sentencia de divocio</a>-->
            <!--                        <a href="#tooltips" class="nav-link">Denuncia ante el ministerio publico</a>-->
            <!--                        <a href="#tooltips" class="nav-link">Factura luz o agua</a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>



</template>

<script>
import  axios from "axios";
import moment from "moment";
// import { latLng } from "leaflet";
// import { LMap, LTileLayer, LMarker, LPopup, LTooltip } from "vue2-leaflet";
export default {
    mounted() {
        console.log('Component mounted.')
        axios.get('/gestion').then(res=>{
            // this.gestions=res.data;
            // console.log(res.data);
            res.data.forEach(r=>{
                if( moment().isBetween(r.inicio, r.fin) && r.tipo=='ANTIGUOS'){
                    this.gestions.push(r);
                }
            });

        })
    },
    // components: {
    //     LMap,
    //         LTileLayer,
    //         LMarker,
    //         LPopup,
    //         LTooltip
    // },
    data() {
        return {
            gestions:[],
            msg: "Vue Image Upload and Resize Demo",
            hasImage: false,
            image: null,
            dato:{},
            nuevo:{},
            valor:null,
            valor2:null,
            valor3:null,
            valor4:null,
            valor5:null,
            valor6:null,
            valor7:null,
            valor8:null,
            valor9:null,
            valor10:null,
            valor11:null,
            valor12:null,
            valor13:null,
            options: [
                'foo',
                'bar',
                'baz'
            ],
            hermanos:[{nombre:'',becario:'NO',postulante:'NO'}],
            familias:[{nombre:'',becario:'NO',postulante:'NO'}],
            economicas:[{nombre:'',becario:'NO',postulante:'NO'}],
            // hermanos:[{nombre:'',parentesco:'NO',fechanac:'NO'}],
            // zoom: 13,
            // center: latLng(-17.973813, -67.115095),
            // url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            // attribution:
            //     '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            // marker: latLng(0, 0),
            // withTooltip: latLng(47.41422, -1.250482),
            // currentZoom: 11.5,
            // currentCenter: latLng(47.41322, -1.219482),
            // showParagraph: false,
            // mapOptions: {
            //     zoomSnap: 0.5
            // },
            // showMap: true
        };
    },
    methods: {
        getImage(event){
            this.valor = event.target.files[0];
            // this.valor2 = event.target.files[0];
            // this.valor3 = event.target.files[0];
            // this.valor4 = event.target.files[0];
            // this.valor5 = event.target.files[0];
        },
        getImage2(event){
            this.valor2 = event.target.files[0];
        },
        getImage3(event){
            this.valor3 = event.target.files[0];
        },
        getImage4(event){
            this.valor4 = event.target.files[0];
        },
        getImage5(event){
            this.valor5 = event.target.files[0];
        },

        updateAvatar(){
            //Creamos el formData
            var data = new  FormData();
            //Añadimos la imagen seleccionada
            data.append('valor', this.valor);
            data.append('renovacion', this.valor2);
            data.append('pago', this.valor3);
            data.append('actualizacion', this.valor4);
            data.append('certificacion', this.valor5);



            axios.post('/antiguog',data).then(res => {
                console.log(res.data);
                // this.dato.ficha_id=res.data.id;
                // axios.post('/guardar', {
                //     hermanos:this.hermanos,
                //     familias:this.familias,
                //     economicas:this.economicas,
                //     ficha_id:res.data.id
                // }).then(r=>{
                //     console.log(r);
                // })
            });
        },
        addMarker(event) {
            // this.markers.push(event.latlng);
            this.marker= latLng(event.latlng)
        },
        setImage: function(output) {
            this.hasImage = true;
            this.image = output;
            console.log('Info', output.info)
            console.log('Exif', output.exif)
        },
        add(){
            this.hermanos.push({nombre:'',becario:'NO',postulante:'NO'});
            // console.log(this.hermanos);
        },
        remove(i){
            this.hermanos.splice(i,1);
        },
        add2(){
            this.familias.push({nombre:'',becario:'NO',postulante:'NO'});
            // console.log(this.familias);
        },
        remove2(i){
            this.familias.splice(i,1);
        },
        add3(){
            this.economicas.push({nombre:'',becario:'NO',postulante:'NO'});
            // console.log(this.economicas);
        },
        remove3(i){
            this.economicas.splice(i,1);
        },
        zoomUpdate(zoom) {
            this.currentZoom = zoom;
        },
        centerUpdate(center) {
            this.currentCenter = center;
        },
        showLongText() {
            this.showParagraph = !this.showParagraph;
        },
        innerClick() {
            alert("Click!");
        }
    }
}
</script>
<style>
#fileInput {
    display: none;
}
</style>












