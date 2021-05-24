@extends('layouts.app2')
@section('content')
    <div class="container">
        <div class="row " >
            <div class="col-md-12">
                <h3 class="bg-success text-white text-center"> <i class="fa fa-user"></i> Nuevos</h3>
                <div class="table-responsive">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Facultad</th>
                            <th>Carrera</th>
                            <th>Celular</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datos as $row)
                            <tr>
                                <td>{{$row->ficha->paterno}} {{$row->ficha->materno}} {{$row->ficha->nombres}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->ficha->facultad}}</td>
                                <td>{{$row->ficha->carrera}}</td>
                                <td>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{$row->ficha->celular}}&text=Le%20falta%20el%20documento"><i class="fa fa-phone"></i> {{$row->ficha->celular}}</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                            data-valor="{{$row->valor}}"
                                            data-nombre="{{$row->ficha->paterno}} {{$row->ficha->materno}} {{$row->ficha->nombres}}"
                                            data-matricula="{{$row->matricula}}"
                                            data-vivienda="{{$row->vivienda}}"
                                            data-ci="{{$row->ci}}"
                                            data-libreta="{{$row->libreta}}"
                                            data-pago="{{$row->pago}}"
                                            data-actividad="{{$row->actividad}}"
                                            data-ciapoderados="{{$row->ciapoderados}}"
                                            data-familiar="{{$row->familiar}}"
                                            data-defuncion="{{$row->defuncion}}"
                                            data-divocio="{{$row->divocio}}"
                                            data-denuncia="{{$row->denuncia}}"
                                            data-viviendafamiliar="{{$row->viviendafamiliar}}"
                                            data-semestre="{{$row->semestre}}"
                                            data-target="#calificar">
                                        <i class="fa fa-file-archive"></i> Documentos
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="modal fade" id="calificar" tabindex="-1" role="dialog" aria-labelledby="calificarLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-success text-center text-white">
                                    <h5 class="modal-title" id="calificarLabel"> Calificar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <a href="" target="_blank" id="valor"><i class="fa fa-file-pdf"></i> valor</a><br>
                                    <a href="" target="_blank" id="nombre"><i class="fa fa-file-pdf"></i> nombre</a><br>
                                    <a href="" target="_blank" id="matricula"><i class="fa fa-file-pdf"></i> matricula</a><br>
                                    <a href="" target="_blank" id="vivienda"><i class="fa fa-file-pdf"></i> vivienda</a><br>
                                    <a href="" target="_blank" id="ci"><i class="fa fa-file-pdf"></i> ci</a><br>
                                    <a href="" target="_blank" id="libreta"><i class="fa fa-file-pdf"></i> libreta</a><br>
                                    <a href="" target="_blank" id="pago"><i class="fa fa-file-pdf"></i> pago</a><br>
                                    <a href="" target="_blank" id="actividad"><i class="fa fa-file-pdf"></i> actividad</a><br>
                                    <a href="" target="_blank" id="ciapoderados"><i class="fa fa-file-pdf"></i> ciapoderados</a><br>
                                    <a href="" target="_blank" id="familiar"><i class="fa fa-file-pdf"></i> familiar</a><br>
                                    <a href="" target="_blank" id="defuncion"><i class="fa fa-file-pdf"></i> defuncion</a><br>
                                    <a href="" target="_blank" id="divocio"><i class="fa fa-file-pdf"></i> divocio</a><br>
                                    <a href="" target="_blank" id="denuncia"><i class="fa fa-file-pdf"></i> denuncia</a><br>
                                    <a href="" target="_blank" id="viviendafamiliar"><i class="fa fa-file-pdf"></i> viviendafamiliar</a><br>
                                    <a href="" target="_blank" id="semestre"><i class="fa fa-file-pdf"></i> semestre</a><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
{{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload=function (){
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
            $('#calificar').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var nombre = button.data('nombre')
                    $('#valor').attr('href',button.data('valor'))
                    $('#nombre').attr('href',button.data('nombre'))
                    $('#matricula').attr('href',button.data('matricula'))
                    $('#vivienda').attr('href',button.data('vivienda'))
                    $('#ci').attr('href',button.data('ci'))
                    $('#libreta').attr('href',button.data('libreta'))
                    $('#pago').attr('href',button.data('pago'))
                    $('#actividad').attr('href',button.data('actividad'))
                    $('#ciapoderados').attr('href',button.data('ciapoderados'))
                    $('#familiar').attr('href',button.data('familiar'))
                    $('#defuncion').attr('href',button.data('defuncion'))
                    $('#divocio').attr('href',button.data('divocio'))
                    $('#denuncia').attr('href',button.data('denuncia'))
                    $('#viviendafamiliar').attr('href',button.data('viviendafamiliar'))
                    $('#semestre').attr('href',button.data('semestre'))
                // console.log(button.data('nombre'));
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').html('<i class="fa fa-user"></i> Estudiante: ' + nombre)
                // modal.find('.modal-body input').val(nombre)
            })
        }
    </script>
@endsection
