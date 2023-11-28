//function EEFE it will be executed if that value

(function(){
   const valor1 = document.querySelector("#valor1")
    const valorCaballo = document.getElementById('valor2') 
    const valorPotro = document.getElementById('valor3') 
    
     console.log(valorPotro)

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
               if( r > 0) {
               
                  
               }
        }
            
     }
      
 }

})();