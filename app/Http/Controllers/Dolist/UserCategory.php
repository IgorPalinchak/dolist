<?php

namespace App\Http\Controllers\Dolist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modesl\UsersCategory;

class UserCategory extends Controller
{
    public function __construct(){
//        $this->middleware('auth');
    }

    public function listAll()
    {
        $userCategories = Auth::user()->categories;
        $userTasks = Auth::user()->tasks;
        $ct = UsersCategory::with('user')->where('user_id', Auth::user()->id)
            ->with('children')->where('parent_id', 0)->paginate('3');
        dump($ct);
        dd($userCategories->groupBy('parent_id'), $userTasks, Auth::user()->id);
        return view('dolist.main');
    }
    public function categoryTasks($ctaId)
    {
        $userCategories = Auth::user()->categories;
        $userTasks = Auth::user()->tasks;
        dd($userCategories->groupBy('parent_id'), $userTasks, Auth::user()->id);
        return view('dolist.main');
    }

    public function index(){
        $userCategories = Auth::user()->categories;
        $userTasks = Auth::user()->tasks;
        $ct = UsersCategory::with('user')->where('user_id', Auth::user()->id)
            ->with('children')->where('parent_id', 0)->paginate('3');
        dump($ct);
        dd($userCategories->groupBy('parent_id'), $userTasks, Auth::user()->id);
        return view('dolist.main');
    }
    public function create(){
        echo 'create';
    }
    public function store(Request $request){
        echo 'store';
    }
    public function show($id){
        echo 'show';
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
