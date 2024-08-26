
// Display loading indicator for filtered products
var loadingFilteredProductsIndicator = document.getElementById("loadingFilteredProductsIndicator");
loadingFilteredProductsIndicator.style.display = "block";
setTimeout(function () {// Show All Products 
    fetch('http://localhost/all/project/ecommerce/api/v1/clothes/men/t_shirtsAPI.php')
    .then(response => response.json())
    .then(data => {
            // Hide loading indicator for filtered products
            var loadingFilteredProductsIndicator = document.getElementById("loadingFilteredProductsIndicator");
            loadingFilteredProductsIndicator.style.display = "none";
            // Update the frontend with the product data
            var productContainer = document.getElementById('productsContainer');
            data.forEach(product => {
                productContainer.innerHTML += `
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1" >
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="${product.img_url}1.jpg" alt="" >
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a class="btn btn-outline-dark btn-square" href="">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a class="btn btn-outline-dark btn-square" href="../../detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">
                                        <i class="fa fa-sync-alt"></i>
                                    </a>
                                    <a class="btn btn-outline-dark btn-square" href="">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="../../detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">${product.name}</a>
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
                                    <small class="far fa-star text-primary mr-1"></small>
                                    <small class="far fa-star text-primary mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
            });
    })
    .catch(error => {
        var loadingFilteredProductsIndicator = document.getElementById("loadingFilteredProductsIndicator");
        var api_error = document.getElementById("api_error");
        loadingFilteredProductsIndicator.style.display = "none";
        api_error.style.display = "block";
    });
}, 2000);
// Get all checkboxes
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

// Add event listener to each checkbox
checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', function() {
    if (checkbox.checked) {
      // Extract the price range from the checkbox value
        const filter = this.value;
        // Display loading indicator for filtered products
        // Hide loading indicator for filtered products
        var filter_error = document.getElementById("filter_error");
        var loadingFilteredProductsIndicator = document.getElementById("loadingFilteredProductsIndicator");
        if(filter_error)
        {
            filter_error.style.display = "none";
        }
        loadingFilteredProductsIndicator.style.display = "block";
      // Log or store the selected price range
        /* console.log(`Selected Price Range: ${priceRange}`); */
        /* var xhr = new XMLHttpRequest;
        xhr.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {

            }
        } */
        // Remove each element
        const elementsToRemove = document.querySelectorAll('.col-lg-4.col-md-6.col-sm-6.pb-1');
        elementsToRemove.forEach(element => {
            element.remove();
        });
        setTimeout(function () {
                //Fetch Filtered Products
                var url = `http://localhost/all/project/ecommerce/api/v1/clothes/men/t_shirtsAPI.php?filter=${filter}`;
                fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Hide loading indicator for filtered products
                    var loadingFilteredProductsIndicator = document.getElementById("loadingFilteredProductsIndicator");
                    loadingFilteredProductsIndicator.style.display = "none";
                    
                    // Update the frontend with the product data
                    var productContainer = document.getElementById('productsContainer');
                    data.forEach(product => {
                        productContainer.innerHTML += `
                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1" >
                                <div class="product-item bg-light mb-4">
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="${product.img_url}1.jpg" alt="" >
                                        <div class="product-action">
                                            <a class="btn btn-outline-dark btn-square" href="">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                            <a class="btn btn-outline-dark btn-square" href="">
                                                <i class="far fa-heart"></i>
                                            </a>
                                            <a class="btn btn-outline-dark btn-square" href="../../detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">
                                                <i class="fa fa-sync-alt"></i>
                                            </a>
                                            <a class="btn btn-outline-dark btn-square" href="">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                        <div class="text-center py-4">
                                                <a class="h6 text-decoration-none text-truncate" href="../../detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">${product.name}</a>
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
                                            <small class="far fa-star text-primary mr-1"></small>
                                            <small class="far fa-star text-primary mr-1"></small>
                                            <small>(99)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;
                    });
                })
                .catch(error => {
                    var loadingFilteredProductsIndicator = document.getElementById("loadingFilteredProductsIndicator");
                    loadingFilteredProductsIndicator.style.display = "none";
                    var filter_error = document.getElementById("filter_error");
                    filter_error.style.display = "block";
                });
                /* .catch(error => console.error('Error:', error)); */
            }, 2000);
        }
    });
});

function flex()
{
    document.getElementById("productsContainer").style.display="flex";
}
function block()
{
    document.getElementById("productsContainer").style.display="block";
}