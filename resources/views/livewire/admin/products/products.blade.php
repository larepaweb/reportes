 <main>
    <div class="container-fluid py-4">
      <div class="row">

        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active"  data-bs-toggle="tab" href="#homeTab" role="tab" aria-controls="profile" aria-selected="true">
                Listar Productos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1"  data-bs-toggle="tab"  href="#metaTab" role="tab" aria-controls="dashboard" aria-selected="false">
                Crear Producto
                </a>
              </li>

            </ul>
        </div>

      </div>



      <div class="container-fluid py-4 tab-content">


        <div role="tabpanel" class="row mt-4  tab-pane fade in show active" id ="homeTab">


            <div class="row">

                <div class="col-12 alert alert-secondary" role="alert">
                    <span class="text-white"><strong>Las opciones de Crear, Editar y Ver no son funcionales!</strong> este solo es el maquetado visual de la aplicación</span>
                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="card ">
                        <div class="card-header pb-0 px-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Productos</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>

                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nombre
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Costo
                                            </th>


                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">1</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Producto</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">100</p>
                                            </td>

                                            <td class="text-center">
                                                <a href="{{route('editar-producto')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-producto')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">15</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Producto Alpha</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">7800</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-producto')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-producto')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">190</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Servicio XDF</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">1</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-producto')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-producto')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">10</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Lorem opsd</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">10</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-producto')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-producto')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
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
                    <h6 class="mb-0">{{ __('Detalles del producto') }}</h6>
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
                            <label for="about">{{ 'Descripción del producto/servicio' }}</label>
                            <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                <textarea class="form-control" id="about" rows="3"
                                    placeholder="Especifique los detalles del producto/servicio"></textarea>
                            </div>
                            @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Precio costo') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input class="form-control" type="number" step="0.01"
                                            placeholder="" id="producto">

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('Precio venta') }}</label>
                                    <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" step="0.01"
                                            placeholder="" id="producto">
                                    </div>
                                    @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row" >
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('ISR') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input  class="form-control" type="number" step="0.01"
                                            placeholder="" id="producto">

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('IVA') }}</label>
                                    <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                        <input  class="form-control" type="number" step="0.01"
                                            placeholder="" id="producto">
                                    </div>
                                    @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('Total') }}</label>
                                    <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                        <input  class="form-control" type="number" step="0.01"
                                            placeholder="" id="producto">
                                    </div>
                                    @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row file-loading form-group">

                                <input type="file" name="read_img" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">


                            {{-- <div class="col-md-6">
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user.location" class="form-control-label">{{ __('Correo de cliente') }}</label>
                                    <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                        <input wire:model="user.location" class="form-control" type="text"
                                            placeholder="@example.com" id="name">
                                    </div>
                                    @error('user.location') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div> --}}
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Crear Producto' }}</button>
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

 </script>


