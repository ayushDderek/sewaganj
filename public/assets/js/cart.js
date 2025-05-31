// document.getElementById('addToCartButton').addEventListener('click', function() {
    
//     addToCart(productId);
// });

// function addToCart(productId) {
//     fetch('/cleaning', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//             // Uncomment the following line if your backend requires a CSRF token.
//             // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         },
//         body: JSON.stringify({ productId: productId })
//     })
//     .then(response => {
//         if (!response.ok) {
//             throw new Error('Network response was not ok');
//         }
//         return response.json();
//     })
//     .then(data => {
//         if (data.success) {
//             alert('Product added to cart!');
//         } else {
//             alert('Failed to add product to cart.');
//         }
//     })
//     .catch(error => {
//         console.error('Error:', error);
//         alert('An error occurred while adding the product to the cart.');
//     });
// }

$(document).ready(function(){
    $('.addToCartButton').click(function(){
        const productId = $(this).data('product-id');
        
        $.ajax({
            type:'POST',
            url:"/cleaning",
            data:{
                num1: productId,
                num2: 2
            },
            success:function(data){
                $('#output').html(data);
            }
        });
    });
});