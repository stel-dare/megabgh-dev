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

    // Post product ID and quantity to manage_cart endpoint
    xhttp.send(`id=${id}&action=delete`);
}