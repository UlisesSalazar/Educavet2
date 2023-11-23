//function EEFE it will be executed if that value

(function(){
      const valor1 = document.querySelector("#valor1")

      if(valor1){

         //listen to what th write
         valor1.addEventListener('keypress', guardarValor)

      function guardarValor(e) {
         
         // console.log(e.keyCode)
         console.log(valor1)

       }
    }

})();