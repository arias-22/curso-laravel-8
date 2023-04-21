<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        return view('livewire.course-list',[
            'cursos' => Curso::latest()->with('user')->take(9)->get(),
        ]);
    }
}
