<?php

include 'Task.php';
include 'Project.php';

$task1 = new Task(1, "Design", 12);
$task2 = new Task(2, "Dev front", 30);
$task3 = new Task(3, "Dev back", 45);

$project = new Project("Refonte site web", 600);

$project->addTask($task1);
$project->addTask($task2);
$project->addTask($task3);


echo "Total heures sans buffer : " . $project->calculateTotalHours() . "h\n";
echo "Total heures avec buffer 10% : " . number_format($project->calculateTotalWithBuffer(), 2) . "h\n";
echo "Budget estimé : " . number_format($project->calculateBudget(), 2) . "€\n";

echo "Tâches > 20h :\n";
$bigTasks = $project->getBigTasks(20);
if (count($bigTasks) > 0) {
    foreach ($bigTasks as $task) {
        echo "- Tâche #{$task->getId()} : {$task->getDescription()} ({$task->getEstimatedHours()}h)\n";
    }
} else {
    echo "Aucune tâche ne dépasse le seuil de 20h.\n";
}