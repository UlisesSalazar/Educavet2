<header class = "header">
    <div class = "header__contenedor">
    <nav class="header__navegacion">
        <a href="/registro" class="header__enlace">Registro</a> 
        <a href="/login" class="header__enlace">Iniciar Sesion</a> 
    </nav>
    
    <div class="header__contenido">
        <a href="/">
            <h1 class="header__logo">
                EducaVet
            </h1>
        </a>
        <p class="header__texto">Una herramineta para tu educación en Equinos</p>
        <p class="header__texto header__texto--modalidad">Tips para el aprendizaje</p> 
             
        </div>
     </div>
</header>

    <div class="barra">
        <div class="barra__contenido">
            <a href="/">
               <h2 class="barra__logo"> 
                   EducaVet
               </h2>
            </a>
            <nav class="navegacion">
                <a href="/dosis" class="navegacion__enlace <?php echo pagina_actual('/dosis') ? 'navegacion__enlace--actual' : ''; ?>" >Dosis en equinos </a>
                <a href="/radiografias" class="navegacion__enlace <?php echo pagina_actual('/radiografias') ? 'navegacion__enlace--actual' : ''; ?>">Radiografias en equinos</a>
                <a href="/potros" class="navegacion__enlace <?php echo pagina_actual('/potros') ? 'navegacion__enlace--actual' : ''; ?>">Potros</a>
                <a href="" class="navegacion__enlace"></a>
            </nav>
        </div>
    </div>