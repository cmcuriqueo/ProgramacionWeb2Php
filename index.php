<?php require __DIR__.'/header.php'; ?>
	<form class="form-horizontal" method="POST" action="<?php $procesada=true;?>listado.php" id="formulario_index">
	    <div class="container">
	        <div class="row-flow">
	            <p></p>
	            <div class="col-md-7">
					<div class="panel panel-success">

						<div class="panel-body">Formulario</div>

		                <div class="panel-footer">
		                    <ul class="list-group">

								<div class="form-group">
		                            <label class="col-sm-2 control-label" for="nombre">Nombre : </label>
		                            <div class="col-sm-10"> <input name="nombre" type="text" placeholder="Nombre"> </div>
								</div>

								<div class="form-group">
		                            <label class="col-sm-2 control-label" for="edad">Edad : </label>
		                            <div class="col-sm-10"> <input name="edad" type="number" placeholder="Edad" min="10"> </div>
								</div>

								<div class="form-group">
		                            <label class="col-sm-2 control-label" for="localidad">Localidad : </label>
		                            <div class="col-sm-10">
			                            <select id="localidad" name="localidad">
			                                <option value="0">localidades</option>
			                                <option>Esquel</option>
			                                <option>Rawson</option>
			                                <option>Trelew</option>
			                            </select>
		                            </div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
		                                <button class="btn btn-default" type="submit">Enviar</button>
		                            </div>
								</div>

							</ul>
						</div>
					</div>
				</div>
	        </div>
	    </div>
	</form>
<?php 
    require __DIR__ . '/footer.php';

                            