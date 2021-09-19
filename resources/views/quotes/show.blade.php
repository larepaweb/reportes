 <x-layouts.app>


<div class="row">

                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0"  style="float:left">{{ __('Detalles de cotización') }}</h6>
                        <h6 class="mb-0" style="float:right">Cotización Nro. {{ $quote->quote_correlative }}</h6>

                    </div>
                    <div class="card-body pt-4 p-3">

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

                                            @php
                                                //$products = json_decode($quote->products, true);
                                                $products = json_decode( $quote->products );
                                                $long = count($products);

                                                for($i = 1; $i <$long-3 ; $i++ ){

                                            @endphp

                                                    <tr>
                                                        <td class="ps-4">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                @php
                                                                     echo $products [$i]->{'Descripción de articulo'};

                                                                @endphp


                                                            </p>
                                                        </td>

                                                        <td class="text-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                @php
                                                                     echo $products [$i]->Cantidad;

                                                                @endphp

                                                                </p>
                                                        </td>
                                                        <td class="text-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                @php
                                                                     echo $products [$i]->Unidad;

                                                                @endphp


                                                                </p>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="text-secondary text-xs font-weight-bold">
                                                                @php
                                                                     echo $products [$i]->Total;

                                                                @endphp


                                                                </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <a  href=""  data-bs-toggle="tooltip"
                                                                data-bs-original-title="Eliminar">
                                                            </a>
                                                        </td>
                                                   </tr>
                                            @php
                                                }




                                            @endphp






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

                                                <th class="text-center text-secondary text-xs font-weight-bold" id="subtotal">{{$quote->subtotal}}</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th></th>
                                            </tr>
                                            <tr style="background:#3a416f; color:white;">
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" ><b>IVA</b></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                                                <th class="text-center text-secondary text-xs font-weight-bold" id="iva">{{ $quote->iva }}</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th></th>
                                            </tr>
                                            <tr style="background:#3a416f; color:white;"">
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><b>Total</b></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                                                <th class="text-center text-secondary text-xs font-weight-bold" id="total">{{ $quote->total }}</th>
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


                    </div>
                </div>



</div>

<div class="row">

            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active"  href="{{ route('cotizaciones' )}}" role="tab" aria-controls="profile" aria-selected="true">
                        Regresar
                        </a>
                    </li>

                </ul>
            </div>

</div>



</x-layouts.app>







