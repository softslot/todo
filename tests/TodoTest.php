<?php

namespace Todo\Tests;

use PHPUnit\Framework\TestCase;

use function Todo\Cli\addTodo;
use function Todo\Cli\deleteTodo;

class TodoTest extends TestCase
{
    public function testAddTodo(): void
    {
        $todoList = [];

        $todo = 'Помыть полы';

        $updatedTodoList = addTodo($todo, $todoList);

        $this->assertEquals([$todo], $updatedTodoList);
    }

    public function testDeleteTodo(): void
    {
        $todoList = [
            'Помыть полы',
            'Помыть посуду',
            'Помыть машину'
        ];

        $index = 1;

        $updatedTodoList = deleteTodo($index, $todoList);

        $expectedTodoList = [
            'Помыть полы',
            'Помыть машину'
        ];

        $this->assertEquals($expectedTodoList, $updatedTodoList);
    }

    public function testDeleteTodoByErrorIndex(): void
    {
        $todoList = [
            'Помыть полы',
            'Помыть посуду',
            'Помыть машину'
        ];

        $index = 100;

        $updatedTodoList = deleteTodo($index, $todoList);

        $this->assertEquals($todoList, $updatedTodoList);
    }
}
