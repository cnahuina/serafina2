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
    var nombres,usuario, clave,rep_clave;
    nombres = document.form.nombres.value;
    usuario = document.form.usuario.value;
    clave =  document.form.clave.value;
    rep_clave =  document.form.rep_clave.value;
    if(nombres == ''){
        document.form.nombres.focus();
        return;
    }else if(usuario == ''){
        //alertify.warning("Ingresar Nombre");
        document.form.usuario.focus();
        return;
    }else if(clave == ''){
        //alertify.warning("Ingresar Contraseña");
        document.form.clave.focus();
        return;
    }else if(rep_clave == ''){
        //alertify.warning("Ingresar Contraseña");
        document.form.repclave.focus();
        return;
    }else{
        document.form.action=RutaTotal;
        document.form.method="POST";
        document.form.submit();
        //Record(route,'AdminControl',1,parameter);
    }
}

function registrarProducto(ruta){
    RutaTotal="../../Controlador/productoControlador.php?op=2";
    var descripcion,presentacion,foto, precio;

    descripcion = document.form.descripcion.value;
    presentacion = document.form.presentacion.value;
    foto = document.form.foto.value;
    precio = document.form.precio.value;

    if(descripcion==''){
        document.form.descripcion.focus();
        return;
    }else if(presentacion==''){
        document.form.presentacion.focus();
        return;
    }else if(foto==''){
        document.form.foto.focus();
        return;
    }else if(precio==''){
        document.form.precio.focus();
        return;
    }  else{
        document.form.action=RutaTotal;
        document.form.method="POST";
        document.form.submit();
    }
}