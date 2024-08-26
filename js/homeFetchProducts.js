/* <!-- Fetch Featured products From API --> */

    fetch('http://localhost/all/project/ecommerce/api/v1/home/homefutureAPI.php')
    .then(response => response.json())
    .then(data => {
        // Update the frontend with the product data
        var productContainer = document.getElementById('FeaturedproductContainer');
        data.forEach(product => {
            productContainer.innerHTML += `
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1" >
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
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">${product.name}</a>
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
                        </div>
                    </div>
                </div>
        </div>
            `;
        });
    })
    .catch(error => console.error('Error:', error));

/* <!-- Fetch Recent products From API --> */

    fetch('http://localhost/all/project/ecommerce/api/v1/home/homerecentAPI.php')
    .then(response => response.json())
    .then(data => {
        // Update the frontend with the product data
        var productContainer = document.getElementById('RecentproductContainer');
        data.forEach(product => {
            productContainer.innerHTML += `
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="${product.img_url}1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=${product.id}&category=${product.category}&kind=${product.kind}">${product.name}</a>
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
                        </div>
                    </div>
                </div>
        </div>
            `;
        });
    })
    .catch(error => console.error('Error:', error));
