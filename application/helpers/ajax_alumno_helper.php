<script >
	
	$(document).ready(function(){


		mostrarAlumno();

		function mostrarAlumno(){

			$.ajax({
				type: 'ajax',
				url:  '<?= base_url("alumnoC/get_alumno")?>',
				dataType: 'json',

				success: function(datos){
					var tabla="";
					var i;
					var n=1;

					for(i=0; i<datos.length; i++){
						tabla+=
						'<tr>'+
						'<td>'+n+'</td>'+
						'<td>'+datos[i].nombre+'</td>'+
						'<td>'+datos[i].apellido+'</td>'+
						'<td>'+datos[i].edad+'</td>'+
						'<td>'+datos[i].nombre_sexo+'</td>'+
						'<td>'+datos[i].nombre_carrera+'</td>'+
						'<td>'+datos[i].nombre_ciudad+'</td>'+
						'<td>'+'<a href="javascript:;" class="btn btn-danger btn-sm borrar" data="'+datos[i].id_alumno+'">Eliminar</a>'+'</td>'+
						'<td>'+'<a href="javascript:;" class="btn btn-info btn-sm item-edi" data="'+datos[i].id_alumno+'">Editar</a>'+'</td>'+

						'</tr>';
						n++;
					}
					$('#tabla_alumno').html(tabla);
				}

			});
		}

		$('#tabla_alumno').on("click", ".borrar", function(){
			$id=$(this).attr("data");
			$('#modalBorrar').modal("show");
			$('#btnBorrar').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url:  '<?= base_url("alumnoC/eliminar")?>',
					data: {id:$id},
					dataType: 'json',

					success: function(respuesta){
						$('#modalBorrar').modal("hide");
						if(respuesta==true){
							alertify.notify("Eliminado Exitosamente! ", "success", 10, null);
							mostrarAlumno();
						}else{
							alertify.notify("Error al Eliminar! ", "error", 10, null);
						}
					}
				});
			});
		});

		$('#nueAlu').click(function(){
			$('#alumno').modal("show");
			$('#alumno').find(".modal-title").text("Nuevo Alumno");
			$('#formAlumno').attr("action", "<?= base_url("alumnoC/ingresar")?>");

		});

		get_sexo();

		function get_sexo(){
			$.ajax({
				type: 'ajax',
				
				url:  '<?= base_url("alumnoC/get_sexo")?>',

				dataType: 'json',

				success: function(datos){
					var op="";
					var i;

					op+="<option value=''>--Seleccione Sexo--</option>";

					for(i=0; i<datos.length; i++){
						op+="<option value='"+datos[i].id_sexo+"'>"+datos[i].nombre_sexo+"</option>";
					}
					$('#sexo').html(op);
				}


				
			});
		}

		get_carrera();

		function get_carrera(){
			$.ajax({
				type: 'ajax',
				
				url:  '<?= base_url("alumnoC/get_carrera")?>',

				dataType: 'json',

				success: function(datos){
					var op="";
					var i;

					op+="<option value=''>--Seleccione carrera--</option>";

					for(i=0; i<datos.length; i++){
						op+="<option value='"+datos[i].id_carrera+"'>"+datos[i].nombre_carrera+"</option>";
					}
					$('#carrera').html(op);
				}


				
			});
		}


		get_ciudad();

		function get_ciudad(){
			$.ajax({
				type: 'ajax',
				
				url:  '<?= base_url("alumnoC/get_ciudad")?>',

				dataType: 'json',

				success: function(datos){
					var op="";
					var i;

					op+="<option value=''>--Seleccione ciudad--</option>";

					for(i=0; i<datos.length; i++){
						op+="<option value='"+datos[i].id_ciudad+"'>"+datos[i].nombre_ciudad+"</option>";
					}
					$('#ciudad').html(op);
				}


				
			});
		}

		$('#btnGuardar').click(function(){
			$url=$('#formAlumno').attr("action");
			$data=$('#formAlumno').serialize();
			if(validaralumno()==true){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url:  $url,
					data: $data,
					dataType: 'json',

					success: function(respuesta){
						$('#alumno').modal("hide");
						if(respuesta=="add"){
							alertify.notify("Ingresado Exitosamente! ", "success", 10, null);
							mostrarAlumno();
						}else if(respuesta=="edi"){
							alertify.notify("Actualizado Exitosamente! ", "success", 10, null);
							mostrarAlumno();
						}else{
							alertify.notify("Error al Insertar! ", "error", 10, null);
						}
						$('#formAlumno')[0].reset();
					}
				});
			}

		});

		$('#tabla_alumno').on("click", ".item-edi", function(){
			$id=$(this).attr("data");
			$('#alumno').modal("show");
			$('#alumno').find(".modal-title").text("Editar Alumno");
			$('#formAlumno').attr("action", "<?= base_url("alumnoC/actualizar")?>");

			$.ajax({
				type: 'ajax',
				method: 'post',
				url:  '<?= base_url("alumnoC/get_datos")?>',
				data: {id:$id},
				dataType: 'json',

				success: function(datos){
					$('#id').val(datos.id_alumno);
					$('#nombre').val(datos.nombre);
					$('#apellido').val(datos.apellido);
					$('#edad').val(datos.edad);
					$('#sexo').val(datos.id_sexo);
					$('#carrera').val(datos.id_carrera);
					$('#ciudad').val(datos.id_ciudad);

				}
			});



		});



	});


</script>