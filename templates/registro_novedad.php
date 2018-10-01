<form action="./database/guardar_novedad.php" class="formulario" name="registroNovedad" method="POST">
    <label for="" >Resgistro de novedades Likeu</label><br>
    <input type="radio" name="campo" required value="si" id="si" onclick="seleccion()"  />Agentes
    <input type="radio" name="campo" required value="no" id="no" onclick="seleccion()" />Operaciones
    <div class="form-group" id="agente" style="display:none">
        <label for="seleccionAgente">Seleccione un agente</label>
        <select class="form-control" id="seleccionAgente" name="agentes">
            <option selected value="">Selecciona un agente...</option>
            <?php
            include("./database/agentes.php");
            ?>
        </select>
    </div>
    <div class="form-group" id="operacion" style="display:none">
        <label for="exampleFormControlSelect1">Seleccione la operación</label>
        <select class="form-control" id="seleccionOperacion" name="operaciones">
            <option selected value="">Elige una operacion...</option>
            <?php
            include("./database/operaciones.php");
            ?>
        </select>
    </div>
    <div class="form-group">
        <input type="text" required name="nombre" class="form-control" placeholder="Nombre de la novedad"><span class="glyphicon glyphicon-question-sign"></span><br>
        <label for="fechainicio">Fecha de inicio:</label>
        <input type="datetime-local" required name="datetime" class="form-control"/>
        <label for="fechacierre">Fecha de cierre:</label>
        <input type="datetime-local" required name="datetime2" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Seleccione una categoria</label>
        <select class="form-control" required name="categoria">
            <option selected value="">Elige una categoria...</option>
            <option value="Reunión">Reunión</option>
            <option value="Capacitación">Capacitación</option>
            <option value="Formación">Formación</option>
            <option value="Tecnológica">Tecnológica</option>
        </select>
    </div>
    <div class="form-group">
        <textarea class="form-control" required rows="3" name="descripcion" value="descripcion" placeholder="Describe de la novedad"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
