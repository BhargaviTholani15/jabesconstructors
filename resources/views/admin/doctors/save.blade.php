@include('admin._header')

<div class="contianer" style="min-height: 100vh;">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3 class="text-center"><?= isset($data) ? "Edit Doctor" : "Create New Doctor" ?></h3>

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
                    <label for="title">Name</label><br>
                    <input type="text" name="name" class="form-control" value="<?= isset($data) ? $data->name : "" ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="title">Degree</label><br>
                    <input type="text" name="degree" class="form-control" value="<?= isset($data) ? $data->degree : "" ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="title">department</label><br>
                    <input type="text" name="department" class="form-control" value="<?= isset($data) ? $data->department : "" ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="image">Image</label><br>
                    <?php if (isset($data->image_path)): ?>
                        <img src="<?= url("cloud/" . $data->image_path) ?>" style="height: 100px;"><br>
                    <?php endif ?><br>
                    <input type="file" name="image_path" id="image" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>

@include('admin._footer')