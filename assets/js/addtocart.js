function addToCart(productId) {
    // Send AJAX request to add the product to the wishlist
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/add_to_cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Update wishlist count in the header
            var cartcount = parseInt(xhr.responseText);
            document.querySelector('.header-action-btn[href="cart.php"] .header-action-badge').textContent = cartcount;
        }
    };
    xhr.send("product_id=" + productId);
}
function updatecart(productId, quantite) {
    // Send AJAX request to add the product to the wishlist
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/updatecartproduct.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Update cart count in the header
            var cartcount = parseInt(xhr.responseText);
            document.querySelector('.header-action-btn[href="cart.php"] .header-action-badge').textContent = cartcount;
        }
    };
    xhr.send("product_id=" + productId + "&quantity=" + quantite); // Include quantity in the request
}
