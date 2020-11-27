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
                            <form class="simple-example" @submit.prevent="updateAvatar">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <h5>I. COMPRAR VALOR</h5>
                                        <small>Adquirir el valor de Bs. 5,00 en Tesoro Universitario.
                                            Buscar a: Cajero
                                            En: Tesoro Universitario
                                        </small>
<!--                                        <image-uploader-->
<!--                                            :preview="true"-->
<!--                                            :className="['fileinput', { 'fileinput&#45;&#45;loaded': hasImage }]"-->
<!--                                            capture="environment"-->
<!--                                            :debug="1"-->
<!--                                            doNotResize="gif"-->
<!--                                            :autoRotate="true"-->
<!--                                            outputFormat="verbose"-->
<!--                                            @input="setImage"-->
<!--                                        >-->
<!--                                            <label class="btn btn-primary btn-sm "  for="fileInput" slot="upload-label">-->
<!--                                                <figure>-->
<!--                                                    <svg-->
<!--                                                        xmlns="http://www.w3.org/2000/svg"-->
<!--                                                        width="32"-->
<!--                                                        height="32"-->
<!--                                                        viewBox="0 0 32 32"-->
<!--                                                    >-->
<!--                                                        <path-->
<!--                                                            class="path1"-->
<!--                                                            d="M9.5 19c0 3.59 2.91 6.5 6.5 6.5s6.5-2.91 6.5-6.5-2.91-6.5-6.5-6.5-6.5 2.91-6.5 6.5zM30 8h-7c-0.5-2-1-4-3-4h-8c-2 0-2.5 2-3 4h-7c-1.1 0-2 0.9-2 2v18c0 1.1 0.9 2 2 2h28c1.1 0 2-0.9 2-2v-18c0-1.1-0.9-2-2-2zM16 27.875c-4.902 0-8.875-3.973-8.875-8.875s3.973-8.875 8.875-8.875c4.902 0 8.875 3.973 8.875 8.875s-3.973 8.875-8.875 8.875zM30 14h-4v-2h4v2z"-->
<!--                                                        ></path>-->
<!--                                                    </svg>-->
<!--                                                </figure>-->
<!--                                                <span class="upload-caption">{{-->
<!--            hasImage ? "Remplazar" : "Selecionar foto"-->
<!--          }}</span>-->
<!--                                            </label>-->
<!--                                        </image-uploader>-->
                                        <input type="file" class="form-control" @change="getImage">
<!--                                        <button type="button" @click="updateAvatar">Subir Imagen</button>-->
                                        <h5>II. FICHA SOCIAL</h5>
                                        <small>La informacion que el estudiante proporcione en esta ficha debe ser veridica y confiable ya que la misma sera utilizada para la valoracion de la situacion socioeconomica del postulante. en caso de comprobarse falsedad en la informacion proporcionada, el DAE procedera a la suspencion de la Beca Comedor y se obligara al postulante a reponer el monto de dinero erogado por la Universidad a parti de la fecha  de su habilitacion como becario.                                        </small>
                                        <h6>1. DATOS DEL POSTULANTE</h6>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="Nombres">Nombres*</label>
                                                <input type="text" v-model="dato.nombres" class="form-control" id="Nombres" placeholder="Nombres" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Apellido Parterno">Apellido Parterno*</label>
                                                <input type="text" v-model="dato.paterno" class="form-control" id="Apellido Parterno" placeholder="Apellido Parterno" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Apellido Materno">Apellido Materno</label>
                                                <input type="text"  v-model="dato.materno" class="form-control" id="Apellido Materno" placeholder="Apellido Materno" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Telefono">Telefono de referencia</label>
                                                <input type="text"  v-model="dato.telefono" class="form-control" id="Telefono" placeholder="Telefono">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Celular">Celular*</label>
                                                <input type="text"  v-model="dato.celular" class="form-control" id="Celular" placeholder="Celular" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Fecha ingreso UTO">Fecha ingreso UTO</label>
                                                <input type="text"  v-model="dato.ingreso" class="form-control" id="Fecha ingreso UTO" placeholder="Ingreso">
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
                                                <select v-if="dato.facultad=='Facultad de Derecho Ciencias Politicas y Sociales'" v-model="dato.carrera" name="Carrera"  class="form-control">
                                                    <option value="Derecho">Derecho</option>
                                                    <option value="Comunicacion social">Comunicacion social</option>
                                                    <option value="Antropología">Antropología</option>
                                                    <option value="Psicologia">Psicologia</option>
                                                </select>
                                                <select v-if="dato.facultad=='Facultad Nacional de Ingeniería'" v-model="dato.carrera" name="Carrera"  class="form-control">
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
                                                <select v-model="dato.carrera" v-if="dato.facultad=='Facultad de Ciencias Economicas Financieras y Administrativas'" name="Carrera"  class="form-control">
                                                    <option value="Economía">Economía</option>
                                                    <option value="Contaduría Publica">Contaduría Publica</option>
                                                    <option value="Administración de Empresas">Administración de Empresas</option>
                                                    <option value="Ingeniería Comercial">Ingeniería Comercial</option>
                                                    <option value="Adminsitracion Financiera">Adminsitracion Financiera</option>
                                                    <option value="Comercio Internacional">Comercio Internacional</option>
                                                </select>
                                                <select v-model="dato.carrera" v-if="dato.facultad=='Facultad de Ciencias Agrarias y Naturales'" name="Carrera"  class="form-control">
                                                    <option value="Ingeniería agronómica (Menciones: Fitotecnia,  Ganadería, Agronegocios  y Riegos y Suelos)">Ingeniería agronómica (Menciones: Fitotecnia,  Ganadería, Agronegocios  y Riegos y Suelos)</option>
                                                    <option value="Ingeniería en Zootécnica y Bienestar Animal">Ingeniería en Zootécnica y Bienestar Animal</option>
                                                    <option value="Ingeniería en Producción Agraria">Ingeniería en Producción Agraria</option>
                                                    <option value="Ingeniería en Recursos Naturales Agroambiental">Ingeniería en Recursos Naturales Agroambiental</option>
                                                    <option value="Medicina Veterinaria y Zootécnia (Challapata)">Medicina Veterinaria y Zootécnia (Challapata)</option>
                                                    <option value="Ingeniería Agroindustrial">Ingeniería Agroindustrial</option>
                                                </select>
                                                <select v-model="dato.carrera" v-if="dato.facultad=='Facultad Técnica'" name="Carrera"  class="form-control">
                                                    <option value="Construcciones Civiles">Construcciones Civiles</option>
                                                    <option value="Electricidad Industrial">Electricidad Industrial</option>
                                                    <option value="Mecanica Automotriz">Mecanica Automotriz</option>
                                                    <option value="Mecanica Industrial">Mecanica Industrial</option>
                                                    <option value="Quimica Industrial">Quimica Industrial</option>
                                                    <option value="Mantenimiento de Equipo Pesado">Mantenimiento de Equipo Pesado</option>
                                                    <option value="Electromecanica">Electromecanica</option>
                                                </select>
                                                <select v-model="dato.carrera" v-if="dato.facultad=='Facultad de Arquitectura y Urbanismo'" name="Carrera"  class="form-control">
                                                    <option value="Arquitectura y Urbanismo">Arquitectura y Urbanismo</option>
                                                </select>
                                                <select v-model="dato.carrera" v-if="dato.facultad=='Facultad de Ciencias de la Salud'" name="Carrera"  class="form-control">
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
                                                <input v-model="dato.semestre" type="text" class="form-control" id="Semestre" placeholder="Semestre">
                                                <small class="form-text text-muted">Ej: Anuales: 1er Año, 2do Año, Semestrales: 1er semestre, 2do semestre</small>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label >Usted tiene alguna discapacidad?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" v-model="dato.discapacidad" type="radio" name="exampleRadios"  value="option1" checked>
                                                    <label class="form-check-label"  >
                                                        NO
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" v-model="dato.discapacidad" type="radio" name="exampleRadios"  value="option2">
                                                    <label class="form-check-label" >
                                                        SI
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label >¿CUENTA CON HERMANO (AS) BECARIOS (AS) Y/O POSTULANTES A LA BECA COMEDOR?</label>
                                                <div class="form-check">
                                                    <input v-model="dato.hermanos" class="form-check-input" type="radio" name="hermano"  value="NO" checked required>
                                                    <label class="form-check-label" >
                                                        NO
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input v-model="dato.hermanos" class="form-check-input" type="radio" name="hermano"  value="SI" required>
                                                    <label class="form-check-label" >
                                                        SI
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12" v-if="dato.hermanos=='SI'">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nombre Completo</th>
                                                            <th scope="col">Becario?</th>
                                                            <th scope="col">Postulante?</th>
                                                            <th scope="col">Facultad</th>
                                                            <th scope="col">Carrera</th>
                                                            <th scope="col">Opciones</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr v-for="(i,index) in hermanos" :key="index">
                                                            <th scope="row">{{index+1}}</th>
                                                            <td><input type="text" v-model="i.nombre" class="form-control" placeholder="Nombre"></td>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"  v-model="i.becario"  value="NO" >
                                                                    <label class="form-check-label" >
                                                                        NO
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"  v-model="i.becario"  value="SI">
                                                                    <label class="form-check-label" >
                                                                        SI
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"  v-model="i.postulante"  value="NO" >
                                                                    <label class="form-check-label" >
                                                                        NO
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"  v-model="i.postulante" value="SI">
                                                                    <label class="form-check-label" >
                                                                        SI
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <select name="Facultad"  v-model="i.facultad" class="form-control">
                                                                    <option value="Facultad de Derecho Ciencias Politicas y Sociales">Facultad de Derecho Ciencias Politicas y Sociales</option>
                                                                    <option value="Facultad Nacional de Ingeniería">Facultad Nacional de Ingeniería</option>
                                                                    <option value="Facultad de Ciencias Economicas Financieras y Administrativas">Facultad de Ciencias Economicas Financieras y Administrativas</option>
                                                                    <option value="Facultad de Ciencias Agrarias y Naturales">Facultad de Ciencias Agrarias y Naturales</option>
                                                                    <option value="Facultad Técnica">Facultad Técnica</option>
                                                                    <option value="Facultad de Arquitectura y Urbanismo">Facultad de Arquitectura y Urbanismo</option>
                                                                    <option value="Facultad de Ciencias de la Salud">Facultad de Ciencias de la Salud</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select v-if="i.facultad=='Facultad de Derecho Ciencias Politicas y Sociales'" name="Carrera"  class="form-control">
                                                                    <option value="Derecho">Derecho</option>
                                                                    <option value="Comunicacion social">Comunicacion social</option>
                                                                    <option value="Antropología">Antropología</option>
                                                                    <option value="Psicologia">Psicologia</option>
                                                                </select>
                                                                <select v-if="i.facultad=='Facultad Nacional de Ingeniería'" name="Carrera"  class="form-control">
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
                                                                <select v-if="i.facultad=='Facultad de Ciencias Economicas Financieras y Administrativas'" name="Carrera"  class="form-control">
                                                                    <option value="Economía">Economía</option>
                                                                    <option value="Contaduría Publica">Contaduría Publica</option>
                                                                    <option value="Administración de Empresas">Administración de Empresas</option>
                                                                    <option value="Ingeniería Comercial">Ingeniería Comercial</option>
                                                                    <option value="Adminsitracion Financiera">Adminsitracion Financiera</option>
                                                                    <option value="Comercio Internacional">Comercio Internacional</option>
                                                                </select>
                                                                <select v-if="i.facultad=='Facultad de Ciencias Agrarias y Naturales'" name="Carrera"  class="form-control">
                                                                    <option value="Ingeniería agronómica (Menciones: Fitotecnia,  Ganadería, Agronegocios  y Riegos y Suelos)">Ingeniería agronómica (Menciones: Fitotecnia,  Ganadería, Agronegocios  y Riegos y Suelos)</option>
                                                                    <option value="Ingeniería en Zootécnica y Bienestar Animal">Ingeniería en Zootécnica y Bienestar Animal</option>
                                                                    <option value="Ingeniería en Producción Agraria">Ingeniería en Producción Agraria</option>
                                                                    <option value="Ingeniería en Recursos Naturales Agroambiental">Ingeniería en Recursos Naturales Agroambiental</option>
                                                                    <option value="Medicina Veterinaria y Zootécnia (Challapata)">Medicina Veterinaria y Zootécnia (Challapata)</option>
                                                                    <option value="Ingeniería Agroindustrial">Ingeniería Agroindustrial</option>
                                                                </select>
                                                                <select v-if="i.facultad=='Facultad Técnica'" name="Carrera"  class="form-control">
                                                                    <option value="Construcciones Civiles">Construcciones Civiles</option>
                                                                    <option value="Electricidad Industrial">Electricidad Industrial</option>
                                                                    <option value="Mecanica Automotriz">Mecanica Automotriz</option>
                                                                    <option value="Mecanica Industrial">Mecanica Industrial</option>
                                                                    <option value="Quimica Industrial">Quimica Industrial</option>
                                                                    <option value="Mantenimiento de Equipo Pesado">Mantenimiento de Equipo Pesado</option>
                                                                    <option value="Electromecanica">Electromecanica</option>
                                                                </select>
                                                                <select v-if="i.facultad=='Facultad de Arquitectura y Urbanismo'" name="Carrera"  class="form-control">
                                                                    <option value="Arquitectura y Urbanismo">Arquitectura y Urbanismo</option>
                                                                </select>
                                                                <select v-if="i.facultad=='Facultad de Ciencias de la Salud'" name="Carrera"  class="form-control">
                                                                    <option value="Enfermería Técnico">Enfermería Técnico</option>
                                                                    <option value="Odontología">Odontología</option>
                                                                    <option value="Medicina">Medicina</option>
                                                                    <option value="PATEI">PATEI</option>
                                                                    <option value="Enfermería">Enfermería</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <button type="button" @click="add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                                                <button type="button" @click="remove(index)" v-if="index!=0" class="btn btn-danger btn-sm"><i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label >2. DATOS DEL GRUPO FAMILIAR (INCLUYENDO AL POSTULANTE)</label>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">Nombre Completo</th>
                                                            <th scope="col">Parentesco</th>
                                                            <th scope="col">Fecha nacimeinto</th>
                                                            <th scope="col">Lugar nacimiento</th>
                                                            <th scope="col">Sexo</th>
                                                            <th scope="col">Estadocivil</th>
                                                            <th scope="col">Grado instruccion</th>
                                                            <th>Lugar recidencia</th>
                                                            <th>Vivienda</th>
                                                            <th>Servicio basico</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr v-for="(i,index) in hermanos" :key="index">
                                                            <td><input type="text" v-model="i.nombre" class="form-control" placeholder="Nombre"></td>
                                                            <td>
                                                                <select class="form-control" >
                                                                    <option value="Padre">Padre</option>
                                                                    <option value="Madre">Madre</option>
                                                                    <option value="Postulante">Postulante</option>
                                                                    <option value="Hermano">Hermano</option>
                                                                    <option value="Hermana">Hermana</option>
                                                                    <option value="Padrastro">Padrastro</option>
                                                                    <option value="Madrastra">Madrastra</option>
                                                                    <option value="hermanastro">hermanastro</option>
                                                                    <option value="hermanastra">hermanastra</option>
                                                                </select>
                                                            </td>
                                                            <td><input type="date" v-model="i.nombre" class="form-control" placeholder="Fechanacimeinto"></td>
                                                            <td><input type="text" v-model="i.lugar" class="form-control" placeholder="lugar"></td>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"  v-model="i.postulante"  value="NO" >
                                                                    <label class="form-check-label" >
                                                                        Masculino
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"  v-model="i.postulante" value="SI">
                                                                    <label class="form-check-label" >
                                                                        Femenino
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <select name="Facultad"  v-model="i.facultad" class="form-control">
                                                                    <option value="Casado(a)">Casado(a)</option>
                                                                    <option value="Divorciado">Divorciado</option>
                                                                    <option value="viudo (a)">viudo (a)</option>
                                                                    <option value="concubino(a)">concubino(a)</option>
                                                                    <option value="Soltero(a)">Soltero(a)</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="Facultad"  v-model="i.facultad" class="form-control">
                                                                    <option value="S/E">S/E</option>
                                                                    <option value="Pri">Pri</option>
                                                                    <option value="Sec">Sec</option>
                                                                    <option value="Tec">Tec</option>
                                                                    <option value="Sup">Sup</option>
                                                                </select>
                                                            </td>
                                                            <td><input type="text" v-model="i.lugar" class="form-control" placeholder="recidencia"></td>
                                                            <td>
                                                                <select name="Facultad"  v-model="i.facultad" class="form-control">
                                                                    <option value="Propio">Propio</option>
                                                                    <option value="Alquiler">Alquiler</option>
                                                                    <option value="Anticr">Anticr</option>
                                                                    <option value="Cedido">Cedido</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="Facultad"  v-model="i.facultad" class="form-control">
                                                                    <option value="Luz">Luz</option>
                                                                    <option value="Agua">Agua</option>
                                                                    <option value="Teléf">Teléf</option>
                                                                    <option value="Alcant.">Alcant.</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <button type="button" @click="add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                                                <button type="button" @click="remove(index)" v-if="index!=0" class="btn btn-danger btn-sm"><i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label >3. INFORMACIÓN  ECONÓMICA</label>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">APELLIDOS Y NOMBRES DE QUIENES APORTAN ECONÓMICAMENTE AL GRUPO FAMILIAR DONDE VIVE EL POSTULANTE</th>
                                                            <th scope="col">PARENTESCO</th>
                                                            <th scope="col">OCUPACIÓN U OCUPACIONES</th>
                                                            <th scope="col">ACTIVIDAD ECONÓMICA</th>
                                                            <th scope="col">INGRESO MENSUAL (Bs.)</th>
                                                            <th scope="col">LUGAR DE TRABAJO (DIRECCIÓN ACTUAL)</th>
                                                            <th scope="col">OPCIONES</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr v-for="(i,index) in hermanos" :key="index">
                                                            <td><input type="text" v-model="i.nombre" class="form-control" placeholder="Nombre"></td>
                                                            <td>
                                                                <select class="form-control" >
                                                                    <option value="Padre">Padre</option>
                                                                    <option value="Madre">Madre</option>
                                                                    <option value="Postulante">Postulante</option>
                                                                    <option value="Hermano">Hermano</option>
                                                                    <option value="Hermana">Hermana</option>
                                                                    <option value="Padrastro">Padrastro</option>
                                                                    <option value="Madrastra">Madrastra</option>
                                                                    <option value="hermanastro">hermanastro</option>
                                                                    <option value="hermanastra">hermanastra</option>
                                                                </select>
                                                            </td>
                                                            <td><input type="text" v-model="i.lugar" class="form-control" placeholder="Ocupacion Economica"></td>
                                                            <td><input type="text" v-model="i.lugar" class="form-control" placeholder="Actividad economica"></td>
                                                            <td><input type="number" v-model="i.lugar" class="form-control" placeholder="Ingreso mensual"></td>
                                                            <td><input type="text" v-model="i.lugar" class="form-control" placeholder="lugar de trabajo"></td>
                                                            <td>
                                                                <button type="button" @click="add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                                                <button type="button" @click="remove(index)" v-if="index!=0" class="btn btn-danger btn-sm"><i class="fa fa-minus"></i></button>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label >OTROS INGRESOS ECONÓMICOS CON QUE CUENTA LA FAMILIA (GRUPO FAMILIAR, INCLUYE INGRESOS DEL POSTULANTE)</label>
                                                <textarea v-model="dato.otros" class="form-control" ></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label >OBSERVACIONES SOBRE DATOS PROPORCIONADOS EN LA FICHA SOCIAL:</label>
                                                <textarea v-model="dato.observacion" class="form-control" ></textarea>
                                            </div>
                                        </div>
                                        <h5>III. PAPELETA DE PAGO DE LA MATRICULA UNIVERSITARIA</h5>
                                        <small>
                                            Se refiere a la Matricula Universitaria correspondiente a la gestion academica en curso. Se exigira  el docuemento original y una fotocopia  simple
                                            Entrega en :Departamento de Asuntos Estudiantiles
                                        </small>
                                        <input type="file" class="form-control" @change="getImage2">
                                        <h5>IV. HOJA DE CROQUIS DE LA VIVIENDA</h5>
                                        <small>
                                            El postulante debera identificar la avenidad, calle, pasaje, calles adyacentes donde esta ubicada su vivienda indicando ademas el numero de la vivienda, nombre del propietario. se debe refernciar la ubicacion con parques y plazas, paradas de transporte publico, reten policial, hospital, colegio, etc.
                                        </small>
                                        <input type="file" class="form-control" @change="getImage3">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="Direccion">Direccion*</label>
                                                <input type="text" class="form-control" id="Direccion" placeholder="Direccion" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Numero">Numero*</label>
                                                <input type="text" class="form-control" id="Numero" placeholder="Numero" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Zona">Zona*</label>
                                                <input type="text" class="form-control" id="Zona" placeholder="Zona" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Barrio">Barrio*</label>
                                                <input type="text" class="form-control" id="Barrio" placeholder="Barrio" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Barrio">Propietario de la vivienda*</label>
                                                <input type="text" class="form-control" id="Barrio" placeholder="Vivienda" required>
                                            </div>
                                        </div>
                                        <h5>V. CEDULA DE IDENTIDAD VIGENTE DEL POSTULANTE</h5>
                                        <small>
                                            Original y una fotocopia simple
                                        </small>
                                        <input type="file" class="form-control" @change="getImage4">
                                        <h5>VI. LIBRETA DE CALIFICACIONES DEL SEXTO CURSO DE SECUNDARIA</h5>
                                        <small>
                                            Original y una fotocopia simple. en caso de no contar con la libreta, se puede presentar uno de los siguientes documentos: Certificado de conclusion de Estudio expedido por el colegio, Certificado de Estudio o certificacion del colegio (original y una  fotocopia simple).
                                        </small>
                                        <input type="file" class="form-control" @change="getImage5">
                                        <h5>VII. PAPELETA DE PAGO DEL ULTIMO MES DE UNO O AMBOS PROGENITORES</h5>
                                        <small>
                                            Original y una fotocopia simple  y cuando  uno o ambos progenitores sean trabajadores asalariados de alguna institucion.
                                        </small>
                                        <input type="file" class="form-control" @change="getImage6">
                                        <h5>VIII. CERTIFICADO DE LA ACTIVIDAD LABORAL</h5>
                                        <small>
                                            En caso de progenitores no asalariados. las certificaciones vaalidas son las siguientes: Agricultor (Certificado del corregir y/o autoridad originaria; Comerciante( Certificacion de su Sindicato o Asociacion, Padron Municipal, o Permiso de Funcionamiento o NIT); Chofer (Certificacion de su Sindicato, Asociacion u otro documento); Otra Actividad Independiente (Certificacon de su Junta Vecinal).
                                        </small>
                                        <input type="file" class="form-control" @change="getImage7">
                                        <h5>IX. CEDULA DE IDENTIDAD VIGENTE DE LOS PADRES O APODERADOS</h5>
                                        <small>
                                            Original y fotocopia simple.
                                        </small>
                                        <input type="file" class="form-control" @change="getImage8">
                                        <h5>X. LIBRETA DE FAMILIA</h5>
                                        <small>
                                            Original y fotocopia simple. en caso de no contar con la misma Certificados de nacimiento originales y fotocopia aimple vigentes y validos de los hermanos menores de 25 años, incluido el del postulante
                                        </small>
                                        <input type="file" class="form-control" @change="getImage9">
                                        <h5>XI. CERTIFICADO DE DEFUNCION</h5>
                                        <small>
                                            Original y fotocopia simple, en caso de orfandad.
                                        </small>
                                        <input type="file" class="form-control" @change="getImage10">
                                        <h5>XII. SENTENCIA DE DIVORCIO</h5>
                                        <small>
                                            Fotocopia simple en caso de orfandad. Son documentos equivalentes a una fotocopia legalizada de la demanda de Divorcio.
                                        </small>
                                        <input type="file" class="form-control" @change="getImage11">
                                        <h5>XIV. DENUNCIA ANTE EL MINISTERIO PUBLICO</h5>
                                        <small>
                                            En caso de abandono de uno o ambos apadres. o algun otro documento que demuestre fehacientemente esta situacion.
                                        </small>
                                        <input type="file" class="form-control" @change="getImage12">
                                        <h5>XV. CROQUIS DE LA VIVIENDA DE LA FAMILIA</h5>
                                        <small>
                                            es un requisito para los postulantes que provienen del interior del pais (ciudades y poblaciones rurales) Deben adjuntar ademas facturas de consumo de luz o agua del lugar de procedencia cuando corresponda.
                                        </small>
                                        <input type="file" class="form-control" @change="getImage13">
                                        <div style="height: 500px; width: 100%">
<!--                                            <div style="height: 200px ;">-->
<!--                                                <p>First marker is placed at {{ withPopup.lat }}, {{ withPopup.lng }}</p>-->
<!--                                                <p>Center is at {{ currentCenter }} and the zoom is: {{ currentZoom }}</p>-->
<!--                                                <button @click="showLongText">-->
<!--                                                    Toggle long popup-->
<!--                                                </button>-->
<!--                                                <button @click="showMap = !showMap">-->
<!--                                                    Toggle map-->
<!--                                                </button>-->
<!--                                            </div>-->


                                            <l-map
                                                v-if="showMap"
                                                :zoom="zoom"
                                                :center="center"
                                                :options="mapOptions"
                                                style="height: 100%"
                                                @update:center="centerUpdate"
                                                @update:zoom="zoomUpdate"
                                                @click="addMarker"
                                            >
                                                <l-tile-layer
                                                    :url="url"
                                                    :attribution="attribution"
                                                />
                                                <l-marker  :lat-lng="marker" ></l-marker>
                                                <!--                                                <l-marker :lat-lng="withPopup">-->
<!--                                                    <l-popup>-->
<!--                                                        <div @click="innerClick">-->
<!--                                                            I am a popup-->
<!--                                                            <p v-show="showParagraph">-->
<!--                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque-->
<!--                                                                sed pretium nisl, ut sagittis sapien. Sed vel sollicitudin nisi.-->
<!--                                                                Donec finibus semper metus id malesuada.-->
<!--                                                            </p>-->
<!--                                                        </div>-->
<!--                                                    </l-popup>-->
<!--                                                </l-marker>-->
<!--                                                <l-marker :lat-lng="withTooltip">-->
<!--                                                    <l-tooltip :options="{ permanent: true, interactive: true }">-->
<!--                                                        <div @click="innerClick">-->
<!--                                                            I am a tooltip-->
<!--                                                            <p v-show="showParagraph">-->
<!--                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque-->
<!--                                                                sed pretium nisl, ut sagittis sapien. Sed vel sollicitudin nisi.-->
<!--                                                                Donec finibus semper metus id malesuada.-->
<!--                                                            </p>-->
<!--                                                        </div>-->
<!--                                                    </l-tooltip>-->
<!--                                                </l-marker>-->
                                            </l-map>
                                        </div>
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
    import  axios from "axios";
    import { latLng } from "leaflet";
    import { LMap, LTileLayer, LMarker, LPopup, LTooltip } from "vue2-leaflet";
    export default {
        mounted() {
            console.log('Component mounted.')
        },
    components: {
        LMap,
            LTileLayer,
            LMarker,
            LPopup,
            LTooltip
    },
        data() {
            return {
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
                hermanos:[{nombre:'aa',becario:'NO',postulante:'NO'}],
                // hermanos:[{nombre:'',parentesco:'NO',fechanac:'NO'}],
                zoom: 13,
                center: latLng(-17.973813, -67.115095),
                url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                attribution:
                    '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
                marker: latLng(0, 0),
                withTooltip: latLng(47.41422, -1.250482),
                currentZoom: 11.5,
                currentCenter: latLng(47.41322, -1.219482),
                showParagraph: false,
                mapOptions: {
                    zoomSnap: 0.5
                },
                showMap: true
            };
        },
        methods: {
            getImage(event){
                this.valor = event.target.files[0];
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
            getImage6(event){
                this.valor6 = event.target.files[0];
            },
            getImage7(event){
                this.valor7 = event.target.files[0];
            },
            getImage8(event){
                this.valor8 = event.target.files[0];
            },
            getImage9(event){
                this.valor9 = event.target.files[0];
            },
            getImage10(event){
                this.valor10 = event.target.files[0];
            },
            getImage11(event){
                this.valor11 = event.target.files[0];
            },
            getImage12(event){
                this.valor12 = event.target.files[0];
            },
            getImage13(event){
                this.valor13 = event.target.files[0];
            },

            updateAvatar(){
                //Creamos el formData
                var data = new  FormData();
                //Añadimos la imagen seleccionada
                // data.append('valor', this.valor);
                // data.append('valor2', this.valor2);
                // data.append('valor3', this.valor3);
                // data.append('valor4', this.valor4);
                // data.append('valor5', this.valor5);
                // data.append('valor6', this.valor6);
                // data.append('valor7', this.valor7);
                // data.append('valor8', this.valor8);
                // data.append('valor9', this.valor9);
                // data.append('valor10', this.valor10);
                // data.append('valor11', this.valor11);
                // data.append('valor12', this.valor12);
                // data.append('valor13', this.valor13);
                data.append('hermanos', this.hermanos);
                axios.post('/ficha',data).then(res => {
                        console.log(res.data);
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
                console.log(this.hermanos);
            },
            remove(i){
                this.hermanos.splice(i,1);
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












