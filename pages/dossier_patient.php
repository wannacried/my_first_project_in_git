<h2>Création d'un dossier Patient</h2>
<form action="">
    <label for="bras">Bras</label>
    <input type="radio" value="Gauche"><input type="radio" value="Droite">
    <label for="bras">Sexe</label>
    <input type="radio" value="Masculin"><input type="radio" value="Féminin">
    <label for="date_de_nais">Date de naissance</label>
    <input type="date" id="date_de_nais" name="date_de_nais">
    <label for="taille">Taille</label>
    <input type="number" placeholder="cm">
    <label for="poids">Poids</label>
    <input type="number" placeholder="kg">
    <label for="test_de_grossesse">Test de grossesse</label>
    <input type="radio" value="positif" name="test_de_grossesse">Positif
    <input type="radio" value="négatif" name="test_de_grossesse">Négatif
    <input type="radio" value="NA" name="NA">NA
    <label for="goutte">Goutte épaisse</label>
    <input type="radio" value="positif" name="goutte" id="goutte">Positif 
    <input type="radio" value="negatif" name="goutte" id="goutte">Négatif
    <label for="parasitemie">Parasitémie</label>
    <input type="number" max=75>
    <label for="spot">Spot sanguin</label>
    <input type="radio" name="spot" value="oui">Oui
    <input type="radio" name="spot" value="non">Non
    <label for="jour_de_suivi">Jour de suivi</label>
    <input type="radio" name="jour_de_suivi" value="j0">J0
    <input type="radio" name="jour_de_suivi" value="j28">J28
    <input type="submit" value="Créer le dossier">
</form>
