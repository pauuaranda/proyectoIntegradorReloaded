//---- Al iniciar la pagina----//

$('.slider li').hide();//Con esto ocultamos todos los slides
$('.slider li:first').show();// Hacemos que el primer slide se muestre

//-----Funciones a ejecutar----//
$('.pagination li ').click(pagination);//Esto significa que al hacer click a cualquier elemento del li dentro de la paginacion hara la funcion pagination



//----Funciones----//

function pagination(){
    var paginationPos = $(this).index() + 1;//Esto devulve el valor de la posicion dentro del elemento
    $('.slider li').hide();
    $('.slider li:nth-child('+paginationPos+')').fadeIn(300);//Ocultamos los elementos de los slides y nada mas hacemos que aparezca el slide de la posicion que se clickeo
}





