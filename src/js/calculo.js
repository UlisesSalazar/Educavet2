//function EEFE it will be executed if that value

(function(){
   const valor1 = document.querySelector("#valor1")

   //filtest
   const equinos = document.querySelectorAll('#peso input[type="radio')
   console.log(equinos)
   //  const valorCaballo = document.querySelector("#valor2")
   //  const valorPotro = document.querySelector("#valor3") 
    
    

      if(valor1, valorCaballo, valorPotro){
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
               if( r > 0) {
          
                  
               }
        }
            
     }
      
 }

})();