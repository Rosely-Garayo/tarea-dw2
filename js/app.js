//Con lo aprendido en la clase, escribe un programa en JavaScript que imprima
//por consola la tabla de multiplicación, multiplicando el valor por los números 1 hasta el 10.
//En el cuerpo del programa se le asigna a una variable el valor de la tabla que se desea obtener
//y al ejecutar se debe obtener en la salida con el siguiente formato:
console.log("Problema 1");
var tabla=[1,2,3,4,5,6,7,8,9,10];

var num=5;

console.log("la tabla del: "+num);
for(var i=0; i<tabla.length; i++){

   console.log(num+'x'+tabla[i]+'='+tabla[i]*num);

}
  console.log(" ");
//el problema numero 2
//Utilizando como base el primer ejercicio anterior,
//modificarlo para que en lugar de recibir solo un valor, reciba dos.
// El primero para indicarle el numero inicial de las tablas que serán impresas
//por consola, y el segundo el valor de la última tabla de multiplicación que será impresa.
//Se deberá controlar que el primer valor en ningún caso sea mayor el segundo,
//en caso de serlo se debe enviar un mensaje indicando que no es posible procesar la petición.

console.log("Problema 2");
var tabla1=[1,2,3,4,5,6,7,8,9,10];
var num1=3;
var num2=20;
if(num1<num2){

  for(var i=num1; i<=num2; i++){
    console.log("--------------------------------");
  console.log("la tabla del "+i);
    for(var j=0; j<tabla1.length; j++){
       console.log(i+'x'+tabla1[j]+'='+tabla1[j]*i);
    }
  }

}
else{
  console.log("No se puede ejecutar el programa");
}
