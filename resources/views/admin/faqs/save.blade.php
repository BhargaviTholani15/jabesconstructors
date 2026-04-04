@include('admin._header')

<div class="contianer" style="min-height: 100vh;">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3 class="text-center"><?= isset($data) ? "Edit FAQ" : "Create New FAQ" ?></h3>

            @if ($errors->any())
            <div class="alert alert-danger" id="error-alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="question">Question</label><br>
                    <input type="text" name="question" id="question" class="form-control" value="<?= isset($data) ? $data->question : "" ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="answer">Answer</label><br>
                    <textarea name="answer" id="answer" class="form-control" rows="5"><?= isset($data) ? $data->answer : "" ?></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@include('admin._footer')