<?php

namespace App\Livewire\PaymentMethod;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\PaymentMethod;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use RealRashid\SweetAlert\Facades\Alert;

class Create extends ModalComponent
{
    use WithFileUploads;

    public $uuid;
    public $name;
    public $payment_type;
    public $image;
    public $cost;

    // Validasi properti
    protected $rules = [
        'name' => 'required|string|max:255',
        'payment_type' => 'required|string|max:255',
        'cost' => 'required|numeric|min:0',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048', 
    ];

    public function save()
    {
        // Validasi data
        $validatedData = $this->validate();

        // Membuat entitas baru PaymentMethod
        $paymentMethod = new PaymentMethod();
        $paymentMethod->uuid = Str::uuid();
        $paymentMethod->name = $validatedData['name'];
        $paymentMethod->cost = $validatedData['cost'];
        $paymentMethod->payment_type = $validatedData['payment_type'];

        // Simpan gambar jika ada
        if ($this->image) {
            $imagePath = $this->image->store('assets/payment-methods', 'public');
            $paymentMethod->image = $imagePath;
        }

        $paymentMethod->save();
        // session()->flash('status', 'Post successfully updated.');
        $this->closeModal();
        // Memicu event untuk refresh halaman
        // $this->dispatchBrowserEvent('reloadPage');
    }

    public function render()
    {
       
        return view('livewire.payment-method.create');
    }
}