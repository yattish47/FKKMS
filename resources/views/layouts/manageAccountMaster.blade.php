<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FKKMS-Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/ManageAccount/main.css') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/fkkmsLogo.png') }}">
</head>

<body>
    @yield('content')


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- MDBootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/mdbootstrap@5.1.0/dist/js/mdb.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.umd.min.js"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach((form) => {
                form.addEventListener('submit', (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
        document.getElementById('age').addEventListener('wheel', function(e) {
            e.preventDefault();
        });
        document.getElementById('age').addEventListener('input', function(e) {
            var input = e.target,
                value = input.value;

            if (value < 0 || Math.floor(value) != value) {
                input.value = 0;
            }
        });
        document.getElementById('age').addEventListener('keydown', function(e) {
            if (e.key === '-' || e.key === '.') {
                e.preventDefault();
            }
        });

        var password = document.getElementById('password'),
        confirmPassword = document.getElementById('confirmpassword');
        submitbtn = document.getElementById('submitbtn');
        errordisp = document.getElementById('errordisp');
        confirmPassword.addEventListener('input', function(e) {
            var errorMessage = document.getElementById('passwordError');
            if (password.value !== confirmPassword.value) {
                if (!errorMessage) {
                    errorMessage = document.createElement('div');
                    errorMessage.id = 'passwordError';
                    errorMessage.className = 'error';
                    errorMessage.textContent = 'Passwords do not match';
                    errordisp.parentNode.appendChild(errorMessage);
                    submitbtn.disabled = true;
                }
            } else {
                if (errorMessage) {
                    errorMessage.remove();
                    submitbtn.disabled = false;
                }
            }
        });
    </script>
</body>

</html>
