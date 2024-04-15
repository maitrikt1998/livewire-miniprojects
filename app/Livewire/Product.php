<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
class Product extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $category;
    public $updateProduct = false;
    public $selectedProductId;
    public $previousImagePath;

    protected $rules = [
        'name' => 'required',
        'image' => 'required|image|max:1024',
        'category' => 'required',
    ];

    public function render()
    {
        $products = Products::all();
        return view('livewire.product', ['products' => $products]);
    }

    public function resetFields()
    {
        $this->name = '';
        $this->image = '';
        $this->category = '';
    }

    public function cancel()
    {
        $this->updateProduct = false;
        $this->resetFields();
    }

    public function store()
    {
        $this->validate();
        
        try{
            
            $imagePath = $this->image->store('images', 'public');
            Products::create([
                'name'=>$this->name,
                'image_path'=> $imagePath,
                'category'=>$this->category,
            ]);
    
            session()->flash('success','Product Created Successfully!!');
            $this->resetFields();

        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while creating products!!');
            $this->resetFields();
        }
    }

    public function edit($productId)
    {
        $product = Products::find($productId);
        $this->name = $product->name;
        $this->category = $product->category;
        $this->selectedProductId = $productId;
        $this->updateProduct = true;
        $this->previousImagePath = $product->image_path;
    }

    public function update()
    {

        $validatedData = $this->validate([
            'name' => 'required',
            'category' => 'required',
        ]);
    
        $product = Products::find($this->selectedProductId);
        $product->name = $validatedData['name'];
        $product->category = $validatedData['category'];
    
        if ($this->image) {
            $newImagePath = $this->image->store('images', 'public');
    
            if ($product->image_path && Storage::disk('public')->exists($product->image_path)) {
                Storage::disk('public')->delete($product->image_path);
            }
    
            $product->image_path = $newImagePath;
        }
    
        $product->save();
    
        session()->flash('success', 'Product Updated Successfully!!');
        $this->resetFields();
        $this->updateProduct = false;
    }

    public function delete($productId)
    {
        $product = Products::find($productId);
        if ($product) {
            if ($product->image_path && Storage::disk('public')->exists($product->image_path)) {
                Storage::disk('public')->delete($product->image_path);
            }
            $product->delete();
            session()->flash('success', 'Product Deleted Successfully!!');
        } else {
            session()->flash('error', 'Product not found!!');
        }
    }
}
