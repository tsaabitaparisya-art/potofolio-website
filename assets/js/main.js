/* ====================================
   DYNAMIC ROLE TYPING
==================================== */

const roles = [
    "Software Engineering Student",
    "Web Developer",
    "UIUX Designer",
];

const roleElement =
document.querySelector(".dynamic-role");

let roleIndex = 0;
let charIndex = 0;

let isDeleting = false;

function typeEffect() {

    const currentRole =
    roles[roleIndex];

    if (!isDeleting) {

        roleElement.textContent =
        currentRole.substring(0, charIndex);

        charIndex++;

        if (charIndex >
            currentRole.length) {

            isDeleting = true;

            setTimeout(
                typeEffect,
                1500
            );

            return;
        }

    } else {

        roleElement.textContent =
        currentRole.substring(0, charIndex);

        charIndex--;

        if (charIndex < 0) {

            isDeleting = false;

            roleIndex++;

            if (roleIndex >= roles.length) {

                roleIndex = 0;
            }
        }
    }

    setTimeout(
        typeEffect,
        isDeleting ? 40 : 90
    );
}

typeEffect();

/* ====================================
   DARK LIGHT MODE
==================================== */

const themeToggle =
document.getElementById(
    "themeToggle"
);

const body =
document.body;

const savedTheme =
localStorage.getItem(
    "theme"
);

if (savedTheme === "light") {

    body.classList.add(
        "light-mode"
    );

    themeToggle.innerHTML =
        '<i class="fa-solid fa-sun"></i>';
}

themeToggle.addEventListener(
    "click",
    () => {

        body.classList.toggle(
            "light-mode"
        );

        if (
            body.classList.contains(
                "light-mode"
            )
        ) {

            localStorage.setItem(
                "theme",
                "light"
            );

            themeToggle.innerHTML =
                '<i class="fa-solid fa-sun"></i>';

        } else {

            localStorage.setItem(
                "theme",
                "dark"
            );

            themeToggle.innerHTML =
                '<i class="fa-solid fa-moon"></i>';
        }
    }
);

/* ====================================
   CUSTOM CURSOR
==================================== */

const cursorDot =
document.querySelector(
    ".cursor-dot"
);

const cursorOutline =
document.querySelector(
    ".cursor-outline"
);

window.addEventListener(
    "mousemove",
    (e) => {

        const posX =
        e.clientX;

        const posY =
        e.clientY;

        cursorDot.style.left =
            `${posX}px`;

        cursorDot.style.top =
            `${posY}px`;

        cursorOutline.animate(
            {
                left: `${posX}px`,
                top: `${posY}px`
            },
            {
                duration: 250,
                fill: "forwards"
            }
        );
    }
);

const hoverElements =
document.querySelectorAll(
    "a, button, .project-card, .skill-card"
);

hoverElements.forEach(
    (item) => {

        item.addEventListener(
            "mouseenter",
            () => {

                cursorOutline.classList.add(
                    "cursor-hover"
                );
            }
        );

        item.addEventListener(
            "mouseleave",
            () => {

                cursorOutline.classList.remove(
                    "cursor-hover"
                );
            }
        );
    }
);

/* ====================================
   NAVBAR SCROLL EFFECT
==================================== */

const navbar =
document.querySelector(
    ".custom-navbar"
);

window.addEventListener(
    "scroll",
    () => {

        if (
            window.scrollY > 50
        ) {

            navbar.classList.add(
                "scrolled"
            );

        } else {

            navbar.classList.remove(
                "scrolled"
            );
        }
    }
);

/* ====================================
   SCROLL TO TOP
==================================== */

const scrollTopBtn =
document.createElement(
    "div"
);

scrollTopBtn.className =
"scroll-top";

scrollTopBtn.innerHTML =
'<i class="fa-solid fa-arrow-up"></i>';

document.body.appendChild(
    scrollTopBtn
);

window.addEventListener(
    "scroll",
    () => {

        if (
            window.scrollY > 500
        ) {

            scrollTopBtn.classList.add(
                "show"
            );

        } else {

            scrollTopBtn.classList.remove(
                "show"
            );
        }
    }
);

scrollTopBtn.addEventListener(
    "click",
    () => {

        window.scrollTo({

            top: 0,

            behavior:
            "smooth"

        });
    }
);

/* ====================================
   COUNTER ANIMATION
==================================== */

const counters =
document.querySelectorAll(
    ".counter"
);

const counterObserver =
new IntersectionObserver(
    (entries) => {

        entries.forEach(
            (entry) => {

                if (
                    entry.isIntersecting
                ) {

                    const counter =
                    entry.target;

                    const target =
                    Number(
                        counter.dataset.target
                    );

                    let count = 0;

                    const updateCounter =
                        () => {

                            const increment =
                                target / 100;

                            count +=
                                increment;

                            if (
                                count < target
                            ) {

                                counter.textContent =
                                    Math.floor(
                                        count
                                    );

                                requestAnimationFrame(
                                    updateCounter
                                );

                            } else {

                                counter.textContent =
                                    target;
                            }
                        };

                    updateCounter();

                    counterObserver.unobserve(
                        counter
                    );
                }
            }
        );
    }
);

counters.forEach(
    (counter) => {

        counterObserver.observe(
            counter
        );
    }
);

/* ====================================
   REVEAL ANIMATION
==================================== */

const reveals =
document.querySelectorAll(
    ".reveal"
);

const revealObserver =
new IntersectionObserver(
    (entries) => {

        entries.forEach(
            (entry) => {

                if (
                    entry.isIntersecting
                ) {

                    entry.target.classList.add(
                        "active"
                    );
                }
            }
        );
    },
    {
        threshold: 0.1
    }
);

reveals.forEach(
    (item) => {

        revealObserver.observe(
            item
        );
    }
);