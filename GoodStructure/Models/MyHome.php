<?php
    /**
     * Class MyHome
     * @author Enzo
     */
    class MyHome {
        private $idMyHome;
        
        public function __construct(?int $idMyHome) {
            $this->idMyHome = $idMyHome;
        }

        /**
         * Set the value of idMyHome
         * @author Enzo
         * @param $idMyHome id of myHome
         */
        public function setIdMyHome(?int $idMyHome) {
            $this->idMyHome = $idMyHome;
            return $this;
        }

        /**
         * Get the value of idMyHome
         * @author Enzo
         */
        public function getIdMyHome(): ?int {
            return $this->idMyHome;
        }


    }
?>