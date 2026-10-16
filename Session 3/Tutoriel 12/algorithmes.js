let nombres = [23, 15, 42, 9, 31, 18, 42, 5];

let maximum = nombres[0];
let positionMax = 0;

for (let i = 1; i < nombres.length; i++) {
    if (nombres[i] > maximum) {
        maximum = nombres[i];
        positionMax = i;
    }
}

console.log("Maximum :", maximum);
console.log("Position du maximum :", positionMax);

let minimum = nombres[0];
let positionMin = 0;

for (let i = 1; i < nombres.length; i++) {
    if (nombres[i] < minimum) {
        minimum = nombres[i];
        positionMin = i;
    }
}

console.log("Minimum :", minimum);
console.log("Position du minimum :", positionMin);

let recherche = 31;
let trouve = false;<

for (let i = 0; i < nombres.length; i++) {
    if (nombres[i] === recherche) {
        trouve = true;
    }
}

if (trouve === true) {
    console.log(recherche + " est présent dans le tableau.");
} else {
    console.log(recherche + " est absent du tableau.");
}
