function validar(){
    var nombre=document.getElementById("nombre").value;
    nombre=nombre.trim();
    if (nombre==""){
        alert("introduce un nombre");
        return false;
    }
    var edad=document.getElementById("edad");
    if(isNaN(edad)){
        alert("introduce un numero");
        return false;
    }

    var movil=document.getElementById("movil");
    if( !(/^[6]{1}([0-9]+){8}$/i.test(tlf)) ) {
        alert("Tienes que introducir una Móvil"); document.getElementById("movil").focus();
        return false;
     }
   var  email=email.trim();
    if( !(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(email)) ) {
        alert("Tienes que introducir una Email"); document.getElementById("email").focus();
        return false;
    }
    var contrasena1=document.getElementById("contrasena1").value;
    var contrasena2=document.getElementById("contrasena2").value;
    contrasena1=contrasena1.trim;
    contrasena2=contrasena2.trim;
    if(contrasena1!=contrasena2){
        alert("las contraseñas no coinciden");
        return false;
    }
    if(contrasena1==""){
        alert("contraseña vacia");
        return false
    }
    if(contrasena2==""){
        alert("contraseña vacia");
        return true
    }
    return true
}