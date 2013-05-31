$(function(){
$("#log").submit(function(event){

 event.preventDefault();


    $.ajax({
        url: 'login/index',
        data: $(this).serialize(),
        type: 'post',
        dataType: 'json',


        success: function(result){
           if (result.error){

                $("#error-login").css("display","block");
                setTimeout(function(){ 
                    $('#log').each (function(){
                        this.reset();
                    });
                    $("#error-login").css("display","none");
                }, 2000);
                

            }else{

                $("#success-login").css("display","block");
                setTimeout(function(){  window.location.replace("./"); }, 1000);
               
            }
         
        },
        error: function(e){console.log("Could not retrieve login information")}
    },2000);

    return false;
});

});