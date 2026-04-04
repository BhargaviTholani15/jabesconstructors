@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Client Logos <a href="{{url('_admin/secure/client-logos/add')}}" class="btn btn-primary">Add Logo</a></h1>
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Client Name</th>
                                <th>Website</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            @foreach($data as $row)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td><img src="{{ url('cloud/' . $row->image_path) }}" style="height:50px; background:#f5f5f5; padding:5px; border-radius:5px;"></td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->website_url ?? '-' }}</td>
                                <td>{{ $row->order_no }}</td>
                                <td>
                                    <a href="{{ url('_admin/secure/client-logos/add/' . $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('_admin/secure/client-logos/delete/' . $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
$(document).ready(function() { setTimeout(function() { $('#success-alert').fadeOut('slow'); }, 3000); });
</script>
@include('admin._footer')