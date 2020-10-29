<template>
    <div class="container">
        <div class="container">
            <div id="navSection" data-spy="affix" class="nav  sidenav">
                <div class="sidenav-content">
                    <a href="#basic" class="active nav-link">Comprar valor</a>
                    <a href="#email" class="nav-link">Ficha Social</a>
                    <a href="#select" class="nav-link">Papeleta de pago de la matricula universitaria</a>
                    <a href="#custom_styles" class="nav-link">Hoja croquis de la vivienda</a>
                    <a href="#browser_default" class="nav-link">Cedula de identidad</a>
                    <a href="#tooltips" class="nav-link">Libreta de calificaciones</a>
                    <a href="#tooltips" class="nav-link">Papeleta de pago del ultimo mes de uno o ambos progenitores</a>
                    <a href="#tooltips" class="nav-link">Certificado de la actividad laboral</a>
                    <a href="#tooltips" class="nav-link">Cedula de identidad vigentes</a>
                    <a href="#tooltips" class="nav-link">Libreta de familia</a>
                    <a href="#tooltips" class="nav-link">Certificado de defuncion</a>
                    <a href="#tooltips" class="nav-link">Sentencia de divocio</a>
                    <a href="#tooltips" class="nav-link">Denuncia ante el ministerio publico</a>
                    <a href="#tooltips" class="nav-link">Factura luz o agua</a>

                </div>
            </div>
            <div class="row layout-top-spacing">
                <div id="basic" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Postulantes Nuevos</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="simple-example">
                                <div class="form-row">
                                    <div class="col-md-12">
<!--                                        <label for="fullName">Comprar valor</label>-->
                                        <h6>COMPRAR VALOR</h6>
                                        <small>Adquirir el valor de Bs. 5,00 en Tesoro Universitario.
                                        Buscar a: Cajero
                                        En: Tesoro Universitario
                                        </small>
<!--                                        <input class="form-control" type="file"  required>-->

                                        <image-uploader
                                            :preview="true"
                                            :className="['fileinput', { 'fileinput--loaded': hasImage }]"
                                            capture="environment"
                                            :debug="1"
                                            doNotResize="gif"
                                            :autoRotate="true"
                                            outputFormat="verbose"
                                            @input="setImage"
                                        >
                                            <label style="text-align: center;background: whitesmoke" for="fileInput" slot="upload-label">
                                                <figure>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                    >
                                                        <path
                                                            class="path1"
                                                            d="M9.5 19c0 3.59 2.91 6.5 6.5 6.5s6.5-2.91 6.5-6.5-2.91-6.5-6.5-6.5-6.5 2.91-6.5 6.5zM30 8h-7c-0.5-2-1-4-3-4h-8c-2 0-2.5 2-3 4h-7c-1.1 0-2 0.9-2 2v18c0 1.1 0.9 2 2 2h28c1.1 0 2-0.9 2-2v-18c0-1.1-0.9-2-2-2zM16 27.875c-4.902 0-8.875-3.973-8.875-8.875s3.973-8.875 8.875-8.875c4.902 0 8.875 3.973 8.875 8.875s-3.973 8.875-8.875 8.875zM30 14h-4v-2h4v2z"
                                                        ></path>
                                                    </svg>
                                                </figure>
                                                <span class="upload-caption">{{
            hasImage ? "Remplazar" : "Selecionar foto"
          }}</span>
                                            </label>
                                        </image-uploader>


                                        <h6>FICHA SOCIAL</h6>
                                        <small>La informacion que el estudiante proporcione en esta ficha debe ser veridica y confiable ya que la misma sera utilizada para la valoracion de la situacion socioeconomica del postulante. en caso de comprobarse falsedad en la informacion proporcionada, el DAE procedera a la suspencion de la Beca Comedor y se obligara al postulante a reponer el monto de dinero erogado por la Universidad a parti de la fecha  de su habilitacion como becario.                                        </small>
                                    </div>
                                </div>
                                <button class="btn btn-primary submit-fn mt-2" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                msg: "Vue Image Upload and Resize Demo",
                hasImage: false,
                image: null
            };
        },
        methods: {
            setImage: function(output) {
                this.hasImage = true;
                this.image = output;
                console.log('Info', output.info)
                console.log('Exif', output.exif)
            }
        }
    }
</script>
<style>
    #fileInput {
        display: none;
    }
</style>

