<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>codeXLearns</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="userPanelCss/index.css">
    <link rel="stylesheet" href="userPanelCss/home.css">
</head>

<body>
    <!-- Header connection -->
    <?php include '_header.php' ?>
    <div class="container heading-container">
        <h1 class="text-white">Online Learning Platform</h1>
        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, expedita iusto est quos
            excepturi eius.</p>
        <button class="button">Join For Free</button>
    </div>
    <div class="container my-5">
        <h1 class="text-center text-white">Courses</h1>
        <div class="row course-row">
            <div class="card mx-4 my-4" style="width: 18rem;">
            <img src="https://source.unsplash.com/400x300/?programming,python" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Python</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Start Course</a>
                </div>
            </div>
            <div class="card mx-4 my-4" style="width: 18rem;">
            <img src="https://source.unsplash.com/400x300/?programming,java" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">java</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Start Course</a>
                </div>
            </div>
            <div class="card mx-4 my-4" style="width: 18rem;">
            <img src="https://source.unsplash.com/400x300/?programming,c" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">C</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Start Course</a>
                </div>
            </div>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>