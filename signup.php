<!DOCTYPE html>
<html lang="en">
 <?php include ('includes/_head.php'); ?>
<body>

<div class="container mt-5">
<form class="container-fluid" method="post">
  <div class="mb-3">
    <label for="exampleInputText1" class="form-label">Pseudo</label>
    <input type="text" class="form-control" name="pseudo">
  </div>
  <div class="mb-3">
    <label for="exampleInputText2" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="validate">Submit</button>
</form>
</div>



</body>
</html>