// récupération des <a> contenant le grammage des produits
const linksUnitElement = document.querySelectorAll('a.link-product-unit');

// Affichage des prix en fonctions du grammage
linksUnitElement.forEach((link) => {
  link.addEventListener('click', (e) => {
    const price = link.dataset.link;
    const tax = link.dataset.tax;
    const id = link.id;
    e.preventDefault();

    // enlève la classe active de tous les éléments a
    linksUnitElement.forEach((link) => link.classList.remove('active'));

    // ajoute la classe active à l'élément a sur lequel l'utilisateur a cliqué
    link.classList.add('active');

    // récupération de la div contenant le produit :
    const productElement = link.parentNode.parentNode;

    // récupération de la span contenant le prix du produit
    const priceElement = productElement.querySelector('.main_price');

    // changement de prix
    const resultPrice = price * tax;
    const formatPrice = resultPrice.toFixed(2).replace('.', ',');

    priceElement.innerHTML = formatPrice + '€';

    console.log(link);
    console.log(`l'id => ${id} /// le prix => ${price} /// tax => ${tax} `);
  });
});
