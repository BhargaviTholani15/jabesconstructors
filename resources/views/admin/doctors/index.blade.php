@include('admin._header')
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class=" rounded h-100 p-4">
                <h1>Doctors List <a href="{{url('_admin/secure/doctors/add')}}" class="btn btn-primary">Add Doctor</a></h1>
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
                                <th scope="col">Image</th>
                                <th scope="col">Doctors Details</th>
                                <th scope="col">Order</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $index++ ?></th>
                                    <td><img src="<?= url("cloud/" . $row->image_path) ?>" style="height:100px;"></td>
                                    <td>
                                        Name : <b><?= $row->name; ?></b><br>
                                        Degree: <b><?= $row->degree; ?></b><br>
                                        Department : <b><?= $row->department ?></b>
                                    </td>
                                    <td>
                                        <form action="<?= url('_admin/secure/doctors/order_no') . '/' . $row->id ?>" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="number" name="order_no" class="form_control" value="<?= (!empty($row->order_no)) ? $row->order_no : "" ?>" style="width:100px;">
                                            <button type="submit" style="padding: 0;"><i class="fa fa-refresh" aria-hidden="true" style="font-size: 1.2em;line-height: 1em;"></i></button>
                                        </form>
                                    </td>
                                    <td><?= $row->active_flag == 1 ? "Active" : "Inactive" ?></td>
                                    <td><?= $row->created_at ?></td>
                                    <td>
                                        <a href="<?= url('_admin/secure/doctors/add/' . $row->id) ?>" style="color:black">
                                            <button class="btn btn-primary btn-sm">Edit</button>
                                        </a>
                                        <a style="color:black" href="<?= url('_admin/secure/doctors/delete/' . $row->id) ?>" onclick="return confirmDelete()">
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