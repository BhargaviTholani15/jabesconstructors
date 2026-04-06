@include('admin._header')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Services List <a href="{{url('_admin/secure/services/add')}}" class="btn btn-primary">Add Service</a></h1>
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
                                <th scope="col">Order</th>
                                <th scope="col">Services Title</th>
                                <th scope="col">Services Image</th>
                                <th scope="col">Services Summary</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            <?php foreach ($data as $row) : ?>
                                <tr style="{{ $row->active_flag == 0 ? 'opacity:0.5;' : '' }}">
                                    <th scope="row"><?= $index++ ?></th>
                                    <td>
                                        <form action="{{ url('_admin/secure/services/order/' . $row->id) }}" method="POST" class="d-flex align-items-center" style="gap:5px;">
                                            @csrf
                                            <input type="number" name="order_no" value="{{ $row->order_no }}" style="width:60px;" class="form-control form-control-sm">
                                            <button type="submit" class="btn btn-outline-primary btn-sm" title="Update Order"><i class="fa fa-sync"></i></button>
                                        </form>
                                    </td>
                                    <td><?= $row->service_title; ?></td>
                                    <td><img src="<?= url("cloud/" . $row->service_image) ?>" style="height:80px; border-radius:5px;"></td>
                                    <td>
                                        <?php if (!empty($row->inner_image)) : ?>
                                            <img src="<?= url("cloud/" . $row->inner_image) ?>" style="height:80px; border-radius:5px;">
                                        <?php endif ?><br>
                                        {{ Str::limit($row->service_summary, 80) }}
                                    </td>
                                    <td>
                                        @if($row->active_flag == 1)
                                        <a href="{{ url('_admin/secure/services/toggle/' . $row->id) }}" class="btn btn-success btn-sm" title="Click to deactivate">Active</a>
                                        @else
                                        <a href="{{ url('_admin/secure/services/toggle/' . $row->id) }}" class="btn btn-secondary btn-sm" title="Click to activate">Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="<?= url('_admin/secure/services/add/' . $row->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?= url('_admin/secure/services/delete/' . $row->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
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
</div>

<script>
$(document).ready(function() {
    setTimeout(function() { $('#success-alert').fadeOut('slow'); }, 3000);
});
</script>
@include('admin._footer')