<main class="radiografia">
    <h2 class="radiografias__heading"><?php echo $titulo; ?></h2>
    <p class="radiografia__descripcion">Radiología clínica del caballo</p>
    
    <section class="imagenes">
        <h3 class="imagen__heading"> Rx</h3>
        <p class="imagen__fecha">Radiología clínica del caballo</p>

    <div class="radiografias__grid">
        <?php foreach($radiografias as $radiografia) { ?>
        <div class="radiografia">

            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/build/img/radiografias/' . $radiografia->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/build/img/radiografias/' . $radiografia->imagen; ?>.png" type="image/png">
                <img class="rx__imagen" loading="lazy" width="200" height="300" <?php echo $_ENV['HOST'] . '/build/img/radiografias/' . $radiografia->imagen; ?>.png" alt="Imagen Rx"> 
            </picture>

            <div class="radiografia__informacion">
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