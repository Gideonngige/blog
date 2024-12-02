<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="home.css">
    <title>home</title>
</head>
<body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-sm  bg-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Business</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Culture</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Lifestyle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="demo" class="carousel slide container" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets\images\book.jpg" alt="books" class="d-block" style="width:100%; height:400px">
      <div class="carousel-caption">
        <h3>Business</h3>
        <p>Read, post about latest bisiness opinions</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets\images\bird.jpg" alt="bird" class="d-block" style="width:100%;height:400px">
      <div class="carousel-caption">
        <h3>Culture</h3>
        <p>Read, post views about your cultures to continue our heritage.</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="assets\images\flower.jpg" alt="New York" class="d-block" style="width:100%;height:400px">
      <div class="carousel-caption">
        <h3>Lifestyle</h3>
        <p>Read, post about new emerging lifestyles in the world.</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Latest Posts -->
 <div>
    <h2>Latest Posts</h2><hr>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <img src="assets\images\bird.jpg" class="card-img-top" style="height:300px" alt="book">
                <div class="card-body">
                    <p><b>Business.</b> By: John Doe 13/01/2025</p>
                    <h5 class="card-title">Lorem Birds</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque perferendis, earum modi dolorum ea laborum ex voluptas, deserunt itaque maiores ad ab sed, assumenda dolor? Nihil recusandae minus consectetur magni.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <img src="assets\images\book.jpg" class="card-img-top" style="height:300px" alt="book">
                <div class="card-body">
                    <p><b>Culture. </b>By: James Handrit 24/03/2025</p>
                    <h5 class="card-title">Books of Lorem</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem temporibus cumque voluptas earum perferendis iusto nesciunt necessitatibus aut itaque autem neque, sunt nam. Expedita sit illo sint quod neque vel!</p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <img src="assets\images\flower.jpg" class="card-img-top" style="height:300px" alt="book">
                <div class="card-body">
                    <p><b>Lifestyle. </b>By: Jane Doe 17/02/2023</p>
                    <h5 class="card-title">Flowers of Lorem</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint voluptatum dolorem amet officiis excepturi ipsam, cupiditate repellendus praesentium repudiandae saepe ipsum, pariatur minima dolore distinctio? Exercitationem asperiores tempora accusamus totam.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<!--end of latest posts-->

<!--bussiness posts-->
<div>
    <h2>Business</h2><hr>
    <h5 style="float:right;"><u>See all Business</u></h5><br>
    <hr>
    
    <div class="row">
        <div class="col-sm-6">
        <img src="assets\images\flower.jpg" class="card-img-top" style="height:300px" alt="book">
        </div>
        <div class="col-sm-6">
        <h4>By: Jane Doe 19/12/2024</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quam inventore maxime ratione dolore? 
                Aliquam earum libero repellendus deserunt tenetur error. In eligendi ex quae iusto tenetur aspernatur repudiandae quidem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia non neque maiores sit necessitatibus deserunt! Voluptas, consequatur veritatis accusamus maiores laborum, praesentium at, animi consequuntur repellat in odio cum earum?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi esse, quidem distinctio tempore perferendis nemo assumenda ratione a debitis quos, pariatur cumque error enim. Obcaecati velit possimus est nihil sed.
            </p>

        </div>
    </div>
</div>
<!--end of bussiness posts-->

<!--culture posts-->
<div>
    <h2>Culture</h2><hr>
    <h5 style="float:right;"><u>See all Culture</u></h5><br>
    <hr>
    
    <div class="row">
        <div class="col-sm-6">
        <img src="assets\images\bird.jpg" class="card-img-top" style="height:300px" alt="book">
        </div>
        <div class="col-sm-6">
            <h4>By: John Doe 19/12/2023</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quam inventore maxime ratione dolore? 
                Aliquam earum libero repellendus deserunt tenetur error. In eligendi ex quae iusto tenetur aspernatur repudiandae quidem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia non neque maiores sit necessitatibus deserunt! Voluptas, consequatur veritatis accusamus maiores laborum, praesentium at, animi consequuntur repellat in odio cum earum?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi esse, quidem distinctio tempore perferendis nemo assumenda ratione a debitis quos, pariatur cumque error enim. Obcaecati velit possimus est nihil sed.
            </p>

        </div>
    </div>
</div>
<!--end of culture posts-->


<!--lifestyle posts-->
<div>
    <h2>Lifestyle</h2><hr>
    <h5 style="float:right;"><u>See all lifestyles</u></h5><br>
    <hr>
    
    <div class="row">
        <div class="col-sm-6">
        <img src="assets\images\flower.jpg" class="card-img-top" style="height:300px" alt="book">
        </div>
        <div class="col-sm-6">
            <h4>By: John Ali 12/09/2023</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quam inventore maxime ratione dolore? 
                Aliquam earum libero repellendus deserunt tenetur error. In eligendi ex quae iusto tenetur aspernatur repudiandae quidem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia non neque maiores sit necessitatibus deserunt! Voluptas, consequatur veritatis accusamus maiores laborum, praesentium at, animi consequuntur repellat in odio cum earum?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi esse, quidem distinctio tempore perferendis nemo assumenda ratione a debitis quos, pariatur cumque error enim. Obcaecati velit possimus est nihil sed.
            </p>

        </div>
    </div>
</div><hr>
<!--end of lifestyle posts-->

<div class="row" style="background-color: #354649;">
    <div class="col-sm-3">
        <h3 style="color:#A3C6C4;">Blog</h3>
        <p style="color:#6C7A89;">A112n Bujra street</p>
        <p style="color:#6C7A89;">Lamu, New York</p>
        <p style="color:#6C7A89;">Phone +254 797 655 727</p>
        <p style="color:#6C7A89;">Email: john@example.com</p>
    </div>
    <div class="col-sm-3">
        <h5 style="color:#A3C6C4;">Useful links</h5>
        <a href="" style="text-decoration:none;color:#6C7A89">Home</a><br>
        <a href="" style="text-decoration:none;color:#6C7A89">About Us</a><br>
        <a href="" style="text-decoration:none;color:#6C7A89">Business</a><br>
        <a href="" style="text-decoration:none;color:#6C7A89">Culture</a><br>
        <a href="" style="text-decoration:none;color:#6C7A89">Lifestyle</a><br>
    </div>
    <div class="col-sm-3">
        <h5 style="color:#A3C6C4;">Our services</h5>
        <p style="color:#6C7A89;">Web development</p>
        <p style="color:#6C7A89;">Software development</p>
        <p style="color:#6C7A89;">Web design</p>
        <p style="color:#6C7A89;">Graphic design</p>
    </div>
    
</div>


</div>
    
</body>
</html>