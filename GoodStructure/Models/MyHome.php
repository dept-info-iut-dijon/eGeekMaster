<?php
    /**
     * Class MyHome
     * @author Enzo
     */
    class MyHome {
        private $idMyHome;
        private $codeMyHome;
        
        public function __construct(?int $idMyHome, ?string $codeMyHome) {
            $this->idMyHome = $idMyHome;
            $this->codeMyHome = $codeMyHome;
        }

        /**
         * Set the value of idMyHome
         * @author Enzo
         * @param $idMyHome id of myHome
         */
        public function SetIdMyHome(?int $idMyHome) {
            $this->idMyHome = $idMyHome;
        }

        /**
         * Get the value of idMyHome
         * @author Enzo
         */
        public function GetIdMyHome(): ?int {
            return $this->idMyHome;
        }

        /**
         * Set the value of codeMyHome
         * @author Enzo
         * @param $codeMyHome code of myHome
         */
        public function SetCodeMyHome(?string $codeMyHome) {
            $this->codeMyHome = $codeMyHome;
        }

        /**
         * Get the value of codeMyHome
         * @author Enzo
         */
        public function GetCodeMyHome(): ?string {
            return $this->codeMyHome;
        }
    }
?>