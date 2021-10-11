<x-layouts.app>
 <main>
    <div class="container-fluid py-4">
      <div class="row">

        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active"  data-bs-toggle="tab" href="#homeTab" role="tab" aria-controls="profile" aria-selected="true">
                Listar boletas de servicio
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1"  data-bs-toggle="tab"  href="#metaTab" role="tab" aria-controls="dashboard" aria-selected="false">
                Crear boleta de servicio
                </a>
              </li>

            </ul>
        </div>

      </div>



      <div class="container-fluid py-4 tab-content">


        <div role="tabpanel" class="row mt-4  tab-pane fade in show active" id ="homeTab">

            <div class="row">

                <div class="col-12">
                    <div class="card ">
                        <div class="card-header pb-0 px-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Boletas de servicio</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div class="table-responsive p-0">


                                <table id="example4" class=" nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Técnico</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">1</p>
                                            </td>

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
                                            <td class="text-center"> <a href="{{route('editar-servicio')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-servicio')}}"  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar boleta">
                                                    <i class="far fa-envelope text-secondary "></i>
                                                </a>

                                                <a  href=""  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
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

        <div role="tabpanel" class="row mt-4  tab-pane fade" id ="metaTab">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0" style="float:left">{{ __('Detalles de boleta de servicio') }}</h6>
                    <h6 class="mb-0" style="float:right">Correlativo Nro. {{  $service_correlative }}</h6>

                </div>
                <div class="card-body pt-4 p-3">

                    <form  action="{{ route('store.services') }}" method="POST" role="form text-left" enctype="multipart/form-data">
                        @csrf

                        <div class="row" >

                          <div class="col-md-12">
                                <div class="form-group">
                                    <label for="task" class="form-control-label">{{ __('Actividad relacionada') }}</label>
                                    <div class="@error('task')border border-danger rounded-3 @enderror" id="task">
                                        <select name="task" class="form-control" >
                                            <option selected>Seleccione una tarea</option>
                                            @foreach ($tasks as $t)
                                                <option value="{{ $t->id }}">{{ $t->title  }}</option>
                                            @endforeach


                                        </select>

                                    </div>
                                    @error('task') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>


                        </div>

                        <div class="row" >
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tec" class="form-control-label">{{ __('Tecnico') }}</label>
                                    <div class="@error('tec')border border-danger rounded-3 @enderror" id="tec">
                                        <select name="tec" class="form-control" required>
                                            <option selected>Seleccione un técnico</option>
                                            @foreach ($tecs as $tec)
                                                <option value="{{ $tec->id }}">{{  $tec->profile->contact_name }}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                    @error('tec') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cli" class="form-control-label">{{ __('Cliente') }}</label>
                                    <div class="@error('cli')border border-danger rounded-3 @enderror" id="cli">
                                        <select name="cli" class="form-control" required>
                                            <option selected>Seleccione un cliente</option>
                                            @foreach ($clis as $c)
                                             <option value="{{ $c->id }}">{{ $c->profile->contact_name }}</option>

                                            @endforeach


                                        </select>

                                    </div>
                                    @error('cli') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                                    <?php

                                        $month = date('m');
                                        $day = date('d');
                                        $year = date('Y');

                                        $today = $year . '-' . $month . '-' . $day;
                                    ?>

                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="service_date" class="form-control-label">{{ __('Fecha') }}</label>
                                    <div class="@error('service_date')border border-danger rounded-3 @enderror" id="service_date">
                                        <input type="date" value="<?php echo $today; ?>"  class="form-control" name="service_date" id="service_date" required>

                                    </div>
                                    @error('service_date') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="desc">{{ 'Descripción del servicio' }}</label>
                            <div class="@error('desc')border border-danger rounded-3 @enderror">
                                <textarea name="desc" class="form-control" id="desc" rows="3"
                                    placeholder="Especifique los detalles del servicio" required></textarea>
                            </div>
                            @error('desc') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="row" >
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type_visit" class="form-control-label">{{ __('Visita') }}</label>
                                    <div class="@error('type_visit')border border-danger rounded-3 @enderror" id="type_visit">
                                        <select name="type_visit" class="form-control" required>
                                            <option selected>Seleccione tipo de visita</option>
                                            <option value="unica">Unica</option>
                                            <option value="complementaria">Complementaria</option>
                                            <option value="garantia">Garantia</option>
                                        </select>

                                    </div>
                                    @error('type_visit') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>



                              <?php $date = date('H:i');

                              ?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="in_time" class="form-control-label">{{ __('Hora entrada') }}</label>
                                    <div class="@error('in_time')border border-danger rounded-3 @enderror" id="in_time">
                                        <input type="time" class="form-control" name="in_time" id="in_time" value="<?= $date ?>" required>

                                    </div>
                                    @error('in_time') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row" >
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="read_img" class="form-control-label">{{ __('Imagenes del servicio completado') }}</label>
                                    <div class="file-loading  @error('read_img')border border-danger rounded-3 @enderror" id="read_img">
                                        <input type="file" name="read_img" multiple class="file" data-overwrite-initial="false" required>

                                    </div>
                                    @error('read_img') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                          <div class="col-md-6">
                                <div  class="form-group ">
                                    <div class="@error('signing')border border-danger rounded-3 @enderror " >


                                        <label class="" for="">Firma de aprobación:</label>
                                        <div class='js-signature'></div>


                            {{-- <br/>
                            <div id="sig" ></div>
                            <br/>
                            <button id="clear" class="btn btn-danger btn-sm">Limpiar firma</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea> --}}

                                    </div>
                                    @error('signing') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" onchange='ShowToolsInput(this);' value="0" id="fcustomCheck1">
                            <label class="custom-control-label" for="customCheck1" >Pendientes</label>
                            </div>
                        </div>

                        <div class="form-group" id="tools" hidden="hidden">
                            <label for="pendientes">{{ 'Listado de pendientes' }}</label>
                            <div class="@error('pendientes')border border-danger rounded-3 @enderror " >
                                <textarea name="pendientes" class="form-control" id="pendientes" rows="3"
                                    placeholder="Descripción del pendiente"></textarea>
                            </div>
                            @error('pendientes') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Crear B. Servicio' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>





      </div>

    </div>
 </main>
</x-layouts.app>

 <script>


    function ShowToolsInput(){



    if (!document.getElementById('tools').hidden){

        document.getElementById('tools').hidden = "hidden";

    }else {

        document.getElementById('tools').hidden = "";

    }


    }

    $(document).ready(function() {
        $('#example4').DataTable( {
            "processing": true,
            "serverSide": false,
            dom: 'Bfrtip',
            buttons: [

            ],
            bInfo: false,
            "responsive": true,
            "ajax": "{{ route('datatable.getServices') }}",
            "columns": [

                          {data: 'id', name: 'id'},
                          {data: 'fecha', name: 'fecha'},
                          {data: 'cliente', name: 'cliente'},
                          {data: 'tecnico', name: 'tecnico'},
                          {data: 'status', name: 'status'},
                          { data: null,
                            render: function (data, type, row) {
                               return '<td class="text-center"><a href="/editservice/'+ row.id + '" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar"><i class="fas fa-user-edit text-secondary"></i></a><a href="/deleteservice/'+ row.id + '" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Eliminar"><i class="far fa-trash-alt text-secondary "></i></a></td>'
                               }
                          },
                       ],
            "columnDefs": [
                { "orderable": false, "targets": 5 }
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

    function confirmar(){
        Swal
        .fire({

            text: "¿Desea reenviar la Boleta de Servicio?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: "Sí",
            cancelButtonText: "Cancelar",
        })
        .then(resultado => {
            if (resultado.value) {
                // Hicieron click en "Sí"
                console.log("*se elimina la venta*");
            } else {
                // Dijeron que no
                console.log("*NO se elimina la venta*");
            }
        });
    }




 </script>



