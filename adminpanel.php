<!DOCTYPE html>
<html>
    <head>
        <link href="css/adminpanel.css">
    </head>

    <body>
    <h1>Product toevoegen!<br>
        SUPER MOOI</h1>
    <form method="POST">
        <p>Product naam</p><input id="name" type="text" placeholder="Productnaam">
        <p>omschrijving</p><input type="text" placeholder="Omschrijving" maxlength="255">
        <p>Prijs in euro</p><input type="text" placeholder="Prijs">
        <p>Product Code</p><input type="text" placeholder="Productcode">
        <p>Hoofdcategorie</p>
        <select>
            <option>Moederborden</option>
            <option>SSD</option>
            <option>Videokaarten</option>
            <option>Geheugen</option>
            <option>Processoren</option>
            <option>Randapparatuur</option>
            <option>Kabels</option>
            <option>Software</option>
            <option>Voedingen</option>
            <option>Harddisk intern</option>
            <option>Behuizingen</option>
            <option>NAS</option>
        </select>
        <br>
        <br>
        <input type="button"  value="Toevoegen">
    </form>
    </body>
</html>