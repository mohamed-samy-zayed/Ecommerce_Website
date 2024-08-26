function shop_list_counter() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var products_num = parseInt(xhr.responseText); // Convert the response to a number
                if (products_num >= 0) {
                    console.log("\nProducts Count in shopping cart: " + products_num);
                    var counter = document.getElementById("counter");
                    counter.textContent = products_num;
                    /* counter.innerHTML=`
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">${products_num}</span>
                    `; */
                    
                } else {
                    console.error("Invalid product count received from the server");
                    counter.textContent = "0"; // Set a default value if there's an error
                }
            } else {
                console.error("Failed to fetch product count. Status: " + xhr.status);
                counter.textContent = "0"; // Set a default value if there's an error
            }
        }
    };
    xhr.open("GET", "http://localhost/all/project/ecommerce/orders/products_counter.php", true);
    xhr.send();
}

window.onload = function () {
    shop_list_counter();
    // Remove the second call to shop_list_counter() if you only want it to be called once on page load
};
