<x-layouts.app>
 <main>
    <div class="container-fluid py-4">

            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0" style="float:left">{{ __('Detalles de boleta de servicio') }}</h6>

                </div>
                <div class="card-body pt-4 p-3">

                    <form  action="{{ route('update.service') }}" method="POST" role="form text-left" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $service->id }}">

                        <div class="row" >

                          <div class="col-md-12">
                                <div class="form-group">
                                    <label for="task" class="form-control-label">{{ __('Actividad relacionada') }}</label>
                                    <div class="@error('task')border border-danger rounded-3 @enderror" id="task">
                                        <select name="task" class="form-control" >
                                            <option value="{{ $actividad->id }}">{{ $actividad->title }}</option>
                                            @foreach ($tasks as $t)
                                                <option value="{{ $t->id }}">{{ $t->title  }}</option>
                                            @endforeach


                                        </select>

                                    </div>
                                    @error('task') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>


                        </div>

                        <div class="row" >
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tec" class="form-control-label">{{ __('Tecnico') }}</label>
                                    <div class="@error('tec')border border-danger rounded-3 @enderror" id="tec">
                                        <select name="tec" class="form-control" required>
                                            <option value="{{ $tecni->id }}"">{{ $tecni->profile->contact_name }}</option>
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
                                        <select name="cli" class="form-control" required>
                                            <option value="{{ $client->id }}">{{ $client->profile->contact_name }}</option>
                                            @foreach ($clis as $c)
                                             <option value="{{ $c->id }}">{{ $c->profile->contact_name }}</option>

                                            @endforeach


                                        </select>

                                    </div>
                                    @error('cli') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                                    <?php

                                        $month = date('m');
                                        $day = date('d');
                                        $year = date('Y');

                                        $today = $year . '-' . $month . '-' . $day;
                                    ?>

                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="service_date" class="form-control-label">{{ __('Fecha') }}</label>
                                    <div class="@error('service_date')border border-danger rounded-3 @enderror" id="service_date">
                                        <input type="date" value="{{ $service->service_date }}"  class="form-control" name="service_date" id="service_date" required>

                                    </div>
                                    @error('service_date') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="desc">{{ 'Descripción del servicio' }}</label>
                            <div class="@error('desc')border border-danger rounded-3 @enderror">
                                <textarea name="desc" class="form-control" id="desc" rows="3"
                                    placeholder="Especifique los detalles del servicio" required>{{ $service->desc }}</textarea>
                            </div>
                            @error('desc') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="row" >
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type_visit" class="form-control-label">{{ __('Visita') }}</label>
                                    <div class="@error('type_visit')border border-danger rounded-3 @enderror" id="type_visit">
                                        <select name="type_visit" class="form-control" required>
                                            <option {{ $service->type_visit }}>{{ $service->type_visit }}</option>
                                            <option value="unica">Unica</option>
                                            <option value="complementaria">Complementaria</option>
                                            <option value="garantia">Garantia</option>
                                        </select>

                                    </div>
                                    @error('type_visit') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>



                              <?php $date = date('H:i');

                              ?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="in_time" class="form-control-label">{{ __('Hora entrada') }}</label>
                                    <div class="@error('in_time')border border-danger rounded-3 @enderror" id="in_time">
                                        <input type="time" class="form-control" name="in_time" id="in_time" value="{{ $service->in_time }}" required>

                                    </div>
                                    @error('in_time') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>


                        {{-- <div class="row" >
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="read_img" class="form-control-label">{{ __('Imagenes del servicio completado') }}</label>
                                    <div class="file-loading  @error('read_img')border border-danger rounded-3 @enderror" id="read_img">
                                        <input type="file" name="read_img" multiple class="file" data-overwrite-initial="false" required>

                                    </div>
                                    @error('read_img') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                          <div class="col-md-6">
                                <div  class="form-group ">
                                    <div class="@error('signing')border border-danger rounded-3 @enderror " >


                                        <label class="" for="">Firma de aprobación:</label>
                                        <div class='js-signature'></div> --}}


                            {{-- <br/>
                            <div id="sig" ></div>
                            <br/>
                            <button id="clear" class="btn btn-danger btn-sm">Limpiar firma</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea> --}}

                                    {{-- </div>
                                    @error('signing') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div> --}}


                        @if ( $service->pendientes )


                        <div class="form-group" id="tools">
                            <label for="pendientes">{{ 'Listado de pendientes' }}</label>
                            <div class="@error('pendientes')border border-danger rounded-3 @enderror " >
                                <textarea name="pendientes" class="form-control" id="pendientes" rows="3"
                                    placeholder="Descripción del pendiente">{{ $service->pendientes }}</textarea>
                            </div>
                            @error('pendientes') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        @endif

                        <div class="row">

                            <div class="form-group form-check form-switch ps-0">

                                <input class="form-check-input ms-auto" type="checkbox" name="status" id="status"
                                   @if($service->status != "Pendiente") checked @endif  >

                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault">Cambiar estado de la boleta <b>Pendiente / Terminada</b></label>
                            </div>

                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Actualizar B. Servicio' }}</button>
                        </div>
                    </form>



                </div>


            </div>


      <div class="row">

        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active"  href="{{ route('servicios' )}}" role="tab" aria-controls="profile" aria-selected="true">
                Regresar
                </a>
              </li>

            </ul>
        </div>

      </div>



    </div>
 </main>
</x-layouts.app>





