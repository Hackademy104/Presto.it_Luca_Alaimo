<div class="col-6 ">

 

   <form wire:submit.prevent="store">
    @csrf
{{-- MESSAGGIO DI CREAZIONE --}}
@if (session()->has('message'))
    <div class="flex flex-row justify-content-center my-2 alert alert-success">
        {{session('message')}}
    </div>
@endif



    {{-- MESSAGGIO DI ERRORE --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="mb-3" >
      <label for="title" class="label-custom">Titolo annuncio</label>
      <input wire:model.live='title' type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="body" class="label-custom">Descrizione</label>
        <textarea wire:model.live='body' type="text" class="form-control" ></textarea>
      </div>

      <div class="mb-3">
        <label for="price" class="label-custom">Prezzo</label>
        <input wire:model.live='price' type="number" class="form-control">
      </div>

      <div class="mb-3">

   <label for="category" class="label-custom">Categoria</label>
      <select wire:model.defer="category" id="category" class="form-select" >
            <option value="">Scegli la categoria</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
      </select>
    </div>

    <div class="mb-3">
        <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="img">
        @error('temporary_images.*')
            
        <p class="text-danger mt-2">{{$message}}</p>
        @enderror
    </div>
    @if (!empty($images))
    <div class="row">
        <div class="col-12">
            <p class="label-custom">Photo preview:</p>
            <div class="row border border-4 border-info rounded shadow py-4">


                @foreach ($images as $key => $image)

                <div class="col-6 my-3">
                    <div class=" shadow rounded img-preview" style="background-image: url({{$image->temporaryUrl()}})"></div>
                    <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto">Cancella</button>
                </div>
                    
                @endforeach

                
            </div>

        </div>
    </div>
        
    @endif

      <button type="submit" class="btn btn-custom w-100 mb-5">Crea Annuncio</button>



   </form>

</div>
