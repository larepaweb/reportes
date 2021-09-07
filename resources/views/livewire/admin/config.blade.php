<x-layouts.app>

    <main>
    <div class="container-fluid py-4">


      <div class="container-fluid py-4 tab-content">

            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">{{ __('Datos maestros del sistema') }}</h6>
                </div>
                <div class="card-body pt-4 p-3">


                    <form action="{{ route( 'store.setting' )}}" method="POST" role="form text-left" enctype="multipart/form-data">
                        @csrf

                        <div class="row" >
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="num_service" class="form-control-label">{{ __('Númeracion de inicio para boleta de servicio') }}</label>
                                    <div class="@error('num_service')border border-danger rounded-3 @enderror" >
                                        <input class="form-control datepicker" type="text" value="{{ $setting->num_service }}" id="num_service" name="num_service">
                                    </div>
                                    @error('num_service') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>



                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="num_mantain" class="form-control-label">{{ __('Númeracion de inicio para boleta de mantenimiento') }}</label>
                                    <div class="@error('num_mantain')border border-danger rounded-3 @enderror" >
                                        <input class="form-control datepicker" type="text" id="num_mantain" name="num_mantain" value="{{$setting->num_mantain}}">
                                    </div>
                                    @error('num_mantain') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="moneda" class="form-control-label">{{ __('Simbolo de moneda') }}</label>
                                    <div class="@error('moneda')border border-danger rounded-3 @enderror" >
                                        <input class="form-control datepicker" type="text" id="moneda" name="moneda" value="{{$setting->moneda}}">
                                    </div>
                                    @error('moneda') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="iva" class="form-control-label">{{ __('Procentaje de IVA') }}</label>
                                    <div class="@error('iva')border border-danger rounded-3 @enderror" >
                                        <input class="form-control datepicker" id="percent"  name="iva"  type="text" value="{{$setting->iva}}">
                                    </div>
                                    @error('iva') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="isr" class="form-control-label">{{ __('Porcentaje de ISR') }}</label>
                                    <div class="@error('isr')border border-danger rounded-3 @enderror" >
                                        <input class="form-control datepicker" id="percent" name="isr" type="text" value="{{$setting->isr}}">
                                    </div>
                                    @error('isr') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="logo" class="form-control-label">{{ __('Logo') }}</label>
                                    <div class="@error('logo')border border-danger rounded-3 @enderror" >
                                        <input class="form-control " id="logo" name="logo" type="file" value="{{$setting->logo }}">
                                    </div>
                                    @error('logo') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            @if ( $setting->logo )
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="@error('logo')border border-danger rounded-3 @enderror" >
                                        <img src="{{ asset('storage/assets/img/logos/') ."/". get_setting_value( 'logo' ) }}" alt="">
                                    </div>
                                    @error('logo') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            @endif



                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="watermark" class="form-control-label">{{ __('Marca de agua') }}</label>
                                    <div class="@error('watermark')border border-danger rounded-3 @enderror" >
                                        <input class="form-control " id="watermark" name="watermark" type="file" value="{{$setting->watermark}}">
                                    </div>
                                    @error('watermark') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            @if ( $setting->watermark )
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="@error('logo')border border-danger rounded-3 @enderror" >
                                        <img src="{{ asset('storage/assets/img/logos/') ."/". get_setting_value( 'logo' ) }} " alt="">
                                    </div>
                                    @error('logo') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label for=payment">{{ 'Terminos y condiciones de  pago' }}</label>
                            <div class="@error('payment')border border-danger rounded-3 @enderror">
                                <textarea  class="form-control" id="payment" name="payment" rows="3"
                                    placeholder="Especifique los detalles del servicio">{{$setting->payment }}</textarea>
                            </div>
                            @error('payment') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="warranty">{{ 'Terminos y condiciones de garantia' }}</label>
                            <div class="@error('warranty')border border-danger rounded-3 @enderror">
                                <textarea  class="form-control" id="warranty" name="warranty" rows="3"
                                    placeholder="agregue alguna observación">{{$setting->warranty }}</textarea>
                            </div>
                            @error('warranty') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="requeriments">{{ 'Requerimientos' }}</label>
                            <div class="@error('requeriments')border border-danger rounded-3 @enderror">
                                <textarea  class="form-control" id="requeriments" name="requeriments" rows="3"
                                    placeholder="agregue alguna observación">{{$setting->requeriments}}</textarea>
                            </div>
                            @error('requeriments') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="row" >
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="mail_services" class="form-control-label">{{ __('Correo electronico de soporte para boletas de servicios') }}</label>
                                    <div class="@error('mail_services')border border-danger rounded-3 @enderror" id="mail_services">
                                        <input class="form-control datepicker" type="text" name="mail_services" value="{{$setting->mail_services}}">
                                    </div>
                                    @error('mail_services') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="mail_mantain" class="form-control-label">{{ __('Correo electronico de soporte para boletas de mantenimiento') }}</label>
                                    <div class="@error('mail_mantain')border border-danger rounded-3 @enderror" id="mail_mantain">
                                        <input class="form-control datepicker" type="text" name="mail_mantain" value="{{$setting->mail_mantain}}">
                                    </div>
                                    @error('mail_mantain') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Actualizar Configuracion' }}</button>
                        </div>
                    </form>

                </div>
            </div>


      </div>

    </div>
 </main>
</x-layouts.app>


