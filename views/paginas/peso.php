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

         <div id=equinos class="peso__contenido">
            <!-- the data will go here -->
            <p class="peso__texto">Ingresa el dato de Perímetro Torácico</p>
            <form id="peso" class="peso__calculo">
                <fieldset>
                <div id= "equidos"  class="peso__opcion">
                    <label  for="valor2">Caballo</label>
                    <input 
                    type="radio" 
                    id="valor2" 
                    name="caballo" 
                    value= "" />
                </div>
                 <div id="equidos" class="peso__opcion">
                    <label for="valor3">Potro</label>
                    <input 
                    type="radio" 
                    id="valor3" 
                    name="caballo"
                     value="1"/>
                </div>
                
                <div class="peso__opcion-torax">
                    <label for="Titulo">P. Torácico (metros):</label>
                    <input 
                    type="number"
                     id="valor1" 
                     name="valor1" 
                     placeholder="Ej: 2.5, 0.5 "
                     >
                </div>

                    <!-- <button type="submit" id="calcularPeso" class="peso__boton">Calular</button> -->
                
                    <div class="total"></div>
                </fieldset>
            </form>
        </div>

 </div>
</main>
