var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        var productContainer = document.getElementById('profile_img');
        productContainer.innerHTML += `
            <div style="display: block;">
            <img id="img" src='${data.profile_img_url}' alt='avatar' style="width:50px; height:50px; border-radius: 150px; margin-left: 7px;">
            </div>
        `;
    }
}
xhr.open("GET", "http://localhost/all/project/ecommerce/api/v1/account/accountAPI.php", true);
xhr.withCredentials = true;
xhr.send();