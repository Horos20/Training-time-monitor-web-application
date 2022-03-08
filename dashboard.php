<!doctype html>
<html>
<head>
  <title> Dashboard </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel='stylesheet' href='dashboard.css'>
  
</head>
<header>
    
    <!-- -->
    
    <div id="side-menu" class="sideMenu">
       <a href="javascript:void(0)" style="color:red;" class="closebtn" onclick="closeNav()"> &times;</a>
       <div class="main-menu">
            <h3 style="font-family: inherit;"> Add New Entry</h3>
            
            <form action="" method="POST" id="data">
                
                <label> Date * </label>
                <input>
                
                <label> Type * </label>
                <input>
                
                <label> Category * </label>
                <input>
                
                <label> Time * </label>
                <input>
                
                <label> Notes </label>
                <input>
                
                <label> Tags * </label>
                <input>
                
            </form>
            
            <button id="lisa" class="btn btn-primary"> ADD ENTRY </button>
         
        </div>
     </div>
    
    
</header>
<body>
    
  <section>
    
        <div class="row navrida">
          <div class="col-2 text-center">
            <button onclick="openNav();" class="btn btn-primary"> + ADD NEW </button>
          </div>
           <div class="col-8"></div>
            <div class="col-2 text-center">
                <span class="align-items-center" style="padding-right: 40px; font-size: 20px; color: white"> Nimi </span> 
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
                  
     </div>
   </div>
 </div>

<script src='dashboard.js'></script>   
      
</body>    
</html>
