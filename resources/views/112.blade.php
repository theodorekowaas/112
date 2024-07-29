<html>
    <head>
        <title>oneonetwo</title>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="world.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/1cd5c1fdd5.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </link>
    <style>
        * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
    }

    nav{
	font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 15px;
    color: black;
	font-weight:bold;
    
}

.navbar-nav .nav-link {
  color:#fff; /* Change color to white */
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 25px;
}

.navbar-nav .nav-link:hover {
  color:rgb(194, 6, 6); /* Change hover color to a lighter shade of white */
}

    .firstUI{
    width:100%;
	height: 100vh;
    text-align: center;
    }

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);


.slider {
  min-height: 50vh;
  position: relative;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row nowrap;
      -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.slider__nav {
  width: 12px;
  height: 12px;
  margin: 2rem 12px;
  border-radius: 50%;
  z-index: 10;
  outline: 6px solid #ccc;
  outline-offset: -6px;
  box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  cursor: pointer;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.slider__nav:checked {
  -webkit-animation: check 0.4s linear forwards;
          animation: check 0.4s linear forwards;
}
.slider__nav:checked:nth-of-type(1) ~ .slider__inner {
  left: 0%;
}
.slider__nav:checked:nth-of-type(2) ~ .slider__inner {
  left: -100%;
}
.slider__nav:checked:nth-of-type(3) ~ .slider__inner {
  left: -200%;
}
.slider__nav:checked:nth-of-type(4) ~ .slider__inner {
  left: -300%;
}
.slider__inner {
  position: absolute;
  top: 0;
  left: 0;
  width: 400%;
  height: 100%;
  -webkit-transition: left 0.4s;
  transition: left 0.4s;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row nowrap;
      -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
}
.slider__contents {
  height: 100%;
  padding: 2rem;
  text-align: center;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -webkit-flex-flow: column nowrap;
      -ms-flex-flow: column nowrap;
          flex-flow: column nowrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.slider__image {
  font-size: 2.7rem;
      color: #2196F3;
}
.slider__caption {
  font-weight: 500;
  margin: 2rem 0 1rem;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  text-transform: uppercase;
}
.slider__txt {
  color: #999;
  margin-bottom: 3rem;
  max-width: 300px;
}

@-webkit-keyframes check {
  50% {
    outline-color: #333;
    box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
  }
  100% {
    outline-color: #333;
    box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  }
}

@keyframes check {
  50% {
    outline-color: #333;
    box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
  }
  100% {
    outline-color: #333;
    box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  }
}


.video{
width: 100%;
min-height: 100vh ;
position: absolute;
right: 0;
bottom: 0;
z-index: -1;
left: 0;
top: 0;
object-fit: cover;
}

.firstUI h1 {
font-size: 100px;
color: white;
font-weight: 600;
transition: 0.5s;
padding-top: 170px;
font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}


.firstUI h1:hover {
  -webkit-text-stroke: 2px white;
  color: transparent;
}

.firstUI a{
text-decoration: none;
display: inline-block;
color: white;
border: 2px solid white;
padding: 14px 70px;
border-radius: 50px;
margin-top: 50px;
background-color:rgb(194, 6, 6);
font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
font-size: 25px;
}

.secondUI {
  float: left;
  width: 50%;
  min-height: 100vh;
  background-color: #fff;
  border-bottom: 3px solid black;
  border-right: 3px solid black;
  border-top:3px solid black
}


.thirdUI span{
    color:rgb(194, 6, 6); ;
}

.secondUI video{
    width: 300px;
    min-height: 50vh;
    margin-top: 125px;
    margin-left: 220px;
    padding: 10px 10px 10px 10px;
    border-bottom: 3px solid black;
    border-left: 3px solid black;
    border-right: 3px solid black;
    border-radius: 10px;
    transition:0.5s;
    
}


.secondUI video:hover{
  transform: scale(1.1);
  transition: transform 0.5s ease;
}



.thirdUI {
  float: right;
  width: 50%;
  min-height: 100vh;
  background-color: #ebebeb;
  padding-top: 120px;
  border-top: 3px solid black;
}

.thirdUI h1{
    font-size: 55px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight:800;
    margin-left:75px;
}

.thirdUI h3{
    width: 70%;
    margin-left: 50px;
    margin-top: 20px;
    padding-bottom: 10px;
    padding-top: 10px;
    padding-left: 10px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}

iframe{
    margin-top: 30px;
    margin-left: 80px;
}



.fourthUI{
    float: left;
  width: 50%;
  min-height: 100vh;
  background-color: #ebebeb;
  text-align: center;
  padding-top: 50px;
}

.fourthUI h1{
    font-size: 55px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin-top: 35px;
    font-weight: bold;
}
.fourthUI span{
color: rgb(194, 6, 6); ;
}

.fourthUI h4{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    padding-top: 20px;
    font-size: 26px;
}

.fourthUI img{
    width: 450px;
    min-height: 50vh;
    padding-right: 50px;
}

.card{
  transition: 0.5s;
}

.card:hover {
  transform: scale(0.90);
  transition: transform 0.5s ease;
}

.fifthUI{
  float: right;
  width: 50%;
  min-height: 100vh;
  background-color: #ebebeb;
  padding-top: 50px;
  border-bottom:3px solid black;
}

.card-img-top {
  width: 170px;
  height: 150px;
  margin-left: 50px;
}

.row{   
width: 100%;
padding-top: 120px;
padding-left: 150px;
}

.col{
    width: 290px;
    align-items: center;
    
}

.card-title{
    margin-left: 75px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.fifthUI a{
  text-decoration: none;
  color: black;
}

.sixthUI{
  float: left;
  width: 50%;
  min-height: 100vh;
  background-color: #ebebeb;
  text-align: center;
  padding-top: 50px;
  border-right: 3px solid black;
  border-bottom: 3px solid black;
  margin-bottom: 100px;
}



.sixthUI h1{
  padding-top: 150px;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-size: 50px;
  margin-left: 70px;
  margin-bottom: 30px;
}

.sixthUI span{
  color: rgb(194, 6, 6);
}


.sixthUI h3{
  width: 75%;
  margin-left: 120px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  border: 3.5px solid black;
  padding: 10px 10px 10px 10px;
  margin-bottom: 30px;
}

.sixthUI a{
  text-decoration: none;
display: inline-block;
color: white;
border: 2px solid white;
padding: 14px 70px;
border-radius: 50px;
margin-top: 50px;
background-color:rgb(194, 6, 6);
font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
font-size: 25px;
transition: 0.3s;
}

.sixthUI a:hover{
  background-color: black;
  color: rgb(194, 6, 6);
}

.seventhUI{
  float: right;
  width: 50%;
  min-height: 100vh;
  background-color: #fff;
  text-align: center;
  padding-top: 50px;
}

.seventhUI h1{
  padding-top: 20px;
  padding-left: 65px;
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  font-size: 50px;
  font-weight: 600;
}

.seventhUI img{
  width: 300px;
  padding-top: 30px;
  margin-left: 50px;
  display: inline-block;
  border-bottom: 5px solid rgb(194, 6, 6);
  margin-bottom:70px
}

.seventhUI span{
  color: rgb(194, 6, 6);
}

.eightUI{
  width: 100%;
  min-height: 100vh;
  background-color: #fff;
  border-bottom:3px solid black
}



footer{
  width: 100%;
  min-height:39vh;
  margin-bottom: 70PX;
  padding-right: 150px;
  border-top: 5px solid black;
  background: rgb(0,0,0);
background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(148,26,26,1) 0%);

}

@import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600&display=swap');



.outerdiv
{
	width: 100%;
    min-height: 100vh;
    background: #EDF2F8;
    display: flex;
    align-items: center;
    justify-content: center;
}
.innerdiv
{
	transform: scale(0.9);
	margin: 1rem;
	display: grid;
	grid-gap: 1.5rem;
	grid-template-rows: repeat(2,22rem);
	grid-template-columns: repeat(4,17rem);
}
.eachdiv
{
	padding: 1rem 2rem;
    border-radius: 0.8rem;
    box-shadow: 5px 5px 20px #6d6b6b6b;
    color: white;
}
.div1
{
	background: #733FC8;
    grid-column: 1/3;
    grid-row: 1/2;
    background-image: url(https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/bg-pattern-quotation.svg);
    background-repeat: no-repeat;
    background-position-x: 25rem;
}
.div2
{
	background:#49556B;
    grid-column: 3/4;
    grid-row: 1/2;
}
.div3
{
	background: white;
    grid-column: 4/5;
    grid-row: 1/3;
    color: black;
}
.div4
{
	background: white;
	grid-column: 1/2;
    grid-row: 2/3;
    color: black;
}
.div5
{
	background: #18202D;
	grid-column: 2/4;
    grid-row: 2/3;
}
.userdetails
{
	display: flex;
}
.imgbox
{
	margin-right: 1rem;
}
.imgbox img
{
	border-radius: 50%;
	width: 2rem;
	border: 2px solid #cec5c5;
}
.detbox
{
	display: flex;
    flex-direction: column;
    justify-content: center;
}
.detbox p
{
	margin: 0;
}
.detbox .name
{
	color: hsl(0, 0%, 81%);
    font-size: 0.9rem;
    margin-bottom: 0.1rem;
    font-weight: 600;
}
.detbox .name.dark
{
	color: #49505A;
}
.detbox .designation
{
	color: hsl(0, 0%, 81%);
    opacity: 50%;
    font-size: 0.8rem;
}
.detbox .designation.dark
{
	color: #49505A;
}
.review h4
{
	font-size: 1.4rem;
	color: #F3DEFF;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: 0.8rem;
}
.review.dark h4{
	color:#4B5258;
}
.review p
{
	font-size: 0.95rem;
    color: #F3DEFF;
    font-weight: 500;
    opacity: 50%;
    line-height: 1.5;
}
.review.dark p{
	color: #0e0e0e;
}

.attribution a
{
	text-decoration: none;
}

@media only screen and (max-width: 1000px)
{
	.innerdiv
	{
		transform: scale(0.7);
	}
}
@media only screen and (max-width: 800px)
{
	.innerdiv
	{
		transform: scale(0.6);
	}
}
@media only screen and (max-width: 600px)
{
	.div1 {
		background-position-x: 10rem;
	}
  
	.innerdiv
	{
		display: flex; 
		flex-direction: column;
		transform: scale(1);
		margin: 2rem;
		margin-bottom: 5rem;
	}
	.attribution
	{
		position: relative;
	}
}

.panel h1{
  width:100%;
  text-align:center;
  padding-bottom:50px;
  font-family:'Courier New, Courier, monospace';
  padding-top:20px;
} 




 </style>

    </head>
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
          <strong style="color: #fff; font-size: 23px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; padding-right: 30px;">112</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                target="_blank">HELP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">ABOUT US</a>
            </li>
            @auth

              <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Halo, {{ auth()->user()->username }}
          </a>
        </li>
       
            @else
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="/login">LOGIN</a>
            </li>
            @endauth
          </ul>
  
          <ul class="navbar-nav list-inline">
            <!-- Icons -->
            @auth
      
            <li class="nav-item active">
            <form action="/logout" method="post">
              @csrf
            <button type="submit" class="nav-link" style="background-color: transparent; border: none;"><i class="bi bi-box-arrow-in-right"></i>Logout</button>
            </form>
            </li>
            @endauth
            
          </ul>
        </div>
      </div>
    </nav>
    <div class="firstUI">
        <h1>112<br>What's your emergency?  </h1>
        <a href="tel:112">SOS</a>
        <video loop muted autoplay class="video">
          <source src="/112/jakarta.mp4" type="video/mp4">
        </video>
    </div>

    <div class="slider">
  <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
  <input type="radio" name="slider" title="slide2" class="slider__nav"/>
  <input type="radio" name="slider" title="slide3" class="slider__nav"/>
  <input type="radio" name="slider" title="slide4" class="slider__nav"/>
  <div class="slider__inner">
    <div class="slider__contents"><i class="slider__image fa-solid fa-house"></i>
      <h2 class="slider__caption">112</h2>
      <p class="slider__txt">Stay safe and keep calm. In case of emergency, dial 112 and let the professionals handle it!</p>
    </div>
    <div class="slider__contents"><i class="slider__image fa-solid fa-star"></i>
      <h2 class="slider__caption">Services</h2>
      <p class="slider__txt">With highly trained professionals and cutting-edge technology, 112 ensures that help is just a phone call away</p>
    </div>
    <div class="slider__contents"><i class="slider__image fa fa-television"></i>
      <h2 class="slider__caption">television</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><i class="slider__image fa fa-diamond"></i>
      <h2 class="slider__caption">diamond</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
  </div>
</div>

    <div class="secondUI">
        <video loop muted autoplay>
            <source src="/112/phone.mp4" type="video/mp4">  </video>
        </div>

    <div class="thirdUI">
        <h1><span>112</span> INDONESIA</h1>
        <h3><span>112</span> is the national emergency service in Indonesia. 
            It provides a quick and easy way to request assistance from the police, fire department, or medical services during an emergency situation. 
            </h3>
            <iframe width="460" height="215" src="https://www.youtube.com/embed/6PyZmIhFjmY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="fourthUI">
        <h1>What's your <span>emergency?</span></h1>
        <h4>
            <span>112</span> provides you with a 24-hour service<br> that ready to assist your <span>emergency</span> needs.</h4>
        <img src="/112/provide.png">
    </div>
    <div class="fifthUI">
        <div class="row row-cols-1 row-cols-md-2 g-2">
            <div class="col">
              <div class="card">
                <img src="/112/police.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="https://dumaspresisi.polri.go.id/">  <h5 class="card-title">POLICE</h5></a>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/112/ambulance.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="https://upk.kemkes.go.id/new/layanan/telemedisin">  <h5 class="card-title">MEDIC</h5></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/112/damkar.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="https://sippn.menpan.go.id/pelayanan-publik/8146401/dinas-pemadam-kebakaran-dan-penyelamatan/pelayanan-pemadaman-kebakaran">  <h5 class="card-title">FIREFIGHTER</h5></a>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/112/sar.png" class="card-img-top" alt="...">
                <div class="card-body">
                <a href="https://basarnas.go.id/p/sistem-komunikasi">  <h5 class="card-title">BASARNAS</h5></a>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="sixthUI">
      <h1><span>REPORT</span> 112</h1>
      <h3>
          <span>Let us know </span> if you have any complaints or suspicions about the environment in<br> which you are located.</h3>
          <a href="/report">REPORT NOW</a>
    </div>
    <div class="seventhUI">
      <h1>Tell us your concern<br> we are <span>ready to help.</span></h1>
      <img src="/112/phone4.png" alt="">

      

    </div>
    
    <div class="eightUI">
    <div class="outerdiv">
    <div class="innerdiv">
      <!-- div1 -->
      <div class="div1 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-daniel.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name">Kevin Bujani</p>
            <p class="designation">Verified Graduate</p>
          </div>
        </div>
        <div class="review">
          <h4>I was in a dire situation and didn't know who to turn to.</h4>
        <p>“I called 112 and was amazed at how quickly they responded. The website was also very helpful in providing me with all the necessary information I needed to stay safe. I recently used the 112 service during a natural disaster, and I was blown away by how organized and efficient their response was. The website provided real-time updates and alerts, which helped me stay informed and prepared. I feel safer knowing that this service is available to me.”</p>
        </div>
      </div>
      <!-- div2 -->
      <div class="div2 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jonathan.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name">Sujono</p>
            <p class="designation">Verified Graduate</p>
          </div>
        </div>
        <div class="review">
          <h4>I've never felt so relieved as when I called 112 during a dangerous situation.</h4>
        <p>“They were able to provide me with the help I needed and the website was extremely helpful.”</p>
        </div>
      </div>
      <!-- div3 -->
      <div class="div3 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-kira.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name dark">Kirana</p>
            <p class="designation dark">Verified Graduate</p>
          </div>
        </div>
        <div class="review dark">
          <h4>The team at 112 was fantastic!</h4>
          <p>“They handled my emergency with the utmost care and were able to send help quickly. The website was also very informative and provided me with valuable resources that I didn't know existed. The website provided real-time updates and alerts, which helped me stay informed and prepared. I feel safer knowing that this service is available to me.I highly recommend this service to anyone in need of emergency assistance. The operators were professional and efficient, and the website was user-friendly and informative. Keep up the good work, 112!”</p>
        </div>
      </div>
      <!-- div4 -->
      <div class="div4 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jeanette.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name dark">Mahendra Desta</p>
            <p class="designation dark">Verified Graduate</p>
          </div>
        </div>
        <div class="review dark">
          <h4>An overall wonderful and rewarding experience</h4>
        <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ”</p>
        </div>
      </div>
      <!-- div5 -->
      <div class="div5 eachdiv">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-patrick.jpg" alt="">
          </div>
          <div class="detbox">
            <p class="name">Raffi Ahmad</p>
            <p class="designation">Verified Graduate</p>
          </div>
        </div>
        <div class="review">
          <h4>Good Job,Government.</h4>
        <p>“It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. ”</p>
        </div>
      </div>
    </div>
  </div>
    </div>

    </div>

    <div class="panel">
      
    <h1>Public Services in Indonesia<h1>

        <div id="ChartNilai">
              
        </div>
      </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
     // Data retrieved from https://netmarketshare.com
Highcharts.chart('ChartNilai', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'July,2022',
        align: 'center'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Frequency Used',
        colorByPoint: true,
        data: [{
            name: '112 Center',
            y: 16.6,
            sliced: true,
            selected: true
        }, {
            name: 'Online Pasport',
            y: 16.6
        },  {
            name: 'E-SAMSAT',
            y: 16.6
        }, {
            name: 'E-Billing',
            y: 16.6
        }, {
            name: 'Online BPJS Registration',
            y: 16.6
        },  {
            name: 'LAPOR',
            y: 16.6
        }]
    }]
});
    </script>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>About Us</h3>
            <p>We understand the critical importance of swift and efficient emergency response in times of crisis. As the primary point of contact for emergency situations nationwide,<br> our highly trained team is committed to providing immediate assistance and support to those in need.<br> Whether you're facing a medical emergency, natural disaster, or any other urgent situation, you can rely on 112 to deliver prompt and professional assistance 24/7.</p>
          </div>
          <div class="col-md-3">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About US</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Sign Up</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Contact Us</h3>
            <p>123 Main Street<br>Indonesia<br>Phone: (112)<br>Email: info@example.com</p>
          </div>x
        </div>
      </div>
    </footer>
    
    
  </body>
    
</html>