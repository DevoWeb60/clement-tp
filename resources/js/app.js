import "./bootstrap";
import Alpine from "alpinejs";
import { loopOn, toggleAccordion, toggleMenu } from "./functions";

window.Alpine = Alpine;

Alpine.start();

// NAVBAR
const navMenuButton = "#hamburger";
const navMenu = "header nav";
const navToggleClassName = "show";
const navMenuClose = "#menu-close";
toggleMenu(navMenuButton, navMenu, navToggleClassName, navMenuClose);

// ACCORDION SERVICES
loopOn(".accordion", (accordion) => toggleAccordion(accordion, "show"));

// JOB OFFER FORM
const inputCity = document.querySelector("#input-city");
const googleMapCityButton = document.querySelector(".city-container .btn");

if (inputCity && googleMapCityButton) {
    inputCity.addEventListener("keyup", (e) => {
        googleMapCityButton.href =
            "https://www.google.com/maps/search/" + e.target.value;
    });
}
