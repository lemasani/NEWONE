<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workforce</title>

    <style>
      .worforce-details{
       
        position: relative;
        top:-570px;
        margin-left: 400px;
        z-index: 1;
        width: 70%;
      }
     

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <?php include "..\includes\header1.php" ?>
  
    <div class="worforce-details">
        <div class="row">
            <div class="project-details">
                <h4>Project details</h4>
                <div class="row d-flex my-2">
                    <div class="col-md-4 d-flex flex-column">
                        <label for="project">Project name</label>
                        <input type="text" id="project" >
                    </div>
        
                    <div class="col-md-4 d-flex flex-column">
                        <label for="jurisdiction">jurisdiction</label>
                        <input type="text"id="jurisdiction" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 d-flex flex-column">
                        <label for="">Region</label>
                        <input type="text">
                    </div>
                
                    <div class="col-md-3 d-flex flex-column">
                        <label for="">District</label>
                        <input type="text" >
                    </div>
                    <div class="col-md-3 d-flex flex-column">
                        <label for="">Street</label>
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h4 class="title my-3">Worforce Details</h4>
            <div class="row">
            <INPUT type="button" value="Add Row" onClick="addRow('dataTable')" />

            <INPUT type="button" value="Delete Row" onClick="deleteRow('dataTable')" />
                <form action="" method="post">
                <TABLE width="425" border="1">
                <thead>
                <tr>
                <th width="98"></th>
                <th width="94">NIDA</th>
                <th width="121">Name</th>
                <th width="84">Phone No</th>

                </tr>
                </thead>
                <tbody id="dataTable">

                </tbody>
                </TABLE>

                <INPUT type="submit" value="Insert" name="submit" />
                </form>
            </div>
        </div>
    </div>
    <script>
        function addRow(tableID) { 

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var cell1 = row.insertCell(0);
        var element1 = document.createElement("input");
        element1.type = "checkbox";
        element1.name="chkbox[]";
        cell1.appendChild(element1);

        var cell2 = row.insertCell(1);
        cell2.innerHTML = "<input type='text' name='nida'>";

        var cell3 = row.insertCell(2);
        cell3.innerHTML = "<input type='text'  name='fname' />";

        var cell4 = row.insertCell(3);
        cell4.innerHTML =  "<input type='text'  name='phone' />";
        }
        function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=1; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
        }catch(e) {
            alert(e);
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>