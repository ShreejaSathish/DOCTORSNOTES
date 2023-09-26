<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>

     body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    color: white;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: right;
    height: 100vh;
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


.signup-form {
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
  top: 70px;
  right: 300px;
}

input[type="text"], input[type="email"], input[type="password"] {
    margin: 8px 0;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 50px;
    box-sizing: bordex-box;
    width: 100%;
}

button {
    padding: 14px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 70px;
    cursor: pointer;
    top: 50%;
  left: 50%
  -ms-transform: translate(10%, 10%);
  transform: translate(10%, 10%);
    width: 80%;
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
    <div class="background"></div>
    <div class="container">
        <div class="top-right">
        <form class="signup-form" action="home.php" method="post">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
      <hr />
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit">Sign Up</button>
            
            
        </form>
    </div>
    </div>
</body>
</html>