<x-layouts.app>

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

                            <form action="{{ route( 'update.user' ) }}"  method="post" role="form text-left">
                                @csrf

                                <input type="hidden" name="user" value="{{ $user->id }}">
                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="user-role" class="form-control-label">{{ __('Rol') }}</label>
                                            <div class="@error('userrole')border border-danger rounded-3 @enderror" id="userrole">
                                                <select wire:model="userrole" class="form-control" name="userrole">
                                                    <option value="{{ $user->role_name}}" >
                                                        @switch( $user->role_name )
                                                            @case("admin")
                                                                Administrador
                                                                @break
                                                            @case("tecnico")
                                                                Técnico
                                                                @break
                                                            @case("cliente")
                                                                Cliente
                                                                @break
                                                            @default

                                                        @endswitch

                                                    </option>
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Técnico</option>
                                                    <option value="3">Cliente</option>
                                                </select>

                                            </div>
                                            @error('username') <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="user-name" class="form-control-label">{{ __('Nombre') }}</label>
                                            <div class="@error('username')border border-danger rounded-3 @enderror">
                                                <input class="form-control" type="text" step="0.01"
                                                    name="username" id="username" value="{{ $user->profile->contact_name}}">
                                            </div>
                                            @error('username') <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="useremail" class="form-control-label">{{ __('Correo') }}</label>
                                            <div class="@error('useremail') border border-danger rounded-3 @enderror">
                                                <input  id="useremail"  name="useremail" class="form-control" type="email" value="{{ $user->email}}">
                                            </div>
                                            @error('useremail') <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    @if ($user->role_name == "cliente" )
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userphone" class="form-control-label">{{ __('Telefono') }}</label>
                                                <div class="@error('userphone')border border-danger rounded-3 @enderror">
                                                    <input  class="form-control" type="tel"
                                                        id="userphone" name="userphone" value="{{ $user->profile->phone }}">
                                                </div>
                                                @error('userphone') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                    @endif

                                </div>

                                @if ($user->role_name == "cliente" )
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="usernit" class="form-control-label">{{ __('NIT') }}</label>
                                                <div class="@error('usernit') border border-danger rounded-3 @enderror">
                                                    <input  class="form-control" type="text"
                                                        id="usernit" name="usernit" value="{{ $user->profile->nit}}">
                                                </div>
                                                @error('usernit') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userbusiness" class="form-control-label">{{ __('Teléfono 2') }}</label>
                                                <div class="@error('userbusiness') border border-danger rounded-3 @enderror">
                                                    <input value="{{ $user->profile->userbusiness }}" class="form-control" type="text"
                                                        id="userbusiness" name="userbusiness"  value="{{ $user->profile->business_name }}">
                                                </div>
                                                @error('user.location') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="useraddress">{{ 'Dirección' }}</label>
                                        <div class="@error('useraddress')border border-danger rounded-3 @enderror">
                                            <textarea class="form-control" id="useraddress" name="useraddress" rows="3"
                                                placeholder="Especifique dirección detallada">{{ $user->profile->address }}</textarea>
                                        </div>
                                        @error('useraddress') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="row" >
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user-name" class="form-control-label">{{ __('Forma de pago') }}</label>
                                                <div class="@error('userpayment')border border-danger rounded-3 @enderror" id="user-name">
                                                    <select id="userpayment"  name="userpayment" class="form-control" >

                                                        <option value="{{ $user->profile->payment_method }}">
                                                            @switch( $user->profile->payment_method )
                                                                @case("contra entrega")
                                                                    Contra Entrega
                                                                    @break
                                                                @case("7 dias")
                                                                    7 días
                                                                    @break
                                                                @case("15 dias")
                                                                    15 días
                                                                    @break
                                                                @case("30 dias")
                                                                    30 días
                                                                    @break
                                                                @default

                                                            @endswitch

                                                        </option>
                                                        <option value="contra entrega">Contra Entrega</option>
                                                        <option value="7 dias">7 días</option>
                                                        <option value="15 dias">15 días</option>
                                                        <option value="30 dias">30 días</option>
                                                    </select>

                                                </div>
                                                @error('username') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="usercontact" class="form-control-label">{{ __('Persona de contacto') }}</label>
                                                <div class="@error('usercontact')border border-danger rounded-3 @enderror">
                                                    <input value="{{ $user->profile->contact_name}}" class="form-control" type="text" step="0.01"
                                                        id="usercontact" name="usercontact" >
                                                </div>
                                                @error('usercontact') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="userisr" name="userisr" @if( $user->profile->isr ) checked @else @endif>
                                        <label class="custom-control-label" for="customCheck1">¿Es agente retenedor de ISR?</label>
                                        </div>
                                    </div>
                                @endif

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Actualizar Usuario' }}</button>
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

</x-layouts.app>
