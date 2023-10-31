<main class="peso">
    <h2 class="peso__heading"><?php echo $titulo ?></h2>
    <p  class="peso__descripcion"> Nota: El peso no es exacto y puede variar un poco</p>
    <p  class="peso__descripcion" > Si no cuentas con una báscula, calcula el peso del caballo o potro acontinuación:  </p>

    <div class="peso__grid">
        <div class="peso__imagen">
            <picture>
                <source srcset="build/img/caballoPerimetro.png" type="image/png">
                <img data-aos="fade-left" loading="lazy" width="30" height="30" alt="imagen caballo">
            </picture>
        </div>

        <div class="peso__contenido">
            <!-- the data will go here -->
            <p class="peso__texto">Ingresa el dato de Perimetro Torácico</p>
            <form class="peso__calculo">
                <fieldset>
                    <select class="peso__opcion">
                        <option id="filtro" value="90">Caballo</option>
                        <option  id="filtro"  value="80">Potro</option>
                    </select>
                    <label for="Titulo">P. Torácico (metros):</label>
                    <input type="number" id="valor1" placeholder=" P.T.-Ej: 2.5, 0.5 " min="0">
                    <input type="submit" id="calcularPeso" value="Calcular" class="peso__boton">
                </fieldset>
            </form>
        </div>

 </div>

</main>