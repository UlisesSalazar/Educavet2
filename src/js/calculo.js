//function EEFE it will be executed if that value

(function(){
   const valor1 = document.querySelector("#valor1")
   const valor2 = document.querySelector("#valor2")
     
      if(valor1){

         let perimetroT = [];

         //listen to what th write
         valor1.addEventListener('keypress', guardarValor)

      function guardarValor(e) {
         if(e.keyCode === 13){
            perimetroT = [...perimetroT, e.target.value.trim()]
            valor1.value = '';
            console.log(perimetroT)


         }
       
       }
   }
   if(valor2) {

   }

})();