@include('admin._header')


<body class="az-body">

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form action="{{url()->current()}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style=" margin:20px; padding:10px">
                        <?php if (isset($row)): ?>
                            <h2 style="text-align: center; margin-bottom: 30px;">Edit SEO</h2>
                        <?php else: ?>
                            <h2 style="text-align: center; margin-bottom: 30px;">Create a New SEO</h2>
                        <?php endif ?>
                        <div class="form-group">
                            <label>Page URL:</label>
                            <input type="text" name="URL" placeholder="Ex:about" class="form-control" maxlength={50} value="{{isset($row)? $row->url: ''}}" /> <br />
                        </div>
                        <div class="form-group">
                            <label>Page Title:</label>
                            <input type="text" name="title" placeholder="Enter Title" class="form-control" maxlength={50} value="{{isset($row)? $row->title: ''}}" /> <br />
                        </div>
                        <div class="form-group">
                            <label>Meta Description:</label>
                            <textarea type="textarea" name="description" placeholder="Enter Description" class="form-control">{{isset($row)? $row->description: ''}}</textarea> <br />
                        </div>
                        <div class="form-group">
                            <label>Meta Keywords:</label>
                            <textarea type="textarea" name="keywords" placeholder="Enter Keywords" class="form-control">{{isset($row)? $row->keywords: ''}}</textarea> <br />
                        </div>
                        <div class="form-group">
                            <label>Meta Tags:</label>
                            <textarea type="textarea" name="meta" placeholder="Meta" class="form-control">{{isset($row)? $row->meta: ''}}</textarea> <br />
                        </div>
                        <div class="form-group">
                            <label>Schema Markup:</label>
                            <textarea type="textarea" name="schema" placeholder="Enter Schema" class="form-control">{{isset($row)? $row->schema: ''}}</textarea> <br />
                        </div>
                        <div class="form-group">
                            <label>G-tag Head Script:</label>
                            <textarea type="textarea" name="gtag_head" placeholder="gtag_head" class="form-control">{{isset($row)? $row->gtag_head: ''}}</textarea> <br />
                        </div>
                        <div class="form-group">
                            <label>G-tag Body Script:</label>
                            <textarea type="textarea" name="gtag_body" placeholder="gtag_body" class="form-control">{{isset($row)? $row->gtag_body: ''}}</textarea> <br />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:30%; margin-left:200px"> Submit </button>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    @include('admin._footer')