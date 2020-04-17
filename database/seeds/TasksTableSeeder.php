<?php

use Illuminate\Database\Seeder;
use App\Task;
class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $task = new Task([
            'title1' => 'The Beatles are the best!'
        ]);
        $task->save();
        $task = new Task([
            'title1' => 'Metallica is good too, though'
        ]);
        $task->save();
        $task = new Task([
            'title1' => 'So Nothing Else Matters'
        ]);
        $task->save();
        $task = new Task([
            'title1' => 'What about games?'
        ]);
        $task->save();
        $task = new Task([
            'title1' => 'Assassin\'s Creed 2 is a masterpiece!'
        ]);
        $task->save();
        $task = new Task([
            'title1' => 'By the way, Hitman: Absolution is a very good game'
        ]);
        $task->save();
    }
}
