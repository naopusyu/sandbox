<?php

class TaskList
{
    private array $tasks = [];

    public function addTask(string $task): void
    {
        $this->tasks[] = $task;
    }

    public function completeTask(int $index): void
    {
        if (isset($this->tasks[$index])) {
            unset($this->tasks[$index]);
        }
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }
}
