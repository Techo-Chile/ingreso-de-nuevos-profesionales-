<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta charset="utf-8">
    <title>Formulario</title>
    <style>
        /*
        Common
    */

        .wizard,
        .tabcontrol
        {
            display: block;
            width: 100%;
            overflow: hidden;
        }

        .wizard a,
        .tabcontrol a
        {
            outline: 0;
        }

        .wizard ul,
        .tabcontrol ul
        {
            list-style: none !important;
            padding: 0;
            margin: 0;
        }

        .wizard ul > li,
        .tabcontrol ul > li
        {
            display: block;
            padding: 0;
        }

        /* Accessibility */
        .wizard > .steps .current-info,
        .tabcontrol > .steps .current-info
        {
            position: absolute;
            left: -999em;
        }

        .wizard > .content > .title,
        .tabcontrol > .content > .title
        {
            position: absolute;
            left: -999em;
        }

        /*
            Wizard
        */

        .wizard > .steps
        {
            position: relative;
            display: block;
            width: 100%;
        }

        .wizard.vertical > .steps
        {
            display: inline;
            float: left;
            width: 30%;
        }

        .wizard > .steps .number
        {
            font-size: 1.429em;
        }

        .wizard > .steps > ul > li
        {
            width: 25%;
        }

        .wizard > .steps > ul > li,
        .wizard > .actions > ul > li
        {
            float: left;
        }

        .wizard.vertical > .steps > ul > li
        {
            float: none;
            width: 100%;
        }

        .wizard > .steps a,
        .wizard > .steps a:hover,
        .wizard > .steps a:active
        {
            display: block;
            width: auto;
            margin: 0 0.5em 0.5em;
            padding: 1em 1em;
            text-decoration: none;

            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .wizard > .steps .disabled a,
        .wizard > .steps .disabled a:hover,
        .wizard > .steps .disabled a:active
        {
            background: #eee;
            color: #aaa;
            cursor: default;
        }

        .wizard > .steps .current a,
        .wizard > .steps .current a:hover,
        .wizard > .steps .current a:active
        {
            background: #2184be;
            color: #fff;
            cursor: default;
        }

        .wizard > .steps .done a,
        .wizard > .steps .done a:hover,
        .wizard > .steps .done a:active
        {
            background: #9dc8e2;
            color: #fff;
        }

        .wizard > .steps .error a,
        .wizard > .steps .error a:hover,
        .wizard > .steps .error a:active
        {
            background: #ff3111;
            color: #fff;
        }

        .wizard > .actions
        {
            position: relative;
            display: block;
            text-align: right;
            width: 100%;
        }

        .wizard.vertical > .actions
        {
            display: inline;
            float: right;
            margin: 0 2.5%;
            width: 95%;
        }

        .wizard > .actions > ul
        {
            display: inline-block;
            text-align: right;
        }

        .wizard > .actions > ul > li
        {
            margin: 0 0.5em;
        }

        .wizard.vertical > .actions > ul > li
        {
            margin: 0 0 0 1em;
        }

        .wizard > .actions a,
        .wizard > .actions a:hover,
        .wizard > .actions a:active
        {
            background: #2184be;
            color: #fff;
            display: block;
            padding: 0.5em 1em;
            text-decoration: none;

            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .wizard > .actions .disabled a,
        .wizard > .actions .disabled a:hover,
        .wizard > .actions .disabled a:active
        {
            background: #eee;
            color: #aaa;
        }


    </style>
</head>
<body>
<div class="card-panel hoverable">

    <div class="row">
        <div class="col s12">
            <form id="example-form" action="{{route('savef2')}}" method="post" >
                @csrf
                <input type="hidden" value="{{$operacionid}}" name="operacionid">
                <div>
                    <h3>Datos Personales</h3>
                    <section>

                        <div class="row">
                            <div class="input-field col s3">
                                <input type="text" id="Nombre" class="required" name="name" value="" >
                                <label for="Nombre">Nombres</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="Apellido_p" class="required" name="apep" value="" >
                                <label for="Apellido_p">Apellido Paterno</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="text" id="apellido_m" class="required" name="apem" value="" >
                                <label for="apellido_m">Apellido Materno</label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s3">
                                <input type="text" id="rut" class="required" name="rut" value="" >
                                <label for="rut">Rut</label>

                            </div>
                            <div class="input-field col s3">
                                <select id="estadocivil">
                                    <option value="soltero/a" >Soltero/a</option>
                                    <option value="Casado/a" >Casado/a</option>
                                    <option value="Separado/a" >Separado/a</option>
                                    <option value="Divorciado/a" >Divorciado/a</option>
                                    <option value="Viudo/a" >Viudo/a</option>
                                    <option value="Conviviente" >Conviviente</option>
                                </select>
                                <label for="estadocivil">Estado civil</label>

                            </div>
                            <div class="input-field col s3">
                                <input id="title" type="text" placeholder="fecha de nacimiento" name="fechanacimineto" class="datepicker1">
                            </div>
                        </div>
                            <div class="row">

                                <div class="input-field col s3">
                                    <select name="country">
                                        <option value="" disabled selected>Nacionalidad</option>

                                        @foreach ($paises as $ofi)
                                            <option value="{{$ofi->name}}">{{$ofi->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-field col s3">
                                    <select id="Sexo">
                                        <option value="" disabled selected>SEXO</option>

                                        <option value="M" >MUJER</option>
                                        <option value="H">HOMBRE</option>
                                        <option value="ND" >No definido</option>
                                    </select>

                                </div>
                                <div class="input-field col s3">
                                    <input type="text" id="direccion" class="required" name="andress" value="" >
                                    <label for="direccion">Direccion</label>

                                </div>
                            </div>
                            <div class="row">

                            </div>

                            <!--
                            <div class="input-field col s3">
                              <input type="text" id="Rut" name="" value="">
                              <label for="Rut">Rut</label>
                            </div>
                          -->
                    </section>

                    <h3>Datos Cargos</h3>
                    <section>

                        <div class="row">
                            <div class="input-field col s3">


                                <div id="subarea"></div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s3">



                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Correo Techo" id="techomail" name="techomail" type="text" class="validate">
                                <label for="website">Mail techo</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Remuneración" id="remu" type="number" name="remu" class="validate">
                                <label for="email">Remuneración</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">


                            </div>
                            <div class="input-field col s6">
                                <input placeholder="centro de costos" id="cc" type="text" name="cc" class="validate">
                                <label for="cc">Centro de costo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Nombre jefe directo" id="jdirect" type="text" name="jdirect" class="validate">
                                <label for="jdirect">Nombre jefe directo</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Mail jefe directo" id="mdirect" type="email" name="mdirect" class="validate">
                                <label for="mdirect">Mail jefe directo</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Nombre jefe partiacal" id="jpartiacal" type="text" name="jpartiacal" class="">
                                <label for="jpartiacal">Nombre jefe partiacal (Opcional)</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Mail jefe partiacal" id="jpartiacalmail" type="email" name="jpartiacalmail" class="">
                                <label for="jpartiacalmail">Mail jefe partiacal</label>
                            </div>
                        </div>
                    </section>
                    <h3>herramientas a utilizar</h3>
                    <section>
                        <div class="row">
                            <div class="input-field col s6">
                                Falta equipo lista x cargo

                            </div>
                            <div class="input-field col s6">
                                <input id="fe" type="text" name="fe" class="datepicker">
                                <label for="fe">Fecha Entrega</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Software Adicional" id="sw" type="text" name="sw" class="">
                                <label for="sw">Software Adicional (Opcional)</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Lugar fisico donde se instalara" id="lfisico" type="text" name="lfisicotrabajo" class="">
                                <label for="lfisico">Lugar fisico donde se instalara</label>
                            </div>
                        </div>

                    </section>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
<script src="https://cdn.rawgit.com/rstaib/jquery-steps/master/build/jquery.steps.min.js" charset="utf-8"></script>
    <script>
    var Fn = {
        // Valida el rut con su cadena completa "XXXXXXXX-X"
        validaRut : function (rutCompleto) {
            if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
                return false;
            var tmp 	= rutCompleto.split('-');
            var digv	= tmp[1];
            var rut 	= tmp[0];
            if ( digv == 'K' ) digv = 'k' ;
            return (Fn.dv(rut) == digv );
        },
        dv : function(T){
            var M=0,S=1;
            for(;T;T=Math.floor(T/10))
                S=(S+T%10*(9-M++%6))%11;
            return S?S-1:'k';
        }
    }
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },

    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",

        /* Labels */
        labels: {
            cancel: "Cancel?",
            current: "current step:",
            pagination: "Pagination",
            finish: "Finish!!",
            next: "Next >",
            previous: "< Previous",
            loading: "Loading ..."
        },



        onStepChanging: function (event, currentIndex, newIndex)
        {
            console.log($('#Nombre').val().length > 3);
            console.log($('#Apellido_p').val().length > 3);
            console.log($('#apellido_m').val().length > 3);
            console.log(validateEmail($('#FN').val()));
            console.log(Fn.validaRut($('#rut').val()));
            if($('#Nombre').val().length > 3 && $('#Apellido_p').val().length > 3 && $('#apellido_m').val().length >3 && validateEmail($('#FN').val()) && Fn.validaRut($('#rut').val()))
            {
                form.validate().settings.ignore = ":disabled,:hidden";
                generateemail($('#Nombre').val(),$('#Apellido_p').val(),$('#Apellido_m').val())
                return form.valid();
            }
            else{
                return false;

            }


        },
        onFinishing: function (event, currentIndex)
        {

            form.validate().settings.ignore = ":disabled";
            return form.valid();    },
        onFinished: function (event, currentIndex)
        {
            $("#example-form").submit();

        }
    });
    $(document).ready(function(){
        $('select').formSelect();
        $('.datepicker1').datepicker();

    });

</script>

</body>
</html>
