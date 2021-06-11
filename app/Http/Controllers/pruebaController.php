<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use Iluminate\Support\Facades\Auth;
use Illuminate\Support\Facades\auth;

class pruebaController extends Controller
{
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         
      // $valor= $request -> nombre;

       $lista_servicios= DB::table('tbl_servicios_ca')->where('serca_referencia', '=', 'ldate')->orderBy('serca_id')->get();
    

      //return json_encode(array("perro","animal"));   

       

    return json_encode($lista_servicios);   
      //return json_encode(array($lista_servicios));   
      
      //return json_encode( ['lservicios'=>$lista_servicios]);
        
    

       
    }


    public function show1(Request $request)
    {
        
       $valor= $request -> nombre;

       

       $lista_servicios= DB::table('tbl_servicios_ca')->where('serca_referencia', '=', $valor)->orderBy('serca_id')->get();
    

      //return json_encode(array("Oso", "Perro", "Gato", $valor));        
        
        //echo response()->json($lista_servicios);

        //return json_encode(array($lista_servicios));   
        //return json_encode($lista_servicios);   

       
        echo'

        <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Empresa</th>
          <th>Referencia</th>                  
          <th>Estado</th>
          <th>Fecha de Creacion</th>
          <th>Accion</th>
          <th>Accion</th>
        </tr>
        </thead>
        <tbody>'; 
         foreach ($lista_servicios as $items) {  
        echo'
       <tr>
          <td>'.$items->serca_empresa_nombre.'</td>
          <td>'.$items->serca_referencia.'</td>
          
          <td>'.$items->serca_estado.'</td>
          <td>'.$items->serca_fecha.'</td>
          
          <td style="width:100px;">
          <a href="" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil">Edit</i></a>


         

          </td>
        
          <td>
          <a href="" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil">Inicia</i></a>
          
          </td>
         
        </tr>';}
    

    echo'  
    
    </tbody>
        
      </table>';
        
         




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


    public function va()
    {
      //$user= Auth::user();

      //echo $user->name;

      $data1 = DB::table('tbl_tprecios')->latest('tpr_codigo')->first();
      $valor= $data1->tpr_codigo +1;
      $v1= "str";
      $valx= $valor . $v1;
      

      echo  $valx;

    }

    
}
