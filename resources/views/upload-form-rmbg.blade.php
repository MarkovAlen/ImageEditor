<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/179bec0b52.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64087b922b.js" crossorigin="anonymous"></script>

</head>
<body>


    
    <nav class="m-5">
        <div class="d-flex justify-content-between">
        <a href="/" class="text-decoration-none  mr-3 text-dark ">
        <i class=" fa-solid fa-angles-left fa-2x fa-fade"></i>
        </a>
            <div>
                <a href="https://linkedin.com/in/alen-markov-72123825a/" class="text-decoration-none text-dark me-4 ">
                    <i class="fab fa-linkedin fa-2x "></i>
                </a>
                <a href="https://www.facebook.com/alen.markov.7" class="text-decoration-none text-dark me-4">
                    <i class="fab fa-facebook fa-2x "></i>
                </a>
        
                <a href="mailto:markovalen01@gmail.com" class="text-decoration-none  text-dark me-4">
                    <i class="fa-regular fa-envelope fa-2x "></i>
                </a>
            </div>
           
        </div>
    </nav>
<div class="container mt-5 mb-5">
    <div class="row  justify-content-center">
        <div class="col-md-8">
            <p class="fw-bold">
                With the background removal feature,
                 you can quickly remove the background of any image with incredible accuracy without having to do a bunch of extra work!
                  It's the most accurate background removal solution available on the market.
            </p>
        </div>
    </div>
</div>


<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 offset-3">
        <form action="{{ route('process-rmbg') }}" method="post" enctype="multipart/form-data" id="form">
            @csrf
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Insert Image:</label>
                    <label for="image" class="form-label text-warning">NOTE:The original image should be a PNG, a JPG or a WEBP file, with a maximum resolution of 25 megapixels and a max file size of 30 Mb.</label>
                    <input class="form-control" type="file" id="image" accept="image/*" name="image" required>
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    
</div>
</div>
        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>

<style>
    body{
        background-color: #EBEBF2;
    }
</style>
<script>
    document.getElementById('form').addEventListener('submit', function(event) {
        var imageFile = document.getElementById('image').files[0];
        var maskFile = document.getElementById('mask').files[0];

        if (imageFile && imageFile.size > 30000000) {
            alert('Image file size exceeds the limit (30 MB).');
            event.preventDefault();
        }

    });
</script>