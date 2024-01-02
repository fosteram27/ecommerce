<html>
    <head>
        <title>Simple e-commerce application</title>
    </head>

    <body>
        <h1>Welcome to my simple e-commerce site</h1>
        <ul>
  
  <?php
        $json = file_get_contents('http://product-service');
        $obj = json_decode($json, $associative = false);

        $products = $obj -> products;
        foreach ($products as $product) {
            echo "<li> $product </li>";
        }
  ?>
        </ul>
    </body>
</html>
