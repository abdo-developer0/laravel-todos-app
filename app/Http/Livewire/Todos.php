<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Todos extends Component
{
    public string $taskName = "";

    public string $filter = "all";

    public string $addedDate = 'today';

    public function addTask()
    {
        Todo::create([
            'task' => $this->taskName,
        ]);

        $this->reset('taskName');
    }

    public function completeTask($id)
    {
        $todo = Todo::find($id);

        if ($todo) {
            $todo->update([
                'completed' => true,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.todos', [
            'todos' => $this->todos,
        ]);
    }

    public function getTodosProperty()
    {
        return Todo::all()
                ->filter(function(Todo $todo) {
                    switch($this->filter) {

                        case "all";
                            return true;

                        case 'completed':
                            return $todo->completed;

                        case 'active':
                            return !$todo->completed;

                        default:
                            return false;
                    }
                })
                ->filter(function(Todo $todo) {
                    switch($this->addedDate) {

                        case "today";
                            return $todo->created_at->isToday();

                        case 'yesterday':
                            return $todo->created_at->isYesterday();

                        case 'this-week':
                            return $todo->created_at->isCurrentWeek();

                        case 'last-week':
                            return $todo->created_at->isLastWeek();

                        case 'this-month':
                            return $todo->created_at->isCurrentMonth();

                        case 'any-date':
                            return true;

                        default:
                            return false;
                    }
                });
    }
}
