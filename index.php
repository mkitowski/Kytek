<!DOCTYPE html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KytekCoder</title>
    <link href="css/mainpage.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <section class="starter">
        <div class="inner">
            <div class="content">
                <h1>KytekCoder</h1>
                <a class="btn" href="#menu">Start</a>
            </div>
        </div>
        <div class="counter">
            <div id="timer"></div>    
        </div>
    </section>
    <nav>
    <div id="menu">
        <ul>
            <li><a class="men" href ="#home">Home</a></li>
            <li><a class="men" href ="#me">About me</a></li>
            <li><a class="men" href ="#code">My work</a></li>
            <li><a class="men" href ="#mail">Contact</a></li>
            
        </ul>
    </div>
    </nav>
    <div id="home">
        <h3>Welcome on my Coding WebPage</h3>
        <p>My plans for that page is to create a space where I will be able to present you my passion. The passion of creating different tools, like the list one to help my doughters inprove math skill. Also I intend to create portfolio of my pictures, as my other passion is photography.</p>
        <p>In sections below you can find descriptions and links to my work. Please bear in mind that I am still learning and my code is not a perfection  - <u>jet.</u> I am still looking for the best solotions to create a good, clean and fast code.</p>
        <p>I am focused on Front-End - side of the programming. Mainly HTML5 CSS JavaScript and frameworks like JQuery and React. I am not limiting to front I also look ath the back, as this page is using PHP script and it is my intention to keep al data in database using MySQL.</p>
        <p>Hopely you will find here something that may be interest for you. All my codes are available on my <a href='https://github.com/mkitowski' target="_blank">GIT hub</a></p>
    </div>
    <div id="me">
        <h3>About me</h3>
        <p>I started programing in my early years, when we've got firsr PC with DOS OS. My First program was made in LOGO, it was basicly directing a small turtle to draw a lines. The most advanced program in LOGO was to force the turtle to draw an animated analog clock showing seconds, minutes and hours.</p>
        <p>Than Pascal come on the front. That gives a bit more facility to play. I was able to ingerate in files in the system, creating local databases, addess books etc. Short after that I have jump to Delphi, which gives me a nice play with window apps, I created my own webbrowser, I tried simple games</p>
        <p> When I went study Mechanical engineering I have poused it for a wile. I have back to the coding during my profesional carrier when I was creating codes in Lisp or VBA to improva my work in AutoCAD or in Excel.</p> 
        <p>One of my previos employers ask me to create a company website, so I sit down with a book and start learning how to create a page where it will be easy to add a content without coding as not all in the company was able to do it. I learn that CMS can do that. So I started to dig and I find a way to build my firts CMS based on PHP and text files.</p>
        <p>For last couple of years I played only with CMS like Joomla or Wordpress slightly ingerating in the code.</p>
        <p>Now I want to start new chapter in my live with coding as a one of the main charaters within.</p>
    </div>
    <div id="code">
        <h3>My work</h3>
        <?php
            // DB data
            $servername = "sql.bsdesign.nazwa.pl";
            $username = "bsdesign_KytekCoder";
            $password = "Maciek2362!";
            $dbname = "bsdesign_KytekCoder";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "SELECT Name, Description, Path, Image FROM Projects";
            $res = $conn->query($sql);
            
            if ($res->num_rows >0) {
                while ($r = $res->fetch_assoc()) {
                    echo "<div class='oneproject'><a class='projectlink' href=".$r['Path']; 
                    echo ">".$r['Name']."</br><img class='projlogo' src =".$r['Image']."></a><p class='description'>".$r['Description']."</p> </div>";
                }
            }
            $conn->close();
           
        ?>
    </div>
    <div id='mail'>
        <h3>Contact</h3>
    <div id="form-message"></div>
      <form id="contactform" method="POST" action="postman.php">
            <div class="field">
                <label class="lab">Name:</label>
                <input type="text" id="uname" name="uname" placeholder="Your Name" required>
                <div id="uname-info" class="info"></div>
            </div>
            <div class="field">
                <label class="lab">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="your@email.com" required>
                <div id="mail-info" class="info"></div>
            </div>
            <div class="field">
                <label class="lab">Message:</label>
                <textarea id="message" name="message" placeholder="Message" required></textarea>
                <div id="mess-info" class="info"></div>
            </div>
            <div class="field">
                <label class="lab">Are you a human?</label>
                <input type="text" id="check" name="check" placeholder="yes or no" required>
                <div id="check-info" class="info"></div>
            </div>
            <div class="field">
                <button type="submit" name="submit" class="submit">Send</button>
            </div>
        </form>
    </div> 
    <div id="footer">
    &copy; copyright by Kytek 2018
    </div>
   <script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script> 
    <script src="JS/contact.js"></script>
    <script src="JS/timer.js"></script>
</body>
</html>