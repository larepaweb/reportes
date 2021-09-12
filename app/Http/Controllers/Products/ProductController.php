<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


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
}
