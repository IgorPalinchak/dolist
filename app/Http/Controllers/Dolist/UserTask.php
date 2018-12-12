<?php

namespace App\Http\Controllers\Dolist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modesl\UsersTask;

class UserTask extends Controller
{


    public function index($catId){

        $usersTasksByCat = UsersTask::with('user')->where('user_id', Auth::user()->id)
             ->where('users_category_id', $catId);
        dd($usersTasksByCat->get());

        return view('dolist.main');
    }
    public function create(){
        echo 'create';
    }
    public function store(Request $request){
        echo 'store';
    }
    public function show($id){
        echo 'show111';
    }
    public function edit($id){
        echo 'edit '.$id;
    }
    public function update(Request $request, $id){
        echo 'update';
    }
    public function destroy($id){
        echo 'destroy';
    }
}
