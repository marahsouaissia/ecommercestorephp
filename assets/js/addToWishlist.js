function addToWishlist(productId) {
    // Send AJAX request to add the product to the wishlist
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/add_to_wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Update wishlist count in the header
            var wishlistCount = parseInt(xhr.responseText);
            document.querySelector('.header-action-btn[href="wishlist.php"] .header-action-badge').textContent = wishlistCount;
        }
    };
    xhr.send("product_id=" + productId);
}
