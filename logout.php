<?php

session_start();


echo '<script>

	window.location ="login.php";

	alert("Goodbye.")
    </script>';	



session_destroy();


?>