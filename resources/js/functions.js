export const toggleMenu = (button, menu, className, close) => {
    const buttonElement = document.querySelector(button);
    const menuElement = document.querySelector(menu);
    const closeElement = document.querySelector(close);

    buttonElement.addEventListener("click", () => {
        menuElement.classList.add(className);
    });

    closeElement.addEventListener("click", () => {
        menuElement.classList.remove(className);
    });
};

export const toggleAccordion = (accordion, className) => {
    const accordionHeader = accordion.querySelector(".header-accordion");
    const accordionContent = accordion.querySelector(".content-accordion");

    console.log(accordion);
    accordionHeader.addEventListener("click", () => {
        accordionContent.classList.toggle(className);
        accordionHeader.classList.toggle(className);
    });
};

export const loopOn = (selector, callback) => {
    const elements = document.querySelectorAll(selector);

    if (elements) {
        elements.forEach((element) => {
            callback(element);
        });
    }
};
