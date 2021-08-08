 <main>
    <div class="container-fluid py-4">

      <div class="container-fluid py-4 tab-content">
            <div class="row">

                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">{{ __('Editar usuario') }}</h6>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Rol') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                            <select wire:model="user.name" class="form-control" >
                                                <option selected>Administrador</option>
                                                <option value="1">Administrador</option>
                                                <option value="2">Técnico</option>
                                                <option value="3">Cliente</option>
                                            </select>

                                        </div>
                                        @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-email" class="form-control-label">{{ __('Nombre') }}</label>
                                        <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                            <input class="form-control" type="text" step="0.01"
                                                 id="producto" value="Mark Twain">
                                        </div>
                                        @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.location" class="form-control-label">{{ __('Correo') }}</label>
                                        <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                            <input  class="form-control" type="email" value="correo@example.com">
                                        </div>
                                        @error('user.location') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.phone" class="form-control-label">{{ __('Telefono') }}</label>
                                        <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                            <input  class="form-control" type="tel"
                                                 id="phone" value="+502 55555555">
                                        </div>
                                        @error('user.phone') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.location" class="form-control-label">{{ __('NIT') }}</label>
                                        <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                            <input  class="form-control" type="text"
                                                id="name" value="ADAS412312">
                                        </div>
                                        @error('user.location') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.location" class="form-control-label">{{ __('Nombre de empresa') }}</label>
                                        <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                            <input value="Corporacion LLT." class="form-control" type="text"
                                                id="name">
                                        </div>
                                        @error('user.location') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="about">{{ 'Dirección' }}</label>
                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                    <textarea class="form-control" id="about" rows="3"
                                        placeholder="Especifique dirección detallada">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi repellendus repellat delectus in laboriosam placeat dolorum veniam dolor dignissimos accusamus, veritatis voluptatem excepturi odit a? Quae quo dolorum aperiam iure.</textarea>
                                </div>
                                @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="row" >
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Forma de pago') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                            <select wire:model="user.name" class="form-control" >
                                                <option selected>Efectivo</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>

                                        </div>
                                        @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-email" class="form-control-label">{{ __('Persona de contacto') }}</label>
                                        <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                            <input value="Mr. Black" class="form-control" type="text" step="0.01"
                                                 id="producto">
                                        </div>
                                        @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                <label class="custom-control-label" for="customCheck1">¿Es agente retenedor de ISR?</label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Editar Usuario' }}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

      </div>

      <div class="row">

        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active"  href="{{ route('usuarios' )}}" role="tab" aria-controls="profile" aria-selected="true">
                Regresar
                </a>
              </li>

            </ul>
        </div>

      </div>

    </div>
 </main>





