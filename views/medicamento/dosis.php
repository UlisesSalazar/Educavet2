
<main class="dosis">
    <div class="tabla">
        <h2 class="dosis__heading"><?php echo $titulo; ?></h2>
     <div class ="tabla__icono">
        <i class="fa-sharp fa-solid fa-syringe tabla__icono" style="color: #00c7fc;"></i>
    </div>
</div>
<div class= "dashboard__contenedor">
 <?php if(!empty($medicamentos)) { ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="table__th">Nombre</th>
                <th scope="col" class="table__th">Dosis</th>
                <th scope="col" class="table__th">Indicaciones</th>
            </tr>
            <tbody class="table__tbody">
                <?php foreach($medicamentos as $medicamento) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $medicamento->nombre ?>
                        </td>
                        <td class="table__td">
                            <?php echo $medicamento->dosis ?>
                        </td>
                        <td class="table__td">
                            <?php echo $medicamento->indicaciones2 ?>
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




</main>
