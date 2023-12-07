//function EEFE it will be executed if that value

(function(){
   const valor1 = document.querySelector("#valor1")

   //filtest
   const equinos  = document.querySelectorAll('#equidos input[type="radio')
   equinos.forEach(radio => {
      radio.addEventListener('input', pesoCaballoTotal)
   })
   function pesoCaballoTotal(e) {
      e.preventDefault()
      const cValor = document.getElementById('resultado')
      const pValor = document.getElementById('resultado2')
      const filtro = e.target.value

      if(filtro !== '1'){
         
         //seguimos
     
      //   console.log('seleccionaste caballo')
        
      }else{
        
         //  console.log('seleccionaste Potro')
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
         //calculate Caballo 
           function pesoCaballo(r){
             e.preventDefault()
              return  r * 80
           }
          const pesoTotal2 = pesoCaballo(r);
              const pesoValor1 = pesoTotal2
              document.getElementById('resultado').innerHTML = pesoTotal2
               
              //calculate potro
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