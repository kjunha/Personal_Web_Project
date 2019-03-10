<?php
include 'snsproj_be.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Share Quotes</title>
    <link rel="stylesheet" type="text/css" href="sns_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <body>
    <!--Common menu bar-->
    <div id="menubar"></div>
    <script>
      $("#menubar").load("sns_header.html");
    </script>
    <!--Main Contents-->
      <div id="content">
        <div id="title" class="ui container">
          <p><i>Share Your Favorite Quote!</i></p>
        </div>
        <p class="ui medium header" style="text-align:center;">Click the box below to share a quote that inspired you or touched you.</p>
        <div class="ui grid">
          <div class="twelve wide column"> </div>
          <div id="scoreboard" class="two wide column">
            <p class="ui medium header">Post</p>
            <?php
              $sql_all = "SELECT * FROM userinput;";
              $result = mysqli_query($connection, $sql_all);
              $num = mysqli_num_rows($result);
              echo '<p>'.$num.'</p>';
            ?>
          </div>
          <div id="scoreboard" class="two wide column">
            <p class="ui medium header">Like</p>
            <?php
              $sql_sum = "SELECT SUM(liked) AS `sum` FROM userinput;";
              $result = mysqli_query($connection, $sql_sum);
              $row = mysqli_fetch_assoc($result);
              echo '<p>'.$row['sum'].'</p>';
            ?>
          </div>
        </div>

          <div id="inputtrig" class="ui form">
            <div class="ui grid">
              <div class="two wide column" style="text-align: right;">
                <i class="quote left icon"></i>
              </div>
              <div class="twelve wide column">
                <button id="inpbox" class="fluid ui button"><i class="edit icon"></i> Please Enter your quote to share.</button>
              </div>
              <div class="two wide column">
                <i class="quote right icon"></i>
              </div>
            </div>
          </div>
    <!--Contents Box Generator PHP-->
      <?php
      include "contentsbox.php";
      ?>
    </div>
    <!--Model(overlay popups)-->
    <div id="modal" class="ui modal">
      <!-- Modal content -->
      <div id="modal-content" class="content">
        <div id="modeltitle">
          <p class="ui inverted medium header">Share your favorite quote.</p>
        </div>
        <div id="inputform" class="content">

    <!--form here-->
          <form id="shform" class="ui form" action="snsproj_dat_in.php" method="POST">
            <div class="field">
              <label>E-mail (Your email will not be shown to others.)</label>
              <input id="em" type="text" name="email" placeholder="E-mail">
            </div>
            <div class="field">
              <label>Quote (max 200 words)</label>
              <textarea name="quote" rows="4" form="shform"></textarea>
            </div>
            <div class="two fields">
              <div class="field">
                <label>Book Title (Source)</label>
                <input type="text" name="btitle" placeholder="Book Title">
              </div>
              <div class="field">
                <label>Author (Presenter)</label>
                <input type="text" name="author" placeholder="Author">
              </div>
            </div>
            <input type="text" name="liked" id="liked" style="display:none;"/>
          </form>

          <div class="ui grid">
            <div class="twelve wide column">  </div>
            <div class="two wide column" style="text-align:right;">
              <button id="close" class="ui button">Cancel</button>
            </div>
            <div class="two wide column" style="text-align:right;">
              <button id="submit" class="ui green button">Share</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Thank you (overlay popups)-->
    <div id="thank" class="ui modal">
      <!-- Modal content -->
      <div id="modal-content-t" class="content">
        <div id="modeltitle">
          <p class="ui inverted medium header">Thank you for sharing.</p>
        </div>
        <div id="inputform">
          <p class="ui small header" style="font-size:18pt;">Thank you for visiting and Sharing! Your posts and likes are precious to my project.</p>
          <p class="ui small header" style="font-size:18pt;">If you like this project, please press Like button!</p>
          <p>This is a protype of my personal project, and my final goal is to build a social media platform, where people can sharing their readings and books so that we can provide some insightful knowledge to public. See more detail on my Github.</p>
        <div class="ui grid">
          <div class="eight wide column">  </div>
          <div class="four wide column" style="text-align:right;">
            <button class="ui black button" onclick="window.open('https://github.com/kjunha','_blank')"><i class="github icon"></i>My Github</button>
          </div>
          <div class="two wide column" style="text-align:right;">
            <button id="tclose" class="ui button">Ignore</button>
          </div>
          <div class="two wide column" style="text-align:right;">
            <button id="like" class="ui green button">Like</button>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!--Common Footer-->
    <div id="footer"></div>
    <script>
      $("#footer").load("sns_footer.html");
    </script>
      <script>
        var modal = document.getElementById('modal');
        var thank = document.getElementById('thank');
        var span = document.getElementById('close');
        var tspan = document.getElementById('tclose');
        var submit = document.getElementById('submit');
        var like = document.getElementById('like');
        var trig = document.getElementById('inpbox');
        var shareform = document.getElementById('shform');
        var liked = document.getElementById('liked');
        trig.onclick = function() {
          modal.style.display = 'block';
        }
        span.onclick = function() {
          modal.style.display = 'none';
        }
        submit.onclick = function() {
          if(document.getElementById('em').value == "") {
            alert("E-mail must be filled out");
            return false;
          } else{
            thank.style.display = 'block';
            modal.style.display = 'none';
          }
        }
        tspan.onclick = function() {
          liked.value = '0';
          shareform.submit();
          //No need to addtion seq on like count.
        }
        like.onclick = function(){
          liked.value = '1';
          shareform.submit();
          //like added;
        }
      </script>
      <?php
        mysqli_close($connection);
      ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  </body>
</html>
