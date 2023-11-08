<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kontakt.css">
    <title>Formularz Kontaktowy</title>
</head>
<body>
    <form class="form">
        <h2>Skontaktuj się z Nami</h2>
        <p>Imię:</p>
        <input type="text" placeholder="Twoje imię" id="imie" required>
        <p>E-mail:</p>
        <input type="email" placeholder="Twój e-mail" id="email" required>
        <p>Wiadomość:</p>
        <textarea placeholder="Wiadomość" id="wiadomosc" required></textarea>
        <button onclick="wyslij()">Wyślij</button>
    </form>
    
    <div>
        <span class="fa fa-phone"></span>+48 123 345 567
        <span class="fa fa-envelope-o"></span> motorWyp@gmail.com
    </div>

    <script>
        function wyslij() {
            var imie = document.getElementById("imie").value;
            var email = document.getElementById("email").value;
            var wiadomosc = document.getElementById("wiadomosc").value;

            if (imie && email && wiadomosc) {
                alert("Dziękujemy za Kontakt. Skontaktujemy się z państwem w ciągu 24h");
            } else {
                alert("Proszę wypełnić wszystkie pola formularza.");
            }
        }
    </script>
</body>
</html>
