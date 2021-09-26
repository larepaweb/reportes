 <x-layouts.app>
<div class="row">

  <div class="col-md-8">
    <div class="card card-profile card-plain">
      <div class="row">

        <div class="col-lg-12 ps-0 my-auto">
          <div class="card-body text-left">
              <div class="p-md-0 pt-3">
              <h5 class="font-weight-bolder mb-0">Estado</h5>
              <p class="mb-2">{{ $task->status  }}</p>
            </div>
            <div class="p-md-0 pt-3">
              <h5 class="font-weight-bolder mb-0">Fecha de actividad</h5>
              <p class="mb-2">{{ $task->activity_date  }}</p>
            </div>
            <div class="p-md-0 pt-3">
              <h5 class="font-weight-bolder mb-0">Cliente</h5>
              <p class="mb-2"> {{ $cliente->profile->contact_name }} </p>
            </div>
            <div class="p-md-0 pt-3">
              <h5 class="font-weight-bolder mb-0">Técnico</h5>
              <p class="mb-2">{{ $tecnico->profile->contact_name }}</p>
            </div>

            <div class="p-md-0 pt-3">
              <h5 class="font-weight-bolder mb-0">Titulo</h5>
              <p class="mb-2">{{ $task->title }}</p>
            </div>
            <div class="p-md-0 pt-3">
              <h5 class="font-weight-bolder mb-0">Descripción del servicio</h5>
              <p class="mb-2">{{ $task->activity_desc }}</p>
            </div>

            @if($task->activity_comment )
                <div class="p-md-0 pt-3">
                <h5 class="font-weight-bolder mb-0">Comentarios</h5>
                <p class="mb-2">{{ $task->activity_comment }}</p>
                </div>
            @endif
          </div>
        </div>
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


</x-layouts.app>







