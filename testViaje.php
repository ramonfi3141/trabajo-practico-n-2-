<?php
include "ViajeFeliz.php";
include "Pasajeros.php";
include "ResponsableV.php";

//Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.

//===============================================================    
$objPasajeros=new Pasajeros("","",0,0);
echo "=====================================================\n";
echo "ingrese pasajero\n";
$objPasajeros->setNombre(trim(fgets(STDIN)));
echo "ingrese apellido\n";
$objPasajeros->setApellido(trim(fgets(STDIN)));
echo "ingrese documento\n";
$objPasajeros->setDocumento(trim(fgets(STDIN)));
echo "ingrese telefono\n";
$objPasajeros->setTelefono(trim(fgets(STDIN)));
echo "=====================================================\n";

echo $objPasajeros;



//===============================================================  
echo "=====================================================\n";

$objResp= new ResponsableV(0,0,"","");
echo "ingrese nombre del responsable\n";
$objResp->setNombre(trim(fgets(STDIN)));
echo "ingrese apellido del responsable\n";
$objResp->setApellido(trim(fgets(STDIN)));  
echo "ingrese numero del empleado responsable\n";
$objResp->setNumEmpleado(trim(fgets(STDIN)));
echo "ingrese licencia del responsable\n";
$objResp->setLicencia(trim(fgets(STDIN)));

echo $objResp;

//===============================================================  

$unViaje=new Viaje(22,"rosario",1,$objPasajeros,$objResp);
$unViaje->setPasajeros($objPasajeros);


function menu()
{
    echo "
    1) para cargar datos\n
    2) para ver datos cargados \n
    3) para modificar datos\n
    4) salir \n";
    $op=trim(fgets(STDIN));
    return $op;
}

do {
        $opcion=menu();
        switch ($opcion) {
            case '1':
                
                    echo"Codigo del viaje: \n";
                    $unViaje->setCodigoViaje(trim(fgets(STDIN)));
                    echo "Destino: \n";
                    $unViaje->setDestino(trim(fgets(STDIN)));
                    echo"Cantidad maxima de pasajeros: \n";
                    $unViaje->setCantidadMax(trim(fgets(STDIN)));
                    echo "=========carga de responsable ===========\n";
                    $unViaje->setObjResponsable(trim(fgets(STDIN)));
                    echo "=========carga de pasajeros ===========\n";
                    $unViaje->cargarPasajero();
                    $unViaje->almacenarViaje($unViaje);
                    
                break;
            case '2':
                echo "Codigo del Viaje: ". $unViaje->getCodigoViaje(). "\n".
                    "Destino del Viaje: ".$unViaje->getDestino(). "\n".
                    "Cantidad maxima de pasajeros: ".$unViaje->getCantidadMax(). "\n".
                    "Pasajeros : \n".$unViaje->mostrarPasajero(). "\n";
                    "Responsable del viaje: ". $objResp;


                break;

            case '3':
                echo "modificar datos \n";
                echo "codigo de viaje \n";
                $unViaje->setCodigoViaje(trim(fgets(STDIN)));
                echo "destino:\n " ;
                $unViaje->setDestino(trim(fgets(STDIN)));
                echo "Cantidad de pasajeros:\n " ;
                $unViaje->setCantidadMax(trim(fgets(STDIN)));
                $unViaje->cargarPasajero();
                
                break;    
            default:
                "4";
                break;
        }

} while ($opcion < 4 );



?>