<?php
/* Change namespace from 
   namespace App\Http\Controllers;
To:namespace App\Http\Controllers\OrganizationControllers;
   add use App\Http\Controllers\Controller;
*/
namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
    }



    
}
