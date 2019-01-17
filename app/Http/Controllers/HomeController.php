<?php

namespace App\Http\Controllers;

use App\IngresoDirector;
use App\Mail\AvisoIngreso;
use App\Operacion;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Webpatser\Uuid\Uuid;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($token = null)
    {
        if ($token)
        {
            switch ($this->detectwhoisMyOperacionandshowView($token))
            {
                case 0:
                    return 'ese trabajo no existe';
                    break;
                case 1:
                    return view('welcome',['operacionid'=> $token]);
                    break;
                case 2:
                    return $this->sendemailprivado($token);
                    break;
                case 3:
                    return view('f2',['operacionid'=> $token]);
                    break;
                case 4:
                    return $this->createtecho($token);
                    break;
                case 5:
                    return $this->notificaRGA($token);
                    break;

            }
        }
        else{
            $ope = new Operacion();
            $ope->id = Uuid::generate()->string;
            $ope->estado_id = 1;
            $ope->save();
            return view('welcome',['operacionid'=> $ope->id]);



        }


    }
    public function store(Request $request)
    {
        $f1 = new IngresoDirector();
        $f1->uuid_operacion = $request->get('operacionid');
        $f1->nombres = $request->get('name');
        $f1->apellidop = $request->get('apep');
        $f1->apellidom = $request->get('apem');
        $f1->rut = $request->get('rut');
        $f1->correo_p = $request->get('emailp');
        $f1->hire_date = $request->get('fi');
        $f1->correo_techo = $request->get('techomail');
        $f1->remu = $request->get('remu');
        $f1->entro_costo = $request->get('cc');
        $f1->jefe = $request->get('jdirect');
        $f1->correojefe = $request->get('mdirect');
        $f1->lugarfisicoequipo = $request->get('lfisicotrabajo');
        $f1->fecha_entrega = $request->get('fe');
        $f1->save();
        $this->CompletadorTarea($f1->uuid_operacion,2);
        return redirect('/'.$f1->uuid_operacion);


    }
    public function detectwhoisMyOperacionandshowView($ability)
    {
        $user = Operacion::where('id', '=', $ability)->first();
        if ($user)
        {return $user->estado_id;}
        else{
            return 0;
        }

    }
    public function  sendemailprivado($tokken)
    {
        $operacion = IngresoDirector::where('uuid_operacion', '=', $tokken)->first();
        $this->CompletadorTarea($tokken,3);
        Mail::to($operacion->correo_p)->send(new AvisoIngreso($tokken,url('')));
        return 'email enviado a nuevo colaborador';

    }
    public function CompletadorTarea($tokken,$nextstep)
    {
        $operacion = Operacion::where('id', '=', $tokken)->first();
        $operacion->estado_id =$nextstep;
        $operacion->save();

    }
}
