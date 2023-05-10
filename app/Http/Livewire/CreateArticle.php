<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
        public $name;
        public $description;
        public $category;
        public $price;

        protected $rules = [
            'name'=> 'required|min:2',
            'description'=> 'required|min:8',
            'category'=>'required',
            'price'=> 'required|numeric',

        ];

        protected $messages = [
            'required'=>'Il campo :attribute è richiesto',
            'min'=>'Il campo :attribute è troppo corto',
            'numeric'=>'Il campo :attribute deve essere in SOLO in numeri',
        ];

    public function store () 
    {
        $category=Category::find($this->category);
        $article=$category->articles()->create([
            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);
        Auth::user()->articles()->save($article);
        session()->flash('message','Articolo inserito con successo');
    $this->cleanForm();}
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    
    public function cleanForm  () {
        $this->name='';
        $this->description='';
        $this->price='';
        $this->category='';
    }
    public function render()
    {
        return view('livewire.create-article');
    }
}
