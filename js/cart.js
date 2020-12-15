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
    document.getElementById(total).innerHTML = (quantity.value * price).toFixed(2);

    // Calculate new subtotal
    subtotal = 0;
    for (let i = 0; i < document.getElementsByClassName('total_prod_costs').length; i++) {
        subtotal += Number(document.getElementsByClassName('total_prod_costs')[i].innerText);
    }
    document.getElementById('subtotal').innerText = subtotal.toFixed(2);
    document.getElementById('order_total').innerText = subtotal.toFixed(2);
    console.log('New Subtotal: ', subtotal);

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