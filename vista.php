<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ces't la vie~</title>
  <link rel="stylesheet" href="./dashboard-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>

  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>

    <script>
      function updateTime() {
        const date = new Date();
        const hours = date.getHours().toString().padStart(2, '0'); // Ensure two-digit hours
        const minutes = date.getMinutes().toString().padStart(2, '0'); // Ensure two-digit minutes
        const formattedTime = `${hours}:${minutes}`;
        document.getElementById("currentTime").textContent = formattedTime;
      }
    </script>

    <div class="left_area" >
      <?php if (isset($_GET["username"])) { ?>
        <h3>Welcome to <span class="logo">VISTA</span>, 
          <?php echo (htmlspecialchars($_GET["username"])); ?>!
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <span class="time">Current Time: </span><span id="currentTime">
            <script>setInterval(updateTime, 1000);</script>
          </span>
        </h3>
      <?php } else { ?>
        <h3><?php var_dump(isset($_GET["username"])); ?></h3>
      <?php } ?>
    </div>

    <div class="right_area">
      <a href="login-page.php" class="logout_btn">Logout</a>
    </div>
  </header>
  <!--header area end-->
  <!--mobile navigation bar start-->
  <div class="mobile_nav">
    <div class="nav_bar">
      <img src="./imgs/VISTA Logo.jpg" class="mobile_profile_image" alt="">
      <i class="fa fa-bars nav_btn"></i>
    </div>  
    <div class="mobile_nav_items">
      <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-cogs"></i><span>Render Products</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Sales</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Products</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
    </div>
  </div>
  <!--mobile navigation bar end-->
  <!--sidebar start-->
  <div class="sidebar">
    <div class="profile_info">
      <img src="./imgs/VISTA Logo.jpg" class="profile_image" alt="">
      <h4>VISTA: Visibility, Insights, & Sales Tracking Analytics</h4>
    </div>
    <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="#"><i class="fas fa-cogs"></i><span>Render Products</span></a>
    <a href="#"><i class="fas fa-table"></i><span>Sales</span></a>
    <a href="#"><i class="fas fa-th"></i><span>Products</span></a>
    <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
  </div>
  <!--sidebar end-->

  <div class="content">
    <div class="card">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>
    <div class="card">
      <p>Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat.</p>
    </div>
    <div class="card">
      <p>Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna.
        Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis. Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus. Vivamus a mi. Morbi neque. Aliquam erat volutpat.
      </p>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.nav_btn').click(function() {
        $('.mobile_nav_items').toggleClass('active');
      });
    });
  </script

</body>

</html>