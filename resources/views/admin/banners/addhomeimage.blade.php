@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center">{{ isset($data) ? 'Edit Banner' : 'Add New Banner' }}</h3>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ isset($data) ? $data->title : '' }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="2">{{ isset($data) ? $data->description : '' }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Banner Image</label>
                        @if(isset($data) && $data->image_path)
                        <br><img src="{{ url('cloud/' . $data->image_path) }}" style="height:100px; border-radius:5px; margin-bottom:10px;">
                        <br><small class="text-success">Current image (upload new to replace)</small>
                        @endif
                        <input type="file" name="image" class="form-control" accept="image/*" {{ isset($data) ? '' : 'required' }}>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ isset($data) ? 'Update Banner' : 'Add Banner' }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin._footer')