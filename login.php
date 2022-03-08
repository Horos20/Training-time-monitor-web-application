
<!doctype html>
<html>
<head>
   <title> Login </title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    
        <div class="row">
          <div class="col-7"></div>
            <div class="col-5">
              <div class="vorm">
               <form action="dashboard.php" method="POST">
                 <label> Email: </label> 
                 <input type="email" name="email"> 
                 <label> Password: </label>
                 <input type="password" name="password">
                 <button class="btn btn-dark" type="submit" name="signIn"> SIGN IN </button>
               </form>
            </div>
          </div>    
       </div>
    
    
    

    
</body>
</html>