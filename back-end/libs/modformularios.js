/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 
  
 * 
 */

(function ($) {
    $.fn.plugin = function () {
        return $(this).each(function () {
            $(this).change(function () {
            ///EMPRESA
                    //CORREO
                 //  alert("Hols");
                    if ($(this).attr("name") == 'correo' || $(this).attr("name") == 'mail_empresa' ) {
                       
                        var patron = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/;
                        
                        if ($(this).val().length == 0) {
                              $(this).css("background-color", "red");
                        } else {
                            if ($(this).val().match(patron))
                                $(this).css("background-color", "blue");
                            else
                                $(this).css("background-color", "red");
                        }
                    }
                    //NIF_EMPRESA                   
                    if ($(this).attr("name") == 'nif_empresa'|| $(this).attr("name") == 'nif_empresa2') {
                       
                        var patron = /^([A-HJUV]\d{8})$|([NP-SW]\d{7}[A-Z]{1})$/;
                        
                        if ($(this).val().length == 0) {
                              $(this).css("background-color", "red");
                        } else {
                            if ($(this).val().match(patron))
                                $(this).css("background-color", "blue");
                            else
                                $(this).css("background-color", "red");
                        }
                    }
                    //WEB_EMPRESA
                 if ($(this).attr("name") == 'web_empresa') {
                       
                        var patron = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
                        
                        if ($(this).val().length == 0) {
                              $(this).css("background-color", "red");
                        } else {
                            if ($(this).val().match(patron))
                                $(this).css("background-color", "blue");
                            else
                                $(this).css("background-color", "red");
                        }
                    }
                    //TELEFONO_EMPRESA                   
                    if ($(this).attr("name") == 'telefono_empresa') {
                       
                        var patron = /^\d{9}$/;
                        
                        if ($(this).val().length == 0) {
                              $(this).css("background-color", "red");
                        } else {
                            if ($(this).val().match(patron))
                                $(this).css("background-color", "blue");
                            else
                                $(this).css("background-color", "red");
                        }
                    }
                    //CUENTA_BANCARIA
                    if ($(this).attr("name") == 'cuenta_bancaria') {
                       
                        var patron = /^\d{20}$/;
                        
                        if ($(this).val().length == 0) {
                              $(this).css("background-color", "red");
                        } else {
                            if ($(this).val().match(patron))
                                $(this).css("background-color", "blue");
                            else
                                $(this).css("background-color", "red");
                        }
                    }
                //////CLIENTE    
                    //CUENTA_BANCARIA
                    if ($(this).attr("name") == 'cuenta_bancaria') {
                       
                        var patron = /^\d{20}$/;
                        
                        if ($(this).val().length == 0) {
                              $(this).css("background-color", "red");
                        } else {
                            if ($(this).val().match(patron))
                                $(this).css("background-color", "blue");
                            else
                                $(this).css("background-color", "red");
                        }
                    }
                    
                    //////PRODUCTO    
                    //PRECIO Y PORCENTAJE
                    if ($(this).attr("name") == 'precio') {
                       
                        var patron = /^([0-9])*$/;
                        
                        if ($(this).val().length == 0) {
                              $(this).css("background-color", "red");
                        } else {
                        if ($(this).val().match(patron) && $(this).val() > 0){
                                $(this).css("background-color", "blue");
                            }else{
                                $(this).css("background-color", "red");
                            }
                        }
                    }
                    
                    
                       if ($(this).attr("name") == 'porcentaje_descuento' ) {
                       
                        var patron = /^([0-9])*$/;
                        
                        if ($(this).val().length == 0) {
                              $(this).css("background-color", "red");
                        } else {
                            alert(parseInt($(this).val()));
                            if (!$(this).val().match(patron) || $(this).val() < 0 || $(this).val() > 100){
                                alert("holar");
                                 $(this).css("background-color", "red");
                            }else{
                               alert("holaa");
                                $(this).css("background-color", "blue");
                            }
                        }
                    }
                    
            });

        });
    };


})(jQuery);






/*
 function validaSoloTexto(cadena) {
 var patron = /^[a-zA-Z]+$/;
 
 if (cadena.val().length == 0) {
 cadena.css("background-color", "red");
 } else {
 if (cadena.val().match(patron))
 cadena.css("background-color", "blue");
 else
 cadena.css("background-color", "red");
 }
 }
 function validaAltura(altura) {
 
 if (altura.val().length == 0) {
 altura.css("background-color", "red");
 }
 
 if (validaSoloNumerico(altura.val()) == true) {
 if (altura.val() > 100 && altura.val() < 299) {
 altura.css("background-color", "blue");
 } else {
 altura.css("background-color", "red");
 }
 } else {
 altura.css("background-color", "red");
 }
 }
 
 function validaSoloNumerico(cadena) {
 var patron = /^[0-9]+$/;
 
 if (cadena.length == 0) {
 return false;
 }
 
 if (cadena.match(patron))
 return true
 else
 return false;
 }
 
 function validaPagWeb(cadena) {
 var patron = /^paginaWeb.com\//;
 
 if (cadena.val().length == 0) {
 cadena.css("background-color", "red");
 }
 if (cadena.val().match(patron))
 cadena.css("background-color", "blue");
 else
 cadena.css("background-color", "red");
 }
 
 function validaTelefono(cadena) {
 var patron = /^[6][0-9]{8}$/;
 
 if (cadena.val().length == 0) {
 cadena.css("background-color", "red");
 }
 
 if (cadena.val().match(patron))
 cadena.css("background-color", "blue");
 else
 cadena.css("background-color", "red");
 }
 */

      