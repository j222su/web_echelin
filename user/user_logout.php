<?
session_start();
unset($_SESSION["user_email"]);
unset($_SESSION["user_name"]);
unset($_SESSION["user_level"]);

echo("
       <script>
          location.href = 'user_myinfo_index.php';
         </script>
       ");
?>