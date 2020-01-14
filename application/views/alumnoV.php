	<?php $this->load->helper("ajax_alumno") ?>

	<body>
		<button type="button" class="btn btn-success" id="nueAlu">Nuevo</button>

		<table border="2" class="table table-dark">
			<tr>
				<td>N°</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Edad</td>
				<td>Sexo</td>
				<td>Carrera</td>
				<td>Ciudad</td>
				<td>Eliminar</td>
				<td>Editar</td>

			</tr>
			<tbody id="tabla_alumno">
				
			</tbody>


		</table>







		<!-- Modal -->
		<div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" >Seguro que desea Eliminar?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Realmente Desea Eliminar el Registr?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="btnBorrar">SI, Borrar</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="alumno" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" ></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<center>
							<form method="POST" action="alumno" id="formAlumno" >
								<input type="hidden" name="id_alumno" id="id">
								<td>Nombre</td>
								<input type="text" name="nombre" id="nombre">
								<br>
								<br>
								<td>Apellido</td>
								<input type="text" name="apellido" id="apellido">
								<br>
								<br>
								<td>Edad</td>
								<input type="number" name="edad" id="edad">
								<br>
								<br>
								<td>Sexo</td>
								<select name="sexo" id="sexo">
									<option value="">--Seleccione Sexo--</option>
									
								</select>
								<br>
								<br>
								<td>Carrera</td>
								<select name="carrera" id="carrera">
									<option value="">--Seleccione Carrera--</option>
									
								</select>
								<br>
								<br>
								<td>Ciudad</td>
								<select name="ciudad" id="ciudad">
									<option value="">--Seleccione Ciudad--</option>
									
								</select>
								<br>
								<br>


							</form>
						</center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

					</div>
				</div>
			</div>
		</div>