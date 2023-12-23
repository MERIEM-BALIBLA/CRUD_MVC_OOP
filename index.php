 <!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Team Info</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   </head>
   <body>
     <div class="container-fluid bg-dark p-2 mb-3">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container-fluid">
           <!-- <a class="navbar-brand" href="#">Navbar</a> -->
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="view/team/index.php">Team List</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">Media</a>
               </li>
               
             </ul>
             <form class="d-flex" role="search">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Search</button>
             </form>
           </div>
         </div>
     </nav>
   </div>
   <div class="container-fluid">

    <a href="/CrudPDO/view/team/create.php" class = "btn btn-primary">Add new team</a>

<?php
    require_once 'view/head/footer.php';
?>