 <main>
    <div class="container-fluid py-4">

      <div class="container-fluid py-4 tab-content">
            <div class="row">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">{{ __('Detalles de tareas') }}</h6>
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Fecha de actividad') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                            <input class="form-control datepicker" placeholder="Please select date" type="date" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Cliente') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                            <select  class="form-control" >
                                                <option selected>Mark Twain</option>
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
                                        <label for="user-name" class="form-control-label">{{ __('Tecnico') }}</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                            <select  class="form-control" >
                                                <option selected>Steve Gates</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>

                                        </div>
                                        @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="about">{{ 'Descripción del servicio' }}</label>
                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                    <textarea  class="form-control" id="about" rows="3"
                                        placeholder="Especifique los detalles del servicio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis officia officiis ut iste at voluptatum et culpa doloribus cupiditate, minima enim dolorem optio minus omnis aliquam deleniti rerum blanditiis ipsa!</textarea>
                                </div>
                                @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label for="about">{{ 'Comentarios' }}</label>
                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                    <textarea  class="form-control" id="about" rows="3"
                                        placeholder="agregue alguna observación">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corporis molestias quisquam maiores! Hic vitae temporibus libero, facilis provident reprehenderit accusamus minima! Eos quis sunt est amet ullam enim vitae!</textarea>
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

      <div class="row">

        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active"  href="{{ route('tareas' )}}" role="tab" aria-controls="profile" aria-selected="true">
                Regresar
                </a>
              </li>

            </ul>
        </div>

      </div>

    </div>
</main>
