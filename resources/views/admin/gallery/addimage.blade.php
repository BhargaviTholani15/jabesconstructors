@include('admin._header')
<style>
    .pdb-20 {
        padding-bottom: 20px;
    }
</style>
<div class="d-flex justify-content-center " style="min-height: 300px;">
    <div class="card" style="width: 30rem; padding: 20px;">
        <h3 class="text-center">Upload Image</h3>
        @if ($errors->any())
        <div class="alert alert-danger" id="error-alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
        @endif

        <form action="{{url('_admin/secure/images/add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group pdb-20">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-block ">Upload</button>
            </div>
        </form>
    </div>
</div>

@include('admin._footer')