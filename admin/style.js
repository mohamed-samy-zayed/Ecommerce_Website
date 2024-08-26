
function showForm(formId) {
    var forms = document.getElementsByClassName('myForm');
    for (var i = 0; i < forms.length; i++) {
        forms[i].classList.remove('active');
    }
    var selectedForm = document.getElementById(formId);
    selectedForm.classList.add('active');
}
function searchForAccount() {
    var errormsg = document.getElementById('error');
    var successmsg = document.getElementById('success');
    errormsg.innerHTML = '';
    successmsg.innerHTML = '';
    var search_email = document.getElementById("search_email").value.trim();
    var search_name = document.getElementById("search_name").value.trim();
    // Get the loading indicator element
    var loadingIndicator = document.getElementById("loadingIndicator");
    if (search_email || search_name) {
        // Show the loading indicator
        loadingIndicator.style.display = "block";
        // Introduce a delay of 2 seconds before fetching data
        setTimeout(function() {
            fetchData();
            // Hide the loading indicator after fetching data
            loadingIndicator.style.display = "none";
        }, 2000);
    } else {
        alert("Search With Email OR Name!");
    }
}
function fetchData() {
    var search_email = document.getElementById("search_email").value.trim();
    search_email = encodeURI(search_email);
    var search_name = document.getElementById("search_name").value.trim();
    search_name = encodeURI(search_name);
    var formData = new FormData();
    formData.append('form', 'search_user_account');
    if (search_email !== '') {
        formData.append('email', search_email);
    } else if (search_name !== '') {
        formData.append('name', search_name);
    } else {
        alert("Search With Email OR Name!");
        return;
    }
    var xhr = new XMLHttpRequest();
    var url = 'http://localhost/all/project/ecommerce/admin/adminControl.php';
    xhr.open('POST', url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            var productContainer = document.getElementById('FeaturedproductContainer');
            productContainer.innerHTML = '';
            productContainer.innerHTML = `
                <h5>
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
                                <strong style="color: blue; ">ID: </strong>
                            </div>
                            <small style="color: green; ">${product.id}</small>
                            <h1>--------------</h1>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <strong style="color: blue;">UserName: </strong>
                            </div>
                            <small style="color: green; ">${product.name}</small>
                            <h1>--------------</h1>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <strong style="color: blue;">Email: </strong>
                            </div>
                            <small style="color: green; ">${product.email}</small>
                            <h1>--------------</h1>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <strong style="color: blue;">Email Verifing Mode: </strong>
                            </div>
                            <small style="color: green; ">${product.verified}</small>
                            <h1>--------------</h1>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <strong style="color: blue;">Times user Failed to Verify His Email:</strong> 
                            </div>
                            <small style="color: green; ">${product.err_try}</small>
                        </div>
                    </div>
                </div>
            `;
            });
        }
    };
    xhr.send(formData);
}

function logout()
{
    window.location.href = "http://localhost/all/project/ecommerce/admin/logout.php";
}
function login()
{
    window.location.href = "http://localhost/all/project/ecommerce/admin/login.php";
}