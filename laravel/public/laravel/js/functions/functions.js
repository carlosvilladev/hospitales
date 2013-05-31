$('#buscar_u').click(function() {
    

    var ced = $('#u-ced').val(); 

    $.ajax({
        url: 'pacientes/consultar',
        data: 'ced='+ced,
        type: 'post',
        dataType: 'json',


        success: function(result){
            if (result.error) {
                //alert('error');
            $("#loader").css("display","block");    
            setTimeout(function(){
                    $("#u-name").val('');
                    $("#u-ape").val('');
                    $('input:radio[name=sexo]')[0].checked = false;
                    $('input:radio[name=sexo]')[1].checked = false;   
                    $("#u-eps").val('');
                    $("#u-edad").val('');

                    $("#loader").css("display","none");
                    $("#guardar_pac").css("display","block");
                    $("#guardar_urg").css("display","none");
                    alert("Paciente no existe.");
                    $("form").append("<input type='hidden' name='action' value='reg_pac'/>");

                }, 2000);
                
            }else{
                var datos = result;
                
                //alert(datos[0].nombrepaciente);
                
                $("#loader").css("display","block");
                setTimeout(function(){
                    $("#idP").val(datos[0].idpaciente);
                    $("#u-ced").val(datos[0].cedulapaciente);
                    $("#u-name").val(datos[0].nombrepaciente);
                    $("#u-ape").val(datos[0].apellidopaciente);
                        if(datos[0].sexo == 'M'){
                            $('input:radio[name=sexo]')[0].checked = true;
                        }else if(datos[0].sexo == 'F'){
                            $('input:radio[name=sexo]')[1].checked = true;
                        }
                    $("#u-eps").val(datos[0].eps);
                    $("#u-edad").val(datos[0].edad);
                    $("#loader").css("display","none");
                    $("#guardar_urg").css("display","block");
                    $("#triageD").css("display","block");
                    $("#detallesD").css("display","block");
                    $("#medicoD").css("display","block");
                    $("#guardar_pac").css("display","none");
                    $("form").append("<input type='hidden' name='action' value='reg_urg'/>");

                }, 2000);
                
            }
            
            
        },
        error: function(e){
            
            }
    },2000);

});


$(function(){
$("#form_pac").submit(function(event){
    event.preventDefault();

    $.ajax({
        url: 'pacientes/insertar',
        data: $("#form_pac").serialize(),
        type: 'post',
        dataType: 'json',


        success: function(result){
            
            if (result.error) {
                
                
            }else{
                alert(result.success);
                $("#u-name").val('');
                $("#u-ape").val('');
                $('input:radio[name=sexo]')[0].checked = false;
                $('input:radio[name=sexo]')[1].checked = false;   
                $("#u-eps").val('');
                $("#u-edad").val('');


            }
            
            
        },
        error: function(e){
            
            }
    },2000);


});

});

$('#guardar_urg').click(function() {

     $.ajax({
        url: '',
        data: $("#form_pac").serialize(),
        type: 'post',
        dataType: 'json',


        success: function(result){
            
            if (result.error) {
                
                
            }else{
                alert(result.success);
                $("#u-name").val('');
                $("#u-ape").val('');
                $('input:radio[name=sexo]')[0].checked = false;
                $('input:radio[name=sexo]')[1].checked = false;   
                $("#u-eps").val('');
                $("#u-edad").val('');


            }
            
            
        },
        error: function(e){
            
            }
    },2000);
});

$(function(){
$("#form_m").submit(function(event){
    event.preventDefault();

    $.ajax({
        url: 'medicos/insert',
        data: $("#form_m").serialize(),
        type: 'post',
        dataType: 'json',


        success: function(result){
            
            if (result.error) {
                
                
            }else{
                alert(result.success);
                $("#m-name").val('');
                $("#m-ape").val('');
                $("#m-codigo").val('');
                window.location.replace("medicos");

            }
            
            
        },
        error: function(e){
            
            }
    },2000);


});

});
var i = 0;
$("#medico").click(function(){
    i++;
    if(i==1){
        $.ajax({
            url: 'medicos/consultar',
            type: 'get',
            dataType: 'json',


            success: function(result){
                 $('#medico').empty();
                $.each(result, function(i, data){

                    $("#medico").append('<option value='+data.idmedico+'>'+data.nombremedico+'</option>');
                });
                
            }, 
            error: function(e){

            }
        });
    }
});


$("#guar_ur").click(function(){


    $.ajax({
        url: 'home/emitirUrgencia',
        data: $("#form_pac").serialize(),
        type: 'post',
        dataType: 'json',


        success: function(result){
            
            if (result.error) {
                
                
            }else{
                alert(result.success);
                $("#u-name").val('');
                $("#u-ape").val('');
                $('input:radio[name=sexo]')[0].checked = false;
                $('input:radio[name=sexo]')[1].checked = false;   
                $("#u-eps").val('');
                $("#u-edad").val('');
                $("#u-detalles").val('');
                window.location.replace("home");

            }
            
            
        },
        error: function(e){
            
            }
    },2000);


});

$(function(){
$("#form-emitir").submit(function(event){
    event.preventDefault();

    $.ajax({
        url: 'ordenes/insertar',
        data: $("#form-emitir").serialize(),
        type: 'post',
        dataType: 'json',


        success: function(result){
            
            if (result.error) {
                
                
            }else{
                alert(result.success);
                $("#receta").val('');
                $("#detalles").val(''); 
                $("#u-eps").val('');
                $("#u-edad").val('');
                window.location.replace('ordenes');


            }
            
            
        },
        error: function(e){
            
            }
    },2000);


});

});

$(function(){
$("#form-login").submit(function(event){
    event.preventDefault();

    $.ajax({
        url: 'login/log',
        data: $("#form-login").serialize(),
        type: 'post',
        dataType: 'json',


        success: function(result){
            
            if (result.error) {
                alert(result.error);
                
            }else{
                //alert(result.success);
                $("#user").val('');
                $("#pass").val(''); 
                window.location.replace('home');


            }
            
            
        },
        error: function(e){
            
            }
    },2000);


});

});

