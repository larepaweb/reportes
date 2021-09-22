<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\User;

class UsersDatatableController extends Controller
{

    public function getEmployers(){

        $users = User::where([
                                ['role_name', '!=', 'cliente']
                 ]);

       return Datatables::of($users)
                ->addColumn('name', function (User $user) {
                                return $user->profile->contact_name;
                })
                ->addColumn('telefono', function (User $user) {
                                return $user->profile->phone;
                })
                ->editColumn('created_at', function (User $user) {
                return $user->created_at->format('d/m/Y');
                })
                ->make(true);

    }

    public function getCostumers(){

        $users = User::where('role_name', '=' , 'cliente' );

       return Datatables::of($users)
                ->addColumn('name', function (User $user) {
                                return $user->profile->contact_name;
                })
                ->addColumn('telefono', function (User $user) {
                                return $user->profile->phone;
                })
                ->editColumn('created_at', function (User $user) {
                return $user->created_at->format('d/m/Y');
                })
                ->make(true);

    }
}


