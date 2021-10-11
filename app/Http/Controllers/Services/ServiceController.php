<?php

namespace App\Http\Controllers\Services;

use App\Models\Task;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewTaskNotificationMail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Livewire\Admin\Services\Services;
use Yajra\Datatables\Datatables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tasks = Task::all();
        $tecs = User::where('role_name', 'tecnico')->get();
        $clis = User::where('role_name', 'cliente')->get();
        $service = Service::latest('created_at')->first();

        $service_correlative = $service ? $service->id : 0;
        $service_correlative = ( str_pad($service_correlative + 1, 5, '0', STR_PAD_LEFT)  );

        return view('livewire.admin.services.services', compact('tasks', 'tecs', 'clis', 'service_correlative' ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            $service = new Service;

            $service->task = $request->task;
            $service->tec = $request->tec ;
            $service->cli = $request->cli ;
            $service->service_date = $request->service_date ;
            $service->desc = $request->desc ;
            $service->type_visit = $request->type_visit ;
            $service->in_time = $request->in_time ;
            $service->out_time = date('H:i');
            $service->read_img = $request->read_img ;
            $service->pendientes = $request->pendientes ;
            $service->save();

            if( $request->pendientes  ){

                 $task = new Task;

                 $now = date('Y-M-d');
                 $tomorrow = date('Y-m-d', strtotime($now . ' +1 day'));

                $task->activity_date = $tomorrow  ;
                $task->activity_desc = $request->pendientes ;
                $task->status = "Pendiente";
                $task->title = "Actividad Pendiente Automatica" ;
                $task->start = $tomorrow ;
                $task->end = $tomorrow ;
                $task->activity_customer = $request->cli ;
                $task->activity_tec = $request->tec ;
                $task->save();


                $tecnico = User::find($request->tec);
                $customer = User::find($request->cli);

                $data_email = [
                    "fecha" => $task->activity_date,
                    "desc" => $task->activity_desc,
                    "comentario" => $task->activity_comment,
                    "cliente" => $tecnico->profile->contact_name,
                    "correo_cliente" => $tecnico->email,
                    "tecnico" => $customer->profile->contact_name,
                    "correo_tecnico" => $customer->email
                ];

                Mail::send(new NewTaskNotificationMail($data_email));

            }

            // Mail::send(new ServiceNotificationMail($data_email));

            Alert::success('Boleta de servicio creada', 'Se creo exitosamente la boleta');
            return redirect()->route('servicios');
    }


    public function getServices(){

        $service = Service::all();

       return Datatables::of($service)
                ->editColumn('fecha', function (Service $service) {

                    return $service->service_date;

                })
                ->addColumn('cliente', function (Service $service) {

                    $user = User::find($service->cli);
                    return $user->profile->contact_name;
                })
                ->addColumn('tecnico', function (Service $service) {

                    $user = User::find($service->tec);
                    return $user->profile->contact_name;
                })
                ->make(true);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = Task::all();
        $tecs = User::where('role_name', 'tecnico')->get();
        $clis = User::where('role_name', 'cliente')->get();

        $service = Service::find($id);

        $actividad = Task::find($service->task);
        $tecni = User::find($service->tec);
        $client = User::find($service->cli);


        return view('livewire.admin.services.edit-services', compact('tasks', 'tecs', 'clis', 'service', 'tecni', 'client', 'actividad' ));

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
            $service = Service::find($request->id);

            $service->task = $request->task;
            $service->tec = $request->tec ;
            $service->cli = $request->cli ;
            $service->service_date = $request->service_date ;
            $service->desc = $request->desc ;
            $service->type_visit = $request->type_visit ;
            $service->in_time = $request->in_time ;

            if($request->out_time){
                $service->out_time = $request->out_time;
            }

            if($request->read_img){
                $service->read_img = $request->read_img ;
            }

            if($request->pendientes){
                $service->pendientes = $request->pendientes ;
            }

            if($request->status == "on" ){
                $service->status = "Terminado" ;
            }

            $service->save();


            Alert::success('Boleta de servicio actualizada', 'Se actualizo exitosamente la boleta');
            return redirect()->route('servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);

        Alert::success('Boleta Eliminada', 'Se elimino exitosamente la boleta');
        return redirect()->route('servicios');
    }
}
