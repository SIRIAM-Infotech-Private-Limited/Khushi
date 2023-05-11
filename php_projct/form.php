<html>
    <head>
        <title>Form</title>
            <style>
               body {
    background-color: rgb(238,174,202);
    font-family: Arial, sans-serif;
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
  }
  
  h1 {
    text-align: center;
    color: #eb458d;
    padding: 0;
    margin: 0 0 50px 0;
  }
  
  form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 25%;
    height: auto;
    margin: 0 auto;
    padding: 40px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
  
  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #eb458d;
  }
  
  input[type="text"],
  input[type="password"] {
    display: block;
    width: 90%;
    padding: 10px;
    border-radius: 10px;
    border: .4px solid #00000020;
    margin-bottom: 20px;
    outline: none;
  }
  
  input[type="text"]:focus,
  input[type="password"]:focus {
    box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 15px -5px, rgba(0, 0, 0, 0.15) 0px 8px 16px -8px;
    width: 95%;
    border: .4px solid #00000015;
    transition: all .3rgba(0, 0, 0, 0.849)-out;
  }

  input::placeholder {
    opacity: .5;
}

  div[class*=box] {
    height: 33.33%;
    width: 100%; 
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .btn {
    line-height: 50px;
    height: 50px;
    text-align: center;
    width: 50%;
    cursor: pointer;
  }

  .btn-three {
    background-color: #BE5A83;
    color: #fff;
    transition: all 1s;
    position: relative;
    font-weight: bold;
  }
  .btn-three::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 20px;
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.1);
    transition: all 1s;
  }
  .btn-three:hover::before {
    opacity: 0 ;
    transform: scale(0.5,0.5);
  }
  .btn-three::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    border-radius: 20px;
    opacity: 0;
    transition: all 1s;
    border: 1px solid #00000020;
    transform: scale(1.2,1.2);
  }
  .btn-three:hover::after {
    opacity: 1;
    transform: scale(1,1);
  }

/* alerta */
    .alertandline {
    position: absolute;
    left: 50%;
    top: 0;
    transform: translate(-50%);
    width: 200px;
    height: 200px;
    z-index: 9999;
    }

    .alert {
    position: relative;
    background-color: #eb458d4f;
    text-align: center;
    top: 0;
    left: 0;
    width: 100%;
    height: 10px;
    color: white;
    padding: 10px 0px 15px 0px;
    font-size: 10px;
    border-radius: 0 0 5px 5px;
    text-transform: uppercase;
    z-index: 999;
  }
  
  #line {
    position: relative;
    height: 50px;
    top: -50px;
    border-radius: 0 0 5px 5px;
    background-color: #00000033;
    transition: width 3s;
    display: none;
  }
            </style>
            </head>
            <body>
            <div class="alertandline">
  <div id="alert"></div>
  <div id="line"></div>
</div>
<form action="insert.php" method="post">
<h1>Register User</h1>
  <input type="text" placeholder="First Name" id="username" name="f_name"><br>

  <input type="text" placeholder="Last Name" id="password" name="l_name"><br>

  <input type="text" placeholder="Email" id="password" name="user_email"><br>

  <input type="text" placeholder="Phone Number" id="password" name="user_number"><br>

  <input type="text" placeholder="Age" id="password" name="user_age"><br>

  <input type="text" placeholder="Address" id="password" name="user_address"><br>

  <input type="text" placeholder="Marital Status" id="password" name="user_status"><br>

  <div class="box-3">
      <button type="submit" name = "save" class="btn btn-three">Submit</button>
  </div>
</form>
</body>
</html>
