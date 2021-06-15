<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Management [Add]</title>
</head>
<body>
    <form action="/resource/php/create.php">

        <label for="emri">Emri:</label><br>
        <input type="text" id="emri" name="emri" value=""><br>

        <label for="mbiemri">Mbiemri:</label><br>
        <input type="text" id="mbiemri" name="mbiemri" value=""><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br>

        <label for="telefon">Telefon:</label><br>
        <input type="text" id="telefon" name="telefon" value=""><br>

        <label>Gjinia: </label><br />
        <input type="radio" name="gjinia" value="mashkull">Mashkull<br />
        <input type="radio" name="gjinia" value="femer">Femer<br />
        <input type="radio" name="other" value="other">Other<br />

        <label for="shteti">Shteti:</label><br>
        <input type="text" id="shteti" name="shteti" value=""><br>

        <label for="qyteti">Qyteti:</label><br>
        <input type="text" id="qyteti" name="qyteti" value=""><br>

        <label for="pozicioni">Pozicioni:</label><br>
        <input type="text" id="pozicioni" name="pozicioni" value=""><br>

        <input type="submit" value="Regjistro Punonjes ">
    </form>
</body>
</html>
