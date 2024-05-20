<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3">
        <h2 class="text-2xl font-semibold mb-6">Login</h2>
        
        <!-- Login form -->
        <form id="loginForm" action="login.php" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="loginUsername">
                    Username:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="loginUsername" name="loginUsername" type="text" placeholder="Enter your username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="loginPassword">
                    Password:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="loginPassword" name="loginPassword" type="password" placeholder="Enter your password">
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Login
            </button>
        </form>

        <!-- Link to registration page -->
        <div class="flex items-center justify-between mt-4">
            <span>Don't have an account?</span>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="pages/register_user.php">
                Register
            </a>
        </div>
    </div>
</body>
</html>
