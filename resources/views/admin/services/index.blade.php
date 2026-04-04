@include('admin._header')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class=" rounded h-100 p-4">
                <h1>Services List <a href="{{url('_admin/secure/services/add')}}" class="btn btn-primary">Add Service</a></h1>
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
                                <th scope="col">Services Title</th>
                                <th scope="col">Services Image</th>
                                <th scope="col">Services Summary</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $index++ ?></th>
                                    <td><?= $row->service_title; ?></td>
                                    <td><img src="<?= url("cloud/" . $row->service_image) ?>" style="height:100px;"></td>
                                    <td>
                                        <?php if (!empty($row->inner_image)) : ?>
                                            <img src="<?= url("cloud/" . $row->inner_image) ?>" style="height:100px;">
                                        <?php endif ?><br>
                                        <?= $row->service_summary ?>
                                    </td>
                                    <td><?= $row->created_at ?></td>
                                    <td>
                                        <a href="<?= url('_admin/secure/services/add/' . $row->id) ?>" style="color:black">
                                            <button class="btn btn-primary btn-sm">Edit</button>
                                        </a>
                                        <a style="color:black" href="<?= url('_admin/secure/services/delete/' . $row->id) ?>" onclick="return confirmDelete()">
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