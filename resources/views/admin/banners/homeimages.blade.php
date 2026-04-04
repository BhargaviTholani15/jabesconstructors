@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Home Banners <a href="{{url('_admin/secure/homeimages/add')}}" class="btn btn-primary">Add Banner</a></h1>
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            @foreach($data as $row)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td><img src="{{ url('cloud/' . $row->image_path) }}" style="height:80px; border-radius:5px;"></td>
                                <td><b>{{ $row->title }}</b></td>
                                <td>{{ Str::limit($row->description, 100) }}</td>
                                <td>
                                    <a href="{{ url('_admin/secure/homeimages/add/' . $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('_admin/secure/homeimages/delete/' . $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this banner?')">Delete</a>
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