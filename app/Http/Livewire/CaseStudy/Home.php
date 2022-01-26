<?php

namespace App\Http\Livewire\CaseStudy;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.case-study.home')->extends('layout.app');
    }
}
