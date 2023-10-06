<?php
    class Patient{
        private $idPatient;
        private $namePatient;
        private $datePatient;
        private $symptom;
        private $idDoctor;

        public function __construct($idPatient, $namePatient, $datePatient, $symptom, $idDoctor)
        {
            $this->idPatient = $idPatient;
            $this->namePatient = $namePatient;
            $this->datePatient = new DateTime($datePatient);
            $this->symptom = $symptom;
            $this->idDoctor = $idDoctor;
        }

        public function getIdPatient() {
            return $this->idPatient;
        }

        public function setIdPatient($idPatient){
            $this->idPatient = $idPatient;

        }
        // 
        public function getNamePatient() {
            return $this->namePatient;
        }

        public function setNamePatient($namePatient){
            $this->namePatient = $namePatient;
        }
        //
        public function getDatePatient() {
            return $this->datePatient;
        }

        public function setDatePatient($datePatient){
            $this->datePatient = $datePatient;
        }
        //
        public function getSymptom() {
            return $this->symptom;
        }

        public function setSymptom($symptom){
            $this->symptom = $symptom;
        }
        //
        public function getIdDoctor() {
            return $this->idDoctor;
        }

        public function setIdDoctor($idDoctor){
            $this->idDoctor = $idDoctor;
        }
    }
?>