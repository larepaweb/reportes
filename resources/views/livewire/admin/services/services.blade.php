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

                <div class="col-12 alert alert-secondary" role="alert">
                    <span class="text-white"><strong>Las opciones de Crear, Editar y Ver no son funcionales!</strong> este solo es el maquetado visual de la aplicación</span>
                </div>
            </div>

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
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">2</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">22/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Terminado</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-servicio')}}" class="mx-3" data-bs-toggle="tooltip"
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
                                                <a href=""   data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">3</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">24/10/2021</p>
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
                                            <td class="text-center">
                                                <a href="{{route('editar-servicio')}}" class="mx-3" data-bs-toggle="tooltip"
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
                                                <a href=""   data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">4</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">24/10/2021</p>
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
                                            <td class="text-center">
                                                <a href="{{route('editar-servicio')}}" class="mx-3" data-bs-toggle="tooltip"
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
                                                <a href=""   data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                             <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">4</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">24/10/2021</p>
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
                                            <td class="text-center">
                                                <a href="{{route('editar-servicio')}}" class="mx-3" data-bs-toggle="tooltip"
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

                                                <a href=""  data-bs-toggle="tooltip"
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
                    <h6 class="mb-0" style="float:right">Correlativo Nro. XXXX</h6>

                </div>
                <div class="card-body pt-4 p-3">

                    @php
                        $showSuccesNotification = false;
                    @endphp
                    @if ($showSuccesNotification)
                        <div wire:model="showSuccesNotification"
                            class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white">{{ __('Your profile information have been successfuly saved!') }}</span>
                            <button  type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endif

                    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">

                        <div class="row" >

                          <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Tarea relacionada') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <select wire:model="user.name" class="form-control" >
                                            <option selected>Seleccione una tarea</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>


                        </div>

                        <div class="row" >
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Tecnico') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <select wire:model="user.name" class="form-control" >
                                            <option selected>Seleccione un tecnico</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Cliente') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <select wire:model="user.name" class="form-control" >
                                            <option selected>Seleccione un cliente</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
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
                                    <label for="user-name" class="form-control-label">{{ __('Fecha') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input type="date" value="<?php echo $today; ?>"  class="form-control" name="" id="">

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="about">{{ 'Descripción del servicio' }}</label>
                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                <textarea wire:model="user.about" class="form-control" id="about" rows="3"
                                    placeholder="Especifique los detalles del servicio"></textarea>
                            </div>
                            @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="row" >
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Visita') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <select wire:model="user.name" class="form-control" >
                                            <option selected>Seleccione tipo de visita</option>
                                            <option value="1">Unica</option>
                                            <option value="2">Complementaria</option>
                                            <option value="3">Garantia</option>
                                        </select>

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>



                              <?php $date = date('H:i');

                              ?>

                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Hora entrada') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input type="time" class="form-control" name="" id="" value="<?= $date ?>">

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                                <?php   $date2 = date('H:i');

                              ?>
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Hora Salida') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input type="time" class="form-control" name="" id="" value="<?= $date2 ?>">

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row" >
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Imagen de servicio completado') }}</label>
                                    <div class="file-loading  @error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input type="file" name="read_img" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <textarea class="form-control" name="" id="" placeholder="Agregar firma digital"></textarea>

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" onchange='ShowToolsInput(this);' value="0" id="fcustomCheck1" >
                            <label class="custom-control-label" for="customCheck1" >Pendientes</label>
                            </div>
                        </div>

                        <div class="form-group" id="tools" hidden="hidden">
                            <label for="about">{{ 'Listado de herramientas' }}</label>
                            <div class="@error('user.about')border border-danger rounded-3 @enderror" >
                                <textarea wire:model="user.about" class="form-control" id="about" rows="3"
                                    placeholder="Descripción del pendiente"></textarea>
                            </div>
                            @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Crear Tarea' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>





      </div>

    </div>
 </main>


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
        dom: 'Bfrtip',
        buttons: [

        ],
        bInfo: false,
        "responsive": true,


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

        initComplete: function () {

            this.api().columns([2, 4]).every( function () {

                var column = this;
                var select = $('<br><select><option value=""></option></select>')
                    .appendTo( $(column.header()) )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+j+'">'+d+'</option>' )
                } );
            } );
        }




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



