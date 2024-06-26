document.getElementById('search').addEventListener('keyup', function() {
    const query = this.value;

    // Create a new XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Configure it: GET-request for the URL index.php?page=search&query=...
    xhr.open('GET', 'index.php?page=search&query=' + encodeURIComponent(query), true);

    

    // Send the request over the network
    xhr.send();

    // This will be called after the response is received
    xhr.onload = function() {
        if (xhr.status != 200) { // analyze HTTP response status
            alert(`Error ${xhr.status}: ${xhr.statusText}`); // e.g. 404: Not Found
        } else { // show the result
            // Update the product grid
            document.querySelector('#productGrid .grid').innerHTML = xhr.responseText;
        }
    };
});
