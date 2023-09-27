<main class="radiografia">
    <h2 class="radiografias__heading"><?php echo $titulo; ?></h2>
    <p class="radiografia__descripcion">Radiología clínica del caballo</p>
    
    <section class="imagenes">
        <h3 class="imagen__heading"> Tomas Generales de Rx</h3>
        <p class="imagen__fecha">Vistas Radiológicas</p>

        <?php foreach($radiografias as $radiografia) { ?>
        <div class="radiografia">

            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/radiografias' . $radiografia->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/radiografias' . $radiografia->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/radiografias/' . $radiografia->imagen; ?>.png" alt="imagen RX">
            </picture>

        </div>
        <?php } ?>
        
    </section>

</main>