<?php
    header("Content-type: text/css; charset: UTF-8");
    $data=$_GET['id'];
?>

<?php include("ketnoi1.php")?>

html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100vh;
      font-family: Helvetica;
}

.wrapper {
      height: 100vh;
      width: 100%;
}

.pattern {
      position: absolute;
      left: 20%;
      width: 60%;
      height: 100vh;
      background: url(BG_Pattern.png) no-repeat 50% 50%;
      z-index: -1;
      opacity: 0.4;
}

.nav {
      width: 100%;
      height: 80px;
      position: absolute;
}

.logo {
      font-size: 18px;
      margin: 0.2em 2em;
      line-height: 80px;
      position: absolute;
}

.menu {
      position: absolute;
      height: 80px;
      right: 120px;
            z-index: 3;
}

.menu ul {
      list-style: none;
}

.menu ul li {
      display: inline-block;
      margin: 1em 0;
      padding: 0 30px;
      font-size: 15px;
}

.cart {
      position: fixed;
      font-size: 16px;
      margin: 0.2em 1em;
      line-height: 80px;
      right: 20px;
}


.runner img {
      width: 50%;
      z-index: 2;
      margin-top: -25px;
      margin-left: 200px;
}




.content {
      position: absolute;
      top: 64%;
      left: 57%;
      width: 36%;
      color: grey;
      font-weight: lighter;
      font-size: 14px;
      line-height: 24px;
}


.media {
      position: absolute;
      bottom: 210px;
}

.media ul {
      position: absolute;
      list-style: none;
}

.media ul li {
      color: grey;
      padding: 10px 0;
}


@media(max-width: 900px) {
      .wrapper {
            background: url("<?=$data?>") no-repeat 45%;
            background-size: cover;
      }

      .pattern {
            display: none;
      }

      .runner img {
            display: none;
      }

      .title-1, .title-2 {
            font-size: 50px;
      }

      .title-1 {
            left: 20%;
            top: 10%;
      }

      .title-2 {
            left: 60%;
             top: 20%;
            z-index: 1;
      }


      .media{
            display: none;
      }
      .content p {
            display: none;
      }

      .box-2 {
            top: 70%;
      }

      .content button {
            position: fixed;
            right: 3em;
            bottom: 4em;
            z-index: 1;
      }
}
a{
      text-decoration: none;
      color:black;
      

}
.btn {
  background-color: none ;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
  line-height: 30px;
}

.nav .icon {
  display: none;
}

@media screen and (max-width: 900px) {
  .menu {display: none;}
  .nav .icon {
    float: right;
    display: block;
  }
}

