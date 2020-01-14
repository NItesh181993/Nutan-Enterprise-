<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nutan Enterprises</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    * {
          box-sizing: border-box;
          padding-bottom: 0px;
        }

        input[type=text], select, textarea {
          width: 100%;
          padding: 15px;
          padding-bottom: 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
          resize: vertical;
        }

            label {
              padding: 12px 12px 12px 12px;
              display: outline-block;
              font-size: 15px;
              float: left;
            }

            input[type=submit] {
              background-color: #4CAF50;
              color: white;
              padding: 10px 10px;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            /*.btn
            {
                color: white;
                float: right;
            }*/

            .container {
              border-radius: 20px;
              background-color: #f2f2f2;
              padding: 60px;
            }

            .col-25 {
              /*float: right;*/
              width: 40%;
              margin-top: 0px;
              /*padding-left: 30px;*/
            }

            .col-75 {
              /*float: left;*/
              width: 75%;
              margin-top: 15px;
              padding-left: 11px;
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
              .col-25, .col-75, input[type=submit] {
                width: 100px;
              }
            }
            </style>
</head>
<body>

<div class="container">
  <!-- <h2>Modal Example</h2> -->
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
  <!-- <div class="modal fade" id="myModal" role="dialog"> -->
    <!-- <div class="modal-dialog"> -->
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='index.php'">&times;</button>
          <h4 class="modal-title">Project details</h4>
        </div>
        <div class="modal-body">
            <form  method="POST">
            <div class="row">
            <div class="col-25">
            <label for="project_name">Project Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="Project_Name" name="project_name"  required="Please Enter Project Name..">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="project_description">Project Description</label>
            </div>
            <div class="col-75">
            <textarea id="project_description" name="project_description"  required="Please Enter Details.." style="height:200px"></textarea>
            </div>
            </div>
            <br>
            <!-- <div class="btn">
            <input type="submit" value="Submit">
            </div> -->
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.location.href='index.php'">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</body>
</html>
