<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.traveltogb</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
    <h1>Travel to Gilgit Baltistan</h1>
        <div class="bdy">
            <h2>Introduction</h2><br>
            <p class="para">This is a travel Website name is <i>traveltogb</i> and just explore the beauty of Gilgit Baltistan.
            And any person travel to Gilgit Baltistan they guide him its journeys and guided all the tourist in any place of face
        any problem this also guide him and this also show the beauty of nothern areas. Nestled in the heart of the majestic Karakoram 
        and Himalayan ranges, Gilgit Baltistan is a paradise for travelers seeking breathtaking landscapes, rich culture, and adventure. 
        From the serene waters of Attabad Lake to the towering peaks of K2, this region offers an unmatched experience for nature lovers and thrill-seekers alike.
         The lush green valleys of Hunza, Skardu, and Fairy Meadows provide a glimpse into the untouched beauty of northern Pakistan. 
         With its warm hospitality, historical forts, and mesmerizing scenery, Gilgit Baltistan is a dream destination for those looking to
          explore the wonders of the world.<span class="rm"><a href="https://visitgilgitbaltistan.gov.pk/">Read More..</a></span></p><br>
         <div class="imge"><img src="./Images/Untitled.jpg" alt="Images" width="400" height="200">
            <img src="./Images/gb.jpg" alt="Images" width="400" height="200">
            <img src="./Images/gb3.jpg" alt="Images" width="400" height="200">
            <img src="./Images/gb2.jpg" alt="Images" width="400" height="200">
            <img src="./Images/gb4.jpg" alt="Images" width="400" height="200">
            <img src="./Images/gb5.jpg" alt="Images" width="400" height="200">
            </div>
        </div>
     <br>
        <section class="sty-places">
            <div class="container">
            <h1>Staying Places</h1>
             <div class="card">
                <div class="card1">
                    <img src="Images/hunza.jpg" alt="Hunza hotel">
                    <div class="desc">This hotel is best for all the visitor that are imazing all the viewers that
                        is seeing this monment for all the background of your images and beauty.
                        <button id="hunza" onclick="ReadHza();">Read More</button>
                    </div>
                </div>
                <div class="card2">
                    <img src="Images/skardu.jpg" alt="Hunza hotel">
                    <div class="desc">This hotel is best for all the visitor that are imazing all the viewers that
                        is seeing this monment for all the background of your images and beauty.
                        <button id="skardu" onclick="ReadSkd();">Read More</button>
                    </div>
                </div>
                <div class="card3">
                    <img src="Images/khaplu.jpg" alt="Hunza hotel">
                    <div class="desc">This hotel is best for all the visitor that are imazing all the viewers that
                        is seeing this monment for all the background of your images and beauty.
                        <button id="khaplu" onclick="ReadKhp();">Read More</button>
                    </div>
                </div>
             </div>
            </div>
        </section>
        <footer>Copyright <span>&copy;</span> traveltogb Shirani Balti</footer>
</body>
<script>const khp=document.getElementById("khaplu");
    let url="https://www.serenahotels.com/khaplu-palace?srsltid=AfmBOoojx8H-QULX4XmWAXFPiETWEF7muarHqgpUk9BZIboIE0-avjAN";
    let url1="https://www.booking.com/searchresults.en-gb.html?aid=356980&label=gog235jc-1DCAsotQFCHG1vdW50YWluLWxvZGdlLXNrYXJkdS1za2FyZHVICVgDaLUBiAEBmAEJuAEXyAEP2AED6AEB-AECiAIBqAIDuAKz1Zm_BsACAdICJGE3ZTc1NDU2LTY2YzYtNGFlNy1iMjMxLTFlY2E4ZmEwMmU5M9gCBOACAQ&highlighted_hotels=5886609&redirected=1&city=-2774916&hlrd=user_sh&source=hotel&expand_sb=1&keep_landing=1&sid=69335732bc7ad72cdb4b7c703219689c";
    khp.addEventListener('click',ReadKhp=()=>{
        window.open(url,"_blank");
    })
    const skd=document.getElementById("skardu");
    skd.addEventListener('click',ReadSkd=()=>{
         window.open(url1,"_blank");
    });
    const hza=document.getElementById("hunza");
    hza.addEventListener('click',ReadHza=()=>{
         window.open(url1,"_blank");
    });</script>
</html>