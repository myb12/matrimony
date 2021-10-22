<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{asset('assets/site/fontawesome/css/all.min.css')}}" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}" />
    <title>
       @yield('title')
    </title>
  </head>
  <body>
    <!-- Menu Start -->
    <div>
      <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid container">
          <img
            src="{{asset('assets/site/images/logo.png')}}"
            alt="logo"
            width="200px"
            ,
            height="75px"
          />
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">হোম</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">আমাদের সম্পর্কে</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./otherPages/blog.html">ব্লগ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./otherPages/fnq.html">জিজ্ঞাসা</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">যোগাযোগ</a>
              </li>
            </ul>
            <button type="button" class="btn btn-success">Login</button>
          </div>
        </div>
      </nav>
    </div>
    <!-- Menu End -->