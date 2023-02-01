<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gharbaar Services Portal</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @vite(['resources/scss/app.scss','resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    
    
    <div class="tasver"> 
      <nav class="menu" style="background-color: #62d343">
        <img class="logo" src="{{asset('images/ali_logo.PNG')}}" alt="logo N/A">
        <ul>
          <li type="button" class="btn mt-3">
          <strong style="color: black">Home</strong>
        </li>
        <li type="button" class="btn mt-3">
          <strong style="color: black">Services</strong>
        </li>
        <li type="button" class="btn mt-3">
          <strong style="color: black">About</strong>
        </li>
        
        <li>
          <div class="iccon">
            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M472 48H40a24.028 24.028 0 0 0-24 24v368a24.028 24.028 0 0 0 24 24h88v-58.822a20.01 20.01 0 0 1 10.284-17.478l91.979-51.123L200 260.919V200a56 56 0 0 1 112 0v60.919l-30.263 75.655l91.979 51.126A20.011 20.011 0 0 1 384 405.178V464h88a24.028 24.028 0 0 0 24-24V72a24.028 24.028 0 0 0-24-24Zm-8 384h-48v-26.822a52.027 52.027 0 0 0-26.738-45.451L321.915 322.3L344 267.081V200a88 88 0 0 0-176 0v67.081l22.085 55.219l-67.347 37.432A52.027 52.027 0 0 0 96 405.178V432H48V80h416Z"/></svg>
            <div class="multi-login-option">
              
              
              <form action="{{route('adminpanel')}}"method='get'>
                @csrf
                <button class="asd" type="submit">Admin</button>
              </form>
              
              <form action="{{route('home')}}"method='get'>
                @csrf
                <button class="asd" type="submit">Resident</button>
              </form>
              
              <form action="{{route('technicianpanel')}}"method='get'>
                @csrf
                <button class="asd" type="submit">Technician</button>
              </form>
              
            </div>
            
          </div>
        </li>
      </ul>
    </nav>
  {{-- <div class="container-fluid mt-3"> --}}
      <div class="grid-container">
        <div class="grid-item item1">
          <h2 style="font-family: 'font: 1em sans-serif;'; text-align: center; color: #097746;">Public Page</h2>
        </div>
        <div class="grid-item item2">
          <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides" src="{{asset('images/1.jpg')}}" style="width:100%">
            <img class="mySlides" src="{{asset('images/2.jpeg')}}" style="width:100%">
            <img class="mySlides" src="{{asset('images/download.jpeg')}}" style="width:100%">
          </div>
        </div>
        <div class="grid-item item3">
          <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides" src="{{asset('images/1.jpg')}}" style="width:100%">
            <img class="mySlides" src="{{asset('images/2.jpeg')}}" style="width:100%">
            <img class="mySlides" src="{{asset('images/download.jpeg')}}" style="width:100%">
          </div>
        </div>

      </div>
      
      
      {{-- </div> --}}
        
      <script>
      var myIndex = 0;
      carousel();
      
      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
      }
      </script>
  </div>
 
    <div>

      <footer>
        <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>Ghar Bar service is the official portal of the society {the one the main branches of multi_Gargen societies}</p>
            We will update the resident and all connected peoples about our upcoming packages and Jobs opportunities through this portal. will try to to communicate our residents through complaint portal.
            <div class="social">
                <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
                <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
              </div>
            </div>
          </div>
          <div class="center box">
            <h2>Address</h2>
            <div class="content">
              <div class="place">
                <span class="fas fa-map-marker-alt"></span>
                <span class="text">GT Road , Wah Cantt</span>
              </div>
              <div class="phone">
                <span class="fas fa-phone-alt"></span>
                <span class="text">+92355644115</span>
              </div>
              <div class="email">
                <span class="fas fa-envelope"></span>
                <span class="text">city@society.com</span>
              </div>
            </div>
          </div>
          <div class="right box">
            <h2>Contact us</h2>
            <div class="content">
              <form action="#" method="post">
                @csrf
                {{-- <div class="email">
                  <div for="email" class="text" >Email *</div>
                  <input type="email" id="email">
                </div>
                <div class="msg">
                  <div for="msg" class="text">Message *</div>
                  <textarea id="msg" rows="2" cols="25" required></textarea>
                </div>
                <div class="btn">
                  <button type="submit" class="btn btn-success">Send</button>
                </div> --}}
                <div class="email">
                <label for="email" class="text"> Email &nbsp;</label>
                <input type="text" id="email" name="email" placeholder="email" >
              </div>
              <div class="msg">
                <label for="msg" class="text"> Message &nbsp;</label>
                <input type="text" id="msg" name="msg" placeholder="Type your message here" >
              </div>
              <br>

              <div class="btn-primary">
                <input type="submit" value="Submit" class="btn btn-success">
              </div>
              </form>

            </div>
            
          </div>
        </div>
        <div class="bottom">
          
        </div>
      </footer>
    </div>
      
  </body>
</html>