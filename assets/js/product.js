// récupération des éléments du DOM contenant le grammage des produits
const unitsElement = document.querySelectorAll('.product-unit');
// récupération des div qui contiennent les input radio et label
const radiosDivElement = document.querySelectorAll('.radio-unit');
// récupération des <a> wishlist page produits
const wishListBtnsElement = document.querySelectorAll('a.wishlist_btn');

// Affichage des prix en fonctions du grammage
const changePriceToClick = () => {
  // Ajout d'un écouteur d'événement 'click' sur chaque élément
  unitsElement.forEach((unit) => {
    unit.addEventListener('click', (e) => {
      const price = unit.dataset.price;
      const tax = unit.dataset.tax;
      const id = unit.id;
      // e.preventDefault();

      // au click enlève la classe active de tout les éléments et ajoute a l'element concerné
      for (const radio of radiosDivElement) {
        radio.addEventListener('click', (e) => {
          for (const otherUnit of radiosDivElement) {
            otherUnit.classList.remove('active');
          }
          e.currentTarget.classList.add('active');
          radio.classList.add('active');
          radio.style.transitionDelay = '0.1s';
        });
      }

      // ajoute la classe active à l'élément product unit sur lequel l'utilisateur a cliqué
      unit.classList.add('active');
      unit.style.transitionDelay = '0.1s';

      // récupération de la div contenant le produit :
      const productElement = unit.parentNode.parentNode.parentNode.parentNode;
      console.log(productElement);
      // récupération de la span contenant le prix du produit
      const priceElement = productElement.querySelector('.main_price');

      // changement de prix
      const resultPrice = price * tax;
      const formatPrice = resultPrice.toFixed(2).replace('.', ',');

      // affichage du prix
      priceElement.innerHTML = `${formatPrice}€`;

      console.log(`l'id => ${id} /// le prix => ${price} /// tax => ${tax} `);
    });
  });
};

// Animation coeur wishlist

wishListBtnsElement.forEach((wishListBtn) => {
  wishListBtn.addEventListener('click', (e) => {
    const heartElement = wishListBtn.childNodes[1];
    // ajout de la classe active si non existante
    if (heartElement.classList.contains('active')) {
      heartElement.style.transitionDelay = '0.1s';
      heartElement.classList.remove('active');
    } else {
      heartElement.style.transitionDelay = '0.2s';
      heartElement.classList.add('active');
    }
    console.log('child', heartElement);
    console.log(e);
  });
});

// affiche un message de validation de suppression d'article
if (location.search.includes('dlt=ok')) {
  const container = document.getElementById('delete-message-container');
  // container.innerHTML = '- Article supprimé du panier';
  container.innerHTML = `<i class="fa-solid fa-minus"></i><p>Article supprimé du panier</p>`;
  container.style.display = 'flex';
  container.classList.add('fade-in');
  // fais apparaître le message au bout de 0.5s
  setTimeout(function () {
    container.classList.remove('d-none');
    container.classList.remove('fade-in');
    container.classList.add('fade-out');
    // supprime le message au bout de 5s
    setTimeout(() => {
      container.classList.add('hide');
      setTimeout(() => {
        container.classList.add('d-none');
        container.style.display = 'none';

        // container.remove();
      }, 500);
    }, 5000);
  }, 1000);
}

// affiche un message de validation d'ajout d'article
if (location.search.includes('success=add')) {
  const container = document.getElementById('validation-message-container');
  container.innerHTML = `<i class="fa-solid fa-plus"></i><p>Article ajouté au panier</p>`;
  container.style.display = 'flex';
  container.classList.add('fade-in');
  // fais apparaître le message au bout de 0.5s
  setTimeout(function () {
    container.classList.remove('d-none');
    container.classList.remove('fade-in');
    container.classList.add('fade-out');
    // supprime le message au bout de 5s
    setTimeout(() => {
      container.classList.add('hide');
      setTimeout(() => {
        container.classList.add('d-none');
        container.style.display = 'none';

        // container.remove();
      }, 500);
    }, 5000);
  }, 1000);
}

// animation pour supprimer sans recharger la page cart

/* $(document).ready(function () {
  $('.btn-delete').on('click', function (e) {
    e.preventDefault();
    var item_id = $(this).data('id');
    var $current_item = $(this).closest('.grid-shopping-cart');

    $.ajax({
      url: 'delete-item_cart.php',
      type: 'POST',
      data: { item_id: item_id },
      success: function (response) {
        if (response.status == 200) {
          $current_item.remove();
          // Récupérer les nouvelles informations sur le panier à partir du serveur
          $.ajax({
            url: 'get-cart-data.php',
            type: 'GET',
            success: function (cartData) {
              // Utiliser les données pour mettre à jour les éléments HTML correspondants sur la page
              $('.total-without-discount').text(cartData.totalPrice + '€');
              $('.delivery').text(cartData.delivery + '€');
              $('.discount').text(cartData.discount + '€');
              $('.total-net-payment').text(cartData.netTotal + '€');
            },
          });
        }
      },
    });
  });
}); */

console.log(wishListBtnsElement);

document.addEventListener('DOMContentLoaded', changePriceToClick);
