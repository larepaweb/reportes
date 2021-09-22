<?php

namespace App\Http\Controllers\Products;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\Products\ProductsosExport;
use App\Imports\Products\ProductsosImport;


class ProductController extends Controller
{

    public function index(Request $request){

        $products = Product::paginate(5);

        return view('livewire.admin.products.products', ['products' => $products] );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!$request->pid ){

            $product = new Product;

            $product->product_name = $request->productName;
            $product->cantidad = $request->cantidad;
            $product->pCompra = $request->pCompra;
            $product->pBase = $request->pBase;
            $product->isr = $request->isr;
            $product->iva = $request->iva;
            $product->pVenta = $request->pVenta;
            $product->utilidad = $request->utilidad;

            if( $request->imagenProducto ){

                $file = $request->file('imagenProducto');
                $nombre = $file->getClientOriginalName();

                Storage::disk('productos')->put( $nombre ,  File::get($file));

                $product->imagen = $file->getClientOriginalName();
            }
            $product->save();

            Alert::success('Producto Creado', 'Se creo exitosamente el producto');
            return redirect()->route('productos');


        }

        $this->update($request);

        Alert::success('Producto Actualizado', 'Se actualizo exitosamente el producto');
        return redirect()->route('productos');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {



            $product = Product::Find($request->pid);

            $product->product_name = $request->productName;
            $product->cantidad = $request->cantidad;
            $product->pCompra = $request->pCompra;
            $product->pBase = $request->pBase;
            $product->isr = $request->isr;
            $product->iva = $request->iva;
            $product->pVenta = $request->pVenta;
            $product->utilidad = $request->utilidad;

            if( $request->imagenProducto ){

                $file = $request->file('imagenProducto');
                $nombre = $file->getClientOriginalName();

                Storage::disk('productos')->put( $nombre ,  File::get($file));

                $product->imagen = $file->getClientOriginalName();

                $product->save();

                return true;

            }else{

            $product->save();

            return true;

            }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::Find($id);
        $product->delete();

        Alert::success('Producto Eliminado', 'Se elimino exitosamente el producto');
        return redirect()->route('productos');
    }

    public function importForm(){
        return view('livewire.admin.products.import-products');
    }

    public function import(Request $request)
    {

        $import = new ProductsosImport();


        try {
        // code
                $algo = Excel::import($import, $request->file('products'));
        if (!$algo)
            {
            throw new Exception("Error leyendo el archvio.");
            }
        // if something is not as expected
            // throw exception using the "throw" keyword

        // code, it won't be executed if the above exception is thrown
        } catch (Exception $errors) {
        // exception is raised and it'll be handled here
        // $e->getMessage() contains the error message

            $error = [$errors->getMessage()];

            return Redirect::back()->withErrors( $error );
            // echo $e->getMessage();
            die();

        }


        return view('livewire.admin.products.import-products', ['numRows'=>$import->getRowCount()]);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new ProductsosExport, 'productos.xlsx');
    }

}
