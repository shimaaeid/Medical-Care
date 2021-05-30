<?php
/* Change namespace from 
   namespace App\Http\Controllers;
To:namespace App\Http\Controllers\OrganizationControllers;
   add use App\Http\Controllers\Controller;
*/
namespace App\Http\Controllers\UserControllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $gov = DB::select('select * from governorates');

        //$sql = DB::select('select logo,name,about_us from blood_banks limit 3');

        //partnershow

        $rhos = $rlab = $rcen = $allArts = [];
        if(DB::select('SELECT count(*) As count from organizations')[0]->count)
            $rhos = DB::table('organizations')->get()->random(1)[0];
        if(DB::select('SELECT count(*) As count from labs_centers WHERE lab_or_center = ?',[1])[0]->count)
            $rlab = DB::table('labs_centers')->where('lab_or_center','=','0')->get();
        if(DB::select('SELECT count(*) As count from labs_centers WHERE lab_or_center = ?',[0])[0]->count)
            $rcen = DB::table('labs_centers')->where('lab_or_center','=','1')->get();

        //articles
        /* if(DB::select('SELECT count(*) As count from articles')[0]->count >= 3)
            $allArts=DB::select('SELECT * from articles  order by id  desc limit 3');     
            dump($allArts); */
        //articles
        if(DB::select('SELECT count(*) As count from articles WHERE approved = 1 AND type_id = 1')[0]->count >= 1)
            $allArts=DB::select('SELECT * from articles WHERE approved = 1 AND type_id = 1 order by id  desc limit 1 '); 
        // dump($allArts);
        if(DB::select('SELECT count(*) As count from articles WHERE approved = 1 AND type_id = 2')[0]->count >= 1)
        array_push($allArts,DB::select('SELECT * from articles WHERE approved = 1 AND type_id = 2 order by id  desc limit 1 ')[0]); 
        // dump($allArts);
        if(DB::select('SELECT count(*) As count from articles WHERE approved = 1 AND type_id = 3')[0]->count >= 1)
            array_push($allArts,DB::select('SELECT * from articles WHERE approved = 1 AND type_id = 3 order by id  desc limit 1 ')[0]); 
        // dd($allArts);
        return view('home',['governorates'=>$gov,'rhos'=>$rhos, 'rlab'=>$rlab, 'rcen'=>$rcen, 'articles'=>$allArts]);
    }
}
