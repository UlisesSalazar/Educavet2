<main class="radiografia">
    <h2 class="radiografias__heading"><?php echo $titulo; ?></h2>
    <p class="radiografia__descripcion">Radiología clínica del caballo</p>
    
    <div class="imagen">
    <h3 class="imagen__heading"> Tomas Generales </h3>
        <p class="imagen__fecha">Vistas Radiológicas</p>

        <div class="dashboard__contenedor">
        <?php if(!empty($radiografias)) { ?>

            <?php }else { ?>

                <p class="text-center">Noy hay imagenes para mostrar</p>
        <?php } ?>  
            <div class="imagen__listado">

            </div>
 
        </div>
    </div>


</main>