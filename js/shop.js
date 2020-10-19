window.onload = function(e){
 getProducts(false);
   
}

indexTracker = 9;

function getProducts(bool){
    indexTracker= bool?  indexTracker + 9 : indexTracker - 9;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           try{ 
              let data = JSON.parse(this.responseText);
               updateProductsView(data['products']);
                }

            catch(e){
                indexTracker=9;
            }     
            
          }
        };
        xhttp.open("GET", "products?index="+indexTracker, true);
        xhttp.send();
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
}

function getNextProducts(e){
    e.preventDefault();
    getProducts(true);
}

function getPrevProducts(e){
    e.preventDefault();
    getProducts(false);
}

document.getElementById('getNextProducts').addEventListener('click',getNextProducts);
document.getElementById('getPrevProducts').addEventListener('click',getPrevProducts);