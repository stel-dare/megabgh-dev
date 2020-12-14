function removeItem(id) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            location.reload();
        }
    };
    xhttp.open("POST", "manage_cart", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Post cart ID and quantity to manage_cart endpoint
    xhttp.send(`id=${id}&action=delete`);
}

function quantityChanged(quantity, price, total) {
    // Update total cost when quantity changes
    document.getElementById(total).innerHTML = quantity.value * price;

    // Update quantity of product in database
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);

        }
    };
    xhttp.open("POST", "manage_cart", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Post cart ID and quantity to manage_cart endpoint
    xhttp.send(`id=${total}&quantity=${quantity.value}&action=update`);
    // console.log('Quantity Changed');
}