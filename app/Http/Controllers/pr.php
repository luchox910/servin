<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;;

use DB;


class mailController extends Controller
{

   

  



    public function enviar_correo(Request $request){

        $id= $request -> id;
        
        $ruta = "https://lxservicesapp.hostingerapp.com/servin/public/gdetallec/";
        $datos= DB::table('tbl_servicios_ca')->where('serca_id', $id)->orderBy('serca_id')->first();

        $data = array('cliente' => $datos->serca_empresa_nombre,
                       'orden' => $datos->serca_id,
                       'ruta' =>$ruta 
     
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
        
        echo " Se envió Notificacion al correo ".$datos->serca_correo;

        
    }




 public function enviar_correo1(){

        $id= "1";
        
        $ruta = "https://lxservicesapp.hostingerapp.com/servin/public/gdetallec/";
        $datos= DB::table('tbl_servicios_ca')->where('serca_id', $id)->orderBy('serca_id')->first();

        $data = array('cliente' => $datos->serca_empresa_nombre,
                       'orden' => $datos->serca_id,
                       'ruta' =>$ruta 
     
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
        
        echo " Se envió Notificacion al correo ".$datos->serca_correo;

        
    }







    
    public function enviar1(Request $request){

        
        $referencia= $request -> id;
        
            $respuesta = "esto es una prueba";
            echo "<h1>hola".$referencia."</h1>";
        


        
    }




    public function gdetalle($id)
    {

        $detalle=DB::table('tbl_servicios_de')->where('serde_codservicio', $id)->get();
        $cabecera=DB::table('tbl_servicios_ca')->where('serca_id', $id)->first();
        $item=DB::table('tbl_tprecios')->orderby('tpr_items')->get();

        
		
        return view('correo.showdetalle',compact('detalle','cabecera','item'));
    }




    
}
