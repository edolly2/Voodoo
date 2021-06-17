const mainBtn = $(".main-btn");
const mainModal = $(".main-content-wrapper");
const signUpForm = $(".signup-form-cont");

$(document).ready(() => {
  $(mainBtn).on("click", () => {
    $(mainModal).hide(500);
    $(signUpForm).show(500);
  });
});
