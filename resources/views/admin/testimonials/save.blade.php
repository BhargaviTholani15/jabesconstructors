@include('admin._header')
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card p-4">
                <h3 class="text-center">{{ isset($data) ? 'Edit Testimonial' : 'Add Testimonial' }}</h3>
                @if ($errors->any())
                <div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                @endif
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" value="{{ isset($data) ? $data->name : '' }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Designation / Company</label>
                        <input type="text" name="designation" class="form-control" value="{{ isset($data) ? $data->designation : '' }}" placeholder="e.g. Property Developer, Dallas TX">
                    </div>
                    <div class="form-group mb-3">
                        <label>Review *</label>
                        <textarea name="review" class="form-control" rows="4" required>{{ isset($data) ? $data->review : '' }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Photo (optional)</label>
                        @if(isset($data) && $data->image_path)
                        <br><img src="{{ url('cloud/' . $data->image_path) }}" style="height:60px; border-radius:50%; margin-bottom:10px;">
                        @endif
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group mb-3">
                        <label>Display Order</label>
                        <input type="number" name="order_no" class="form-control" value="{{ isset($data) ? $data->order_no : '' }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin._footer')