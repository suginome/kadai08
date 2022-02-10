<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合
if (isset($_SESSION['EMAIL'])) {
  echo 'ようこそ' .  h($_SESSION['EMAIL']) . "さん<br>";
  echo "<a href='/logout.php'>ログアウトはこちら。</a>";
  exit;
}

 ?>

<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>スギノメモ　Login</title>
 </head>
 <body>
   <h1>会議が始まります。用意はいいですか？</h1>
   <form  action="record_index.php" method="post">
     <label for="email">email</label>
     <input type="email" name="email"><br>
     <label for="password">password</label>
     <input type="password" name="password">
     <button type="submit"　>Sign In!</button>
    
 </body>
</html>