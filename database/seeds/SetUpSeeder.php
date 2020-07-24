<?php

use Illuminate\Database\Seeder;

class SetUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Project::class, 3)->create()->each(function ($project) {
            $project->tasks()->save(factory(App\Task::class)->make());
            $project->tasks()->save(factory(App\Task::class)->make());
            $project->tasks()->save(factory(App\Task::class)->make());

            $project->tasks()->each(function ($task) {
                $task->logs()->save(factory(App\TimeLog::class)->make());
                $task->logs()->save(factory(App\TimeLog::class)->make());
                $task->logs()->save(factory(App\TimeLog::class)->make());
                $task->logs()->save(factory(App\TimeLog::class)->make());
                $task->logs()->save(factory(App\TimeLog::class)->make());
            });
        });
    }
}
