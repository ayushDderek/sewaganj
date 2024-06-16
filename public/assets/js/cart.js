// $(document).ready(function() {
//     $(".cartload").click(function (e) {
//         e.preventDefault();
//
//         var $form = $(this).closest(".form-submit");
//         var sId = $form.find('.service_id').val();
//         var sName = $form.find('.service_name').val();
//         var sImage = $form.find('.service_image').val();
//         var sPrice = $form.find('.service_price').val();
//         var sCategory = $form.find('.service_category').val();
//
//         $.ajax({
//             url: '/cleaning',  // Replace with your route URL
//             type: 'POST',        // Use the appropriate HTTP method (GET or POST)
//             data: {
//                 sId: sId,
//                 sName: sName,
//                 sImage: sImage,
//                 sPrice: sPrice,
//                 sCategory: sCategory
//             },
//             success: function(response) {
//                 // Handle the response from the server
//                 console.log('Success:', response);
//             },
//             error: function(error) {
//                 // Handle any errors
//                 console.log('Error:', error);
//             }
//         });
//
//     });
//
// });