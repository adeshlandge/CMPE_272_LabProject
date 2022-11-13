<html>

<body>
    <section class="main-section alabaster" id="tops">
        <div class="container fullsize">
            <?php
            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, "http://www.adeshlandge.com/exposecontacts.php");
            curl_setopt($curl_handle, CURLOPT_HEADER, 0);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
            $contents = curl_exec($curl_handle);
            curl_setopt($curl_handle, CURLOPT_URL, "http://myhvdomain.ninja/iphonestore/admin.php");
            $contents = $contents . "," . curl_exec($curl_handle);
            curl_setopt($curl_handle, CURLOPT_URL, "http://chiruhas.com/BurgerShack-CMPE-272/curl_expose.php");
            $contents = $contents . "," . curl_exec($curl_handle);           
            curl_close($curl_handle);

            foreach (explode(",", $contents) as $content) {
                echo $content . "<br/>";
            }
            ?>

        </div>
    </section>
</body>

</html>