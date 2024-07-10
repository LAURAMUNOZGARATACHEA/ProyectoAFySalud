<?php
session_start();
include("template/cabecera.php");

// Check if the session has a counter, if not, initialize it to 1
if (!isset($_SESSION['form_counter'])) {
    $_SESSION['form_counter'] = 1;
}

// Use the session identifier and counter to generate respondent_id
$respondentId = session_id() . '_' . $_SESSION['form_counter'];

// Increment the counter for the next form submission
$_SESSION['form_counter']++;

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US"  class="supernova ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Actividad Física y Cáncer de Mama" >
<meta property="og:image" content="img/solemne_azul.png" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Actividad Física y Cáncer de Mama</title>
<style type="text/css">@media print{*{-webkit-print-color-adjust: exact !important;color-adjust: exact !important;}.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>

<link type="text/css" rel="stylesheet" href="css/form-common.css"/>
<link type="text/css" rel="stylesheet" href="Fonts/fonts1.css" />
<link type="text/css" rel="stylesheet" href="Themes/defaultV2.css"/>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/styles.css"/>

<style>
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-attachment: fixed;
  background-size: auto;
  background-size: cover;
}
.supernova {
  background-image: none;
  background-image: url("img/gotas.jpg");
}
#stage {
  background-image: none;
  background-image: url("img/rosa.png");
}
.form-all .form-pagebreak-back,
  .form-all .form-pagebreak-next {
    min-width: 128px;
  }
  /* Media query for smaller screens */
  @media only screen and (min-width: 128px) {
  .form-pagebreak-back,
  .form-pagebreak-next {
    width: 100%; /* Make buttons full width on smaller screens */
    margin: 8px 0; /* Adjust the margin as needed */
     }
 }
</style>

<script src="js/prototype.forms.js" type="text/javascript"></script>
<script src="js/lm.forms.js" type="text/javascript"></script>
<script src="js/smoothscroll.min.js" type="text/javascript"></script>
<script src="js/errorNavigation.js" type="text/javascript"></script>
<script type="text/javascript" src="js/LM.js"></script>
<script>
   function habilitarBotonEmpezar(selector) {
    var btnEmpezarEncuesta = document.getElementById('btnEmpezarEncuesta');
    if (selector.value === "Sí") {
        btnEmpezarEncuesta.disabled = false;
    } else {
        btnEmpezarEncuesta.disabled = true;
    }
}
</script>

</script>
</head>
<body>
<form class="lmform-form" action="modelo/guardarRegistro.php" method="POST" name="form_1" id="1" accept-charset="utf-8" autocomplete="on">
<div id="formCoverLogo" style="margin-bottom:0px" class="form-cover-wrapper form-has-cover form-page-cover-image-align-center">
    </div>
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li  class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
        <div class="form-page-cover-image-wrapper" style="max-width:150px"><img src="img/solemne_azul.png" class="form-page-cover-image" width="150" aria-label="Form Logo" style="aspect-ratio:150/150" /></div>
          <div class="form-header-group hasImage header-large" data-imagealign="Top">
            <div class="header-logo"><img src="img/nosotras.jpg" alt="Foto de las tres" width="600" class="header-logo-top" /></div>
              <div class="header-text httac htvam">
               <h1  class="form-header" data-component="header">CUESTIONARIO </h1>
               <h1  class="form-header" data-component="header">Proyecto Actividad Física y Salud en la mujer </h1>
             </div>
</br>
    <div class="jumbotron jumbotron-fluid ">
      <div class="container">
      <hr class="my-3">
      <h4 class="text-primary">Tratamiento de la información </h4>
      <hr class="my-3">
      <p class="text-primary text-justify"> 1º.- Se trata de un <strong> cuestionario totalmente anónimo </strong> que no incluye datos que permitan identificarle y sus <strong> respuestas serán confidenciales </strong>. </p>
      <p class="text-primary text-justify"> 2º.- A diferencia de otros formularios, las respuestas no se envían ni alojan en ningún proveedor de servicios, sino en un <strong> servidor propio custodiado, gestionado y con uso exclusivo por parte de las investigadoras. </strong> </p>
      <p class="text-primary text-justify">En relación con esta encuesta, Ud. puede ejercer sus derechos en materia de privacidad directamente si lo desea, dirigiendose al investigador principal (<a href="mailto:nayuso@unizar.es" style="color: blue;">ayuso@unizar.es</a>), o al Delegado/a de Protección de Datos de la Universidad de Zaragoza (<a href="mailto:dpd@unizar.es" style="color: blue;">dpd@unizar.es</a>) o, finalmente, en reclamación, a la Agencia Española de Protección de Datos (<a href="https://www.aepd.es/" style="color: blue;">www.aepd.es</a>) </p>
      <p class="text-primary text-justify">En <a href="https://protecciondatos.unizar.es/" style="color: blue;">  Política de Privacidad </a> podrá encontrar amplia información respecto de este tratamiento y su política de protección de datos, así como formularios para el ejercicio de sus derechos.</p>
      <hr class="my-3">
        <p class="text-info text-justify">Si usted es una <strong> mujer mayor de edad </strong> puede colaborar rellenando el cuestionario y así contribuir al conocimiento que esperamos adquirir en este proyecto.</p>
      <h6 class="text-info text-justify">  AGRADECEMOS POR ANTICIPADO SU COLABORACIÓN!! </h6>
    </div>
  </div>
          </div>
        </div>
      </li>
      <li class="form-line lm-required" data-type="control_radio">
    <label class="form-label form-label-top form-label-auto" id="label_238" for="input_238_0" aria-hidden="false">¿Ha leído y acepta la Política de Privacidad de la Universidad de Zaragoza? <a href="https://protecciondatos.unizar.es/política-de-privacidad">Ver Política de Privacidad</a> <span class="form-required">*</span></label>
      <div id="cid_238" class="form-input-wide lm-required" data-layout="full">
    <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="cid_238" data-component="radio">
        <span class="form-radio-item">
            <span class="dragger-item"></span>
            <input type="radio" class="form-radio validate[required]" id="input_240_0" name="haLeido" value="Sí" required="" aria-describedby="desc_input_240_0" onclick ="habilitarBotonEmpezar(this)" />
            <label for="input_240_0">Sí</label>
        </span>
        <span class="form-radio-item">
            <span class="dragger-item"></span>
            <input type="radio" class="form-radio validate[required]" id="input_240_1" name="haLeido" value="No" required="" aria-describedby="desc_input_240_1" onclick="habilitarBotonEmpezar(this)" />
            <label for="input_240_1">No</label>
        </span>
    </div>
    <span id="desc_input_240_0" class="form-description">Debe marcar "Sí" para acceder a la encuesta si está de acuerdo con la política de privacidad</span>
    </div>
  </li>
      <li id="cid_pb_1" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-next-container text-center mx-auto d-flex">
          <div class="text-center mx-auto">
            <button type="button" id="btnEmpezarEncuesta" class="btn btn-info btn-lg form-pagebreak-next" data-component="pagebreak-next"  style="font-size:16pt;">EMPEZAR LA ENCUESTA</button></div>
          </div>
          <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_1"></div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li id="cid_header_1" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-default" data-imagealign="Top">
            <div class="header-logo"><img src="img/deporteycancer.jpg" alt="Foto de mujeres en ropa deportiva y color rosa en la meta de la carrera de la mujer" width="400" class="header-logo-top" /></div>
            <div class="header-text ac vam">
              <h2 id="header_1" class="form-header" data-component="header">Actividad Física y Cáncer de Mama</h2>
              <div id="subHeader_1" class="subHeaher">El cuestionario se ha estructurado en CINCO SECCIONES. Por favor responda a todas las preguntas en cada sección. Se estima un tiempo de respuesta inferior a 5 minutos. 
              </br> IMPORTANTE: Si detecta algún inconveniente, o no comprende bien el sentido de alguna pregunta, por favor háganoslo saber a través de <a href="mailto:lmunoz@unizar.es">lmunoz@unizar.es</a> o al telefono 617 15 90 43. Agradecemos toda su colaboración. </div>
            </div>
          </div>
        </div>
      </li>
      <ul class="form-section" id="section_1">
        <li id="cid_section_1" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" data-component="collapse"><span class="form-collapse-mid">SECCIÓN I: FACTORES DEMOGRÁFICOS </span><span class="form-collapse-right form-collapse-right-show"> </span></div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div style="display:table;width:100%">
            <div class="form-header-group hasImage header-default" data-imagealign="Left">
              <div class="header-logo"><img src="img/sociodemografia.jpg" alt="Imagen para representar la características Socio-Demográficas (SD)" width="160" class="header-logo-left" /></div>
              <div class="header-text ac vab">
                <h2 id="header_2" class="form-header" data-component="header">Características Socio-Demográficas (SD)</h2>
                <div id="subHeader_2" class="subHeader">Se miden características que pueden incidir en la práctica de actividad física. Son 7 preguntas con un tiempo estimado de 1 minuto</div>
              </div>
            </div>
          </div>
        </li>
        <li class="form-line lm-required" data-type="control_radio" id="id_1"><label class="form-label form-label-top" id="label_1" for="input_1" aria-hidden="false"> <strong>SD1:</strong> Seleccione, por favor, el rango de su edad<span class="form-required">*</span> </label>
          <div id="cid_1" class="form-input" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_1" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_1" class="form-radio validate[required]" id="input_1_0" name="SD1" value="1" required="" /><label id="label_input_1_0" for="input_1_0">18-29</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_1" class="form-radio validate[required]" id="input_1_1" name="SD1" value="2" required="" /><label id="label_input_1_1" for="input_1_1">30-39</label></span><span class="form-radio-item" ><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_1" class="form-radio validate[required]" id="input_1_2" name="SD1" value="3" required="" /><label id="label_input_1_2" for="input_1_2">40-49</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_1" class="form-radio validate[required]" id="input_1_3" name="SD1" value="4" required="" /><label id="label_input_1_3" for="input_1_3">50-59</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_1" class="form-radio validate[required]" id="input_1_4" name="SD1" value="5" required="" /><label id="label_input_1_4" for="input_1_4">60-69</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_1" class="form-radio validate[required]" id="input_1_5" name="SD1" value="6" required="" /><label id="label_input_1_5" for="input_1_5">+70</label></span></div>
        </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_2"><label class="form-label form-label-top form-label-auto" id="label_5" for="input_5" aria-hidden="false"><strong>SD2:</strong> ¿Cuál es su situación laboral actual? Por favor, elija la opción que mejor la refleje </label>
          <div id="cid_2" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_2" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_0" name="SD2" value="1" /><label id="label_input_2_0" for="input_2_0">Empleada a tiempo completo</label></span><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_1" name="SD2" value="2" /><label id="label_input_2_1" for="input_2_1">Empleada a tiempo parcial</label></span><span class="form-radio-item" "><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_2" name="SD2" value="3" /><label id="label_input_2_1" for="input_2_2">Estudiante</label></span><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_3" name="SD2" value="4" /><label id="label_input_2_2" for="input_2_3">Pensionada</label></span><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_4" name="SD2" value="5" /><label id="label_input_2_3" for="input_2_4">Autónoma</label></span><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_5" name="SD2" value="6" /><label id="label_input_2_4" for="input_2_5">Empresaria</label></span><span class="form-radio-item"style="clear:left"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_6" name="SD2" value="7" /><label id="label_input_2_6" for="input_2_6"> Desempleada (En búsqueda de empleo) </label></span><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_2" class="form-radio" id="input_2_7" name="SD2" value="8" /><label id="label_input_2_7" for="input_2_7">Desempleada (Sin búsqueda de empleo) </label></span><span class="form-radio-item">
		      	</div>
          </div>
          <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_3"><label class="form-label form-label-top form-label-auto" id="label_8" for="input_8" aria-hidden="false"> <strong>SD3:</strong> Indique, por favor, su formación académica (alcanzada o en curso) </label>
          <div id="cid_3" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_3" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_0" name="SD3" value="1" /><label id="label_input_3_0" for="input_3_0">Estudios Primarios, Secundaria o FP </label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_1" name="SD3" value="2" /><label id="label_input_3_1" for="input_3_1">Bachillerato o FP Grado Superior</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_2" name="SD3" value="3" /><label id="label_input_3_2" for="input_3_2">Diplomatura, Licenciatura o Grado </label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_3" name="SD3" value="4" /><label id="label_input_3_3" for="input_3_3">Máster o Doctorado</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line fixed-width" data-type="control_number" id="id_4"><label class="form-label form-label-left" id="label_4" for="input_4" aria-hidden="false"> <strong>SD4:</strong> Teclee, por favor, los dígitos del codigo postal de su residencia habitual</label>
          <div id="cid_4" class="form-input" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="number" id="input_4" name="SD4" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="00000" style="width:120px" size="120" value="" maxlength ="6" placeholder="Por ej., 50007" data-component="number" aria-labelledby="label_29" step="any" /></span> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_5"><label class="form-label form-label-left" id="label_5" for="input_5" aria-hidden="false"> <strong> SD5:</strong> Díganos, ¿vive con una pareja? </label>
          <div id="cid_5" class="form-input" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_5" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_5" class="form-radio" id="input_5_0" name="SD5" value="1" /><label id="label_input_5_0" for="input_5_0">Sí</label></span><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_5" class="form-radio" id="input_5_1" name="SD5" value="2" /><label id="label_input_5_1" for="input_5_1">No</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id6"><label class="form-label form-label-top" id="label_6" for="input_6" aria-hidden="false"> <strong> SD6:</strong> Indique, por favor, si residen menores de 18 años en su domicilio habitual </label>
          <div id="cid_6" class="form-input" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_6" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_6" class="form-radio" id="input_6_0" name="SD6" value="1" /><label id="label_input_6_0" for="input_6_0">Ninguno</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_6" class="form-radio" id="input_6_1" name="SD6" value="2" /><label id="label_input_6_1" for="input_6_1">Un menor</label></span><span class="form-radio-item"><span class="dragger-item"></span>
		          <input type="radio" aria-describedby="label_6" class="form-radio" id="input_6_2" name="SD6" value="3" /><label id="label_input_6_2" for="input_6_2">Dos o más menores </label></span><span class="form-radio-item"><span class="dragger-item"></span></div>
		      </div>
          <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_7"><label class="form-label form-label-top form-label-auto" id="label_7" for="input_12" aria-hidden="false"> <strong> SD7:</strong> ¿Tiene a su cargo alguna persona mayor, o alguna persona con cierto grado de dependencia? </label>
          <div id="cid_7" class="form-input-wide" data-layout="half">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_7" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_7" class="form-radio" id="input_7_0" name="SD7" value="1" /><label id="label_input_7_0" for="input_7_0">Si</label></span><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_7" class="form-radio" id="input_7_1" name="SD7" value="2" /><label id="label_input_7_1" for="input_7_1">No</label></span></div>
          </div>
        </li>
      </ul>
      <li  class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container"><button type="button" class="form-pagebreak-back  btn btn-secondary" data-component="pagebreak-back">VOLVER</button></div>
          <div class="form-pagebreak-next-container"><button  type="button" class="form-pagebreak-next  btn btn-info" data-component="pagebreak-next">PASAR A SECCIÓN II</button></div>
          <div style="clear:both" class="pageInfo form-sub-label"></div>
        </div>
      </li>
</ul>
    <ul class="form-section page-section" style="display:none;">
      <ul class="form-section" id="section_2">
        <li id="cid_section_2" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_2" data-component="collapse"><span class="form-collapse-mid" id="collapse-text_2">SECCIÓN II: ACTIVIDAD DEPORTIVA </span><span class="form-collapse-right form-collapse-right-show"> </span></div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div style="display:table;width:100%">
            <div class="form-header-group hasImage header-default" data-imagealign="Left">
              <div class="header-logo"><img src="img/actividadfisica.jpg" alt="" width="160" class="header-logo-left" /></div>
              <div class="header-text ac vab">
                <h2  class="form-header" data-component="header">Práctica de Actividad Física Recreativa (AFR)</h2>
                <div  class="subHeader">Se miden variables sobre el tipo, la intensidad y frecuencia de la práctica. Son 12 preguntas con un tiempo estimado de 1.5 minutos. </div>
              </div>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_dropdown" id="id_8"><label class="form-label form-label-top form-label-auto" id="label_8" for="input_8" aria-hidden="false"> <strong>AFR1:</strong> ¿Ha practicado algún deporte o realizado actividad física recreativa durante el ultimo año? </label>
          <div id="cid_8" class="form-input-wide" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><select class="form-dropdown" id="input_8" name="AFR1" style="width:310px" data-component="dropdown" aria-label="AFR1: ¿Ha practicado algún deporte o actividad física durante el ultimo año?">
                <option value="">Por favor, seleccione la opción que corresponda</option>
                <option value="1"> No</option>
                <option value="2"> Sí</option>
                <option value="3"> Sí. Mi trabajo/estudios están vinculados a la actividad física o deporte</option>
              </select><label class="form-sub-label" for="input_8" id="sublabel_input_8" style="min-height:14px" aria-hidden="false">Incluye en verano o vacaciones</label></span> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-small">
            <div class="header-text al vam">
              <h3  class="form-header" data-component="header">SOLO SI HA PRACTICADO EN EL ÚLTIMO AÑO</h3>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_9"><label class="form-label form-label-top form-label-auto" id="label_9" for="input_9" aria-hidden="false"> <strong> AFR2:</strong> Díganos, por favor: ¿con qué frecuencia practica actividad físico deportiva? </label>
          <div id="cid_9" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_9" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_0" name="AFR2" value="1" /><label id="label_input_9_0" for="input_9_0">Diariamente (casi todos los días de la semana)</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_1" name="AFR2" value="2" /><label id="label_input_9_1" for="input_9_1">Más de dos veces por semana</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_2" name="AFR2" value="3" /><label id="label_input_9_2" for="input_9_2">Una o dos veces por semana</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_3" name="AFR2" value="4" /><label id="label_input_9_3" for="input_9_3">Dos o tres veces al mes</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_4" name="AFR2" value="5" /><label id="label_input_9_4" for="input_9_4">Estacionalmente(en primavera, verano, temporada de esquí...)</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-small">
            <div class="header-text httal htvam">
              <h3  class="form-header" data-component="header">SOLO SI PRACTICA SEMANALMENTE</h3>
              <div  class="form-subHeader">(Todas las semanas)</div>
            </div>
          </div>
        </li>
        <li class="form-line fixed-width" data-type="control_number" id="id_10"><label class="form-label form-label-top" id="label_10" for="input_10" aria-hidden="false"> <strong> AFR3: </strong> ¿Cuánto tiempo (en minutos) de actividad físico deportiva suele realizar a lo largo de una semana? </label>
          <div id="cid_10" class="form-input" data-layout="full"> <span class="form-sub-label-container" style="vertical-align:top"><input type="number" id="input_10" name="AFR1" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:120px" size="120" value="" placeholder="Por ej., 120" data-numbermin="10" data-numbermax="2000" data-component="number" aria-labelledby="label_10" step="any" /></span> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_checkbox" id="id_11"><label class="form-label form-label-top form-label-auto" id="label_11" for="input_11" aria-hidden="false"><strong> AFR4:</strong> Señale, por favor, los tipos de actividad físico-deportiva que practica de forma regular (semanalmente) </label>
          <div id="cid_11" class="form-input-wide">
            <div class="form-single-column" role="group" aria-labelledby="label_11" data-component="checkbox"><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_11" class="form-checkbox" id="input_11_0" name="AFR4" value="1" /><label id="label_input_11_0" for="input_11_0">Gimnasia, actividad físico-deportiva suave (pilates, mantenimiento, yoga, taichi,...)</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
			      <input type="checkbox" aria-describedby="label_11" class="form-checkbox" id="input_11_1" name="AFR4" value="2" /><label id="label_input_11_1" for="input_11_1">Gimnasia, actividad físico deportiva intensa (elíptica, cinta, aerobic, spinning, body power, crosfit,...)</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
			      <input type="checkbox" aria-describedby="label_11" class="form-checkbox" id="input_11_2" name="AFR4" value="3" /><label id="label_input_11_2" for="input_11_2">Actividad física con acompañamiento musical (zumba, gym-jazz, hip-hop, kapoira,...)</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
			      <input type="checkbox" aria-describedby="label_11" class="form-checkbox" id="input_11_3" name="AFR4" value="4" /><label id="label_input_11_3" for="input_11_3">Ejercicios de fuerza, musculación, halterofilia...</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_checkbox" id="id_12"><label class="form-label form-label-top form-label-auto" id="label_12" for="input_12" aria-hidden="false"> <strong> AFR5: </strong> Si ha practicado algún deporte en el último año (de forma regular, semanalmente), por favor, señale cuál o cuáles </label>
          <div id="cid_12" class="form-input-wide">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_12" data-component="checkbox"><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_0" name="AFR5[]" value="1" /><label id="label_input_12_0" for="input_12_0">Fútbol</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_1" name="AFR5" value="2" /><label id="label_input_12_1" for="input_12_1">Baloncesto</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_2" name="AFR5" value="3" /><label id="label_input_12_2" for="input_12_2">Balonmano</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_3" name="AFR5" value="4" /><label id="label_input_12_3" for="input_12_3">Rugby</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_4" name="AFR5" value="5" /><label id="label_input_12_4" for="input_12_4">Natación</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_5" name="AFR5" value="6" /><label id="label_input_12_5" for="input_12_5">Ciclismo</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_6" name="AFR5" value="7" /><label id="label_input_12_6" for="input_12_6">Motocliclismo</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_7" name="AFR5" value="8" /><label id="label_input_12_7" for="input_12_7">Boxeo</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_8" name="AFR5" value="9" /><label id="label_input_12_8" for="input_12_8">Duatlón, triatlón</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
              <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_9" name="AFR5" value="10" /><label id="label_input_12_9" for="input_12_9">Marcha, carrera, maratón</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_10" name="AFR5" value="11" /><label id="label_input_12_10" for="input_12_10">Escalada</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
              <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_11" name="AFR5" value="12" /><label id="label_input_12_11" for="input_12_11">Patinaje</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_12" name="AFR5" value="13" /><label id="label_input_12_12" for="input_12_12">Senderismo</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
              <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_13" name="AFR5" value="14" /><label id="label_input_12_13" for="input_12_13">Bolos, petanca</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
              <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_14" name="AFR5" value="15" /><label id="label_input_12_14" for="input_12_14">Artes Marciales</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_15" name="AFR5" value="16" /><label id="label_input_12_15" for="input_12_15">Piragüismo, remo</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
              <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_16" name="AFR5" value="17" /><label id="label_input_12_16" for="input_12_16">Gimnasia deportiva/rítmica</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
              <input type="checkbox" aria-describedby="label_12" class="form-checkbox" id="input_12_17" name="AFR5" value="18" /><label id="label_input_12_17" for="input_12_17">Otros</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_13"><label class="form-label form-label-top form-label-auto" id="label_13" for="input_13" aria-hidden="false"> <strong> AFR6:</strong> ¿Qué tipo de espacios o instalaciones utiliza habitualmente para hacer deporte y/o actividad física? </label>
          <div id="cid_13" class="form-input-wide" data-layout="full">
            <div class="form-single-column" role="group" aria-labelledby="label_13" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_0" name="AFR6" value="1" /><label id="label_input_13_0" for="input_13_0">Espacios abiertos de uso libre (urbanos: parques, calles; montaña; acuáticos: ríos, pantanos, mar)</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
               <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_1" name="AFR6" value="2" /><label id="label_input_13_1" for="input_13_1">Instalaciones deportivas públicas (gimnasios, centros deportivos o espacios deportivos públicos)</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
               <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_2" name="AFR6" value="3" /><label id="label_input_13_2" for="input_13_2">Instalaciones deportivas privadas (gimnasios, centros deportivos o espacios deportivos privados)</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_14"><label class="form-label form-label-top form-label-auto" id="label_14" for="input_14" aria-hidden="false"> <strong> AFR7: </strong> ¿Suele realizar la actividad físico deportiva de forma individual o acompañada? </label>
          <div id="cid_14" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_14" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_14" class="form-radio" id="input_14_0" name="AFR7" value="1" /><label id="label_input_14_0" for="input_14_0">Individual</label></span><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_14" class="form-radio" id="input_14_1" name="AFR7" value="2" /><label id="label_input_14_1" for="input_14_1">Acompañada</label></span><span class="form-radio-item"><span class="dragger-item"></span>
          </div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_15"><label class="form-label form-label-top form-label-auto" id="label_15" for="input_15" aria-hidden="false"> <strong> AFR8: </strong> ¿Participa en competiciones deportivas? </label>
          <div id="cid_15" class="form-input-wide" data-layout="half">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_15" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_15" class="form-radio" id="input_15_0" name="AFR8" value="1" /><label id="label_input_15_0" for="input_15_0">No</label></span><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_15" class="form-radio" id="input_15_1" name="AFR8" value="2" /><label id="label_input_15_1" for="input_15_1">Sí</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_dropdown" id="id_16"><label class="form-label form-label-top form-label-auto" id="label_16" for="input_16" aria-hidden="false"><strong>AFR9:</strong> ¿Suele practicar de forma libre o dirigida? </label>
          <div id="cid_16" class="form-input-wide" data-layout="half"> <select class="form-dropdown" id="input_16" name="AFR9" style="width:310px" data-component="dropdown" aria-label="AFR9: ¿Suele practicar de forma libre o dirigida?">
              <option value="">Seleccione</option>
              <option value="1">Libre</option>
              <option value="2">Dirigida</option>
              <option value="3">Ambas</option>
            </select> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line fixed-width" data-type="control_number" id="id_17"><label class="form-label form-label-top" id="label_17" for="input_17" aria-hidden="false"> <strong> AFR10 </strong>: ¿A qué edad aproximada empezó a realizar actividad física o practicar un deporte? </label>
          <div id="cid_17" class="form-input" data-layout="half"> 
            <input type="number" id="input_17" name="AFR10" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:120px" size="120" value="" placeholder="Por ej., 24" data-numbermin="4" data-numbermax="100" data-component="number" aria-labelledby="label_17" step="any" /> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_checkbox" id="id_18"><label class="form-label form-label-top form-label-auto" id="label_18" for="input_18" aria-hidden="false"> <strong>AFR11:</strong> Señale, por favor, los dos motivos principales por los que realiza actividad física o practica algún deporte </label>
          <div id="cid_18" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_18" data-component="checkbox"><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_18" class="form-checkbox validate[maxselection]" id="input_18_0" name="AFR11" value="1" data-maxselection="2"/><label id="label_input_18_0" for="input_18_0">Por diversión o entretenimiento</label></span><span class="form-checkbox-item" ><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_18" class="form-checkbox validate[maxselection]" id="input_18_1" name="AFR11" value="2" data-maxselection="2"/><label id="label_input_18_1" for="input_18_1">Por mantener o mejorar su forma física</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_18" class="form-checkbox validate[maxselection]" id="input_18_2" name="AFR11" value="3" data-maxselection="2"/><label id="label_input_18_2" for="input_18_2">Por relajarse (aliviar estrés, tensiones,...)</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_18" class="form-checkbox validate[maxselection]" id="input_18_3" name="AFR11" value="4" data-maxselection="2"/><label id="label_input_18_3" for="input_18_3">Por hacer relaciones sociales</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_18" class="form-checkbox validate[maxselection]" id="input_18_4" name="AFR11" value="5" data-maxselection="2"/><label id="label_input_18_4" for="input_18_4">Por salud (prevenir enfermedades)</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
			        <input type="checkbox" aria-describedby="label_18" class="form-checkbox validate[maxselection]" id="input_18_5" name="AFR11" value="6" data-maxselection="2"/><label id="label_input_18_5" for="input_18_5">Por su profesión</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-small">
            <div class="header-text al vam">
              <h3 class="form-header" data-component="header">PARA TODAS</h3>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_dropdown" id="id_19"><label class="form-label form-label-top form-label-auto" id="label_19" for="input_19" aria-hidden="false"> <strong> AFR12:</strong> ¿Suele ir a caminar (más o menos rápido) de forma intencional, con el fin de mejorar su salud?. Seleccione el rango que mejor refleje el tiempo semanal que dedica a esta actividad, en su caso</label>
          <div id="cid_19" class="form-input-wide" data-layout="half"> <select class="form-dropdown" id="input_19" name="AFR12" style="width:310px" data-component="dropdown" aria-label="AFR12: ¿Suele caminar (más o menos rápido) durante más de 30 minutos al día de forma intencional, con el fin de mejorar su salud?">
              <option value="">Seleccione</option>
              <option value="1"> No suelo ir a caminar de forma intencional</option>
              <option value="2"> Menos de dos horas a la semana</option>
              <option value="3"> Entre dos y cinco horas</option>
              <option value="4"> Más de cinco horas</option>
            </select> </div>
        </li>
      </ul>
      <li  class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container"><button type="button" class="form-pagebreak-back  btn btn-secondary" data-component="pagebreak-back">Volver </button></div>
          <div class="form-pagebreak-next-container"><button  type="button" class="form-pagebreak-next  btn btn-info" data-component="pagebreak-next">Continuar a sección III</button></div>
          <div style="clear:both" class="pageInfo form-sub-label"></div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <ul class="form-section" id="section_3">
        <li id="cid_section_3" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_3" data-component="collapse"><span class="form-collapse-mid" id="collapse-text_3">SECCIÓN III: FACTORES DE CONCILIACIÓN FAMILIAR Y TIEMPO LIBRE </span><span class="form-collapse-right form-collapse-right-show"> </span></div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div style="display:table;width:100%">
            <div class="form-header-group hasImage header-default" data-imagealign="Left">
              <div class="header-logo"><img src="img/conciliacionfamiliar.jpg" alt="Motivos o factores que limitan la práctica de actividad física (FL)" width="160" class="header-logo-left" /></div>
              <div class="header-text ac vab">
                <h2 " class="form-header" data-component="header">Factores que pueden limitar la práctica de actividad físico deportiva (FL)</h2>
                <div  class="subHeader">Se miden características como el tiempo libre, las responsabilidades y horarios laborales, o la conciliacion familiar. Son 6 preguntas con un tiempo estimado de 1  minuto.</div>
              </div>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_20"><label class="form-label form-label-left" id="label_20" for="input_20" aria-hidden="false"> <strong>FL1:</strong> ¿Le gustaría realizar más actividad físico deportiva de la que actualmente practica?  </label>
          <div id="cid_20" class="form-input" data-layout="full">
            <div class="form-single-column" role="group" aria-labelledby="label_20" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_0" name="FL1" value="1" /><label id="label_input_20_0" for="input_20_0">Sí</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			      <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_1" name="FL1" value="2" /><label id="label_input_20_1" for="input_20_1">No. Considero suficiente mi practica deportiva  </label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_2" name="FL1" value="3" /><label id="label_input_20_2" for="input_20_2">No. La práctica deportiva no me atrae</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
        </div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-small">
            <div class="header-text al vam">
              <h3  class="form-header" data-component="header">SOLO SI HA RESPONDIDO AFIRMATIVAMENTE A LA PREGUNTA ANTERIOR (FL1)</h3>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_21"><label class="form-label form-label-top" id="label_21" for="input_21" aria-hidden="false"> <strong> FL2: </strong> Desde la perspectiva de tiempo disponible, seleccione, por favor, el motivo principal que le limita para no realizar (o no realizar más) activiad físico deportiva </label>
          <div id="cid_21" class="form-input" data-layout="full">
            <div class="form-single-column" role="group" aria-labelledby="label_21" data-component="control-radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_0" name="FL3" value="1" /><label id="label_input_21_0" for="input_21_0">Mi trabajo/estudios me limitan y no soy capaz de generar tiempo para mí</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_1" name="FL3" value="2" /><label id="label_input_21_1" for="input_21_1">Mis horarios son incompatibles</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_2" name="FL3" value="3" /><label id="label_input_21_2" for="input_21_2">En la gestión de mi tiempo, considero la práctica de actividad físico deportiva como secundaria </label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_3" name="FL3" value="4" /><label id="label_input_21_3" for="input_21_3">El tiempo no condiciona mi práctica de actividad físico deportiva</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>     
         </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_22"><label class="form-label form-label-top" id="label_22" for="input_22" aria-hidden="false"><strong> FL3:</strong> Desde la perspectiva de la conciliacion familiar, seleccione, por favor, el motivo principal que le limita para no realizar (o no realizar más) actividad físico deportiva </label>
          <div id="cid_22" class="form-input" data-layout="full">
            <div class="form-single-column" role="group" aria-labelledby="label_22" data-component="control_radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_0" name="FL3" value="1" /><label id="label_input_22_0" for="input_22_0">Porque las tareas domésticas ocupan una buena parte de mi tiempo</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_1" name="FL3" value="2" /><label id="label_input_22_1" for="input_22_1">Porque debo ocuparme de la atención y cuidado a menores (reuniones escolares, citas médicas,...)</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_2" name="FL3" value="3" /><label id="label_input_22_2" for="input_22_2">Porque me ocupo de la atención física y/o emocional de alguna persona mayor (o con discapacidad)</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_3" name="FL3" value="4" /><label id="label_input_22_3" for="input_22_3">La conciliación familiar no limita mi práctica de actividad físico deportiva</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_23"><label class="form-label form-label-top" id="label_23" for="input_23" aria-hidden="false"> <strong> FL4:</strong> Desde la perspectiva de la oferta de actividades, seleccione, por favor, el motivo principal que le limita para realizar (o para realizar más) actividad físico deportiva </label>
          <div id="cid_23" class="form-input" data-layout="full">
            <div class="form-single-column" role="group" aria-labelledby="label_23" data-component="control-radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_0" name="FL5" value="1" /><label id="label_input_23_0" for="input_23_0">Porque no cuento con un espacio próximo en el que se oferten actividades de mi interés</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_1" name="FL5" value="2" /><label id="label_input_23_1" for="input_23_1">Porque las actividades me resultan pesadas, o no me enganchan y pierdo el interés </label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_2" name="FL5" value="3" /><label id="label_input_23_2" for="input_23_2">Por una cuestión económica</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_3" name="FL5" value="4" /><label id="label_input_23_3" for="input_23_3"> La oferta de actividades no limita mi práctica de actividad físico deportiva</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-small">
            <div class="header-text al vam">
              <h3  class="form-header" data-component="header">PARA TODAS</h3>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_24"><label class="form-label form-label-top form-label-auto" id="label_24" for="input_24" aria-hidden="false"><strong>FL5: </strong> Índiquenos, por favor, cuántas horas semanales suele dedicar a actividades de ocio personal (cine, teatro, lectura, cenas, amistades) excluyendo las horas destinadas a la práctica de actividad física </label>
          <div id="cid_24" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_24" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_0" name="FL7" value="1" /><label id="label_input_24_0" for="input_24_0">Menos de 4 horas </label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_1" name="FL7" value="2" /><label id="label_input_24_1" for="input_24_1">Entre cuatro y ocho horas</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_2" name="FL7" value="3" /><label id="label_input_24_2" for="input_24_2">Más de ocho horas</label></span></div>
          </div>
        </li>
      </ul>
      <li  class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container"><button type="button" class="form-pagebreak-back  btn btn-secondary" data-component="pagebreak-back">Volver </button></div>
          <div class="form-pagebreak-next-container"><button  type="button" class="form-pagebreak-next  btn btn-info" data-component="pagebreak-next">Continuar a sección IV</button></div>
          <div style="clear:both" class="pageInfo form-sub-label"></div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li class="form-line" data-type="control_widget">
        <div  class="form-input-wide" data-layout="full">
        </div>
      </li>
      <ul class="form-section" id="section_4">
        <li id="cid_section_4" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_4" data-component="collapse"><span class="form-collapse-mid" id="collapse-text_4">SECCIÓN IV : ESTILO DE VIDA</span><span class="form-collapse-right form-collapse-right-show"> </span></div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div style="display:table;width:100%">
            <div class="form-header-group hasImage header-default" data-imagealign="Left">
              <div class="header-logo"><img src="img/habitos.jpg" alt="Hábitos saludables y alimentación (HSA)" width="160" class="header-logo-left" /></div>
              <div class="header-text ac vab">
                <h2 id="header_5" class="form-header" data-component="header">Hábitos saludables y alimentación (HSA)</h2>
                <div id="subHeader_10" class="subHeader">Se miden aspectos relativos al estilo de vida y la alimentación. Son 8 preguntas con un tiempo estimado de 1.25 minutos.</div>
              </div>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_25"><label class="form-label form-label-top form-label-auto" id="label_25" for="input_25" aria-hidden="false"> <strong> HSA1:</strong> ¿Ha fumado durante el último año? </label>
          <div id="cid_25" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_25" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_25" class="form-radio" id="input_25_0" name="HSA1" value="1" /><label id="label_input_25_0" for="input_25_0">No</label></span><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_25" class="form-radio" id="input_25_1" name="HSA1" value="2" /><label id="label_input_25_1" for="input_25_1">Sí, menos de 10 cigarrillos diarios</label></span><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_25" class="form-radio" id="input_25_2" name="HSA1" value="3" /><label id="label_input_25_2" for="input_25_2">Sí, más de 10 cigarrillos diarios</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider">
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#2462B9;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
       <li class="form-line" data-type="control_radio" id="id_26"><label class="form-label form-label-top form-label-auto" id="label_26" for="input_26" aria-hidden="false"> <strong> HSA2: </strong> ¿Con qué frecuencia consume alcohol? </label>
          <div id="cid_26" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column"  data-columncount="4" role="group" aria-labelledby="label_26" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_0" name="HSA2" value="1" /><label id="label_input_26_0" for="input_26_0"> Diariamente  </label></span><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_1" name="HSA2" value="2" /><label id="label_input_26_1" for="input_26_1"> Semanalmente  </label></span><span class="form-radio-item"><span class="dragger-item"></span>
         	    <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_2" name="HSA2" value="3" /><label id="label_input_26_2" for="input_26_2"> Mensualmente  </label></span><span class="form-radio-item"><span class="dragger-item"></span>
		          <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_3" name="HSA2" value="4" /><label id="label_input_26_3" for="input_26_3"> Esporádicamente  </label></span><span class="form-radio-item"><span class="dragger-item"></span>
		        </div>
       </li>
       <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
       <li class="form-line" data-type="control_radio" id="id_27"><label class="form-label form-label-top" id="label_27" for="input_27" aria-hidden="false"> <strong> HSA3:</strong> Díganos, ¿es vegetariana o vegana? </label>
          <div id="cid_27" class="form-input" data-layout="half">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_27" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_0" name="HSA3" value="1" /><label id="label_input_27_0" for="input_27_0">No</label></span><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_1" name="HSA3" value="2" /><label id="label_input_27_1" for="input_27_1">Sí</label></span></div>
          </div>
       </li>
       <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
       <li class="form-line" data-type="control_scale" id="id_28"><label class="form-label form-label-top form-label-auto" id="label_28" for="input_28" aria-hidden="false"> <strong> HSA4:</strong> Puntúe cómo es de saludable su alimentación en base a las recomendaciones nutricionales (consumo de fruta y verdura, e ingesta moderada de hidratos de carbono, grasas y azúcares) </label>
          <div id="cid_28" class="form-input-wide" data-layout="full"> <span class="form-sub-label-container" style="vertical-align:top">
              <div role="radiogroup" aria-labelledby="label_28 sublabel_input_28_description" cellPadding="4" cellSpacing="0" class="form-scale-table" data-component="scale">
                <div class="rating-item-group">
                  <div class="rating-item"><span class="rating-item-title for-from"><label for="input_28_worst" aria-hidden="true">Nada</label></span>
                  <input type="radio" aria-describedby="label_28" class="form-radio" name="HSA4"value="1" title="1" id="input_28_1" /><label for="input_28_1">1</label></div>
                  <div class="rating-item"><input type="radio" aria-describedby="label_28" class="form-radio" name="HSA4"value="2" title="2" id="input_28_2" /><label for="input_28_2">2</label></div>
                  <div class="rating-item"><input type="radio" aria-describedby="label_28" class="form-radio" name="HSA4"value="3" title="3" id="input_28_3" /><label for="input_28_3">3</label></div>
                  <div class="rating-item"><input type="radio" aria-describedby="label_28" class="form-radio" name="HSA4"value="4" title="4" id="input_28_4" /><label for="input_28_4">4</label></div>
                  <div class="rating-item"><span class="rating-item-title for-to"><label for="input_28_best" aria-hidden="true">Totalmente </label></span><input type="radio" aria-describedby="label_28" class="form-radio" name="HSA4"value="5" title="5" id="input_28_5" /><label for="input_28_5">5</label></div>
                </div>
              </div><label class="form-sub-label" id="sublabel_input_28_description" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false">1 es Nada, 5 es Totalmente </label>
            </span> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_29"><label class="form-label form-label-top form-label-auto" id="label_29" for="input_29" aria-hidden="false"> <strong> HSA5:</strong> Díganos, por favor, si está motivada, y en su caso, señale la principal motivación en el cuidado de su alimentación </label>
          <div id="cid_29" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_29" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
              <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_0" name="HSA5" value="1" /><label id="label_input_29_0" for="input_29_0">No estoy motivada</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_1" name="HSA5" value="2" /><label id="label_input_29_1" for="input_29_1">Verse bien físicamente</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_2" name="HSA5" value="3" /><label id="label_input_29_2" for="input_29_2">Cuidar su salud</label></span><span class="form-radio-item"><span class="dragger-item"></span>
          	  <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_3" name="HSA5" value="4" /><label id="label_input_29_3" for="input_29_3">Mantener o perder peso</label></span><span class="form-radio-item"></div>
		        </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_30"><label class="form-label form-label-top" id="label_30" for="input_30" aria-hidden="false"> <strong> HSA6:</strong> ¿Cree que su alimentación sería más saludable si dispusiese de más tiempo para cocinar? </label>
          <div id="cid_30" class="form-input" data-layout="half">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_30" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_0" name="HSA6" value="1" /><label id="label_input_30_0" for="input_30_0">Sí</label></span><span class="form-radio-item"><span class="dragger-item"></span><input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_1" name="HSA6" value="2" /><label id="label_input_30_1" for="input_30_1">No</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_31"><label class="form-label form-label-top form-label-auto" id="label_31" for="input_31" aria-hidden="false"> <strong>HSA7:</strong> En un día normal, ¿cuanto tiempo suele pasar sentada delante de una pantalla? </label>
          <div id="cid_31" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_31" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_0" name="HSA7" value="1" /><label id="label_input_31_0" for="input_31_0">Menos de 2 horas </label></span><span class="form-radio-item"><span class="dragger-item"></span>
			      <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_1" name="HSA7" value="2" /><label id="label_input_31_1" for="input_31_1">Entre dos y cuatro horas</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			      <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_2" name="HSA7" value="3" /><label id="label_input_31_2" for="input_31_2">Más de cuatro horas</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_32"><label class="form-label form-label-left" id="label_32" for="input_32" aria-hidden="false"> <strong> HSA8:</strong> ¿Suele sentir estres? </label>
          <div id="cid_32" class="form-input" data-layout="full">
            <div class="form-single-column" role="group" aria-labelledby="label_20" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_32" class="form-radio" id="input_32_0" name="HSA8" value="1" /><label id="label_input_32_0" for="input_32_0">Nunca</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
			      <input type="radio" aria-describedby="label_32" class="form-radio" id="input_32_1" name="HSA8" value="2" /><label id="label_input_32_1" for="input_32_1">Puntualmente, en alguna ocasión</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_32" class="form-radio" id="input_32_2" name="HSA8" value="3" /><label id="label_input_32_2" for="input_32_2">Sí, a diario (excepto el fin de semana)</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_32" class="form-radio" id="input_32_3" name="HSA8" value="4" /><label id="label_input_20_3" for="input_32_3">Sí, todos los días</label></span></div>
          </div>
        </li>
      </ul>
      <li  class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container"><button type="button" class="form-pagebreak-back  btn btn-secondary" data-component="pagebreak-back">Volver </button></div>
          <div class="form-pagebreak-next-container"><button  type="button" class="form-pagebreak-next  btn btn-info" data-component="pagebreak-next">Continuar a sección V</button></div>
          <div style="clear:both" class="pageInfo form-sub-label"></div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <ul class="form-section" id="section_5">
        <li id="cid_section_5" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_5" data-component="collapse"><span class="form-collapse-mid" id="collapse-text_5">SECCIÓN V: FACTORES FÍSICOS, GINECOLÓGICOS Y CÁNCER DE MAMA</span><span class="form-collapse-right form-collapse-right-show"> </span></div>
        </li>
        <li class="form-input-wide" data-type="control_head">
          <div style="display:table;width:100%">
            <div class="form-header-group hasImage header-default" data-imagealign="Left">
              <div class="header-logo"><img src="img/ginecologia.jpg" alt="Aspectos Ginecológicos y Gestacionales (AGG) " width="151" class="header-logo-left" /></div>
              <div class="header-text ac vab">
                <h2  class="form-header" data-component="header">Aspectos Físicos, Ginecológicos y Cáncer de mama (AFGC) </h2>
                <div  class="subHeader">Se miden aspectos físicos personales y relativos a la ginecología y la maternidad en mujer, así como la presencia de diagnóstico de cáncer de mama. Son un máximo de 13 preguntas con un tiempo estimado de 1.75 minutos.</div>
              </div>
            </div>
          </div>
        </li>
        <li class="form-line fixed-width" data-type="control_number" id="id_33"><label class="form-label form-label-left" id="label_33" for="input_33" aria-hidden="false"> <strong> AFGC1:</strong> Indique, por favor, su estatura en centimetros</label>
          <div id="cid_33" class="form-input" data-layout="full"> <span class="form-sub-label-container" style="vertical-align:top"><input type="number" id="input_33" name="AFGC1" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:120px" size="120" value="" placeholder="Por ej., 164" data-numbermin="120" data-numbermax="220" data-component="number" aria-labelledby="label_33" step="any" /></span> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line fixed-width" data-type="control_number" id="id_34"><label class="form-label form-label-left" id="label_34" for="input_34" aria-hidden="false"> <strong> AFGC2:</strong> Indique, por favor, su peso aproximado en kilogramos</label>
          <div id="cid_34" class="form-input" data-layout="full"> <span class="form-sub-label-container" style="vertical-align:top"><input type="number" id="input_34" name="AFGC2" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:120px" size="120" value="" placeholder="Por ej., 76" data-numbermin="40" data-numbermax="150" data-component="number" aria-labelledby="label_34" step="any" /></span> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line fixed-width" data-type="control_number" id="id_35"><label class="form-label form-label-left" id="label_35" for="input_35" aria-hidden="false"> <strong> AFGC3:</strong> ¿A qué edad tuvo su primera menstruación? </label>
          <div id="cid_35" class="form-input" data-layout="half"> <input type="number" id="input_35" name="AFGC3" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:120px" size="120" value="" placeholder="Por ej., 12" data-numbermin="9" data-numbermax="20" data-component="number" aria-labelledby="label_35" step="any" /> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line fixed-width" data-type="control_number" id="id_36"><label class="form-label form-label-left" id="label_36" for="input_36" aria-hidden="false"> <strong> AFGC4:</strong> Si procede, díganos, por favor, a qué edad tuvo su primer embarazo </label>
          <div id="cid_36" class="form-input" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="number" id="input_36" name="AFGC4" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:120px" size="120" value="" placeholder="Por ej., 23" data-numbermin="16" data-numbermax="50" data-component="number" aria-labelledby="label_36 sublabel_input_36" step="any" /><label class="form-sub-label" for="input_36" id="sublabel_input_36" style="min-height:13px" aria-hidden="false"> Por favor, introduzca 50 si no ha sido madre biológica</label></span> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        </li>
        <li class="form-line fixed-width" data-type="control_number" id="id_37"><label class="form-label form-label-left" id="label_37" for="input_37" aria-hidden="false"> <strong> AFGC5:</strong> Indique, en su caso, el número de embarazos que ha completado </label>
          <div id="cid_37" class="form-input" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="number" id="input_37" name="AFGC5" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:100px" size="100" value="" placeholder="Por ej., 1" data-component="number" aria-labelledby="label_37 sublabel_input_37" step="any" /><label class="form-sub-label" for="input_37" id="sublabel_input_37" style="min-height:13px" aria-hidden="false">Por favor, introduzca 0 si hasta la actualidad no ha sido madre biológica</label></span> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_38"><label class="form-label form-label-top form-label-auto" id="label_38" for="input_38" aria-hidden="false"> <strong>AFGC6:</strong> Por favor, seleccione el rango de su edad cuando entró en la menopausia, si procede </label>
          <div id="cid_38" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_38" data-component="radio"><span class="form-radio-item"><input type="radio" aria-describedby="label_38" class="form-radio" id="input_38_0" name="AFGC6" value="1" /><label id="label_input_38_0" for="input_38_0">Todavía no</label></span><span class="form-radio-item"><span class="dragger-item"></span>
                <input type="radio" aria-describedby="label_38" class="form-radio" id="input_38_1" name="AFGC6" value="2" /><label id="label_input_38_1" for="input_38_1">Entre los 45 y 50 años</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                <input type="radio" aria-describedby="label_38" class="form-radio" id="input_38_2" name="AFGC6" value="3" /><label id="label_input_38_2" for="input_38_2">Menopausia inducida</label></span><span class="form-radio-item"><span class="dragger-item"></span>
                <input type="radio" aria-describedby="label_38" class="form-radio" id="input_38_3" name="AFGC6" value="4" /><label id="label_input_38_3" for="input_38_3">Con más de 50 años</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_dropdown" id="id_39"><label class="form-label form-label-top form-label-auto" id="label_39" for="input_39" aria-hidden="false"> <strong> AFGC7:</strong> ¿Hay algún antecedente directo de cáncer en su familia (abuelos, padres, hermanos, tíos, sobrinos e hijos)? </label>
          <div id="cid_39" class="form-input-wide" data-layout="half"> <select class="form-dropdown" id="input_39" name="AFGC7" style="width:310px" data-component="dropdown" aria-label="AFGC7: ¿Hay algún antecedente directo de cáncer en su familia?">
              <option value="">Seleccione</option>
              <option value="1"> No</option>
              <option value="2"> Sí</option>
              <option value="3"> No está segura</option>
            </select> </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>

        <li class="form-line" data-type="control_radio" id="id_40"><label class="form-label form-label-top form-label-auto" id="label_40" for="input_40" aria-hidden="false"> <strong>AFGC8:</strong> Deseando que la respuesta sea negativa, necesitamos saber si ha sido diagnósticada de cáncer de mama </label>
          <div id="cid_40" class="form-input-wide" data-layout="half">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_40" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_40" class="form-radio" id="input_40_0" name="AFGC8" value="1" /><label id="label_input_40_0" for="input_40_0">No</label></span><span class="form-radio-item"><span class="dragger-item"></span>
			        <input type="radio" aria-describedby="label_40" class="form-radio" id="input_40_1" name="AFGC8" value="2" /><label id="label_input_40_1" for="input_40_1">Sí</label></span>
            </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li  class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-small">
            <div class="header-text al vam">
              <h3 " class="form-header" data-component="header">SOLO SI HA SIDO DIAGNOSTICADA DE CÁNCER DE MAMA </h3>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_41"><label class="form-label form-label-top form-label-auto" id="label_41" for="input_41" aria-hidden="false"><strong>AFGC9:</strong> ¿Puede, por favor, indicarnos el tipo de cáncer, si lo conoce? </label>
          <div id="cid_41" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_41" data-component="checkbox">
              <span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_41" class="form-checkbox" id="input_41_0" name="AFGC9" value="1" /><label id="label_input_41_0" for="input_41_0"> Luminal A</label></span>
              <span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_41" class="form-checkbox" id="input_41_1" name="AFGC9" value="2" /><label id="label_input_41_1" for="input_41_1"> Luminal B</label></span>
              <span class="form-checkbox-item" ><span class="dragger-item"></span> <input type="checkbox" aria-describedby="label_41" class="form-checkbox" id="input_41_2" name="AFGC9" value="3" /><label id="label_input_41_2" for="input_41_2"> Triple negativo </label></span>
              <span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_41" class="form-checkbox" id="input_41_3" name="AFGC9" value="4" /><label id="label_input_41_3" for="input_41_3"> Subtipo Her2</label></span>
              <span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_41" class="form-checkbox" id="input_41_4" name="AFGC9" value="5" /><label id="label_input_41_4" for="input_41_4"> Otro/No lo sé con certeza</label></span>
            </div>
        </div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control-checkbox" id="id_42"><label class="form-label form-label-top form-label-auto" id="label_42" for="input_42" aria-hidden="false"> <strong>AFGC10:</strong> Indíquenos, por favor, cuál o cuáles de estos tratamientos se le administrarón (o le están administrando, o le van a administrar) </label>
          <div id="cid_42" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_42" data-component="checkbox"><span class="form-checkbox-item"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_42" class="form-checkbox" id="input_42_0" name="AFGC10" value="1" /><label id="label_input_42_0" for="input_42_0">Radioterapia</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_42" class="form-checkbox" id="input_42_1" name="AFGC10" value="2" /><label id="label_input_42_1" for="input_42_1">Inmunoterapia</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_42" class="form-checkbox" id="input_42_2" name="AFGC10" value="3" /><label id="label_input_42_2" for="input_42_2">Quimioterapia</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_42" class="form-checkbox" id="input_42_3" name="AFGC10" value="4" /><label id="label_input_42_3" for="input_42_3">Cirugía</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_42" class="form-checkbox" id="input_42_4" name="AFGC10" value="5" /><label id="label_input_42_4" for="input_42_4">Tratamiento hormonal</label></span><span class="form-checkbox-item"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_42" class="form-checkbox" id="input_42_5" name="AFGC10" value="6" /><label id="label_input_42_5" for="input_42_5">Otro/No lo sé con certeza</label></span>
          </div></div>
        </li>
        <li class="form-line" data-type="control_divider" >
          <div  class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_43"><label class="form-label form-label-left" id="label_43" for="input_43" aria-hidden="false"> <strong>AFGC11:</strong> Tras el diagnóstico, ¿su oncólogo le prescribió o recomendó realizar actividad físico deportiva? </label>
          <div id="cid_43" class="form-input" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_43" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_43" class="form-radio" id="input_43_0" name="AFGC11" value="1" /><label id="label_input_43_0" for="input_43_0">No</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_43" class="form-radio" id="input_43_1" name="AFGC11" value="2" /><label id="label_input_43_1" for="input_43_1">Sí</label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_divider">
          <div class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
        <li class="form-line" data-type="control_widget" id="id_44"><label class="form-label form-label-top form-label-auto" id="label_44" for="input_44" aria-hidden="false"> <strong>AFGC12:</strong> ¿Realizó actividad físico deportiva durante la administración de alguno de los tratamientos? </label>
          <div id="cid_44" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_44" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_44" class="form-radio" id="input_44_0" name="AFGC12" value="1" /><label id="label_input_44_0" for="input_44_0"> No realicé actividad físico deportiva</label></span><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_44" class="form-radio" id="input_44_1" name="AFGC12" value="2" /><label id="label_input_44_1" for="input_44_1"> Realicé actividad físico deportiva suave (caminar, pilates, gimnasia con acompañamiento musical, yoga,...) </label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_44" class="form-radio" id="input_44_2" name="AFGC12" value="3" /><label id="label_input_44_2" for="input_44_2">Sí, realicé actividad físico deportiva de intensidad moderada (correr, nadar, bicicleta, zumba,...)</label></span><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_44" class="form-radio" id="input_44_3" name="AFGC12" value="4" /><label id="label_input_44_3" for="input_44_3">Sí, realicé actividad físico deportiva intensa ( correr en pendiente, nadar rápido, bicicleta en alta intensidad, baile aeróbico de alto impacto,...) </label></span></div>
          </div>
        </li>
		    <li class="form-line" data-type="control_divider">
          <div class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1.75px;border-bottom-style:solid;border-color:#edb9e2;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
          </div>
        </li>
		    <li class="form-line" data-type="control_widget" id="id_45"><label class="form-label form-label-top form-label-auto" id="label_45" for="input_45" aria-hidden="false"> <strong> AFGC13:</strong> ¿Y tras finalizar el tratamiento (o los tratamientos), y en la actualidad? </label>
          <div id="cid_45" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_45" data-component="radio"><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_45" class="form-radio" id="input_45_0" name="AFGC13" value="1" /><label id="label_input_45_0" for="input_45_0"> No practiqué, ni practico actualmente </label></span><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_45" class="form-radio" id="input_45_1" name="AFGC13" value="2" /><label id="label_input_45_1" for="input_45_1">Practiqué, pero actualmente no </label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_45" class="form-radio" id="input_45_3" name="AFGC13" value="3" /><label id="label_input_45_3" for="input_45_3">Actualmente realizo actividad físico deportiva suave o moderada</label></span><span class="form-radio-item"><span class="dragger-item"></span>
            <input type="radio" aria-describedby="label_45" class="form-radio" id="input_45_4" name="AFGC13" value="4" /><label id="label_input_45_4" for="input_45_4">Actualmente realizo actividad físico deportiva intensa </label></span></div>
          </div>
        </li>
        <li class="form-line" data-type="control_button" id="id_send">
          <div id="cid_send" class="form-input-wide" data-layout="full">
            <div data-align="center" class="form-buttons-wrapper form-buttons-center"><button id="input_send" type="submit" class="form-submit-button form-submit-button-big_square_blue btn-lg submit-button lm-form-buttons" data-component="button" data-content="This form is encrypted">ENVIAR</button></div>
          </div>
        </li>
     </div>
  </ul>
  </form></body>
<script type="text/javascript">LmForm.ownerView=false;
</script><script type="text/javascript">LmForm.forwardToEu=false;
</script><script type="text/javascript">LmForm.isNewSACL=false;</script>

</html>

<?php
include("template/pie.php");
?>