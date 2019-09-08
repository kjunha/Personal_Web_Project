<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Me</title>
    <link rel="stylesheet" href="intro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://kit.fontawesome.com/68116ca987.js"></script>
  </head>
  <body>
    <!--Common menu bar-->
    <div id="menubar"></div>
    <script>
      $("#menubar").load("../../menubar.html");
    </script>
    <!-- Main Contents Part -->
    <div class="wrapper">

      <!-- Part1: Banner -->
      <div class="banner">
        <div class="cover_pic">
          <span>Junha Kim</span>
          <div class="profile_pic">
            <img src="../../src/profile480.jpg">
          </div>
        </div>
        <div class="fav_links">
          <span onclick="goGithub()"><i class="fab fa-github"></i> Github</span>
          <span onclick="goLinkedin()"><i class="fab fa-linkedin"></i> Linkedin</span>
          <span onclick="goFacebook()"><i class="fab fa-facebook"></i> Facebook</span>
          <span onclick="goInstagram()"><i class="fab fa-instagram"></i> Instagram</span>
          <span onclick="goContactMe()"><i class="fas fa-at"></i> Sand Email</span>
        </div>
      </div>

      <!-- Part2: Contents -->
      <div class="contents">
        <div class="introduction">
          <span id="sectionTitle"><i class="fas fa-globe-asia"></i> Introduction</span>
          <div class="summary">
            <p>Brigham Young University - Hawaii</p>
            <p>B.S. Computer Science</p>
            <p>Programmer, Photographer, Surfer</p>
          </div>
          <div class="text">
            <p>Aloha, My name is Junha Kim from Korea.
            I am a student in Brigham Young University - Hawaii
            and my major is Computer Science, minor is Marketing.
            As of 2019, I am in my senior year and I will be graduating
            in 2020 April. I love to make, build, develop things such as
            programming, crafting, music, pictures, videos and so on. </p>
            <p>I want to be a software engineer or web develper in the furure
            and I have enjoyed so much my programming projects and
            teach other how to programming. Check my projects on my Github
            and my life stories on the Facebook and Instagram. </p>
            <p>Thank you for visiting. </p>
            <p>Mahalo!</p>

          </div>
        </div>
        <div class="posts">
          <span id="sectionTitle"><i class="fas fa-pen-square"></i> My Posts</span>
          <div class="console">
            <!-- php part here -->
            <div id="profile45"><i class="far fa-handshake"></i></div>
            <span id="postTitle">Welcome Message</span>
            <div id="contentsBox">
              <?php
                  if($_GET['myname'] === null):
                    echo "<p>You can get a welcome message.</p>";
                    echo "<p>Please follow Readme.md post.</p>";
                  else:
                    date_default_timezone_set('Pacific/Honolulu');
                    echo "<p id='success'>Welcome ".$_GET['myname']."!</p>";
                    echo "<p id='success'>You visited this website on..</p>";
                    echo "<p id='success'>".date("M/d/Y")." (".date("D").") ".date("h:i:s a")." HST.</p>";
                  endif;
              ?>
            </div>
          </div>
          <div class="readme">
            <div id="profile45"><i class="fab fa-readme"></i></div>
            <span id="postTitle">Readme.md</span>
            <div id="contentsBox">
              <p>With the current URL 'is3.byuh.edu/html/intro.php', add following</p>
              <p>?myname=yourname</p>
              <p>Or, copy and paste this address to your url bar and change 'yourname' to your name.</p>
              <a>is3.byuh.edu/html/intro.php?myname=yourname</a>
            </div>
          </div>
          <div class="sourcecode">
            <div id="profile45"><i class="fas fa-code"></i></div>
            <span id="postTitle">Source Code</span>
            <div id="contentsBox">
              <p>Want to see the source code of this project?</p>
              <p>Visit this Github repository</p>
              <a href="https://github.com/kjunha/Personal_Web_Project/tree/master/html/cs401">https://github.com/kjunha/Personal_Web_Project/tree/master/html/cs401</a>

            </div>
          </div>
          <div class="gallery">
            <div id="profile45"><i class="far fa-images"></i></div>
            <span id="postTitle">My Gallery</span>
            <div id="contentsBox">
              <p>Cover background photo credit: Junha Dexter Kim.</p>
              <p>Visit Instagram gallery to see more picture of the photographer</p>
              <a href="https://www.instagram.com/junha_d._kim/">https://www.instagram.com/junha_d._kim/</a>

            </div>
          </div>
        </div>
      </div>

    </div>

    <!--Common footer-->
    <div id="footer"></div>
    <script>
      $("#footer").load("../../footer.html");
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>

    <!-- Redirection Function -->
    <script>
      function goGithub(){
        location.replace("https://github.com/kjunha")
      }
      function goLinkedin(){
        location.replace("https://www.linkedin.com/in/junhadkim/")
      }
      function goFacebook(){
        location.replace("https://www.facebook.com/kjunha77")
      }
      function goInstagram(){
        location.replace("https://www.instagram.com/junha_d._kim/")
      }
      function goContactMe(){
        location.replace("https://github.com/kjunha")
      }
    </script>
  </body>
</html>
