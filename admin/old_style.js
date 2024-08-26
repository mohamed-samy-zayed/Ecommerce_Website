
function showForm(formId) {
    // Hide all forms
    var forms = document.getElementsByClassName('myForm');
    for (var i = 0; i < forms.length; i++) {
        forms[i].classList.remove('active');
    }
    // Show the selected form
    var selectedForm = document.getElementById(formId);
    selectedForm.classList.add('active');
}

function searchForAccount() {
    var search_email = document.getElementById("search_email").value;
    var search_name = document.getElementById("search_name").value;
    if (search_email || search_name) {
        fetchData();
    }
    else
    {
        alert("Search With Email OR Name !");
    }
}
function fetchData()
{
    var search_email = document.getElementById("search_email").value;
    search_email = encodeURI(search_email);
    var search_name = document.getElementById("search_name").value;
    search_name = encodeURI(search_name);

    var formData = new FormData();
    formData.append('form', 'search_user_account');

    if (search_email != '') {
        formData.append('email', search_email);
    } else if(search_name != ''){
        formData.append('name', search_name);
    }
    else
    {
        alert("Search With Email OR Name !");
    }
    var xhr = new XMLHttpRequest();
    var url = 'http://localhost/all/project/ecommerce/admin/adminControl.php';

    // Form data to be sent in the POST request
        // Configure the request
    xhr.open('POST', url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Handle the response data
            var data = JSON.parse(xhr.responseText);
            var productContainer = document.getElementById('FeaturedproductContainer');
            // Clear existing content
            productContainer.innerHTML = '';
            productContainer.innerHTML = `
            <h5 >
                Accounts Founded
            </h5><br>`;
            data.forEach(product => {
                productContainer.innerHTML += `
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1" >
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="${product.profile_img_url}" alt="Profile Image" style="border-radius: 150px;" >
                        </div>
                        <div class="text-center py-4" style="overflow: scroll">
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p style="color: blue; ">ID: </p>
                            </div>
                            <strong style="color: green; width: max-content;">${product.id}</strong>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p style="color: blue;">UserName: </p>
                            </div>
                            <strong style="color: green; width: max-content;">${product.name}</strong>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p style="color: blue;">Password Hash: </p>
                            </div>
                            <strong style="color: green; width: max-content;">${product.password_hash}</strong>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p style="color: blue;">API Token: </p>
                            </div>
                            <strong style="color: green; width: max-content;">${product.api_token}</strong>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <p style="color: blue;">Reset Token: </p>
                            </div>
                            <strong style="color: green; width: max-content;">${product.reset_token}</strong>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p style="color: blue;">Reset Token Expires AT: </p> 
                            </div>
                            <strong style="color: green; width: max-content;">${product.reset_token_expires_at}</strong>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p style="color: blue;">Profile Image URL: </p>
                            </div>
                            <strong style="color: green; width: max-content;">${product.profile_img_url}</strong>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p style="color: blue;">Verify Code: </p>
                            </div>
                            <strong style="color: green; width: max-content;">${product.verifyCode}</strong>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p style="color: blue;">Email Verifing Mode: </p>
                            </div>
                                <strong style="color: green; width: max-content;">${product.verified}</strong>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <p style="color: blue;">Times user Failed to Verify His Email:</p> 
                            </div>
                                <strong style="color: green; width: max-content;">${product.err_try}</strong>
                        </div>
                    </div>
                </div>
                `;
            });
        }
    };
    // Send the request with the form data
    xhr.send(formData);
}

