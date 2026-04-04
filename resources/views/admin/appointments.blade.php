@include('admin._header')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Book Appointments</h1>
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Details</th>
                                <th scope="col">Service</th>
                                <th scope="col">Booking Date</th>
                                <th scope="col">Submitted On</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $index++ ?></th>
                                    <td><b><?= $row->name; ?></b></td>
                                    <td>
                                        Phone: <b><?= $row->mobile; ?></b><br>
                                        Email: <b><?= $row->email; ?></b><br>
                                        @if($row->address)
                                        Address: <b><?= $row->address; ?></b><br>
                                        @endif
                                        @if($row->message)
                                        Notes: <b><?= $row->message; ?></b>
                                        @endif
                                    </td>
                                    <td><span class="badge bg-primary"><?= $row->service; ?></span></td>
                                    <td><?= $row->booking_date; ?></td>
                                    <td><?= $row->created_at ?></td>
                                    <td>
                                        @if($row->status == 'BOOKED')
                                        <span class="badge bg-warning text-dark mb-1">BOOKED</span><br>
                                        <a href="{{url('_admin/secure/accept/'.$row->id)}}" class="btn btn-success btn-sm">Accept</a>
                                        @elseif($row->status =='ACCEPTED')
                                        <span class="badge bg-info mb-1">ACCEPTED</span><br>
                                        <a href="{{url('_admin/secure/convert/'.$row->id)}}" class="btn btn-success btn-sm">Complete</a>
                                        <a href="{{url('_admin/secure/cancle/'.$row->id)}}" class="btn btn-danger btn-sm">Cancel</a>
                                        @elseif($row->status == 'CONVERTED')
                                        <span class="badge bg-success">COMPLETED</span>
                                        @else
                                        <span class="badge bg-danger">CANCELLED</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('_admin/secure/delete-appointment/' . $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this appointment?')">Delete</a>
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