@include('admin._header')
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Team Members <a href="{{url('_admin/secure/team/add')}}" class="btn btn-primary">Add Member</a></h1>
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr><th>#</th><th>Photo</th><th>Name</th><th>Designation</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            @foreach($data as $row)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td>
                                    @if($row->image_path)
                                    <img src="{{ url('cloud/' . $row->image_path) }}" style="height:60px; border-radius:5px;">
                                    @else <span class="text-muted">No photo</span> @endif
                                </td>
                                <td><b>{{ $row->name }}</b></td>
                                <td>{{ $row->designation }}</td>
                                <td>
                                    <a href="{{ url('_admin/secure/team/add/' . $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('_admin/secure/team/delete/' . $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div></div>
<script>$(document).ready(function(){setTimeout(function(){$('#success-alert').fadeOut('slow');},3000);});</script>
@include('admin._footer')