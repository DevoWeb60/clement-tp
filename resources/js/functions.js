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

export const dynamicGoogleMapLink = (name) => {
    const input = document.querySelector(`#input-${name}`);
    const googleMapButton = document.querySelector(`.${name}-container .btn`);

    if (input && googleMapButton) {
        input.addEventListener("keyup", (e) => {
            googleMapButton.href =
                "https://www.google.com/maps/search/" + e.target.value;
        });
    }
};

export const dynamicModal = (className) => {
    loopOn(className, (element) => {
        const modalOverlay = document.querySelector(".modal-overlay");
        const modal = document.querySelector(".modal");
        const modalClose = modal.querySelector(".close");
        const modalTitle = modal.querySelector(".title");
        const modalImg = modal.querySelector(".modal-img");
        const modalText = modal.querySelector(".modal-text");

        const elementTitle = element.dataset.title;
        const elementImg = element.querySelector("img").src;
        const elementText = element.querySelector("p").innerText;

        element.addEventListener("click", () => {
            modalOverlay.classList.add("active");
            modalTitle.innerText = elementTitle;
            modalImg.src = elementImg;
            modalText.innerText = elementText;
        });

        modalClose.addEventListener("click", () => {
            modalOverlay.classList.remove("active");
        });

        document.addEventListener("click", (e) => {
            if (e.target === modalOverlay) {
                modalOverlay.classList.remove("active");
            }
        });
    });
};
