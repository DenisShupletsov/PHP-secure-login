<<!-- Hello GitHub! -->>

<?php

  echo "<p>login - ".$_POST["login"]."</p>";
  echo "<p>password - ".$_POST["password"]."</p>";

?>

<html>
 <head>
  <meta charset="utf-8">
  <title>Project</title>
 </head>
 <body>

   <form action="/" method="post">

   <p> <input type="text" name="login" size="10" placeholder="login" required></input></p>
   <p> <input type="password" name="password" size="10" placeholder="password" required></input></p>
   <p> <input type="submit" value="enter"></input> </p>

   </form>

 </body>
</html>
