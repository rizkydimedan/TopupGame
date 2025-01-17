<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Platform;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\TopupgamePackage;


class TambahProduk extends Component
{
    use WithFileUploads;
    public $name;
    public $developer;
    public $description;
    public $about;
    // #[Url()]
    public $category_id = [];
    public $categories;
    public $platform_id;
    public $image;
    public $platforms;

    public function mount()
    {
        $this->categories = Category::all(); // Memuat data kategori dari database
        $this->platforms = Platform::with('topup')->get();
    }
    protected $rules = [
        'name' => 'required|string|max:255',
        'developer' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'about' => 'required|string|max:255',
        'category_id' => 'required|array|min:1',
        'category_id.*' => 'required|integer|exists:categories,id',
        'platform_id' => 'required|integer|max:255',
        'image' => 'file|mimes:png,jpg,pdf|max:2048',
    ];

    public function save(){
        // Validate the input data
        $validatedData = $this->validate();

        // Create a new instance of your model (e.g., Product)
        $product = new TopupgamePackage();
       
        // Assign validated data to the model
        $product->uuid = Str::uuid();
        $product->name = $validatedData['name'];
        $product->developer = $validatedData['developer'];
        $product->description = $validatedData['description'];
        $product->about = $validatedData['about'];
        $product->platform_id = $validatedData['platform_id'];
        $product['slug'] = Str::slug($product->name);

       
         if ($this->image) {
            $imagePath = $this->image->store('assets/gallery', 'public');
            $product->image = $imagePath;
        }

        $existName = TopupgamePackage::where('name', $product['name'])->exists();
        if ($existName) {
            $this->dispatch('sweet-alert', 
            icon: 'error', 
            title: 'Data Sudah Dibuat');
            return redirect()->route('game-packages.index');

        }
        try{
            $product->save();
            $product->categories()->attach($validatedData['category_id']);
    
            $this->dispatch('sweet-alert', 
            icon: 'success', 
            title: 'Data Berhasil Disimpan');
            return redirect()->route('game-packages.index');
        } catch (\Exception $e) {
            $this->dispatch('sweet-alert', 
            icon: 'error', 
            title: 'Data Gagal Ditambahkan');
        }
       

        // session()->flash('status', 'successfully');
        // return redirect()->route('game-packages.index');

        
    }

    public function render()
    {
        return view('livewire.tambah-produk');
    }



    
}
