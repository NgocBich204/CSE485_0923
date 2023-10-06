<?php
    class Doctor{
        private $idDoctor;
        private $nameDoctor;
        private $specialist;

        public function __construct( $idDoctor, $nameDoctor, $specialist)
        {
            $this->idDoctor = $idDoctor;
            $this->nameDoctor = $nameDoctor;
            $this->specialist = $specialist;
        }

        public function getIdDoctor(){
            return $this->idDoctor;
        }

        public function setIdDoctor($idDoctor){
            $this->$idDoctor = $idDoctor;
        }
        // 
        public function getNameDoctor(){
            return $this->nameDoctor;
        }

        public function setNameDoctor ($nameDoctor){
            $this->$nameDoctor = $nameDoctor;
        }
        //
        public function getSpecialist(){
            return $this->specialist;
        }

        public function setSpecialist( $specialist){
            $this->specialist = $specialist;
        }
    }
?>