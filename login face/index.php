<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="styles/style.css"/>
  <title>Hello, World!</title>
  <style>
  
  body{
  background-color:white;
}
 
.box{
  float:center;
  border-radius: 8px;
  height:200px;
  width:189px;
  padding: 30px;
  margin: 20px;
  background-color:#F4F6F7;
}
.text{
  font-size:20;
  color: black;
  background-color:white;
  width:189px;
}

  h1{
   text-align: center;
    color:blue;
  }
  h3{
    font-size:16px;
  }
  a{
    color:blue;
    text-decoration: none;
  }
.btn-layer{
width:194px;
color:white;
background-color:blue;
}
.btn-layer :hover{
background-color: black;
color:white;
}
.btn-layer1{
background-color:green;
color:white;

}
  
</style>
</head>
<body>
  <center>
   <h1>facebook</h1>
  <div class="box">
             <h4>Log in to Facebook</h4>
               <form method="POST">
                
                    <input name="username" class="text" autocomplete="off" placeholder="Email address or phone number" required>
                
                     <input class="text"" placeholder="Password" type="password" name="password" required>
                 
         <input type="submit" name="submit" id="sub" class="btn-layer">log in </input>
                 
    </form>
    <br>
                  
                     
    
                    <br>
                
<center><a href="forgot password">forgot password ?</a>
  <center>Or</center>
  <div class="btn-layer1" >Create New Account</div>
                   
                  </div>
               </form>
  </div>
  </center>
</body>
<?php 
 mysql_connect("localhost","root","password");
 mysql_selectdb("simplelogin");

if (isset($_POST['submit'])) {
    $sun=$_POST['username'];
    $pw=$_POST['password'];
    $sql=mysql_query("select password from user where username='$un'");
if ($row=mysql_fetch_array($sql)){
   if ($pw==$row['password']){
   header("home.html");
    exit();

}
 else
 echo "Invalid Password";
}
 else
 echo "Invalid Username";
}
?>