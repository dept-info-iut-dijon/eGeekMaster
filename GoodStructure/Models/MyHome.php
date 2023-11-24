<?php
    /**
     * Class MyHome
     * @author Enzo
     */
    class MyHome {
        private $idMyHome;
        private $codeMyHome;
        private $usernameMyHome;
        
        public function __construct(?int $idMyHome, ?string $codeMyHome, ?string $usernameMyHome) {
            $this->idMyHome = $idMyHome;
            $this->codeMyHome = $codeMyHome;
            $this->usernameMyHome = $usernameMyHome;
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
         * @return ?int
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
         * @return ?string
         */
        public function GetCodeMyHome(): ?string {
            return $this->codeMyHome;
        }

        /**
         * Set the value of usernameMyHome
         * @author Enzo
         * @param $usernameMyHome username of myHome
         */
        public function SetUsernameMyHome(?string $usernameMyHome) {
            $this->usernameMyHome = $usernameMyHome;
        }

        /**
         * Get the value of usernameMyHome
         * @author Enzo
         * @return ?string 
         */
        public function GetUsernameMyHome(): ?string {
            return $this->usernameMyHome;
        }
    }
?>