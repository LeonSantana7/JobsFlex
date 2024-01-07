<?php
// Obtém as mensagens do arquivo e exibe para o cliente
$file = 'messages.txt';
if (file_exists($file)) {
    echo file_get_contents($file);
}
?>
