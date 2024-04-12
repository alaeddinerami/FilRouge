document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    menuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
    const profileDropdown = document.getElementById('profileDropdown');
    const profileDropdownButton = document.getElementById('profileDropdownButton');
    const profileDropdownMenu = document.getElementById('profileDropdownMenu');

    // Open dropdown menu
    profileDropdownButton.addEventListener('click', function(event) {
        event.stopPropagation();
        profileDropdownMenu.classList.toggle('hidden');
    });

    // Close dropdown menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInside = profileDropdown.contains(event.target);
        if (!isClickInside) {
            profileDropdownMenu.classList.add('hidden');
        }
    });
});

function toggleAnswer(id) {
    var answer = document.getElementById('answer' + id);
    if (answer.style.display === 'none') {
        answer.style.display = 'block';
    } else {
        answer.style.display = 'none';
    }
}