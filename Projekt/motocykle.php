<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="motocykle.css">
    <title>Motocykle</title>
</head>
<body>
<div id="header" onclick="redirectToIndex()">Strona Główna</div>

<div id="lista" class="section">
    <h2>Lista dostępnych motocykli</h2>
    
                                                             <!-- początek listy motocyklów -->
    <div class="motocykl" id="kawasaki">
        <img src="images/Ninja.jpg" alt="Kawasaki Ninja H2" onclick="toggleSpecs('kawasaki-specs', 'Kawasaki: Ninja H2', 'Pojemność: 998 cm³\nMoc Maksymalna: 200.0 KM\nWaga: 238.1 kg')">
        <p id="kawasaki-specs">Kawasaki: Ninja H2</p>
    </div>

    <div class="motocykl" id="suzuki">
        <img src="images/suzuki.jpg" alt="Suzuki GSX-R1000" onclick="toggleSpecs('suzuki-specs', 'Suzuki: GSX-R1000', 'Pojemność: 999 cm³\nMoc Maksymalna: 178 KM (131 kW)\nWaga: 170 kg')">
        <p id="suzuki-specs">Suzuki: GSX-R1000</p>
    </div>

        <div class="motocykl" id="bmw">
            <img src="images/bmw.jpg" alt="BMW S1000RR"  onclick="toggleSpecs('bmw-specs', 'BMW: S1000RR','Pojemność: 999 cm³\nMoc Maksymalna: 207 KMn\nWaga: 204 kg')">
            <p id="bmw-specs">BMW: S1000RR</p>
        </div>

        <div class="motocykl" id="yamaha">
            <img src="images/yamaha.jpg" alt="Yamaha YZF-R1"  onclick="toggleSpecs('yamaha-specs','Yamaha: YZF-R1','Pojemność: 998 cm³\nMoc Maksymalna:  197.0 KM\nWaga: 203 kg')">
            <p id="yamaha-specs">Yamaha: YZF-R1</p>
        </div>

        <div class="motocykl" id="ducati">
            <img src="images/ducati.jpg" alt="Ducati Panigale V4 R"  onclick="toggleSpecs('ducati-specs','Ducati: Panigale V4 R','Pojemnośc: 998cm³\nMoc Maksymalna: 218 KM\nWaga: 172 kg')">
            <p id="ducati-specs">Ducati: Panigale V4 R</p>
        </div>

        <div class="motocykl" id="honda">
            <img src="images/honda cbr600r.jpg" alt="Honda CBR600R"  onclick="toggleSpecs('honda-specs', 'Honda: CBR 600R','Pojemność: 599.0 cm³\nMoc Maksymalna: 118 KM\nWaga: 186.0 kg')">
            <p id="honda-desc">Honda: CBR 600R</p>
        </div>

        <div class="motocykl" id="aprilia">
            <img src="images/aprilia RSV4.jpg" alt="Aprilia RSV4"  onclick="toggleSpecs('aprilia-specs', 'Aprilia: RSV4','Pojemność: 1099 cm³\nMoc maksymalna: 217 KM (159,5 kW)\nWaga: 202 kg')">
            <p id="aprilia-specs">Aprilia: RSV4</p>
        </div>

        <div class="motocykl" id="kawasaki">
            <img src="images/Ninja e-1.jpg" alt="Ninja e-1"  onclick="toggleSpecs('kawasaki-specs', 'Kawasaki: Ninja E-1: ABS','Pojemność: 125 cm³\nMoc maksymalna: 9,0 kW {12 KM}\nWaga: 140 kg')">
            <p id="kawasakie-1-specs">Kawasaki: Ninja E-1: ABS</p>
        </div>

        <div class="motocykl" id="suzuki">
            <img src="images/Suzuki gsx8r.webp" alt="Suzuki gsx8r"  onclick="toggleSpecs('suzuki-specs', 'Suzuki: GSX8R','Pojemność: 776 cm³\nMoc maksymalna: 83 KM (61 kW)\nWaga: 205 kg')">
            <p id="suzuki-specs">Suzuki: GSX8R</p>
        </div>

        <div class="motocykl" id="bmw">
            <img src="images/bmw r1250 rs.jpg" alt="Bmw r1250 rs"  onclick="toggleSpecs('bmw-specs', 'BMW: R1250 RS','Pojemność: 1.254 cm³\nMoc maksymalna: 100 kW (136 KM)\nWaga: 243 kg')">
            <p id="bmw-specs">BMW: R1250 RS</p>
        </div>

        <div class="motocykl" id="yamaha">
            <img src="images/yamaha mt-10.jpg" alt="Yamaha mt-10"  onclick="toggleSpecs('yamaha-specs', 'Yamaha: MT-10','Pojemność: 998 cm³\nMoc maksymalna: 165,9 KM (122,0 kW)\nWaga: 214 kg')">
            <p id="yamaha-specs">Yamaha: MT-10</p>
        </div>

        <div class="motocykl" id="ducati">
            <img src="images/ducati Superleggera V4.jpg" alt="Ducati Superleggera V4"  onclick="toggleSpecs('ducati-specs', 'Ducati: Superleggera V4','Pojemnośc: 998 cm³\nMoc Maksymalna: 234 KM\nWaga: 152,2 kg')">
            <p id="ducati-specs">Ducati: Superleggera V4</p>
        </div>

        <div class="motocykl" id="honda">
            <img src="images/CBR1000RR-R Fireblade.jpg" alt="Honda CBR1000RR-R"  onclick="toggleSpecs('honda-specs', 'Honda: CBR1000RR-R','Pojemność: 999,9 cm³\nMoc Maksymalna: 216,9 KM (159,5 kW)\nWaga: 201,3 kg')">
            <p id="honda-specs">Honda: CBR1000RR-R</p>
        </div>

        <div class="motocykl" id="aprilia">
            <img src="images/aprilia RS 125.jpg" alt="Aprilia RS 125"  onclick="toggleSpecs('aprilia-specs', 'Aprilia: RS125','Pojemność: 125 cm³\nMoc Maksymalna: 34 KM\nWaga: 142 kg')">
            <p id="aprilia-specs">Aprilia: RS125</p>
        </div>

        <div class="motocykl" id="kawasaki">
            <img src="images/Ninja zx4r.jpg" alt="Ninja ZX4R"  onclick="toggleSpecs('kawasaki-specs', 'Kawasaki: Ninja ZX4R','Pojemność: 399 cm³\nMoc Maksymalna: 57 kW {77 KM}\nWaga: 189 kg')">
            <p id="kawasakizx4r-specs">Kawasaki: Ninja ZX4R</p>
        </div>

        <div class="motocykl" id="suzuki">
            <img src="images/Suzuki gsxr125.webp" alt="Suzuki GSXR 125"  onclick="toggleSpecs('suzuki-specs', 'Suzuki: GSXR-125','Pojemność: 124,4 cm³\nMoc Maksymalna: 11 kW (15 KM)\nWaga: 134 kg')">
            <p id="suzuki-specs">Suzuki: GSXR-125</p>
        </div>

        <div class="motocykl" id="bmw">
            <img src="images/bmw m1000rr.jpg" alt="Bmw m1000 rr"  onclick="toggleSpecs('bmw-specs', 'BMW: M1000 RR','Pojemność: 999 cm³\nMoc Maksymalna: 212 KM (156 kW)\nWaga: 199 kg')">
            <p id="bmw-specs">BMW: M1000 RR</p>
        </div>

        <div class="motocykl" id="yamaha">
            <img src="images/yamaha r1m.jpg" alt="Yamaha R1M"  onclick="toggleSpecs('yamaha-specs', 'Yamaha: R1M','Pojemność: 998 cm³\nMoc Maksymalna: 200.0 KM\nWaga: 200.0 kg')">
            <p id="yamaha-specs">Yamaha: R1M</p>
        </div>

        <div class="motocykl" id="ducati">
            <img src="images/ducati panigale v2.jpg" alt="Ducati Panigale V2"  onclick="toggleSpecs('ducati-specs', 'Ducati: Panigale V2','Pojemność: 955 cm³\nMoc Maksymalna: KM/KW: 155/114\nWaga: 200 kg')">
            <p id="ducati-specs">Ducati: Panigale V2</p>
        </div>

        <div class="motocykl" id="honda">
            <img src="images/cb750 hornet.jpg" alt="Honda CB750 Hornet"  onclick="toggleSpecs('honda-specs', 'Honda CB750 Hornet','Pojemność: 755 cm³\nMoc Maksymalna: 67,6 kW\nWaga: 190 kg')">
            <p id="honda-specs">Honda CB750 Hornet</p>
        </div>

        <div class="motocykl" id="aprilia">
            <img src="images/aprilia RS 660.jpg" alt="Aprilia RS 660"  onclick="toggleSpecs('aprilia-specs', 'Aprilia: RS 660','Pojemność: 659 cm³\nMoc Maksymalna: 73,5 kW\nWaga: 183 kg')">
            <p id="aprilia-specs">Aprilia: RS 660</p>
        </div>
    </div>
                                                                 <!-- koniec listy motocyklów -->
       <div id="specyfikacje" class="hidden">
          <div id="content"></div>
            <button onclick="hideSpecs()">Zamknij</button>
      </div>
   
                <?php include 'stopka.php';?>


                <!-- javascript -->
    <script>
    function toggleSpecs(specsId, desc, specyfikacje) {
        var specsDiv = document.getElementById(specsId);
        var contentDiv = document.getElementById('content');
        var descParagraph = document.getElementById(desc.toLowerCase() + '-desc');

        if (specsDiv.classList.contains('hidden')) {
            contentDiv.innerHTML = '<h3>' + desc + '</h3><p>' + specyfikacje + '</p>';
            specsDiv.classList.remove('hidden');
        } else {
            specsDiv.classList.add('hidden');
        }

        document.getElementById('specyfikacje').classList.remove('hidden');
    }

    function hideSpecs() {
        document.getElementById('specyfikacje').classList.add('hidden');
    }

    function redirectToIndex() {
        window.location.href = 'index.php';
    }
</script>
</body>
</html>
