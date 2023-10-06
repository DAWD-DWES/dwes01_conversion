<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversión de valores entre tipos</title>
    </head>
    <body>
        <?php
        echo "<h2>Conversión booleano</h2>";
        echo '(bool) "false" ';
        var_dump((bool) "false");
        echo '<br />';
        echo '(bool) "0" ';
        var_dump((bool) "0");
        echo '<br />';
        echo '(bool) 0 ';
        var_dump((bool) 0);
        echo '<br />';
        echo '(bool) 1 ';
        var_dump((bool) 1);
        echo '<br />';
        echo '(bool) 1000 ';
        var_dump((bool) 1000);
        echo '<br />';
        echo '(bool) "" ';
        var_dump((bool) "");
        echo '<br />';
        echo '(bool) " " ';
        var_dump((bool) " ");
        echo '<br />';
        echo '(bool) 0b0 ';
        var_dump((bool) 0b0);
        echo '<br />';
        echo '(bool) 0b1 ';
        var_dump((bool) 0b1);
        echo '<br />';
        echo '(bool) 0.0 ';
        var_dump((bool) 0.0);
        echo '<br />';
        echo '(bool) 1.0 ';
        var_dump((bool) 1.0);
        echo '<br />';
        echo '(bool) NULL ';
        var_dump((bool) NULL);
        // Conversión entero
        echo "<h2>Conversión entero</h2>";
        echo '(int) true ';
        var_dump((int) true);
        echo '<br />';
        echo '(int) false ';
        var_dump((int) false);
        echo '<br />';
        echo '(int) "123" ';
        var_dump((int) "123");
        echo '<br />';
        echo '(int) "123.45" ';
        var_dump((int) "123.45");
        echo '<br />';
        echo '(int) "123Hola" ';
        var_dump((int) "123Hola");
        echo '<br />';
        echo '(int) "Hola123" ';
        var_dump((int) "Hola123");
        echo '<br />';
        echo '(int) "" ';
        var_dump((int) "");
        echo '<br />';
        echo '(int) "0.001" ';
        var_dump((int) "0.001");
        echo '<br />';
        echo '(int) NULL ';
        var_dump((int) NULL);
        // Conversión decimal
        echo "<h2>Conversión decimal</h2>";
        echo '(float) true ';
        var_dump((float) true);
        echo '<br />';
        echo '(float) false ';
        var_dump((float) false);
        echo '<br />';
        echo '(float) "123 ';
        var_dump((float) "123");
        echo '<br />';
        echo '(float) "123.45" ';
        var_dump((float) "123.45");
        echo '<br />';
        echo '(float) "123Hola" ';
        var_dump((float) "123Hola");
        echo '<br />';
        echo '(float) "Hola123" ';
        var_dump((float) "Hola123");
        echo '<br />';
        echo '(float) "" ';
        var_dump((float) "");
        echo '<br />';
        echo '(float) 0xA2 ';
        var_dump((float) 0xA2);
        echo '<br />';
        echo '(float) "0.001" ';
        var_dump((float) "0.001");
        echo '<br />';
        echo '(float) NULL';
        var_dump((float) NULL);
        // Conversión cadena
        echo "<h2>Conversión cadena</h2>";
        echo '(string) true ';
        var_dump((string) true);
        echo '<br />';
        echo '(string) false ';
        var_dump((string) false);
        echo '<br />';
        echo '(string) 0 ';
        var_dump((string) 0);
        echo '<br />';
        echo '(string) 012 ';
        var_dump((string) 012);
        echo '<br />';
        echo '(string) 0.23 ';
        var_dump((string) 0.23);
        echo '<br />';
        echo '(string) 0.0 ';
        var_dump((string) 0.0);
        echo '<br />';
        echo '(string) NULL ';
        var_dump((string) NULL);
        ?>
    </body>
</html>
