<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processed Image</title>
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

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="img-thumbnail" src="data:{{ $contentType ?? 'image/jpeg' }};base64,{{ base64_encode($editedImageData) }}" alt="Processed Image">
            </div>
            <div class="col-md-6">
                <a href="data:{{ $contentType ?? 'image/jpeg' }};base64,{{ base64_encode($editedImageData) }}" class="text-decoration-none text-primary" download="processed_image.jpg">
                    Download Processed Image
                </a>
                <p class="mt-3">Remaining Credits: {{ $remainingCredits }}</p>
                <p>Credits Consumed: {{ $creditsConsumed }}</p>
            </div>
        </div>
    </div>
   
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
    body{
        background-color: #EBEBF2;
    }
    img{
        height: 400px;
        width: 400px;
    }
</style>