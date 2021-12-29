
<html >
<head>

      <title>LOGIN and REGISTER</title>
      <link rel="stylesheet"type="text/css" href="style2.css">

      
      </head>
<body>

          <div class="hero">
            <div  class="menu">
                <ul>
                   <li><a href="index.html">Back</a></li>
                   <li><a href="name of team.html">ABOUT us</a></li>
                    <li><a href="register1.php">REGISTER</a></li>
                    <li><a href="register1.php">LOGIN</a></li>
                    <li><a href="https://www.google.com/?hl=ar">google</a></li>


                </ul>
           </div>

              <div class="form-box">
                  <div class="button-box">
                      <div id="btn"></div>
                      <button type="button" class="toggle-btn" onclick="LogIN()">Log IN</button>
                      <button type="button" class="toggle-btn" onclick="REGISTER()">REGISTER</button>


                  </div>
                  <div class="social-icons">
                    <img src="fb.png">
                    <img src="tw.png">
                    <img src="gp.png">
                  </div>
                 <form id="LogIN" action="validation.php" method="post" class="input-group">
                    <input type="text"name="user"class="input-field" placeholder="user name" required>
                    <input type="password"name="password"class="input-field"placeholder="ENTER your password"required>
                    <input type="checkbox" class="check-box"><span>REMEMBER PASSWORD</span>
                    <button type="submit"class="submit-btn" >LOG IN</button>




                 </form>
                 <form id="REGISTER"action="register.php" method="post" class="input-group">

                 <input type="text" name="firstname"class="input-field" placeholder="firstname" required>
                 <input type="text" name="lastname"class="input-field" placeholder="last name" required>
                    <input type="text" name="user"class="input-field" placeholder="user name" required>
                    <input type="text" name="email"class="input-field" placeholder="email" required>

                    <input type="password"name="password"class="input-field"placeholder="ENTER your password"required>

                    
                    <input type="checkbox" class="check-box"><span>Agree to terms $ COndition </span>
                    <button type="submit"class="submit-btn" >REGISTER</button>



                 </form>
            

                 
            


              </div>
             
          </div>
          <a a href="index.html"> <button type="button">Back </button></a> 
          
            

          <script>
               
               var x=document.getElementById("LogIN");
               var y=document.getElementById("REGISTER");
               var z=document.getElementById("btn");

               function REGISTER()
                                {
                                    x.style.left="-400px";
                                    y.style.left="50px";
                                    z.style.left="110px";
                                 }
                                 function LogIN()
                                {
                                    x.style.left="50px";
                                    y.style.left="450px";
                                    z.style.left="0";
                                 }





          </script>
</body>
</html>
