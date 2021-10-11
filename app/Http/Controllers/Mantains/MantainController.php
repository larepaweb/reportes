<?php

namespace App\Http\Controllers\Mantains;

use App\Models\User;
use App\Models\Mantain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MantainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tecs = User::where('role_name', 'tecnico')->get();
        $clis = User::where('role_name', 'cliente')->get();


       // $mantain = Mantain::latest('created_at')->first();

        // $mantain_correlative = $mantain ? $mantain->id : 0;
        // $mantain_correlative = ( str_pad($mantain_correlative + 1, 5, '0', STR_PAD_LEFT)  );

        return view('livewire.admin.mantains.mantains', compact('tecs', 'clis' ));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
