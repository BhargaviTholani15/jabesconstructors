@include('admin._header')

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card p-4">
                <h3 class="text-center mb-4">Site Settings</h3>

                @if (session('success'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('success') }}
                </div>
                @endif

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <h5 class="mb-3 text-primary">Company Information</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Company Name</label>
                            <input type="text" name="company_name" class="form-control" value="{{ $settings['company_name'] ?? '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $settings['email'] ?? '' }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Address</label>
                            <textarea name="address" class="form-control" rows="2">{{ $settings['address'] ?? '' }}</textarea>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Office Phone</label>
                            <input type="text" name="office_phone" class="form-control" value="{{ $settings['office_phone'] ?? '' }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Cell Phone</label>
                            <input type="text" name="cell_phone" class="form-control" value="{{ $settings['cell_phone'] ?? '' }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Working Hours</label>
                            <input type="text" name="working_hours" class="form-control" value="{{ $settings['working_hours'] ?? '' }}">
                        </div>
                    </div>

                    <hr>
                    <h5 class="mb-3 text-primary">Social Media Links</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-facebook"></i> Facebook</label>
                            <input type="url" name="facebook" class="form-control" value="{{ $settings['facebook'] ?? '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-instagram"></i> Instagram</label>
                            <input type="url" name="instagram" class="form-control" value="{{ $settings['instagram'] ?? '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-linkedin"></i> LinkedIn</label>
                            <input type="url" name="linkedin" class="form-control" value="{{ $settings['linkedin'] ?? '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-youtube"></i> YouTube</label>
                            <input type="url" name="youtube" class="form-control" value="{{ $settings['youtube'] ?? '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-twitter"></i> Twitter</label>
                            <input type="url" name="twitter" class="form-control" value="{{ $settings['twitter'] ?? '' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><i class="fab fa-whatsapp"></i> WhatsApp</label>
                            <input type="text" name="whatsapp" class="form-control" value="{{ $settings['whatsapp'] ?? '' }}" placeholder="Phone number with country code">
                        </div>
                    </div>

                    <hr>
                    <h5 class="mb-3 text-primary">Footer</h5>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label>Footer Text</label>
                            <textarea name="footer_text" class="form-control" rows="2">{{ $settings['footer_text'] ?? '' }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Copyright Text</label>
                            <input type="text" name="copyright" class="form-control" value="{{ $settings['copyright'] ?? '' }}">
                        </div>
                    </div>

                    <hr>
                    <h5 class="mb-3 text-primary">Portfolio</h5>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label>Portfolio PDF</label>
                            @if(!empty($settings['portfolio_pdf']))
                            <br><a href="{{ url('cloud/' . $settings['portfolio_pdf']) }}" target="_blank" class="btn btn-sm btn-outline-primary mb-2">
                                <i class="fa fa-file-pdf"></i> View Current PDF
                            </a>
                            @endif
                            <input type="file" name="portfolio_pdf" class="form-control" accept=".pdf">
                            <small class="text-muted">Upload a PDF file. Leave empty to keep current file.</small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
        }, 3000);
    });
</script>

@include('admin._footer')