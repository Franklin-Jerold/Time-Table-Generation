const form = document.querySelector("form");
const Monday = document.getElementById("Monday");
const Tuesday = document.getElementById("Tuesday");
const Wednesday = document.getElementById("Wednesday");
const Thursday = document.getElementById("Thursday");
const Friday = document.getElementById("Friday");
const Saturday = document.getElementById("Saturday");

const Day = document.getElementById("inputday");



Day.addEventListener("input", (e) => {
    const Dayinput = form.inputday.value;

    if (Dayinput == "Monday") {
        Monday.classList.remove("visually-hidden");


    } else {
        Monday.classList.add("visually-hidden");
    }

    if (Dayinput == "Tuesday") {
        Tuesday.classList.remove("visually-hidden");


    } else {
        Tuesday.classList.add("visually-hidden");
    }

    if (Dayinput == "Wednesday") {
        Wednesday.classList.remove("visually-hidden");


    } else {
        Wednesday.classList.add("visually-hidden");
    }

    if (Dayinput == "Thursday") {
        Thursday.classList.remove("visually-hidden");


    } else {
        Thursday.classList.add("visually-hidden");
    }

    if (Dayinput == "Friday") {
        Friday.classList.remove("visually-hidden");


    } else {
        Friday.classList.add("visually-hidden");
    }

    if (Dayinput == "Saturday") {
        Saturday.classList.remove("visually-hidden");


    } else {
        Saturday.classList.add("visually-hidden");
    }


})




