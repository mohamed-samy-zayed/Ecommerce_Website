//Fetch Filtered Products
// Get The Current URL
var url = window.location.href;

// Use the URLSearchParams API to extract parameters
var urlSearchParams = new URLSearchParams(url.split('?')[1]);

// Extract values of id, category, and kind parameters
var id = urlSearchParams.get('id');
var category = urlSearchParams.get('category');
var kind = urlSearchParams.get('kind');

// Print or use the values as needed
console.log('ID:', id);
console.log('Category:', category);
console.log('Kind:', kind);

var url = `http://localhost/all/project/ecommerce/api/v1/details/detailsAPI.php?id=${id}&category=${category}&kind=${kind}`;
fetch(url)
.then(response => response.json())
.then(data => {
    // Update the frontend with the product data
    var imgContainer = document.getElementById('img_container');
        imgContainer.innerHTML += `
            <div class="carousel-item active" >
            <img class="w-100 h-100" src="${data.img_url}1.jpg" alt="Image" id="product_img">
            </div>
            <div class="carousel-item" >
                <img class="w-100 h-100" src="${data.img_url}2.jpg" alt="Image">
            </div>
            <div class="carousel-item" >
                <img class="w-100 h-100" src="${data.img_url}3.jpg" alt="Image">
            </div>
            <div class="carousel-item" >
                <img class="w-100 h-100" src="${data.img_url}4.jpg" alt="Image">
            </div>
            <div class="carousel-item" >
                <img class="w-100 h-100" src="${data.img_url}5.jpg" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 h-100" src="${data.img_url}6.jpg" alt="Image">
            </div>
            `;
    /* Delete Size Choose Form IF Not Neccessary */
    var imgUrl = `${data.img_url}`;
    if (imgUrl.includes('computers') || imgUrl.includes('furniture') || imgUrl.includes('accessories')|| imgUrl.includes('camera')  ) {
        const elementsToRemove = document.querySelectorAll('#Size-Container');
        elementsToRemove.forEach(element => {
            element.remove();
        });
    }
    /* --------------------------------------------------------------------------- */
    /* Change Size Form To Shoes Size */
    if (imgUrl.includes('shoes')) {
        // Remove existing Size-Container
        const elementsToRemove = document.querySelectorAll('#Size-Container');
        elementsToRemove.forEach(element => {
            element.remove();
        });
    
        // Call the function to create size options after removing Size-Container
        createSizeOptions();
    }
        /* --------------------------------------------------------------------------- */
    /* Change Size Form To Glasses Size */
    if (imgUrl.includes('glasses')) {
        // Remove existing Size-Container
        const elementsToRemove = document.querySelectorAll('#Size-Container');
        elementsToRemove.forEach(element => {
            element.remove();
        });
    
        // Call the function to create size options after removing Size-Container
        createGlassesSizeOptions();
    }
    
    /* --------------------------- */
         // Function to create shoe size options and append them to the container
        function createSizeOptions() {
            var chooseSizeDiv = document.getElementById('choose-size');

            // Create the Size-Container div
            var sizeContainerDiv = document.createElement('div');
            sizeContainerDiv.id = 'Size-Container';
            sizeContainerDiv.className = 'size-container';

            // Add heading
            var heading = document.createElement('strong');
            heading.className = 'text-dark mr-3';
            heading.textContent = 'Sizes:';
            sizeContainerDiv.appendChild(heading);

            // Add shoe size options
            var shoeSizes = ['36', '37', '38', '39', '40', '41', '42', '43', '44', '45'];

            shoeSizes.forEach(function (size) {
                var optionDiv = document.createElement('div');
                optionDiv.className = 'custom-control custom-radio custom-control-inline size-option';

                var radioInput = document.createElement('input');
                radioInput.type = 'radio';
                radioInput.className = 'custom-control-input';
                radioInput.id = 'size-' + size;
                radioInput.name = 'size';
                radioInput.value = size;

                var label = document.createElement('label');
                label.className = 'custom-control-label';
                label.htmlFor = 'size-' + size;
                label.textContent = size;

                optionDiv.appendChild(radioInput);
                optionDiv.appendChild(label);
                sizeContainerDiv.appendChild(optionDiv);
            });
            chooseSizeDiv.appendChild(sizeContainerDiv);
        }
        // Call the function to create shoe size options when the page loads
        document.addEventListener('DOMContentLoaded', createSizeOptions);
        // Function to handle form submission (replace this with your actual submission logic)
        /* --------------------------- */
    /* --------------------------------------------------------------------------- */
    /* --------------------------- */
         // Function to create shoe size options and append them to the container
        function createGlassesSizeOptions() {
            var chooseSizeDiv = document.getElementById('choose-size');

            // Create the Size-Container div
            var sizeContainerDiv = document.createElement('div');
            sizeContainerDiv.id = 'Size-Container';
            sizeContainerDiv.className = 'size-container';

            // Add heading
            var heading = document.createElement('strong');
            heading.className = 'text-dark mr-3';
            heading.textContent = 'Sizes:';
            sizeContainerDiv.appendChild(heading);

            // Add shoe size options
            var glassesSizes = ['14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24'];

            glassesSizes.forEach(function (size) {
                var optionDiv = document.createElement('div');
                optionDiv.className = 'custom-control custom-radio custom-control-inline size-option';

                var radioInput = document.createElement('input');
                radioInput.type = 'radio';
                radioInput.className = 'custom-control-input';
                radioInput.id = 'size-' + size;
                radioInput.name = 'size';
                radioInput.value = size;

                var label = document.createElement('label');
                label.className = 'custom-control-label';
                label.htmlFor = 'size-' + size;
                label.textContent = size;

                optionDiv.appendChild(radioInput);
                optionDiv.appendChild(label);
                sizeContainerDiv.appendChild(optionDiv);
            });
            chooseSizeDiv.appendChild(sizeContainerDiv);
        }
        // Call the function to create shoe size options when the page loads
        document.addEventListener('DOMContentLoaded', createGlassesSizeOptions);
        // Assuming your HTML has a radio button with id "size-14"
        var size14RadioButton = document.getElementById("size-14");
        if (size14RadioButton) {
            size14RadioButton.checked = true;
        }

        // Function to handle form submission (replace this with your actual submission logic)
        /* --------------------------- */
    /* --------------------------------------------------------------------------- */

    var priceContainer = document.getElementById('product_price');
        priceContainer.textContent += `$${data.price}`;
    
    var oldpriceContainer = document.getElementById('product_old_price');
        oldpriceContainer.textContent += `$${data.old_price}`;
        oldpriceContainer.style.fontSize = "medium";

    var nameContainer = document.getElementById('product_name');
        nameContainer.textContent= `${data.name}`;

    console.log(data);
})
.catch(error => console.error('Error:', error));

