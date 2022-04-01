<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="body.css">
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <script src="index.js"></script>


<title>online shopping site for everything!!!!</title>
</head>
<!-- .......................CSS................................ -->
<style>
*{
    padding: 0;
    margin: 0;
    color: black;
}
 .flex-all-center{
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
} 
/* .pro{
    background-color:red;
    height: 1.5px;
    animation: width 3s linear   forwards;
} */
 /* @keyframes width {
    0%{
        width: 50%;
    }
    60%{
        width: 70%;
    }
    80%{
        width: 100%;
    }
    
}  */ 
/* nav bar1 starts */
header{
    background-color:black;
}

nav{
    display: flex;
}
nav ul{
    height: 58px;
    display: flex;
    
    justify-content: flex-start;
    align-items: center;

}
nav ul li{
    list-style: none;
    /* display:inline-flex; */
    /* align-items: center */
}
.logo{
    display: flex;
    align-items: center;
}
.logo img{
    padding-top: 10px;
    padding-right: 30px;
    padding-left: 12px;
   
    
} 
ul li a{
    text-decoration: none;
    padding: 20px 20px;
    color: white; 
    
}
li a:hover{
    color: grey;
    
}
 .active {
     background-color: darkblue;
   
}

.search{
    position: relative;
    left: -85px;
    display: flex;
    align-items: center;
    font-family: "Amazon Ember",Arial,sans-serif;
    
    
    
}
.search input[type=text]{
    padding: 7px;
    width: 630px;
}
 .fsearch {
     /* display: flex; */
   position: relative;
   left: -17px;
    padding: 9px;
    background: rgba(255, 166, 0, 0.973);
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    border-radius: 6px;
    font-family: "Amazon Ember",Arial,sans-serif;
  }
  .fsearch:hover {
    background-color: orange;
  }
  .drop{
      position: relative;
      left: -618px;
      top:26px;
     
  }
  
   

  .flag{
    position: relative;
    left: -620px;
    top:26px;
  }
  .order{
    display: flex;
    align-items: center; 
    text-align: center;
    position: relative;
    right: 780px;
    top: 5px;
    width: 100px;
    height: 26px;
    margin: 17px 26px 17px 400px;
    border-radius: 6px;
    background-color:black;
    color:white;
    font-size:medium;
    border: black;
    padding: 15px;
    cursor: pointer;
    font-family: "Amazon Ember",Arial,sans-serif;

    
  }
 
  .order:hover{
    border: 2px solid white;
   
}


.cart{
    display: flex;
    align-items: center; 
    text-align: center;
    position: relative;
    right: 1096px;
    top: 5px;
    width: 100px;
    height: 26px;
    margin: 17px 26px 17px 400px;
    border-radius: 6px;
    background-color:black;
    color:white;
    font-size:medium;
    border: black;
    padding: 15px;
    cursor: pointer;
    font-family: "Amazon Ember",Arial,sans-serif;
    
  }
  .cart:hover{
    border: 2px solid white;
   
}
#cart{
    position: relative;
    right: 700px;
    width: 40px;
    /* top: 5px; */
    

}

  
  


.btn{
    width: 60px;
    height: 26px;
    border-radius: 6px;
    color: black;
    cursor: pointer;
    
}
.btn2{

    display: flex;
    align-items: center; 
    text-align: center;
    position: relative;
    right: 332px;
    top: 5px;
    width: 125px;
    height: 26px;
    margin: 17px 26px 17px 400px;
    border-radius: 6px;
    color:white;
    font-size: medium;
    background-color:black;
    border: black;
    padding: 15px;
    cursor: pointer;
    
}
.btn2:hover{
    border: 2px solid white;
   
}

   



.btn3{
    display: flex;
    align-items: center;
    width: 65px;
    height: 26px;
    margin: 17px 100px 17px auto;
    border-radius: 6px;
    color: blue;
    background-color: white;
    padding: 12px;
    cursor:pointer;
}
.search input{

    width: 280px;
    height: 25px;
    border-radius: 5px;
    margin: 0px 20px 0px 60px;
    padding: 0px 12px;
    color: black;
}
/* nav bar 1 ends */

/* nav bar 2 */


.nav2{
    width: 1519px;
    height: 50px;
    background-color:rgba(0, 0, 0, 0.158);
}
.sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:white;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font: medium;
    color: rgba(0, 0, 0, 0.808);
    display: block;
    transition: 0.3s;
  }
  
  .sidebar a:hover {
    background-color: gainsboro;
    text-decoration: none;
  }
  
  .sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  h4{
      color:black;
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      
      display: block;
      transition: 0.3s;
  }
  
  .openbtn {
    position: relative;
    left: -8px;
    top: -15px;
    font:medium;
    cursor: pointer;
    background-color: #111;
    color: white;
    padding: 10px 15px;
    border: none;
  }
  
  .openbtn:hover {
    background-color: #444;
    border: 1px solid white;
  }
  
  #main {
    transition: margin-left .5s;
    padding: 16px;
  }
  
  /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
  @media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .sidebar a {font-size: 18px;}
  }

  /* nav bar2 end */

 .container{
 min-height: calc(100vh - 10vh - 90px);
} 





   
footer{
    background-color: black;
    height: 10vh;
    
}
footer a{
   color: white;
}
/* added css */

.content{
  height: 400px;
  width: 1467px;
  position: relative;
  left: 27px;
  overflow: hidden;
  box-shadow: 1px 1px 15px rgba(0,0,0,0.4);
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
.content .images{
  height: 100%;
  width: 100%;
}
.images img{
  height: 100%;
  width: 100%;
  cursor: pointer;
}


.car{
    max-width: 91vw;
    margin: 20px 40px ;
    
}
.cards{
  display: flex;
  overflow-x: scroll;
  
}
.card-item {
  display: inline-flex;
  justify-content: center;
  flex-direction: column;
  margin: 10px 55px;
  cursor: pointer;
}
.lines p{
   display: flex;
   justify-content: center;
   
}

/* back to top button css */
#myBtn{
     width: 100%;
     background-color: #007185;
     height: 40px;
     color: white;
     cursor: pointer;
}
#myBtn:hover{
  background-color:gray;
}
.navFooterColHead{
  color: white;
  display: inline-block;
}

.row{
  
  display: flex;
  justify-self: flex-start;
  padding:40px 348px;
  background-color: #0F1111;
 
  
}
.column ul li{
 list-style: none;

  font-size: 14px;
  line-height: 20px;
  font-family: "Amazon Ember",Arial,sans-serif;
  
}
ul li a{
  color:rgba(255, 255, 255, 0.733) ;
}
h4{
  color: white;
  position: relative;
  left: -13px;
  font-size: 18px;
  line-height: 20px;
  font-family: "Amazon Ember",Arial,sans-serif;
}
 a:hover{
  text-decoration:underline ;
}

p a{
  text-decoration: none;
}

</style>
<!--............................ css ends here............................... -->
<body>
    <header>
        <nav>
            <div class="logo">
               <a href="index" ><img src="{{URL('images/amazon.png')}}" alt="" width="130px"></a>
            </div>
            <div class="search">
                <input type="text" placeholder="search here">
                <button class="fsearch"  onclick="refreshPage()">&#128269</button>
            </div>
            <div class="login">
                <button class="btn2" onclick="window.location.href='login'">login/signup</button>
               
            </div>
            <div class="flag">
                <!-- <img src="images/Flag-India.jpg" alt="" width="30px"> -->
                <img src="{{URL('images/Flag-India.jpg')}}" alt="" width="30px">
            </div>
            <div class="drop">

                <select name="cars" id="cars">

                    <option value="AF">EN</option>
                    <option value="AL">HI</option>
                    <option value="DZ">TA</option>
                    <option value="DZ">TE</option>
                    <option value="DZ">KN</option>
                    <option value="DZ">ML</option>
                    <option value="DZ">MR</option>
                    <option value="DZ">BN</option>


                </select>
            </div>
            
            <button class="order" onclick="window.location.href='orders'"> Orders</button>
            <img id="cart" src="images/cartt.png" alt="">
            <button class="cart" onclick="window.location.href='cart'">Cart</button>




        </nav>
        <!-- second nav -->
        <div class="nav2">
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <h4 style="color: black;padding-left: 42px;">Trending</h4>
                <a href="#">Best Sellers</a>
                <a href="#">New releases</a>
                <a href="#">Movers and Shakers</a><hr>
                <h4 style="color: black;padding-left: 42px;">Shop by Department</h4>
                <a href="#">Mobiles, Computers</a>
                <a href="#">Tv, Appliances, Electronics</a>
                <a href="#">Women's Fashion</a>
                <a href="#">Men's Fashion</a><hr>
                <h4 style="color: black;padding-left: 42px;">Programs & Features</h4>
                <a href="#">Gift card & Mobile Recharges</a>
                <a href="#">Flight Tickets</a>
                <a href="#">#FoundItOnAmazon</a>
                <a href="#">Amazon Outlet</a><hr>
                <h4 style="color: black;padding-left: 42px;">Help & Settings</h4>
                <a href="contact">Contact</a>
                <a href="#">About</a>
                <a href="signup">Sign-out</a>
              </div>
              
              <div id="main">
                <button class="openbtn" onclick="openNav()">☰ All</button>
                <button class="openbtn" onclick="refreshPage()">Fresh</button>
                <button class="openbtn" onclick="refreshPage()">Amazon Pay</button>
                <button class="openbtn" onclick="refreshPage()">Gift Cards</button>
                <button class="openbtn" onclick="refreshPage()">Best Sellers</button>
                <button class="openbtn" onclick="refreshPage()">Browsing History</button>
                <button class="openbtn" onclick="refreshPage()">Kindle eBooks</button>
                <button class="openbtn" onclick="refreshPage()">Buy Again</button>
                <button class="openbtn" onclick="refreshPage()">Baby</button>
                <button class="openbtn" onclick="refreshPage()">Pet Supplies</button>
                <button class="openbtn" onclick="refreshPage()" >Gift ideas</button>
               <button class="openbtn"  onclick="refreshPage()"><img src="images/prime.jpg" alt="" width="55px"></button>
               <button class="openbtn"  onclick="refreshPage()"><img src="images/amlogo.jpg" alt="" width="20px">    Shopping made easy | Download the app</button>
                
                
              </div>
              
              
              
        </div>
        

    </header>

   



<main>
    <br>
    <div class="container"> 
        <div class="content">
            <div class="images fade" class="openbtn" onclick="refreshPage()">
                <img  src="images/slide1.jpg">
            </div>

            <div class="images fade" class="openbtn" onclick="refreshPage()">    
                <img src="images/slide2.jpg">
            </div>
            <div class="images fade" class="openbtn" onclick="refreshPage()">
                <img src="images/slide3.jpg">
            </div>
            <div class="images fade" class="openbtn" onclick="refreshPage()">
                <img src="images/slide4.jpg">
            </div>
            <div class="images fade"class="openbtn" onclick="refreshPage()">
                <img src="images/slide5.jpg">
            </div>
            <div class="images fade" class="openbtn" onclick="refreshPage()">
                <img src="images/slide6.jpg">
            </div>
            <div class="images fade" class="openbtn" onclick="refreshPage()">
                <img src="images/slide7.jpg">
            </div>
            <div class="images fade" class="openbtn" onclick="refreshPage()">
                <img src="images/slide8.jpg">
            </div>
            <div class="images fade" class="openbtn" onclick="refreshPage()">
                <img src="images/slide9.jpg">
            </div>
            <div class="images fade" class="openbtn" onclick="refreshPage()">
                <img src="images/slide10.jpg">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div> 
        
         <!-- <div class="categories1">
           <img src="images/cards1.png" alt="" width="300px">
        </div>
        <a id="i1" href="#">Explore more from Amazon Pay</a> -->
        <!-- <div class="categories2">
            <img src="images/cards2.png" alt="" width="300px">
         </div>
         <a id="i2" href="#">See more</a>
        <div class="categories3">
            <img src="images/cards3.png" alt="" width="300px">
        </div>
         <a id="i3" href="#">See more</a>
         <div class="categories4">
            <img src="images/cards4.png" alt="" width="300px">
        </div>
         <a id="i4" href="#">See more</a> -->

         <div class="car">
            <h2>Best of Electronics</h2>
            <h5>Devices and Accessories</h5>
        </div>
        <div class="cards">
            <div class="card-item">
                <img src="images/pic10.jpeg" alt="" width="130px">
                <div class="lines">
                    <p>samsung</p>
                    <p>up to 40% off</p>
                    <!-- <p>click to add cart</p> -->
                    <button id="click" onclick="myFunction1()" style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart </button>

                    <script>
                        function myFunction1() {
                            document.getElementById("click").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pic09.jpeg" alt="" width="130px">
                <div class="lines">
                    <p>samsung</p>
                    <p>up to 30% off</p>
                    <button id="clic" onclick="myFunction2()" style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction2() {
                            document.getElementById("clic").innerHTML = "added to cart successfully";

                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pic11.jpeg" alt="" width="130px">
                <div class="lines">
                    <p>oppo</p>
                    <p>flat 3000 off</p>
                    <button id="click1" onclick="myFunction3()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction3() {
                            document.getElementById("click1").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pic12.jpeg" alt="" width="130px">
                <div class="lines">
                    <p>oneplus</p>
                    <p>up to 40% off</p>
                    <button id="click2" onclick="myFunction4()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction4() {
                            document.getElementById("click2").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pic13.jpeg" alt="" width="130px">
                <div class="lines">
                    <p>oppo</p>
                    <p>up to 20% off</p>
                    <button id="click3" onclick="myFunction5()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction5() {
                            document.getElementById("click3").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pic14.jpeg" alt="" width="130px">
                <div class="lines">
                    <p>lenevo</p>
                    <p>up to 40% off</p>
                    <button id="click4" onclick="myFunction6()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction6() {
                            document.getElementById("click4").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pic15.jpeg" alt="" width="130px">
                <div class="lines">
                    <p>vivo</p>
                    <p>up to 10% off</p>
                    <button id="click5" onclick="myFunction7()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction7() {
                            document.getElementById("click5").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pic16.jpeg" alt="" width="130px">
                <div class="lines">
                    <p>redmi</p>
                    <p>up to 50% off</p>
                    <button id="click6" onclick="myFunction8()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction8() {
                            document.getElementById("click6").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pic17.jpeg" alt="" width="130px">
                <div class="lines">
                    <p>oneplus</p>
                    <p>up to 40% off</p>
                    <button id="click7" onclick="myFunction9()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction9() {
                            document.getElementById("click7").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>

        </div>
        <div class="car">
            <h2>BEST BRANDED SHOES HERE!!! </h2>
            <h5>sports and casual </h5>
        </div>
        <div class="cards">
            <div class="card-item">
                <img src="images/pi1.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>adidas</p>
                    <p>up to 40% off</p>
                    <button id="click8" onclick="myFunction01()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction01() {
                            document.getElementById("click8").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pi2.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>nike</p>
                    <p>up to 20% off</p>
                    <button id="click9" onclick="myFunction02()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction02() {
                            document.getElementById("click9").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pi3.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>sparkx</p>
                    <p>up to 40% off</p>
                    <button id="click01" onclick="myFunction03()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction03() {
                            document.getElementById("click01").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pi4.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>layasa</p>
                    <p>up to 70% off</p>
                    <button id="click02" onclick="myFunction04()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction04() {
                            document.getElementById("click02").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pi5.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>nike</p>
                    <p>up to 30% off</p>
                    <button id="click03" onclick="myFunction05()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction05() {
                            document.getElementById("click03").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pi6.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>sparkx</p>
                    <p>up to 40% off</p>
                    <button id="click04" onclick="myFunction06()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction06() {
                            document.getElementById("click04").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pi7.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>adidas</p>
                    <p>up to 10% off</p>
                    <button id="click05" onclick="myFunction07()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction07() {
                            document.getElementById("click05").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pi8.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>bata</p>
                    <p>up to 60% off</p>
                    <button id="click06" onclick="myFunction08()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction08() {
                            document.getElementById("click06").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/pi9.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>adidas</p>
                    <p>up to 20% off</p>
                    <button id="click07" onclick="myFunction09()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction09() {
                            document.getElementById("click07").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>


        </div>
        <div class="car">
            <h2>MENS BRANDED SHIRTS</h2>
            <h5>Bare and Flying machine</h5>
        </div>
        <div class="cards">
            <div class="card-item">
                <img src="images/p1.jpeg" alt="" width="180px">
                <div class="lines">
                    <p>bare</p>
                    <p>up to 40% off</p>
                    <button id="click08" onclick="myFunction001()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction001() {
                            document.getElementById("click08").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/p2.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>flying machine</p>
                    <p>up to 30% off</p>
                    <button id="click09" onclick="myFunction002()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction002() {
                            document.getElementById("click09").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/p3.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>flying machine</p>
                    <p>up to 10% off</p>
                    <button id="click001" onclick="myFunction003()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction003() {
                            document.getElementById("click001").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/p4.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>bare</p>
                    <p>up to 20% off</p>
                    <button id="click002" onclick="myFunction004()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction004() {
                            document.getElementById("click002").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/p5.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>flying machine</p>
                    <p>up to 30% off</p>
                    <button id="click003" onclick="myFunction005()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction005() {
                            document.getElementById("click003").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/p6.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>bare</p>
                    <p>up to 10% off</p>
                    <button id="click004" onclick="myFunction006()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction006() {
                            document.getElementById("click004").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/p7.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>bare</p>
                    <p>up to 10% off</p>
                    <button id="click005" onclick="myFunction007()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction007() {
                            document.getElementById("click005").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/p8.jpeg" alt="" width="150px">
                <div class="lines">
                    <p>flying machine</p>
                    <p>up to 40% off</p>
                    <button id="click006" onclick="myFunction008()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction008() {
                            document.getElementById("click006").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
            <div class="card-item">
                <img src="images/p9.jpeg" alt="" width="180px">
                <div class="lines">
                    <p>bare</p>
                    <p>up to 50% off</p>
                    <button id="click007" onclick="myFunction009()"style="cursor: pointer; padding: 10px; background-color: orange; border-radius: 20px;">Add to Cart</button>

                    <script>
                        function myFunction009() {
                            document.getElementById("click007").innerHTML = "added to cart successfully ";
                        }
                    </script>
                </div>
            </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
        
        <div class="row">
            <div class="column">
                <h4>Get to Know Us</h4>
                <ul>
                    <li>
                      <a href="#">About Us</a> 
                    </li>
                    <li>
                      <a href="#">Careers</a> 
                    </li>
                    <li>
                      <a href="#">Press Releases</a> 
                    </li>
                    <li>
                      <a href="#">Amazon Cares</a> 
                    </li>
                    <li>
                      <a href="#">Gift a Smile</a> 
                    </li>
                </ul>
            </div>
            <div class="column">
                <h4>Connect with Us</h4>
                <ul>
                     <li>
                      <a href="#">Facebook</a> 
                    </li>
                    <li>
                      <a href="#">Twitter</a> 
                    </li>
                    <li>
                      <a href="#">Instagram</a> 
                    </li>
                </ul>
            </div>
            <div class="column">
                <h4>Make Money with Us</h4>
                <ul>
                    <li>
                      <a href="#">Sell on Amazon</a> 
                    </li>
                    <li>
                      <a href="#">Sell under Amazon Accelerator</a> 
                    </li>
                    <li>
                      <a href="#">Amazon Global Selling</a> 
                    </li>
                    <li>
                      <a href="#">Become an Affiliate</a> 
                    </li>
                    <li>
                      <a href="#">Fulfilment by Amazon</a> 
                    </li>
                    <li>
                      <a href="#">Advertise Your Products</a> 
                    </li>
                    <li>
                      <a href="#">Amazon PAy on MeMerchants</a> 
                    </li>
                </ul>
            </div>
             <div class="column">
                <h4>Let Us Help You</h4>
                <ul>
                    <li>
                      <a href="#">COVID-19 and Amazon</a> 
                    </li>
                    <li>
                      <a href="#">Your Account</a> 
                    </li>
                    <li>
                      <a href="#">Returns Centre</a> 
                    </li>
                    <li>
                      <a href="#">100% Purchase Protection</a> 
                    </li>
                    <li>
                      <a href="#">Amazon App Download</a> 
                    </li>
                    <li>
                      <a href="#">Amazon Assistant Download</a> 
                    </li>
                    <li>
                      <a href="#">Help</a> 
                    </li>
                </ul>
            </div>
        </div>
           
    
                
    </div>
    
  
 
</main>



    <footer class="flex-all-center">
        <p>
            <a href="#">Conditions of Use & Sale</a>
            <a href="#">Privacy Notice</a>
            <a href="#">Interest-Based Ads</a> 
            <a href="#">&copy 1996-2021 CHEKKA LEELA PAVAN, Inc.</a>
        </p>
    </footer>
<!-- ............................javascript......................... -->
    <script>
        //  2nd nav slide bar ALL
 function openNav() {
 document.getElementById("mySidebar").style.width = "250px";
 document.getElementById("main").style.marginLeft = "250px";
 }
        
function closeNav() {
document.getElementById("mySidebar").style.width = "0";
document.getElementById("main").style.marginLeft= "0";
}

// to refresh page

function refreshPage(){
    window. location. reload();
    }

function validate(){
    window. location. href('index.html');
}


var indexValue = 0;
      function slideShow(){
        setTimeout(slideShow, 4000);
        var x;
        const img = document.getElementsByClassName("images");
        for(x = 0; x < img.length; x++){
          img[x].style.display = "none";
        }
        indexValue++;
        if(indexValue > img.length){indexValue = 1}
        img[indexValue -1].style.display = "block";
      }
      slideShow();
      

// Back to top button funtionality

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>
    
</body>

</html>