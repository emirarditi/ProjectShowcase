<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['id'])){
    session_destroy();
}
?>
<script>function logout() {
        window.location.href = "index.php";
    }
    logout();
</script>
