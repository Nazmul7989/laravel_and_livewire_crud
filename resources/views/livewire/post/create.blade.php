<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card p-4 shadow">

                <div class="clearfix">
                    <h3 class="float-start">Create Post</h3>
                    <a href="/" class="float-end btn btn-outline-success">Back</a>
                </div>
                <hr>

                <form wire:submit.prevent="submit">
                    <div class="mb-3">
                        <label for="title" class="form-label">Post Title</label>
                        <input type="text" name="title" wire:model="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Post Title">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Post Description</label>
                        <textarea name="description" wire:model="description" placeholder="Enter Post Description " class="form-control @error('title') is-invalid @enderror" id="description" rows="5">{{ old('description') }}</textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-success">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
