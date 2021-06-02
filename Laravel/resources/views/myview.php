<!DOCTYPE html>
<html> 

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <title> My task </title>



</head>
<body> 

  <div class="row">
    

    <div class="col-sm-10">
      
      <div class="info">
        <h4>View information </h4>
        <div class="table-responsive">
          <table class="table table-hover table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">datetime</th>
                <th scope="col">filename</th>
                <th scope="col">numberofline</th>
              </tr>
            </thead>
            <tbody>
          @foreach ($users as $user)
           <tr>
              <td>{{ $user->id }}</td>
             <td>{{ $user->date_time }}</td>
              <td>{{ $user->num }}</td>
              <td>{{ $user->filename }}</td>
              </tr>
          @endforeach
            </tbody>
          </table>
          <a class="btn btn-info" style="float: right;"href="upload.blade.php">Clickhere</a>
        </div>
      </div>

    </div>
  </div>
</div>


</body>


</html> 



 </body>