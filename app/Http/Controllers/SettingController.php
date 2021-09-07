<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $setting = Setting::find(1);

        $setting->num_service = $request->num_service;
        $setting->num_mantain = $request->num_mantain;
        $setting->moneda = $request->moneda;
        $setting->iva = $request->iva;
        $setting->isr = $request->isr;



        if($request->logo ){

            $file = $request->file('logo');
            $nombre = $file->getClientOriginalName();

            Storage::disk('logos')->put( $nombre ,  File::get($file));

            $setting->logo = $file->getClientOriginalName();
        }

        if($request->watermark ){


            $file2 = $request->file('watermark');
            $nombre = $file2->getClientOriginalName();

            Storage::disk('logos')->put( $nombre ,  File::get($file2));

            $setting->watermark = $file2->getClientOriginalName();
        }

        $setting->payment = $request->payment;
        $setting->warranty = $request->warranty;
        $setting->requeriments = $request->requeriments;
        $setting->mail_services = $request->mail_services;
        $setting->mail_mantain = $request->mail_mantain;
        $setting->save();

        return view('livewire.admin.config', compact('setting') );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $setting = Setting::find(1);

        $content = "<?php return {  json_encode($setting)  };";

        // File::put(config_path('app_settings.php'), $content);

        return view('livewire.admin.config', compact('setting') );
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
