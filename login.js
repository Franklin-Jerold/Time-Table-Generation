window.onload = () => {
    this.sessionStorage.setItem("email", "admin@sju.in");
    this.sessionStorage.setItem("password", "sju1882");
}

const form = document.querySelector("form");
const errorMsg = document.getElementById("error-msg");
const sucssMsg = document.getElementById("sucss-msg");
const btnSubmit = document.getElementById("btn-submit");
const femail = document.getElementById("floatingInput");
const fpassword = document.getElementById("floatingPassword");

form.onsubmit = () => { return false }

btnSubmit.addEventListener("click", (e) => {
    const email = form.email.value;
    const password = form.password.value;

    if (email === "admin@sju.in" && password === "sju1882") {
        form.onsubmit = () => { return true }
        sucssMsg.classList.remove("visually-hidden");
        errorMsg.classList.add("visually-hidden");


    } else if (email === "admin1@sju.in" && password === "sju2882") {
        form.onsubmit = () => { return true }
        sucssMsg.classList.remove("visually-hidden");
        errorMsg.classList.add("visually-hidden");


    }

    else {
        sucssMsg.classList.add("visually-hidden");
        errorMsg.classList.remove("visually-hidden");
        femail.classList.add("is-invalid");
        fpassword.classList.add("is-invalid");

    }
})


