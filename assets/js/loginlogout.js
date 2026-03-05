// LOGIN PROCESS
$(document).ready(function () {

    $("#loginForm").on("submit", function (e) {
        e.preventDefault();

        const formData = $(this).serialize();

        $("#loginsubmit").prop("disabled", true);
        $(".btn-text").text("Please wait...");

        $.ajax({
            url: "assets/php/login.php",
            type: "POST",
            data: formData,
            dataType: "json",

            success: function (response) {

                if (response.status === "success") {

                    Swal.fire({
                        icon: "success",
                        title: "Login Successful",
                        text: "Welcome to TPRS!",
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = response.redirect;
                    });

                } else {

                    Swal.fire({
                        icon: "error",
                        title: "Login Failed",
                        text: response.message || "Invalid credentials.",
                    });

                    $("#loginsubmit").prop("disabled", false);
                    $(".btn-text").text("Login");
                }
            },

            error: function (xhr, status, error) {

                console.error("Login AJAX Error:", xhr.responseText);

                Swal.fire({
                    icon: "error",
                    title: "Server Error",
                    text: "Something went wrong. Please try again."
                });

                $("#loginsubmit").prop("disabled", false);
                $(".btn-text").text("Login");
            }
        });
    });


    // LOGOUT PROCESS
    $(document).on("click", ".btn-logout", function (e) {
        e.preventDefault();

        Swal.fire({
            title: "Are you sure?",
            text: "You will be logged out.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            confirmButtonText: "Yes, Logout"
        }).then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    url: "../assets/php/logout.php",
                    type: "POST",
                    dataType: "json",

                    success: function (response) {

                        if (response.status === "success") {

                            Swal.fire({
                                icon: "success",
                                title: "Logged Out",
                                text: "Thank you for using TPRS!",
                                timer: 1500,
                                showConfirmButton: false
                            }).then(() => {
                                window.location.href = "../index.php";
                            });

                        } else {
                            Swal.fire("Error", response.message, "error");
                        }
                    },

                    error: function () {
                        Swal.fire("Error", "Logout failed.", "error");
                    }
                });
            }
        });
    });

});