<?php
if(isset($_SESSION['username'])){
    echo "<h2>Bem-vindo(a), " . $_SESSION['username'] . "</h2>";
}else{
    echo "<h2>Bem-vindo(a)</h2>";
}
?>