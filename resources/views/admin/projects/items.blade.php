@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class="rounded h-100 p-4">
                <h1>Projects
                    <a href="{{url('_admin/secure/project-items/add')}}" class="btn btn-primary">Add Project</a>
                    <a href="{{url('_admin/secure/project-categories')}}" class="btn btn-secondary">Manage Categories</a>
                </h1>
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Thumbnail</th>
                                <th>Video</th>
                                <th>Slideshow</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ?>
                            @foreach($data as $row)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td>
                                    <strong>{{ $row->title }}</strong>
                                    @if($row->description)
                                    <br><small class="text-muted">{{ Str::limit($row->description, 80) }}</small>
                                    @endif
                                </td>
                                <td><span class="badge bg-info">{{ $row->category_name ?? 'N/A' }}</span></td>
                                <td>
                                    @if($row->thumbnail)
                                    <img src="{{ url('cloud/' . $row->thumbnail) }}" style="height:50px; border-radius:3px;">
                                    @else <span class="text-muted">-</span> @endif
                                </td>
                                <td>
                                    @if($row->video_path)
                                    <span class="badge bg-success"><i class="fa fa-video"></i> Yes</span>
                                    @else <span class="text-muted">-</span> @endif
                                </td>
                                <td>
                                    @php $images = json_decode($row->images, true) ?? []; @endphp
                                    <div class="d-flex flex-wrap gap-1">
                                        @foreach(array_slice($images, 0, 3) as $img)
                                        <img src="{{ url('cloud/' . $img) }}" style="height:50px; border-radius:3px;">
                                        @endforeach
                                        @if(count($images) > 3)
                                        <span class="badge bg-secondary align-self-center">+{{ count($images) - 3 }}</span>
                                        @endif
                                        @if(count($images) == 0)
                                        <span class="text-muted">-</span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ url('_admin/secure/project-items/add/' . $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('_admin/secure/project-items/delete/' . $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
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