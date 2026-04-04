@include('admin._header')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Videos & Slideshows <a href="{{url('_admin/secure/videos/add')}}" class="btn btn-primary">Add New</a></h1>
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Type</th>
                                <th scope="col">Preview</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $index++ ?></th>
                                    <td><?= $row->image_title; ?></td>
                                    <td>
                                        <?php if ($row->type == 'VIDEO'): ?>
                                            <span class="badge bg-primary">Video Upload</span>
                                        <?php elseif ($row->type == 'VIDEO_URL'): ?>
                                            <span class="badge bg-success">Video URL</span>
                                        <?php elseif ($row->type == 'VIDEO_SLIDESHOW'): ?>
                                            <span class="badge bg-warning text-dark">Image Slideshow</span>
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <?php if ($row->type == 'VIDEO'): ?>
                                            <video controls style="width: 250px;">
                                                <source src="{{url('cloud/'.$row->video_path)}}">
                                            </video>
                                        <?php elseif ($row->type == 'VIDEO_URL'): ?>
                                            <a href="<?= $row->video_url ?>" target="_blank"><?= $row->video_url ?></a>
                                        <?php elseif ($row->type == 'VIDEO_SLIDESHOW'): ?>
                                            <?php $images = json_decode($row->slideshow_images, true); ?>
                                            <?php if ($images): ?>
                                                <div class="d-flex flex-wrap gap-1">
                                                    <?php foreach (array_slice($images, 0, 4) as $img): ?>
                                                        <img src="<?= url('cloud/' . $img) ?>" style="height:60px; border-radius:3px;">
                                                    <?php endforeach ?>
                                                    <?php if (count($images) > 4): ?>
                                                        <span class="badge bg-secondary align-self-center">+<?= count($images) - 4 ?> more</span>
                                                    <?php endif ?>
                                                </div>
                                            <?php endif ?>
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <a style="color:black" href="<?= url('_admin/secure/videos/delete/' . $row->id) ?>" onclick="return confirmDelete()">
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->

</div>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete?");
    }

    $(document).ready(function() {
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
        }, 3000);
    });
</script>
@include('admin._footer')