<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
       body {
    background-image: url('img/ronaldo.jpeg');
    background-size: 105%;
    animation: gradient 8s infinite;
    margin-top: 70px;
    width: 100vw; /* Adjusted width to make it smaller */
    height: 95vh; /* Adjusted height to make it smaller */
    border-radius: 30px; /* Adjusted border-radius */
}

@keyframes gradient {
    0% {
        background-position: 50% 100%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

.card {
    background: linear-gradient(to right, #000000, #FF0000, #FF0000);
    border-radius: 15px;
    box-shadow: 0px 8px 40px rgba(0, 0, 0, 0.2);
    animation: fadeInUp 1s ease;
    overflow: hidden;
    color: #fff;
    margin: 0 auto; /* Center the card horizontally */
    max-width: 400px; /* Set a maximum width for the card */
}

.card-header {
    background: linear-gradient(to right, #FF0000, #000000);
    color: white;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    padding: 1.5rem;
    text-align: center;
}

.card-body {
    background: linear-gradient(to right, #000000, #FF0000, #FF0000);
    animation: fadeInUp 1s ease;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    padding: 2rem;
}

.form-floating input {
    background: transparent;
    border: none;
    border-bottom: 1px solid #FF0000;
    border-radius: 0;
    outline: none;
    box-shadow: none;
    color: #fff;
}

.form-floating label {
    color: #FF0000;
}

.btn-primary {
    background: linear-gradient(to right, #FF0000, #000000, #FF0000);
    color: #fff;
    border: none;
    border-radius: 25px;
    padding: 12px 30px;
    font-weight: bold;
    letter-spacing: 1px;
    transition: background 0.3s ease, color 0.3s ease;
}

.btn-primary:hover {
    background: linear-gradient(to right, #FF0000, #000000, #FF0000);
    color: #fff;
}

.btn-primary:focus {
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(192, 192, 192, 0.5);
}





        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>LOGIN MAHASISWA</h2>
                </div>
                <div class="card-body">
                    <form action="cek_login.php" method="POST">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                name="nim" required>
                            <label for="floatingInput">NIM</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="password" required>
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
