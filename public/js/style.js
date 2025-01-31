 // JavaScript pour afficher le menu au défilement
 const scrollMenu = document.querySelector('.scroll-menu');
 let lastScrollTop = 0;

 window.addEventListener('scroll', () => {
     const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

     // Afficher le menu si on a défilé de plus de 100px
     if (scrollTop > 100) {
         scrollMenu.classList.add('show');
     } else {
         scrollMenu.classList.remove('show');
     }

     lastScrollTop = scrollTop;
 });

 document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    
    window.addEventListener("scroll", () => {
      if (window.scrollY > 10) { // Si on scrolle de plus de 50px
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  });

  // debut pour le bouton qui renvoie
  document.addEventListener("DOMContentLoaded", function () {
    const backToTopButton = document.getElementById("back-to-top");

    // Affiche le bouton après avoir défilé de 200px
    window.addEventListener("scroll", () => {
      if (window.scrollY > 200) {
        backToTopButton.style.display = "block";
      } else {
        backToTopButton.style.display = "none";
      }
    });

    // Ajoute l'effet de retour en haut
    backToTopButton.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth" // Défilement fluide
      });
    });
  });


//debut  js pour about
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-btn");
  const panes = document.querySelectorAll(".tab-pane");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // Supprime les classes actives
      tabs.forEach(btn => btn.classList.remove("active"));
      panes.forEach(pane => pane.classList.remove("active"));

      // Active le bon onglet et son contenu
      tab.classList.add("active");
      const target = document.getElementById(tab.dataset.tab);
      target.classList.add("active");
    });
  });
});