
// HOME PAGE SIGN UP CLICK REDIRECT AND FORM EXIT REDIRECT BACK TO HOME
const mainBtn = $(".main-btn");
const formExitBtn = $(".form-exit-btn");
$(document).ready(() => {
  $(mainBtn).on("click", () => {
    window.location.replace("sign-up/index.php");
  });

  $(formExitBtn).on("click", () => {
    window.location.replace("../index.php");
  })
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
      if($(e.target).hasClass("yes")) {
        $(confirmCancelBtn).hide();
        $(areYouSurePara).hide();
        $(confirmCancelPara).delay(500).fadeIn(200);
        setTimeout(function() {
          window.location.replace("../index.php");
        },2000);
      }
      else if($(e.target).hasClass("no")) {
        $(signUpCancelModal).hide(500);
        $(signUpForm).show(500);
      }
    })
  })
});
