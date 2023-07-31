<?php 
$con=mysqli_connect('localhost','adlar','0000','anbar');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="brands.php"><i class="bi bi-crop"></i> Anbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
      	 <a class="nav-link" href=""><i class="bi bi-info-circle"></i> Haqqımızda</a>
      	</li> 
      
      	<li class="nav-item active">
      	 <a class="nav-link" href=""><i class="bi bi-patch-question"></i> Kömək</a>

      </li>

    </ul>
    <form method="post" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="email" type="email" placeholder="E-mail">
          <input class="form-control mr-sm-2" name="parol" type="password" placeholder="Parol">

       <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="enter">Daxil ol</button>

    </form>
  </div>
</nav>
<br><br>
<?php 
/*
TABLE cedvel elan etmek 
thead basliq setri
th basliq
tr setir
td sutun
tbody cedvelin bedeni

*/
?>