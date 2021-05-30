<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // For Super Admin
        $countrequest=$this->countrequest();
        $countrecent_activitie=$this->countrecent_activitie();
        $countnotifi=$this->countNotifi();
        $countmessage=$this->countmessage();
        $messages=$this->showMsg();
        view()->share('countrequest', $countrequest);
        view()->share('countrecent_activitie', $countrecent_activitie);
        view()->share('countnotifi', $countnotifi);
        view()->share('countmessage', $countmessage);
        view()->share('messages', $messages);

        // Website Social Links
        $social_links = $this->get_website_social();
        view()->share('website_social_links',$social_links);
    }

    public function countrecent_activitie(){
        
        $count=DB::table('recent_activities')
        ->select(DB::raw('count(id) as count'))->first();
        return $count;
    }
    public function countNotifi(){
        
        $countNotifi=DB::select('select count(id) as count from actions where seen=0')[0]; 
        return $countNotifi;
    }
    public function countrequest(){
        
        $count=DB::table('partner_requests')
        ->select(DB::raw('count(id) as count'))->where('partner_requests.approve','=',NULL)->first();
        return $count;
    }
    public function countmessage(){
        
        $countmessage=DB::table('user_messages')
        ->select(DB::raw('count(id) as count'))->where('seen','=',0)->first();
        return $countmessage;
    }
    public function showMsg(){
        $allMsgs=DB::table('user_messages')
           ->select('*')
           ->get();
           return $allMsgs;
    }

    // Website Social Links
    public function get_website_social(){
        return DB::select('SELECT * FROM `website_social` LIMIT 1')[0];
    }

}
