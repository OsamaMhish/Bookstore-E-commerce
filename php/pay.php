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
            <form action="success.php" method='POST'>
      
            <section class="row"> 
              <section class="col-50">
                  <h3><em>Payment of 20$</em></h3>
                  <label for="fname">Accepted Cards</label>
                  <img src="https://img.icons8.com/color/36/000000/mastercard.png" alt="logo">
                 
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
      
                <section class="row">
                    <section class="col-50">
                      <label for="cars">Exp date:</label>
                    <select id = "expM" name = 'expM' class = "exp" >
                          <option disabled selected>Month</option>
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                    </select>
                    <select id = "expY" name  = 'expY' class = "exp" >
                          <option disabled selected>Year</option>
                          <option value="2020">20</option>
                          <option value="2021">21</option>
                          <option value="2022">22</option>
                          <option value="2023">23</option>
                          <option value="2024">24</option>
                          <option value="2025">25</option>
                          <option value="2026">26</option>
                          <option value="2027">27</option>
                          <option value="2028">28</option>
                          <option value="2029">29</option>
                          <option value="2030">30</option>
                    </select>
                    </section>
                    <section class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="309">
                    </section>
                </section>
            </section>
            <input type = 'hidden' id = "hidden" name = 'hidden' value=''/>
        </section>
        <input type='submit' id='btn' class="submit" value= 'continue to checkout'/>
  
        </form>
    </section>
</section>
  </main>
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
<script src="../js/creditCardValidation.js "></script>
  </body>
</html>