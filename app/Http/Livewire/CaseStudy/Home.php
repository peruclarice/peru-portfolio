<?php

namespace App\Http\Livewire\CaseStudy;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Home extends Component
{
    use WithFileUploads;

    public $photo;
 
    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
 
        // $this->photo->storeAs('photos','avatar');
        // $this->photo->store('/','public');
        $this->photo->storeAs('enjoy','jared','public');
    }

    public function export()
    {
        // return Storage::disk('photos')->download('avatar.jpeg');
        // return Storage::disk('exports')->path('export.csv');
        return response()->download(storage_path('app/public/enjoy'));
        
    }
    public function index(){
        $filePath = public_path('dummy.pdf');
        $headers = ['Content-Type: application/pdf'];
        $fileName = time().'.pdf';

        return Storage::disk('public')->download($filePath, $fileName, $headers);
    }

    public function render()
    {
        
        return view('livewire.case-study.home')->extends('layout.app');
    }


}
