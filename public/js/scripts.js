function findJob() {
    document.getElementById('findJob').style.display = "block"
    document.getElementById('findEmployee').style.display = "none"
    document.getElementById('btnFindJob').style.borderBottom = "2px solid orange"
    document.getElementById('btnFindEmployee').style.borderBottom = "2px solid #fff"

}

function findEmployee() {
    document.getElementById('findJob').style.display = "none"
    document.getElementById('findEmployee').style.display = "block"
    document.getElementById('btnFindJob').style.borderBottom = "2px solid #fff"
    document.getElementById('btnFindEmployee').style.borderBottom = "2px solid orange"
}

// ACCOUNT SETTINGS
function btnSettingsGeneral() {
    document.getElementById("settings-general").style.display = 'block'
    document.getElementById("settings-password").style.display = 'none'


    document.getElementById("btnSettingsGeneral").classList.add('btn-secondary')
    document.getElementById("btnSettingsPassword").classList.remove('btn-secondary')

}

function btnSettingsPassword() {
    document.getElementById("settings-general").style.display = 'none'
    document.getElementById("settings-password").style.display = 'block'


    document.getElementById("btnSettingsGeneral").classList.remove('btn-secondary')
    document.getElementById("btnSettingsPassword").classList.add('btn-secondary')
}




















// CORE JS
window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});
