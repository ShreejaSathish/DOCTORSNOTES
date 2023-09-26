<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  }
       .parent {
        position: relative;
        top: 0;
        left: 0;
      }
      .image1 {
        position: relative;
        top: 0;
        left: 0;
        width: 1400px;
        height: 650px;
        border: 1px solid #000000;
      }
      .top-right {
        position: absolute;
        top: 100px;
        right: 300px;
      }
      
    </style>
  </head>
  <body>
    <div class="parent">
    <form action="/action_page.php">
      <img class="image1" src="https://i.pinimg.com/564x/ca/1a/f0/ca1af0224356717cd0d41fa9e4868538.jpg" />
      <div class="top-right">
  <p><b>UPLOAD YOUR PRESCRIPTION:</b></p>
      <input type="file" id="myFile" name="filename" required>
  <input type="submit">
</form>
</div>
    </div>
  </body>
</html>