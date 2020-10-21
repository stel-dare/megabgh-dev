window.onload = function(e){
 getProducts(0);
   
}

let lastIndex = 0;
let lastTotal = 0;
//Filter parameters
let category_name='';
let lPrice='';
let uPrice='';
let search='';
let sortBy='';

//Filter Query

function getProducts(num,queryString=''){
        lastIndex+=num;
        lastIndex = lastIndex>=0 && lastIndex <= lastTotal ? lastIndex : 0;
        // if(lastIndex>=0 && lastIndex <= lastTotal){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              let data = JSON.parse(this.responseText);
               updateProductsView(data['products']);
               updateProductCount(data['total'],lastIndex); 
          }
        };
        xhttp.open("GET", "products?index="+lastIndex+queryString, true);
        xhttp.send();
    // }
    // else lastIndex=0;
    console.log(lastIndex);
}

function updateProductsView(data){
    document.getElementById('products_view').innerHTML = '';
    data.forEach(element => {
        let product = document.createElement('div');
        product.classList.add('col-lg-4', 'col-md-4', 'col-sm-6');
        product.innerHTML = `
        
        <div class="product__item">
        <div class="product__item__pic">
            <img src=${element.image_url} alt="" style="width:270px;height:270px">
            <ul class="hover__item">
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
        <div class="product__item__text">
            <h6><a href="#">${element.name}</a></h6>
            <div class="price">
                <span>GHS ${element.price}</span>
                <a href="#">+Add To Cart</a>
            </div>
        </div>
    </div>
        
        `;

        document.getElementById('products_view').appendChild(product);
        
    });
    // Scroll to products section after updating
    // document.getElementById('products_view').scrollIntoView();
}

function updateProductCount(total,index){
    document.getElementById('total_products').innerHTML = total;
    document.getElementById('lastIndex').innerHTML=index+1>total? total : index+1;
    document.getElementById('newIndex').innerHTML=index+9>total? total : index+9;
    lastTotal = total;
}

function getNextProducts(e){
    e.preventDefault();
    let queryString = updateFilterVariables();
    getProducts(9,queryString);
    // getProducts(9);
}

function getPrevProducts(e){
    e.preventDefault();
    let queryString = updateFilterVariables();
    getProducts(-9,queryString);
    // getProducts(-9);
}

function categoryClick(elem){
    let categories = document.getElementsByClassName('category_name');
    for(let i=0; i<categories.length; i++){categories[i].classList.remove('qSelected');}
    elem.classList.add('qSelected');
    let queryString = updateFilterVariables();
    getProducts(0,queryString);
}

function priceClick(elem){
    let price = document.getElementsByClassName('price');
    for(let i=0; i<price.length; i++){price[i].classList.remove('qSelected');}
    elem.classList.add('qSelected');
    let queryString = updateFilterVariables();
    getProducts(0,queryString);
}

function searchButtonClicked(){
    let queryString = updateFilterVariables();
    getProducts(0,queryString);
    // document.querySelector('#searchInput').value='';
}

function sortByClicked(){
    let queryString = updateFilterVariables();
    getProducts(0,queryString);
}

function updateFilterVariables(){
    category_name= document.querySelector('li.category_name.qSelected')? `'${document.querySelector('li.category_name.qSelected').innerHTML}'` : '';
    lPrice = document.querySelector('li.price.qSelected')? `${document.querySelector('li.price.qSelected span.lPrice').innerHTML}` : '';
    uPrice = document.querySelector('li.price.qSelected')? `${document.querySelector('li.price.qSelected span.uPrice').innerHTML}` : '';
    search = document.querySelector('#searchInput').value? `${document.querySelector('#searchInput').value}` : '';
    sortBy = document.querySelector('#sortBy').value;
    queryParams = ['category_name','lPrice','uPrice','search','sortBy'];
    queryString='&';
    `${category_name} ${lPrice} ${uPrice} ${search} ${sortBy}`.split(' ').forEach((elem,index)=>{
        if(elem)  queryString+=`${queryParams[index]}=${elem}&`;
    });
    console.log(queryString);
    return queryString;

}

document.getElementById('getNextProducts').addEventListener('click',getNextProducts);
document.getElementById('getPrevProducts').addEventListener('click',getPrevProducts);