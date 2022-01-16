<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
	<meta name="theme-color" content="#000000"/>
    <meta name="description" content="A Recreation of the Mydrugs website from the hit Netflix series 'How To Sell Drugs Online (Fast)">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="BlackLogo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<meta charset="utf-8">
	<title>MyDrugs</title>
<style type="text/css">
	
	*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  
  justify-content: center;
 background-color: #0e0e0e;
}




@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.wrapper{
  position: absolute;
  top: 20px;
  left: 20px;
  animation: show_toast 1s ease forwards;
}
@keyframes show_toast {
  0%{
    transform: translateX(-100%);
  }
  40%{
    transform: translateX(10%);
  }
  80%, 100%{
    transform: translateX(20px);
  }
}
.wrapper.hide{
  animation: hide_toast 1s ease forwards;
}
@keyframes hide_toast {
  0%{
    transform: translateX(20px);
  }
  40%{
    transform: translateX(10%);
  }
  80%, 100%{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
  }
}
.wrapper .toast{
  background: #fff;
  padding: 20px 15px 20px 20px;
  border-radius: 10px;
  border-left: 5px solid #2ecc71;
  box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.15);
  width: 430px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.wrapper .toast.offline{
  border-color: #ccc;
}
.toast .content{
  display: flex;
  align-items: center;
}
.content .icon{
  font-size: 25px;
  color: #fff;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  border-radius: 50%;
  background: #2ecc71;
}
.toast.offline .content .icon{
  background: #ccc;
}
.content .details{
  margin-left: 15px;
}
.details span{
  font-size: 20px;
  font-weight: 500;
}
.details p{
  color: #878787;
}
.toast .close-icon{
  color: #878787;
  font-size: 23px;
  cursor: pointer;
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  background: #f2f2f2;
  transition: all 0.3s ease;
}
.close-icon:hover{
  background: #efefef;
}
</style>
</head>
<body>
  <!--  
Looking at the MyDrugs code? hummm alright..


                             *
   0000000                  *
   0     0                 *
   0     0                *
   0000000ppppppppppppppp*
          ppppppppppppppp
          ppppppppppppppp
          ppppppppppppppp   
          r             r
          r             r  
          r             r
          r             r

signed MrTiefling


  -->
<nav>
         <div class="logo">

            <a href="/">
            	<img src="WhiteLogo.png" width="55">
            </a>

          </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
         	  
            <li><a href="shop">SHOP</a></li>
            <li><a href="faq">FAQ</a></li>

          
        
            <li><a href="safety">SAFETY</a></li>
            <li><a href="forum.php">FORUM</a></li>
            <li><a href="contact">CONTACT</a></li>
            <li><a href="login.php"><i class="fas fa-user-circle"></i></a></li>
         </ul>
      </nav>
     
  
      <div class="background-index">
        <br><br>
         <h1 class="mydrugs2">BEST</h1>
  <div id="flip">
  <div><div>QUALITY</div></div>
  <div><div>DELIVERY</div></div>
  <div><div>SEQURITY</div></div>
  </div>
  <h1 class="mydrugs2">IN MYDRUGS 2.0</h1>
  
  <p class="price">Prices as low as 0.0013 BTC.</p>

        <br><br>





    




        
        <img width="400" align="center" src="powder.png">
        
    <div id="price">
    <p align="left" class="price-left">Fresh from our factory.</p><br>
    
    
    <p align="right" class="price-right">MDMA in its purest form.</p>   
     </div>
                                                          
<br>
<div id="price">
<p  class="price-left">Constantly quality-checked by our experts.</p><br>


<p class="price-right">Delivery guaranteed within 5 days.</p>
                                                                   
  </div>                                                        
      </div>
      <br><br>
    <section id="newline">
      <section id="shop">
        <br>
        <h1>Our explosive new lineup.</h1>
        
        <p class="ppp">For the best MDMA experience Ever.</p>
        <br><br>
                <img width="150" src="donald-pill.png">
                <img width="200" src="grenade-pill.png">
<br>
        
        
        <br><br><br><br>
        <a class="a-line" href="shop">Shop now <i class="fas fa-chevron-right"></i></a>
        <br><br>
      </section>
        <h3 class="promo">Save 20% off your first order.</h3>
        
        
        <br>

      
    </section>
  <div class="footer">
    <br><br>
   <h1>The Red Heart</h1>
   <p>Because we love you.</p>
   <a class="a-line" href="shop">Shop now <i class="fas fa-chevron-right"></i></a>
    <br><br>
  </div>

 
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
 .footer{
  color: white;
  text-align: center;

 }

 .ppp{
  color: black;
  font-size: 18.7px;
 }
.price-right{

  margin-right: 400px;
  color: #e2e2e2;
 }

 .price-left{
  margin-left: 400px;
  color: #e2e2e2;
 }
.price{
  color: #e2e2e2;
}
  #price{

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 50px;
 }
            
  
.a-line{
  color: #2f76ff;
  
  outline: none;
  text-decoration: none;
 
  
  


}
.a-line:hover{
    
  outline: none;
  text-decoration: none;
  font-size: 15px;
  transition: font-size 0.5s ease 0s;
}

.promo{
   text-align: center;
  color: black;
  
}
#newline{
  background: url(line.png);
  background-size: 600px;
    background-repeat: no-repeat;
    background-position: center;
    background-color: white;
}
#shop{
  font-size: 32.5px;
  text-align: center;
  align-content: center;
  
  color: black;
  font-family: sans-serif;
}


#flip {
  font-size: 35px;
  color: black;
  font-family: sans-serif;
  height: 50px;
  overflow: hidden;
  text-align: center;
}

#flip > div > div {
  padding: 4px 12px;
  height: 50px;
  margin-bottom: 45px;
  display: inline-block;
}
#flip div:first-child {
  animation: show 5s linear infinite;
}

#flip div div {
  background: #42c58a;
}
#flip div:first-child div {
  background: #4ec7f3;
}
#flip div:last-child div {
  background: #DC143C;
}
@keyframes show {
  0% {margin-top: -270px;}
  5% {margin-top: -180px;}
  33% {margin-top: -180px;}
  38% {margin-top: -90px;}
  66% {margin-top: -90px;}
  71% {margin-top: 0px;}
  99.99% {margin-top: 0px;}
  100% {margin-top: -270px;}
}

.mydrugs2{
 color: white;
 font-size: 50px;
 
}



.background-index{
  align-content: center;
  z-index: -100;
	margin-top: 80px;
	align-content: center;
	text-align: center;
	align-items: center;
}




*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
nav{
  display: flex;
  height: 80px;
  width: 100%;
  background: #0e0e0e;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}
nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #fff;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: cyan;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
  width: 100%;
  padding: 0 30px;
  color: #1b1b1b;
}
.content div{
  font-size: 40px;
  font-weight: 700;
}
</style>

  <style type="text/css">
 


</html>