@include('admin._header')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class=" rounded h-100 p-4">
                <h1>Gallery <a href="{{url('_admin/secure/images/add')}}" class="btn btn-primary">Add Image</a></h1>
                <!-- Success Messages from Session -->
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
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $index++ ?></th>
                                    <td><?= $row->image_title; ?></td>
                                    <td><img height="100" src="<?= url('cloud/' . $row->image_path) ?>"></td>
                                    <td>
                                        <a style="color:black" href="<?= url('_admin/secure/images/delete/' . $row->id) ?>" onclick="return confirmDelete()">
                                            <button class="btn btn-danger">Delete</button>
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


<!-- Footer Start -->

<!-- Footer End -->
</div>
<!-- Content End -->

<script>
    function confirmDelete() {
        if (confirm("Are you sure you want to delete?")) {
            return true;
        } else {
            return false;
        }
    }

    $(document).ready(function() {
        // Hide error messages after 3 seconds
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
        }, 3000);
    });
</script>
<!-- Back to Top -->
@include('admin._footer')