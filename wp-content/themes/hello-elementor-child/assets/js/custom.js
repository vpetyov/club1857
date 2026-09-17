(function () {
    'use strict';

    // Add front-end JavaScript here.
    document.querySelectorAll('div[link]').forEach((homeBlock) => {
        homeBlock.addEventListener('click', function() {
            // Your click handler code here
            window.location.href = homeBlock.getAttribute('link');
        });
    });
}());
