<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>DFood Recommendations</title>
</head>
<body onload="popup()">
  <div class="main">
    <div class="navbar">
      <div class="header-logo"> 
        Food Recommendations 
      </div>
      <div class="nav-sub">
        <ul class="header-nav">
          <li><a class="menu" href="#" title="User">User</a></li>
          <li><a class="menu" href="index.html" title="Home">Home</a></li>
          <li><a class="menu" href="about.html" title="AboutMe">AboutMe</a></li>
          <li><a class="menu" href="#" title="Contact">Contact</a></li>
        </ul>
        <ul class="mode">
          <button class="dark" onclick="modedark()" >Dark Mode</button>
          <button class="light" onclick="modedark()" >Light Mode</button>
        </ul>
      </div>
    </div>
    <!-- <div class="main-content"> -->
      <div class="content">
        <table>
          <div class="hasil">
            <p>Nama Pengunjung : <?php echo $_POST['nama']; ?></p>
          </div>
          <div class="hasil">
            <p>No.HP Pengunjung : <?php echo $_POST['No_Handphone']; ?></p>
          </div>
          <div class="hasil">
            <p>Email Pengunjung : <?php echo $_POST['email']; ?></p>
          </div>
          <div class="hasil">
            <p>Gender Pengunjung : <?php echo $_POST['jenis_kelamin']; ?></p>
          </div>
          <div class="hasil">
            <p>Password : <?php echo $_POST["password"]; ?></p>
          </div>
        </table>
      </div>
    <!-- </div> -->
    <!-- <div class="footer">
      <p>Copyright &copy; 2022 Designed by Shafira Octafia<p>
    </div>  -->
  </div>
  <script src="js.js"></script>
  <script src="dist/sweetalert2.all.min.js"></script>
</body>
</html>