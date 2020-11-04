<template>
    <div class="row layout-top-spacing " >
        <div class="col-md-10">
            <div class="row layout-top-spacing" >
                <div id="basic" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Postulantes Nuevos</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area" >
                            <form class="simple-example">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <!--                                        <label for="fullName">Comprar valor</label>-->
                                        <h5>I. COMPRAR VALOR</h5>
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
                                            <label class="btn btn-primary btn-sm "  for="fileInput" slot="upload-label">
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
                                        <h5>II. FICHA SOCIAL</h5>
                                        <small>La informacion que el estudiante proporcione en esta ficha debe ser veridica y confiable ya que la misma sera utilizada para la valoracion de la situacion socioeconomica del postulante. en caso de comprobarse falsedad en la informacion proporcionada, el DAE procedera a la suspencion de la Beca Comedor y se obligara al postulante a reponer el monto de dinero erogado por la Universidad a parti de la fecha  de su habilitacion como becario.                                        </small>
                                        <h6>A. Datos postulante</h6>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="Nombres">Nombres*</label>
                                                <input type="text" class="form-control" id="Nombres" placeholder="Nombres" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Apellido Parterno">Apellido Parterno*</label>
                                                <input type="text" class="form-control" id="Apellido Parterno" placeholder="Apellido Parterno" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Apellido Materno">Apellido Materno</label>
                                                <input type="text" class="form-control" id="Apellido Materno" placeholder="Apellido Materno" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Telefono">Telefono de referencia</label>
                                                <input type="text" class="form-control" id="Telefono" placeholder="Telefono">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Celular">Celular*</label>
                                                <input type="text" class="form-control" id="Celular" placeholder="Celular" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Fecha ingreso UTO">Fecha ingreso UTO</label>
                                                <input type="text" class="form-control" id="Fecha ingreso UTO" placeholder="Ingreso">
                                                <small id="emailHelp" class="form-text text-muted">Ej: semestre II/2020,14/01/2020</small>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Facultad">Facultad</label>
                                                <select name="Facultad" id="Facultad" v-model="dato.facultad" class="form-control">
                                                    <option value="Facultad de Derecho Ciencias Politicas y Sociales">Facultad de Derecho Ciencias Politicas y Sociales</option>
                                                    <option value="Facultad Nacional de Ingeniería">Facultad Nacional de Ingeniería</option>
                                                    <option value="Facultad de Ciencias Economicas Financieras y Administrativas">Facultad de Ciencias Economicas Financieras y Administrativas</option>
                                                    <option value="Facultad de Ciencias Agrarias y Naturales">Facultad de Ciencias Agrarias y Naturales</option>
                                                    <option value="Facultad Técnica">Facultad Técnica</option>
                                                    <option value="Facultad de Arquitectura y Urbanismo">Facultad de Arquitectura y Urbanismo</option>
                                                    <option value="Facultad de Ciencias de la Salud">Facultad de Ciencias de la Salud</option>
                                                </select>
                                                <!--                                                <input type="text" class="form-control" id="Facultad" placeholder="Facultad">-->
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label >Carrera</label>
                                                <select v-if="dato.facultad=='Facultad de Derecho Ciencias Politicas y Sociales'" name="Carrera"  class="form-control">
                                                    <option value="Derecho">Derecho</option>
                                                    <option value="Comunicacion social">Comunicacion social</option>
                                                    <option value="Antropología">Antropología</option>
                                                    <option value="Psicologia">Psicologia</option>
                                                </select>
                                                <select v-if="dato.facultad=='Facultad Nacional de Ingeniería'" name="Carrera"  class="form-control">
                                                    <option value="Ingeniería de Minas">Ingeniería de Minas</option>
                                                    <option value="Ingeniería Civil">Ingeniería Civil</option>
                                                    <option value="Ingeniería Metalúrgica">Ingeniería Metalúrgica</option>
                                                    <option value="Ingeniería Mecánica">Ingeniería Mecánica</option>
                                                    <option value="Ingeniería Eléctrica">Ingeniería Eléctrica</option>
                                                    <option value="Ingeniería Química">Ingeniería Química</option>
                                                    <option value="Ingeniería Geológica">Ingeniería Geológica</option>
                                                    <option value="Ingeniería de Sistemas">Ingeniería de Sistemas</option>
                                                    <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                                                </select>
                                                <select v-if="dato.facultad=='Facultad de Ciencias Economicas Financieras y Administrativas'" name="Carrera"  class="form-control">
                                                    <option value="Economía">Economía</option>
                                                    <option value="Contaduría Publica">Contaduría Publica</option>
                                                    <option value="Administración de Empresas">Administración de Empresas</option>
                                                    <option value="Ingeniería Comercial">Ingeniería Comercial</option>
                                                    <option value="Adminsitracion Financiera">Adminsitracion Financiera</option>
                                                    <option value="Comercio Internacional">Comercio Internacional</option>
                                                </select>
                                                <select v-if="dato.facultad=='Facultad de Ciencias Agrarias y Naturales'" name="Carrera"  class="form-control">
                                                    <option value="Ingeniería agronómica (Menciones: Fitotecnia,  Ganadería, Agronegocios  y Riegos y Suelos)">Ingeniería agronómica (Menciones: Fitotecnia,  Ganadería, Agronegocios  y Riegos y Suelos)</option>
                                                    <option value="Ingeniería en Zootécnica y Bienestar Animal">Ingeniería en Zootécnica y Bienestar Animal</option>
                                                    <option value="Ingeniería en Producción Agraria">Ingeniería en Producción Agraria</option>
                                                    <option value="Ingeniería en Recursos Naturales Agroambiental">Ingeniería en Recursos Naturales Agroambiental</option>
                                                    <option value="Medicina Veterinaria y Zootécnia (Challapata)">Medicina Veterinaria y Zootécnia (Challapata)</option>
                                                    <option value="Ingeniería Agroindustrial">Ingeniería Agroindustrial</option>
                                                </select>
                                                <select v-if="dato.facultad=='Facultad Técnica'" name="Carrera"  class="form-control">
                                                    <option value="Construcciones Civiles">Construcciones Civiles</option>
                                                    <option value="Electricidad Industrial">Electricidad Industrial</option>
                                                    <option value="Mecanica Automotriz">Mecanica Automotriz</option>
                                                    <option value="Mecanica Industrial">Mecanica Industrial</option>
                                                    <option value="Quimica Industrial">Quimica Industrial</option>
                                                    <option value="Mantenimiento de Equipo Pesado">Mantenimiento de Equipo Pesado</option>
                                                    <option value="Electromecanica">Electromecanica</option>
                                                </select>
                                                <select v-if="dato.facultad=='Facultad de Arquitectura y Urbanismo'" name="Carrera"  class="form-control">
                                                    <option value="Arquitectura y Urbanismo">Arquitectura y Urbanismo</option>
                                                </select>
                                                <select v-if="dato.facultad=='Facultad de Ciencias de la Salud'" name="Carrera"  class="form-control">
                                                    <option value="Enfermería Técnico">Enfermería Técnico</option>
                                                    <option value="Odontología">Odontología</option>
                                                    <option value="Medicina">Medicina</option>
                                                    <option value="PATEI">PATEI</option>
                                                    <option value="Enfermería">Enfermería</option>
                                                </select>
                                                <!--                                                <input type="text" class="form-control" placeholder="Carrera">-->
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Semestre">Semestre o año que cursa </label>
                                                <input type="text" class="form-control" id="Semestre" placeholder="Semestre">
                                                <small class="form-text text-muted">Ej: Anuales: 1er Año, 2do Año, Semestrales: 1er semestre, 2do semestre</small>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label >Usted tiene alguna discapacidad?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"  value="option1" checked>
                                                    <label class="form-check-label" >
                                                        NO
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"  value="option2">
                                                    <label class="form-check-label" >
                                                        SI
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label >B.	¿ Cuenta con hermano(s) becario (s) y/o postulantes a la beca comedor?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hermano"  value="option1" checked>
                                                    <label class="form-check-label" >
                                                        NO
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hermano"  value="option2">
                                                    <label class="form-check-label" >
                                                        SI
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nombre Completo</th>
                                                            <th scope="col">Becario?</th>
                                                            <th scope="col">Postulante?</th>
                                                            <th scope="col">Opciones</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary submit-fn mt-2" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
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
                image: null,
                dato:{},
                options: [
                    'foo',
                    'bar',
                    'baz'
                ]
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

