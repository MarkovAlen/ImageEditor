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
                Too many photos contain unwanted objects, text, or persons.
                 Now, you can simply remove all these flaws.
                  Based on artificial intelligence,
                   this Cleanup feature enables you to clean and remove flaws from photographs, 
                  such as strangers in the background or blemishes on portraits.
            </p>
        </div>
    </div>
</div>

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-9 offset-3">
        <form action="{{ route('process-cleanup') }}" method="post" enctype="multipart/form-data" id="form">
            @csrf
            <div class="col-md-7">
                <div class="mb-4">
                    <label for="image" class="form-label fw-bold">Insert Image:</label>
                    <label for="image" class="form-label text-warning">NOTE:The original image should be a PNG, a JPG or a WEBP file, with a maximum resolution of 25 megapixels and a max file size of 30 Mb.</label>
                    <input class="form-control" type="file" id="image" accept="image/*" name="image" required>
                </div>
            </div>
            <div class="col-md-7">
                <div class="mb-4">
                    <label for="mask" class="form-label fw-bold">Insert Mask(Define the areas that need to be removed).</label>
                    <label for="mask" class="form-label text-warning">NOTE:The mask should be black and white with no grey pixels.</label>
                    <input class="form-control" type="file" id="mask" accept="image/*" name="mask" >
                </div>
            </div>
            <div class="col-md-7">
                <label for="mode" class="fw-bold">Select Mode:</label>
                <label for="mode" class=" text-warning">NOTE:Mode is an optional field that can be set to fast or quality to control the tradeoff between speed and quality.</label>
                <select name="mode" class="form-select mb-3 ">
                    <option value="fast">Fast</option>
                    <option value="quality">Quality</option>
                </select>
            </div>
            <div class="col-md-7">
                <button type="submit" class="btn btn-primary mb-4">Submit</button>
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

        if (maskFile && maskFile.size > 30000000) {
            alert('Mask file size exceeds the limit (30 MB).');
            event.preventDefault();
        }
    });
</script>