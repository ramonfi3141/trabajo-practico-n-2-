<?php
//** También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje. */


    class ResponsableV {
        private $numEmpleado ;
        private $licencia ;
        private $nombre ;
        private $apellido ;

        public function __construct($numEmpleado,$licencia,$nombre,$apellido)
        {
            $this->numEmpleado =$numEmpleado ;
            $this->licencia =$licencia ;
            $this->nombre =$nombre ;
            $this->apellido =$apellido ;

        }   /**
             * Get the value of numEmpleado
             */ 
            public function getNumEmpleado()
            {
                        return $this->numEmpleado;
            }

            /**
             * Set the value of numEmpleado
             *
             * @return  self
             */ 
            public function setNumEmpleado($numEmpleado)
            {
                        $this->numEmpleado = $numEmpleado;

                        return $this;
            }

            /**
             * Get the value of licencia
             */ 
            public function getLicencia()
            {
                        return $this->licencia;
            }

            /**
             * Set the value of licencia
             *
             * @return  self
             */ 
            public function setLicencia($licencia)
            {
                        $this->licencia = $licencia;

                        return $this;
            }

            /**
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

    //==============================================================
            public function __toString()
            {
                $c =
                    "Numero de empleado: ".$this->getNumEmpleado() ."\n".
                    "Licencia del empleado: ".$this->getLicencia() ."\n".
                    "Nombre del empleado responsable: ".$this->getNombre() ."\n".
                    "Apellido del empleado responsable: ".$this->getApellido() ."\n";
                     return $c;
            }


     //==============================================================

    }
?>