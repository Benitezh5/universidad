function validaralumno(){
	var nombre = $('#nombre').val();
	var apellido = $('#apellido').val();
	var edad = $('#edad').val();
	var sexo = $('#sexo').val();
	var carrera = $('#carrera').val();
	var ciudad = $('#ciudad').val();

if(nombre.length==0){
	$('#nombre').css("boxShadow", "0px 0px 15px red");
	$('#nombre').attr("placeholder", "Campo Requerido");
}else{
	$('#nombre').css("boxShadow", "0px 0px 15px green");
}

if(apellido.length==0){
	$('#apellido').css("boxShadow", "0px 0px 15px red");
	$('#apellido').attr("placeholder", "Campo Requerido");
}else{
	$('#apellido').css("boxShadow", "0px 0px 15px green");
}

if(edad.length==0){
	$('#edad').css("boxShadow", "0px 0px 15px red");
	$('#edad').attr("placeholder", "Campo Requerido");
}else{
	$('#edad').css("boxShadow", "0px 0px 15px green");
}

if(sexo.length==0){
	$('#sexo').css("boxShadow", "0px 0px 15px red");
	$('#sexo').attr("placeholder", "Campo Requerido");
}else{
	$('#sexo').css("boxShadow", "0px 0px 15px green");
}

if(carrera.length==0){
	$('#carrera').css("boxShadow", "0px 0px 15px red");
	$('#carrera').attr("placeholder", "Campo Requerido");
}else{
	$('#carrera').css("boxShadow", "0px 0px 15px green");
}

if(ciudad.length==0){
	$('#ciudad').css("boxShadow", "0px 0px 15px red");
	$('#ciudad').attr("placeholder", "Campo Requerido");
}else{
	$('#ciudad').css("boxShadow", "0px 0px 15px green");
}



	return true;
}