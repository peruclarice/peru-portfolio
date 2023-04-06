<?php

namespace App\Http\Livewire\CaseStudy;

use Livewire\Component;

class PlanYourMeds extends Component
{
    public function render()
    {
        return view('livewire.case-study.plan-your-meds')->extends('layout.app');
    }
}
