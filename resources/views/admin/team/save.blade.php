@include('admin._header')
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card p-4">
                <h3 class="text-center">{{ isset($data) ? 'Edit Team Member' : 'Add Team Member' }}</h3>
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
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control" value="{{ isset($data) ? $data->designation : '' }}" placeholder="e.g. Chief Financial Officer">
                    </div>
                    <div class="form-group mb-3">
                        <label>Photo</label>
                        @if(isset($data) && $data->image_path)
                        <br><img src="{{ url('cloud/' . $data->image_path) }}" style="height:80px; border-radius:5px; margin-bottom:10px;">
                        @endif
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <hr>
                    <h5>Social Media Links (optional)</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-facebook"></i> Facebook</label>
                            <input type="url" name="facebook" class="form-control" value="{{ isset($data) ? $data->facebook : '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-instagram"></i> Instagram</label>
                            <input type="url" name="instagram" class="form-control" value="{{ isset($data) ? $data->instagram : '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-linkedin"></i> LinkedIn</label>
                            <input type="url" name="linkedin" class="form-control" value="{{ isset($data) ? $data->linkedin : '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-twitter"></i> Twitter</label>
                            <input type="url" name="twitter" class="form-control" value="{{ isset($data) ? $data->twitter : '' }}">
                        </div>
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