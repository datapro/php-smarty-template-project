<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<main style="display:flex; background-image: url('./image/woman.jpg');">
<div style="flex:1;">

</div>
<div style="flex:1;">
<form action="process.php" method="post">
<div row mb-3>
<label for="username" class="col-sm-2 col-form-label" style="color:white;">Username:</label>
    <input type="text" id="username" name="username" required class="form-control">
</div>
<div row mb-3>
    <label for="email" class="col-sm-2 col-form-label" style="color:white;">Email:</label>
    <input type="email" id="email" name="email" required class="form-control">
    </div>
<div row mb-3>
    <label for="password" class="col-sm-2 col-form-labell" style="color:white;">Password:</label>
    <input type="password" id="password" name="password" required class="form-control">
</div>
    <input type="submit" value="Register" class="btn btn-primary">
</form>
</div>
<div style="flex:1;">

</div>
</main>