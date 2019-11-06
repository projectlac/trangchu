<?php
    header("Content-type: text/css; charset: UTF-8");
    $color=$_GET['color'];
?>

<?php include("ketnoi1.php")?>





.title-2 {
      position: absolute;
      top: 55%;
      left: 65%;
      transform: translate(-50%, -50%);
      font-family: Anton;
      font-size: 90px;
      color: rgba(0,0,0,0);
      font-style: italic;
      text-transform: uppercase;
      z-index: -1;
      -webkit-text-stroke: 2px <?=$color?>;
      opacity: 0;
}

.title-1 {
      position: absolute;
      top: 38%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-family: Anton;
      font-size: 90px;
      color: <?=$color?>;
      padding-right: 20px;
      font-style: italic;
      text-transform: uppercase;
      z-index: 1;
      opacity: 0;
      /* -webkit-text-stroke: 2px <?=$color?>; */
}


.btn:hover {opacity: 1;background-color:<?=$color?>;}



.box-1 {
      position: absolute;
      width: 60px;
      height: 60px;
      background: none;
      border: 2px solid <?=$color?>;
      top: 10%;
      left: 15%;
      z-index: -1;
      transform: rotate(60deg);
}

.box-2 {
      position: absolute;
      width: 120px;
      height: 120px;
      background: <?=$color?>;
      /* border: 2px solid <?=$color?>; */
      top: 64%;
      left: 22%;
      z-index: -1;
      transform: rotate(-107deg);
}

.box-3 {
      position: absolute;
      width: 80px;
      height: 80px;
      background: none;
      border: 2px solid <?=$color?>;
      top: 31%;
      left: 78%;
      z-index: -1;
      transform: rotate(33deg);
}
button {
      margin-top: 6px;
      background: <?=$color?>;
      color: #fff;
      padding: 20px 30px;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size: 10px;
      border: none;
}
