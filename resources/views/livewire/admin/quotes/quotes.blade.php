<x-layouts.app>
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
                                        {{-- <tr>
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


                                        </tr> --}}

                                    </tbody>

                                </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="row mt-4  tab-pane fade" id ="metaTab">

            <form action="{{ route( 'store.quote' )}}" method="POST" role="form text-left">
                @csrf

                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0"  style="float:left">{{ __('Detalles de cotización') }}</h6>
                        <h6 class="mb-0" style="float:right">Cotización Nro. {{ $quote_correlative }}</h6>
                        <input type="hidden" name="quote_correlative" value="{{ $quote_correlative }}">

                    </div>
                    <div class="card-body pt-4 p-3">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="customer_id" class="form-control-label">{{ __('Nombre de cliente') }}</label>
                                        <div class="@error('customer_id')border border-danger rounded-3 @enderror">
                                            <select name="customer_id" class="form-control" id="users-quote">
                                                <option selected>Seleccione un cliente</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id}}">{{ $user->profile->contact_name }} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        @error('customer_id') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="reference_name" class="form-control-label">{{ __('Referencia') }}</label>
                                        <div class="@error('reference_name')border border-danger rounded-3 @enderror">
                                            <select name="reference_name" class="form-control" id="ref-quote">
                                                <option selected>Seleccione la referencia Talanqueras, Control de acceso, Soporte Técnico, CCTV, Mantenimiento, cctv, etc.</option>
                                                @foreach ($references as $item)
                                                    <option value="{{ $item->id }}">{{ $item->reference_name}}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                        @error('reference_name') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto" type="checkbox" name="flexSwitchCheckDefault" id="flexSwitchCheckDefault"
                                        onchange='changeDiv(this);' >
                                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                        for="flexSwitchCheckDefault">Producto personalizado</label>
                                </div>

                            </div>

                            <div class="row" id="estandar">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="product_name" class="form-control-label">{{ __('Producto') }}</label>
                                        <div class="@error('product_name')border border-danger rounded-3 @enderror" >
                                            <select  id="producto" class="form-control" >
                                                <option selected>Seleccione un Producto</option>
                                                @foreach ($products as $product)
                                                    <option value="{{$product->id}}">{{$product->product_name }}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                        @error('product_name') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="quantity" class="form-control-label">{{ __('Cantidad') }}</label>
                                        <div class="@error('quantity')border border-danger rounded-3 @enderror">
                                            <input class="form-control" type="number"
                                                placeholder="" id="cantidad"  value="1" >
                                        </div>
                                        @error('quantity') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="price" class="form-control-label">{{ __('P. Venta') }}</label>
                                        <div class="@error('price')border border-danger rounded-3 @enderror">
                                            <input class="form-control" type="number" step="0.01"
                                                placeholder="" id="costo" readonly>
                                        </div>
                                        @error('price') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-control-label"></label>
                                            <div>
                                                <a onclick="agregar();" id="more_items" class="btn bg-gradient-dark btn-md mt-2">{{ 'Agregar' }}</a>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="personalizado" hidden="hidden">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="productC" class="form-control-label">{{ __('Articulo Personalizado') }}</label>
                                        <div class="@error('productC')border border-danger rounded-3 @enderror">
                                            <input class="form-control"
                                                placeholder="" id="articuloP" >
                                        </div>
                                        @error('productC') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cantidadC" class="form-control-label">{{ __('Cantidad') }}</label>
                                        <div class="@error('cantidadC')border border-danger rounded-3 @enderror">
                                            <input class="form-control" type="number" placeholder="" id="cantidadP" >
                                        </div>
                                        @error('cantidadC') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="priceC" class="form-control-label">{{ __('Costo Personalizado') }}</label>
                                        <div class="@error('priceC') border border-danger rounded-3 @enderror">
                                            <input class="form-control" type="number" step="0.01" placeholder="" id="costoP" >
                                        </div>
                                        @error('priceC') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label  class="form-control-label"></label>
                                            <div>
                                                <a onclick="agregar();" id="more_items" class="btn bg-gradient-dark btn-md mt-2">{{ 'Agregar' }}</a>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive p-0">


                                    <table  id="cotizacion" class="table nowrap" style="width:100%">
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
                                                    <p class="text-xs font-weight-bold mb-0"></p>
                                                </td>

                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0"></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0"></p>
                                                </td>
                                                <td class="text-center">
                                                    <span class="text-secondary text-xs font-weight-bold"></span>
                                                </td>
                                                <td class="text-center">
                                                    <a  href=""  data-bs-toggle="tooltip"
                                                        data-bs-original-title="Eliminar">
                                                    </a>
                                                </td>
                                            </tr>



                                        </tbody>
                                        <tfoot>
                                            <tr style="background:#3a416f; color:white;">
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Sub Total</b></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                                                <th class="text-center text-secondary text-xs font-weight-bold" id="subtotal">0</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th></th>
                                            </tr>
                                            <tr style="background:#3a416f; color:white;">
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" ><b>IVA</b></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                                                <th class="text-center text-secondary text-xs font-weight-bold" id="iva">0</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th></th>
                                            </tr>
                                            <tr style="background:#3a416f; color:white;"">
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Total</b></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                                                <th class="text-center text-secondary text-xs font-weight-bold" id="total">0</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>

                                        <input type="hidden" id="i-products" name="products" >
                                        <input type="hidden" id="i-subtotal" name="subtotal" >
                                        <input type="hidden" id="i-iva" name="iva" >
                                        <input type="hidden" id="i-total" name="total" >

                                    </table>

                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Crear Cotización' }}</button>
                            </div>
                    </div>
                </div>

            </form>

        </div>





      </div>

    </div>
 </main>
</x-layouts.app>

 <script>

    var ele;

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


        var a = ele;
        var c = document.getElementById('cantidad').value;
        var co = document.getElementById('costo').value;
        var ap = document.getElementById('articuloP').value;
        var cp = document.getElementById('cantidadP').value;
        var cop = document.getElementById('costoP').value;

        if( flexSwitchCheckDefault.checked ){

            var articulo = ap;
            var cantidad = cp;
            var costo = cop;

        }else{
            var articulo = a ;
            var cantidad = c ;
            var costo = co ;
        }



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
        monto = costo * cantidad;

        var fifthCell = document.createElement("TD");
        var fifthCellElement = document.createElement("A");
        var fifthCellIcon = document.createElement("I");

        fifthCell.classList.add('text-center');
        fifthCellElement.setAttribute("id", "delete" + nextIndex);
        fifthCellElement.setAttribute("data-ref", "precioTotal" + nextIndex);
        fifthCellElement.setAttribute("data-bs-toggle", "tooltip");
        fifthCellElement.setAttribute("data-bs-original-title", "Eliminar");
        fifthCellElement.setAttribute( "onClick", "del(this);");
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

        calcTotals(monto);

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

    function del(el) {

        var cost = el.dataset.ref;
        monto = document.getElementById(cost).innerText;
        monto = monto.replace('Q ', '');

        subtotaltemp = document.getElementById('subtotal').innerText;
        ivatemp = <?php echo get_setting_value('iva'); ?>; //document.getElementById('iva').innerHTML;
        totaltemp = document.getElementById('total').innerText;

        subtotal = +parseFloat(subtotaltemp).toFixed(2) + -parseFloat( monto).toFixed(2);
        iva =  parseFloat(subtotal * (ivatemp/100)).toFixed(2);
        total =  +parseFloat(subtotal).toFixed(2) + +parseFloat(iva).toFixed(2);

        document.getElementById('subtotal').innerHTML = +parseFloat(subtotal).toFixed(2);
        document.getElementById('iva').innerHTML = iva;
        document.getElementById('total').innerHTML = +parseFloat(total).toFixed(2);

        var element = el;
        element.closest('tr').remove();



    }

    function calcTotals(monto){

        subtotaltemp = document.getElementById('subtotal').innerText;
        ivatemp = 12; //document.getElementById('iva').innerHTML;
        totaltemp = document.getElementById('total').innerText;

        subtotal = +parseFloat(subtotaltemp).toFixed(2) + +parseFloat( monto).toFixed(2);
        iva =  parseFloat(subtotal * (ivatemp/100)).toFixed(2);
        total =  +parseFloat(subtotal).toFixed(2) + +parseFloat(iva).toFixed(2);

        document.getElementById('subtotal').innerHTML = +parseFloat(subtotal).toFixed(2);
        document.getElementById('iva').innerHTML = iva;
        document.getElementById('total').innerHTML = +parseFloat(total).toFixed(2);



        var tcotizacion = $('#cotizacion').tableToJSON();

        document.getElementById('i-products').value = JSON.stringify(tcotizacion) ;
        document.getElementById('i-subtotal').value = +parseFloat(subtotal).toFixed(2);
        document.getElementById('i-iva').value = iva ;
        document.getElementById('i-total').value = +parseFloat(total).toFixed(2);


    }

    $(document).ready(function() {

        var products = <?php echo $products; ?>;
        //  alert(JSON.stringify(products));
        // alert(products[0].id)

        $('#users-quote').select2();
        $('#ref-quote').select2();
        $('#producto').select2();
        $('#producto').on('select2:select', function (e) {
            data = $('#producto').select2('data')[0]['id'];
            ele = $('#producto').select2('data')[0]['text'];

            name = document.getElementById("producto");

            for (var i = 0; i < products.length; i+=1) {
                if(data == products[i].id ){

                    pVenta = document.getElementById("costo");
                    pVenta.value = products[i].pVenta ;

                }
            }

        });


        $('#example').DataTable( {
            "processing": true,
            "serverSide": false,
            dom: 'Bfrtip',
            buttons: [

            ],
            bInfo: false,
            "responsive": true,
            "ajax": "{{ route('datatable.getQuotes') }}",
            "columns": [

                          {data: 'quote_correlative', name: 'quote_correlative'},
                          {data: 'name', name: 'name'},
                          {data: 'email', name: 'email'},
                          {data: 'created_at', name: 'created_at'},
                          {data: 'reference', name: 'reference'},
                          { data: null,
                            render: function (data, type, row) {
                               return '<td class="text-center"><a href="/quote/'+ row.id + '" data-bs-toggle="tooltip" data-bs-original-title="Ver"><i class="cursor-pointer far fa-eye text-secondary"></i></a><a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Enviar cotización"><i class="far fa-envelope text-secondary "></i></a>    <a  href="/deletequote/'+ row.id + '" data-bs-toggle="tooltip" data-bs-original-title="Eliminar"><i class="far fa-trash-alt text-secondary "></i></a></td>'
                          //   return '<td class="text-center"><a href="/editquote/'+ row.id + '" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar"><i class="fas fa-user-edit text-secondary"></i></a><a href="/quote/'+ row.id + '" data-bs-toggle="tooltip" data-bs-original-title="Ver"><i class="cursor-pointer far fa-eye text-secondary"></i></a><a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Enviar cotización"><i class="far fa-envelope text-secondary "></i></a>    <a  href="/deletequote/'+ row.id + '" data-bs-toggle="tooltip" data-bs-original-title="Eliminar"><i class="far fa-trash-alt text-secondary "></i></a></td>'

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


