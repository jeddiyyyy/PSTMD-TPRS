// Handle Add User Form
const addUserForm = document.getElementById('addUserForm');
if (addUserForm) {
    addUserForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append('action', 'create');

        fetch('../assets/api/user_api.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: data.message,
                    confirmButtonColor: '#28a745'
                }).then(() => {
                    document.getElementById('addUserForm').reset();
                    bootstrap.Modal.getInstance(document.getElementById('addUserModal')).hide();
                    location.reload();
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: data.message,
                    confirmButtonColor: '#dc3545'
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'An error occurred: ' + error.message,
                confirmButtonColor: '#dc3545'
            });
        });
    });
}

// Handle Edit User Modal
function editUserModal(userId) {
    fetch(`../assets/api/user_api.php?action=get&id=${userId}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('editUserId').value = data.data.id;
                document.getElementById('editName').value = data.data.name;
                document.getElementById('editUsername').value = data.data.username;
                document.getElementById('editRole').value = data.data.role;
                document.getElementById('editPassword').value = '';
                
                const modal = new bootstrap.Modal(document.getElementById('editUserModal'));
                modal.show();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: data.message || 'Failed to load user data',
                    confirmButtonColor: '#dc3545'
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'An error occurred: ' + error.message,
                confirmButtonColor: '#dc3545'
            });
        });
}

// Handle Edit User Form
const editUserForm = document.getElementById('editUserForm');
if (editUserForm) {
    editUserForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append('action', 'update');

        fetch('../assets/api/user_api.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: data.message,
                    confirmButtonColor: '#007bff'
                }).then(() => {
                    bootstrap.Modal.getInstance(document.getElementById('editUserModal')).hide();
                    location.reload();
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: data.message,
                    confirmButtonColor: '#dc3545'
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'An error occurred: ' + error.message,
                confirmButtonColor: '#dc3545'
            });
        });
    });
}

// Handle Delete User
function deleteUser(userId) {
    Swal.fire({
        icon: 'warning',
        title: 'Delete User?',
        text: 'Are you sure you want to delete this user? This action cannot be undone.',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`../assets/api/user_api.php?action=delete&id=${userId}`, {
                method: 'POST'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: data.message,
                        confirmButtonColor: '#dc3545'
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.message,
                        confirmButtonColor: '#dc3545'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'An error occurred: ' + error.message,
                    confirmButtonColor: '#dc3545'
                });
            });
        }
    });
}

