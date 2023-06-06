
<main class="dosis">
    <div class="tabla">
        <h2 class="dosis__heading"><?php echo $titulo; ?></h2>
     <div class ="tabla__icono">
        <i class="fa-sharp fa-solid fa-syringe tabla__icono" style="color: #00c7fc;"></i>
    </div>
</div>
<div class= "dashboard__contenedor">
 <?php if(!empty($medicamentos)){ ?>


    <?php } else { ?>

        <p class="text-center"> No hay medicamentos aún</p>
    <?php }?>
</div>




</main>
