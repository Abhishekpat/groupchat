"use strict";

const logInBtn = document.querySelector(".sign-in-btn");
const signUpBtn = document.querySelector(".sign-up-btn");
const errorMsg = document.querySelector(".error-message");

/********* Sign Up Button *********/

signUpBtn.addEventListener("click", (e) => {
  e.preventDefault();

  const nameField = document.querySelector(".name-field");
  const passwordValue = document.querySelector(".pass-field-signup");
  const emailField = document.querySelector(".email-field-signup");
  const deptField = document.querySelector(".dept-field");

  errorMsg.innerHTML = "";

  if (
    nameField.value === "" ||
    passwordValue.value === "" ||
    emailField.value === "" ||
    deptField.value === ""
  ) {
    errorMsg.textContent = `You cannot leave a field Empty`;
    errorMsg.classList.add("error-message-visible");
  } else {
    passwordChecker(passwordValue.value, nameField.value);

    if (emailField.value.includes("@")) {
      console.log(`Valid Email`);
    } else {
      console.log(emailField.value);
      errorMsg.textContent = `Invalid Email Address`;
      errorMsg.classList.add("error-message-visible");
    }
  }
});

// RegExp Standard Forms

const strongPassRegix = new RegExp(
  "(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})"
);

function passwordChecker(password, userName) {
  console.log(password);

  if (strongPassRegix.test(password)) {
    errorMsg.textContent = `Account Creation Successful, ${userName}`;
    errorMsg.classList.add("error-message-visible");

    errorMsg.classList.add("error-message-successfull");
  } else {
    errorMsg.textContent = `Your password is not strong enough`;
    errorMsg.classList.add("error-message-visible");
  }
}

/******************************/
