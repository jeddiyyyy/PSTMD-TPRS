function toggleProfileDropdown() {
    const dropdown = document.getElementById("profileDropdown");
    const section = document.querySelector(".profile-section");

    dropdown.classList.toggle("show");
    section.classList.toggle("active");
}

/* Close when clicking outside */
document.addEventListener("click", function (e) {
    const profileSection = document.querySelector(".profile-section");
    const dropdown = document.getElementById("profileDropdown");

    if (!profileSection.contains(e.target)) {
        dropdown.classList.remove("show");
        profileSection.classList.remove("active");
    }
});

