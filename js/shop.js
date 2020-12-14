window.onload = function (e) {
    getProducts(0);

}

let lastIndex = 0;
let lastTotal = 0;
//Filter parameters
let category_name = '';
let lPrice = '';
let uPrice = '';
let search = '';
let sortBy = '';

//Filter Query

function getProducts(num, queryString = '') {
    lastIndex += num;
    lastIndex = lastIndex >= 0 && lastIndex <= lastTotal ? lastIndex : 0;
    // if(lastIndex>=0 && lastIndex <= lastTotal){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            updateProductsView(data['products']);
            updateProductCount(data['total'], lastIndex);
        }
    };
    xhttp.open("GET", "products?index=" + lastIndex + queryString, true);
    xhttp.send();
    // }
    // else lastIndex=0;
    console.log(lastIndex);
}

function updateProductsView(data) {
    document.getElementById('products_view').innerHTML = '';
    data.forEach(element => {
        let product = document.createElement('div');
        product.classList.add('col-lg-4', 'col-md-4', 'col-sm-6', 'product-border-bottom');
        product.innerHTML = `
        
        <div class="product__item">
        <div class="product__item__pic">
            <img src=${element.image_url} alt="" style="width:270px;height:270px">
            <ul class="hover__item">
                <li><a href="product_details?id=${element.id}"><i class="fa fa-eye"></i></a></li>
                <li><a href="javascript:;" class="add_to_cart" onclick="addToCart(${element.id})"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
        <div class="product__item__text">
            <h6><a href="product_details?id=${element.id}">${element.name}</a></h6>
            <div class="price">
                <span>GHS ${element.price}</span>
                <a href="javascript:;" class="add_to_cart" onclick="addToCart(${element.id})">+Add To Cart</a>
            </div>
        </div>
    </div>
        
        `;

        document.getElementById('products_view').appendChild(product);

    });
    // Scroll to products section after updating
    // document.getElementById('products_view').scrollIntoView();
}

function updateProductCount(total, index) {
    document.getElementById('total_products').innerHTML = total;
    document.getElementById('lastIndex').innerHTML = index + 1 > total ? total : index + 1;
    document.getElementById('newIndex').innerHTML = index + 9 > total ? total : index + 9;
    lastTotal = total;
}

function getNextProducts(e) {
    e.preventDefault();
    let queryString = updateFilterVariables();
    getProducts(9, queryString);
    // getProducts(9);
}

function getPrevProducts(e) {
    e.preventDefault();
    let queryString = updateFilterVariables();
    getProducts(-9, queryString);
    // getProducts(-9);
}

function categoryClick(elem) {
    let categories = document.getElementsByClassName('category_name');
    for (let i = 0; i < categories.length; i++) { categories[i].classList.remove('qSelected'); }
    elem.classList.add('qSelected');
    let queryString = updateFilterVariables();
    getProducts(0, queryString);
}

function priceClick(elem) {
    let price = document.getElementsByClassName('price');
    for (let i = 0; i < price.length; i++) { price[i].classList.remove('qSelected'); }
    elem.classList.add('qSelected');
    let queryString = updateFilterVariables();
    getProducts(0, queryString);
}

function searchButtonClicked() {
    let queryString = updateFilterVariables();
    getProducts(0, queryString);
    // document.querySelector('#searchInput').value='';
}

function sortByClicked() {
    let queryString = updateFilterVariables();
    getProducts(0, queryString);
}

function clearSearchInput() {
    document.querySelector('#searchInput').value = '';
    let queryString = updateFilterVariables();
    getProducts(0, queryString);
    document.querySelector('#clear_search').classList.add('clear_search');

}

function updateFilterVariables() {
    category_name = document.querySelector('li.category_name.qSelected') ? `${document.querySelector('li.category_name.qSelected').title}` : '';
    lPrice = document.querySelector('li.price.qSelected') ? `${document.querySelector('li.price.qSelected span.lPrice').innerHTML}` : '';
    uPrice = document.querySelector('li.price.qSelected') ? `${document.querySelector('li.price.qSelected span.uPrice').innerHTML}` : '';
    search = document.querySelector('#searchInput').value ? `${document.querySelector('#searchInput').value}` : '';
    sortBy = document.querySelector('#sortBy').value;
    queryParams = ['category_name', 'lPrice', 'uPrice', 'search', 'sortBy'];
    queryString = '&';
    [category_name, lPrice, uPrice, search, sortBy].forEach((elem, index) => {
        if (elem) queryString += `${queryParams[index]}=${elem}&`;
    });
    console.log(queryString);
    return queryString;

}

function addToCart(product_id, quantity = 1) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText != 'false') {
                // Product successfully added to cart
                console.log('Added to cart');
                // Update all cart badge numbers
                for (let i = 0; i < document.querySelectorAll('.cart-number').length; i++) {
                    document.querySelectorAll('.cart-number')[i].innerHTML = this.responseText;
                }
                alert('Product successfully added to cart.');
            }
            else {
                // User not logged in
                window.location.href = '/login';
            }
        }
    };
    xhttp.open("POST", "manage_cart", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Post product ID and quantity to manage_cart endpoint
    xhttp.send(`product_id=${product_id}&quantity=${quantity}&action=add`);

    console.log(`Product ID : ${product_id}. Quantity: ${quantity}`);
}



document.getElementById('getNextProducts').addEventListener('click', getNextProducts);
document.getElementById('getPrevProducts').addEventListener('click', getPrevProducts);
document.querySelector('#searchInput').addEventListener('keyup', function (e) {
    searchButtonClicked();
    document.querySelector('#clear_search').classList.remove('clear_search');
});