<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House for Sale</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="ui-controller.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="house.jpg" alt="House for sale" />
        </div>
        <form id="expose-form" action="download.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required />

            <label for="phone">Telephone Number:</label>
            <input type="tel" id="phone" name="phone" required />

            <button type="submit" class="button-download" role="button">
                <span class="text">Expose herunterladen</span>
            </button>
        </form>
        <footer>
            <a href="#" id="impressum">Impressum</a>
        </footer>
    </div>
    <div class="modal" id="modal">
        <div class="modal-content">
            <h3>Impressum</h3>
            <p>Owner Name<br>Street Address<br>City, Postal Code<br>Country</p>
            <button id="close-modal">Close</button>
        </div>
    </div>
</body>
</html>