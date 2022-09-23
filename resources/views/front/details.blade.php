<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $course_details->title }} | Design & Code Tutorials Online by Anggademy</title>
    <meta name="description" content="In this course, we will learn about {{ $course_details->title }} from beginning so that you are able to prepare your dream career better with Anggademy.">
    <meta name="keywords" content="Flutter, Android Studio, Figma, SwiftUI, HTML CSS, Bootstrap, Tailwind CSS, Laravel, React Native, Webflow, JavaScript, Adobe XD, Web Design, Mobile App Development">
    <meta name="author" content="Anggademy" />

    <meta image="{{ Storage::url($course_details->thumbnail) }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ Storage::url($course_details->thumbnail) }}">
    <meta content="index, follow" name="robots" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $course_details->title }} | Design & Code Tutorials Online by Anggademy">
    <meta property="og:site_name" content="Anggademy">
    <meta property="og:url" content="https://anggademy.com/details/{{ $course_details->slug }}">
    <meta property="og:description" content="In this course, we will learn about {{ $course_details->title }} from beginning so that you are able to prepare your dream career better with Anggademy.">

    <link rel="icon" href="{{ asset('images/logo-anggademy.png') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-61SC4TGKHQ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-61SC4TGKHQ');
    </script>

</head>
  <body>
    <div class="container py-5">
        <div class="row mb-3">
            <div class="col-lg-12 col-12">
                <h1>
                    {{ $course_details->title }}
                </h1>
                <p>
                    by Anggademy
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube-nocookie.com/embed/{{ $course_details->content }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <h3>About Course</h3>
            <p>
                {{ $course_details->description }}
            </p>
        </div>
        <hr class="my-5">
        <div class="row text-center">
            <div class="col-lg-12 col-12">
                <img height="100" src="{{ asset('images/logo-anggademy.png') }}" alt="Anggademy How to Design & Code Tutorials">
                <h3 class="mt-2">Anggademy</h3>
                <p>
                    Be humble and keep learning
                </p>
                <div class="d-flex flex-row mb-3 justify-content-center">
                    <p class="me-3">
                        <a href="{{ route('course') }}">Home</a>
                    </p>
                    <p class="me-3">
                        <a href="#">Categories</a>
                    </p>
                    <p class="me-3">
                        <a target="_blank" href="https://github.com/anggarisky">GitHub</a>
                    </p>
                    <p class="me-3">
                        <a target="_blank" href="https://dribbble.com/buildwithangga">My Work</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>