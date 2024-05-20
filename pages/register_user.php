<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3">
        <h2 class="text-2xl font-semibold mb-6">Register</h2>
        
        <!-- Registration form -->
        <form id="registerForm" action="process_register.php" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="registerUsername">
                    Username:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="registerUsername" name="registerUsername" type="text" placeholder="Choose a username">
                <p id="usernameError" class="text-red-500 text-xs italic hidden">Username is required.</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="registerPassword">
                    Password:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="registerPassword" name="registerPassword" type="password" placeholder="Choose a password">
                <p id="passwordError" class="text-red-500 text-xs italic hidden">Password is required.</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="registerFirstname">
                    Firstname:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="registerFirstname" name="registerFirstname" type="text" placeholder="Enter your firstname">
                <p id="firstnameError" class="text-red-500 text-xs italic hidden">Firstname is required.</p>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="registerLastname">
                    Lastname:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="registerLastname" name="registerLastname" type="text" placeholder="Enter your lastname">
                <p id="lastnameError" class="text-red-500 text-xs italic hidden">Lastname is required.</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="registerProfilePicture">
                    Profile Picture:
                </label>
                <input type="file" class="form-control" id="registerProfilePicture" name="profile_picture">
                <small class="text-muted">Upload a profile picture (optional)</small>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Register
            </button>
        </form>

        <!-- Link to login page -->
        <div class="flex items-center justify-between mt-4">
            <span>Already have an account?</span>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="login.php">
                Login
            </a>
        </div>
    </div>

    <!-- Include the validation script -->
    <script src="validate_register.js"></script>
</body>
</html>
