<?php

session_destroy();
echo "Logging you out";
header("Location: ../index.php");
exit;