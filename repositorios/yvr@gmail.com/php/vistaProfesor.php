<section id="contenidoProfesor">
    <section id="descripcion">
        <?php
        echo "<h2>Descripción</h2>";
        if ($descripcion = (new Conexion)->descripcionProyecto($_GET["id_Alumno"])) {
            echo "<span class=\"descripcion\">" . $descripcion["descripcion"] . "</span>";
        } else {
            echo "<h4>Sin descripcion</h4>";
        }
        ?>
    </section>

    <section id="objetivos">
        <?php
        echo "<h2>Objetivos</h2>";
        if ($objetivos = (new Conexion)->verObjetivos($_GET["id_Alumno"])) {
            foreach ($objetivos as $objetivo) {
                echo "<span class=\"objetivo\">{$objetivo->descripcion}</span>";
            }
        } else {
            echo "<h4>Sin Objetivos</h4>";
        }
        ?>
    </section>

    <section id="recursosh">
        <?php
        echo "<h2>Recursos Humanos</h2>";
        if ($recursos = (new Conexion)->verRecursosH($_GET["id_Alumno"])) {
            echo "<table class=\"tablarecursos\"><tr><th>Recursos Humanos</th><th>Precio/hora</th></tr>";
            foreach ($recursos as $recurso) {
                echo "<tr><td>{$recurso->descripcion}</td><td>{$recurso->precio}€</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h4>Sin recursos humanos</h4>";
        }
        ?>
    </section>

    <section id="recursosm">
        <?php
        echo "<h2>Recursos Materiales</h2>";
        if ($recursos = (new Conexion)->verRecursosM($_GET["id_Alumno"])) {
            echo "<table class=\"tablarecursos\"><tr><th>Recursos Materiales</th><th>Precio ud/mes</th></tr>";
            foreach ($recursos as $recurso) {
                echo "<tr><td>{$recurso->descripcion}</td><td>{$recurso->precio}€</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h4>Sin recursos materiales</h4>";
        }
        ?>
    </section>

    <section id="tecnologias">
        <?php
        echo "<h2>Tecnologías</h2>";
        if ($recursos = (new Conexion)->verTecnologias($_GET["id_Alumno"])) {
            echo "<table class=\"tablarecursos\"><tr><th>Tecnología</th><th>Descripción</th><th>Enlace</th></tr>";
            foreach ($recursos as $recurso) {
                echo "<tr><td>{$recurso->nombre}</td><td>{$recurso->descripcion}</td><td><a href={$recurso->enlace}><i class=\"bi bi-eye-fill\"></i></a></td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h4>Sin tecnologías</h4>";
        }
        ?>
    </section>

    <section id="casosdeuso">
        <?php
        echo "<h2>Casos de Uso</h2>";
        if ($recursos = (new Conexion)->verCasosDeUso($_GET["id_Alumno"])) {
            echo "<table class=\"tablarecursos\"><tr><th>Uso</th><th>Descripcion</th><th>Tiempo</th></tr>";
            foreach ($recursos as $recurso) {
                echo "<tr><td>{$recurso->uso}</td><td>{$recurso->descripcion}</td><td>{$recurso->tiempo} h</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h4>Sin casos de uso</h4>";
        }
        ?>
    </section>

    <section id="er">
        <?php
        echo "<h2>Entidad Realación</h2>";
        if ($imagen = (new Conexion)->verER($_GET["id_Alumno"])) {
            $nombre = $imagen->id_Alumno;
            $nombreImagen = $imagen->imagen;
            echo "<figure id=\"ER\"><img src=\"ER/".$imagen->imagen."\" alt=\"E-R\"></figure>";
        }else{
            echo "<h4>Sin entidad relación</h4>";
        }
        ?>
    </section>

</section>