<?php 
$objeto{
$peso;
$valor;
$valorPeso;
$tomado;
};
objeto objetos[5];
$ solucion[]={0,0,0,0,0};
$ SeleccionVoraz( ){
//estrategia del mayor valor/peso
$ mayor = -1;
$ indice=-1, j=0;
for($ j=0; j<5; j++){
if(!objetos[j].tomado && (mayor < objetos[j].valorPeso)){
mayor = objetos[j].valorPeso;
indice = j;
};
};
return indice;
};
$ valorTotal(){
$ valor=0;
for( $ i=0; i<5; i++)
valor = valor + objetos[i].valor * solucion[i];
return valor;
};
$ main($ argc, char *argv[]){
$ PesoMax, suma=0;
$ i;
for( i=0; i<5; i++){
cout<< "Peso del objeto "<< i << " ? = \n";
cin >> objetos[i].peso;
cout<< "Valor del objeto "<< i << " ? = \n";
cin >> objetos[i].valor;
objetos[i].valorPeso = objetos[i].valor/objetos[i].peso;
objetos[i].tomado = false;
};
cout << "¿Peso maximo de la mochila?"; cin >> PesoMax;
while(suma < PesoMax){
i= SeleccionVoraz();
if((suma + objetos[i].peso) < PesoMax ){
solucion[i] = 1;
suma = suma + objetos[i].peso;
objetos[i].tomado = true;
}
else{
solucion[i] = (PesoMax-suma)/ objetos[i].peso;
suma = PesoMax; // corregir error al multiplicar por fracción
};
};
cout << " el valor máximo obtenido es: " << valorTotal() << endl;
cout << " y el vector solución es: \n";
for(i=0; i<5; i++)
cout<< " " << solucion[i] << ", ";
system("PAUSE");
return EXIT_SUCCESS;
}
 ?>