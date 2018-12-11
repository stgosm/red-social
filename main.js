function verify() {
    var correo = document.getElementById("txtCorreo").value;
    var contrasena = document.getElementById("txtContrasena").value;
    if(correo == "" || contrasena == ""){
        console.log("Falta correo o contraseña.")
        return false;
    }else{
        document.getElementById("ingreso").submit();
    }
  }