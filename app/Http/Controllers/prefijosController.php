<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\Hash;

class prefijosController extends Controller
{
    

    public function lista_pre()
    {
        //
        //$user= DB::table('users')->get();
        //echo $user;
    
        $lprefijo = DB::table('tbl_prefijos')->get();
        




        return view('prefijos.show_prefijos',['lprefijo'=>$lprefijo]);
    }




    public function store(Request $request)
    {

        $valida=DB::table('tbl_prefijos')->where('pre_prefijo', $request->prefijo)->exists();

        if($valida==true)

        {
            echo "El Prefijo ya existe en la tabla prefijos";
        }
        else
        {

            $user= DB::table('tbl_prefijos')->insert([
                'pre_prefijo'=>$request->prefijo,
                'pre_desc'=>$request->predesc
               
    
    
            ]);
            return redirect()->route('show_pre')->with('success','registro completo');
            //return view('clientes.index',compact('user'));
        }
            
        }



        public function borra_pre($id)
        {
    
           // $id= $request->id;
    
    
           DB::table('tbl_prefijos')->where('pre_codigo', $id)->delete();
                
                
        
            
    
            return redirect()->route('show_pre')->with('success','Prefijo Eliminado');
        }





        public function update_pre(Request $request)
        {
    
            $id= $request->precodigo;
    
    
            DB::table('tbl_prefijos')->where('pre_codigo', $id)->update([
                
                'pre_prefijo'=>$request->prefijo,
                'pre_desc'=>$request->predesc
                
                
               
                
            
            ]);
    
            return redirect()->route('show_pre')->with('success',' Prefijo Actualizado!');
        }




        public function edit_pre($id)
        {
            $pref = DB::table('tbl_prefijos')->where('pre_codigo', $id)->first();
            
            return view('prefijos.edit_prefijos',compact('pref'));
            
            
        }

}
