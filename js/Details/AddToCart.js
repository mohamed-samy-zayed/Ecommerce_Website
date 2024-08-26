function updateLink() {
    // Get selected size
    var size = document.querySelector('input[name="size"]:checked');
    size = size ? size.value : 'undefined';

    // Get selected color
    var color = document.querySelector('input[name="color"]:checked');
    color = color ? color.value : 'undefined';

    // Get quantity
    var quantity = document.getElementById('quantityInput').value;
    
    // Get the img element by id
    var productImg = document.getElementById('product_img');
    // Check if the src attribute contains the word "clothes"
    if ( productImg.src.includes('clothes')) 
    {
        if ((!size || size =='undefined') || (!color || color =='undefined') || (quantity <= 0 || quantity =='undefined')) 
        {
            showPopup("Please select size, color, and enter a valid quantity.");
        }
        else
        {
            // Build the modified link
            var modifiedLink = window.location.href;
            var details = '&size=' + size + '&color=' + color + '&quantity=' + quantity;
            modifiedLink += details;
            // Send the modified link to the PHP page in the backend
            sendLinkToBackend(modifiedLink);
        }
    } 
    else 
    {
        if ((!color || color =='undefined') || (quantity <= 0 || quantity =='undefined')) 
        {
            showPopup("Please select size, color, and enter a valid quantity.");
        }
        else
        {
            // Build the modified link
            var modifiedLink = window.location.href;
            var details = '&size=' + size + '&color=' + color + '&quantity=' + quantity;
            modifiedLink += details;
        
            // Send the modified link to the PHP page in the backend
            sendLinkToBackend(modifiedLink);
        }
    }
}

function sendLinkToBackend(modifiedLink) {
    // Find the next available session key
    var nextSessionKey = findNextSessionKey();
    
    // Build the URL for the PHP page in the backend
    var url = "http://localhost/all/project/ecommerce/StoreProductsInSession.php?url=" + encodeURIComponent(modifiedLink);
    
    // Store the modified link in the session using AJAX
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && this.status == 200) {
            // Log the modified link and session key after the request is complete
            console.log('Session Key:', nextSessionKey);
            console.log('Modified Link:', modifiedLink);
            console.log('Success:', this.responseText);

            // Show a success popup
            showPopup('Item Added to Your Shopping Cart Successfuly!');
        }
    };
    xhr.open('POST', url, true);
    xhr.send();
}


// Function to find the next available session key
function findNextSessionKey() {
    var index = 1;
    while (sessionStorage.getItem('p_' + index) !== null) {
        index++;
    }
    return 'p_' + index;
}

function showPopup(message) {
    var overlay = document.getElementById('popupOverlay');
    var popupMessage = document.getElementById('popupMessage');
    overlay.style.display = 'flex';
    popupMessage.textContent = message;
}

function closePopup() {
    var overlay = document.getElementById('popupOverlay');
    overlay.style.display = 'none';
}

function goToPayment()
{
    window.location.href = "http://localhost/all/project/ecommerce/checkAndPay.php";
} 

function goToLoginPage()
{
    window.location.href = "http://localhost/all/project/ecommerce/loginF.php";
} 
