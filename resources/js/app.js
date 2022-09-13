import "./bootstrap";
import Alpine from "alpinejs";
import {
    dynamicGoogleMapLink,
    dynamicModal,
    loopOn,
    toggleAccordion,
    toggleMenu,
} from "./functions";

window.Alpine = Alpine;

Alpine.start();

// NAVBAR
toggleMenu("#hamburger", "header nav", "show", "#menu-close");

// ACCORDION SERVICES
loopOn(".accordion", (accordion) => toggleAccordion(accordion, "show"));

// JOB OFFER FORM
dynamicGoogleMapLink("city");
dynamicGoogleMapLink("address");

// MODAL
dynamicModal(".project");
