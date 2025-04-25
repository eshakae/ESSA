<?php
session_start();
unset($_SESSION['peserta']);
header("Location: peserta.php");
exit;
