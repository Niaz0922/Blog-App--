var HiddenInput = document.querySelector("#DbUser");
var username = localStorage.getItem("username");

HiddenInput.value = username;
