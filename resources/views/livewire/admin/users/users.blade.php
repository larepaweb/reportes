 <main>
    <div class="container-fluid py-4">
      <div class="row">

        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active"  data-bs-toggle="tab" href="#crear" role="tab" aria-controls="crear" aria-selected="true">
                Crear Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1"  data-bs-toggle="tab" href="#usuarios" role="tab" aria-controls="usuario" aria-selected="false">
                Listar Usuarios Internos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1"  data-bs-toggle="tab"  href="#clientes" role="tab" aria-controls="clientes" aria-selected="false">
                Listar Clientes
                </a>
              </li>

            </ul>
        </div>

      </div>



      <div class="container-fluid py-4 tab-content">


        <div role="tabpanel" class="row mt-4  tab-pane fade in show active" id ="crear">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0" style="float:left">{{ __('Crear usuario') }}</h6>
                    <h6 class="mb-0" style="float:right">
                        <a id="more_items" href="{{ route('importForm.users') }}" class="btn bg-gradient-dark btn-md mt-2">{{ 'Importar Usuarios' }}</a>
                    </h6>

                </div>

                <div class="card-body pt-4 p-3">


                    <form action="{{ route( 'store.profile' )}}" method="POST" role="form text-left">
                        @csrf
                        <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userrole" class="form-control-label">{{ __('Rol') }}</label>
                                    <div class="@error('userrole')border border-danger rounded-3 @enderror" >
                                        <select onchange="esCliente()" id="userrole" name="userrole" class="form-control" >


                                            @switch( old('userrole') )
                                                @case("admin")
                                                    <option value="admin">Administrador</option>
                                                    <option value="tecnico">Técnico</option>
                                                    <option value="cliente">Cliente</option>
                                                    @break

                                                @case("tecnico")
                                                    <option value="tecnico">Técnico</option>
                                                     <option value="admin">Administrador</option>

                                            <option value="cliente">Cliente</option>
                                                    @break

                                                @case("cliente")
                                                    <option value="cliente">Cliente</option>
                                                     <option value="admin">Administrador</option>
                                            <option value="tecnico">Técnico</option>

                                                    @break

                                                @default
                                                    <option value="cliente">Cliente</option>
                                                    <option value="admin">Administrador</option>
                                                    <option value="tecnico">Técnico</option>
                                            @endswitch

                                        </select>

                                    </div>
                                    @error('userrole') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="form-control-label">{{ __('Nombre') }}</label>
                                    <div class="@error('username')border border-danger rounded-3 @enderror">

                                        <input class="form-control" type="text" placeholder="" name="username" id="username" value="{{ old('username') }}" >
                                    </div>
                                    @error('username') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="useremail" class="form-control-label">{{ __('Correo') }}</label>
                                    <div class="@error('useremail') border border-danger rounded-3 @enderror">
                                        <input id="useremail"  name="useremail" class="form-control" type="email" placeholder="" value="{{ old('useremail') }}" >
                                    </div>
                                    @error('useremail') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-6" id="hid1" >
                                <div class="form-group">
                                    <label for="userphone" class="form-control-label">{{ __('Teléfono') }}</label>
                                    <div class="@error('userphone')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="tel"
                                            placeholder="" id="userphone" name="userphone" value="{{ old('userphone') }}" >
                                    </div>
                                    @error('userphone') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row"  id="hid2" >
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usernit" class="form-control-label">{{ __('NIT') }}</label>
                                    <div class="@error('usernit') border border-danger rounded-3 @enderror">
                                        <input  class="form-control" type="text"
                                             id="usernit" name="usernit" value="{{ old('usernit') }}" >
                                    </div>
                                    @error('usernit') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userbusiness" class="form-control-label">{{ __('Teléfono 2') }}</label>
                                    <div class="@error('userbusiness') border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text"
                                            id="userbusiness" name="userbusiness" value="{{ old('userbusiness') }}" >
                                    </div>
                                    @error('userbusiness') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group"  id="hid3" >
                            <label for="useraddress">{{ 'Dirección' }}</label>
                            <div class="@error('useraddress')border border-danger rounded-3 @enderror">
                                <textarea  class="form-control" id="useraddress" name="useraddress" rows="3"
                                    placeholder="Especifique dirección detallada" > {{ old('useraddress') }} </textarea>
                            </div>
                            @error('useraddress') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="row"  id="hid4" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userpayment" class="form-control-label">{{ __('Forma de pago') }}</label>
                                    <div class="@error('userpayment')border border-danger rounded-3 @enderror">
                                        <select id="userpayment"  name="userpayment" class="form-control" >


                                            @switch( old('usepayment') )
                                                @case("15 dias")
                                                    <option value="15 dias">15 días</option>
                                                    @break
                                                @case("30 dias")
                                                    <option value="30 dias">30 días</option>
                                                    @break
                                                @case("contra entrega")
                                                    <option value="contra entrega">Contra Entrega</option>
                                                    @break
                                                @default
                                                 <option value="7 dias">7 días</option>
                                            @endswitch

                                            <option value="15 dias">15 días</option>
                                            <option value="30 dias">30 días</option>
                                            <option value="contra entrega">Contra Entrega</option>





                                        </select>

                                    </div>
                                    @error('userpayment') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usercontact" class="form-control-label">{{ __('Persona de contacto') }}</label>
                                    <div class="@error('usercontact')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text"
                                            placeholder="" id="usercontact" name="usercontact" value="{{ old('usercontact') }}" >
                                    </div>
                                    @error('usercontact') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group"  id="hid5" >
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ old('userisr') }}" id="userisr" name="userisr" checked>
                                <label class="custom-control-label" for="userisr">¿Es agente retenedor de ISR?</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Crear Usuario' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div role="tabpanel" class="row mt-4  tab-pane fade" id ="usuarios">


            <div class="row">

                <div class="col-12">
                    <div class="card ">
                        <div class="card-header pb-0 px-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Usuario internos</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div class="table-responsive p-0">


                                <table id="example" class=" nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                            {{-- <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefono</th> --}}
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de creacion</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                        </tr>
                                    </thead>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="row mt-4  tab-pane fade" id ="clientes">

            <div class="row">

                <div class="col-12">
                    <div class="card ">
                        <div class="card-header pb-0 px-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Clientes</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div class="table-responsive p-0">

                                <table id="example2" class=" nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefono</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de creacion</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                        </tr>
                                    </thead>


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

<script>

    function changeDiv(){



        if (!document.getElementById('estandar').hidden){

            document.getElementById('estandar').hidden = "hidden";
            document.getElementById('personalizado').hidden = "";

        }else {

            document.getElementById('estandar').hidden = "";
            document.getElementById('personalizado').hidden = "hidden";

        }


    }


    function esCliente(){



        valueSelect = document.getElementById("userrole").value;


        if (valueSelect != 'cliente'){

            document.getElementById('hid1').hidden = "hidden";
            document.getElementById('hid2').hidden = "hidden";
            document.getElementById('hid3').hidden = "hidden";
            document.getElementById('hid4').hidden = "hidden";
            document.getElementById('hid5').hidden = "hidden";


        }else {

            document.getElementById('hid1').hidden = "";
            document.getElementById('hid2').hidden = "";
            document.getElementById('hid3').hidden = "";
            document.getElementById('hid4').hidden = "";
            document.getElementById('hid5').hidden = "";

        }


    }


    $(document).ready(function() {

        $('#example').DataTable( {

            "processing": true,
            "serverSide": false,
            dom: 'Bfrtip',
            buttons: [
                { extend: 'csv', text: 'Exportar CSV', className: 'btn bg-gradient-dark btn-md mt-2' }
            ],
            bInfo: false,
            "responsive": true,
            "searching": false,
            "ajax": "{{ route('datatable.getEmployers') }}",
            "columns": [

                          {data: 'id', name: 'id'},
                          {data: 'name', name: 'name'},
                          {data: 'email', name: 'email'},
                        //   {data: 'telefono', name: 'telefono'},
                          {data: 'created_at', name: 'created_at'},
                          { data: null,
                            render: function (data, type, row) {
                               return '<td class="text-center"><a href="/edituser/'+ row.id + '" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar"><i class="fas fa-user-edit text-secondary"></i></a><a href="/user/'+ row.id + '" data-bs-toggle="tooltip" data-bs-original-title="Ver"><i class="cursor-pointer far fa-eye text-secondary"></i></a><a href="/deleteuser/'+ row.id + '" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Eliminar"><i class="far fa-trash-alt text-secondary "></i></a></td>'
                               }
                          },
                       ],
            // "columnDefs": [
            //                { "orderable": false, "targets": 5 }
            //               ],
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


        $('#example2').DataTable( {
            "processing": true,
            "serverSide": false,
            dom: 'Bfrtip',
            buttons: [
                { extend: 'csv', text: 'Exportar CSV', className: 'btn bg-gradient-dark btn-md mt-2' }
            ],
            bInfo: false,
            "responsive": true,
            "searching": false,
            "ajax": "{{ route('datatable.getCostumers') }}",
            "columns": [

                          {data: 'id', name: 'id'},
                          {data: 'name', name: 'name'},
                          {data: 'email', name: 'email'},
                          {data: 'telefono', name: 'telefono'},
                          {data: 'created_at', name: 'created_at'},
                          { data: null,
                            render: function (data, type, row) {
                               return '<td class="text-center"><a href="/edituser/'+ row.id + '" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar"><i class="fas fa-user-edit text-secondary"></i></a><a href="/user/'+ row.id + '" data-bs-toggle="tooltip" data-bs-original-title="Ver"><i class="cursor-pointer far fa-eye text-secondary"></i></a><a href="/deleteuser/'+ row.id + '" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Eliminar"><i class="far fa-trash-alt text-secondary "></i></a></td>'
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

</script>




