<?php

/**
 * class Task
 * @author Nicolas
 */

 Class Task
 {
    private $nameTask;
    private $duration;
    private $dateAdded;

    /**
     * Constructor of Task
     */
    public function __construct(string $nameTask, int $duration, DateTime $dateAdded)
    {
        $this->nameTask = $nameTask;
        $this->duration = $duration;
        $this->dateAdded = $dateAdded;
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
 }