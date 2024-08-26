document.addEventListener("DOMContentLoaded", function() {
    fetchBalance(); 

    document.getElementById('balanceForm').addEventListener('submit', function(event) {
        event.preventDefault();
        submitForm();
    });
});

function fetchBalance() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/all/project/ecommerce/api/v1/account/balanceAPI.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    document.getElementById('currentBalance').innerText = response.balance;
                } else {
                    console.error("Failed to fetch balance: " + response.message);
                }
            } else {
                console.error("Failed to fetch balance");
            }
        }
    };

    xhr.send();
}

function submitForm() {
    var amount = document.getElementById('amount').value;
    var loadingIndicator = document.getElementById('loadingFilteredProductsIndicator');
    var successMessage = document.getElementById('filter_error');
    var errorMessage = document.getElementById('api_error');

    // Show loading indicator
    loadingIndicator.style.display = 'block';
    successMessage.style.display = 'none';
    errorMessage.style.display = 'none';

    setTimeout(function() {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "http://localhost/all/project/ecommerce/api/v1/account/balanceAPI.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                loadingIndicator.style.display = 'none';
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        successMessage.style.display = 'block';
                        fetchBalance(); // Fetch updated balance
                    } else {
                        errorMessage.style.display = 'block';
                    }
                } else {
                    errorMessage.style.display = 'block';
                }
            }
        };

        var params = "amount=" + encodeURIComponent(amount);
        xhr.send(params);
    }, 1000); // Set timeout for 1 second
}
