<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div id="imgqrcode">
    <img id="qrcode" src="./content./qrcode.png" alt="">
    <h2>Agradecemos por escolher nossa loja!</h2>
</div>



<style>
    #imgqrcode{
        text-align: center;
        margin-top: 30px;
        
    }

    #qrcode{
        width: 233px;
        height: 233px;
        box-shadow: 0 0 8px 4px black;
        margin-bottom: 30px;
    }
</style>

<?php
// include do footer
include_once './includes/_footer.php';
?>