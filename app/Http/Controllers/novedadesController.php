<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\auth;

class novedadesController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aprueba(Request $request)
    {
        $codigo= $request->codigo;



        $validar=  DB::table('tbl_servicios_de')        
        ->where('serde_codservicio', $codigo)->count();

        if($validar<1)

        {

            echo"No se puede Gestionar Servicio hasta que no sean asignados Items   <a href='lista_agenda'> Volver</a>";
            //return redirect()->route('lista_agenda');
        }

        else

        {
        
        


        $novedad= $request->nov;

        $user= Auth::user();

        if ($novedad== 'A')
        {
  
            $ldate = date('Y-m-d');
            //$mytime = Carbon::now();
            $serv= DB::table('tbl_novedades')->insert([
                'nov_id'=>$request->codigo,
                'nov_novedad'=>$request->nov,
                'nov_comentarios'=>$request->comentarios,
                'nov_fecha'=>$ldate,
                'nov_usuario'=>$user->email
        

        ]);


        DB::table('tbl_servicios_ca')->where('serca_id', $codigo)->update([
            
           
            'serca_estado'=>'A'
        
            ]);
            echo"el documento fue Aprobado, Se envió notificacion al administrador <a href='lista_agenda'> Volver</a> ";
            


            }

            else
            if ($novedad== 'R')
            {
      
                $ldate = date('Y-m-d');
                //$mytime = Carbon::now();
                $serv= DB::table('tbl_novedades')->insert([
                    'nov_id'=>$request->codigo,
                    'nov_novedad'=>$request->nov,
                    'nov_comentarios'=>$request->comentarios,
                    'nov_fecha'=>$ldate,
                    'nov_usuario'=>$user->email
            
    
            ]);


            DB::table('tbl_servicios_ca')->where('serca_id', $codigo)->update([
            
           
                'serca_estado'=>'R'
            
                ]);
                echo"el documento fue rechazado, Se envió notificacion al administrador  <a href='lista_agenda'> Volver</a>";
                return redirect()->route('lista_agenda');
    
                }

                else
                {
                    echo"No se detecto accion";

                }

            }
        //return redirect()->route('lista_agenda')->with('success','registro completo');



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
    public function edit($id)
    {
        //
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
        //
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
}
