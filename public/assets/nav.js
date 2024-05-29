document.addEventListener("DOMContentLoaded", function () {
  var $navbarBurgers = Array.prototype.slice.call(
    document.querySelectorAll(".navbar-burger"),
    0
  );
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener("click", function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        $el.classList.toggle("is-active");
        $target.classList.toggle("is-active");
        var $loginBtn = document.querySelector(".button.is-white");
        var $signupBtn = document.querySelector(".button.is-primary");
        if ($loginBtn && $signupBtn) {
          $loginBtn.classList.toggle("is-hidden");
          $signupBtn.classList.toggle("is-hidden");
        }
      });
    });
  }
});
