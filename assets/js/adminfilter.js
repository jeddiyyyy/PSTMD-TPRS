
window.onload = function () {
    const filterName = document.getElementById("filterName");
    const filterRole = document.getElementById("filterRole");
    const filterStatus = document.getElementById("filterStatus");
    const filterLogin = document.getElementById("filterLogin");

    function filterTable() {
        const nameValue = filterName.value.trim().toLowerCase();
        const roleValue = filterRole.value.trim().toLowerCase();
        const loginValue = filterStatus.value.trim().toLowerCase();
        const accountValue = filterLogin.value.trim().toLowerCase();

        const rows = document.querySelectorAll(".user-table tbody tr");

        rows.forEach(row => {
            const name = row.children[2].innerText.trim().toLowerCase();
            const role = row.dataset.role.toLowerCase();
            const loginStatus = row.dataset.login.toLowerCase();
            const accountStatus = row.dataset.account.toLowerCase();

            const matchName = !nameValue || name.includes(nameValue);
            const matchRole = !roleValue || role === roleValue;
            const matchLogin = !loginValue || loginStatus === loginValue;
            const matchAccount = !accountValue || accountStatus === accountValue;

            row.style.display = (matchName && matchRole && matchLogin && matchAccount) ? "" : "none";
        });
    }

    filterName.addEventListener("input", filterTable);
    filterRole.addEventListener("change", filterTable);
    filterStatus.addEventListener("change", filterTable);
    filterLogin.addEventListener("change", filterTable);

    // Clear Filters
    window.clearFilters = function() {
        filterName.value = "";
        filterRole.value = "";
        filterStatus.value = "";
        filterLogin.value = "";
        filterTable();
    };
};

// Sort Filter
let ascending = true;
sortAscBtn.addEventListener("click", () => {
    const tbody = document.querySelector(".user-table tbody");
    const rowsArray = Array.from(tbody.querySelectorAll("tr")).filter(row => row.style.display !== "none");

    rowsArray.sort((a, b) => {
        const idA = parseInt(a.children[0].innerText.trim());
        const idB = parseInt(b.children[0].innerText.trim());
        return ascending ? idA - idB : idB - idA;
    });

    rowsArray.forEach(row => tbody.appendChild(row));
    ascending = !ascending; // toggle for next click
});
