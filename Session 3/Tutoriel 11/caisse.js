
let panier = [15, 42, 5, 89, 12, 50, 8];

let sommeTotale = 0;
let nombreArticlesChers = 0;
let sommeArticlesChers = 0;

for (let i = 0; i < panier.length; i++) {
    sommeTotale = sommeTotale + panier[i];
    if (panier[i] >= 20) {
        nombreArticlesChers++;
        sommeArticlesChers = sommeArticlesChers + panier[i];
    }
}

console.log("Somme totale :", sommeTotale);
console.log("Nombre d'articles chers :", nombreArticlesChers);
console.log("Somme des articles chers :", sommeArticlesChers);
