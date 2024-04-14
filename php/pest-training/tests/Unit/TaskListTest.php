<?php

require_once __DIR__ . '/../../src/TaskList.php';

test('タスクリストに未登録', function () {
    $taskList = new TaskList();

    expect($taskList->getTasks())->toBe([]);
});

test('タスクリストに登録した値が取得できる', function () {
    $taskList = new TaskList();

    $taskList->addTask('タスク1');

    expect($taskList->getTasks())->toBe(['タスク1']);
});

test('完了したタスクはタスクリストから取得できない', function () {
    $taskList = new TaskList();

    $taskList->addTask('タスク1');
    $taskList->addTask('タスク2');
    $taskList->addTask('タスク3');

    expect($taskList->getTasks())->toHaveCount(3)->toBe(['タスク1', 'タスク2', 'タスク3']);

    $taskList->completeTask(1);

    expect($taskList->getTasks())->toHaveCount(2)->toBe([0 => 'タスク1', 2 => 'タスク3']);
});
