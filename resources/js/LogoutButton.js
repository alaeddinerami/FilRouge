
        // JavaScript to toggle the dropdown
        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown-menu');
        let isOpen = true; // Set to true to open the dropdown by default

        // Function to toggle the dropdown state
        function toggleDropdown() {
            isOpen = !isOpen;
            dropdownMenu.classList.toggle('hidden', !isOpen);
        }

        // Set initial state
        toggleDropdown();

        dropdownButton.addEventListener('click', () => {
            toggleDropdown();
        });
   