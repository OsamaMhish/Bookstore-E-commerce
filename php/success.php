<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta   name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GooseBumps Bookstore</title>
  <link rel="stylesheet"  href='../css/main.css' />
</head>

<body>
<header>
  
<main class="navbar">
    <section class="container">
       <img class="logo" src="../images/goosebumps logo.png" alt="logo">
       <img id="phone-cta" class="phone-menu" src="../images/menu.svg" alt="Open Nagivation">
        <nav>
          <img id="phone-exit" class="phone-exit" src="../images/exit.svg" alt="Close Nagivation">

            <ul>
                <li class="current"><a href="../index.html">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#/">Contact us</a></li>
           </ul>

        </nav>
</section>
</main> 
</header>
<body>
<main class="row">
<section class="col-75">
        <section class="container">
            <form action="#">
      
            <section class="row"> 
              <section class="col-50">
                  <h3>Payment</h3>
                  <label class="purchase" for="purchase">Your purchase has been successful!</label>
                  <img src="https://img.icons8.com/color/36/000000/mastercard.png" alt="logo" class= "success">

                  <?php
        
                        $x = $_POST['hidden'];
                        if($x == 1){
                        $conn = new mysqli('localhost', 'root', '', 'creditcard');
                        if(!$conn) die('failed');
                        $ccnum = $_POST['cardnumber'];
                        $m= $_POST['expM'];
                        $y = $_POST['expY'];
                        $d = 1;
                        $cvv = $_POST['cvv'];

                        $v2=md5($ccnum);
                        $date = new DateTime();
                        $m++;
                        $date->setDate($y, $m, $d);
                        //echo $date->format('y-m-d');
                        $date->modify('-1 day');
                        $v3 = $date->format('Y-m-d');
                        $v4 = $_POST['cvv'];
                        //echo $v1 + ',' + $v2 + ',' + $v3, + ',' + '$v4';
                        $sql="INSERT INTO `card`(`ccnum`, `expdate`, `seccode`) VALUES ('$v2','$v3','$v4')";
                        if(!$conn->query($sql)) 
                            ​​​​​echo ("wrong");
                        $masked = str_pad(substr($ccnum, -4), strlen($ccnum), '*', STR_PAD_LEFT);
                        echo "<h2> Your card ".$masked. " has been saved </h2>";
                    }//this if statment basically inserts your card into the mysql database when its verified
                    else
                    header ("Location: pay.php");
                    ?>
                   
            </section>
      
</section>
  </main>
</body>
<footer>
<main class="container4">
  <ul>
    <li>
      <h2><img src="../images/goosebumps logo.png" alt="Company logo"></h2>
      <img src="../images/mail.png" alt="mail logo">
      <p>OSAMA.MHISH@stu.mmmu.ac.uk</p>
      <img src="../images/linkedin.png" alt="linkedin logo">
      <p><a href="http://linkedin.com/in/osama-mhish-6a18b7200">Linkedin</a></p>
    </li> 
  </ul>
</main>
</footer>
<script src="../js/nav.js "></script>
</html>