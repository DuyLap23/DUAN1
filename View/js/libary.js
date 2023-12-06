
function validateAndSubmit() {
    var size = document.getElementById('size').value;
    var quantityInput = document.getElementById('quantity_1');
    var quantity = parseInt(quantityInput.value);

    // Check if the quantity is a positive integer
    if (isNaN(quantity) || quantity <= 0 || Math.floor(quantity) !== quantity) {
        alert('Please enter a valid positive integer quantity.');
        return;
    }

    // Here you can check if the selected size has enough quantity in stock
    // You may need to get the available quantity from the server using AJAX
    // and compare it with the selected quantity.

    // Example: Assume you have a JavaScript variable `availableQuantity` representing
    // the available quantity for the selected size (you need to set this value based on server data)
    var availableQuantity = 10; // Replace with the actual available quantity

    if (quantity > availableQuantity) {
        alert('Not enough quantity in stock.');
        return;
    }

    // If validation passes, submit the form
    document.getElementById('addtocart').submit();
}
