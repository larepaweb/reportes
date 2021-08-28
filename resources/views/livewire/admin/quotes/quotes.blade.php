 <main>
    <div class="container-fluid py-4">
      <div class="row">

        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active"  data-bs-toggle="tab" href="#homeTab" role="tab" aria-controls="profile" aria-selected="true">
                Listar Cotización
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1"  data-bs-toggle="tab"  href="#metaTab" role="tab" aria-controls="dashboard" aria-selected="false">
                Crear Cotización
                </a>
              </li>

            </ul>
        </div>

      </div>



      <div class="container-fluid py-4 tab-content">


        <div role="tabpanel" class="row mt-4  tab-pane fade in show active" id ="homeTab">


            <div class="row">

                <div class="col-12 alert alert-secondary" role="alert">
                    <span class="text-white"><strong>Las opciones de Editar y Ver no son funcionales!</strong> este solo es el maquetado visual de la aplicación</span>
                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="card ">
                        <div class="card-header pb-0 px-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Cotizaciones</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div class="table-responsive p-0">


                                <table id="example" class=" nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>

                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de creacion</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Referencia</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">1</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Admin</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">admin@example.com</p>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mantenimiento</p>
                                            </td>
                                            <td class="text-center"> <a href="{{route('editar-cotizacion')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-cotizacion')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar cotización">
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
                                                <p class="text-xs font-weight-bold mb-0">Creator</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">creator@example.com</p>
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">05/05/20</span>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mantenimiento</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-cotizacion')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-cotizacion')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar cotización">
                                                    <i class="far fa-envelope text-secondary "></i>
                                                </a>

                                                <a href=""  data-bs-toggle="tooltip"
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
                                                <p class="text-xs font-weight-bold mb-0">Member</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">member@example.com</p>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/06/20</span>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mantenimiento</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-cotizacion')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-cotizacion')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()"  class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar cotización">
                                                    <i class="far fa-envelope text-secondary "></i>
                                                </a>
                                                <a href=""  data-bs-toggle="tooltip"
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
                                                <p class="text-xs font-weight-bold mb-0">Peterson</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">peterson@example.com</p>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">26/10/17</span>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Talanquera</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-cotizacion')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-cotizacion')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar cotización">
                                                    <i class="far fa-envelope text-secondary "></i>
                                                </a>
                                                <a href=""  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">5</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Marie</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">marie@example.com</p>
                                            </td>


                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/01/21</span>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mantenimiento</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-cotizacion')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-cotizacion')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar cotización">
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
                    <h6 class="mb-0"  style="float:left">{{ __('Detalles de cotización') }}</h6>
                    <h6 class="mb-0" style="float:right">Cotización Nro. XXXX</h6>

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



                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user.phone" class="form-control-label">{{ __('Nombre de cliente') }}</label>
                                    <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                        <select wire:model="user.phone" class="form-control" id="phone">
                                            <option selected>Seleccione un cliente</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    @error('user.phone') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user.phone" class="form-control-label">{{ __('Referencia') }}</label>
                                    <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                        <select wire:model="user.phone" class="form-control" id="phone">
                                            <option selected>Talanqueras, Control de acceso, Soporte Técnico, CCTV, Mantenimiento, cctv, etc.</option>
                                            <option value="1">Talanqueras</option>
                                            <option value="2">Control de acceso</option>
                                            <option value="3">Soporte Técnico</option>
                                            <option value="3">...</option>
                                        </select>
                                    </div>
                                    @error('user.phone') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>



                        <div class="row">

                            <div class="form-group form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault"
                                    onchange='changeDiv(this);'  >
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault">Producto personalizado</label>
                            </div>

                        </div>

                        <div class="row" id="estandar">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Articulo') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" >
                                        <select id="articulo" class="form-control" >
                                            <option selected>Seleccione un Articulo</option>
                                            <option value="articulo 1">One</option>
                                            <option value="articulo 2">Two</option>
                                            <option value="articulo 3">Three</option>
                                        </select>

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('Cantidad') }}</label>
                                    <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number"
                                            placeholder="" id="cantidad">
                                    </div>
                                    @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('Costo') }}</label>
                                    <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" step="0.01"
                                            placeholder="" id="costo">
                                    </div>
                                    @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label"></label>
                                        <div>
                                            <a onclick="agregar();" id="more_items" class="btn bg-gradient-dark btn-md mt-2">{{ 'Agregar' }}</a>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="personalizado" hidden="hidden">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user.phone" class="form-control-label">{{ __('Articulo Personalizado') }}</label>
                                    <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                        <input class="form-control"
                                            placeholder="" id="articuloP">
                                    </div>
                                    @error('user.phone') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('Cantidad') }}</label>
                                    <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="" id="cantidadP">
                                    </div>
                                    @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="user.location" class="form-control-label">{{ __('Costo Personalizado') }}</label>
                                    <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" step="0.01" placeholder="" id="costoP">
                                    </div>
                                    @error('user.location') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label"></label>
                                        <div>
                                            <a onclick="agregar();" id="more_items" class="btn bg-gradient-dark btn-md mt-2">{{ 'Agregar' }}</a>
                                        </div>
                                </div>
                            </div>
                        </div>

                            <div class="table-responsive p-0">


                                <table  class="table nowrap" style="width:100%">
                                    <thead>
                                        <tr style="background:#3a416f; color:white;">
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripción de articulo</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Unidad</th>

                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="quotes">
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">Articulo 1</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">2</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Q 1.800,00</p>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Q 3.600,00</span>
                                            </td>
                                            <td class="text-center">
                                                <a  href=""  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">Articulo X</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">1</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Q 80,00</p>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Q 80,00</span>
                                            </td>
                                            <td class="text-center">
                                                <a  href=""  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
                                            </td>
                                        </tr>


                                    </tbody>
                                    <tfoot>
                                        <tr style="background:#3a416f; color:white;">
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Sub Total</b></th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                                            <th class="text-center text-secondary text-xs font-weight-bold">Q 3.680,00</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                            <th></th>
                                        </tr>
                                        <tr style="background:#3a416f; color:white;">
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>IVA</b></th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                                            <th class="text-center text-secondary text-xs font-weight-bold">Q 368,00</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                            <th></th>
                                        </tr>
                                        <tr style="background:#3a416f; color:white;"">
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Total</b></th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                                            <th class="text-center text-secondary text-xs font-weight-bold">Q 4.480,00</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>

                                </table>



                            </div>

                    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Crear Cotización' }}</button>
                        </div>
                    </form>

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


    function agregar() {

        var a = document.getElementById('articulo').value;
        var c = document.getElementById('cantidad').value;
        var co = document.getElementById('costo').value;
        var ap = document.getElementById('articuloP').value;
        var cp = document.getElementById('cantidadP').value;
        var cop = document.getElementById('costoP').value;

        var articulo = a ? a : ap;
        var cantidad = c ? c : cp;
        var costo = co ? co : cop;




        var table = document.getElementById('quotes');

        var nextIndex = table.childNodes.length;

        var newRow = document.createElement("TR");

        var firstCell = document.createElement("TD");
        var firstCellElement = document.createElement("P");

        firstCell.classList.add('ps-4');
        firstCellElement.setAttribute("id", "nombreArticulo" + nextIndex);
        firstCellElement.classList.add('text-xs');
        firstCellElement.classList.add('font-weight-bold');
        firstCellElement.classList.add('mb-0');
        firstCellElement.innerHTML = articulo ? articulo : articuloP ;


        var secondCell = document.createElement("TD");
        var secondCellElement = document.createElement("P");

        secondCell.classList.add('text-center');
        secondCellElement.setAttribute("id", "cantidadArticulo" + nextIndex);
        secondCellElement.classList.add('text-xs');
        secondCellElement.classList.add('font-weight-bold');
        secondCellElement.classList.add('mb-0');
        secondCellElement.innerHTML = cantidad;

        var thirdCell = document.createElement("TD");
        var thirdCellElement = document.createElement("P");

        thirdCell.classList.add('text-center');
        thirdCellElement.setAttribute("id", "precioArticulo" + nextIndex);
        thirdCellElement.classList.add('text-xs');
        thirdCellElement.classList.add('font-weight-bold');
        thirdCellElement.classList.add('mb-0');
        thirdCellElement.innerHTML =  "Q  "  + parseFloat(costo).toFixed(2);

        var fourthCell = document.createElement("TD");
        var fourthCellElement = document.createElement("SPAN");

        fourthCell.classList.add('text-center');
        fourthCellElement.setAttribute("id", "precioTotal" + nextIndex);
        fourthCellElement.classList.add('text-secondary');
        fourthCellElement.classList.add('text-xs');
        fourthCellElement.classList.add('font-weight-bold');
        fourthCellElement.innerHTML =  "Q  "  + parseFloat(costo * cantidad).toFixed(2);

        var fifthCell = document.createElement("TD");
        var fifthCellElement = document.createElement("A");
        var fifthCellIcon = document.createElement("I");

        fifthCell.classList.add('text-center');
        fifthCellElement.setAttribute("id", "delete" + nextIndex);
        fifthCellElement.setAttribute("data-bs-toggle", "tooltip");
        fifthCellElement.setAttribute("data-bs-original-title", "Eliminar");
        fifthCellElement.setAttribute( "onClick", "$(this).closest('tr').remove();");
        fifthCellIcon.classList.add('far');
        fifthCellIcon.classList.add('fa-trash-alt');
        fifthCellIcon.classList.add('text-secondary');
        fifthCellIcon.setAttribute("aria-hidden", "true");


        firstCell.appendChild(firstCellElement);
        secondCell.appendChild(secondCellElement);
        thirdCell.appendChild(thirdCellElement);
        fourthCell.appendChild(fourthCellElement);
        fifthCellElement.appendChild(fifthCellIcon);
        fifthCell.appendChild(fifthCellElement);

        newRow.appendChild(firstCell);
        newRow.appendChild(secondCell);
        newRow.appendChild(thirdCell);
        newRow.appendChild(fourthCell);
        newRow.appendChild(fifthCell);

        table.appendChild(newRow);
    }

    function confirmar(){
        Swal
        .fire({

            text: "¿Desea reenviar la cotización?",
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



    $(document).ready(function() {
        $('#example').DataTable( {
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

                this.api().columns([1, 4]).every( function () {

                    var column = this;
                    var select = $('<br><select><option value=""></option></select>')
                        .appendTo( $(column.header()))
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

 </script>


