<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserModel;
use DB;

class UserController extends Controller {

    //
    public function index(Request $request) {
        
        if($request->session()->has('id')){
        
            return view('data/users');
        }else{
            return redirect('/');
        }   
    }

    public function listUserEmployee(Request $request) {

        if ($request->session()->has('id')) {

            $result = UserModel::all();

            foreach ($result as $user) {

                if (($user->em_id != NULL ) && ($user->customer_id == NULL)) {

                    $list = DB::table('user')->join('employee', 'user.em_id', '=', 'employee.em_id')
                                    ->select('user.id',
                                             'user.username',
                                             'user.role',
                                             'user.em_id', 
                                             'employee.em_name',
                                             'employee.em_tel',
                                             'employee.em_file')->get();
                   
                    
                    return $list;
                }
            }
        } else {
            return redirect('/');
        }
    }

    public function listUserCustomer(Request $request) {

        if ($request->session()->has('id')) {
            $result = UserModel::all();

            foreach ($result as $user) {

                if (($user->em_id == NULL ) && ($user->customer_id != NULL)) {

                    $list = DB::table('user')->join('customer', 'user.customer_id', '=', 'customer.customer_id')
                                    ->select('user.id',
                                             'user.username',
                                             'user.role',
                                             'user.em_id', 
                                             'customer.customer_name',
                                             'customer.customer_status',
                                             'customer.customer_tel',
                                             'customer.customer_file')->get();


                    return $list;
                }
            }
        } else {
            return redirect('/');
        }
    }
}
