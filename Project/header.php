<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
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
  background: #1e90ff;
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
  color: #1e90ff;
}
.content div{
  font-size: 40px;
  font-weight: 700;
}

</style>

<body>
        <nav>
         <div class="logo">
            Paw Care
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shelter.php">Shelter</a></li>
            <li><a href="doctor.php">Doctor</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </nav>

<script type="text/javascript">
  // const body=document.querySelector("body");
  // const navbar=document.querySelector(".navbar");
  // const menuBtn=document.querySelector(".menu-btn");
  // const cancelBtn=document.querySelector(".cancel-btn");


  // menuBtn.onclick= ()=>{
  //   navbar.classList.add("show");
  //   menuBtn.classList.add("hide");
  //   body.classList.add("disabledScroll");
  // }
  // cancelBtn.onclick= ()=>{
  //   navbar.classList.remove("shows");
  //   menuBtn.classList.remove("hide");
  //   body.classList.remove("disabledScroll");
  // }

  // window.onscroll = ()=>{
  //   this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
  // }
  </script>

</body>



</html>