<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contactos - BeachTribe</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="website icon" type="image/apng" href="img/DarkSolo.png">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

        <div class="samuel_contact-container">
            <h1>Contacte-nos</h1>
            <p>Bem vindo à nossa página de contactos, se tiver alguma dúvida preencha os campos a baixo.</p>
          
            <form>
              <label for="samuel_name">Nome:</label>
              <input type="text" id="samuel_name" name="name" required>
          
              <label for="samuel_email">Email:</label>
              <input type="email" id="samuel_email" name="email" required>
          
              <label for="samuel_message">Mensagem:</label>
              <textarea id="samuel_message" name="message" required></textarea>
          
              <button type="submit">Submeter</button>
            </form>
          </div>

        <?php
            require_once("footer.php");
        ?>

    </body>
</html>