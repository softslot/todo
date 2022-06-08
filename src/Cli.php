<?php

namespace Todo\Cli;

function start(): void
{
    echo 'Hello';
}

function addTodo($todo, $todoList): array
{
    $todoList[] = $todo;

    return $todoList;
}

function deleteTodo($index, $todoList): array
{
    unset($todoList[$index]);

    return array_values($todoList);
}
