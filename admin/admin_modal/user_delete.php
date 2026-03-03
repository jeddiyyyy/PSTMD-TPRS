<?php
$page = $_GET['page'] ?? 'dashboard';

// Handle delete action
if ($page === 'delete_user' && isset($_GET['id'])) {
    $user_id = intval($_GET['id']);
    
    // Prevent deleting the current admin user
    if ($user_id === $_SESSION['user_id']) {
        echo "<div class='alert alert-danger'><strong>Error:</strong> Cannot delete your own account</div>";
    } else {
        $delete_stmt = $conn->prepare("DELETE FROM users WHERE id=?");
        $delete_stmt->bind_param("i", $user_id);
        
        if ($delete_stmt->execute()) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'User deleted successfully',
                    confirmButtonColor: '#28a745'
                }).then(() => {
                    window.location.href = '?page=manage_users';
                });
            </script>";
        } else {
            echo "<div class='alert alert-danger'><strong>Error:</strong> Failed to delete user</div>";
        }
    }
    exit;
}
