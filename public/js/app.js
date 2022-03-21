// const { after } = require("lodash");

let paintLogo = () => {
    const elLogo = document.querySelector('.brand');
    const elLogoTop = elLogo.offsetTop + window.scrollY;
    const elLogoBottom = elLogoTop + elLogo.offsetHeight;

    for (let i = 0; i < document.querySelectorAll('.section').length; i++) {

        let currentSection = document.querySelectorAll('.section')[i];
        let currentSectionTop = currentSection.offsetTop;
        let currentSectionBottom = currentSection.offsetTop + currentSection.offsetHeight;

        if (currentSectionTop < elLogoTop && currentSectionBottom > elLogoBottom) {
            if (currentSection.classList.contains('make-light')) {
                document.querySelector('.brand .logo').classList.add('make-dark');
                document.querySelector('.brand .logo').classList.remove('make-light');
            } else {
                document.querySelector('.brand .logo').classList.remove('make-dark');
                document.querySelector('.brand .logo').classList.add('make-light');
            }
        }

    }
}

let paintBackToTop = () => {
    const elBackToTop = document.querySelector('.backToTop');
    const elBackTop = elBackToTop.offsetTop + window.scrollY;
    const elBackBottom = elBackTop + elBackToTop.offsetHeight;

    for (let i = 0; i < document.querySelectorAll('.section').length; i++) {

        let currentSection = document.querySelectorAll('.section')[i];
        let currentSectionTop = currentSection.offsetTop;
        let currentSectionBottom = currentSection.offsetTop + currentSection.offsetHeight;

        if ((currentSectionTop < elBackTop) && (currentSectionBottom > elBackBottom)) {
            if (currentSection.classList.contains('make-light')) {
                elBackToTop.classList.add('make-dark');
                elBackToTop.classList.remove('make-light');
            } else {
                elBackToTop.classList.remove('make-dark');
                elBackToTop.classList.add('make-light');
            }

            break;
        }
    }

    if (window.scrollY > 500) {

        if (elBackToTop.classList.contains('hide')) {
            elBackToTop.classList.remove('hide');
            elBackToTop.classList.add("fadeIn");
            elBackToTop.classList.add("show");
        }

    } else if (window.scrollY < 500) {
        if (elBackToTop.classList.contains('show')) {
            elBackToTop.classList.remove('flying');
            elBackToTop.classList.remove("fadeIn");
            elBackToTop.classList.add("fadeOut");

            setTimeout(() => {
                elBackToTop.classList.remove("show");
                elBackToTop.classList.add("hide");
                elBackToTop.classList.remove("fadeOut");
            }, 250);
        }

    }
}

let sectionInFocus = (sectionType) => {

    let areaTop;
    let areaBottom;

    let windowTop = window.scrollY;
    let windowBottom = windowTop + window.innerHeight;

    let currentSection;
    let currentSectionTop;
    let currentSectionBottom;

    let biggestArea = 0;
    let currentArea;
    let biggestAreaIndex = 0;

    for (let i = 0; i < document.querySelectorAll(sectionType).length; i++) {

        currentSection = document.querySelectorAll(sectionType)[i];
        currentSectionTop = currentSection.offsetTop;
        currentSectionBottom = currentSectionTop + currentSection.offsetHeight;

        if ( (currentSectionBottom < windowTop) || (currentSectionTop > windowBottom) ) {

            // Skip Section
            continue;

        } else {

            areaTop = currentSectionTop > windowTop ? currentSectionTop : windowTop;
            areaBottom = currentSectionBottom < windowBottom ? currentSectionBottom : windowBottom;

            currentArea = areaBottom - areaTop;

            if (biggestArea < currentArea) {
                biggestArea = currentArea;
                biggestAreaIndex = i;
            }

        }

    }

    return biggestAreaIndex;

}

let paintTheme = () => {
    if (document.querySelectorAll('.section').length > 1 ) {

        if ( document.querySelectorAll('.section')[sectionInFocus('.section')].classList.contains('theme-green') ) {
            // document.documentElement.style.setProperty('--main-theme-color', '#212121');
            document.documentElement.style.setProperty('--main-theme-color', '#7eb200');

            for (let i = 0; i < document.querySelectorAll('.make-light').length; i++) {
                document.querySelectorAll('.make-light')[i].classList.remove('vine-orange');
                document.querySelectorAll('.make-light')[i].classList.add('vine-green');
            }

        } else if ( document.querySelectorAll('.section')[sectionInFocus('.section')].classList.contains('theme-orange') ) {
            // document.documentElement.style.setProperty('--main-theme-color', '#212121');
            document.documentElement.style.setProperty('--main-theme-color', '#db3e00');

            for (let i = 0; i < document.querySelectorAll('.make-light').length; i++) {
                document.querySelectorAll('.make-light')[i].classList.remove('vine-green');
                document.querySelectorAll('.make-light')[i].classList.add('vine-orange');
            }
        }

    }
}

let randomTestimonial = () => {
    if (document.querySelector('.testimonials-item') == null ) {
        // Skip
    } else {

        let min = 0;
        let max = document.querySelectorAll('.testimonials-item').length - 1;

        let randomNo = Math.floor(Math.random() * max) + min;

        document.querySelectorAll('.testimonials-item')[randomNo].classList.add('enter-right');
        document.querySelectorAll('.testimonials-item')[randomNo].classList.add('active');

    }
}

setInterval(function() {
    let j = 0;
    let x = 0;

    if (document.querySelector('.testimonials-item') == null ) {
        // Skip
    } else {

        for (let i = 0; i < document.querySelectorAll('.testimonials-item').length; i++) {
            if (document.querySelectorAll('.testimonials-item')[i].classList.contains('active')) {
                if (i == document.querySelectorAll('.testimonials-item').length - 1) {
                    j = 0;
                } else {
                    j = i + 1;
                }

                x = i;

                break;
            }
        }

        // document.querySelectorAll('.testimonials-item')[j].classList.add('active');
        document.querySelectorAll('.testimonials-item')[x].classList.remove('enter-right');
        document.querySelectorAll('.testimonials-item')[x].classList.add('leave-left');

        setTimeout(() => {
            for (let i = 0; i < document.querySelectorAll('.testimonials-item').length; i++) {
                // alert(document.querySelectorAll('.testimonials-item')[i].scrollHeight);
                document.querySelectorAll('.testimonials-item')[i].classList.remove('active');
            }

            document.querySelectorAll('.testimonials-item')[j].classList.remove('leave-left');
            document.querySelectorAll('.testimonials-item')[j].classList.add('active');
            document.querySelectorAll('.testimonials-item')[j].classList.add('enter-right');
        }, 800);
    }

}, 10000);

document.querySelectorAll('.card').forEach(item => {
    item.addEventListener('click', function(e) {

        if (window.innerWidth > 1090) {
            let siblingsArr = [];
            let currSibling = item.parentElement.firstChild;

            while (currSibling) {
                if (currSibling.nodeType === 1 && currSibling !== item) {
                    siblingsArr.push(currSibling);
                }

                currSibling = currSibling.nextSibling;
            }

            for (let sibling in siblingsArr) {
                siblingsArr[sibling].classList.remove('open');
                siblingsArr[sibling].setAttribute('style', 'height: 50px');
            }

            if (item.parentElement.classList.contains('active') && item.classList.contains('open')) {

                document.querySelectorAll('.card').forEach(card => {
                    card.classList.remove('open');
                    card.setAttribute('style', 'height: auto');
                });

                item.parentElement.classList.remove('active');

            } else {

                !item.parentElement.classList.contains('active') ?
                    item.parentElement.classList.add('active')
                    : null;

                item.classList.add('open');
                item.setAttribute('style', 'height: 500px');
            }
        }
    });
});

if (document.querySelector('form.make-contact')) {
    document.querySelector('form.make-contact').addEventListener('submit', function(e) {
        document.querySelector('.make-contact .btn-submit span.default').style.display = "none";
        document.querySelector('.make-contact .btn-submit span.loading').style.display = "block";
        // e.preventDefault();
    });

    document.querySelectorAll('form.make-contact input[type=email]').forEach(item => {
        item.addEventListener('keyup', function(e) {
            selfValidateEmail(e.target);
        });
    });

    document.querySelectorAll('form.make-contact input[type=email]').forEach(item => {
        item.addEventListener('blur', function(e) {
            selfValidateEmail(e.target);
        });
    });

    document.querySelectorAll('form.make-contact input[type=text]').forEach(item => {
        item.addEventListener('keyup', function(e) {
            selfValidateText(e.target, 1);
        });
    });

    document.querySelectorAll('form.make-contact input[type=text]').forEach(item => {
        item.addEventListener('blur', function(e) {
            selfValidateText(e.target, 1);
        });
    });

    document.querySelectorAll('form.make-contact input[type=tel]').forEach(item => {
        item.addEventListener('keyup', function(e) {
            selfValidateTel(e.target);
        });
    });

    document.querySelectorAll('form.make-contact input[type=tel]').forEach(item => {
        item.addEventListener('blur', function(e) {
            selfValidateTel(e.target);
        });
    });

    document.querySelectorAll('form.make-contact textarea').forEach(item => {
        item.addEventListener('keyup', function(e) {
            selfValidateText(e.target, 10);
        });
    });

    document.querySelectorAll('form.make-contact textarea').forEach(item => {
        item.addEventListener('blur', function(e) {
            selfValidateText(e.target, 10);
        });
    });
}


let selfValidateEmail = (emailInput) => {
    if (emailInput.value.length == 0) {
        emailInput.classList.remove('validate');
        emailInput.classList.remove('invalid');
        document.querySelector('label[for="' + emailInput.id + '"').classList.remove('make-invalid');
    } else {
        emailInput.classList.add('validate');
        let emailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (emailInput.value.match(emailFormat)) {
            document.querySelector('label[for="' + emailInput.id + '"').classList.add('make-valid');
            document.querySelector('label[for="' + emailInput.id + '"').classList.remove('make-invalid');
            emailInput.classList.add('make-valid');
        } else {
            document.querySelector('label[for="' + emailInput.id + '"').classList.remove('make-valid');
            document.querySelector('label[for="' + emailInput.id + '"').classList.add('make-invalid');
            emailInput.classList.remove('make-valid');
        }
    }
}

let selfValidateText = (textInput, min) => {
    if ((textInput.value.trim().split(/\s+/).length > (min - 1)) && (textInput.value.length > 0)) {
        document.querySelector('label[for="' + textInput.id + '"').classList.add('make-valid');
        document.querySelector('label[for="' + textInput.id + '"').classList.remove('make-invalid');
        textInput.classList.add('make-valid');
    } else {
        document.querySelector('label[for="' + textInput.id + '"').classList.remove('make-valid');
        document.querySelector('label[for="' + textInput.id + '"').classList.add('make-invalid');
        textInput.classList.remove('make-valid');
    }
}

let selfValidateTel = (telInput) => {
    if (telInput.value.match(telInput.getAttribute('pattern'))) {
        document.querySelector('label[for="' + telInput.id + '"').classList.add('make-valid');
        document.querySelector('label[for="' + telInput.id + '"').classList.remove('make-invalid');
        telInput.classList.add('make-valid');
    } else {
        document.querySelector('label[for="' + telInput.id + '"').classList.remove('make-valid');
        document.querySelector('label[for="' + telInput.id + '"').classList.add('make-invalid');
        telInput.classList.remove('make-valid');
    }
}

let actionIt = () => {
    let formFront = document.querySelector('.front-form');
    let formBack = document.querySelector('.back-success');

    let actualForm = formFront.children[3];
    let submitBtn = actualForm.children[3];

    submitBtn.innerHTML = '<i class="fas fa-spinner"></i>';

    setTimeout(function() {
        formFront.classList.add('actioned');
    }, 3000);

    setTimeout(function() {
        formFront.classList.add('hide');
        formBack.classList.add('show');
        formBack.classList.add('appear');
    }, 3500);

}

let goTo = (section) => {
    let sectionTop;
    if (section === 'x') {
        sectionTop = document.querySelectorAll('.section')[document.querySelectorAll('.section').length - 1].offsetTop;
    } else if (section === 'x-1') {
        sectionTop = document.querySelectorAll('.section')[document.querySelectorAll('.section').length - 2].offsetTop;
    } else {
        sectionTop = document.querySelectorAll('.section')[section].offsetTop;
    }

    window.scroll({
        top: sectionTop,
        behavior: 'smooth'
    });
}

let flyToTop = () => {
    document.querySelector('.backToTop').classList.add('rocket-step1');

    setTimeout(() => {
        document.querySelector('.backToTop').classList.remove('rocket-step1');
        document.querySelector('.backToTop').classList.add('rocket-step2');
    }, 100);

    setTimeout(() => {
        document.querySelector('.backToTop').classList.remove('rocket-step2');
        document.querySelector('.backToTop').classList.add('rocket-step3');
    }, 200);

    setTimeout(() => {
        document.querySelector('.backToTop').classList.remove('rocket-step3');
        document.querySelector('.backToTop').classList.add('flying');
    }, 300);

    setTimeout(() => {
        goTo(0);
    }, 400);
}

let deliver = (deliverable) => {
    let deliverableTop;

    if (document.querySelector('.deliverables-collection').classList.contains('hinged')) {
        deliverableTop = document.querySelectorAll('.package-card')[deliverable].parentElement.offsetTop + document.querySelectorAll('.package-card')[deliverable].offsetTop - 100;
    } else {
        deliverableTop = document.querySelectorAll('.package-card')[deliverable].parentElement.offsetTop + document.querySelectorAll('.package-card')[deliverable].offsetTop - 250;
    }


    window.scroll({
        top: deliverableTop,
        behavior: 'smooth'
    });
}

let findFooter = () => {
    if (getComputedStyle(document.getElementsByTagName('footer')[0]).position !== 'relative') {
        document.querySelector('.make-last').style.marginBottom = document.querySelector('.footer').offsetHeight + "px";
    } else {
        document.querySelector('.make-last').style.marginBottom = "0px";
    }
}

document.querySelector('.hamburger').addEventListener('click', function() {
    this.classList.toggle("is-active");
    document.getElementById('main-menu').classList.toggle('is-active');

    // if (document.getElementById('main-menu').classList.contains('is-active')) {
    //     document.getElementsByTagName('html')[0].classList.add('hold');
    // } else {
    //     document.getElementsByTagName('html')[0].classList.remove('hold');
    // }
});

// Animations
let flipCard = (e) => {
    let packageCard = e.target.parentElement.parentElement.parentElement.parentElement;
    packageCard.classList.add("activate");
}

let flipBack = (e) => {
    let packageCard = "";

    if (e.target.classList.contains("package-card")) {
        packageCard = e.target;
    } else if (e.target.parentElement.parentElement.classList.contains("package-close")) {
        packageCard = e.target.parentElement.parentElement.parentElement.parentElement.parentElement;
    }

    packageCard.classList.remove("activate");
}

//
let ToggleReference = (e) => {
    let toggleElement = e.target;
    let siblingElement = document.querySelector(".package-reference[data-package-data='" + e.target.dataset.packageSource + "']");

    toggleElement.classList.toggle("active");
    siblingElement.classList.toggle("active");

    if (siblingElement.classList.contains("active")) {
        siblingElement.style.maxHeight = siblingElement.scrollHeight + "px";
    } else {
        siblingElement.style.maxHeight = null;
    }
}

document.querySelector('.menu-bulk').addEventListener('click', function() {
    document.querySelector('.hamburger').classList.toggle("is-active");
    document.getElementById('main-menu').classList.toggle('is-active');
});

window.addEventListener('load', function() {

    let thisYear = new Date().getFullYear();

    document.getElementById("footer-copyright").innerHTML = "Copyright © " + thisYear + " 1VINE Design. All rights reserved.";

    randomTestimonial();

    paintLogo();
    paintBackToTop();
    paintTheme();

    findFooter();

    if (document.querySelectorAll('.deliverables-collection').length > 0 ) {
        let deliverablesCollection = document.querySelector('.deliverables-collection');

        if (window.scrollY > (document.querySelectorAll('.section')[1].offsetTop + document.querySelectorAll('.section')[1].offsetHeight)) {
            deliverablesCollection.classList.add('hinged');
        } else {
            deliverablesCollection.classList.remove('hinged');
        }
    }
});

window.addEventListener('resize', function () {
    findFooter();
});

document.addEventListener('scroll', function() {

    paintLogo();
    paintBackToTop();
    paintTheme();

    if (document.querySelectorAll('.deliverables-collection').length > 0 ) {
        let deliverablesCollection = document.querySelector('.deliverables-collection');

        if (window.scrollY > (document.querySelectorAll('.section')[1].offsetTop + document.querySelectorAll('.section')[1].offsetHeight)) {
            deliverablesCollection.classList.add('hinged');
        } else {
            deliverablesCollection.classList.remove('hinged');
        }
    }

//     const elBrand = document.querySelector('.brand');
//     const anySection = document.querySelectorAll('.section');


//     if (elBrand.top > )
});

if (document.getElementById("quote_select") !== null) {
    document.getElementById("quote_select").addEventListener('change', function(e) {
        if (e.target.value !== 0) {
            document.querySelector(".quote-select-wrapper").classList.add("make-chosen");
            document.querySelector(".quote-select-wrapper").classList.remove("make-default");
        }
    });
}

// Automatic Scrolling
// window.addEventListener('wheel', function(e) {

//     let currentSection = document.querySelectorAll('.work-item')[sectionInFocus('.work-item')];

//     if (currentSection.classList.contains("autoScroll")) {

//         e.preventDefault();

//         let nextSection = document.querySelectorAll('.work-item')[sectionInFocus('.work-item') + 1];
//         let prevSection = document.querySelectorAll('.work-item')[sectionInFocus('.work-item') - 1];

//         let scrollTo = 0;
//         let allowScroll = 0;

//         console.log(sectionInFocus('.work-item'));

//         if (e.deltaY > 0 ) {

//             if (window.scrollY < currentSection.offsetTop) {

//                 scrollTo = currentSection.offsetTop;

//             } else {

//                 if (nextSection) {

//                     allowScroll = 1;
//                     scrollTo = nextSection.offsetTop;

//                 } else {

//                     scrollTo = currentSection.offsetTop;

//                 }

//             }

//         } else if (e.deltaY < 0) {

//             if (window.scrollY > currentSection.offsetTop) {

//                 scrollTo = currentSection.offsetTop;

//             } else {

//                 if (prevSection) {

//                     allowScroll = 1;
//                     scrollTo = prevSection.offsetTop;

//                 } else {

//                     scrollTo = currentSection.offsetTop;

//                 }

//             }

//         }

//         window.scroll({
//             top: scrollTo,
//             behavior: 'smooth'
//         });

//     }

// }, {passive: false});
