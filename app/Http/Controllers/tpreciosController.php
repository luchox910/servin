<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class tpreciosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $prefijo= DB::table('tbl_prefijos')->get();
        //echo $user;
        
        return view('listadot.create', compact ('prefijo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prefijo= $request->prefijo;
        
        
      $data1 = DB::table('tbl_tprecios')->latest('tpr_codigo')->first();
      $valor= $data1->tpr_codigo +1;
      $pre = $prefijo.$valor;

      echo  $valor;

        $user= DB::table('tbl_tprecios')->insert([
            'tpr_items'=>$request->item,
            'tpr_cxu'=>$request->cu,
            'tpr_valor'=>$request->valor,
            'tpr_codp'=>$pre
            

        ]);
        return redirect()->route('listadototalc')->with('success','registro completo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function lista()
    {
        //
        $item= DB::table('tbl_tprecios')->get();
        //echo $user;
        
        return view('listadot.show',['item'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$cedula = $request->cedula;

        DB::table('tbl_tprecios')->where('tpr_codigo', $id)->update([
            
            'tpr_items'=>$request->desc,
            'tpr_cxu'=>$request->cxu,
            'tpr_valor'=>$request->valor
        
        
        ]);

        return redirect()->route('listacatalogo')->with('success',' Actualizacion completa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function borra($id)
    {

    

        DB::table('tbl_tprecios')->where('tpr_codigo', $id)->delete();

        return redirect()->route('listadototalc')->with('success','registro eliminado');
    }

    public function edit($id)
    {
        $item = DB::table('tbl_tprecios')->where('tpr_codigo', $id)->first();
		
        return view('listadot.edit',compact('item'));
    }


    public function prueba()
    {
       // $item = DB::table('tbl_tprecios')->where('tpr_codigo', $id)->first();
		
        //return view('listadot.edit',compact('item'));

        echo 'oila';
    }
}
