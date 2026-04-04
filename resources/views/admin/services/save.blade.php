@include('admin._header')

<div class="contianer" style="min-height: 100vh;">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3 class="text-center"><?= isset($data) ? "Edit Service" : "Create New Service" ?></h3>

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
                    <label for="title">Title</label><br>
                    <input type="text" name="service_title" id="title" class="form-control" value="<?= isset($data) ? $data->service_title : "" ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="image">Image</label><br>
                    <?php if (isset($data->service_image)): ?>
                        <img src="<?= url("cloud/" . $data->service_image) ?>" style="height: 100px;"><br>
                    <?php endif ?><br>
                    <input type="file" name="service_image" id="image" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="image">Inner Page Image</label><br>
                    <?php if (isset($data) && !empty($data->inner_image)) : ?>
                        <img src="<?= url("cloud/" . $data->inner_image) ?>" style="height:100px;">
                    <?php endif ?><br>
                    <input type="file" name="inner_image" id="image" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="summary">Summary</label><br>
                    <textarea name="service_summary" id="summary" class="form-control" rows="2"><?= isset($data) ? $data->service_summary : "" ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="long_description">Long Description</label><br>
                    <textarea name="service_description" id="description" class="form-control" rows="5"><?= isset($data) ? $data->service_description : "" ?></textarea>
                </div>
                <br>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
        <div class="col-md-1"></div>
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