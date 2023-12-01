<?php
class Task
{
    private $taskArray =

    [
        0 => ['desc' => 'Nova release v1.2', 'percent' => '30%', 'progress' => '40% Completado', 'class' => 'class="progress-bar progress-bar-success"', 'style' => 'style="width: 30%;"'],
        1 => ['desc' => 'Application deployment', 'percent' => '65%', 'progress' => '65% Completado', 'class' => 'class="progress-bar progress-bar-danger"', 'style' => 'style="width: 65%;"'],
        2 => ['desc' => 'Nova release v1.2', 'percent' => '30%', 'progress' => '40% Completado', 'class' => 'class="progress-bar progress-bar-success"', 'style' => 'style="width: 30%;"'],
        3 => ['desc' => 'Application deployment', 'percent' => '60%', 'progress' => '60% Completado', 'class' => 'class="progress-bar progress-bar-warning"', 'style' => 'style="width: 60%;"'],
        4 => ['desc' => 'Nova release v1.2', 'percent' => '58%', 'progress' => '58% Completado', 'class' => 'class="progress-bar progress-bar-info"', 'style' => 'style="width: 58%;"'],
        5 => ['desc' => 'Application deployment', 'percent' => '10%', 'progress' => '10% Completado', 'class' => 'class="progress-bar progress-bar-warning"', 'style' => 'style="width: 10%;"'],

    ];

    public function tasks(): array
    {
        return $this->taskArray;
    }

    public function total(): int
    {
        return count($this->taskArray);
    }
}
