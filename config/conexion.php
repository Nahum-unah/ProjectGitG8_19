<?php
    class Conectar{
        protected $sdbh;

        protected function Conexion(){
            try{
                
                $conectar = $this->dbh = new PDO("mysql:host=34.68.196.220;dbname=g8_19","G8_19","Pn4tiUyt");
                return $conectar;
            } catch(Exception $e) {
                print"¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }

?>