/*alert("candado");*/

function desbloquear(){


    if($(".onoff").is(":checked")){
        console.log("ON");
        $(".borrar").removeClass("disabled");
        $(".borrar").addClass("enabled");


    }else{
        console.log("off");
        $(".borrar").removeClass("enabled");
        $(".borrar").addClass("disabled");

    }


/*
   if($accion == "on"){
        console.log($accion);
       $(".onoff").prop( "checked", true );
    }else{
        console.log($accion);
       $(".onoff").prop( "checked", false );
    }*/

}
