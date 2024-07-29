<!DOCTYPE html>
<html>
<head>
  <title>PHP Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    form {
      width: 80%;
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin-top: 10px;
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      font-size: 18px;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 20px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2>Fill the Form</h2>
  <form action="/signup/oneonetwo" method="POST">
    @csrf
    <label for="ID">ID:</label>
    <input type="text" id="ID" name="ID" placeholder="Enter your ID">

    <label for="Name">Name:</label>
    <input type="text" id="Name" name="Name" placeholder="Enter your name">

    <label for="Address">Address:</label>
    <input type="text" id="Address" name="Address" placeholder="Enter your address">

    <label for="Email">Email:</label>
    <input type="email" id="Email" name="Email" placeholder="Enter your email">

    <label for="Phone">Phone:</label>
    <input type="text" id="Phone" name="Phone" placeholder="Enter your phone number">

    <label for="Password">Password:</label>
    <input type="password" id="Password" name="Password" placeholder="Enter your password">

    <input type="submit" value="Submit">
  </form>
</body>
</html>
