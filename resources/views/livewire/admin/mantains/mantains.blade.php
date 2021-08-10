 <main>
    <div class="container-fluid py-4">
      <div class="row">

        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active"  data-bs-toggle="tab" href="#homeTab" role="tab" aria-controls="profile" aria-selected="true">
                Listar boletas de mantenimiento
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1"  data-bs-toggle="tab"  href="#metaTab" role="tab" aria-controls="dashboard" aria-selected="false">
                Crear boleta de mantenimiento
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
                                    <h5 class="mb-0">Boletas de Mantenimiento</h5>
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
                                                Fecha
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Cliente
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Técnico
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Estatus
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
                                                <p class="text-xs font-weight-bold mb-0">17/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Pendiente</p>
                                            </td>

                                            <td class="text-center">
                                                <a href="{{route('editar-mantenimientos')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-mantenimientos')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">2</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">22/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Terminado</p>
                                            </td>

                                            <td class="text-center">
                                                <a href="{{route('editar-mantenimientos')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-mantenimientos')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">3</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">24/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Pendiente</p>
                                            </td>

                                            <td class="text-center">
                                                <a href="{{route('editar-mantenimientos')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-mantenimientos')}}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">4</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">24/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Pendiente</p>
                                            </td>

                                            <td class="text-center">
                                                <a href="{{route('editar-mantenimientos')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-mantenimientos')}}" data-bs-toggle="tooltip"
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
                    <h6 class="mb-0">{{ __('Detalles de boleta de mantenimiento') }}</h6>
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
                                    <label for="user-name" class="form-control-label">{{ __('Tecnico') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <select wire:model="user.name" class="form-control" >
                                            <option selected>Seleccione un tecnico</option>
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
                                    <label for="user-name" class="form-control-label">{{ __('Cliente') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <select wire:model="user.name" class="form-control" >
                                            <option selected>Seleccione un cliente</option>
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
                                    <label for="user-name" class="form-control-label">{{ __('Fecha') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input type="date" class="form-control" name="" id="">

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                                <div class="col-md-12">
                                    <div class="accordion" id="accordionRental">
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            MANTENIMIENTO DE COMPUTADORAS Y MÓDULOS BIOMETRICOS
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                        </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                        <div class="accordion-body text-sm opacity-8">

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" id="check1" type="checkbox" onchange='Show1(this);' value="" id="fcustomCheck1" >
                                                <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group form-inline">
                                                <label for="user-email" >{{ __('Cantidad') }}</label>
                                                    <input  class="form-control" id="man1" type="number" disabled>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man2" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">La hora y fecha del sistema están sincronizadas</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man3" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">El Disco duro aún tiene espacio libre para operar</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man4" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">El botón de encendido y reset funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man5" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Se realizo chequeo con antivirus</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man6" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Revisión de lectoras de proximidad RFID</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man7" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Se revisó el firewall de Windows</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man8" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">El sistema genera mensajes de voz en español</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man9" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Revisión del software Bioscan</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man10" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Se realizó backup de base de datos</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man11" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Las bocinas funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man12" checked disabled>
                                                <label class="custom-control-label" for="customCheck1"> El teclado se encuentra en buen estado</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man13" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">El mouse se encuentra en buen estado</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man14" checked disabled>
                                                <label class="custom-control-label" for="customCheck1"> El lector biométrico funciona correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man15" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">La cámara Webcam funciona correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man16" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Se chequeo la tarjeta de red y conector rj45</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man17" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">La tarjeta telefónica realiza llamadas correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man18" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">La conexión de red funciona correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man19" checked disabled>
                                                <label class="custom-control-label" for="customCheck1"> El UPS funciona correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man20" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Los transformadores funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man21" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">El regulador de voltaje funciona correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man22" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">La regleta de corriente funciona correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man23" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">El panel de acceso apertura correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man24" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Se realizó limpieza interna y externa del equipo</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="man25" checked disabled>
                                                <label class="custom-control-label" for="customCheck1">Se revisó el firewall de Windows</label>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label for="about">{{ 'Comentario' }}</label>
                                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                    <textarea wire:model="user.about" class="form-control" id="man26" rows="3"
                                                        placeholder="Agregue comentarios adicionales" disabled></textarea>
                                                </div>
                                                @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>


                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            MANTENIMIENTO DE TALANQUERAS
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                        </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" >
                                                <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group form-inline">
                                                <label for="user-email" >{{ __('Cantidad') }}</label>
                                                    <input  class="form-control" type="number">
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Se Calibro Resorte Principal</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Se revisó la calibración de la plumilla</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de chapa frontal y posterior</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de platina de liberación mecánica</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de los contactos eléctricos</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Los botones de apertura funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de topes de frenado mecánico</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"> Revisión de Loop Sensor</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de transformador</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de la bobina de campo magnético</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión del tornillo de eje central</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Ajuste de alineación horizontal y vertical de la plumilla</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Chequeo de sensores de fin de carrera</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de pernos de anclaje</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de tornillos de sujeción de base de plumilla</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"> Revisión de iluminación LED</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de calcomanías reflectivas</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">La plumilla presenta golpes o fracturas</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión del chasis de la talanquera</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Limpieza interna y externa</label>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label for="about">{{ 'Comentario' }}</label>
                                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                    <textarea wire:model="user.about" class="form-control" id="about" rows="3"
                                                        placeholder="Agregue comentarios adicionales"></textarea>
                                                </div>
                                                @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>


                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            MANTENIMIENTO DE DVR Y NVR
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                        </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" >
                                                <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group form-inline">
                                                <label for="user-email" >{{ __('Cantidad') }}</label>
                                                    <input  class="form-control" type="number">
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">La hora y fecha del sistema son correctas</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"> El DVR/NVR reconoce el disco duro</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"> El DVR/NVR muestra los videos del día anterior</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"> Capacidad total del disco duro</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Los videos baluns funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Las cámaras de CCTV se muestran en pantalla</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Limpieza interna y externa</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="about">{{ 'Comentario' }}</label>
                                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                    <textarea wire:model="user.about" class="form-control" id="about" rows="3"
                                                        placeholder="Agregue comentarios adicionales"></textarea>
                                                </div>
                                                @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>


                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            MANTENIMIENTO DE CÁMARAS DE CCTV
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                        </button>
                                        </h5>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" >
                                                <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group form-inline">
                                                <label for="user-email" >{{ __('Cantidad') }}</label>
                                                    <input  class="form-control" type="number">
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">La caja de registro se conserva hermética</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Los transformadores funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Los videos baluns funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"> El cable de señal de video funciona correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">El cable de electricidad funciona correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Limpieza del lente</label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="about">{{ 'Comentario' }}</label>
                                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                    <textarea wire:model="user.about" class="form-control" id="about" rows="3"
                                                        placeholder="Agregue comentarios adicionales"></textarea>
                                                </div>
                                                @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>


                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header" id="headingFifth">
                                        <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                            MANTENIMIENTO DE MOLINETES
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                        </button>
                                        </h5>
                                        <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" >
                                                <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group form-inline">
                                                <label for="user-email" >{{ __('Cantidad') }}</label>
                                                    <input  class="form-control" type="number">
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Los brazos o paletas funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Los solenoides funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Los fotosensores funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"> Las conexiones eléctricas están correctas</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Los botones de apertura funcionan correctamente</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de topes de frenado mecánico</label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de pernos de anclaje</label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión de tornillos de sujeción de base de plumilla</label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Revisión del chasis del molinete</label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1">Limpieza interna y externa</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="about">{{ 'Comentario' }}</label>
                                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                    <textarea wire:model="user.about" class="form-control" id="about" rows="3"
                                                        placeholder="Agregue comentarios adicionales"></textarea>
                                                </div>
                                                @error('user.about') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>


                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>

                        <div class="row" >
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Imagen de servicio completado') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <input type="file" name="" id="">

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror" id="user-name">
                                        <textarea class="form-control" name="" id="" placeholder="Agregar firma digital"></textarea>

                                    </div>
                                    @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Crear Tarea' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

      </div>

    </div>
 </main>

 <script>


        function Show1(){



        if (document.getElementById('check1').checked){

            document.getElementById('man1').removeAttribute('disabled');
            document.getElementById('man2').removeAttribute('disabled');
            document.getElementById('man3').removeAttribute('disabled');
            document.getElementById('man4').removeAttribute('disabled');
            document.getElementById('man5').removeAttribute('disabled');
            document.getElementById('man6').removeAttribute('disabled');
            document.getElementById('man7').removeAttribute('disabled');
            document.getElementById('man8').removeAttribute('disabled');
            document.getElementById('man9').removeAttribute('disabled');
            document.getElementById('man10').removeAttribute('disabled');
            document.getElementById('man11').removeAttribute('disabled');
            document.getElementById('man12').removeAttribute('disabled');
            document.getElementById('man13').removeAttribute('disabled');
            document.getElementById('man14').removeAttribute('disabled');
            document.getElementById('man15').removeAttribute('disabled');
            document.getElementById('man16').removeAttribute('disabled');
            document.getElementById('man17').removeAttribute('disabled');
            document.getElementById('man18').removeAttribute('disabled');
            document.getElementById('man19').removeAttribute('disabled');
            document.getElementById('man20').removeAttribute('disabled');
            document.getElementById('man21').removeAttribute('disabled');
            document.getElementById('man22').removeAttribute('disabled');
            document.getElementById('man23').removeAttribute('disabled');
            document.getElementById('man24').removeAttribute('disabled');
            document.getElementById('man25').removeAttribute('disabled');
            document.getElementById('man26').removeAttribute('disabled');

        }else {

            document.getElementById('man1').setAttribute("disabled", true);
            document.getElementById('man2').setAttribute("disabled", true);
            document.getElementById('man3').setAttribute("disabled", true);
            document.getElementById('man4').setAttribute("disabled", true);
            document.getElementById('man5').setAttribute("disabled", true);
            document.getElementById('man6').setAttribute("disabled", true);
            document.getElementById('man7').setAttribute("disabled", true);
            document.getElementById('man8').setAttribute("disabled", true);
            document.getElementById('man9').setAttribute("disabled", true);
            document.getElementById('man10').setAttribute("disabled", true);
            document.getElementById('man11').setAttribute("disabled", true);
            document.getElementById('man12').setAttribute("disabled", true);
            document.getElementById('man13').setAttribute("disabled", true);
            document.getElementById('man14').setAttribute("disabled", true);
            document.getElementById('man15').setAttribute("disabled", true);
            document.getElementById('man16').setAttribute("disabled", true);
            document.getElementById('man17').setAttribute("disabled", true);
            document.getElementById('man18').setAttribute("disabled", true);
            document.getElementById('man19').setAttribute("disabled", true);
            document.getElementById('man20').setAttribute("disabled", true);
            document.getElementById('man21').setAttribute("disabled", true);
            document.getElementById('man22').setAttribute("disabled", true);
            document.getElementById('man23').setAttribute("disabled", true);
            document.getElementById('man24').setAttribute("disabled", true);
            document.getElementById('man25').setAttribute("disabled", true);
            document.getElementById('man26').setAttribute("disabled", true);


        }


        }

 </script>



