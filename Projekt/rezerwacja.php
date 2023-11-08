<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="koszyk.css">
    <title>Rezerwacja</title>
</head>
<body>

<div id="rezerwacja" class="section">
        <h2>Rezerwacja</h2>
        <form method="post" action="rezerwacja.php">
            <label for="motocykl">Wybierz Markę:</label>
            <select name="motocykl" id="motocykl">
               <option disabled>---------</option>
               <option value="1">Kawasaki</option>
               <option value="2">Suzuki</option>
               <option value="3">BMW</option>
               <option value="4">Yamaha</option>
               <option value="5">Ducati</option>
               <option disabled>---------</option>
            </select>
            <label for="data_rozpoczecia">Data rozpoczęcia:</label>
            <input type="date" name="data_rozpoczecia" id="data_rozpoczecia">
            <label for="czas_rozpoczecia">Czas rozpoczęcia:</label>
            <input type="time" name="czas_rozpoczecia" id="czas_rozpoczecia">
            <label for="czas_zakonczenia">Czas zakończenia:</label>
            <input type="time" name="czas_zakonczenia" id="czas_zakonczenia">
            <input type="submit" value="Zarezerwuj" class="Zarezerwuj">
        </form>
    </div>

    <div>
        <?php include 'stopka.php';?>
    </div>
</body>
</html>