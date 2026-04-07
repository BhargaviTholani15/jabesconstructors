@include('admin._header')
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-4">
                <h4>Add Category</h4>
                <form action="{{ url('_admin/secure/blog-categories/save') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="category" class="form-control" placeholder="Category name" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Add</button>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card p-4">
                <h4>Blog Categories</h4>
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead><tr><th>#</th><th>Category</th><th>Action</th></tr></thead>
                    <tbody>
                        @foreach($data as $i => $row)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>
                                <form action="{{ url('_admin/secure/blog-categories/save/' . $row->id) }}" method="POST" class="d-flex" style="gap:5px;">
                                    @csrf
                                    <input type="text" name="category" value="{{ $row->category }}" class="form-control form-control-sm">
                                    <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-sync"></i></button>
                                </form>
                            </td>
                            <td><a href="{{ url('_admin/secure/blog-categories/delete/' . $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div></div>
<script>$(document).ready(function(){setTimeout(function(){$('#success-alert').fadeOut('slow');},3000);});</script>
@include('admin._footer')