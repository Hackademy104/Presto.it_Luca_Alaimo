<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{

    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public  $message;
    public $validated;
    public $temporary_images;
    public $images = [];
    public $image;
    public $form_id;
    public $announcement;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'price' => 'required|numeric',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'title.required' => 'Il campo titolo deve essere obbligatorio',
        'title.min' => 'Il titolo richiede minimo 4 caratteri',
        'body.required' => 'La descrizione deve essere obbligatoria',
        'body.min' => 'La descrizione deve contenere almeno 8 caratteri',
        'price.required' => 'Il prezzo deve essere obbligatorio',
        'price.numeric' => 'Il campo prezzo deve essere un numero',
        'temporary_images.required' => "L\'immagine e\' richiesta!",
        'temporary_images.*.image' => "I file devono essere immagini!",
        'temporary_images.*.max' => "L\'immagine deve essere di massimo 1gb",
        'images.image' => "L\'immagine deve essere un\'immagine",
        'images.max' => "L\'immagine deve essere un\'immagine",
    ];

    public function updatedTemporaryImages(){

        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }

    }

    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }



    public function store(){


        $this->validate();

   $this->announcement  = Category::find($this->category)->announcements()->create($this->validate());
   if(count($this->images)){
    foreach($this->images as $image){
        // $this->announcement->images()->create(['path'=>$image->store('images', 'public')]);
        $newFileName = "announcements/{$this->announcement->id}";
        $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);

        dispatch(new ResizeImage($newImage->path, 400, 300));
    }


    File::deleteDirectory(storage_path('/app/livewire-tmp'));

   }
// $announcement = $category->announcements()->create([

//             'title' => $this->title,
//             'body' => $this->body,
//             'price' => $this->price,

//         ]);


        // Auth::user()->announcements()->save($announcement);
          

    session()->flash('message','Annuncio creato con successo,sara pubblicato dopo la revisione!');
       $this->cleanForm();
    }

    public function updated($property){
        $this->validateOnly($property);
    }

    public function cleanForm(){
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->category = '';
        $this->image = '';
        $this->images = [];
        $this->temporary_images = [];
        $this->form_id = rand();

    }




    public function render()
    {
        return view('livewire.create-announcement');
    }
}
