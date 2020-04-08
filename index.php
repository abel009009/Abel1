<!DOCTYPE html>
<html lang="en">

    <title>Log In</title>
       <link href="web/css/styles1.css" rel="stylesheet" type="text/css" />
 
<div class="banner">       
    
    <header>
        <div class="navbar">
            <nav>
                <br>
                <div id="navbar" style="font-size: 30px;">
                    <ul class="ul-list">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Hostels</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                            <div id="login"><a href="signup.php">Sign Up</a></div>
                            <div id="login"><a href="index.php">Log In</a></div>                            
                    </ul>
                </div>
                
              
            </nav>
        </div>
    </header>
</div>

 <br>
 <br>
<body>
   
    <div class="form" id="signup-form">
        <h2>Tenant Login</h2>
        <form action="includes/login.inc.php" method="POST">

            <div class="formitem">
                <label>Tenant ID No:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_roll_no" placeholder="ID No" required="required" />
                </div>
            </div>
            <div class="formitem">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>
            
            <button type="submit" name="login-submit">Login</button>
        </form>
          <p class=" w3l-register-p">Login as<a href="login-hostel_manager.php" class="register"> Hostel-Manager/Admin</a></p>
        <p class=" w3l-register-p">Don't have an account?<a href="signup.php" class="register"> Sign up</a></p>
    </div>
 
</body>

</html>
