 <x-layouts.app>
<div class="row">

  <div class="col-md-8">
    <div class="card card-profile card-plain">
      <div class="row">

        <div class="col-lg-12 ps-0 my-auto">
          <div class="card-body text-left">
            <div class="p-md-0 pt-3">
              <h5 class="font-weight-bolder mb-0">Rol</h5>
              @switch($user->role_name)
                  @case("admin")
                      <p class="mb-2">Administrador</p>
                      @break
                  @case("tecnico")
                      <p class="mb-2">Técnico</p>
                      @break
                  @case($user->role_name)
                      <p class="mb-2">Cliente</p>
                      @break

                  @default

              @endswitch


            </div>
            <div class="p-md-0 pt-3">
              <h5 class="font-weight-bolder mb-0">Nombre</h5>
              <p class="mb-2">{{$user->profile->contact_name}}</p>
            </div>
            <div class="p-md-0 pt-3">
              <h5 class="font-weight-bolder mb-0">Correo</h5>
              <p class="mb-2">{{$user->email}}</p>
            </div>


            @if ($user->role_name == "cliente" )
                <div class="p-md-0 pt-3">
                <h5 class="font-weight-bolder mb-0">Teléfono</h5>
                <p class="mb-2">{{$user->profile->phone}}</p>
                </div>
                <div class="p-md-0 pt-3">
                <h5 class="font-weight-bolder mb-0">NIT</h5>
                <p class="mb-2">{{$user->profile->nit}}</p>
                </div>
                <div class="p-md-0 pt-3">
                <h5 class="font-weight-bolder mb-0">Nombre de empresa</h5>
                <p class="mb-2">{{$user->profile->business_name}}</p>
                </div>
                <div class="p-md-0 pt-3">
                <h5 class="font-weight-bolder mb-0">Dirección</h5>
                <p class="mb-2">{{$user->profile->address}}</p>
                </div>
                <div class="p-md-0 pt-3">
                    <h5 class="font-weight-bolder mb-0">Forma de pago</h5>
                    <p class="mb-2">{{$user->profile->payment_method}}</p>
                    </div>
                    <div class="p-md-0 pt-3">
                    <h5 class="font-weight-bolder mb-0">Persona de contacto</h5>
                    <p class="mb-2">{{$user->profile->contact_name}}</p>
                    </div>
                    <div class="p-md-0 pt-3">
                        @if ($user->profile->isr)
                            <h5 class="font-weight-bolder mb-0">Si es agente retenedor de ISR</h5>
                        @else
                            <h5 class="font-weight-bolder mb-0">No es agente retenedor de ISR</h5>
                        @endif

                    </div>
                </div>



            @endif




        </div>
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


</x-layouts.app>







