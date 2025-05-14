<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
    <section class="form-bdy">
       <h1>Registration Form</h1>
       <p>First you are interested to visit in Gilgit Baltistan. Before you will submit this form.
         You will provide me the basic information in our requirement. Please fill this form and visit the 
        the pakeistan most beautiful province. This is a simple biodata form you will also fill the form and submit all your information
    carefully and waiting for the first trip to the beautiful place of Pakistan like Gilgit Baltistan.</p>
    </section>
    <hr>
    <div class="form-data">
        <form action="save.php" method="POST" width="80%" height="100%" >
            <div class="name">
                <label for="name">Name:</label>
                <input type="text" name="username" placeholder="Enter your fullname" required>
            </div><br>
            <div class="fname">
                <label for="fname">Father Name:</label>
                <input type="text" name="fathername" placeholder="Enter your fathername"  required>
            </div><br>
            <div class="dob">
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dateofbirth" placeholder="dob" required>
            </div><br>
            <div class="cnic">
                <label for="CNIC">CNIC:</label>
                <input type="number" name="number" placeholder="Enter your CNIC"  required>
            </div><br>
            <div class="select">
                <label for="Nationality">Nationality:</label>
                <select name="nationality" >
                    <option value=""> Select</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="India">India</option>
                    <option value="China">China</option>
                    <option value="USA">USA</option>
                </select>
            </div><br>
            <div class="ph-no">
                <label for="Phone No">Phone No:</label>
                <input type="number" name="phoneno" placeholder="Enter phone number"  required>
            </div><br>
            <div class="email">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Enter your email"  required>
            </div><br>
            <div class="gender">
                <label for="Gender">Gender:</label>
             <input type="radio" name="gender"  value="male" placeholder="radio" required>Male
             <input type="radio" name="gender" value="female" placeholder="radio" required>Female
            </div><br>
              <div class="check">
                <label for="place">Place You Mark:</label>
                   <input type="checkbox" name="checkbox[]" value="Khaplu" id="khp" placeholder="place">Khaplu
                   <input type="checkbox" name="checkbox[]" value="Skardu" id="skd" placeholder="place">Skardu
                   <input type="checkbox" name="checkbox[]" value="Gilgit" id="glt" placeholder="place">Gilgit
              </div> <br>
           <div class="comment">
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" row="4"height="100" width="200" placeholder="Enter Your Comment" width="300" height="250"></textarea>
           </div><br>
           <div class="submit">
            <label for="submit">Submit:</label>
            <input type="submit" name="submit" value="Submit" id="sb" >
           </div>
        </form>
    </div>
    <br>
       <footer>Copyright <span>&copy;</span> traveltogb Shirani Balti</footer>
   
</body>
</html>