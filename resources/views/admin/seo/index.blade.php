@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <h2> SEO List <span style="align-self: flex-end;"> <a href="{{url('/_admin/secure/seo/addseo')}}"> <button class="btn btn-primary" style="margin:20px;">+ Add </button></a></span></h2>
    <div class="row">
        <h5> search:</h5>
        <form action="" method="GET" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control" name="search" placeholder="Search By URL" value="<?= isset($search) ? $search : "" ?>" style="display:inline-block;width:50%;">
            <input type="submit" class="btn btn-primary" placeholder="Search By URL" style="display:inline-block">
        </form>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="table-head">S.No </th>
                <th class="table-head">URL </th>
                <th class="table-head">TITLE </th>
                <th class="table-head">DESCRIPTION </th>
                <th class="table-head">KEYWORDS</th>
                <th class="table-head">DETAILS</th>
                <th class="table-head">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($digital as $digit)
            <tr>
                <td class="table-data"> {{$digit->seo_id}}</td>
                <td class="table-data">{{$digit->url}}</td>
                <td class="table-data"> {{$digit->title}}</td>
                <td class="table-data"> {{$digit->description}}</td>
                <td class="table-data"> {{$digit->keywords}}</td>
                <td class="table-data">
                    Meta : <?= (!empty($digit->meta) && $digit->meta != "NA") ? 'Yes' : 'No' ?><br>
                    Schema : <?= (!empty($digit->schema) && $digit->schema != "NA") ? 'Yes' : 'No' ?><br>
                    Gtag-Head : <?= (!empty($digit->gtag_head) && $digit->gtag_head != "NA") ? 'Yes' : 'No' ?><br>
                    Gtag-Body : <?= (!empty($digit->gtag_body) && $digit->gtag_body != "NA") ? 'Yes' : 'No' ?>
                </td>
                <td class="table-data">

                    <div style="display: flex; justify-content:space-evenly; ">
                        <a href="{{url('/_admin/secure/seo/addseo').'/'.$digit->seo_id}}"><button class="btn-success" style="width:70px; border-style:hidden">Edit</button></a>
                        <a href="{{url('/_admin/secure/seo/delete').'/'.$digit->seo_id}}" onclick="return confirmDelete()"><button class="btn-danger" style="width:70px;border-style:hidden">Delete</button></a>
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="...">
        <ul class="pagination">

            <?php if ($page > 1): ?>
                <li class="page-item ">

                    <a class="page-link" href="?page=<?= ($page - 1) ?>">Previous</a>
                </li>

            <?php endif ?>
            <li class="page-item"><a class="page-link" href=""><?= $page ?></a></li>
            <?php if (count($digital) == 10): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= ($page + 1) ?>">Next</a>
                </li>
            <?php endif ?>
        </ul>

    </nav>
</div>

@include('admin._footer')