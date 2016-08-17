<?php require __DIR__.'/header.php'; ?>
<form method="POST" action="listado.php">
    <div class="container">
        <div class="row-flow">
            <p></p>
            <div class="span4">
                <div class="panel panel-success">
                    <div class="panel-body">
                        Formulario
                    </div>
                    <div class="panel-footer">
                        <ul class="list-group">
                            <li class="list-group-item">
                                Nombre: <input name="nombre" type="text">
                            </li>
                            <li class="list-group-item">
                                Edad: <input name="edad" type="number">
                            </li>
                            <li class="list-group-item">
                                Localidad:
                                <select name="localidad_select">
                                        <option>Rawson</option>
                                        <option>Trelew</option>
                                </select>
                            </li>
                            <li class="list-group-item">
                                <button class="btn btn-default" type="submit">submit</button>
                            </li>
                        <ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php 
    require __DIR__ . '/footer.php';

                            