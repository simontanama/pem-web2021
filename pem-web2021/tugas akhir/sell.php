<!DOCTYPE html>
<html>
    <head>
        <title>SELL</title>
        <link rel="stylesheet" href="design.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="javascript.js">
            
        </script>
    </head>
    <body>
        <!-- header -->
            <marquee scrolldelay="0">
                <img src="logo games.png" alt="logo games.png" height="80" width="250">    
            </marquee>
            <br><hr>
        <header>
            <ul>
                <b>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="product.html">BUY ACCOUNT</a></li>
                <li><a href="sell.php"  style="background-color: blue; color: white;">SELL ACCOUNT</a></li>
                </b>
            </ul>
        </header>
        <!-- isi -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <table align="center" style="padding: 5em; background-color: coral;">
                <tr>
                    <td><label>Server</label></td>
                    <td><input type="text" name="fserver"></td>
                </tr>
                <tr>
                    <td><label>AR Level</label></td>
                    <td><input type="number" name="flevel"></td>
                </tr>
                <tr>
                    <td><label>Rare Character</label></td>
                    <td><input type="number" name="fchar"></td>
                </tr>
                <tr>
                    <td><label>Price (USD)</label></td>
                    <td><input type="number" name="fprice"></td>
                </tr>
                <tr>
                    <td><label>Message</label></td>
                    <td><input type="text" name="fpesan"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>  
                </form>
                <tr>

                    <?php
                        if(isset($_POST['fserver'])){
                            $server = $_POST['fserver'];
                            $level = $_POST['flevel'];
                            $char = $_POST['fchar'];
                            $price = $_POST['fprice'];
                            $pesan = $_POST['fpesan'];
                            $linkchat = "https://wa.me/+62811295520?text=I+want+to+sell+account+Server:$server+Level:$level+Rare+Char:$char+Price:$price+$pesan";
                            echo " <td><a href='$linkchat'>Send To Whatsapp!</a></td> " ;
                        }                       
                    ?>
                </tr> 
            </table>
        <!-- footer -->
        <footer style="height: 20%;" >
            <div>
                <ul style="font-size: 25px;"><b>FOLLOW US AT:</b></ul>
                <ul>
                    <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                    <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                    <li><a href="https://twitter.com/" class="fa fa-twitter"></a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>