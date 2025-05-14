<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <header>
            <nav id="nv">
                <div class="left"><img src="one-place-to-another.png" alt="one-place-to-another"></div>
                <div class="rf">
                <a href="home.php">Home</a>
                <a href="page1.php">About</a>
                <a href="regist.php">Gallery</a>
                <a href="service.php">Service</a>
                <a href="table.php">Feedback</a>
                <a href="contact.php">Contact</a>
                    <input type="text" name="search" id="srh" placeholder="Search any thing"></div>
            </nav>
        </header>
        <div class="service">
    <section>
        <h1>Our Service</h1>
        <p>I will provide different service like Bus, Car and different Van. You must provide the rest in your travel 
            making easy for you for myside.For place i will provide you are visiting different place in GB.
        </p>
    </section>
      <div ><p id="info"></p></div>
    <section>
        <h2> Our Destination</h2>
        <ul>
            <li>Gilgit</li>
            <li>Skardu</li>
            <li>Khaplu</li>
            <li>Shigar</li>
            <li>Hunza</li>
        </ul>
    </section>
    <section>
           <h2>Our Vehicles</h2>
        <ol>
            <li>Bus</li>
            <li>Van</li>
            <li>Car</li>
        </ol>
    </section>
    <section>
        <h2>Our Price</h2>
         <ol>
            <li>10 Days: Above 150000</li>
            <li>20 Days: Above 250000</li>
            <li>30 Days: Above 400000</li>
         </ol>
    </section>
        </div>
    <br>
       <footer>Copyright <span>&copy;</span> traveltogb Shirani Balti</footer>
</body>
  <script>const textArray=[
    'Best Service Provide You',
    'Visit Beautiful Destinction',
    'Travel to Your Choice: ByRoad and ByAir',
    'Afordable Price'
 ];
 let index=0;
   setInterval(()=>{
     index=(index+1)%textArray.length;
         document.getElementById("info").innerText=textArray[index];
   },2000);</script>
</html>