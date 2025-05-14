<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
            <div class="contact-details">
    <section class="contact-us">
        <h1>Contact Us:</h1>
        <p>If you have any problem face in this journeys I will provide you the detais and contact us our menus of the 
         website. I will also provide the contact no email and my whatapps number this aslo details giving you 
         if any place face the problem you will contact us.
        </p>
    </section><br>
      <section class="contact-no">
          <h2>Email:</h2>
          <a href="https://mail.google.com/mail/u/4/#inbox" class="copy-text" target="_blank" rel="noopener noreferrer">Email1:akhterhussain795000@gmail.com</a><br>
         <a href="https://mail.google.com/mail/u/1/#inbox" class="copy-text" target="_blank" rel="noopener noreferrer">Email2:akhtershiran64@gmail.com</a>
          <br><br>
          <h2>Phone No:</h2>
          <p class="copy-text"><b>+92-3465095504</b></p>
          <p class="copy-text"><b>+92-3555933939</b></p>
      </section>
            </div><br>
        <footer>Copyright <span>&copy;</span> traveltogb Shirani Balti</footer>
</body>
<script>
document.querySelectorAll(".copy-text").forEach(element=>{
        element.addEventListener('click', function(){
            let text=this.innerText || this.textContent;
            navigator.clipboard.writeText(text).then(()=>{
                alert("Copied: " +text);
                this.style.backgroundColor="#D4EE1A";
                setTimeout(()=>this.style.backgroundColor="", 1000);
            }).catch(err=> console.error("Failed to Copy:", err));
        })
    });
</script>
</html> 