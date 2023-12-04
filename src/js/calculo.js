//function EEFE it will be executed if that value

(function(){
   const valor1 = document.querySelector("#valor1")

   //filtest
   const equinos  = document.querySelectorAll('#equidos input[type="radio')
   equinos.forEach(radio => {
      radio.addEventListener('input', pesoCaballoTotal)
   })
   function pesoCaballoTotal(e) {
      const filtro = e.target.value

      if(filtro !== '1'){
      //   const parrafo = document.createElement('p')
      //   parrafo.textContent = `Peso del Equino es de ...`
      //    console.log(parrafo) 
      
     
      //   console.log('seleccionaste caballo')
        
      }else{
        
          console.log('seleccionaste Potro')
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
           function pesoCaballo(r){
              return  r * 80
           }
          const pesoTotal2 = pesoCaballo(r);
              const pesoValor1 = pesoTotal2
              console.log(pesoValor1)
              //calculate potro
              function pesoPotro(r){
               return  r * 90
            }
           const pesoTotal3 = pesoPotro(r);
             const pesoValor2 = pesoTotal3
             console.log(pesoValor2)
      }    
                   
   }
}

})();