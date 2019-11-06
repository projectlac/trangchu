<!DOCTYPE html>
<?php include("ketnoi1.php")?>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Triệu hồi cực mạnh</title>
     
     <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <?php 

$ran= mt_rand(1, 5);
$sql= "SELECT * FROM tt where id= '$ran'";
      $query = mysqli_query($conn,$sql);
      $data= mysqli_fetch_array($query);

if ($data['bac'] == "SSR") $mau= "orange";
else {if ($data['bac'] == "SR") $mau= " rgb(179, 0, 89)     ";
else {if ($data['bac'] == "R") $mau= " rgb(0, 57, 230)     ";}};

      ?>
 <link rel='stylesheet' type='text/css' href="color.php?color= <?php echo $mau ?>" /> 

 <link rel='stylesheet' type='text/css' href="style.php?id= <?php echo $data['hinhmobile'] ?>" /> 

      <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
      <script type="text/javascript">
     
      alert("Mình đang thử nghiệm giao diện mới~~");

</script>
      <div class="wrapper">
            <div class="pattern"></div>

            
                 <div class="logo"><a href="javascript:void(0);" class="icon">
                                         <img src="logo.png" alt="" height="30px" width="auto"></a></div> 

                  <div class="menu" id="menuu">
                        
                        <ul >
                              <li class="btn"><a href="index.php" class="active" onclick="fun()"> Trang chủ </a></li>
                              <li class="btn"><a href="trieuhoi.php">Triệu hồi</a></li>
                              <li class="btn"><a href="nhanpham.php">Nhân Phẩm</a></li>
                              <li class="btn"><a href="latbai.php">Lật Bài</a></li>
                              
                        </ul>
                
                  </div>

                 <!-- <div class="cart"><ion-icon name="cart"></ion-icon></div> -->
            

            <div class="box-1 box"></div>
            <div class="box-2 box"></div>
            <div class="box-3 box"></div>
<?php





      echo"    <div class='title-2'>$data[ten]</div>";

      echo"    <div class='runner'>";
      echo"      <img src='$data[hinhanh]' alt=''> ";
      echo"   </div>";

      echo"  <div class='title-1'>$data[bac]</div>";

      echo"   <div class='content'>";
      echo"     <p style='font-size: 20px; font-weight: bolder; '>$data[cottruyen] </p>";
      echo"    <p>《Phần 1》</p>";
      echo"      <p>$data[noidung]</p>";

      echo"        <button>Tìm hiểu</button>";
      echo"    </div>";
?>
            <div class="media">
                  <ul>
                        <li><a href="https://www.facebook.com/thegodkeima"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><ion-icon name="logo-instagram"></ion-icon></li>
                        <li><ion-icon name="logo-twitter"></ion-icon></li>
                        <li><a href="https://www.youtube.com/channel/UCKkcPdYKyWCTqRYwj9Yo1Hg"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  </ul>
            </div>
      </div>
<script>
$(document).ready(function(){
  $(".icon").click(function(){
    $("#menuu").toggle();
  });
});
</script>
      <script type="text/javascript">




            TweenMax.to(".title-1", 2, {
            x: 30,
            opacity: 1,
            ease: Expo.easeInOut
            });

            TweenMax.to(".title-2", 2, {
            delay: 0.2,
            x: -80,
            opacity: 1,
            ease: Expo.easeInOut
            });

            TweenMax.from(".runner", 2, {
            delay: 1.6,
            x: -80,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.from(".box-1", 4, {
            delay: 1,
            rotation: 200,
            transformOrigin: "50% 50%",
            opacity: 0,
            x: -180,
            ease: Expo.easeInOut
            });

            TweenMax.from(".box-2", 4, {
            delay: 1.2,
            rotation: 90,
            transformOrigin: "50% 50%",
            opacity: 0,
            x: -180,
            ease: Expo.easeInOut
            });

            TweenMax.from(".box-3", 4, {
            delay: 1,
            rotation: 180,
            transformOrigin: "50% 50%",
            opacity: 0,
            x: -180,
            ease: Expo.easeInOut
            });

            TweenMax.from(".pattern", 2, {
            delay: 0.8,
            width: 0,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.from(".logo", 2, {
            delay: 1.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.staggerFrom(".menu ul li", 2, {
            delay: 1.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      }, 0.1);

            TweenMax.from(".cart", 2, {
            delay: 1.7,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.staggerFrom(".media ul li", 2, {
            delay: 2,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      }, 0.1);

            TweenMax.from(".content p", 2, {
            delay: 2.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.from(".content button", 2, {
            delay: 2.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
            });

      </script>
</body>
</html>
