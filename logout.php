<button class="btn btn-success" type="submit" name="pname" onclick="location.href = 'search1.php';">Search</button
  <input type="text" class="form-control" placeholder="Search here">

  $filename   = $_FILES["avatar"]["name"];
  $tempname   = $_FILES["avatar"]["tmp_name"];
  $folder     = "\project\bootstrap-4.4.1-dist\pics".$filename;
  $result     = move_uploaded_file($tempname,$folder);
