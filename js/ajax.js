//REUTILIZABLES CON JQUERY

function Ajax(tipoparametro,ruta,servlet,op,parametros,div){

    $.ajax(
        {   type:tipoparametro,
            dataType:"html",
            url:ruta+"/"+servlet+"Control.php",
            data:"op="+op+"&"+parametros,
            success:function(datos)
            {
                $(div).html(datos);
            }
        });
}

function Record(ruta, tabla, op, parametros)
{
    Ajax("POST",ruta,tabla,op,parametros,"#contenido1");
}


function Acceso(ruta){
    var RutaTotal,usuario,clave;
    RutaTotal=ruta+"/AdminControl.php?op=1";
    usuario=document.form.usuario.value;
    clave=document.form.clave.value;

    if(usuario==''){
        alert("Ingrese usuario");
        return;
    }else if(clave==''){
        alert("Ingrese Contraseña");
        return;
    }else{
        document.form.action=RutaTotal;
        document.form.method="POST";
        document.form.submit();
    }
}
function register_user(ruta) {
    RutaTotal="../../Controlador/AdminControl.php?op=9";
    var usuario, clave;
    usuario = document.form.usuario.value;
    clave =  document.form.clave.value;

    if(usuario == ''){
        //alertify.warning("Ingresar Nombre");
        document.form.usuario.focus();
        return;
    }else if(clave == ''){
        //alertify.warning("Ingresar Contraseña");
        document.form.clave.focus();
        return;
    }else{
        document.form.action=RutaTotal;
        document.form.method="POST";
        document.form.submit();
        //Record(route,'AdminControl',1,parameter);
    }
}