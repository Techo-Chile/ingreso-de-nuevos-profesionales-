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
    <form id="example-form" action="{{route('savef1')}}" method="post" >
        @csrf
        <input type="hidden" value="{{$operacionid}}" name="operacionid">
      <div>
      <h3>Datos Personales</h3>
      <section>

        <div class="row">
          <div class="input-field col s3">
            <input type="text" id="Nombre" class="required" name="name" value="" >
            <label for="Nombre">Nombre</label>
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
              <input type="email" id="FN" name="emailp" class="required">
              <label for="FN">Email Personal</label>
          </div>
          <!--
          <div class="input-field col s3">
            <input type="text" id="Rut" name="" value="">
            <label for="Rut">Rut</label>
          </div>
        -->

        </div>
      </section>
      <h3>Datos Cargos</h3>
      <section>
        <div class="row">
          <div class="input-field col s12">
            <input id="title" type="text" name="fi" class="datepicker">
            <label for="title">Fecha Ingreso</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3">

              <select name="area" onchange="getsubarea(this)">
                  <option value="" disabled selected>seleccione una area</option>
                  @foreach ($areas as $ofi)
                      <option value="{{$ofi->id}}">{{$ofi->name}}</option>
                  @endforeach
              </select>

              <div id="subarea"></div>


          </div>
        </div>
        <div class="row">
            <div class="input-field col s3">

                <select name="cargo">
                    <option value="" disabled selected>seleccione un cargo</option>
                    @foreach ($cargos as $ofi)
                        <option value="{{$ofi->id}}">{{$ofi->name}}</option>
                    @endforeach
                </select>

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
                  <select name="ofi">
                      <option value="" disabled selected>seleccione una oficina</option>
                      @foreach ($oficinas as $ofi)
                          <option value="{{$ofi->id}}">{{$ofi->name}}</option>
                      @endforeach

                  </select>

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
    <script src="https://rawgithub.com/timrwood/moment/2.1.0/min/moment.min.js"></script>
    <script src="https://rawgithub.com/gf3/moment-range/v0.1.7/lib/moment-range.js"></script>
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
    });

$('.datepicker1').datepicker();

$('.datepicker').datepicker({
    onRender: function() {
        $('button.month-prev').on('click', function() {
            alert('click next');
        });
        $('div.picker__nav--prev').on('click',  function() {
            alert('click prev');
        });
    },

  autoClose:true,
    defaultDate:new Date(),
    labelMonthNext: 'Next Month',
    labelMonthPrev: 'Last Month',
//The title label to use for the dropdown selectors
    labelMonthSelect: 'Select Month',
    labelYearSelect: 'Select Year',
  setDefaultDate:true,
    disableWeekends:false,
    disableDayFn: function(theDate) {

        var allowbegind = moment().format("YYYY-"+getdate(theDate.getMonth())+"-01")

        var allowend = moment().format("YYYY-"+getdate(theDate.getMonth())+"-24")
        var ranged = moment().range(allowbegind, allowend);
         if (ranged.contains(theDate)){return false}else{return true}
         ranged.destroyed();



    } });
function generateemail(a,b,c) {
    $('#techomail').val(a+"."+b+"@techo.org")

}
function getdate(inn) {
     let out='';
    switch (inn)
    {
        case 0:
            out ='01';
            break;
        case 1:
            out ='01';
            break;
        case 2:
            out ='02';
            break;
        case 3:
            out ='03';
            break;
        case 4:
            out ='04';
            break;
        case 5:
            out ='05';
            break;
        case 6:
            out ='06';
            break;
        case 7:
            out ='07';
            break;
        case 8:
            out ='08';
            break;
        case 9:
            out ='09';
            break;
        case 10:
            out ='10';
            break;
        case 11:
            out ='11';
            break;
        case 12:
            out ='12';
            break;

    }
    return out;

}
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    function getsubarea(e) {
        let id = e.value;
        fetch('/subarea', {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": $('input[name="_token"]').val()
            },
            method: "post",
            credentials: "same-origin",
            body: JSON.stringify({
                key: id
            })
        })
            .then((response) => response.json())
            .then((responseJson) => {
                if (responseJson != 'nothing')
                {
                    var sub = $('#subarea')
                    sub.empty();
                    drawselect(responseJson)
                }else{
                var sub = $('#subarea')
                sub.empty();}
            })

            .catch(function (error) {
                console.log(error)
            });
    };
function drawselect(json) {
    //console.log(json)
    $("#subarea").append('<spam>Sub area </spam><br>')
    var sub = $('<select class="browser-default" name="subarea">').appendTo('#subarea');
    json.forEach((e)=>{
        sub.append($("<option>").attr('value',e.id).text(e.name));
    })

}


</script>





  </body>
</html>
