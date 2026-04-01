<?php

class Project
{
    private $title;
    private $dailyRate;
    private $tasks = [];

    public function __construct($title, $dailyRate)
    {
        $this->title = $title;
        $this->dailyRate = $dailyRate;
    }

    public function addTask(Task $task)
    {
        $this->tasks[] = $task;
    }

    public function getTasks()
    {
        return $this->tasks;
    }

    public function calculateTotalHours()
    {
        $total = 0;
        foreach ($this->tasks as $task) {
            $total += $task->getEstimatedHours();
        }
        return $total;
    }

    public function calculateTotalWithBuffer($bufferPercent = 10)
    {
        $totalHours = $this->calculateTotalHours();
        return $totalHours * (1 + $bufferPercent / 100);
    }

    public function calculateBudget()
    {
        $totalWithBuffer = $this->calculateTotalWithBuffer();
        return $totalWithBuffer * ($this->dailyRate / 8);
    }

    public function getBigTasks($threshold)
    {
        $tasks = [];
        foreach ($this->tasks as $task) {
            if ($task->isBig($threshold)) {
                $tasks[] = $task;
            }
        }
        return $tasks;
    }

    public function getMostExpensiveTask()
    {
        if (empty($this->tasks)) {
            return null;
        }

        $mostExpensiveTask = $this->tasks[0];
        foreach ($this->tasks as $task) {
            if ($task->getEstimatedHours() > $mostExpensiveTask->getEstimatedHours()) {
                $mostExpensiveTask = $task;
            }
        }

        return $mostExpensiveTask;
    }

    public function getSummary()
    {
        $totalHours = $this->calculateTotalHours();
        $totalWithBuffer = $this->calculateTotalWithBuffer();
        $budget = $this->calculateBudget();

        $summary = "Titre : {$this->title}\n";
        $summary .= "Taux journalier : {$this->dailyRate}$/jour\n";
        $summary .= "Nombre de tâches : " . count($this->tasks) . "\n";
        $summary .= "Total heures sans buffer : {$totalHours}h\n";
        $summary .= "Total heures avec buffer 10% : " . number_format($totalWithBuffer, 2) . "h\n";
        $summary .= "Budget : " . number_format($budget, 2) . "$\n";

        foreach ($this->tasks as $task) {
            $summary .= "- Tâche #{$task->getId()} : {$task->getDescription()} ({$task->getEstimatedHours()}h)\n";
        }

        return $summary;
    }
}
