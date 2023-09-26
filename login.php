<!DOCTYPE html>
<html>
  <head>
  <title>DOCTORS NOTES</title>
    <link rel="icon" type="image/x-icon" href="https://img.freepik.com/free-photo/stethoscope-pen-blank-prescription-pad-medicine-pharmacy-concept-empty-medical-form-ready-be-used-modern-medical-information-technology_1150-44753.jpg?size=626&ext=jpg">
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    color: white;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: right;
    height: 100px;
    width:100px;
}
.background {
    background-image: url("https://i.pinimg.com/564x/ca/1a/f0/ca1af0224356717cd0d41fa9e4868538.jpg");
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}


.form-container {
    display: flex;
    flex-direction: column;
    align-items: right;
}

.input-group {
    margin-bottom: 5px;
    width: 100%;
    height: 50%;
}

label {
    font-weight: bold;
}

.top-right {
  position: absolute;
  top: 80px;
  right: 100px;
}

input[type="text"], input[type="email"], input[type="password"] {
    margin: 8px 0;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 50px;
    box-sizing: bordex-box;
    width: 70%;
}

.vertical-center {
  margin: 0;
  position: right;
  top: 50%;
  left: 50%
  -ms-transform: translate(30%, 30%);
  transform: translate(30%, 30%);
}

button {
    padding: 14px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    width: 40%;
}

button:hover {
    opacity: 0.8;
    background-color: #0056b3;
}

a {
        color: dodgerblue;
      }

      
      a:hover {
        text-decoration: underline;
      }
</style>
</head>
  <body>
    
  <form action="home.php" method="POST">
  <div class="background"></div>
    <div class="form-container">
      <div class= "top-right">
      <h1>Login</h1>
      <p>Please fill in this form to log in to your account.</p>
      <hr />

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
  <div class="vertical-center">
 
    <button type="submit">Login</button>
  </form>
    </form>
  </div>
  
      <p>
        Don't have an account? <a href="signup.php">Sign up</a>.
      </p>
    </div>
    </div>

    
  </body>
</html>
    