// Display loading indicator for filtered products
var loadingFilteredProductsIndicator = document.getElementById("loadingFilteredProductsIndicator");
loadingFilteredProductsIndicator.style.display = "block";
setTimeout(function () {
    // Fetch Featured products From API
    fetch('http://localhost/all/project/ecommerce/api/v1/checkPage/checkAPI.php')
        .then(response => response.json())
        .then(data => {
            // Hide loading indicator for filtered products
        loadingFilteredProductsIndicator.style.display = "none";
        // Update the frontend with the product data
        var productContainer = document.getElementById('ProductContainer');
        data.forEach(product => {
            productContainer.innerHTML += `
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="${product.img_url}1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="#">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">${product.name}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <h6>Size ${product.size}</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <h6>Color ${product.color}</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <h6>Quantity ${product.quantity}</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <input type="hidden" id="sessionKey" value="${product.sessionKey}">
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">$${product.price}</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >$${product.old_price}</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                            <div><strong><button type="submit" class="btn btn-primary px-3" style="onmouseover{color:black;}" onclick="RemoveProduct(this)">Remove This Product</button></strong></div>
                        </div>
                    </div>
                </div>
            `;
        });
        })
        .catch(error => console.error('Error:', error));
    }, 2000);
// Function to Update Price
var price = -1;
function get_price() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var products_price = parseFloat(xhr.responseText); // Convert the response to a number
            console.log("\nProducts Price: $" + products_price);
            
            if (products_price > 0) {
                var total_price = products_price + 35;
                console.log("\nTotal Price: $" + total_price);
                price = products_price;
                
                var roundedProductsPrice = Math.round(products_price);
                var roundedTotalPrice = Math.round(total_price);

                document.getElementById("products_price").innerHTML = "<i class='fa fa-angle-right mr-2'></i><h6 style='color: blue;'>Your Products Price = <span style='color:green;'>$" + roundedProductsPrice + "</span></h6>";
                document.getElementById("deliver_price").innerHTML = '<i class="fa fa-angle-right mr-2"></i>'+"<h6 style='color: blue;'>Delivery Price = <span style='color:green;'>$35</span></h6>";

                document.getElementById("total_price").innerHTML = '<i class="fa fa-angle-right mr-2"></i> '+"<h6 style='color: blue;'>Total Price = <span style='color:green;'>$" + roundedTotalPrice + "</span></h6>";
            } else {
                // Set product price field to 0 if products_price is 0
                document.getElementById("products_price").innerHTML = '<i class="fa fa-angle-right mr-2"></i> '+"<h6 style='color: blue;'> Your Products Price = <span style='color:green;'>$0</span></h6>";
                document.getElementById("deliver_price").innerHTML = '<i class="fa fa-angle-right mr-2"></i> '+"<h6 style='color: blue;'> Delivery Price = <span style='color:green;'>$35</span></h6>";
                document.getElementById("total_price").innerHTML = '<i class="fa fa-angle-right mr-2"></i> '+"<h6 style='color: blue;'> Total Price = <span style='color:green;'>$35</span></h6>";
            }
        }
    };
    xhr.open("GET", "http://localhost/all/project/ecommerce/orders/tp.php", true);
    xhr.send();
}

// Execute the get_price function after the window has loaded
window.onload = function () {
    // Display loading indicator for filtered products
    var loadingProductsPriceIndicator = document.getElementById("loadingProductsPriceIndicator");
    loadingProductsPriceIndicator.style.display = "block";
    setTimeout(function () {
        // Hide loading indicator for filtered products
        loadingProductsPriceIndicator.style.display = "none";
        get_price();
    }, 2000);
    
};


function RemoveProduct(button) {
    // Display loading indicator for filtered products
    var loadingProductsPriceIndicatorAfterRemoving = document.getElementById("loadingProductsPriceIndicatorAfterRemoving");
    loadingProductsPriceIndicatorAfterRemoving.style.display = "block";

    // Get the product container and remove it
    var productContainer = button.closest('.product-item');

    if (productContainer) {
        // Get Product Session Key
        var sessionKeyElement = productContainer.querySelector('input[type="hidden"]');
        var sessionKey = sessionKeyElement.value;
        console.log(sessionKey);

        // Remove the product container from the page
        productContainer.remove();

        // Store the modified link in the session using AJAX
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && this.status == 200) {
                // Log the modified link and session key after the request is complete
                console.log('Success:', this.responseText);
                // Show a success popup
                showPopup('Item Has Been Removed from Your Shopping Cart!');
            }
        };
        // Send the session key to the PHP script to remove the corresponding session variable
        xhr.open('POST', 'http://localhost/all/project/ecommerce/StoreProductsInSession.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('action=remove&sessionKey=' + encodeURIComponent(sessionKey));
    } else {
        console.error('Product container not found');
    }
    setTimeout(function () {
        // Hide loading indicator for filtered products
        loadingProductsPriceIndicatorAfterRemoving.style.display = "none";
        get_price();
        get_price();
    }, 2000);
}

function PaymentOnDelivery() {
    // Check if there are any products in the cart
    var remainingProducts = document.querySelectorAll('.product-item');
    if (remainingProducts.length === 0) {
        showPopup("There Isn't Any Product Checked!");
    } else if (price > 0) {
        window.location.href = "http://localhost/all/project/ecommerce/orders/confirmUserData.php";
    } else {
        showPopup("There Isn't Any Product Checked!");
    }
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

function flex()
{
    document.getElementById("productsContainer").style.display="flex";
}
function block()
{
    document.getElementById("productsContainer").style.display="block";
}

function PaymentCredit() {
    var loadingIndicator = document.getElementById('loadingFilteredProductsIndicator');
    var successMessage = document.getElementById('filter_error');
    var errorMessage = document.getElementById('api_error');

    // Show loading indicator
    loadingIndicator.style.display = 'block';
    successMessage.style.display = 'none';
    errorMessage.style.display = 'none';

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/all/project/ecommerce/api/v1/account/cridit.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            loadingIndicator.style.display = 'none';
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    successMessage.style.display = 'block';
                    successMessage.innerText = response.message;
                } else {
                    errorMessage.style.display = 'block';
                    errorMessage.innerText = response.message;
                }
            } else {
                errorMessage.style.display = 'block';
                errorMessage.innerText = "Failed to process payment.";
            }
        }
    };

    xhr.send(); // No parameters needed for this request
}
