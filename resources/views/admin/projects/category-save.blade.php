@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center">{{ isset($data) ? 'Edit Category' : 'Add Category' }}</h3>
                @if ($errors->any())
                <div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                @endif
                <form action="" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Category Name</label>
                        <input type="text" name="name" class="form-control" value="{{ isset($data) ? $data->name : '' }}" required>
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