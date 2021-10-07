<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width">
  <title>addLinkForm</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<header>
<?php include 'banner1.php';?>
  <nav class="banner2">
    <a href="index.php">ACCUEIL </a>
    >
    <a>Ajouter une ressource</a>
  </nav>
</header>

  <div id="addLinkForm">
    <form>
      
      <div>
        <label for="category-select">Catégorie</label><br />
        <select class="addLinkFormField" name="categories">
          <option value=" ">Sélectionnez une catégorie</option>
          <option value="languages">Langages</option>
          <option value="others">Autres thématiques</option>
        </select>
      </div>

      <div>
        <label for="subCategory-select">Sous-catégorie</label><br />
        <select class="addLinkFormField" name="subCategories">
          <option value=" ">Sélectionnez une sous-catégorie</option>
          <option value="design">Design</option>
          <option value="sharingCode">Partager du code</option>
          <option value="picsIcons">Images et Icônes</option>
          <option value="sharingCode">Partager du code</option>
        </select>
      </div>

      <div>
        <label for="link-title">Titre du lien</label><br />
        <input class="addLinkFormField" type="text" placeholder="Titre du lien" name="link-title" value="" />
      </div>

      <div>
        <label for="link-address">Adresse du lien</label><br />
        <input class="addLinkFormField" type="text" placeholder="Adresse du lien" name="link-address" value="" />
      </div>

      <div>
        <label for="link-description">Description</label><br />
        <textarea placeholder="Description du contenu proposé" id="link-description" name="link-description" value=""
          rows="60"></textarea>
      </div>

      <div>
        <input class="submitButton" type="submit" value="Poster" />
      </div>

    </form>

  </div>

</body>
<script src="script.js"></script>

</html>