<template>
    <div class="container">
        <div class="row " >
            <div class="col-md-12" v-if="registrado==true">
                <h4 class="p-1 mb-1 bg-danger text-white text-center">
                    YA SE ENCUENTRA REGISTRADO!!!
                </h4>
            </div>
            <template v-else>
                <div class="col-md-12" v-if="gestions.length==0">
                    <h4 class="p-1 mb-1 bg-danger text-white text-center">
                        No esta habilitado ninguna gestion para REPOSTULANTES
                    </h4>
                </div>
                <div class="col-md-12" v-else>
                    <div class="row layout-top-spacing" >
                        <div id="basic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Postulantes Repostulante</h4>
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
                                                <h5>II. FICHA SOCIAL</h5>
                                                <small>La informacion que el postulante proporcione en esta ficha debe ser veridica y confiable ya que la misma sera utilizada para la valoracion y verificacion de la situacion socioeconomica del postulante. En caso de comprobarse falsedad en la informacion proporcionada, el Departamento de Asuntos poner el Estudiantiles procedera a la suspencion de la Beca Comedor y se obligara al postulante a reponer el monto de dinero erogado por la Universidad a partir de la fecha de su habilitacion como becario.
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
                                                <h5>IV. Papeleta de pago del Ultimo Mes de Uno o Ambos Progenitores</h5>
                                                <small>
                                                    Original y una fotocopia simple; siempre y cuando uno o ambos progenitores sean trabajadores asalariados de alguna institucion
                                                    <br>
                                                    Entrega en :Departamento de Asuntos Estudiantiles
                                                </small>
                                                <input type="file" class="form-control" @change="getImage4">
                                                <h5>V. Certificacion de la Actividad Laboral</h5>
                                                <small>
                                                    En caso de progenitores no asalariados. las certificaciones validas son las siguientes:
                                                    Agritultor (certificacion del corregidor y/o autoridad originaria
                                                    Comerciante (Certificacion de su Sindicato o Asosciacion, Padron Municipal, Permiso de Funcionamiento o NIT)
                                                    Chofer (Certificación de su Sindicato, Asociacion u otro documento)
                                                    otra Actividad Independiente (Certificacion de su Junto Vecinal).
                                                    En cualquier caso, el Certificado debe ser original, de la institución correspondiente, llevar el nombre y firma del responsable y el sello de la institución. El Certificado debe señalar con claridad la actividad laboral o económica.
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
            </template>



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
        this.verificar();
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
            registrado:false,
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
        verificar(){
            axios.get('/gestion').then(res=>{
                res.data.forEach(r=>{
                    // console.log(r);
                    if( moment().isBetween(r.inicio, r.fin) && r.tipo=='REPOSTULANTES'){
                        // console.log(r);
                        axios.get('/repostulante/'+r.id).then(re=>{
                            // console.log(re.data)
                            if(re.data>0){
                                this.registrado=true;
                            }else{
                                this.registrado=false;
                            }
                        });
                        this.gestions.push(r);
                    }
                });

            })
        },
        getImage(event){
            this.valor = event.target.files[0];
            this.valor2 = event.target.files[0];
            this.valor3 = event.target.files[0];
            this.valor4 = event.target.files[0];
            this.valor5 = event.target.files[0];
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
            data.append('ficha', this.valor2);
            data.append('matricula', this.valor3);
            data.append('pago', this.valor4);
            data.append('certificado', this.valor5);



            axios.post('/repostulante',data).then(res => {
                console.log(res.data);
                this.verificar();
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












