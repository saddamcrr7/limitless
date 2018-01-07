jQuery(document).ready(function ($) {
    const siteHeader = $('#site-header');
    const menuPrimaryContainer = $('#menu-primary-container');
    const maxHeight = menuPrimaryContainer.find('.menu').outerHeight(true)

    $('#menu-toggle').on('click', function () {
        if (siteHeader.hasClass('menu-open')) {
            siteHeader.removeClass('menu-open');
            menuPrimaryContainer.css('max-height', 0)
        } else {
            siteHeader.addClass('menu-open');
            menuPrimaryContainer.css('max-height', maxHeight);
        }
    });
});