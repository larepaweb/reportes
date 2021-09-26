<x-layouts.app>

 <main>
    <div class="container-fluid py-4">

      <div class="container-fluid py-4 tab-content">
            <div class="row">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">{{ __('Detalles de tareas') }}</h6>
                    </div>
                    <div class="card-body pt-4 p-3">



                        <form action="{{ route('update.task') }}" method="POST" role="form text-left">
                            @csrf

                            <input type="hidden" name="task" value="{{ $task->id }}" >
                            <div class="row" >
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="activity_date" class="form-control-label">{{ __('Fecha de actividad') }}</label>
                                        <div class="@error('activity_date')border border-danger rounded-3 @enderror" id="activity_date">
                                            <input name="activity_date" value="{{$task->activity_date}}" class="form-control datepicker" placeholder="Please select date" type="date" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        @error('activity_date') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="activity_customer" class="form-control-label">{{ __('Cliente') }}</label>
                                        <div class="@error('activity_customer')border border-danger rounded-3 @enderror" id="activity_customer">
                                            <select  name="activity_customer" class="form-control" >
                                                <option value="{{ $task->activity_customer }}">{{ $cliente->profile->contact_name }}</option>
                                                @foreach ($clts as $cl)
                                                <option value="{{ $cl->id }}">{{ $cl->profile->contact_name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        @error('activity_customer') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="activity_tec" class="form-control-label">{{ __('Tecnico') }}</label>
                                        <div class="@error('activity_tec')border border-danger rounded-3 @enderror" id="activity_tec">
                                            <select name="activity_tec" class="form-control" >
                                                <option value="{{ $task->activity_tec }}">{{ $tecnico->profile->contact_name }}</option>
                                                @foreach ($tecs as $t)
                                                    <option value="{{ $t->id }}">{{ $t->profile->contact_name }}</option>

                                                @endforeach
                                            </select>

                                        </div>
                                        @error('activity_tec') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="title">{{ 'Titulo' }}</label>
                                <div class="@error('title')border border-danger rounded-3 @enderror">
                                    <input  class="form-control" id="title" name="title" value="{{ $task->title}}"
                                        placeholder="Indique el titulo de la actividadEspecifique los detalles del servicio">
                                </div>
                                @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label for="activity_desc">{{ 'Descripción del servicio' }}</label>
                                <div class="@error('activity_desc')border border-danger rounded-3 @enderror">
                                    <textarea  name="activity_desc" class="form-control" id="activity_desc" rows="3"
                                        placeholder="Especifique los detalles del servicio">{{ $task->activity_desc}}</textarea>
                                </div>
                                @error('activity_desc') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label for="activity_comment">{{ 'Comentarios' }}</label>
                                <div class="@error('activity_comment')border border-danger rounded-3 @enderror">
                                    <textarea  name="activity_comment" class="form-control" id="activity_comment" rows="3"
                                        placeholder="agregue alguna observación">{{ $task->activity_comment}}</textarea>
                                </div>
                                @error('activity_comment') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>


                        <div class="row">

                            <div class="form-group form-check form-switch ps-0">

                                <input class="form-check-input ms-auto" type="checkbox" name="status" id="status"
                                   @if($task->status != "Pendiente") checked @endif  >

                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault">Cambiar estado de la tarea <b>Pendiente / Terminada</b></label>
                            </div>

                        </div>



                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Actualizar Tarea' }}</button>
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


</x-layouts.app>
