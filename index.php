<?php

$con = new mysqli("localhost", "root", "", "inote");

if ($_SERVER['REQUEST_METHOD'] == 'POST')

{

$title = $_POST['title'];
$des = $_POST['des'];

  $sqlin = "INSERT INTO `notes` (`title`, `des`, `dt`) 
  VALUES ('$title', '$des', current_timestamp())";

$resultin = mysqli_query($con, $sqlin);

}
// 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <title>iNotes - Notes Application</title>
    <link rel="shortcut icon" href="https://img.icons8.com/nolan/35/note.png">

    <script src="https://code.jquery.com/jquery-3.5.1.js" 
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
     crossorigin="anonymous"></script>
    
       
  </head>
  <body>

  <!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d69df0;">
        <a class="navbar-brand" href="#"><img src="https://img.icons8.com/nolan/35/note.png"/> iNotes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
          </ul>
          
        </div>
      </nav>
      <div class="container my-5" >

        <form action="index.php" method="post">
            <div class="form-group">
                <h2>Add a Note </h2>
              <label for="title">Note Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
              </div>
            <div class="form-group">
                <label for="des">Note Description</label>
                <textarea class="form-control" id="des" name="des" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Note</button>
          </form> 
      </div>

      <div class="container">

      <table class="table" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Note Title</th>
      <th scope="col" style="width:400px">Note Description</th>
      <th scope="col">Date of Insert</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql = "SELECT * FROM `notes`";

$result = mysqli_query($con, $sql);


$no = 1;
while($row = mysqli_fetch_array($result)){

$sno = $row["sno"];
$title = $row["title"];
$des = $row["des"];
$dt = $row["dt"];
// $newdate = date("l jS F Y h:i:s A", $dt);
$newdate = date("d-m-Y H:i A", strtotime($dt));  

echo "<tr>
<th scope='row'>$no</th>
<td>$title</td>
<td>$des</td>
<td>$newdate</td>
<td><a href='index.php'>Delete</a></td>
</tr>";

$no = $no+1;
}

?>

 </tbody>
</table>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
  </body>
</html>