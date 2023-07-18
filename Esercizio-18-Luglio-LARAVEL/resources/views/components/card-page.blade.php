<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 18 Luglio </title>

 <!-- FontAwesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CSS/JS + my CSS/JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
    <body style="background-color: #333333;">

    <x-navbar></x-navbar>

    <div class="album mt-5 p-5 bg-black rounded-5">
    <div id="cards" class="container">
      <h2 class="text-center card-text text-white fs-md-1">IPHONE 📱</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col-lg-4 col-md-12">
          <div class="card shadow-sm rounded-5 mt-5">
            <img src="https://jodyossino.github.io/Apple-Cards/Immagini/MAXNEROSIDERALE.webp" alt="Iphone 14 Pro" class="rounded-5">
            <div class="card-body text-center">
              <p class="card-text fs-2">Iphone 14 Pro</p>
              <a href="{{ route('dettaglio-1') }}"><button class="btn btn-dark rounded-5" style="background-color: #4b4947; font-family: 'Ubuntu', sans-serif; border: none;" type="button">Acquista Ora!</button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card shadow-sm rounded-5 mt-md-5">
            <img src="https://jodyossino.github.io/Apple-Cards/Immagini/RED.webp" alt="Iphone 14" class="rounded-5">
            <div class="card-body text-center">
              <p class="card-text fs-2 ">Iphone 14</p>
              <button class="btn btn-dark rounded-5" style="background-color: red; border: none; font-family: 'Ubuntu', sans-serif;" type="button"><a href="#"></a>Acquista Ora!</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card shadow-sm rounded-5 mt-md-5">
            <img src="https://jodyossino.github.io/Apple-Cards/Immagini/viola%2012.jpeg" alt="Iphone 12" class="rounded-5">
            <div class="card-body text-center">
              <p class="card-text fs-2 ">Iphone 12</p>
              <button class="btn btn-dark rounded-5" style="background-color: #b5ace3; border: none; font-family: 'Ubuntu', sans-serif;" type="button"><a href="#"></a>Acquista Ora!</button>
            </div>
          </div>
        </div>
      </div>
      

      <div class="container" id="card-tablet">
        <h2 class="text-center card-text text-white mt-5">IPAD 💻</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col-lg-4 col-md-12">
            <div class="card shadow-sm rounded-5 mt-5">
              <img src="https://jodyossino.github.io/Apple-Cards/Immagini/ipad%20pro.jpeg" alt="Ipad Pro" class="rounded-5">
              <div class="card-body text-center">
                <p class="card-text fs-2 ">Ipad Pro</p>
                <div class="d-flex justify-content-center align-items-center">
                  <button class="btn btn-dark rounded-5" style="background-color: #e209a4; font-family: 'Ubuntu', sans-serif; border: none;" type="button"><a href="#"></a>Acquista Ora!</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="card shadow-sm rounded-5 mt-md-5">
              <img src="https://jodyossino.github.io/Apple-Cards/Immagini/ipad%20air.jpeg" alt="Ipad Air" class="rounded-5">
              <div class="card-body text-center">
                <p class="card-text fs-2 ">Ipad Air</p>
                <div class="d-flex justify-content-center align-items-center">
                  <button class="btn btn-dark rounded-5" style="background-color: #b0f05e; font-family: 'Ubuntu', sans-serif; border: none;" type="button"><a href="#"></a>Acquista Ora!</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="card shadow-sm rounded-5 mt-md-5">
              <img src="https://jodyossino.github.io/Apple-Cards/Immagini/ipad%20mini.jpeg" alt="Ipad Mini" class="rounded-5">
              <div class="card-body text-center">
                <p class="card-text fs-2 ">Ipad Mini</p>
                <button class="btn btn-dark rounded-5" style="background-color: #f89b55; font-family: 'Ubuntu', sans-serif; border: none;" type="button"><a href="#"></a>Acquista Ora!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="container" id="card-audio">
        <h2 class="text-center card-text text-white mt-5">AIRPODS 🎧</h2>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col-lg-4 col-md-12">
              <div class="card shadow-sm rounded-5 mt-5">
                <img src="https://jodyossino.github.io/Apple-Cards/Immagini/air%203+.jpeg" alt="Air pods 3gen" class="rounded-5">
                <div class="card-body text-center">
                  <p class="card-text fs-2 ">AirPods 3°gen</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <button class="btn btn-dark rounded-5" style="font-family: 'Ubuntu', sans-serif; border: none;" type="button"><a href="#"></a>Acquista Ora!</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card shadow-sm rounded-5 mt-md-5">
                <img src="https://jodyossino.github.io/Apple-Cards/Immagini/air%20pro.webp" alt="AirPods Pro" class="rounded-5">
                <div class="card-body text-center">
                  <p class="card-text fs-2 ">AirPods Pro 2°gen</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <button class="btn btn-dark rounded-5" style="font-family: 'Ubuntu', sans-serif; border: none;" type="button"><a href="#"></a>Acquista Ora!</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card shadow-sm rounded-5 mt-md-5">
                <img src="https://jodyossino.github.io/Apple-Cards/Immagini/air%202.jpeg" alt="AirPods 2°gen" class="rounded-5">
                <div class="card-body text-center">
                  <p class="card-text fs-2 ">AirPods 2°gen</p>
                  <button class="btn btn-dark rounded-5" style="font-family: 'Ubuntu', sans-serif; border: none;" type="button"><a href="#"></a>Acquista Ora!</button>
              </div>
            </div>
          </div>
     </div>
  </div>
</div></div>

</body>
</html>