<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Illuminate\Support\Facades\auth;


class agendaController extends Controller
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

    public function llenarlista()
    {

      
       
        $item= DB::table('tbl_tprecios')->orderBy('tpr_items')->get();
        //echo $user;
        return view('agenda.create',['item'=>$item]);
     
    }



    public function listado()
    {


        $user= Auth::user();
        $rol= $user->rol;
        //echo $user->name;

        if($rol=='1')
        {
        $lista_servicios= DB::table('tbl_servicios_ca')->where('serca_estado', '<>', 'E')->where('serca_estado', '<>', 'T')->orderBy('serca_id')->get();
        //echo $user;
        return view('agenda.show',['lservicios'=>$lista_servicios]);

        }

        else

        {
            $lista_servicios= DB::table('tbl_servicios_ca')->where('serca_estado', '=', 'EC')->where('serca_estado', '<>', 'T')->where('serca_empresa_nit', $user->nit )->orderBy('serca_id')->get();
            $lis= DB::table('tbl_servicios_ca')->where('serca_empresa_nit', $user->nit )->orderBy('serca_id')->first();
            //echo $user;
            return view('correo.show',['lservicios'=>$lista_servicios],compact('lis', 'user'));
    
        }
    }


    public function gdetalle($id)
    {

       // $detalle=DB::table('tbl_servicios_de')->where('serde_codservicio', $id)->get();
        $cabecera=DB::table('tbl_servicios_ca')->where('serca_id', $id)->first();
        $item=DB::table('tbl_tprecios')->orderby('tpr_items')->get();

        $detalle = DB::table('tbl_servicios_de')
        ->join('tbl_tprecios', 'tbl_servicios_de.serde_item', '=', 'tbl_tprecios.tpr_codp')
        ->where('tbl_servicios_de.serde_codservicio', $id)
        
        ->get();
		
        return view('agenda.showdetalle',compact('detalle','cabecera','item'));
    }








    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $empresas=DB::table('tbl_clientes')->orderby('cli_nombres')->get();

        return view('agenda.create',compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $n=$request->nit;

        $nombre =DB::table('tbl_clientes')->where('cli_cedula', $n)->first();
        $name= $nombre->cli_nombres;


        $ldate = date('Y-m-d');
        $mytime = Carbon::now();
        $serv= DB::table('tbl_servicios_ca')->insert([
            'serca_referencia'=>$request->referencia,
         
            'serca_empresa_nit'=>$request->nit,
            'serca_empresa_nombre'=>$name,
            'serca_estado'=>'P',
            'serca_fecha'=>$ldate,
            'serca_orden'=>$request->orden,
            'serca_contacto'=>$request->contacto,
            'serca_cargo'=>$request->cargo,
            'serca_nas'=>$request->nas,
            'serca_descc'=>$request->descc,
            'serca_fecha_entrega'=>$request->fecha_entrega,
            'serca_general'=>$request->general,
            'serca_codicionp'=>$request->condiciones

            
           // echo $mytime->toDateTimeString();

            

        ]);


        
        return redirect()->route('lista_agenda')->with('success','registro completo');





    }




    public function grabadetalle(Request $request)
    { 

        $valida=DB::table('tbl_servicios_ca')->whereIn('serca_estado', ['EC', 'A', 'R', 'E'])->where('serca_id', $request->codigo)->count();

        if($valida>0)
        {
             echo 'NO se puede agregar items a servicios en estado EC,A, R, E';

        }

        else
        {



            
      
        



        $itemde= DB::table('tbl_servicios_de')->insert([
            'serde_codservicio'=>$request->codigo,
            'serde_item'=>$request->item,
            'serde_cantidad'=>$request->cantidad
            

            

        ]);
        //return redirect()->route('lista_agenda')->with('success','registro completo');
        //echo 'yes';
        $cod= $request->codigo;
        //$detalle=DB::table('tbl_servicios_de')->where('serde_codservicio', $cod)->get();

        $detalle = DB::table('tbl_servicios_de')
            ->join('tbl_tprecios', 'tbl_servicios_de.serde_item', '=', 'tbl_tprecios.tpr_codp')
            ->where('tbl_servicios_de.serde_codservicio', $cod)
            
            ->get();





        $cabecera=DB::table('tbl_servicios_ca')->where('serca_id', $cod)->first();
        $item=DB::table('tbl_tprecios')->orderby('tpr_items')->get();

        
		
        return view('agenda.showdetalle',compact('detalle','cabecera','item'));

    }


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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editca($id)
    {
        $serca = DB::table('tbl_servicios_ca')->where('serca_id', $id)->first();
		
        return view('agenda.edit',compact('serca'));
        
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    

        

        DB::table('tbl_servicios_ca')->where('serca_id', $id)->update([
            
            'serca_referencia'=>$request->referencia,     
       
            'serca_estado'=>$request->estado,
            'serca_orden'=>$request->orden,
            'serca_nas'=>$request->nas,
            'serca_descc'=>$request->descc,
            'serca_contacto'=>$request->contacto,
            'serca_cargo'=>$request->cargo,
            'serca_codicionp'=>$request->condiciones
        
        ]);

        return redirect()->route('lista_agenda')->with('success',' Actualizacion completa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borra($id)
    {

        DB::table('tbl_servicios_ca')->where('serca_id', $id)->update([
            
           
            'serca_estado'=>'E'
        
            ]);

            return redirect()->route('lista_agenda')->with('success',' Registro Eliminado');
    }


    public function borra_item($orden, $item)
    {

//        $orden= $request->orden;
      //  $item= $request->item;


       DB::table('tbl_servicios_de')->where('serde_codservicio', $orden)->where('serde_item', $item)->delete();
        //DB::table('tbl_servicios_de')->where('serca_id', $orden)->delete();
       
       // DB::table('tbl_servicios_de')->where('serde_codservicio', $orden)->delete();
            
      
      $detalle=DB::table('tbl_servicios_de')->where('serde_codservicio', $orden)->get();
       $cabecera=DB::table('tbl_servicios_ca')->where('serca_id', $orden)->first();
        $item=DB::table('tbl_tprecios')->orderby('tpr_items')->get();

        
		
       return view('agenda.showdetalle',compact('detalle','cabecera','item'));
    }



    public function ver_novedad($id)
    {

      
       
        $nov= DB::table('tbl_novedades')->where('nov_id', $id)->get();
        //echo $user;
        return view('agenda.shownovedades', compact('nov'));
     
    }





    public function fecha()
    {

      
        $ldate = date('Y-m-d');

        echo $ldate;
    }



    public function enviar1(){


        echo "hola";
    }




}
