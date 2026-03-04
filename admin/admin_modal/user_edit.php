<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editUserLabel">Edit User</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editUserForm">
                <input type="hidden" id="editUserId" name="id">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editName" class="form-label">Full Name *</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="editUsername" class="form-label">Username *</label>
                        <input type="text" class="form-control" id="editUsername" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPassword" class="form-label">Password (leave blank to keep current)</label>
                        <input type="password" class="form-control" id="editPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="editRole" class="form-label">Role *</label>
                        <select class="form-control" id="editRole" name="role" required>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                      <div class="mb-3">
                        <label for="editRole" class="form-label">Account Status</label>
                        <select class="form-control" id="editAccountStatus" name="account_status" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </div>
            </form>
        </div>
    </div>
</div>
