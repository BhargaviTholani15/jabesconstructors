@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4">
                <h3 class="text-center">{{ isset($data) ? 'Edit Project' : 'Add New Project' }}</h3>
                @if ($errors->any())
                <div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Project Title</label>
                        <input type="text" name="title" class="form-control" value="{{ isset($data) ? $data->title : '' }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Category</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ (isset($data) && $data->category_id == $cat->id) ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Description (optional)</label>
                        <textarea name="description" class="form-control" rows="2">{{ isset($data) ? $data->description : '' }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Display Order</label>
                        <input type="number" name="order_no" class="form-control" value="{{ isset($data) ? $data->order_no : '' }}" placeholder="1, 2, 3...">
                    </div>

                    <!-- Existing Images -->
                    @if(isset($data) && $data->images)
                    @php $existingImages = json_decode($data->images, true) ?? []; @endphp
                    @if(count($existingImages) > 0)
                    <div class="form-group mb-3">
                        <label>Current Images ({{ count($existingImages) }})</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach($existingImages as $idx => $img)
                            <div class="position-relative" style="display:inline-block;">
                                <img src="{{ url('cloud/' . $img) }}" style="height:100px; border-radius:5px; border:2px solid #ddd;">
                                <a href="{{ url('_admin/secure/project-items/delete-image/' . $data->id) }}?image_index={{ $idx }}"
                                   class="position-absolute top-0 end-0 badge bg-danger" style="cursor:pointer; text-decoration:none;"
                                   onclick="return confirm('Remove this image?')">X</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @endif

                    <!-- Thumbnail Image -->
                    <div class="form-group mb-3">
                        <label><strong>Thumbnail Image</strong></label>
                        @if(isset($data) && $data->thumbnail)
                        <br><img src="{{ url('cloud/' . $data->thumbnail) }}" style="height:100px; border-radius:5px; margin-bottom:10px;">
                        <br><small class="text-success">Current thumbnail (upload new to replace)</small>
                        @endif
                        <input type="file" name="thumbnail" class="form-control" accept="image/*">
                        <small class="text-muted">Main display image for the project card.</small>
                    </div>

                    <!-- Video Upload -->
                    <div class="form-group mb-3">
                        <label><strong>Video</strong></label>
                        @if(isset($data) && $data->video_path)
                        <br><video controls style="width:300px; border-radius:5px; margin-bottom:10px;">
                            <source src="{{ url('cloud/' . $data->video_path) }}">
                        </video>
                        <br><small class="text-success">Current video (upload new to replace)</small>
                        @endif
                        <input type="file" name="video" class="form-control" accept="video/*">
                        <small class="text-muted">Optional project video.</small>
                    </div>

                    <hr>

                    <!-- Upload New Images -->
                    <div class="form-group mb-3">
                        <label><strong>Slideshow Images</strong> {{ isset($data) ? '(Add More)' : '' }} (multiple)</label>
                        <input type="file" name="images[]" class="form-control" accept="image/*" multiple>
                        <small class="text-muted">Select multiple images. They will auto-play as a slideshow on the website.</small>
                    </div>

                    <div id="imagePreview" class="d-flex flex-wrap gap-2 mb-3"></div>

                    <button type="submit" class="btn btn-primary">Save Project</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.querySelector('input[name="images[]"]')?.addEventListener('change', function() {
    var preview = document.getElementById('imagePreview');
    preview.innerHTML = '';
    Array.from(this.files).forEach(function(file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.height = '80px';
            img.style.borderRadius = '5px';
            img.style.border = '2px solid #ddd';
            preview.appendChild(img);
        };
        reader.readAsDataURL(file);
    });
});
</script>

@include('admin._footer')