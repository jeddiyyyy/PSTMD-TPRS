<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="addUserLabel">Add New User</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addUserForm">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="addName" class="form-label">Full Name *</label>
                        <input type="text" class="form-control" id="addName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="addUsername" class="form-label">Username *</label>
                        <input type="text" class="form-control" id="addUsername" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="addPassword" class="form-label">Password *</label>
                        <input type="password" class="form-control" id="addPassword" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="addRole" class="form-label">Role *</label>
                        <select class="form-control" id="addRole" name="role" required>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-add">Create User</button>
                </div>
            </form>
        </div>
    </div>
</div>
