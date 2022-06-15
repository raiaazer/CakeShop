<form class="row" method="POST" action="{{ $type == 'edit' ? route('category.update',$category) : route('category.store') }}" enctype="multipart/form-data">
    @csrf
    
    @if($type == 'edit')
    @method('PUT')
    @endif

    <div class="col-lg-6 form-group">
        <input type="text" name="name" value="{{ old('name',$category['name']) }}" class="form-control input-default " placeholder="Category Name">
        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
    </div>
    <div class="col-lg-6 form-group">
        <input type="text" name="slug" value="{{ old('slug',$category['slug']) }}" class="form-control input-rounded" placeholder="Category Slug">
        @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    @php($oldVal = !empty(old('status')) ? old('status') : $category['status'])
    <div class="col-lg-6 form-group">
        <select name="status" class="form-control form-control-lg default-select ">
            <option value="0">Status</option>
            <option {{ $oldVal == '1' ? 'selected' : '' }} value="1">Enable</option>
            <option {{ $oldVal == '0' ? 'selected' : '' }} value="0">Disable</option>
        </select>
        @error('status') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <div class="col-lg-6 input-group mb-3">
        <div class="input-group-prepend">
            <button class="btn btn-primary btn-sm" type="button">Thumbnail</button>
        </div>
        <div class="custom-file">
            <input type="file" name="thumbnail" class="custom-file-input">
            <label class="custom-file-label">Choose file</label>
        </div>
        @error('thumbnail') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <div class="col-12 form-group">
        <button type="submit" class="btn btn-primary">{{ $type == 'edit' ? 'Update' : 'Create' }}</button>
    </div>
</form>