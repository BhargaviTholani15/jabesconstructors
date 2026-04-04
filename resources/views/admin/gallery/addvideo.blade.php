@include('admin._header')
<style>
    .pdb-20 { padding-bottom: 20px; }
    .video-type-section { display: none; }
    .video-type-section.active { display: block; }
</style>

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4">
                <h3 class="text-center">Add Video / Slideshow</h3>

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
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{url('_admin/secure/videos/add')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Video Type</label>
                        <select name="video_type" id="videoType" class="form-select" required>
                            <option value="">-- Select Type --</option>
                            <option value="VIDEO">Upload Video File</option>
                            <option value="VIDEO_URL">YouTube / Video URL</option>
                            <option value="VIDEO_SLIDESHOW">Image Slideshow (Photo Video)</option>
                        </select>
                    </div>

                    <!-- Type 1: Direct Upload -->
                    <div id="section_VIDEO" class="video-type-section">
                        <div class="form-group mb-3">
                            <label>Video File</label>
                            <input type="file" name="video_file" class="form-control" accept="video/*">
                            <small class="text-muted">Upload MP4, WebM, or other video files</small>
                        </div>
                    </div>

                    <!-- Type 2: URL -->
                    <div id="section_VIDEO_URL" class="video-type-section">
                        <div class="form-group mb-3">
                            <label>Video URL</label>
                            <input type="url" name="video_url" class="form-control" placeholder="https://www.youtube.com/watch?v=...">
                            <small class="text-muted">Paste YouTube, Vimeo, or any video URL</small>
                        </div>
                    </div>

                    <!-- Type 3: Image Slideshow -->
                    <div id="section_VIDEO_SLIDESHOW" class="video-type-section">
                        <div class="form-group mb-3">
                            <label>Upload Images (min 2)</label>
                            <input type="file" name="slideshow_images[]" class="form-control" accept="image/*" multiple>
                            <small class="text-muted">Select multiple images. They will auto-play as a slideshow video in the gallery.</small>
                        </div>
                        <div id="imagePreview" class="d-flex flex-wrap gap-2 mt-2"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('videoType').addEventListener('change', function() {
        document.querySelectorAll('.video-type-section').forEach(el => el.classList.remove('active'));
        var selected = this.value;
        if (selected) {
            document.getElementById('section_' + selected).classList.add('active');
        }
    });

    // Image preview for slideshow
    document.querySelector('input[name="slideshow_images[]"]')?.addEventListener('change', function() {
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