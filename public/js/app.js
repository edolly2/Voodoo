// Returns path only (/path/example.html)
let pathname = window.location.pathname;
// Returns full URL (https://example.com/path/example.html)
let url = window.location.href;
// Returns base URL (https://example.com)
let origin = window.location.origin;

// HOME PAGE SIGN UP CLICK REDIRECT AND FORM EXIT REDIRECT BACK TO HOME

const mainBtn = $(".main-btn");
const formExitBtn = $(".form-exit-btn");
$(document).ready(() => {
  $(mainBtn).on("click", () => {
    window.location.replace("sign-up/index.php");
  });

  $(formExitBtn).on("click", () => {
    window.location.replace("../index.php");
  });
});

// CANCEL SIGN UP WITH ALERT AND REDIRECT
const signUpForm = $(".signup-form-cont");
const signUpCancelBtn = $("#cancel");
const signUpCancelModal = $(".signup-cancel-cont");
const confirmCancelBtn = $(".are-you-sure-btns");
const areYouSurePara = $(".signup-cancel-p1");
const confirmCancelPara = $(".signup-cancel-p2");
$(document).ready(() => {
  $(signUpCancelBtn).on("click", () => {
    $(signUpForm).hide(500);
    $(signUpCancelModal).css("display", "flex");
    $(confirmCancelBtn).on("click", (e) => {
      if ($(e.target).hasClass("yes")) {
        $(confirmCancelBtn).hide();
        $(areYouSurePara).hide();
        $(confirmCancelPara).delay(500).fadeIn(200);
        setTimeout(function () {
          window.location.replace("../index.php");
        }, 2000);
      } else if ($(e.target).hasClass("no")) {
        $(signUpCancelModal).hide(500);
        $(signUpForm).show(500);
      }
    });
  });
});

// const signUpSubmitBtn = $("#submit");
// const signUpSuccessModal = $(".success-cont");
// $(document).ready(() => {
//   $(signUpSubmitBtn).on("click", (event) => {
//     $(signUpForm).hide(500);
//     $(signUpSuccessModal).css("display", "flex");
//     // window.location.preventDefault(event);
//     setTimeout(function () {
//       window.location.replace("../index.php");
//     }, 2000);
//   });
// });

// NAV-LIST SELECTED STYLE
$(document).ready(() => {
  if (pathname == "/sandbox/VOODOO/public/index.php") {
    $("#home").addClass("nav-selected");
  } else {
    $("#home").removeClass("nav-selected");
  }

  if (pathname == "/sandbox/VOODOO/public/about/index.php") {
    $("#about").addClass("nav-selected");
  } else {
    $("#about").removeClass("nav-selected");
  }

  if (pathname == "/sandbox/VOODOO/public/contact/index.php") {
    $("#contact").addClass("nav-selected");
  } else {
    $("#contact").removeClass("nav-selected");
  }

  if (pathname == "/sandbox/VOODOO/public/pricing/index.php") {
    $("#pricing").addClass("nav-selected");
  } else {
    $("#pricing").removeClass("nav-selected");
  }

  if (pathname == "/sandbox/VOODOO/public/sign-up/index.php") {
    $("#signup").addClass("nav-selected");
  } else {
    $("#signup").removeClass("nav-selected");
  }
});

const contactIcon = $('.con-icon');
$(document).ready(() => {
  $(contactIcon).on("click", (e) => {
    if($(e.target).hasClass("con-email")) {
      $(".email-info").css("visibility", "visible");
    }
    else {
      $(".email-info").css("visibility", "hidden");
    }

    if($(e.target).hasClass("con-call")) {
      $(".call-info").css("visibility", "visible");
    }
    else {
      $(".call-info").css("visibility", "hidden");
    }

    if($(e.target).hasClass("con-message")) {
      $(".message-modal").show(500);
    }
    else {
      $(".message-modal").hide(500);
    }
  })
});

const messageExitBtn = $(".message-exit-btn");
$(document).ready(() => {
  $(messageExitBtn).on("click", () => {
    $('.message-modal').hide(500);
  });
});