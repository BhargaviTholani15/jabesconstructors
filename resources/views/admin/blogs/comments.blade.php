@include('admin._header')
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Blog Comments</h1>
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Blog</th>
                                <th>Name</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $i => $row)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td><small><b>{{ $row->blog_title ?? 'N/A' }}</b></small></td>
                                <td>{{ $row->name }}</td>
                                <td>{{ Str::limit($row->comment, 100) }}</td>
                                <td><small>{{ $row->created_at }}</small></td>
                                <td>
                                    <a href="{{ url('_admin/secure/blog-comments/delete/' . $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if(count($data) == 0)
                    <p class="text-center text-muted">No comments yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div></div>
<script>$(document).ready(function(){setTimeout(function(){$('#success-alert').fadeOut('slow');},3000);});</script>
@include('admin._footer')