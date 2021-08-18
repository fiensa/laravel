<?php

namespace Arungruang\Purwantara\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PurwantaraController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $data       = DB::table('data')->get();
        $response   = Http::get('https://reqres.in/api/users');
        // $response   = Http::post('https://reqres.in/api/users', [
        //     'name'  => 'Fiensa',
        //     'job'   => 'Web Developer',
        // ]);
        $test       = $response->object();
        // $post = $response->status();
        // dd($data[0]->name);
        return view('purwantara::index', ['data' => $test->data]);
        
        // return dd($test);
    }
}
