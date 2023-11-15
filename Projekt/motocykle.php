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
<div id="header" onclick="redirectToIndex()">
        Strona Główna
    </div>

    <div id="lista" class="section">
        <h2>Lista dostępnych motocykli</h2>

        <div class="motocykl" id="kawasaki">
            <img src="images/Ninja.jpg" alt="Kawasaki Ninja H2" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Kawasaki Ninja H2', '1200cc, 310 KM, 216 kg')">
            <p>Kawasaki: Ninja H2</p>
        </div>

        <div class="motocykl" id="suzuki">
            <img src="images/suzuki.jpg" alt="Suzuki GSX-R1000" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Suzuki GSX-R1000', '1000cc, 185 KM, 203 kg')">
            <p>Suzuki: GSX-R1000</p>
        </div>

        <div class="motocykl" id="bmw">
            <img src="images/bmw.jpg" alt="BMW S1000RR" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('BMW S1000RR', '1000cc, 205 KM, 197 kg')">
            <p>BMW: S1000RR</p>
        </div>

        <div class="motocykl" id="yamaha">
            <img src="images/yamaha.jpg" alt="Yamaha YZF-R1" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Yamaha YZF-R1', '1000cc, 200 KM, 199 kg')">
            <p>Yamaha: YZF-R1</p>
        </div>

        <div class="motocykl" id="ducati">
            <img src="images/ducati.jpg" alt="Ducati Panigale V4 R" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Ducati Panigale V4 R', '1103cc, 221 KM, 193 kg')">
            <p>Ducati: Panigale V4 R</p>
        </div>

        <div class="motocykl" id="honda">
            <img src="images/honda cbr600r.jpg" alt="Honda CBR600R" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Honda CBR600R', '599cc, 118 KM, 196 kg')">
            <p>Honda: CBR 600R</p>
        </div>

        <div class="motocykl" id="aprilia">
            <img src="images/aprilia RSV4.jpg" alt="Aprilia RSV4" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Aprilia RSV4', '999cc, 201 KM, 199 kg')">
            <p>Aprilia: RSV4</p>
        </div>

        <div class="motocykl" id="kawasaki">
            <img src="images/Ninja e-1.jpg" alt="Ninja e-1" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Ninja e-1', '1000cc, 180 KM, 200 kg')">
            <p>Kawasaki: Ninja E-1: ABS</p>
        </div>

        <div class="motocykl" id="suzuki">
            <img src="images/Suzuki gsx8r.webp" alt="Suzuki gsx8r" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Suzuki gsx8r', '800cc, 150 KM, 185 kg')">
            <p>Suzuki: GSX8R</p>
        </div>

        <div class="motocykl" id="bmw">
            <img src="images/bmw r1250 rs.jpg" alt="Bmw r1250 rs" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Bmw r1250 rs', '1254cc, 136 KM, 236 kg')">
            <p>BMW: R1250 RS</p>
        </div>

        <div class="motocykl" id="yamaha">
            <img src="images/yamaha mt-10.jpg" alt="Yamaha mt-10" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Yamaha mt-10', '998cc, 160 KM, 210 kg')">
            <p>Yamaha: MT-10</p>
        </div>

        <div class="motocykl" id="ducati">
            <img src="images/ducati Superleggera V4.jpg" alt="Ducati Superleggera V4" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Ducati Superleggera V4', '998cc, 234 KM, 152 kg')">
            <p>Ducati: Superleggera V4</p>
        </div>

        <div class="motocykl" id="honda">
            <img src="images/CBR1000RR-R Fireblade.jpg" alt="Honda CBR1000RR-R" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Honda CBR1000RR-R', '1000cc, 214 KM, 201 kg')">
            <p>Honda: CBR1000RR-R</p>
        </div>

        <div class="motocykl" id="aprilia">
            <img src="images/aprilia RS 125.jpg" alt="Aprilia RS 125" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Aprilia RS 125', '125cc, 15 KM, 135 kg')">
            <p>Aprilia: RS125</p>
        </div>

        <div class="motocykl" id="kawasaki">
            <img src="images/Ninja zx4r.jpg" alt="Ninja ZX4R" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Ninja ZX4R', '400cc, 60 KM, 180 kg')">
            <p>Kawasaki: Ninja ZX4R</p>
        </div>

        <div class="motocykl" id="suzuki">
            <img src="images/Suzuki gsxr125.webp" alt="Suzuki GSXR 125" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Suzuki GSXR 125', '125cc, 15 KM, 134 kg')">
            <p>Suzuki: GSXR-125</p>
        </div>

        <div class="motocykl" id="bmw">
            <img src="images/bmw m1000rr.jpg" alt="Bmw m1000 rr" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Bmw m1000 rr', '1000cc, 212 KM, 192 kg')">
            <p>BMW: M1000 RR</p>
        </div>

        <div class="motocykl" id="yamaha">
            <img src="images/yamaha r1m.jpg" alt="Yamaha R1M" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Yamaha R1M', '1000cc, 200 KM, 199 kg')">
            <p>Yamaha: R1M</p>
        </div>

        <div class="motocykl" id="ducati">
            <img src="images/ducati panigale v2.jpg" alt="Ducati Panigale V2" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Ducati Panigale V2', '955cc, 155 KM, 199 kg')">
            <p>Ducati: Panigale V2</p>
        </div>

        <div class="motocykl" id="honda">
            <img src="images/cb750 hornet.jpg" alt="Honda CB750 Hornet" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Honda CB750 Hornet', '748cc, 92 KM, 218 kg')">
            <p>Honda CB750 Hornet</p>
        </div>

        <div class="motocykl" id="aprilia">
            <img src="images/aprilia RS 660.jpg" alt="Aprilia RS 660" onmouseover="highlight(this)" onmouseout="unhighlight(this)" onclick="showSpecs('Aprilia RS 660', '660cc, 100 KM, 169 kg')">
            <p>Aprilia: RS 660</p>
        </div>
    </div>

    <div id="specyfikacje" class="hidden" onclick="hideSpecs()">
        <div id="content">
            
        </div>
    </div>

    <div>
        <?php include 'stopka.php';?>
    </div>

    <script>
        function highlight(element) {
            element.style.opacity = '0.8';
            element.style.transition = 'opacity 0.3s';
        }

        function unhighlight(element) {
            element.style.opacity = '1';
        }

        function showSpecs(model, specyfikacje) {
            var specyfikacjeDiv = document.getElementById('specyfikacje');
            var contentDiv = document.getElementById('content');
            contentDiv.innerHTML = '<h3>' + model + '</h3><p>' + specyfikacje + '</p>';
            specyfikacjeDiv.classList.remove('hidden');
        }

        function hideSpecs() {
            var specyfikacjeDiv = document.getElementById('specyfikacje');
            specyfikacjeDiv.classList.add('hidden');
        }

        function redirectToIndex() {
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>
