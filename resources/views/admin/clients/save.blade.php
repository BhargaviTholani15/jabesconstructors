@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center">{{ isset($data) ? 'Edit Client Logo' : 'Add Client Logo' }}</h3>
                @if ($errors->any())
                <div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                @endif
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Client Name</label>
                        <input type="text" name="name" class="form-control" value="{{ isset($data) ? $data->name : '' }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Logo Image</label>
                        @if(isset($data) && $data->image_path)
                        <br><img src="{{ url('cloud/' . $data->image_path) }}" style="height:60px; background:#f5f5f5; padding:5px; border-radius:5px; margin-bottom:10px;">
                        <br><small class="text-success">Current logo (upload new to replace)</small>
                        @endif
                        <input type="file" name="image" class="form-control" accept="image/*" {{ isset($data) ? '' : 'required' }}>
                    </div>
                    <div class="form-group mb-3">
                        <label>Website URL (optional)</label>
                        <input type="url" name="website_url" class="form-control" value="{{ isset($data) ? $data->website_url : '' }}" placeholder="https://...">
                    </div>
                    <div class="form-group mb-3">
                        <label>Display Order</label>
                        <input type="number" name="order_no" class="form-control" value="{{ isset($data) ? $data->order_no : '' }}" placeholder="1, 2, 3...">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin._footer')