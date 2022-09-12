import "./bootstrap";
import Alpine from "alpinejs";
import {
    dynamicGoogleMapLink,
    loopOn,
    toggleAccordion,
    toggleMenu,
} from "./functions";

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
dynamicGoogleMapLink("city");
dynamicGoogleMapLink("address");
