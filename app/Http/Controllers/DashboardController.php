<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        $datavotting = DB::table('votting')->where('nisn',$nisn)->count();
        return view('dashboard.dashboard',compact('datavotting'));
    }
    public function calon1(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        try{
            $data = [
                'nisn' => $nisn,
                'votting' => "1"
            ];
                $simpan = DB::table('votting')->insert($data);
                return Redirect::back()->with(['success'=>'Data Berhasil Disimpan']);
                } catch (\Exception $e){
                return Redirect::back()->with(['error'=>'Data Gagal Disimpan']);
            }
    }
    public function calon2(){
        $nisn = Auth::guard('siswa')->user()->nisn;
        try{
            $data = [
                'nisn' => $nisn,
                'votting' => "2"
            ];
                $simpan = DB::table('votting')->insert($data);
                return Redirect::back()->with(['success'=>'Data Berhasil Disimpan']);
                } catch (\Exception $e){
                return Redirect::back()->with(['error'=>'Data Gagal Disimpan']);
            }
    }

    public function dashboardadmin(){
        $calon1 = DB::table('votting')->where('votting',"1")->count();
        $calon2 = DB::table('votting')->where('votting',"2")->count();

        return view('dashboard.dashboard_admin',compact('calon1','calon2'));
    }
}
