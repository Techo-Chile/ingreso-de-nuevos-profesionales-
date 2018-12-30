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
    <form id="example-form">
      <div>
      <h3>Datos Personales</h3>
      <section>

        <div class="row">
          <div class="input-field col s3">
            <input type="text" id="Nombre" name="" value="">
            <label for="Nombre">Nombre</label>
          </div>
          <div class="input-field col s3">
            <input type="text" id="Apellido" name="" value="">
            <label for="Apellido">Apellido Materno</label>
          </div>
          <div class="input-field col s3">
            <input type="text" id="Country" name="" value="">
            <label for="County">Apellido Paterno</label>

          </div>
        </div>
        <div class="row">
          <div class="input-field col s3">
              <input type="text" id="FN" name="" class="datepicker1">
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
            <input id="title" type="text" class="datepicker">
            <label for="title">Fecha Ingreso</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Who is organizing the event?" id="organizer" type="text" class="validate">
            <label for="organizer">Organizer</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="http://www.mywebsite.com" id="website" type="text" class="validate">
            <label for="website">Website</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="contact@myweb.com" id="email" type="text" class="validate">
            <label for="email">Contact email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea id="description" class="materialize-textarea" length="140"></textarea>
            <label for="description">Describe the event in a tweet!</label>
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
<script src="https://cdn.rawgit.com/rstaib/jquery-steps/master/build/jquery.steps.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.js"></script>
<script>
var form = $("#example-form");
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

        return true;
    },
    onFinishing: function (event, currentIndex)
    {

        return true;
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
});


$('.datepicker1').datepicker();

$('.datepicker').datepicker({
  autoClose:true,
  defaultDate:new Date(),
  setDefaultDate:true,
  minDate:new Date(),
  disableDayFn: function (date) {
      var enabled_dates = ["2016-08-20", "2016-08-22", "2016-08-30"];    // dates I want to enabled.

      if ($.inArray(moment(date).format("YYYY-MM-DD"), enabled_dates) === -1) {
          return date;
      }
  }});


</script>

  </body>
</html>
