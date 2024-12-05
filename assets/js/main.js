$(document).ready(function () {
  // Toggle submenu and icon
  $(".shopCollapse").click(function () {
    let submenu = $(this).find(".shopOpen");
    let iconElement = $(this).find("iconify-icon");
    submenu.toggleClass("active");
    iconElement.attr(
      "icon",
      iconElement.attr("icon") === "ep:arrow-down-bold"
        ? "ep:arrow-right-bold"
        : "ep:arrow-down-bold"
    );
  });

  // Password visibility toggle
  $(".pasToggl").click(function () {
    let inputField = $(this).siblings("input");
    let isPassword = inputField.attr("type") === "password";
    inputField.attr("type", isPassword ? "text" : "password");
    $(this)
      .find("iconify-icon")
      .attr("icon", isPassword ? "ion:eye-outline" : "ion:eye-off-outline");
  });

  // Switch between Register and Sign-In
  $(".RegisterBtn").click(function () {
    $(".Register").removeClass("d-none");
    $(".signIn").addClass("d-none");
  });
  $(".signInBtn").click(function () {
    $(".Register").addClass("d-none");
    $(".signIn").removeClass("d-none");
  });

  // Mobile search box toggle
  $(".searchMob").click(function () {
    $(".searchBoxMobile").addClass("active");
    $(".bottomNavBar").addClass("d-none");
  });
  $(".closeBtnSearch").click(function () {
    $(".searchBoxMobile").removeClass("active");
    $(".bottomNavBar").removeClass("d-none");
  });

  // *Swipper
  var bannerSwiper = new Swiper("#banner .mySwiper", {
    pagination: {
      el: "#banner .swiper-pagination",
      dynamicBullets: true,
    },
    navigation: {
      nextEl: "#banner .swiper-button-next",
      prevEl: "#banner .swiper-button-prev",
    },
  });
  var swiper = new Swiper("#featureProduct .mySwiper", {
    slidesPerView: 5,
    spaceBetween: 10,
    pagination: {
       el: ".swiper-pagination",
       clickable: true,
    },
    navigation: {
       nextEl: '.swiper-button-next',
       prevEl: '.swiper-button-prev',
    },
    breakpoints:{
      991: {
        slidesPerView: 5,
      },
      450:{
        slidesPerView: 2,
      },
      414:{
        slidesPerView: 2,
      },
      300:{
        slidesPerView: 1,
      },
    }
 });


  // *  popup close
  $(".close-btn").click(function () {
    $(".popup").addClass("d-none");
  });

  $(window).on("load", function () {
    setTimeout(function () {
      $(".popup").removeClass("d-none");
      $(".popup").addClass("d-block");
    }, 2000);
  });

  // category

  $(".fruitsBtn").click(function () {
    $(".Vegetables").addClass("d-none");
    $(".fruits").removeClass("d-none");
    $(".fruitsBtn").addClass("active");
    $("#all").removeClass("active");
    $(".veg").removeClass("active");
  });
  $(".All").click(function () {
    $(".fruits").removeClass("d-none");
    $(".Vegetables").removeClass("d-none");
    $(".fruitsBtn").removeClass("active");
    $("#all").addClass("active");
    $(".veg").removeClass("active");
  });
  $(".veg").click(function () {
    $(".fruits").addClass("d-none");
    $(".Vegetables").removeClass("d-none");
    $(".fruitsBtn").removeClass("active");
    $(".veg").addClass("active");
    $("#all").removeClass("active");
  });
  // countdown
  var countDownDate = new Date("Dec 12, 2024 00:00:00").getTime();
  var x = setInterval(function () {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("mins").innerHTML = minutes;
    document.getElementById("secs").innerHTML = seconds;
  }, 1000);
});
