<html>
  <head>
    <meta charset="utf-8" />
    <title>Zeko | Portfolio</title>
    <link rel="stylesheet" href="style/styles.css" />
    <link rel="stylesheet" href="style/background_styles.css" />
    <script src="js/script.js" defer></script>
  </head>
  <body>
    <header id="top">
      <nav class="navbar">
        <div class="brand-title"><h1>Maros Tomasov</h1></div>
        <div class="navbar-links">
          <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <section id="Home" class="center-align">
      <div id="home-inside-div" class="flex-column center-align">
        <div class="section-text-contain">
          <h1 style="color: white">Who Am I?</h1>
          <p style="color: white">
            Hi! My name is Maroš Tomašov, also known as Zeko. I am studying
            Information and network technologies at high school in Handlová. For
            3 years I've been programming on my computer, Primarily P ython, and
            for the last few months I've been working with JavaScript. My
            journey didn't start 3 years back. I was a little kid, not playing
            outside as did other kids back then, I was at home playing games or
            creating small low-voltage electric cuircits with old flashlights,
            DC motors and batteries. I enjoyed it and it brought me happines.
            Since I grew up and knew how to write code I bought few arduinos and
            created funny little projects. One of those projects power up my
            LEDs behind my monitor using Mosfet Transistor and 12V LED strip.
          </p>
        </div>
        <div class="section-photo-contain">
          <img src="images/skate-me.jpg" />
        </div>
      </div>
    </section>
    <div id="transition-1"></div>
    <section id="About">
      <div class="about-me-div">
        <div class="flex-column center-align">
          <h1 style="color: black; text-align: center">Web Development</h1>
          <p class="about-paragraph">
            I've been learning web development for a year now. <br />
            <br />
            Primarily it was done in Wordpress using Bricks. I have knowledge in
            raw HTML, CSS and JS. Since I didn't want to pay for Wordpress, this
            web is also written in those languages.
          </p>
        </div>
        <div class="center-align flex-column">
          <h1 style="color: black; text-align: center">Graphic Design</h1>
          <p class="about-paragraph">
            I'm new by to graphic design, it developed from recreational
            photography. I got a job offer for a Graphic Design and since then
            I've been learning how to make effective designs and visualy
            appleasing
          </p>
        </div>
      </div>
      <div class="about-me-div">
        <div class="center-align flex-column">
          <h1 style="color: black; text-align: center">asfdsafasd</h1>
          <p class="about-paragraph">
            I've been learning web development for a year now. Primarily it was
            done in Wordpress using Bricks. I have knowledge in raw HTML, CSS
            and JS. Since I didn't want to pay for Wordpress, this web is also
            written in those languages.
          </p>
        </div>

        <div class="center-align flex-column">
          <h1 style="color: black; text-align: center">asdfdsafasd</h1>
          <p class="about-paragraph">
            I've been learning web development for a year now. Primarily it was
            done in Wordpress using Bricks. I have knowledge in raw HTML, CSS
            and JS. Since I didn't want to pay for Wordpress, this web is also
            written in those languages.
          </p>
        </div>
      </div>
    </section>

    <section
      style="
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 50vh;
      "
    >
      <h2 style="margin-top: 50px">Title</h2>
      <p>Paragraph 1</p>
      <img
        src="images/387540.jpg"
        alt="Image description"
        style="
          display: block;
          margin: 0 auto;
          height: 250px;
          object-fit: contain;
        "
      />
      <p>Paragraph 2</p>
    </section>

    <section>
      <form method="POST" action="index.php">
        <div style="width: 50%;" class="flex-column">
          <input type="text" name="name" placeholder="Name" />
          <input type="email" name="email" placeholder="Email" />
          <input type="text" name="subject" placeholder="Subject" />
          <textarea name="message" placeholder="Message"></textarea>
          <button type="submit" name="submit">Send</button>
        </div>
      </form>
    </section>
  </body>
</html>

<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['subject'];
    $msg = $_POST['message'];
    
    $all = array($name, $email, $text, $msg);

    for ($i = 0; i < count($all); $i++) {
        echo $all[$i];
    }
?>