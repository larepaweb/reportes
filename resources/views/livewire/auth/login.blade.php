<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <img src="{{ get_setting_value( 'logo' ) != 'default.png' ? asset('storage/assets/img/logos/') ."/". get_setting_value( 'logo' ) : asset('assets/img/logos/default.png') }}" class="navbar-brand-img h-10" alt="Logo Dex Data Expert">
                            <p class="mb-0 mt-5">{{__('Credenciales de prueba:') }}</p>
                            <p class="mb-0">{{ __('Admin ') }}<b>{{ __('admin@reportes.com') }}</b></p>
                            <p class="mb-0">{{ __('Técnico ') }}<b>{{ __('tecnico@reportes.com') }}</b></p>
                            <p class="mb-0">{{ __('Cliente ') }}<b>{{ __('cliente@reportes.com') }}</b></p>
                            <p class="mb-0">{{ __('Passwords ') }}<b>{{ __('secret') }}</b></p>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="login" action="{{ route('login') }}" method="POST" role="form text-left">
                                <div class="mb-3">
                                    <label for="email">{{ __('Correo') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input  wire:model="email" id="email" type="email" class="form-control"
                                            placeholder="Correo" aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Contraseña') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input wire:model="password" id="password" type="password" class="form-control"
                                            placeholder="Contraseña" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Ingrese') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <small class="text-muted">{{ __('Olvido su contraseña? reiniciela') }} <a
                                    href="{{ route('forgot-password') }}"
                                    class="text-info text-gradient font-weight-bold">{{ __('Aquí') }}</a></small>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                            style="background-image:url('https://source.unsplash.com/collection/71700365')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
