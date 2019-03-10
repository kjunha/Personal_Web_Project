<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sandbox</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  </head>
  <style media="screen">
    #posts{
      padding-left: 10%;
      padding-right: 10%;
    }
    #contents{
      text-align: center;
      text-size: 15pt;
    }
    #contents_btm {
      font-style: italic;
    }
  </style>
  <body>
    <div id="posts" class="posts">
    <div class='ui raised segment'>
    <div class="ui grid">
    <div class="twelve wide column">
    <div class="ui large header">
    kjunha
    </div>
    </div>
    <div class="four wide column" style="text-align:right;">
    2019/02/27 00:00:00
          </div>
        </div>
        <div id="contents">
          <i class="quote left icon"></i>&nbsp;&nbsp;This is posting&nbsp;&nbsp;<i class="quote right icon"></i>
        </div>
        <div id="contents_btm">
          <div class="ui grid">
            <div class="ten wide column"> </div>
            <div class="six wide column">
                - author name and book title
            </div>
          </div>
        </div>
      </div>
    </div>






    <p>php section------------</p>
    <?php
      $bool = false;
      $num = 3 + 4;
      $str = "A string here";
      echo($num);
    ?>
    <p>js section--------------</p>
    <script type="text/javascript">
      // boolean outputs "" if false, "1" if true
      var bool = "<?php echo $bool ?>";
      document.write(bool);
      // numeric value, both with and without quotes
      var num = <?php echo $num ?>; // 7
      document.write(num);
      var str_num = "<?php echo $num ?>"; // "7" (a string)

      var str = "<?php echo $str ?>"; // "A string here"
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  </body>
</html>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
      alert("hahaha");
    </script>
  </body>
</html>
