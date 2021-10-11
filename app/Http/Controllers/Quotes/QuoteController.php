<?php

namespace App\Http\Controllers\Quotes;

use App\Models\Ref;
use App\Models\User;
use App\Models\Quote;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Mail\CreateQuoteMail;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;


class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_name', "=", "cliente")->get();
        $products = Product::all();
        $references = Ref::all();
        $quotes = Quote::latest('created_at')->first();


        $quote_correlative = $quotes ? $quotes->id : 0;
        $quote_correlative = date('ym') . ( str_pad($quote_correlative + 1, 2, '0', STR_PAD_LEFT)  );


        return view('livewire.admin.quotes.quotes', compact('users', 'products', 'references', 'quote_correlative') );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $quote = new Quote;

            $quote->quote_correlative = $request->quote_correlative;
            $quote->user_id = $request->customer_id;
            $quote->ref_id = $request->reference_name;
            $quote->products = $request->products;
            $quote->subtotal = $request->subtotal;
            $quote->iva = $request->iva;
            $quote->total = $request->total;
            $quote->save();

            // Mail::send(new CreateQuoteMail($request));

            Alert::success('Cotización Creada', 'Se creo exitosamente la cotización');

            return redirect()->route('cotizaciones');

    }

    public function getQuotes(){

       $quotes = Quote::all();

       return Datatables::of($quotes)
                ->addColumn('name', function (Quote $quote) {
                                return $quote->user->profile->contact_name;
                })
                ->addColumn('email', function (Quote $quote) {
                                return $quote->user->email;
                })
                ->editColumn('created_at', function (Quote $quote) {
                    return $quote->created_at->format('d/m/Y');
                })
                ->addColumn('reference', function (Quote $quote) {
                    return $quote->ref->reference_name;
                })
                ->make(true);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {

        return view('quotes.show', ['quote'=>$quote]);        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        return view('quotes.edit', ['quote'=>$quote]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quote::destroy($id);

        Alert::success('Cotización Eliminada', 'Se elimino exitosamente la cotización');
        return redirect()->route('cotizaciones');
    }
}
