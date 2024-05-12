

    <!-- Contact Form -->
    <div class="container mx-auto my-8">
        <h2 class="text-3xl font-semibold mb-6">Contact Us</h2>
        <div class="max-w-md mx-auto">
            <form id="contactForm" action="process_contact.php" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                    <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your name">
                    <p id="nameError" class="text-red-500 text-xs italic hidden">Name is required</p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email:</label>
                    <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email">
                    <p id="emailError" class="text-red-500 text-xs italic hidden">Invalid email format</p>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message:</label>
                    <textarea name="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Enter your message"></textarea>
                    <p id="messageError" class="text-red-500 text-xs italic hidden">Message is required</p>
                </div>
                <button id="submitButton" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Additional Contact Information -->
    <div class="bg-gray-200 py-8 text-center">
    <div class="container mx-auto">
        <p class="text-lg text-gray-800">Follow us on social media:</p>
        <div class="flex justify-center mt-4">
            <a href="https://www.facebook.com/your-facebook-page" target="_blank" class="mr-4 text-blue-600 hover:text-blue-800">
                <i class="fab fa-facebook-square text-3xl"></i>
            </a>
            <a href="https://twitter.com/your-twitter-page" target="_blank" class="mr-4 text-blue-400 hover:text-blue-600">
                <i class="fab fa-twitter-square text-3xl"></i>
            </a>
            <a href="https://www.youtube.com/channel/your-youtube-channel" target="_blank" class="text-red-600 hover:text-red-800">
                <i class="fab fa-youtube-square text-3xl"></i>
            </a>
        </div>
    </div>
</div>

</div>


    <!-- Footer -->
    
</body>
</html>

