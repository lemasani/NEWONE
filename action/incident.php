<!doctype html>
<html lang="en">
  <head>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incident</title>

    <style><?php include "..\Assets\css\incident.css"; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <body>

<?php include "..\includes\header.php" ?>

  <form action="" method="post" class="incident-form">
    <div class="container">
            <div class="row  d-flex justify-content-center">
              <div class="col-md-4 col-lg-6 text-center">
                        <span class="date">Date: </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 d-flex flex-column">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
              </div>
              <div class="col-md-6 col-lg-6 d-flex flex-column">
                  <label for="type">Type</label>
                  <select name="incident type" id="type">            
                    <option value="damages">Damages</option>
                    <option value="theft">Theft</option>
                    <option value="intrusion">Intrusion</option>                    
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 d-flex flex-column">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="w-100" placeholder="Enter description"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 d-flex flex-column">
                <label for="region">Region:</label>
                <input type="text" id="region" name="region" >
              </div>
              <div class="col-md-3 d-flex flex-column">
                <label for="district">District</label>
                <input type="text" id="district" name="district" >
              </div>
              <div class="col-md-3 d-flex flex-column">
                <label for="street">Street/ward</label>
                <input type="text" id="street"name="street">
              </div>
            </div>
            <fieldset class="offender-details p-2">
                <div class="row">
                
                <div class="col-md-3 d-flex flex-column">
                    <label for="national_id">NIDA NUMBER:</label>
                    <input type="text" name="national_id" id="national_id">
                </div>
            
                <div class="col-md-3 d-flex flex-column">
                    <label for="type">Action</label>
                    <select name="incident_type" id="type">            
                        <option value="damages">Don't Hire</option>
                        <option value="theft">Arrest</option>
                        <option value="intrusion">Terminate</option>                    
                    </select>
                </div>

                <div class="col-md-4 d-flex flex-column">
                    <label for="recommendation">Recommendation</label>
                    <textarea name="c_recommendation" id="recommendation" class="w-100" placeholder="Give recommendation"></textarea>
                </div>

                <div class="col-md-2 align-self-center">
                    <button class="btn btn-success">Add</button>
                </div>
                </div>
            </fieldset>
           
               
              
           


            <div class="row">
              <div class="col-md-12">
                <input type="submit" value="submit" name="submit" class="btn-submit w-100">
              </div>
            </div>
    </div>
            

          


  </form>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>