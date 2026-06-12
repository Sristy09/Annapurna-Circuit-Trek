<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Website</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>T</span>rek</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallary.php">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About ACT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#book">Contact Us</a>
             
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- Navbar End -->
    <!-- Home Section Start -->
    <div class="home">
        <div class="content">
            <h5>Welcome To Annapurna Circuit Trek</h5>
            <p>Namastey everyone! This is the official page where you guys can get information about Annapurna
              Circuit Trek. You can plan your trek with the information you gather through our website.
              Also, you can book the trek and look up to all the information you'll get throughout the
               trek.</p>
            <a href="#book">Contact Us</a>
        </div>
    </div>
    <section class="gallary" id="gallary">
      <div class="container">
        <div class="main-txt">
          <h1><span>G</span>allary</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/pp1.jpeg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/pp2.jpeg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/pp3.jpg" alt="" height="230px">
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/pp4.jpeg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/pp5.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/pp6.jpeg" alt="" height="230px">
            </div>
          </div>
        </div>
        <button id="about-btn"><a href="gallary.php">view more..</a></button>
        <!-- <button id="about-btn"> more..</button> -->
      </div>
    </section>
    
    <section class="about" id="about">
      <div class="container">
        <div class="main-txt">
          <h1>ABOUT TREK IN NEPAL</h1>
        </div>
        <div class="row" style="margin-top: 50px;">
          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./images/pp1.jpeg" alt="">
            </div>
          </div>
          <div class="col-md-6 py-3 py-md-0">
            <h2>TREKKING IN NEPAL </h2>
            <p>Trekking in Nepal is an extraordinary adventure that transcends the boundaries of ordinary travel, offering a mesmerizing journey through the heart of the Himalayas. Nestled between the towering peaks of the world's highest mountains, Nepal's trekking trails present a diverse tapestry of landscapes, from lush green valleys to rugged alpine terrain. The Annapurna and Everest regions, among others, beckon intrepid trekkers with the promise of breathtaking panoramas, serene alpine lakes, and encounters with remote mountain <br><br>

              Embarking on a trek in Nepal is not merely a physical challenge; it is a spiritual and cultural odyssey. The trails are adorned with ancient monasteries, prayer flags fluttering in the mountain breeze, and vibrant Sherpa villages where hospitality knows no bounds. Each step seems to echo with the rich tapestry of Nepal's history and the indomitable spirit of its people. Along the way, trekkers forge connections with the local inhabitants, gaining insights into their traditional way of life and sharing in the warmth of their simple mountain <br> <br>
              
              Moreover, the trekking routes in Nepal cater to a wide spectrum of adventurers, from novice hikers to seasoned mountaineers. Whether navigating the famous Annapurna Circuit, conquering the challenging trails to Everest Base Camp, or exploring the less-traveled paths of Langtang, each trek offers a unique blend of natural beauty and cultural immersion. The allure of Nepal's trekking trails lies not only in the awe-inspiring landscapes but also in the profound sense of accomplishment that comes from conquering the high-altitude challenges. Ultimately, a trek in Nepal is a transformative experience that transcends the physical journey, leaving indelible memories etched against the backdrop of the majestic Himalayas.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="book" id="book">
      <div class="container">
        <div class="main-text">
          <h1><span>Contact </span>Us</h1>
        </div>
        
        <div class="row">
          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./images/pp13.jpeg" alt="">
            </div>
          </div>
          <div class="col-md-6 py-3 py-md-0">
            <form action="database.php" method="post">
              <input type="text" class="form-control" name="name" placeholder="Name" required><br>
              <input type="number" class="form-control" name="age" placeholder="Age" required><br>
              <input type="text" class="form-control" name="email" placeholder="Email" required><br>
              <input type="tel" class="form-control" name="phone" placeholder="Phone" required><br>
              <input type="submit" value="Submit" class="submit">
            </form>
          </div>
        </div>
      </div>
    </section>
   
    <footer id="footer">
      <h1><span>T</span>rek</h1>
      <p>You can directly contact us on other platform too!</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-pinterest-p"></i>
      </div>

      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>