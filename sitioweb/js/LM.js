LmForm.newDefaultTheme = false;
	LmForm.extendsNewTheme = true;
	LmForm.singleProduct = false;
	LmForm.newPaymentUIForNewCreatedForms = false;
	LmForm.texts = {"confirmEmail":"El e-mail no coincide","pleaseWait":"Por favor espere...","validateEmail":"Tiene que validar el e-mail","lessThan":"El valor debería ser menor que: ","incompleteFields":"Hay campos obligatorios incompletos. Por favor, completelos","required":"Este campo es obligatorio","requireOne":"At least one field required","email":"Introduce una dirección de correo valida","alphabetic":"Este campo sólo puede contener letras","numeric":"Este campo sólo puede contener valores numéricos","inputCarretErrorA":"El valor no debería ser menor que:","inputCarretErrorB":"El valor no debería ser mayor que","maxDigitsError":"El número máximo de digitos es ","minSelectionsError":"El mínimo número requerido en la selección es ","maxSelectionsError":"El número máximo de opciones es ","ageVerificationError":"You must be older than {minAge} years old to submit this form.","generalPageError":"Hay errores en esta pagina, por favor corrígalos para poder continuar","disallowDecimals":"No son necesarios los decimales","requiredLegend":"Los campos marcados con * son obligatorios y deben completarse","multipleError":"Hay {count} errores en esta página. Por favor, corríjalos antes antes de seguir.","oneError":" Hay {count} error en esta página. Por favor, corríjalo antes de seguir.","doneMessage":"Bien hecho! No hay errores.","doneButton":"Hecho","reviewSubmitText":"Revisar y enviar","nextButtonText":"Siguiente","prevButtonText":"Anterior","seeErrorsButton":"Ver Error","startButtonText":"EMPEZAR","submitButtonText":"ENVIAR","submissionLimit":"Sorry! Only one entry is allowed. Multiple submissions are disabled for this form.","reviewBackText":"Volver al Cuestionario","fieldError":"field has an error.","error":"Error"};
    LmForm.newPaymentUI = true;
	LmForm.replaceTagTest = true;
	LmForm.clearFieldOnHide="disable";
	LmForm.submitError="jumpToFirstError";
	LmForm.encryptionProtocol = "JF-CSE-V2";

	LmForm.init(function(){
	/*INIT-START*/

    $('input_232').rating({stars:'5',
    inputClassName:'form-textbox',
    imagePath: 'https://cdn.jotfor.ms/images/stars_v2.png',
    cleanFirst:true, value:''});
$('input_232').setAttribute('role','radiogroup');
$('input_232').setAttribute('aria-labelledby','label_232');

    Array.from($('input_232').children).map(function(e, i){e.setAttribute('tabindex',0);
    if(i<5) {e.setAttribute('aria-label',(i+1)+' out of 5');}
    e.setAttribute('role','radio');
    e.setAttribute('aria-checked','false');
    e.setAttribute('aria-describedby', 'label_232');
    e.classList.add('form-star-rating-star', 'Stars');
    e.onkeypress = function(k){if(k.keyCode == 13 || k.keyCode == 32)e.click()}});
      LmForm.alterTexts(undefined);
	/*INIT-END*/
	});