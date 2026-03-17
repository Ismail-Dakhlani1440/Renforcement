// // Exercice 1
// //1
// let taches = [];
// //2
// taches.push('Coder','Tester','Deployer');
// console.log(taches);
// //3
// taches.unshift('Analyser');
// console.log(taches);
// //4
// console.log(taches.pop());
// console.log(taches);
// //5
// console.log(taches.shift());
// console.log(taches);
// //6
// taches.splice(1,0,'Documenter');
// console.log(taches);
// //7
// taches.splice(2,1,'Revue de code');;
// console.log(taches);

// //Exercice 2 (Debutant)
// const prenoms = ['Alice', 'Bob', 'Clara', 'David', 'Eva'];
// //1
// prenoms.forEach((nom,index) => {
//     console.log(`${index + 1}.${nom}`)
// });
// //2
// let longueurs = [];
// prenoms.forEach(nom => {
//     longueurs.push(nom.length)
// });
// console.log(longueurs)
// //3
// longueurs.forEach((longueur,index) => {
//     if(longueur > 3){
//         console.log(prenoms[index])
//     } 
// });

// //Exercice 3
// const temperatures = [0, 15, 22, 35, -5, 100];
// //1
// const Fahrenheit = temperatures.map(c => c*9/5 +32);
// console.log(Fahrenheit);
// //2 
// const descriptions = temperatures.map(c => c >= 30 ? 'Chaud' : c < 0 ? 'Froid' : 'Tempere');
// console.log(descriptions);
// //3
// const tempDescription = temperatures.map((c,index ) => {return {celsius: c , 
// statut: descriptions[index]}});
// console.log(tempDescription);

// //Exercice 4
// const mots = ['chat','cheval','chien','lion','chameau','cobra','loup','chevre'];
// //1
// const chmots = mots.filter(mot => mot.startsWith("ch"));
// console.log(chmots);
// //2
// const longmots = mots.filter(mot => mot.length>5);
// console.log(longmots);
// //3
// const bothmots = mots.filter(mot => mot.startsWith('ch') || mot.length>5);
// console.log(bothmots);

// //Exercice 5
// const catalogue = [
// { ref: 'A01', nom: 'Stylo bille', prix: 1.20 },
// { ref: 'A02', nom: 'Cahier A4', prix: 3.50 },
// { ref: 'A03', nom: 'Surligneur', prix: 2.10 },
// { ref: 'A04', nom: 'Post-it', prix: 3.80 },
// { ref: 'A05', nom: 'Ciseaux', prix: 6.30 },
// ];
// //1
// const ProduitA03 = catalogue.find(p => p.ref ==='A03');
// console.log(ProduitA03);
// //2
// const CahierA4 = catalogue.findIndex(p => p.nom === 'Cahier A4');
// console.log(CahierA4);
// //3
// let Produitnull = catalogue.find(p => p.ref ==='A99');
// if(!Produitnull){
//     Produitnull = 'none existant'
// };
// console.log(Produitnull);

// //Exercice 6
// const notes = [14, 8, 17, 11, 15, 9, 18, 12];
// //1
// const totalNotes = notes.reduce((total,n) => total + n, 0);
// console.log(totalNotes);
// //2
// const moyenneNotes = totalNotes/notes.length;
// console.log(moyenneNotes);
// //3
// const maxNotes = notes.reduce((max,n) => max < n ? n : max);
// console.log(maxNotes);
// //4
// const lessThanAvrageNotes = notes.reduce((occ,n) => n < moyenneNotes ? occ++ : occ);
// console.log(lessThanAvrageNotes);

if(n < moyenneNotes){
    return occ++
}else{
    return occ
}

//Exercice 7
const scores = [45, 12, 78, 3, 99, 56, 23, 67];
const noms = ['Zoe','Alice','Marc','Bob','Yasmine','Chloe'];
//1
const 
