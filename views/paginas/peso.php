<main class="peso">
    <h2 class="peso__heading"><?php echo $titulo ?></h2>
    <p class="peso__descripcion"> Nota: El peso no es exacto y puede variar un poco</p>
    <p class="peso__descripcion"> Si no cuentas con una báscula, calcula el peso del caballo acontinuación  </p>

    <div class="peso__grid">
        <div class="peso__imagen">
            <picture>
                <source srcset="build/img/caballoPerimetro.png" type="image/png">
                <img loading="lazy" width="30" height="30" alt="imagen caballo">
          
            </picture>
        </div>
    <div class="peso__contenido">
        <!-- the data will go here -->
        <p class="peso__texto">Ingresa aqui el dato de PT</p>
        <form class="calculoPeso">
            <fieldset>
                <label for="Titulo">Perimetro Torácico:</label>
                <input type="number" placeholder="Ingresa el P.T. en metros">
            </fieldset>

        </form>
    </div>

    </div>

</main>