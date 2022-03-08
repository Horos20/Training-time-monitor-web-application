<!doctype html>
<html>
<head>
  <title> Dashboard </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel='stylesheet' href='dashboard.css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <script>
    window.onload = function log() {
    fetch('entries.php', {
         method:'GET'
    }).then(response => {
          return response.text();
    }).then(response => {
          document.getElementById('log_results').innerHTML = response;
    });
}

  </script>
</head>
<header>
    
    <!-- -->
    
    <div id="side-menu" class="sideMenu">
       <a href="javascript:void(0)" style="color:red;" class="closebtn" onclick="closeNav()"> &times;</a>
       <div class="main-menu">
            <h3 style="font-family: inherit;"> Add New Entry</h3>
            
            <form action="" method="POST" id="data">
                
                <label> Date * </label>
                <input name="date">
                
                <label> Type * </label>
                <input name="type">
                
                <label> Category * </label>
                <input name="category">
                
                <label> Time * </label>
                <input name="time">
                
                <label> Notes </label>
                <input name="notes">
                
                <label> Tags * </label>
                <input name="tags">

                <input id="lisa" class="btn btn-primary" type='submit' name="addE"> ADD ENTRY </input>
                
            </form>
            
            
         
        </div>
     </div>
    
    
</header>
<body>
<?php 
    
    require_once "phpmysql.php";

    if (isset($_POST["addE"])){
        
     $date = $_POST["date"];
     $type = $_POST["type"];
     $category = $_POST["category"];
     $time = $_POST["time"];
     $notes = $_POST["notes"];
     $tags = $_POST["tags"];
        
       $insert_query = "INSERT INTO ENTRIES(date, type, category, spent_time, notes, tags)VALUES('".$date."', '".$type."', '".$category."', '".$time."' , '".$notes."', '".$tags."')";

       $i = $conn->query($insert_query);
    }
    
    ?>
    
  <section>
    
        <div class="row navrida">
          <div class="col-2 text-center">
            <button onclick="openNav();" class="btn btn-primary"> + ADD NEW </button>
          </div>
           <div class="col-8"></div>
            <div class="col-2 text-center">
                <span class="align-items-center" style="padding-right: 40px; font-size: 20px; color: white"><?php echo $_SESSION['lastName']; ?></span> 
             <button class="btn btn-primary" onclick="location.href = 'logout.php'"> SIGN OUT </button>
          </div>
        </div>
      
  </section>
  
        <!-- info kaardid -->

       <div class="row">
         <div class="col-4 lists">
           <div class="list">
            <div draggable="true" class="icard1 list-item">
               <h5> Logged working hours </h5>
              <div class="row text-center"> 
               <div class="timelog">
                  <h4> 10,5 h </h4> 
                  <span style="font-size: 13px; font-weight: bold;"> Total </span>
              </div>
              <div class="timelog">
                 <h4> 13,5 h </h4> 
                 <span style="font-size: 13px; font-weight: bold;"> Last month </span>
              </div>
             </div>
            </div>
          </div>
          
        <!-- -->
        
        <div class="list">
         <div draggable="true" class="icard2 list-item">
           <h5> 12 months overview </h5>
        </div>
      </div>
      
      
        <div class="list">     
         <div draggable="true" class="icard3 list-item">
            <h5> Categories </h5>
        </div>
       </div>
                
       <div class="list">  
        <div draggable="true" class="icard4 list-item">
          <h5> Used technologies </h5>
        </div>
       </div>
     </div>
              
     <div class="col-8">
                  
     <!-- tabel -->
      <div id='log_results'></div>

                  
     </div>
   </div>
 </div>


<script src='dashboard.js'></script>

      
</body>    
</html>
