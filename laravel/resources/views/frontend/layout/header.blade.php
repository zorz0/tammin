<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insurance Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <!-- Styles ============================================ -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/src/css/theme/bootstrap.min.css">
  <link href="{{ asset('frontend') }}/src/css/custom/defaultAR.css" rel="stylesheet">
  <!-- <link rel="preload" href="{{ asset('frontend') }}/src/css/custom/homeAr.css" as="style"> -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/src/css/custom/homeAr.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/src/css/custom/style.rtl.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white  py-4 shadow">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('frontend') }}/assets/images/logo.svg" alt="" srcset="" class="w-100">
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('landing') }}">الرئيسيه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('question') }}">الاسئله المتكرره</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تواصل معنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
