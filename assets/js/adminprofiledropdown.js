function toggleProfileDropdown() {
    document.getElementById('profileDropdown').classList.toggle('show');
}

document.addEventListener('click', function(e) {
    const section = document.querySelector('.profile-section');
    if (!section.contains(e.target)) {
        document.getElementById('profileDropdown').classList.remove('show');
    }
});