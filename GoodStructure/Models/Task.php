<?php

/**
 * class Task
 * @author Nicolas
 */

 Class Task
 {
    private $id;
    private $nameTask;
    private $duration;
    private $dateAdded;
    private $idDashBoard;

    /**
     * Constructor of Task
     */
    public function __construct(?int $id,string $nameTask, int $duration, DateTime $dateAdded, int $idDashBoard)
    {
        $this->id = $id;
        $this->nameTask = $nameTask;
        $this->duration = $duration;
        $this->dateAdded = $dateAdded;
        $this->idDashBoard = $idDashBoard;
    }



    /**
     * Getter for id
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Getter for nameTask
     */
    public function getNameTask(): string
    {
        return $this->nameTask;
    }

    /**
     * Getter for Duration
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Getter for DateAdded
     */
    public function getDateAdded(): DateTime
    {
        return $this->dateAdded;
    }

    /**
     * Getter for idDashBoard
     */
    public function getIdDashBoard(): int
    {
        return $this->idDashBoard;
    }

    /**
     * Setter for id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Setter for NameTask
     */
    public function setNameTask(string $nameTask)
    {
        $this->nameTask = $nameTask;
    }

    /**
     * Setter for Duration
     */
    public function setDuration(int $duration)
    {
        $this->duration = $duration;
    }

    /**
     * Setter for DateAdded
     */
    public function setDateAdded(DateTime $dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    /**
     * Setter for idDashBoard
     */
    public function setIdDashBoard(int $idDashBoard)
    {
        $this->idDashBoard = $idDashBoard;
    }
 }