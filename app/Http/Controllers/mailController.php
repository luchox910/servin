<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\auth;

use DB;


class mailController extends Controller
{

   

  
    public function __construct()
    {
        $this->middleware('auth');
    }


////correod e lado del admin al cliente
    public function enviar_correo(Request $request){

        $id= $request->id;
        //$id='1';

        $user= Auth::user();


        DB::table('tbl_servicios_ca')->where('serca_id', $id)->update([
                              
            'serca_estado'=>'EC',
                
        ]);

     

        $reg = DB::table('tbl_servicios_ca')
        ->join('tbl_clientes', 'tbl_servicios_ca.serca_empresa_nit', '=', 'tbl_clientes.cli_cedula')
        ->where('tbl_servicios_ca.serca_id', $id)
        
        ->first();

        $correo_dest= $reg->cli_correo;
     




        
        $ruta = "https://lxservicesapp.hostingerapp.com/servin/public/gdetallec/".$id;
        $datos= DB::table('tbl_servicios_ca')->where('serca_id', $id)->orderBy('serca_id')->first();


        $ldate = date('Y-m-d');
        //$mytime = Carbon::now();
        $serv= DB::table('tbl_novedades')->insert([
            'nov_id'=>$id,
            'nov_novedad'=>'EC',
            'nov_comentarios'=>'Envio de correo',
            'nov_fecha'=>$ldate,
            'nov_usuario'=>$user->email
    

    ]);




        $data = array('cliente' => $datos->serca_empresa_nombre,
                       'orden' => $datos->serca_id,
                       'ruta' =>$ruta 
     
    );

                    //['msg'=> $datos]

  
        $subject = "Ficha de Servicio SERVIN- Espera su Aprobacion ";
        //$for = $user->email;
        $for = $correo_dest;
        //$for = $datos->serca_id;
        Mail::send('prueba.mail', $data, function($msj) use($subject, $for){
            $msj->from("luis.xavier.hernandezc@gmail.com","SERVIN S.A");
            $msj->subject($subject);
            $msj->to($for);
            
        });
        
        echo " Se envió Notificacion al correo " . $correo_dest;

        
    }




 public function enviar_correo1(){

       $id= "1";
        
        $ruta = "https://lxservicesapp.hostingerapp.com/servin/public/gdetallec/";
     //   $datos= DB::table('tbl_servicios_ca')->where('serca_id', $id)->orderBy('serca_id')->first();

        $data = array('cliente' => 'luis',
                       'orden' => 'hola',
                       'ruta' =>'ruta'
     
    );

                    //['msg'=> $datos]
  
        $subject = "Ficha de Servicio SERVIN- Espera su Aprobacion ";
        $for = "lx_systems@hotmail.com";
        //$for = $datos->serca_id;
        Mail::send('prueba.mail', $data, function($msj) use($subject, $for){
            $msj->from("luis.xavier.hernandezc@gmail.com","SERVIN S.A");
            $msj->subject($subject);
            $msj->to($for);
            
        });
        
        echo " Se envió Notificacion al correo ";       


        
    }







    
    public function enviar1(Request $request){

        
        $referencia= $request -> id;
        
            $respuesta = "esto es una prueba";
            echo "<h1>hola".$referencia."</h1>";
        


        
    }




    public function gdetalle($id)
    {


        $user= Auth::user();

        //echo $user->name;

        //$detalle=DB::table('tbl_servicios_de')->where('serde_codservicio', $id)->get();
        $cabecera=DB::table('tbl_servicios_ca')->where('serca_id', $id)->first();
        $item=DB::table('tbl_tprecios')->orderby('tpr_items')->get();

        $detalle = DB::table('tbl_servicios_de')
        ->join('tbl_tprecios', 'tbl_servicios_de.serde_item', '=', 'tbl_tprecios.tpr_codp')
        ->where('tbl_servicios_de.serde_codservicio', $id)
        
        ->get();


        if($cabecera <> null)
        {
            if($cabecera->serca_empresa_nit == $user->nit)
            {
                return view('correo.showdetalle',compact('detalle','cabecera','item'));
            }

            else
            {
                return redirect()->route('lista_agenda');

            }
        }

        else

        {
            return redirect()->route('lista_agenda');
        }


      
        
     
    }




    
}
