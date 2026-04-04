@include('admin._header')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Contact Requests</h1>
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $index++ ?></th>
                                    <td><b><?= $row->name; ?></b></td>
                                    <td><?= $row->phone; ?></td>
                                    <td><?= $row->email; ?></td>
                                    <td><?= $row->subject; ?></td>
                                    <td><?= $row->message; ?></td>
                                    <td><?= $row->created_at ?></td>
                                    <td>
                                        <a href="{{ url('_admin/secure/delete-contact/' . $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
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
$(document).ready(function() { setTimeout(function() { $('#success-alert').fadeOut('slow'); }, 3000); });
</script>
@include('admin._footer')