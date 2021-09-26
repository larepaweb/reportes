<x-layouts.app>
<main>
    <div class="container-fluid py-4">




      <div class="row">

        {{-- //formulario --}}
        <div class="col-6  mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">{{ __('Crear tarea') }}</h6>
                </div>
                <div class="card-body pt-4 p-3">

                    <form action="{{ route('store.tasks') }}" method="POST" role="form text-left">
                        @csrf
                                    <?php

                                        $month = date('m');
                                        $day = date('d');
                                        $year = date('Y');

                                        $today = $year . '-' . $month . '-' . $day;
                                    ?>

                        <div class="row" >
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="activity_date" class="form-control-label">{{ __('Fecha de actividad') }}</label>
                                    <div class="@error('activity_date')border border-danger rounded-3 @enderror" id="activity_date">
                                        <input value="<?php echo $today; ?>"  type="date" class="form-control" name="activity_date" id="activity_date">
                                    </div>
                                    @error('activity_date') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="activity_customer" class="form-control-label">{{ __('Cliente') }}</label>
                                    <div class="@error('activity_customer')border border-danger rounded-3 @enderror" id="activity_customer">
                                        <select name="activity_customer" class="form-control" >
                                            <option selected>Seleccione un cliente</option>
                                            @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->profile->contact_name }}</option>

                                            @endforeach



                                        </select>

                                    </div>
                                    @error('activity_customer') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="activity_tec" class="form-control-label">{{ __('Tecnico') }}</label>
                                    <div class="@error('activity_tec')border border-danger rounded-3 @enderror" id="activity_tec">
                                        <select name="activity_tec" class="form-control" >
                                            <option selected>Seleccione un tecnico</option>
                                            @foreach ($technic as $t)
                                                <option value="{{ $t->id }}">{{ $t->profile->contact_name  }}</option>

                                            @endforeach
                                        </select>

                                    </div>
                                    @error('activity_tec') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="activity_desc">{{ 'Titulo' }}</label>
                            <div class="@error('title')border border-danger rounded-3 @enderror">
                                <input type="text" name="title" class="form-control" id="title" rows="3"
                                    placeholder="Especifique un titulo de la actividad">

                            </div>
                            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="activity_desc">{{ 'Descripción del servicio' }}</label>
                            <div class="@error('activity_desc')border border-danger rounded-3 @enderror">
                                <textarea name="activity_desc" class="form-control" id="activity_desc" rows="3"
                                    placeholder="Especifique los detalles del servicio"></textarea>
                            </div>
                            @error('activity_desc') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="activity_comment">{{ 'Comentarios' }}</label>
                            <div class="@error('activity_comment')border border-danger rounded-3 @enderror">
                                <textarea name="activity_comment" class="form-control" id="activity_comment" rows="3"
                                    placeholder="agregue alguna observación"></textarea>
                            </div>
                            @error('activity_comment') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>



                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Crear Tarea' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        {{-- //lista --}}
        <div class="col-6  mt-4" >

            <div class="row">

                <div class="col-12">
                    <div class="card ">

                        <div class="card-body pt-4 p-3">
                            <div class="table-responsive p-0">


                                <table id="tasks" class=" nowrap" style="width:100%">
                                    <thead>
                                        <tr>

                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Técnico</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>


                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">17/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Pendiente</p>
                                            </td>
                                            <td class="text-center"> <a href="{{route('editar-tarea')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-tarea')}}"  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>

                                                <a  href=""  class="mx-3"  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
                                            </td>
                                        </tr> --}}


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







      </div>

    </div>
 </main>
</x-layouts.app>

 <script>

    $(document).ready(function() {
        $('#tasks').DataTable( {
            "processing": true,
            "serverSide": false,
            dom: 'Bfrtip',
            buttons: [],
            bInfo: false,
            "responsive": true,
            "searching": false,
            "ajax": "{{ route('datatable.getTasks') }}",
            "columns": [

                          {data: 'activity_date', name: 'activity_date'},
                          {data: 'customer', name: 'customer'},
                          {data: 'tec', name: 'tec'},
                          {data: 'status', name: 'status'},
                          { data: null,
                            render: function (data, type, row) {
                               return '<td class="text-center"><a href="/edittask/'+ row.id + '" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar"><i class="fas fa-user-edit text-secondary"></i></a><a href="/task/'+ row.id + '" data-bs-toggle="tooltip" data-bs-original-title="Ver"><i class="cursor-pointer far fa-eye text-secondary"></i></a><a href="/deletetask/'+ row.id + '" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Eliminar"><i class="far fa-trash-alt text-secondary "></i></a></td>'
                               }
                          },
                       ],
            "columnDefs": [
                { "orderable": false, "targets": 4 }
            ],
            "language": {
                        "sProcessing":    "Procesando...",
                        "sLengthMenu":    "Mostrar _MENU_ registros",
                        "sZeroRecords":   "No se encontraron resultados",
                        "sEmptyTable":    "Ningún dato disponible en esta tabla",
                        "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":   "",
                        "sSearch":        "{{ __('Receipt No.') }}",
                        "sUrl":           "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "search": "_INPUT_",
                        "searchPlaceholder": "{{ __('Buscar') }}",
                        "oPaginate": {
                                    "sFirst":    "Primero",
                                    "sLast":    "Último",
                                    "sNext":    "Siguiente",
                                    "sPrevious": "Anterior"
                                    },
                        "oAria": {
                                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                }
            },

        } );
    } );

 </script>


