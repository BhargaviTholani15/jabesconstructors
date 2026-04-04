@include('admin._header')

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card" style="width: 80%; padding: 20px;">
        <h3 class="text-center">Create New Blog</h3>

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
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="inner_image">Inner Page Image</label>
                <input type="file" name="inner_image" id="inner_image" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="summary">Summary</label>
                <textarea name="summary" id="summary" class="form-control" rows="2"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="long_description">Long Description</label>
                <textarea name="long_description" id="description" class="form-control" rows="5"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block">Create Blog</button>
        </form>
    </div>
</div>


<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description', {
        filebrowserUploadUrl: "{{ route('ckeditor.upload') }}?_token={{ csrf_token() }}",
        filebrowserUploadMethod: 'form'
    });
</script>

@include('admin._footer')