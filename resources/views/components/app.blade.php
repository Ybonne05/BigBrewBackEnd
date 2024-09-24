<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Default Title')</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: orange; /* Moved from inline to here */
            display: flex;
            flex-direction: column; /* Make the body a flex container */
            height: 100vh; /* Full height */
        }

        #layoutAuthentication {
            flex: 1; /* Take remaining space */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center content vertically */
            align-items: center;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Add your other styles here... */

    </style>
</head>
<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            @yield('content') <!-- Content Section -->
        </div>
    </div>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between small">
                <div class="text-muted">Copyright &copy; BigBrew 2023</div>
                <div>
                    <a href="{{ url('privacy-policy') }}" class="text-secondary">Privacy Policy</a>
                    &middot;
                    <a href="{{ url('terms-conditions') }}" class="text-secondary">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
