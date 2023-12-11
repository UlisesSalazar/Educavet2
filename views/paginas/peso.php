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
                     onkeypress="return (event.charCode >= 45 && event.charCode <= 57)" 
                     placeholder="Ej: 2.5, 0.5 "
                     >

                <div id="valores" class="peso__valor"></div>
                </div>
                <!-- caballo -->
                <div  id="resultado" class="peso__total-activo">
                    <p>el peso estimado del caballo es: </p>
                </div>
                <!-- potro -->
                <div id="resultado2" class="peso__total-activo">
                    <p>el peso estimado del potro es: </p>
                </div>
                <button type="reset" id="reset" class="peso__boton">Volver a calcular</button>
                </fieldset>
            </form>
        </div>

 </div>
</main>
