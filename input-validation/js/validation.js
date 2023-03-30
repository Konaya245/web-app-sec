function validateForm() {
  const nameField = document.getElementById("name");
  const matricnoField = document.getElementById("matricno");
  const currentaddressField = document.getElementById("currentaddress");
  const homeaddressField = document.getElementById("homeaddress");
  const emailField = document.getElementById("email");
  const mobilephoneField = document.getElementById("mobilephone");
  const homephoneField = document.getElementById("homephone");

  const nameRegex = /^[A-Za-z ]+$/;
  const matricnoRegex = /^[A-Za-z0-9]+$/;
  const mobilephoneRegex = /^[0-9]{11}$/;

  const nameError = document.getElementById("nameError");
  const matricnoError = document.getElementById("matricnoError");
  const currentaddressError = document.getElementById("currentaddressError");
  const homeaddressError = document.getElementById("homeaddressError");
  const emailError = document.getElementById("emailError");
  const mobilephoneError = document.getElementById("mobilephoneError");
  const homephoneError = document.getElementById("homephoneError");

  let isValid = true;

  if (!nameRegex.test(nameField.value)) {
    nameError.innerHTML = "Please enter a valid name (only letters and spaces allowed)";
    isValid = false;
  } else {
    nameError.innerHTML = "";
  }

  if (!matricnoRegex.test(matricnoField.value)) {
    matricnoError.innerHTML = "Please enter a valid matric number (only letters and digits allowed)";
    isValid = false;
  } else {
    matricnoError.innerHTML = "";
  }

  if (currentaddressField.value === "") {
    currentaddressError.innerHTML = "Please enter your current address";
    isValid = false;
  } else {
    currentaddressError.innerHTML = "";
  }

  if (homeaddressField.value === "") {
    homeaddressError.innerHTML = "Please enter your home address";
    isValid = false;
  } else {
    homeaddressError.innerHTML = "";
  }

  if (emailField.validity.typeMismatch || !emailField.value.endsWith("@gmail.com")) {
    emailError.innerHTML = "Please enter a valid Gmail account";
    isValid = false;
  } else {
    emailError.innerHTML = "";
  }

  if (!mobilephoneRegex.test(mobilephoneField.value)) {
    mobilephoneError.innerHTML = "Please enter a valid 11-digit mobile phone number";
    isValid = false;
  } else {
    mobilephoneError.innerHTML = "";
  }

  if (!mobilephoneRegex.test(homephoneField.value)) {
    homephoneError.innerHTML = "Please enter a valid 11-digit home phone number";
    isValid = false;
  } else {
    homephoneError.innerHTML = "";
  }

  return isValid;
}
