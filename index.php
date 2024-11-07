<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
  <title>Banac Ubuntu Server-PHP</title>
  <style>
    /* Custom CSS */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f7f6;
      margin: 0;
      padding: 0;
    }

    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin-top: 50px;
      border: 1px solid #ddd;
    }

    .container label {
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }

    .container input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-top: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .container input[type="submit"]:hover {
      background-color: #0056b3;
    }

    h1 {
      color: #333;
      font-size: 24px;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1 class="text-center">Banac Ubuntu Server-PHP</h1>
    
    <div class="form-group">
      <label for="firstname">Firstname:</label>
      <input id="firstname" type="text" name="firstname">
    </div>

    <div class="form-group">
      <label for="middlename">Middlename:</label>
      <input id="middlename" type="text" name="middlename">
    </div>

    <div class="form-group">
      <label for="lastname">Lastname:</label>
      <input id="lastname" type="text" name="lastname">
    </div>

    <div class="form-group">
      <label for="age">Age:</label>
      <input id="age" type="text" name="age">
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input id="address" type="text" name="address">
    </div>

    <div class="form-group">
      <label for="course">Course and Section:</label>
      <input id="course" type="text" name="course">
    </div>

    <div class="form-group">
      <input type="submit" value="Submit">
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
