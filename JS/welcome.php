<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <!doctype html>
<html lang="en" ng-app="Dashboard">
  <head>
    <meta charset="UTF-8">

    <title>Asset Track</title>

      <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
      <script type="text/javascript" src="JS/bootstrap.js"></script>
      <script type="text/javascript" src="JS/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="JS/jquery-3.6.0.min.js"></script>

      <script type="text/javascript" src="JS/app.js"></script>

  </head>
  
  <body>

    <div  class="container">

        <!--Header-->
        <div class="row align-items-start">
            <div class="col-2"  ></div>

            <div class="col-8" style="text-align: center;">
              <h3>Image Share</h3>
            </div>

            <div class="col-2"  ></div>
        </div>

        <!--New Asset Box-->
        <div class="row align-items-start">
            <div class="col-2"  ></div>

            <div class="col-8" style="text-align: left;border-bottom:1px solid #222222;">
              <p>Add Image</p>

              <form style="font-size: 10pt;" id="newAssetForm">
                <div class="mb-3">
                  <label for="FileName" class="form-label">File Name</label>
                  <input type="text" class="form-control" id="FileName">
                </div>

                <div class="mb-3">
                  <label for="userID" class="form-label">User Id</label>
                  <input type="string" class="form-control" id="userID">
                </div>

                <div class="mb-3">
                  <label for="userName" class="form-label">User Name</label>
                  <input type="text" class="form-control" id="userName">
                </div>

                <div class="mb-3">
                  <label for="UpFile" class="form-label">File to Upload</label>
                  <input type="file" class="form-control" id="UpFile">
                </div>
            
                <button type="button" id="subNewForm" class="btn btn-primary">Submit</button> <br/><br/>
                
              </form>
            </div>

            <div class="col-2"  ></div>
        </div>

        <!-- view Asset Area-->
        <div class="row align-items-start">
            <div class="col-2"  ></div>

            <div class="col-8" style="text-align: left;" >
              <div style="padding:5px;">
                <button  id = "retImages" type="button" class="btn btn-primary">View Images</button>
              </div>

              <div id="ImageList">

                <h4>Please click the view Images button if you wish to view images on the system.</h4>

              </div>
            </div>

            <div class="col-2"  ></div>
        </div>

    </div>
  
  </body>
</html>