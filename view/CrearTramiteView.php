<div class="box box-warning">
	<div class="box-header with-border">
	  <h3 class="box-title">Crear Tramite</h3>
	</div>
	<div class="box-body">
		<form role="form">
			<div class="col-md-6">
				<div class="form-group col-xs-16">
				  <label>Titulo</label>
				  <input type="text" id="titulo" class="form-control" placeholder="Enter ...">
				</div>
				<div class="form-group col-xs-16">
				  <label>Nro Radicado</label>
				  <input type="text" id="radicado" class="form-control" placeholder="Enter ...">
				</div>	
				<div class="form-group col-xs-16">
					<label>Tema</label>
					<select id="tema" class="form-control">
						<?php
							require_once('controller/TramiteController.php');
							$obj=new TramiteController();
							$temas=$obj->Temas();
							foreach($temas['resp'] as $key => $valor){
								echo '<option>'.$valor['DESCRIPCION'].'</option>';
							}
						?>

					</select>
				</div>
				<div class="col-xs-4">
					<label for="dia" class="control-label">Dia</label>
					<select id="dia" class="form-control">
					<?php 
						for($i=1;$i<=31;$i++){
					?>
							<option><?php echo ($i<10?'0'.$i:$i)?></option>
					<?php						
						}
					?>
					</select>   
										
				</div>
				<div class="col-xs-4">
					<label for="mes" class="control-label">Mes</label>
					<select id="mes" class="form-control">
					<?php 
						for($i=1;$i<=12;$i++){
					?>
							<option><?php echo ($i<10?'0'.$i:$i)?></option>
					<?php						
						}
					?>					
					</select>
				</div>
				<div class="col-xs-4">
					<label for="ano" class="control-label">Año</label>
					<select id="ano" class="form-control">
					<?php 
						for($i=2007;$i<=2013;$i++){
					?>
							<option><?php echo $i?></option>
					<?php						
						}
					?>						
					</select>
				</div>
				<span class="help-block">Fecha del radicado</span>	
				<div class="form-group col-xs-16">
					<button onclick="creartramite()" class="btn btn-primary">Crear</button>
				</div>
			</div>
			<div id="resultados"></div>
		</form>
	</div>
</div>