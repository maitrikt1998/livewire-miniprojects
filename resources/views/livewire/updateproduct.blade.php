<form>
    <input type="hidden" wire:model="category_id">
    <div class="form-group mb-3">
        <label for="categoryName">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="categoryName" placeholder="Enter Name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="categoryImage">Image:</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="categoryImage" wire:model="image">
        @error('image') <span class="text-danger">{{ $message }}</span>@enderror
        <img src="{{ asset($previousImagePath) }}" alt="Previous Image" style="max-width: 200px;" />
    </div>
    <div class="form-group mb-3">
        <label for="categoryDescription">Category:</label>
        <input type="text" class="form-control @error('category') is-invalid @enderror" id="categoryDescription" placeholder="Enter Category" wire:model="category">
        @error('category') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Update</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
    </div>
</form>
