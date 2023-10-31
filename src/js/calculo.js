 (function calculo(){

    const calculoInput = document.querySelector('#calcularPeso')
     

     if(calculoInput){
        
        const peso = Number(document.getElementById('valor1').value);
        const exponente = 3;
        let r = 1;

       for(let i = 0; i<exponente; i++){
        resultado = r * peso;
        }
       
       alert(resultado);
    }
   


 })()


