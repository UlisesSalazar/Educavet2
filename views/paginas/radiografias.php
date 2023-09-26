<main class="radiografia">
    <h2 class="radiografias__heading"><?php echo $titulo; ?></h2>
    <p class="radiografia__descripcion">Radiología clínica del caballo</p>
    
    <section class="imagen">
        <h3 class="imagen__heading"> Tomas Generales </h3>
        <p class="imagen__fecha">Vistas Radiológicas</p>
        <?php foreach($radiografias as $radiografia) { ?>

        <div class="radiografias">
        
            <picture>
                    <source srcset="img/radiografias/<?php echo $radiografia->imagen; ?>.webp" type="imagen/webp">
                    <source srcset="img/radiografias/<?php echo $radiografia->imagen; ?>.png" type="imagen/png">
                    <img class="rafiografia__imagen-autor" loading="lazy" width="200" height="300" src="img/radiografias/<?php echo $radiografia->imagen; ?>.png" alt= "imagen radiológica"
                    
                
                </picture>
            </div>
        <?php } ?>
        
    </section>

</main>