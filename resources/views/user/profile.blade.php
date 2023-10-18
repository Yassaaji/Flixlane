@extends('layout.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vstream - Media Landing Page</title>

    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .profile-picture {
            width: 150px;
            height: 150px;
            overflow: hidden;
            border-radius: 50%;
            margin: 0 auto;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body style="background-color: black">
    @section('content')
    <div class="page-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="profile-picture">
                        <img src="/asset/perfectworld.jpg" alt="Profile Picture" id="preview-picture">
                    </div>
                    <h2 style="color: white">John Doe</h2>
                    <p style="color: white">@johndoe</p>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="color: white">Profile Picture:</td>
                                <td>
                                    <input type="file" class="form-control" id="profile-picture" accept="image/*">
                                </td>
                            </tr>
                            <tr>
                                <td style="color: white">Name:</td>
                                <td><input type="text" class="form-control" value="John Doe"></td>
                            </tr>
                            <tr>
                                <td style="color: white">Username:</td>
                                <td><input type="text" class="form-control" value="johndoe"></td>
                            </tr>
                            <tr>
                                <td style="color: white">Password:</td>
                                <td><input type="password" class="form-control" placeholder="New Password"></td>
                            </tr>
                            <tr>
                                <td style="color: white">Email:</td>
                                <td><input type="email" class="form-control" value="johndoe@example.com"></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        document.getElementById("profile-picture").addEventListener("change", function() {
            var fileInput = this;
            var file = fileInput.files[0];

            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = new Image();
                    img.src = e.target.result;

                    img.onload = function() {
                        var previewPicture = document.getElementById("preview-picture");
                        previewPicture.src = img.src;
                    }
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
    @endsection
</body>
</html>
