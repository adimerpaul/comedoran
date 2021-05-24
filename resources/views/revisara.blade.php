@extends('layouts.app2')
@section('content')
    <div class="container">
        <div class="row " >
            <div class="col-md-12">
                <h3 class="bg-dark text-white text-center"> <i class="fa fa-user"></i> Antiguos</h3>
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
                                            data-renovacion="{{$row->renovacion}}"
                                            data-pago="{{$row->pago}}"
                                            data-actualizacion="{{$row->actualizacion}}"
                                            data-certificacion="{{$row->certificacion}}"
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
                                    <a href="" target="_blank" id="renovacion"><i class="fa fa-file-pdf"></i> renovacion</a><br>
                                    <a href="" target="_blank" id="pago"><i class="fa fa-file-pdf"></i> pago</a><br>
                                    <a href="" target="_blank" id="actualizacion"><i class="fa fa-file-pdf"></i> actualizacion</a><br>
                                    <a href="" target="_blank" id="certificacion"><i class="fa fa-file-pdf"></i> certificacion</a><br>
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
                $('#renovacion').attr('href',button.data('renovacion'))
                $('#pago').attr('href',button.data('pago'))
                $('#actualizacion').attr('href',button.data('actualizacion'))
                $('#certificacion').attr('href',button.data('certificacion'))
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
