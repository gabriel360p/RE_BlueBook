<?php

namespace App\Livewire;

use App\Models\Categorie;
use App\Models\Subtask;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Tasks extends Component
{
    public $filter_categorie = null;
    public $filter_completed = 0;

    public function set_filter($filter)
    {
        $this->filter_completed = $filter;
    }

    public function uncheck_subtask(Subtask $subtask)
    {
        $subtask->completed = false;
        $subtask->save();
    }

    public function check_subtask(Subtask $subtask)
    {
        $subtask->completed = true;
        $subtask->save();
    }

    public function delete_subtask(Subtask $subtask)
    {
        $subtask->delete();
    }

    public function uncheck(Task $task)
    {
        $task->completed = false;
        $task->save();
    }

    public function delete(Task $task)
    {
        if ($subtasks = $task->subtasks) {
            foreach ($subtasks as $subtask) {
                $subtask->completed = true;
                $subtask->delete();
            }
            $task->delete();
        } else {
            $task->delete();
        }
    }

    public function check(Task $task)
    {
        if ($subtasks = $task->subtasks) {
            $task->completed = true;
            $task->save();

            foreach ($subtasks as $subtask) {
                $subtask->completed = true;
                $subtask->save();
            }
        } else {
            $task->completed = true;
            $task->save();
        }
    }

    public function render()
    {
        // $subtasks = Task::first()->with(['subtasks','categorie'])->get();
        // dd($subtasks);
        if ($this->filter_completed == 0) {
            return view('livewire.tasks', [
                'categories' => Categorie::where('user_id', Auth::user()->id)->get(),
                'tasks' => Task::where('user_id', Auth::user()->id)->with(['subtasks', 'categorie'])->get(),
            ]);
        } else if ($this->filter_completed == 1) {
            return view('livewire.tasks', [
                'categories' => Categorie::where('user_id', Auth::user()->id)->get(),
                'tasks' => Task::where('user_id', Auth::user()->id)->where('completed', 1)->with(['subtasks', 'categorie'])->get(),
            ]);
        } else if ($this->filter_completed == 2) {
            return view('livewire.tasks', [
                'categories' => Categorie::where('user_id', Auth::user()->id)->get(),
                'tasks' => Task::where('user_id', Auth::user()->id)->where('completed', 0)->with(['subtasks', 'categorie'])->get(),
            ]);
        }
    }
}
