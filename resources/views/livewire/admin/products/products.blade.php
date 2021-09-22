<x-layouts.app>
 <main>

        <div class="container-fluid py-4">

            <div class="card">

                <div class="card-header pb-0 px-3">
                        <h6 class="mb-0" style="float:left">{{ __('Detalles del producto') }}</h6>
                        <h6 class="mb-0" style="float:right">
                            <a id="more_items" href="{{ route('importForm.products') }}" class="btn bg-gradient-dark btn-md mt-2">{{ 'Importar Productos' }}</a>
                            <a id="more_items" href="{{ route('export.products') }}" class="btn bg-gradient-dark btn-md mt-2">{{ 'Exportar Productos' }}</a>

                        </h6>
                </div>
                <div class="card-body pt-4 p-3">

                        <form action="{{ route('store.product') }}" class="data-form" method="POST" role="form text-left" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" id="pid" name="pid" value="0">
                            <input type="hidden" id="hiva"  name="hiva" value="{{ get_setting_value('iva') }}">
                            <input type="hidden" id="hisr" name="hisr" value="{{ get_setting_value('isr') }}">


                            <div class="row" >
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="productName" class="form-control-label" style="font-size: 10px;">{{ __('Producto') }}</label>
                                        <div class="@error('productName')border border-danger rounded-3 @enderror" >
                                            <input class="form-control" type="text"
                                                placeholder="" id="productName" name="productName" required>

                                        </div>
                                        @error('productName') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="cantidad" class="form-control-label" style="font-size: 10px;">{{ __('Cantidad') }}</label>
                                        <div class="@error('cantidad')border border-danger rounded-3 @enderror" >
                                            <input class="form-control" type="number" min="1"
                                                placeholder="" id="cantidad" name="cantidad" onchange="calcValues();" required>

                                        </div>
                                        @error('cantidad') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="pCompra" class="form-control-label" style="font-size: 10px;">{{ __('P. Compra') }}</label>
                                        <div class="@error('pCompra')border border-danger rounded-3 @enderror" >
                                            <input class="form-control" type="number" min="1" step="0.01"
                                                placeholder="" id="pCompra" name="pCompra" onchange="calcValues();" required>

                                        </div>
                                        @error('pCompra') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="pBase" class="form-control-label" style="font-size: 10px;">{{ __('P. Base') }}</label>
                                        <div class="@error('pBase')border border-danger rounded-3 @enderror" >
                                            <input class="form-control" type="number" min="1" step="0.01"
                                                placeholder="" id="pBase" name="pBase" onchange="calcValues();" required>

                                        </div>
                                        @error('pBase') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>



                                </div>

                                <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="isr" class="form-control-label" style="font-size: 10px;">{{ __('ISR ') . get_setting_value('isr').'%'  }}</label>
                                        <div class="@error('isr')border border-danger rounded-3 @enderror" >
                                            <input  class="form-control" type="number" min="1" step="0.01"
                                                placeholder="" id="isr" name="isr" readonly>

                                        </div>
                                        @error('isr') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="iva" class="form-control-label" style="font-size: 10px;">{{  __('IVA ') . get_setting_value('iva').'%'  }}</label>
                                        <div class="@error('iva')border border-danger rounded-3 @enderror" >
                                            <input class="form-control" type="number" min="1" step="0.01"
                                                placeholder="" id="iva" name="iva" readonly>

                                        </div>
                                        @error('iva') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="pVenta" class="form-control-label" style="font-size: 10px;">{{ __('P. Venta') }}</label>
                                        <div class="@error('pVenta')border border-danger rounded-3 @enderror" >
                                            <input class="form-control" type="number" min="1" step="0.01"
                                                placeholder="" id="pVenta" name="pVenta" readonly>

                                        </div>
                                        @error('pVenta') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="utilidad" class="form-control-label" style="font-size: 10px;">{{ __('Utilidad') }}</label>
                                        <div class="@error('utilidad')border border-danger rounded-3 @enderror" >
                                            <input class="form-control" type="number" min="1" step="0.01"
                                                placeholder="" id="utilidad" name="utilidad" readonly>

                                        </div>
                                        @error('utilidad') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="imagenProducto" class="form-control-label" style="font-size: 10px;">{{ __('Imagen') }}</label>
                                        <div class="@error('imagenProducto')border border-danger rounded-3 @enderror" >

                                            <input class="form-control " id="imagenProducto" name="imagenProducto" type="file" required>


                                        </div>
                                        @error('imagenProducto') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                            <div class="form-group">
                                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Agregar/Actualizar Producto' }}</button>
                                            </div>
                                    </div>
                                </div>
                            </div>



                        </form>

                </div>



                <div class="card-body pt-4 p-3">
                            <div class="table-responsive p-0">

                                <table id="example" class="data-table nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Producto</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">P. Compra</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">P. Base</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ISR {{ get_setting_value('isr').'%' }}  </th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IVA {{ get_setting_value('iva').'%' }}</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">P. Venta</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Utilidad</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>



                                        </tr>
                                    </thead>

                                    <tbody>
                                        {{-- <tr id="1" onclick="copyValues(this)">
                                            <td class="ps-4">
                                                <p id="1-pName" class="text-xs font-weight-bold mb-0">Item 1</p>
                                            </td>

                                            <td class="text-center">
                                                <p id="1-pCant" class="text-xs font-weight-bold mb-0">1</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="1-pCompra" class="text-xs font-weight-bold mb-0">90</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="1-pBase" class="text-xs font-weight-bold mb-0">100</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="1-pIsr" class="text-xs font-weight-bold mb-0">7</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="1-pIva" class="text-xs font-weight-bold mb-0">12</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="1-pVenta" class="text-xs font-weight-bold mb-0">119</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="1-pUtilidad" class="text-xs font-weight-bold mb-0">10</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <img style="height:50px;" src="https://www.serverrack24.com/media/catalog/product/cache/ade1b490255229c0e2ade60bb5702a2d/c/a/cat6a_rood.jpg" alt="">


                                                </p>
                                            </td>
                                            <td class="text-center">

                                                <a class="mx-3" href=""  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr id="2" onclick="copyValues(this)">
                                            <td class="ps-4">
                                                <p id="2-pName" class="text-xs font-weight-bold mb-0">2 Item</p>
                                            </td>

                                            <td class="text-center">
                                                <p id="2-pCant" class="text-xs font-weight-bold mb-0">1</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="2-pCompra" class="text-xs font-weight-bold mb-0">50</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="2-pBase" class="text-xs font-weight-bold mb-0">300</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="2-pIsr" class="text-xs font-weight-bold mb-0">14</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="2-pIva" class="text-xs font-weight-bold mb-0">5</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="2-pVenta" class="text-xs font-weight-bold mb-0">19</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="2-pUtilidad" class="text-xs font-weight-bold mb-0">1</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <img style="height:50px;" src="https://www.serverrack24.com/media/catalog/product/cache/ee4b06c59685106db41318dd47c24575/6/6/6627pp-voorkant.jpg" alt="">
                                                </p>
                                            </td>
                                            <td class="text-center">

                                                <a class="mx-3" href=""  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>
                                            </td>
                                        </tr> --}}

                                        @foreach ($products as $product)

                                        <tr id="{{ $product->id }}" onclick="copyValues(this)">
                                            <td class="ps-4">
                                                <p id="{{ $product->id }}-pName" class="text-xs font-weight-bold mb-0">{{ $product->product_name }}</p>
                                            </td>

                                            <td class="text-center">
                                                <p id="{{ $product->id }}-pCant" class="text-xs font-weight-bold mb-0">{{ $product->cantidad }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="{{ $product->id }}-pCompra" class="text-xs font-weight-bold mb-0">{{ $product->pCompra }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="{{ $product->id }}-pBase" class="text-xs font-weight-bold mb-0">{{ $product->pBase }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="{{ $product->id }}-pIsr" class="text-xs font-weight-bold mb-0">{{ $product->isr }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="{{ $product->id }}-pIva" class="text-xs font-weight-bold mb-0">{{ $product->iva }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="{{ $product->id }}-pVenta" class="text-xs font-weight-bold mb-0">{{ $product->pVenta }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p id="{{ $product->id }}-pUtilidad" class="text-xs font-weight-bold mb-0">{{ $product->utilidad }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <img style="height:50px;" src="{{ asset('storage/assets/img/productos/') ? asset('storage/assets/img/productos/') . "/".$product->imagen  : $product->imagen }}" alt="">


                                                </p>
                                            </td>
                                            <td class="text-center">


                                                <a class="mx-3" href="{{ route('delete.product', $product->id ) }}"  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
                                                </a>

                                            </td>
                                        </tr>

                                        @endforeach


                                    </tbody>




                                </table>

                                {{ $products->render() }}

                            </div>
                </div>

            </div>
        </div>

 </main>
</x-layouts.app>

<script>

    function copyValues(tr) {

        pname = document.getElementById( tr.id + "-pName").innerHTML;
        pcant = document.getElementById( tr.id + "-pCant").innerHTML;
        pcompra = document.getElementById( tr.id + "-pCompra").innerHTML;
        pbase = document.getElementById( tr.id + "-pBase").innerHTML;
        pisr = document.getElementById( tr.id + "-pIsr").innerHTML;
        piva = document.getElementById( tr.id + "-pIva").innerHTML;
        pventa = document.getElementById( tr.id + "-pVenta").innerHTML;
        putilidad = document.getElementById( tr.id + "-pUtilidad").innerHTML;

        setValues( tr.id , pname, pcant, pcompra, pbase, pisr, piva, pventa, putilidad)

    }

    function setValues(id, name, cant, compra, base, isr, iva, venta, utilidad){

        productId = document.getElementById("pid");
        productId.value = id;

        productName = document.getElementById("productName");
        productName.value = name;

        cantidad = document.getElementById("cantidad");
        cantidad.value = cant;

        pCompra = document.getElementById("pCompra");
        pCompra.value = compra;

        pBase = document.getElementById("pBase");
        pBase.value = base;

        pIsr = document.getElementById("isr");
        pIsr.value = isr;

        pIva = document.getElementById("iva");
        pIva.value = iva;

        pVenta = document.getElementById("pVenta");
        pVenta.value = venta;

        pUtilidad = document.getElementById("utilidad");
        pUtilidad.value = utilidad;

    }

    function calcValues(){

        productName = document.getElementById("productName").value;
        cantidad = document.getElementById("cantidad").value;
        pCompra = document.getElementById("pCompra").value;
        pBase = document.getElementById("pBase").value;

        iva = (document.getElementById("hiva").value / 100);
        isr = (document.getElementById("hisr").value / 100);

        iva = (iva * pBase).toFixed(2);
        isr = (isr * pBase).toFixed(2);

        pventa = cantidad * (parseFloat(pBase) + parseFloat(isr) + parseFloat(iva));
        utilidad = cantidad * (pBase - pCompra);




        pIsr = document.getElementById("isr");
        pIsr.value = isr;

        pIva = document.getElementById("iva");
        pIva.value = iva;

        pVenta = document.getElementById("pVenta");
        pVenta.value = pventa;

        pUtilidad = document.getElementById("utilidad");
        pUtilidad.value = utilidad;


    }



</script>


