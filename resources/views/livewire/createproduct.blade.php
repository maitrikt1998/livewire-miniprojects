<form>
    <div class="form-group mb-3">
        <label for="productName">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="productName" placeholder="Enter Name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group mb-3">
        <label for="productImage">Image:</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="productImage" placeholder="Enter Image" wire:model="image">
        @error('image') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group mb-3">
        <label for="productCategory">Category:</label>
        <input type="text" class="form-control @error('category') is-invalid @enderror" id="productCategory" placeholder="Enter Category" wire:model="category">
        @error('category') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <button wire:click.prevent="store()" class="btn btn-success btn-block">Save</button>
</form>