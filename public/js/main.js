$(function () {

  if ($('.owl-2').length > 0) {
    $('.owl-2').owlCarousel({
      center: false,
      items: 1,
      loop: true,
      stagePadding: 0,
      margin: 20,
      smartSpeed: 1000,
      autoplay: true,
      nav: true,
      dots: true,
      pauseOnHover: false,
      responsive: {
        600: {
          margin: 20,
          nav: true,
          items: 2
        },
        1000: {
          margin: 20,
          stagePadding: 0,
          nav: true,
          items: 3
        }
      }
    });
  }

})

/* GESTION DES ONGLETS*/

var tabs = document.querySelectorAll('.tabs a')
for (var i = 0; i < tabs.length; i++) {
  tabs[i].addEventListener('click', function (e) {

    var li = this.parentNode
    var div = this.parentNode.parentNode.parentNode

    if (li.classList.contains('active')) {
      return false;
    }
    //On retire la class active de l'onglet actif
    div.querySelector('.tabs .active').classList.remove('active')
    //On ajoute la class active à l'onglet actuel
    li.classList.add('active')

    //On retire la class active du contenu actif
    div.querySelector('.tab-content .active').classList.remove('active')
    //On ajoute la class active au contenu du nouveau clic
    div.querySelector(this.getAttribute('href')).classList.add('active')
  })
}