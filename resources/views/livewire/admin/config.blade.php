 <main>
    <div class="container-fluid py-4">

            <div class="row">

                <div class="col-12 alert alert-secondary" role="alert">
                    <span class="text-white"><strong>Las opcion de Editar no es funcionales!</strong> este solo es el maquetado visual de la aplicación</span>
                </div>
            </div>

      <div class="container-fluid py-4 tab-content">

            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">{{ __('Datos maestros del sistema') }}</h6>
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
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Númeracion de inicio para boleta de servicio') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input class="form-control datepicker" type="text" value="23456">
                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>



                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Númeracion de inicio para boleta de mantenimiento') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input class="form-control datepicker" type="text"  value="121">
                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Simbolo de moneda') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input class="form-control datepicker" type="text" value="Q">
                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Procentaje de IVA') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input class="form-control datepicker" type="text" value="12%">
                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Porcentaje de ISR') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input class="form-control datepicker" type="text" value="14%">
                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Logo') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input class="form-control datepicker" type="file" value="Q">
                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row" >

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Marca de agua') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input class="form-control datepicker" type="file" value="Q">
                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="about">{{ 'Terminos y condiciones de  pago' }}</label>
                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                <textarea  class="form-control" id="about" rows="3"
                                    placeholder="Especifique los detalles del servicio">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quidem mollitia iure adipisci, aut nostrum at quasi temporibus! Cupiditate hic ut nesciunt ducimus iusto consequuntur cum ullam sint reprehenderit blanditiis?</textarea>
                            </div>
                            @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="about">{{ 'Terminos y condiciones de garantia' }}</label>
                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                <textarea  class="form-control" id="about" rows="3"
                                    placeholder="agregue alguna observación">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis architecto repellendus saepe consectetur est fugit quos error odio provident et porro cumque distinctio, officiis rem eligendi nostrum velit quod non.</textarea>
                            </div>
                            @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="about">{{ 'Requerimientos' }}</label>
                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                <textarea  class="form-control" id="about" rows="3"
                                    placeholder="agregue alguna observación">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deleniti at, aperiam omnis tempora nesciunt eligendi incidunt ullam fuga obcaecati vero et dolorum! Earum, tempora id. Aspernatur, iste laborum! Aliquid!</textarea>
                            </div>
                            @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
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


