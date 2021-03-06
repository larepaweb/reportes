<x-layouts.app>

 <main>
    <div class="container-fluid py-4">

      <div class="container-fluid py-4 tab-content">
            <div class="row">

                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">{{ __('Detalles de cotización') }}</h6>
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
                            <div class="form-group">
                                <label for="about">{{ 'Descripción del servicio' }}</label>
                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                    <textarea wire:model="user.about" class="form-control" id="about" rows="3"
                                        >Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae blanditiis porro, enim adipisci velit pariatur sequi corrupti. Voluptatem at corrupti eius non! Suscipit quasi, voluptatum distinctio rerum ad error autem.</textarea>
                                </div>
                                @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="row" id="estandar">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Producto') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                            <select wire:model="user.name" class="form-control" >
                                                <option selected>One</option>
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
                                        <label for="user-email" class="form-control-label">{{ __('Costo') }}</label>
                                        <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                            <input wire:model="user.email" class="form-control" type="number" step="0.01"
                                                placeholder="" id="producto" value="200">
                                        </div>
                                        @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.phone" class="form-control-label">{{ __('Nombre de cliente') }}</label>
                                        <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                            <select wire:model="user.phone" class="form-control" id="phone">
                                                <option selected>Three</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        @error('user.phone') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.location" class="form-control-label">{{ __('Correo de cliente') }}</label>
                                        <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                            <input wire:model="user.location" class="form-control" type="text"
                                                placeholder="@example.com" id="name" value="correo@example">
                                        </div>
                                        @error('user.location') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Editar Cotización' }}</button>
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
                <a class="nav-link mb-0 px-0 py-1 active"  href="{{ route('cotizaciones' )}}" role="tab" aria-controls="profile" aria-selected="true">
                Regresar
                </a>
              </li>

            </ul>
        </div>

      </div>

    </div>
 </main>

</x-layouts.app>
