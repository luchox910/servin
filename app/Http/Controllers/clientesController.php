<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\Hash;


class clientesController extends Controller


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

        $user= Auth::user();

        //echo $user->name;
        //echo $user->rol;

        if($user->rol =='1')
        {

        $user= DB::table('tbl_clientes')->count();
        $ser_total=DB::table('tbl_servicios_ca')->where('serca_estado','<>','E')->count();
        $ser_pen=DB::table('tbl_servicios_ca')->where('serca_estado','P')->count();
        $ser_ec=DB::table('tbl_servicios_ca')->where('serca_estado','EC')->count();
        $ser_ac=DB::table('tbl_servicios_ca')->where('serca_estado','A')->count();
        $ser_rc=DB::table('tbl_servicios_ca')->where('serca_estado','R')->count();
        //echo $user;

        return view('clientes.index',compact('user','ser_total', 'ser_pen', 'ser_ec','ser_ac','ser_rc'));

        }

        else
        {

            $cabecera=DB::table('tbl_servicios_ca')->where('serca_empresa_nit',$user->nit)->count();
            //return view('correo.showdetalle');

    

            return redirect()->route('lista_agenda');

        }

        
    }


    public function lista()
    {
        //
        $user= DB::table('tbl_clientes')->get();
        //echo $user;
        return view('clientes.show',['user'=>$user]);
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

        $valida=DB::table('tbl_clientes')->where('cli_cedula', $request->cedula)->exists();

        if($valida==true)

        {
            echo "El cliente Ya existe en la base de datos";
        }
        else
        {

            $user= DB::table('tbl_clientes')->insert([
                'cli_cedula'=>$request->cedula,
                'cli_nombres'=>$request->nombres,
                'cli_apellidos'=>'null',
                'cli_telefono'=>$request->telefono,
                'cli_correo'=>$request->correo,
                'cli_empresa'=>'null',
                'cli_tipo'=>$request->tipo
    
    
            ]);
            return redirect()->route('listar')->with('success','registro completo');
            //return view('clientes.index',compact('user'));
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
    public function edit($id)
    {
        $user = DB::table('tbl_clientes')->where('cli_cedula', $id)->first();
		
        return view('clientes.edit',compact('user'));
        
        
    }


    public function editusers($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
		
        return view('clientes.editusers',compact('user'));
        
        
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $cedula = $request->cedula;

        DB::table('tbl_clientes')->where('cli_cedula', $cedula)->update([
            
            'cli_nombres'=>$request->nombres,
            
            'cli_telefono'=>$request->telefono,
            'cli_correo'=>$request->correo,
            
        
        ]);

        return redirect()->route('listar')->with('success',' Actualizacion completa');
    }





    public function updateusers(Request $request)
    {

        $id= $request->id;


        DB::table('users')->where('id', $id)->update([
            
            'name'=>$request->nombre,
            'rol'=>$request->rol,
            
            'password' => Hash::make($request->pass),
           
            
        
        ]);

        return redirect()->route('showusers')->with('success',' Usuario Actualizado!');
    }










    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function borra($id)
    {

       // $id= $request->id;


        DB::table('users')->where('id', $id)->update([
            
            'rol'=>'Off',
            'password'=>'inactive'

            
    
        ]);

        return redirect()->route('showusers')->with('success','Usuario Inactivado');
    }



    public function borra_cli($id)
    {

       // $id= $request->id;


       DB::table('tbl_clientes')->where('cli_cedula', $id)->delete();
            
            
    
        

        return redirect()->route('listar')->with('success','Cliente eliminado de la base de datos');
    }













    public function regis()
    {
        $user= Auth::user();

        if($user-> rol =='1')
        {

            return view('auth.register');
        }
        else
        {
            echo "No autorizado";
        }

        
    
    }



    public function lista_users()
    {
        //
        //$user= DB::table('users')->get();
        //echo $user;
    
        $user = DB::table('users')
        ->join('tbl_clientes', 'tbl_clientes.cli_cedula', '=', 'users.nit')
                
        ->get();





        return view('clientes.showusers',['user'=>$user]);
    }


  
}
