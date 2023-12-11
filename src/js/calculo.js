//function EEFE it will be executed if that value

(function(){
   const valor1 = document.querySelector("#valor1")

   //resetPag
    const btnReset =document.querySelector('#reset')
    btnReset.addEventListener('click', function(e){
      e.preventDefault()
      window.location.reload()
      
      })

   //filtest
   const equinos  = document.querySelectorAll('#equidos input[type="radio')
   equinos.forEach(radio => {
      radio.addEventListener('input', pesoCaballoTotal)
   })

   function pesoCaballoTotal(e) {
      // e.preventDefault()

      const filtro = e.target.value
      if(filtro !== '1' ){
         const cValor = document.getElementById('resultado')
         cValor.classList.add('peso__total')
         cValor.classList.remove('peso__total-activo')
        
      } else {
   
          const pValor = document.getElementById('resultado2')
          pValor.classList.remove('peso__total-activo')
          pValor.classList.add('peso__total')
       }
   
      }
      
      if(valor1){
     
         let perimetroT = [];
         //listen to what th write
         valor1.addEventListener('keypress', guardarValor)
        

      function guardarValor(e) {

         if(e.keyCode === 13){
          
            perimetroT = [...perimetroT, e.target.value.trim()]
            valor1.value = '';
           //number to changed and formulary
            const base = Number.parseFloat(perimetroT)
            const exponente = 3
            let r  = 1
            for(let i = 0; i < exponente; i++){
            r = r * base   
           
         }
         //calculate C 
           function pesoCaballo(r){
           e.preventDefault()
              return  r * 80
           }
          const pesoTotal2 = pesoCaballo(r);
              const pesoValor1 = pesoTotal2
              document.getElementById('resultado').innerHTML = pesoTotal2
               
              //calculate P
              let respuesta = document.getElementById('#total')
              function pesoPotro(r){
               return  r * 90
            }
           const pesoTotal3 = pesoPotro(r);
             const pesoValor2 = pesoTotal3
             document.getElementById('resultado2').innerHTML = pesoTotal3
               
         } 
    }
                       
   }
   

})();