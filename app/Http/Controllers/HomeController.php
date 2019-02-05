<?php

namespace App\Http\Controllers;

use App\Area;
use App\Cargo;
use App\Equipo;
use App\IngresoDirector;
use App\Mail\AvisoIngreso;
use App\Oficina;
use App\Operacion;
use App\SubArea;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Webpatser\Uuid\Uuid;
use GuzzleHttp\Client;

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
        $cargo = Cargo::all();
        $oficinas = Oficina::all();
        $area = Area::all();
        if ($token)
        {
            switch ($this->detectwhoisMyOperacionandshowView($token))
            {
                case 0:
                    return 'ese trabajo no existe';
                    break;
                case 1:


                    return view('welcome')->with(array('operacionid'=> $token, 'cargos' => $cargo, 'oficinas' => $oficinas, 'areas' => $area));
                    break;
                case 2:
                    return $this->sendemailprivado($token);
                    break;
                case 3:
                    $client = new Client();
                    $res = $client->get('https://restcountries.eu/rest/v2/all?fields=name');
                    //return var_dump($res->getBody()->getContents());
                    return view('f2',['operacionid'=> $token,'paises' => json_decode($res->getBody()->getContents())]);
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
            return view('welcome')->with(array('operacionid'=> $ope->id, 'cargos' => $cargo, 'oficinas' => $oficinas, 'areas' => $area));



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
    public function subarea(Request $request)
    {
        if ($request->get('key') != 1)
        {
        $sub = SubArea::where('area_father','=',$request->get('key'))->get();
        return json_encode($sub);
        }
        return json_encode('nothing');
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
    public function store2(Request $request)
    {
    }
}
