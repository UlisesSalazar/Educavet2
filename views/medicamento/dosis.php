
<main class="dosis">

    <div class="tabla">
        <h2 class="dosis__heading"><?php echo $titulo; ?></h2>
     <div class ="tabla__icono">
        <i class="fa-sharp fa-solid fa-syringe tabla__icono" style="color: #00c7fc;"></i>
    </div>
</div>
<!-- search -->
<div class="medicamento__campo">
    <label for="medicamentos" class="medicamento__label">Medicamento: </label>
        <input
            type="text"
            class="medicamento__input"
            id="medicamentos"
            placeholder="Buscar medicamento"
</div>
<div class= "dashboard__contenedor">
 <?php if(!empty($medicamentos)) { ?>

    <table class="table">
        <thead class="table__thead">
            <tr>
                <th scope="col" class="table__th">Nombre</th>
                <th scope="col" class="table__th">especificaciones</th>
                <th scope="col" class="table__th">Dosis/Via/Frecuencia</th>
                <th scope="col" class="table__th">Indicaciones</th>
                <th scope="col" class="table__th">Tiempo</th>
            </tr>
            <tbody class="table__tbody">
                <?php foreach($medicamentos as $medicamento) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $medicamento->nombre; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $medicamento->especificaciones; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $medicamento->dosis; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $medicamento->indicaciones2; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $medicamento->tiempo; ?>
                        </td>

                    </tr>

                <?php } ?>
            </tbody>
        </thead>
    </table>
    <?php } else { ?>

        <p class="text-center"> No hay medicamentos aún</p>
    <?php }?>
</div>

<?php
echo $paginacion;
?>


</main>
