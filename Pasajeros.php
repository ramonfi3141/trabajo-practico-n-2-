<?php
 /**Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.

Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje. */


    class Pasajeros{
        private $nombre ;
        private $apellido ;
        private $documento ;
        private $telefono ;
    
    public function __construct($nombre,$apellido,$documento,$telefono)
    {
        $this->nombre =$nombre ;
        $this->apellido =$apellido ;
        $this->documento =$documento ;
        $this->telefono =$telefono ;

    }      /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellido
         */ 
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        /**
         * Get the value of documento
         */ 
        public function getDocumento()
        {
                return $this->documento;
        }

        /**
         * Set the value of documento
         *
         * @return  self
         */ 
        public function setDocumento($documento)
        {
                $this->documento = $documento;

                return $this;
        }

        /**
         * Get the value of telefono
         */ 
        public function getTelefono()
        {
                return $this->telefono;
        }

        /**
         * Set the value of telefono
         *
         * @return  self
         */ 
        public function setTelefono($telefono)
        {
                $this->telefono = $telefono;

                return $this;
        }
    //===============================================================    
        public function __toString()
        {
            $c=
                $this->getNombre()."\n".
                $this->getApellido()."\n".
                $this->getDocumento()."\n".
                $this->getTelefono()."\n";

                return $c;
        }
    //===============================================================    


    




    }

?>