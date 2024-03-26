//pagina logout
<?php
session_abort();
header("Location: ../frontend/login.php");
?>