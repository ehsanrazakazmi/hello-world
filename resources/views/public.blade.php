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
    <style>
      .container {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      h1 {
        font-size: 120px;
        text-transform: uppercase;
        font-family: 'Gambetta', serif;
        letter-spacing: -3px;
        transition: 700ms ease;
        font-variation-settings: "wght" 311;
        margin-bottom: 0.8rem;
        color: PaleGoldenRod;
        outline: none;
        text-align: center;
        margin-left: 110px;
      }

      h1:hover {
        font-variation-settings: "wght" 582; 
        letter-spacing: 1px;
      }
      .tm-about-text a { color: #9F6; }

h1, h2, p, i, address, .tm-text-white { color: white; }

.tm-link-gray { color: #999999; }
.tm-link-white { color: white; }

.tm-footer { 
    color: #999999; 
    text-align: center;
}

.tm-container-fluid {
    width: 100%;
    max-width: 970px;
    box-sizing: border-box;
    margin: 0 auto;
    padding: 60px 15px;
}

.tm-site-header { height: 470px; }

.tm-flex-center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.tm-about,
.tm-contact {
    display: flex;
}

.tm-contact { flex-direction: row-reverse; }
.tm-about > div { flex: 1 1; }

.tm-contact-form-container,
.tm-contact-info {
    width: 40%;
}

.tm-contact-info { padding-top: 20px; }
.tm-contact-header { width: 20%; }

.tm-contact-header {
    padding-left: 50px;
    padding-right: 50px;
}

.tm-contact { padding: 50px 20px; }

.tm-contact > div {
    padding-left: 34px;
    padding-right: 34px;
    box-sizing: border-box;
}
input,
textarea,
button {
    display: block;
}

input,
textarea {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1rem;
    background: transparent;
    border: 0;
    border-bottom: 1px solid white;
    color: white;
    padding: 15px 0;
    margin-top: 5px;
    margin-bottom: 5px;
    width: 100%;
}

::-webkit-input-placeholder { color: white; } /* Edge */
:-ms-input-placeholder { color: white; } /* Internet Explorer 10-11 */
::placeholder { color: white; }
.tm-right { margin-right: 0; margin-left: auto; }

.tm-btn-submit {
    background: none;
    color: white;
    font-size: 1rem;
    border: 0;
    cursor: pointer;
    transition: all 0.3s ease;
}

.tm-btn-submit:hover { color: #000000; }

.tm-social-link {
    width: 40px;
    height: 40px;
    margin-right: 15px;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
}

.tm-social-link i {
    color: #99CCCC;
    transition: all 0.3s ease;
}

.tm-social-link:hover i.fa-facebook { color: #3b5998; }
.tm-social-link:hover i.fa-twitter { color: #00acee; }
.tm-social-link:hover i.fa-instagram { color: #3f729b; }
.tm-flex { display: flex; }
address { font-style: normal; }

.filters-button-group {
    text-align: right;
    padding: 0;
    margin: 0; 
}

.filters-button-group li {
    display: inline-block;
    list-style: none;
    margin-left: 40px;
}

.filters-button-group li a.active { color: #F96699; }
.tm-gallery { margin: -10px; }

.tm-gallery-item {
    border-radius: 12px;
    margin: 10px;
    overflow: hidden;
}

.tm-gallery-item a {
    display: block;
    line-height: 0;
}

.tm-gallery-item img {
    width: 220px;
    height: 220px;    
}

@media (max-width: 940px) {
    .filters-button-group { text-align: left; }
}

@media (max-width: 680px) {
    .tm-contact { flex-direction: column; }
    
    .tm-contact-form-container,
    .tm-contact-info,
    .tm-contact-header {
        width: 100%;
    }

    .tm-contact-form-container { margin-bottom: 20px; }
    .tm-contact-info { margin-bottom: 30px; }
}

@media (max-width: 545px) {
    .tm-about { flex-direction: column; }
}

@media (max-width: 489px) {
    .tm-gallery-item {
        width: 48%;
        margin: 1%;
        height: auto;
    }
    
    .tm-gallery-item img {
        width: 100%;
        height: auto;
    }
}

.tm-p-50 { padding: 50px; }
.tm-mb-0 { margin-bottom: 0; }
.tm-mb-30 { margin-bottom: 30px }
.tm-mb-40 { margin-bottom: 40px; }
.tm-mb-50 { margin-bottom: 50px; }
.tm-mb-80 { margin-bottom: 80px; }
.tm-bgcolor-1 { background-color: #F96699; }
.tm-bgcolor-2 { background-color: #38CCCC; }
.tm-bgcolor-3 { background-color: #99CCCC; }
.tm-border-rounded { border-radius: 15px; }
    </style>
  </head>
  <body>
    
    
    <nav class="menu" style="background-color: #43ced3">
      <img class="logo" src="{{asset('images/ali_logo.PNG')}}" alt="logo N/A">
      <ul>
        <a href="{{route('public')}}">
          <li type="button" class="btn mt-3">
            {{-- <strong style="color: black">Home</strong> --}}
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
            src="https://cdn.lordicon.com/slduhdil.json"
            trigger="hover"
            colors="primary:#121331"
            state="hover-3"
            style="width:27px;height:27px">
          </lord-icon>
        </li>
      </a>
      <a href="#S2">
        <li type="button" class="btn mt-3" >
          {{-- <strong style="color: black" >Contact Us</strong> --}}
          <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
          <lord-icon
          src="https://cdn.lordicon.com/nocvdjmh.json"
          trigger="hover"
          colors="primary:#121331"
          style="width:27px;height:27px">
        </lord-icon>
      </li></a>
      <a href="#S3">
        <li type="button" class="btn mt-3">
          {{-- <strong style="color: black">About</strong> --}}
          <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
          <lord-icon
          src="https://cdn.lordicon.com/dnmvmpfk.json"
          trigger="hover"
          colors="primary:#121331"
          style="width:27px;height:27px">
  </lord-icon>
</li>
</a>

<li>
  <div>
    <a href="{{route('login')}}">
      {{-- <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M472 48H40a24.028 24.028 0 0 0-24 24v368a24.028 24.028 0 0 0 24 24h88v-58.822a20.01 20.01 0 0 1 10.284-17.478l91.979-51.123L200 260.919V200a56 56 0 0 1 112 0v60.919l-30.263 75.655l91.979 51.126A20.011 20.011 0 0 1 384 405.178V464h88a24.028 24.028 0 0 0 24-24V72a24.028 24.028 0 0 0-24-24Zm-8 384h-48v-26.822a52.027 52.027 0 0 0-26.738-45.451L321.915 322.3L344 267.081V200a88 88 0 0 0-176 0v67.081l22.085 55.219l-67.347 37.432A52.027 52.027 0 0 0 96 405.178V432H48V80h416Z"/></svg> --}}
      <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
      <lord-icon
      src="https://cdn.lordicon.com/dxjqoygy.json"
      trigger="hover"
      colors="primary:#121331,secondary:#08a88a"
      stroke="35"
      state="hover-nodding"
      style="width:150px;height:150px">
    </lord-icon>
  </a>            {{-- <div class="multi-login-option">
    
    
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
    
  </div> --}}
  
</div>
</li>
</ul>
</nav>
<div class="tasver"> 
{{-- <div class="container-fluid mt-3"> --}}
  <div class="grid-container">
    <div class="grid-item item1">
      {{-- <h2 style="font-family: 'font: 1em sans-serif;'; text-align: center; color: #097746; font-size: 40px; margin-left:100px">Welcome To Gharbar Service Portal</h2> --}}
      <div class="likhaicontain">
            <h1>Welcome to gharbaar service portal</h1>

          </div>
        </div>
        <div class="grid-item item2">
          <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides" src="{{asset('images/1.jpg')}}" style="width:120%">
            <img class="mySlides" src="{{asset('images/imgae.jpg')}}" style="width:120%">
            <img class="mySlides" src="{{asset('images/download.jpeg')}}" style="width:120%">
          </div>
        </div>
        {{-- <div class="grid-item item3">
          <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides" src="{{asset('images/1.jpg')}}" style="width:100%">
            <img class="mySlides" src="{{asset('images/2.jpeg')}}" style="width:100%">
            <img class="mySlides" src="{{asset('images/download.jpeg')}}" style="width:100%">
          </div>
        </div> --}}
        
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
  <section class="tm-about " style="padding: 100px; background-color:#95e2e4"  id="S2">
    <div class="tm-about-header tm-flex-center">
      <i class="fas fa-users fa-2x"></i>
      <h2>General Info</h2>
      <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/ncxoarcp.json"
    trigger="hover"
    colors="primary:#121331"
    style="width:70px;height:70px">
</lord-icon>
    </div>
    <div class="tm-about-text" style="font-size: 15px; color:#2b2fa7">
      {{-- <p >Nano Folio is simple HTML template with a minimal very light-weight custom CSS file. Max content width is 940 pixels. You can easily change the width or any part in this template. Gallery comes with a pop-up image and simple categories.</p>
      <p >Please support Tooplate website by telling your friends about it. That is going to be very helpful for us. Feel free to <a rel="nofollow" href="https://www.tooplate.com/contact" target="_blank">message us</a> via email or live chat if you have anything to say.</p> --}}
    We will Porvide you all the household services you need.
    We can solve all of these problems and connect each individual user (resident of society) to its administration through this portal on 24/7. The management can manage the different activities/issues of the society efficiently. Instead of using different platforms and waste of time in local market, the resident can get all these services at their doorstep. To meet society's daily needs relevant to maintenance, our system effectively and dependably integrates a variety of services for ease of residents.
    </div>
  </section>
    <div>

      <footer id="S3" class="mb-50">
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
              <form action="{{ route ('public.store') }}" method="post">
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