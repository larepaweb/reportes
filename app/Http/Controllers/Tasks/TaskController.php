<?php

namespace App\Http\Controllers\Tasks;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewTaskNotificationMail;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = User::where('role_name', "=", "cliente")->get();
        $technic = User::where('role_name', "=", "tecnico")->get();

        $tasks = Task::all();

        $task_correlative = count($tasks);
        $task_correlative = date('ym') . ( str_pad($task_correlative + 1, 2, '0', STR_PAD_LEFT)  );

        return view('livewire.admin.tasks.tasks', compact('clients', 'technic'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $task = new Task;

            $task->activity_date = $request->activity_date ;
            $task->activity_desc = $request->activity_desc ;

            if(  $request->activity_comment ){

                 $task->activity_comment = $request->activity_comment ;

            }

            $task->status = "Pendiente";
            $task->title = $request->title ;
            $task->start = $request->activity_date ;
            $task->end = $request->activity_date ;
            $task->activity_customer = $request->activity_customer ;
            $task->activity_tec = $request->activity_tec ;
            $task->save();


            $tecnico = User::find($request->activity_tec);
            $customer = User::find($request->activity_customer);

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

            Alert::success('Actividad creada', 'Se creo exitosamente la actividad');
            return redirect()->route('dashboard');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {

            $tecnico = User::find($task->activity_tec);
            $cliente = User::find($task->activity_customer);

            $tecs = User::where('role_name', 'tecnico')->get();
            $clts = User::where('role_name', 'cliente')->get();

        return view('tasks.edit', compact('task', 'tecnico', 'cliente', 'tecs', 'clts') );

    }


    public function show(Task $task)
    {
        $tecnico = User::find($task->activity_tec);
        $cliente = User::find($task->activity_customer);

        return view('tasks.show', compact('task', 'tecnico', 'cliente') );

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

            $task = Task::find( $request->task );

            $task->activity_date = $request->activity_date ;
            $task->activity_desc = $request->activity_desc ;

            if(  $request->activity_comment ){

                 $task->activity_comment = $request->activity_comment ;

            }

            if(  $request->status == 'on' ){

                 $task->status = "Terminado";

            }

            $task->title = $request->title ;
            $task->start = $request->activity_date ;
            $task->end = $request->activity_date ;
            $task->activity_customer = $request->activity_customer ;
            $task->activity_tec = $request->activity_tec ;
            $task->save();

            $tecnico = User::find($request->activity_tec);
            $customer = User::find($request->activity_customer);

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


            Alert::success('Actividad actualizada', 'Se actualizo exitosamente la actividad');
            return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $task = Task::destroy( $id );

            Alert::success('Actividad eliminada', 'Se elimino exitosamente la actividad');
            return redirect()->route('dashboard');

    }

    public function getTasks(){

        $tasks = Task::all();

        return Datatables::of($tasks)
                ->addColumn('customer', function (Task $task) {

                    $user = User::find($task->activity_customer);
                    return $user->profile->contact_name;
                })
                ->addColumn('tec', function (Task $task) {

                    $user = User::find($task->activity_tec);
                    return $user->profile->contact_name;
                })
                ->make(true);

    }


    public function activities(Request $request)
    {
        // https://www.itsolutionstuff.com/post/laravel-fullcalendar-example-tutorialexample.html
        //  https://www.positronx.io/create-events-in-laravel-using-fullcalendar-and-jquery-ajax/
        // https://www.webslesson.info/2021/03/how-to-implement-fullcalendar-in-laravel-8-using-ajax.html
        //

        if($request->ajax()) {

             $data = Task::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->where('status', 'Pendiente')
                       ->get(['id', 'title', 'start', 'end']);

             return response()->json($data);
        }


    }

    public function calendar(Request $request)
    {

        return view('dashboard.dashboard');

    }

    public function ajax(Request $request)
    {

        switch ($request->type) {
           case 'add':
              $event = Task::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);

              return response()->json($event);
             break;

           case 'update':
              $event = Task::find($request->id)->update([
                  'title' => $request->title,
                  'activity_date' => $request->start,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);

              return response()->json($event);
             break;

           case 'delete':
              $event = Task::find($request->id)->delete();

              return response()->json($event);
             break;

           default:
             $events = Task::all();
                return response()->json($event);
             break;
        }
    }

}
