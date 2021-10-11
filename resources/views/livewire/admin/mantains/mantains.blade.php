<x-layouts.app>
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

                                <table id="example5" class=" nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                                            <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Técnico</th>
                                            <th></th>
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
                                            <td class="text-center"> <a href="{{route('editar-mantenimientos')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-mantenimientos')}}"  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar boleta">
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
                                                <p class="text-xs font-weight-bold mb-0">22/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-mantenimientos')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-mantenimientos')}}"  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar boleta">
                                                    <i class="far fa-envelope text-secondary "></i>
                                                </a>
                                                <a href=""   data-bs-toggle="tooltip"
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
                                                <p class="text-xs font-weight-bold mb-0">24/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-mantenimientos')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-mantenimientos')}}"  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar boleta">
                                                    <i class="far fa-envelope text-secondary "></i>
                                                </a>
                                                <a href=""   data-bs-toggle="tooltip"
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
                                                <p class="text-xs font-weight-bold mb-0">24/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-mantenimientos')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-mantenimientos')}}"  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar boleta">
                                                    <i class="far fa-envelope text-secondary "></i>
                                                </a>
                                                <a href=""   data-bs-toggle="tooltip"
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
                                                <p class="text-xs font-weight-bold mb-0">24/10/2021</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mark Twain</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Steve Job</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('editar-mantenimientos')}}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Editar">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="{{route('ver-mantenimientos')}}"  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Ver">
                                                    <i class="cursor-pointer far fa-eye text-secondary"></i>
                                                </a>
                                                <a onclick="confirmar()" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Enviar boleta">
                                                    <i class="far fa-envelope text-secondary "></i>
                                                </a>

                                                <a href=""  data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar">
                                                    <i class="far fa-trash-alt text-secondary "></i>
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
                    <h6 class="mb-0" style="float:left">{{ __('Detalles de boleta de mantenimiento') }}</h6>
                    <h6 class="mb-0" style="float:right">Correlativo Nro. $ mantain </h6>
                </div>
                <div class="card-body pt-4 p-3">

                    <form action="{{ route('store.mantains') }}" method="POST" role="form text-left" enctype="multipart/form-data">
                        @csrf

                        <div class="row" >
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tec" class="form-control-label">{{ __('Tecnico') }}</label>
                                    <div class="@error('tec')border border-danger rounded-3 @enderror" id="tec">
                                        <select name="tec" class="form-control" >
                                            <option selected>Seleccione un técnico</option>
                                            @foreach ($tecs as $tec)
                                                <option value="{{ $tec->id }}">{{  $tec->profile->contact_name }}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                    @error('tec') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cli" class="form-control-label">{{ __('Cliente') }}</label>
                                    <div class="@error('cli')border border-danger rounded-3 @enderror" id="cli">
                                        <select name="cli" class="form-control" >
                                            <option selected>Seleccione un cliente</option>
                                            @foreach ($clis as $c)
                                             <option value="{{ $c->id }}">{{ $c->profile->contact_name }}</option>

                                            @endforeach


                                        </select>

                                    </div>
                                    @error('cli') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                          <div class="col-md-4">

                                    <?php

                                        $month = date('m');
                                        $day = date('d');
                                        $year = date('Y');

                                        $today = $year . '-' . $month . '-' . $day;
                                    ?>

                                <div class="form-group">
                                    <label for="mantain_date" class="form-control-label">{{ __('Fecha') }}</label>
                                    <div class="@error('mantain_date')border border-danger rounded-3 @enderror" id="mantain_date">
                                        <input type="date" class="form-control" name="mantain_date" value="<?php echo $today; ?>" id="mantain_date">


                                    </div>
                                    @error('mantain_date') <div class="text-danger">{{ $message }}</div> @enderror
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
                                                    <input class="form-check-input" id="check1" name="check1" type="checkbox" onchange='Show1(this);' >
                                                    <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group form-inline">
                                                    <label for="user-email" >{{ __('Cantidad') }}</label>
                                                        <input  class="form-control" id="man1" name="man1" type="number" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man2"  name="man2" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">La hora y fecha del sistema están sincronizadas</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man3"  name="man3" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">El Disco duro aún tiene espacio libre para operar</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man4"  name="man4" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">El botón de encendido y reset funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man5"  name="man5" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Se realizo chequeo con antivirus</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man6"  name="man6" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Revisión de lectoras de proximidad RFID</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man7"  name="man7" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Se revisó el firewall de Windows</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man8"  name="man8" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">El sistema genera mensajes de voz en español</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man9"  name="man9" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Revisión del software Bioscan</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man10" name="man10" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Se realizó backup de base de datos</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man11" name="man11" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Las bocinas funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man12" name="man12" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1"> El teclado se encuentra en buen estado</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man13" name="man13" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">El mouse se encuentra en buen estado</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man14" name="man14" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1"> El lector biométrico funciona correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man15" name="man15" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">La cámara Webcam funciona correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man16" name="man16" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Se chequeo la tarjeta de red y conector rj45</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man17" name="man17" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">La tarjeta telefónica realiza llamadas correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man18" name="man18" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">La conexión de red funciona correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man19" name="man19" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1"> El UPS funciona correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man20" name="man20" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Los transformadores funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man21" name="man21" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">El regulador de voltaje funciona correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man22" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">La regleta de corriente funciona correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man23" name="man23" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">El panel de acceso apertura correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man24" name="man24" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Se realizó limpieza interna y externa del equipo</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="man25" name="man25" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Se revisó el firewall de Windows</label>
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label for="man26">{{ 'Comentario' }}</label>
                                                    <div class="@error('man26')border border-danger rounded-3 @enderror">
                                                        <textarea name="man26" class="form-control" id="man26" rows="3"
                                                            placeholder="Agregue comentarios adicionales" disabled></textarea>
                                                    </div>
                                                    @error('man26') <div class="text-danger">{{ $message }}</div> @enderror
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
                                                    <input class="form-check-input" type="checkbox"  id="check2" name="check2" onchange='Show2(this);'>
                                                    <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group form-inline">
                                                    <label for="user-email" >{{ __('Cantidad') }}</label>
                                                        <input id="tal1" name="tal1" class="form-control" type="number" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal2" name="tal2" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Se Calibro Resorte Principal</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal3" name="tal3" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Se revisó la calibración de la plumilla</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal4" name="tal4" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Revisión de chapa frontal y posterior</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal5" name="tal5" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Revisión de platina de liberación mecánica</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal6" name="tal6" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Revisión de los contactos eléctricos</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal7" name="tal7" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Los botones de apertura funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal8" name="tal8" checked disabled>
                                                    <label class="custom-control-label" for="customCheck1">Revisión de topes de frenado mecánico</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal9" name="tal9" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1"> Revisión de Loop Sensor</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal10" name="tal10" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Revisión de transformador</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal11" name="tal11" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Revisión de la bobina de campo magnético</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal12" name="tal12" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Revisión del tornillo de eje central</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal13" name="tal13" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Ajuste de alineación horizontal y vertical de la plumilla</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal14" name="tal14" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Chequeo de sensores de fin de carrera</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal15" name="tal15" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Revisión de pernos de anclaje</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal16" name="tal16" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Revisión de tornillos de sujeción de base de plumilla</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal17" name="tal17" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1"> Revisión de iluminación LED</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal18" name="tal18" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Revisión de calcomanías reflectivas</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal19" name="tal19" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">La plumilla presenta golpes o fracturas</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal20" name="tal20" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Revisión del chasis de la talanquera</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="tal21" name="tal21" checked disabled >
                                                    <label class="custom-control-label" for="customCheck1">Limpieza interna y externa</label>
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label for="tal22">{{ 'Comentario' }}</label>
                                                    <div class="@error('tal22')border border-danger rounded-3 @enderror">
                                                        <textarea id="tal22" name="tal22" class="form-control" rows="3"
                                                            placeholder="Agregue comentarios adicionales" disabled></textarea>
                                                    </div>
                                                    @error('tal22') <div class="text-danger">{{ $message }}</div> @enderror
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
                                                    <input class="form-check-input" type="checkbox"    id="check3" name="check3" onchange='Show3(this);' >
                                                    <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group form-inline">
                                                    <label for="user-email" >{{ __('Cantidad') }}</label>
                                                        <input id="dvr1" name="dvr1" disabled class="form-control" type="number">
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"   id="dvr2" name="dvr2" disabled  checked>
                                                    <label class="custom-control-label" for="customCheck1">La hora y fecha del sistema son correctas</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"   id="dvr3" name="dvr3" disabled  checked>
                                                    <label class="custom-control-label" for="customCheck1"> El DVR/NVR reconoce el disco duro</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"   id="dvr4" name="dvr4" disabled  checked>
                                                    <label class="custom-control-label" for="customCheck1"> El DVR/NVR muestra los videos del día anterior</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"   id="dvr5" name="dvr5" disabled  checked>
                                                    <label class="custom-control-label" for="customCheck1"> Capacidad total del disco duro</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"   id="dvr6" name="dvr6" disabled  checked>
                                                    <label class="custom-control-label" for="customCheck1">Los videos baluns funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"   id="dvr7" name="dvr7" disabled  checked>
                                                    <label class="custom-control-label" for="customCheck1">Las cámaras de CCTV se muestran en pantalla</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"   id="dvr8" name="dvr8" disabled  checked>
                                                    <label class="custom-control-label" for="customCheck1">Limpieza interna y externa</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="dvr9">{{ 'Comentario' }}</label>
                                                    <div class="@error('dvr9')border border-danger rounded-3 @enderror">
                                                        <textarea id="dvr9" name="dvr9" disabled  class="form-control" rows="3"
                                                            placeholder="Agregue comentarios adicionales"></textarea>
                                                    </div>
                                                    @error('dvr9') <div class="text-danger">{{ $message }}</div> @enderror
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
                                                    <input class="form-check-input" type="checkbox"    id="check4" name="check4" onchange='Show4(this);' >
                                                    <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group form-inline">
                                                    <label for="user-email" >{{ __('Cantidad') }}</label>
                                                        <input id="cam1" name="cam1" disabled class="form-control" type="number">
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="cam2" name="cam2" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">La caja de registro se conserva hermética</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="cam3" name="cam3" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Los transformadores funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="cam4" name="cam4" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Los videos baluns funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="cam5" name="cam5" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1"> El cable de señal de video funciona correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="cam6" name="cam6" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">El cable de electricidad funciona correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="cam7" name="cam7" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Limpieza del lente</label>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="about">{{ 'Comentario' }}</label>
                                                    <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                        <textarea id="cam8" name="cam8" disabled class="form-control" id="about" rows="3"
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
                                                    <input class="form-check-input" type="checkbox"    id="check5" name="check5" onchange='Show5(this);' >
                                                    <label class="custom-control-label" for="customCheck1">Activar este servicio</label>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="form-group form-inline">
                                                    <label for="user-email" >{{ __('Cantidad') }}</label>
                                                        <input id="mol1" name="mol1" disabled class="form-control" type="number">
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol2" name="mol2" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Los brazos o paletas funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol3" name="mol3" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Los solenoides funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol4" name="mol4" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Los fotosensores funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol5" name="mol5" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1"> Las conexiones eléctricas están correctas</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol6" name="mol6" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Los botones de apertura funcionan correctamente</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol7" name="mol7" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Revisión de topes de frenado mecánico</label>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol8" name="mol8" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Revisión de pernos de anclaje</label>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol9" name="mol9" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Revisión de tornillos de sujeción de base de plumilla</label>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol10" name="mol10" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Revisión del chasis del molinete</label>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="mol11" name="mol11" disabled checked>
                                                    <label class="custom-control-label" for="customCheck1">Limpieza interna y externa</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mol12">{{ 'Comentario' }}</label>
                                                    <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                        <textarea id="mol12" name="mol12" disabled class="form-control" id="mol12" rows="3"
                                                            placeholder="Agregue comentarios adicionales"></textarea>
                                                    </div>
                                                    @error('mol12') <div class="text-danger">{{ $message }}</div> @enderror
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
                                    <label for="imgs" class="form-control-label">{{ __('Imagenes de servicio completado') }}</label>
                                    <div class="file-loading @error('imgs')border border-danger rounded-3 @enderror" id="imgs">
                                        <input type="file" name="imgs" multiple class="file" data-overwrite-initial="false" >

                                    </div>
                                    @error('imgs') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                          <div class="col-md-6">
                                <div  class="form-group ">
                                    <div class="@error('signing')border border-danger rounded-3 @enderror " >


                                        <label class="" for="">Firma de aprobación:</label>
                                        <div class='js-signature'></div>


                            {{-- <br/>
                            <div id="sig" ></div>
                            <br/>
                            <button id="clear" class="btn btn-danger btn-sm">Limpiar firma</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea> --}}

                                    </div>
                                    @error('signing') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Crear B. Mantenimiento' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

      </div>

    </div>
 </main>
</x-layouts.app>

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

    function Show2(){



            if (document.getElementById('check2').checked){

                document.getElementById('tal1').removeAttribute('disabled');
                document.getElementById('tal2').removeAttribute('disabled');
                document.getElementById('tal3').removeAttribute('disabled');
                document.getElementById('tal4').removeAttribute('disabled');
                document.getElementById('tal5').removeAttribute('disabled');
                document.getElementById('tal6').removeAttribute('disabled');
                document.getElementById('tal7').removeAttribute('disabled');
                document.getElementById('tal8').removeAttribute('disabled');
                document.getElementById('tal9').removeAttribute('disabled');
                document.getElementById('tal10').removeAttribute('disabled');
                document.getElementById('tal11').removeAttribute('disabled');
                document.getElementById('tal12').removeAttribute('disabled');
                document.getElementById('tal13').removeAttribute('disabled');
                document.getElementById('tal14').removeAttribute('disabled');
                document.getElementById('tal15').removeAttribute('disabled');
                document.getElementById('tal16').removeAttribute('disabled');
                document.getElementById('tal17').removeAttribute('disabled');
                document.getElementById('tal18').removeAttribute('disabled');
                document.getElementById('tal19').removeAttribute('disabled');
                document.getElementById('tal20').removeAttribute('disabled');
                document.getElementById('tal21').removeAttribute('disabled');
                document.getElementById('tal22').removeAttribute('disabled');

            }else {

                document.getElementById('tal1').setAttribute("disabled", true);
                document.getElementById('tal2').setAttribute("disabled", true);
                document.getElementById('tal3').setAttribute("disabled", true);
                document.getElementById('tal4').setAttribute("disabled", true);
                document.getElementById('tal5').setAttribute("disabled", true);
                document.getElementById('tal6').setAttribute("disabled", true);
                document.getElementById('tal7').setAttribute("disabled", true);
                document.getElementById('tal8').setAttribute("disabled", true);
                document.getElementById('tal9').setAttribute("disabled", true);
                document.getElementById('tal10').setAttribute("disabled", true);
                document.getElementById('tal11').setAttribute("disabled", true);
                document.getElementById('tal12').setAttribute("disabled", true);
                document.getElementById('tal13').setAttribute("disabled", true);
                document.getElementById('tal14').setAttribute("disabled", true);
                document.getElementById('tal15').setAttribute("disabled", true);
                document.getElementById('tal16').setAttribute("disabled", true);
                document.getElementById('tal17').setAttribute("disabled", true);
                document.getElementById('tal18').setAttribute("disabled", true);
                document.getElementById('tal19').setAttribute("disabled", true);
                document.getElementById('tal20').setAttribute("disabled", true);
                document.getElementById('tal21').setAttribute("disabled", true);
                document.getElementById('tal22').setAttribute("disabled", true);


            }


    }

    function Show3(){



            if (document.getElementById('check3').checked){

                document.getElementById('dvr1').removeAttribute('disabled');
                document.getElementById('dvr2').removeAttribute('disabled');
                document.getElementById('dvr3').removeAttribute('disabled');
                document.getElementById('dvr4').removeAttribute('disabled');
                document.getElementById('dvr5').removeAttribute('disabled');
                document.getElementById('dvr6').removeAttribute('disabled');
                document.getElementById('dvr7').removeAttribute('disabled');
                document.getElementById('dvr8').removeAttribute('disabled');
                document.getElementById('dvr9').removeAttribute('disabled');


            }else {

                document.getElementById('dvr1').setAttribute("disabled", true);
                document.getElementById('dvr2').setAttribute("disabled", true);
                document.getElementById('dvr3').setAttribute("disabled", true);
                document.getElementById('dvr4').setAttribute("disabled", true);
                document.getElementById('dvr5').setAttribute("disabled", true);
                document.getElementById('dvr6').setAttribute("disabled", true);
                document.getElementById('dvr7').setAttribute("disabled", true);
                document.getElementById('dvr8').setAttribute("disabled", true);
                document.getElementById('dvr9').setAttribute("disabled", true);


            }


    }

    function Show4(){



            if (document.getElementById('check4').checked){

                document.getElementById('cam1').removeAttribute('disabled');
                document.getElementById('cam2').removeAttribute('disabled');
                document.getElementById('cam3').removeAttribute('disabled');
                document.getElementById('cam4').removeAttribute('disabled');
                document.getElementById('cam5').removeAttribute('disabled');
                document.getElementById('cam6').removeAttribute('disabled');
                document.getElementById('cam7').removeAttribute('disabled');
                document.getElementById('cam8').removeAttribute('disabled');


            }else {

                document.getElementById('cam1').setAttribute("disabled", true);
                document.getElementById('cam2').setAttribute("disabled", true);
                document.getElementById('cam3').setAttribute("disabled", true);
                document.getElementById('cam4').setAttribute("disabled", true);
                document.getElementById('cam5').setAttribute("disabled", true);
                document.getElementById('cam6').setAttribute("disabled", true);
                document.getElementById('cam7').setAttribute("disabled", true);
                document.getElementById('cam8').setAttribute("disabled", true);


            }


    }

    function Show5(){



            if (document.getElementById('check5').checked){

                document.getElementById('mol1').removeAttribute('disabled');
                document.getElementById('mol2').removeAttribute('disabled');
                document.getElementById('mol3').removeAttribute('disabled');
                document.getElementById('mol4').removeAttribute('disabled');
                document.getElementById('mol5').removeAttribute('disabled');
                document.getElementById('mol6').removeAttribute('disabled');
                document.getElementById('mol7').removeAttribute('disabled');
                document.getElementById('mol8').removeAttribute('disabled');
                document.getElementById('mol9').removeAttribute('disabled');
                document.getElementById('mol10').removeAttribute('disabled');
                document.getElementById('mol11').removeAttribute('disabled');
                document.getElementById('mol12').removeAttribute('disabled');



            }else {

                document.getElementById('mol1').setAttribute("disabled", true);
                document.getElementById('mol2').setAttribute("disabled", true);
                document.getElementById('mol3').setAttribute("disabled", true);
                document.getElementById('mol4').setAttribute("disabled", true);
                document.getElementById('mol5').setAttribute("disabled", true);
                document.getElementById('mol6').setAttribute("disabled", true);
                document.getElementById('mol7').setAttribute("disabled", true);
                document.getElementById('mol8').setAttribute("disabled", true);
                document.getElementById('mol9').setAttribute("disabled", true);
                document.getElementById('mol10').setAttribute("disabled", true);
                document.getElementById('mol11').setAttribute("disabled", true);
                document.getElementById('mol12').setAttribute("disabled", true);



            }


    }

    $(document).ready(function() {


        $('#example5').DataTable( {
            dom: 'Bfrtip',
            buttons: [

            ],
            bInfo: false,
            "responsive": true,
            "columnDefs": [
            { "orderable": false, "targets": 4 }
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

                this.api().columns([2]).every( function () {

                    var column = this;
                    var select = $('<br><select><option ></option></select>')
                        .appendTo( $(column.header()) )
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

    function confirmar(){
        Swal
        .fire({

            text: "¿Desea reenviar la Boleta de Servicio?",
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

 </script>



