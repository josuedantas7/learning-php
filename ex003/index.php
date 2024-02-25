<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Noem e sobrenome:</h1>
    <?
        $nome = "Josue";
        $sobrenome = "Dantas";
        $nome = "Junior"; // This will overwrite the previous value of $nome

        const PAIS = "Brasil";

        echo "<p>Eu me chamo $nome $sobrenome</p>";
        echo "<p>Pais </p>" . PAIS;
    ?>
</body>
</html>