@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Blogs
                    <a href="{{url('_admin/secure/blog/add')}}" class="btn btn-primary">Add Blog</a>
                    <a href="{{url('_admin/secure/blog-categories')}}" class="btn btn-outline-secondary">Manage Categories</a>
                </h1>
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
                                <th>Categories</th>
                                <th>Stats</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $i => $row)
                            @php
                                $decoded = json_decode($row->category_ids ?? '[]', true);
                                $catIds = is_array($decoded) ? $decoded : [];
                            @endphp
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>
                                    @if($row->blog_image)
                                    <img src="{{ url('cloud/' . $row->blog_image) }}" style="height:60px; border-radius:5px;">
                                    @endif
                                </td>
                                <td>
                                    <b>{{ $row->blog_title }}</b><br>
                                    <small class="text-muted">{{ Str::limit($row->blog_summery, 60) }}</small>
                                </td>
                                <td>
                                    @foreach($categories as $cat)
                                        @if(in_array($cat->id, $catIds))
                                        <span class="badge bg-info">{{ $cat->category }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <small>
                                        <i class="fa fa-eye"></i> {{ $row->view_counts ?? 0 }}
                                        &nbsp; <i class="fa fa-heart" style="color:red;"></i> {{ $row->likes ?? 0 }}
                                        @if($row->minutes_to_read)
                                        &nbsp; <i class="fa fa-clock"></i> {{ $row->minutes_to_read }}min
                                        @endif
                                    </small>
                                </td>
                                <td><small>{{ $row->published_at ? date('d M Y', strtotime($row->published_at)) : date('d M Y', strtotime($row->created_at)) }}</small></td>
                                <td>
                                    <a href="{{ url('_admin/secure/blog/edit/' . $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('_admin/secure/blog/delete/' . $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</a>
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