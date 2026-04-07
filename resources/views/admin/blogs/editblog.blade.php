@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card p-4">
                <h3 class="text-center">Edit Blog</h3>

                @if ($errors->any())
                <div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                @endif

                @php
                    $decoded = json_decode($data->category_ids ?? '[]', true);
                    $selectedCats = is_array($decoded) ? $decoded : [];
                @endphp

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group mb-3">
                                <label>Title *</label>
                                <input type="text" name="title" class="form-control" value="{{ $data->blog_title }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label>Author</label>
                                <input type="text" name="author" class="form-control" value="{{ $data->author }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Main Image</label> <span class="text-success">(Optional - keep current)</span>
                                @if($data->blog_image)
                                <br><img src="{{ url('cloud/' . $data->blog_image) }}" style="height:80px; border-radius:5px; margin-bottom:8px;">
                                @endif
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Inner Page Image</label> <span class="text-success">(Optional)</span>
                                @if(!empty($data->inner_image))
                                <br><img src="{{ url('cloud/' . $data->inner_image) }}" style="height:80px; border-radius:5px; margin-bottom:8px;">
                                @endif
                                <input type="file" name="inner_image" class="form-control" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label>Categories</label>
                                <select name="category_ids[]" class="form-select" multiple style="height:100px;">
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ in_array($cat->id, $selectedCats) ? 'selected' : '' }}>{{ $cat->category }}</option>
                                    @endforeach
                                </select>
                                <small class="text-muted">Hold Ctrl to select multiple</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label>Publish Date</label>
                                <input type="datetime-local" name="published_at" class="form-control" value="{{ $data->published_at ? date('Y-m-d\TH:i', strtotime($data->published_at)) : '' }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label>Minutes to Read</label>
                                <input type="number" name="minutes_to_read" class="form-control" value="{{ $data->minutes_to_read }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Views: <strong>{{ $data->view_counts ?? 0 }}</strong></label>
                        </div>
                        <div class="col-md-4">
                            <label>Likes: <strong>{{ $data->likes ?? 0 }}</strong></label>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Summary / Excerpt *</label>
                        <textarea name="summary" class="form-control" rows="2" required>{{ $data->blog_summery }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label>Full Content *</label>
                        <textarea name="long_description" id="description" class="form-control" rows="10" required>{{ $data->blog_description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Blog</button>
                    <a href="{{ url('_admin/secure/blog-categories') }}" class="btn btn-outline-secondary">Manage Categories</a>
                </form>
            </div>
        </div>
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