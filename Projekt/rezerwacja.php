<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rezerwacja.css">
    <link rel="stylesheet" href="koszyk.css">
    <link rel="stylesheet" href="style.css">
    <title>Rezerwacja Motocykli</title>
</head>
<body>

<div id="rezerwacja" class="section">
    <h2>Rezerwacja</h2>
    <form method="post" action="rezerwacja.php">
        <label for="marka">Wybierz Markę:</label>
        <select name="marka" id="marka" onchange="updateMotocykle()">
            <option disabled selected>---------</option>
            <option value="kawasaki">Kawasaki</option>
            <option value="suzuki">Suzuki</option>
            <option value="bmw">BMW</option>
            <option value="yamaha">Yamaha</option>
            <option value="ducati">Ducati</option>
        </select>

        <label for="motocykl">Wybierz Motocykl:</label>
        <select name="motocykl" id="motocykl">
            <option disabled selected>---------</option>
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

<div id="lista-motocykli">
    <div class="motocykl" id="kawasaki-ninja-h2" onclick="selectMotocykl('kawasaki-ninja-h2')">
        <img src="images/Ninja.jpg" alt="Kawasaki Ninja H2">
        <p id="kawasaki-ninja-h2-desc">Kawasaki: Ninja H2</p>
    </div>

    <div class="motocykl" id="kawasaki-ninja-e1" onclick="selectMotocykl('kawasaki-ninja-e1')">
        <img src="images/Ninja e-1.jpg" alt="Kawasaki Ninja e-1">
        <p id="kawasaki-ninja-e1-desc">Kawasaki: Ninja e-1</p>
    </div>

    <div class="motocykl" id="kawasaki-ninja-zx4r" onclick="selectMotocykl('kawasaki-ninja-zx4r')">
        <img src="images/Ninja zx4r.jpg" alt="Kawasaki Ninja ZX4R">
        <p id="kawasaki-ninja-zx4r-desc">Kawasaki: Ninja ZX4R</p>
    </div>

    <div class="motocykl" id="suzuki-gsx-r1000" onclick="selectMotocykl('suzuki-gsx-r1000')">
        <img src="images/Suzuki.jpg" alt="Suzuki gsxr 1000">
        <p id="suzuki-gsx-r1000-desc">Suzuki GSXR-1000</p>
    </div>

    <div class="motocykl" id="suzuki-gsx8r" onclick="selectMotocykl('suzuki-gsx8r')">
        <img src="images/suzuki gsx8r.webp" alt="Suzuki GSX8R">
        <p id="suzuki-gsx8r-desc">Suzuki: GSX8R</p>
    </div>


</div>

<?php include 'stopka.php';?>

<script>
    var motocykle = {
        kawasaki: ['ninja-h2', 'ninja-e1', 'ninja-zx4r'],
        suzuki: ['gsx-r1000','gsx8r','gsxr125'],
        bmw: ['r1250-rs', 'm1000rr','s1000rr'],
        yamaha: ['mt-10', 'r1m','yzf-r1'],
        ducati: ['superleggera-v4', 'panigale-v2', 'panigale-v4r'],
        aprilia: ['rsv4','rs125','rs660']
    };

    function updateMotocykle() {
        var markaSelect = document.getElementById('marka');
        var motocyklSelect = document.getElementById('motocykl');
        var selectedMarka = markaSelect.value;

        motocyklSelect.innerHTML = '<option disabled selected>---------</option>';

        if (selectedMarka in motocykle) {
            motocykle[selectedMarka].forEach(function (model) {
                var option = document.createElement('option');
                option.value = model;
                option.text = model.charAt(0).toUpperCase() + model.slice(1).replace('-', ' ');
                motocyklSelect.add(option);
            });
        }
    }

    function selectMotocykl(motocyklId) {
        var motocykleDiv = document.getElementById('lista-motocykli');
        var motocykleElements = motocykleDiv.getElementsByClassName('motocykl');

        for (var i = 0; i < motocykleElements.length; i++) {
            motocykleElements[i].classList.remove('selected');
        }

        var selectedMotocykl = document.getElementById(motocyklId);
        selectedMotocykl.classList.add('selected');
    }

    // użyłem kodu z Internetu na wybór i aktualizowanie dostępnych motocykli
</script>
</body>
</html>
