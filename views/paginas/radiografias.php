<main class="radiografiaRx">
    <h2 class="radiografias__heading"><?php echo $titulo; ?></h2>
    <p class="radiografia__descripcion">Radiología clínica del caballo</p>
    
    <section class="imagenes">
        <h3 class="imagen__heading"> Rx</h3>
        <p class="imagen__fecha">Las cuadricualas o rejillas, se utilizan para absorber los residuos de dispersos de la radiación. En la radiografía digital tiene problemas, se requiere obtener asesoramiento especializado.</p>

    <div class="radiografias__grid">
        <?php foreach($radiografias as $radiografia) { ?>

        <div data-aos="zoom-in-up" class="radiografia">

            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/build/img/radiografias/' . $radiografia->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/build/img/radiografias/' . $radiografia->imagen; ?>.png" type="image/png">
                <img class="rx__imagen" loading="lazy" width="500" height="500" <?php echo $_ENV['HOST'] . '/build/img/radiografias/' . $radiografia->imagen; ?>.png" alt="Imagen Rx"> 
            </picture>

            <div  class="radiografia__informacion">
                <h4 class="radiografia__nombre">
                    <?php echo $radiografia->nombre . '. ' . $radiografia->apellido; ?>
                </h4>
                <ul class="radiografia__listado-skills">
                    <?php
                     $tags = explode(',', $radiografia->tags);
                     
                     foreach($tags as $tag) { ?>
                     <li class="radiografia__skill"><?php echo $tag; ?></li>
                     
                     <?php } ?>

                </ul>
            </div>
        </div>
    <?php } ?>
        
    </div>
    </section>

    <form method="POST" action="/radiografias" enctype="multipart/form-data" class="imagenesrx">
        <?php include_once __DIR__ . "/radiografias.php"; ?>

    </form>

</main>