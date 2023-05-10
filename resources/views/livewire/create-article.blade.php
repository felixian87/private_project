<div>
    <h1> Inserisci il tuo articolo </h1>
        @if (session()->has('message'))
        <div class="bg-primary text-white">
            {{session('message')}}
        </div>
        @endif
<form wire:submit.prevent="store">
    @csrf
        <div>
            <label for="name"> Titolo Annuncio </label>
            <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" wire:model.lazy="name">
 
 @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
                </div>
        <div>
            <label for="description"> Descrizione </label>
            <input wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror" wire:model.lazy="description">
 
 @error('description')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
                </div>
                <div>
                    <label for="category"> Categoria </label>
                    <select wire:model.defer="category" id="category" class="form-control @error('category') is-invalid @enderror">
                    @error('description')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
                        <option value=""> Scegli la categoria </option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"> {{$category->name}} </option>
                            @endforeach
                    </select>
                </div>
            
        <div>
            <label for="price"> Prezzo </label>
            <input wire:model="price" type="string" class="form-control @error('price') is-invalid @enderror" wire:model.lazy="price">
 
 @error('price')
     <div class="alert alert-danger">{{ $message }}</div>
 @enderror
            </div>
        
            <div>
            <button type="submit" class="btn btn-primary mt-3"> Inserisci il tuo articolo </button>
            </div>
            </form>
</div>
