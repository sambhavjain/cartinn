

<html>
<head>
<style>
 
body {
    background:rgb(56,160,137) url('body-bg.jpg');
}

.img{
position: absolute;
left:130px;
top:25px;

}
 
.clearfix:after {
    display:block;
    clear:both;
}
 
/*----- Menu Outline -----*/
.menu-wrap {
    width:100%;
    box-shadow:0px 1px 3px rgba(0,0,0,0.2);
    background:rgb(0,54,108);
}
 
.menu {
    width:1200px;
    margin:150px auto 0px 80px;
}
 
.menu li {
    margin:0px;
    list-style:none;
    font-family:'Ek Mukta';
}
 
.menu a {
    transition:all linear 0.15s;
    color:rgb(255,255,255);
}
 
.menu li:hover > a, .menu .current-item > a {
    text-decoration:none;
    color:rgb(56,160,137);
}
 
.menu .arrow {
    font-size:11px;
    line-height:0%;
}
 
/*----- Top Level -----*/
.menu > ul > li {
    float:left;
    display:inline-block;
    position:relative;
    font-size:19px;
}
 
.menu > ul > li > a {
    padding:10px 40px;
    display:inline-block;
    text-shadow:0px 1px 0px rgba(0,0,0,0.4);
}
 
.menu > ul > li:hover > a, .menu > ul > .current-item > a {
    background:#2e2728;
}
 
/*----- Bottom Level -----*/
.menu li:hover .sub-menu {
    z-index:1;
    opacity:1;
}
 
.sub-menu {
    width:160%;
    padding:5px 0px;
    position:absolute;
    top:100%;
    left:0px;
    z-index:-1;
    opacity:0;
    transition:opacity linear 0.15s;
    box-shadow:0px 2px 3px rgba(0,0,0,0.2);
    background:#2e2728;
}
 
.sub-menu li {
    display:block;
    font-size:16px;
}
 
.sub-menu li a {
    padding:10px 30px;
    display:block;
}
 
.sub-menu li a:hover, .sub-menu .current-item a {
    background:#3e3436;
}
.btn {

  background: #64859c;
  background-image: -webkit-linear-gradient(top, #64859c, #15bdb5);
  background-image: -moz-linear-gradient(top, #64859c, #15bdb5);
  background-image: -ms-linear-gradient(top, #64859c, #15bdb5);
  background-image: -o-linear-gradient(top, #64859c, #15bdb5);
  background-image: linear-gradient(to bottom, #64859c, #15bdb5);
  -webkit-border-radius: 16;
  -moz-border-radius: 16;
  border-radius: 16px;
  -webkit-box-shadow: 0px 1px 3px #000000;
  -moz-box-shadow: 0px 1px 3px #000000;
  box-shadow: 0px 1px 3px #000000;
  font-family: Georgia;
  color: #e7f0ed;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #ffffff 2px;
  position:absolute;
  left:1200px;
  top:30px;
}
.btn1 {

  background: #64859c;
  background-image: -webkit-linear-gradient(top, #64859c, #15bdb5);
  background-image: -moz-linear-gradient(top, #64859c, #15bdb5);
  background-image: -ms-linear-gradient(top, #64859c, #15bdb5);
  background-image: -o-linear-gradient(top, #64859c, #15bdb5);
  background-image: linear-gradient(to bottom, #64859c, #15bdb5);
  -webkit-border-radius: 16;
  -moz-border-radius: 16;
  border-radius: 16px;
  -webkit-box-shadow: 0px 1px 3px #000000;
  -moz-box-shadow: 0px 1px 3px #000000;
  box-shadow: 0px 1px 3px #000000;
  font-family: Georgia;
  color: #e7f0ed;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #ffffff 2px;
  position:absolute;
  left:1193px;
  top:85px;
}
.back{
position:absolute;
left:190px;
top:240px;
right:200px;
}




</style>

<div class="back">
<img src="back.jpg" width="800" height="350" /></div>
</br>
<div class="img">
<img src="cart.jpg" width="120" height="120">

</div>



<a href="login.php"><div class="btn">
Login 
</div></a>
<a href="signup.php"><div class="btn1">
Sign-up
</div></a>
<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
		
            
			            <li class="current-item"><a href="home.php">Home</a></li>

            <li>
                <a href="products.php">Products <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="clothing.php">Clothing </a></li>
					
                    <li><a href="electronics.php">Electronics</a></li>
                    <li><a href="books.php">Books</a></li>
                    <li><a href="#">Miscellenious</a></li>
                </ul>
            </li>
            <li><a href="mens.php">Men</a></li>
			<li><a href="womens.php">Women</a></li>
            <li><a href="electronics.php">Electronics</a></li>
			<li><a href="books.php">Books</a></li>
			
        </ul>
    </nav>
</div>

</body>



	
</html>