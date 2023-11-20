<?php

    /**
     * Class Task
     *
     * @author Théo Cornu
     */
    class Task
    {
        private int $id;
        private string $name;
        private int $duration;
        private string $date;

        public function __construct(string $name ='', int $duration = 0, string $date = '')
        {
            $this->name = $name;
            $this->duration = $duration;
            $this->date = $date;
        }

        public function GetId(): int
        {
            return $this->id;
        }

        public function SetId(int $id): void
        {
            $this->id = $id;
        }

        public function GetName(): string
        {
            return $this->name;
        }

        public function SetName(string $name): void
        {
            $this->name = $name;
        }

        public function GetDuration(): int
        {
            return $this->duration;
        }

        public function SetDuration(int $duration): void
        {
            $this->duration = $duration;
        }

        public function GetDate(): string
        {
            return $this->date;
        }

        public function SetDate(string $date): void
        {
            $this->date = $date;
        }



    }

?>