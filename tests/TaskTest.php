<?php

namespace App\Tests;

use App\Entity\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    // public function testSomething(): void
    // {
    //     $this->assertTrue(true);
    // }
    public function testSetTitle()
    {
        $task = new Task();
        $task->setTitle("newTask");

        $this->assertSame("newTask", $task->getTitle());
    }
}
