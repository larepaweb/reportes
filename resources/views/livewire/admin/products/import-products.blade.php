 <x-layouts.app>
 <main>
    <div class="container-fluid py-4">

      <div class="container-fluid py-4 tab-content">
            <div class="row">

                <div class="card">

    <div class="container mt-5">
        <h3>Importar productos</h3>

        @if ( $errors->any() )

            <div class="alert alert-danger">
                @foreach( $errors->all() as $error )<li>{{ $error }}</li>@endforeach
            </div>
        @endif

        @if(isset($numRows))
            <div class="alert alert-sucess">
                Se importaron {{$numRows}} registros.
            </div>
        @endif

        <form action="{{route('import.products')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-3">
                    <div class="custom-file">
                        <input type="file" name="products" class="custom-file-input" id="products">
                        <label class="custom-file-label" for="alumnos">Seleccionar archivo</label>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Importar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
                </div>
            </div>
      </div>



    </div>
</main>
</x-layouts.app>
