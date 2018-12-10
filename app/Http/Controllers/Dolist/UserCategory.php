<?php

namespace App\Http\Controllers\Dolist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modesl\UsersCategory;

class UserCategory extends Controller
{
    public function dashboard()
    {
        $userCategories = Auth::user()->categories;
        $userTasks = Auth::user()->tasks;
        dd($userCategories->groupBy('parent_id'), $userTasks, Auth::user()->id);
        return view('dolist.main');
    }
}
