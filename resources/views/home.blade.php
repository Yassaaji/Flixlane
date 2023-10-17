<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WeTV-like Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      /* Custom CSS untuk mengatur tampilan slider */
      .carousel {
        width: 100%;
        max-height: 600px; /* Sesuaikan tinggi slider sesuai kebutuhan */
      }

      .carousel img {
        object-fit: cover;
        height: 100%;
        width: 100%;
      }

      .carousel-inner .carousel-item{
        max-height: 450px;
      }
    </style>
  </head>
  <body style="background-color: black;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/asset/tigerandcrane.jpg" class="d-block w-100" alt="Tiger and Crane">
        </div>
        <div class="carousel-item">
          <img src="/asset/kembar.jpg" class="d-block w-100" alt="Kembar">
        </div>
        <div class="carousel-item">
          <img src="/asset/perfectworld.jpg" class="d-block w-100" alt="Perfect World">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
