<body>
    <form action="/suvgarder-entreprise" method="post" enctype="multipart/form-data">
        @csrf <!-- Ajoutez le jeton CSRF pour protéger votre formulaire -->
        <label for="nom">Nom</label>
        <input type="text" name="nom_entr"><br>
        <label for="adresse">Adresse</label>
        <input type="text" name="adress"><br>
        <label for="image">Image</label>
        <input type="file" name="photo"><br>
        <button type="submit">Ajouter</button>
    </form>
</body>