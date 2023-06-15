<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <form action="process/cargar.php">
        <?php
            incluirQuestions('sedes');
            incluirQuestions('cuidador_principal');
            incluirQuestions('apoyo_crianza');
            incluirQuestions('acerca_chico');
            incluirQuestions('familia');
            incluirQuestions('vivienda');
            incluirQuestions('economia');
        ?>
        <div class="mt-4">
            <input class="btn btn-primary px-5" type="submit" value="Cargar">
        </div>
    </form>

<?php
    incluirTemplate('footer');
?>