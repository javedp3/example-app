<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
    <title>Laravel </title>
</head>
<body>
    <div>
    
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid ">
              <a class="navbar-brand" href='{{route('home')}}'>Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href='{{route('home')}}'>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href='{{route('about')}}'>About</a>
                  </li>                  
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href='{{route('post')}}'>Post</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href='{{route('blog')}}'>Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href='{{route('first')}}'>First</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </div>
    <article>
        @yield('content')
    </article>

    <footer class="bg-dark text-center fixed-bottom text-white ">
        <!-- Grid container -->
        
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>