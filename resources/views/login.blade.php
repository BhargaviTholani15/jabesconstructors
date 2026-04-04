<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        #login-section .card {
            border-radius: 10px;
        }

        #login-section .card-header {
            border-radius: 10px 10px 0 0;
        }

        #login-section .card-body {
            padding: 2rem;
        }

        #login-section .form-control {
            border-radius: 5px;
        }

        #login-section .btn-primary {
            background-color: #5cb85c;
            border-color: #5cb85c;
        }

        #login-section .form-check-label {
            margin-left: 0.5rem;
        }

        .alert {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>



    <!-- Login Page Section -->
    <section id="login-section" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-primary text-white text-center">
                            <h3>Admin Login</h3>
                        </div>
                        <!-- Error and Success Messages from Session -->
                        @if ($errors->any())
                        <div class="alert alert-danger" id="error-alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if (session('success'))
                        <div class="alert alert-success" id="success-alert">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-danger" id="error-alert">
                            {{ session('error') }}
                        </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ url('_admin') }}" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="email">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group mb-4">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="card-footer text-center">
                        <a href="{{ url('password/reset') }}">Forgot Your Password?</a>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>