<?php
  for($i = $num; $i >= 1; $i--) {
    $sql_dat = "SELECT * FROM userinput WHERE `key` = ".$i.";";
    $result = mysqli_query($connection, $sql_dat);
    while($row = mysqli_fetch_assoc($result)){
      $name = strstr($row["email"], '@', TRUE);
      echo "<div id='segm' class='ui raised segment'>";
      echo "<div class='ui grid'>";
      echo "<div class='twelve wide column'>";
      echo "<div class='ui large header'>";
      echo $name;
      echo "</div>";
      echo "</div>";
      echo "<div class='four wide column' style='text-align:right; color:#7E7E7E;'>";
      echo $row["date"];
      echo "</div>";
      echo "</div>";
      echo "<div class='contents'>";
      echo "<i class='quote left icon'></i>&nbsp;&nbsp;".$row["quote"]."&nbsp;&nbsp;<i class='quote right icon'></i>";
      echo "</div>";
      if(empty($row["author"]) == false){
        echo "<div class='contents_btm'>";
        echo "<div class='ui grid'>";
        echo "<div class='ten wide column'> </div>";
        echo "<div class='six wide column'>";
        echo "- ".$row["btitle"]." by ".$row["author"];
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
      echo "</div>";
    }
  }
?>
