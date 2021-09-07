<?php

use App\Models\Setting;


    /**
     * Show data from Setting model
     *
     * @param  String  $value
     * @return \Illuminate\Http\Response
     */

if( !function_exists('get_setting_value') ){
        function get_setting_value($value){

            $column = array('num_service', 'num_mantain', 'moneda', 'iva', 'isr', 'logo', 'watermark', 'payment', 'warranty', 'requeriments', 'mail_services', 'mail_mantain' );

            if( in_array( $value , $column) ){

                $setting = Setting::select($value)->first();
                return $setting->$value;

            }else{

                return "Sin datos";

            }

        }

}


