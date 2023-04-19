<?php
/**La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (incluso los datos de los pasajeros). Utilice un array que almacene la información correspondiente a los pasajeros. Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.


 */


 /**Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.

Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje. */

 class Viaje{

    private $codigoViaje;
    private $destino;
    private $cantidadMax;
    private $objPasajeros;
    private $objResponsable;

public function __construct($codigoViaje,$destino,$cantidadMax,$objPasajeros,$objResponsable)
{
    $this->codigoViaje= $codigoViaje;
    $this->destino= $destino;
    $this->cantidadMax= $cantidadMax;
    $this->objPasajeros= $objPasajeros;
    $this->objResponsable= $objResponsable;

}
    /**
     * Get the value of codigoViaje
     */ 
    public function getCodigoViaje()
    {
        return $this->codigoViaje;
    }

    /**
     * Set the value of codigoViaje
     *
     * @return  self
     */ 
    public function setCodigoViaje($codigoViaje)
    {
        $this->codigoViaje = $codigoViaje;

        return $this;
    }

    /**
     * Get the value of destino
     */ 
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     *
     * @return  self
     */ 
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get the value of cantidadMax
     */ 
    public function getCantidadMax()
    {
        return $this->cantidadMax;
    }

    /**
     * Set the value of cantidadMax
     *
     * @return  self
     */ 
    public function setCantidadMax($cantidadMax)
    {
        $this->cantidadMax = $cantidadMax;

        return $this;
    }

    /**
     * Get the value of pasajeros
     */ 
    public function getPasajeros()
    {
        return $this->objPasajeros;
    }

    /**
     * Set the value of pasajeros
     *
     * @return  self
     */ 
    public function setPasajeros($pasajeros)
    {
        $this->objPasajeros = $pasajeros;

        return $this;
    }
    
    /**
     * Get the value of objResponsable
     */ 
    public function getObjResponsable()
    {
        return $this->objResponsable;
    }

    /**
     * Set the value of objResponsable
     *
     * @return  self
     */ 
    public function setObjResponsable($objResponsable)
    {
        $this->objResponsable = $objResponsable;

        return $this;
    }

//===================================================================
public function __toString()
{
    $str= "Codigo de viaje: ".$this->getCodigoViaje()."\n".
            "Destino: ".$this->getDestino()."\n".
            "Cantidad de pasajeros: ".$this->getCantidadMax() ."\n".
            "========= Pasajeros ======\n".$this->mostrarPasajero()."\n".
            "Responsable: " . $this->getobjResponsable();

            return $str;
}

//===================================================================
public function cargarPasajero()
{
   
    $pasajeros = [];
    $cant= $this->getCantidadMax();

    $i = 0;
    do {
        echo "Nombre\n";
        $nombre = trim(fgets(STDIN));
        echo "Apellido \n";
        $apellido = trim(fgets(STDIN));
        echo "DNI\n";
        $dni = trim(fgets(STDIN));

        $pasajeros[] = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "dni" => $dni
        ];

        $i++;
    } while ($i < $cant);

    $this->setPasajeros($pasajeros);
}
//===================================================================
 public function mostrarPasajero()
 {
    $losPasajeros="";
    $i=1;

    foreach ($this->getPasajeros() as $objPasViaje) 
    {
        $losPasajeros .= "Pasajeros " . ($i). "\n";
        $losPasajeros .= $objPasViaje . "\n";
        $i=$i + 1;
    }    
    return $losPasajeros;
 }

//===================================================================
public function almacenarViaje($viaje)
{
  $col=[] ;

  array_push($col,$viaje);

  return $col;
  }
//===================================================================






 }
?>