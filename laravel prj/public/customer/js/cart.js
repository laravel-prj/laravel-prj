// $(function() {
//     $('.aa-add-card-btn').on('click', function(e) {
//         e.preventDefault();
//         let item = event.target;
//         let id = $(item).attr('data-product-id');
//         $.ajax({
//             type: "GET",
//             url: "api/ajaxGetItemById",
//             data: {
//                 id: id
//             },
//             success: function(response) {
//                 let totalCurrentQuantity = 0;
//                 let item = '';
//                 for (const [key, value] of Object.entries(response)) {
//                     totalCurrentQuantity += Number(value.current_quantity);
//                     item += `
//                     <li>
//                         <a class="aa-cartbox-img" href="#"><img src="${window.location.origin + '/customer/img/' + value.image}" alt="img"></a>
//                             <div class="aa-cartbox-info">
//                                 <h4><a href="#">${value.name}</a></h4>
//                                 <p>${value.current_quantity} x ${value.price}</p>
//                             </div>
//                         <a onclick="removeItem(${key})" class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
//                     </li>
//                     `;
//                 }
//                 $('#cartHeader').html(item);
//                 $('#currentQuantity').text(totalCurrentQuantity);
//             }
//         });
//     });

//     $.ajax({
//         type: "get",
//         url: "api/ajaxGetAllItemBy",
//         success: function(res) {
//             setCartHeader(res);
//         }
//     }).done(function( data ) {

//         $('body').attr('style', 'display: block');
//     });
// });

// function setCartHeader(res) {
//     let totalCurrentQuantity = 0;
//     let item = '';
//     for (const [key, value] of Object.entries(res)) {
//         totalCurrentQuantity += Number(value.current_quantity);
//         item += `
//         <li>
//             <a class="aa-cartbox-img" href="#"><img src="${window.location.origin + '/customer/img/' + value.image}" alt="img"></a>
//                 <div class="aa-cartbox-info">
//                     <h4><a href="#">${value.name}</a></h4>
//                     <p>${value.current_quantity} x ${value.price}</p>
//                 </div>
//             <a onclick="removeItem(${key})" class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
//         </li>
//         `;
//     }
//     $('#cartHeader').html(item);
//     $('#currentQuantity').text(totalCurrentQuantity);
// }

// function removeItem(id) {
//     $.ajax({
//         type: "delete",
//         url: "api/ajaxRemoveItemById",
//         data: {
//             id: id
//         },
//         success: function(response) {
//             $.ajax({
//                 type: "get",
//                 url: "api/ajaxGetAllItemBy",
//                 success: function(res) {
//                     setCartHeader(res);
//                     location.reload();
//                 },
//                 error: function(error) {
//                     alert("ERR");
//                     location.reload();
//                 }
//             });
//         }
//     });
// }

// function updateCart() {
//     let dataToPost = $('#formCart').serialize();
//     $.ajax({
//         type: "post",
//         url: "api/ajaxUpdateCart",
//         data: dataToPost,
//         success: function(response) {
//             location.reload();
//         },
//         error: function(error) {
//             alert("ERR");
//             location.reload();
//         }
//     });
// }


// function removeCart(id) {
//     $('#tr'+id).remove();
// }

// ______________________________________________________________

function addToCart() {
    let id = $('#formItemDetail input[name="size"]:checked').val();
    let name = $('#itemName').text().toUpperCase();
    let currentQuantity = $('#current_quantity').val();
    let ok = confirm(`Thêm sản ${name} vào giỏ hàng`);
    if (ok) {
        $.ajax({
            type: "POST",
            url: window.location.origin + "/api/ajaxAddToCart/",
            data: {
                id: id,
                currentQuantity: currentQuantity
            },
            success: function(response) {
                rsMax = (Number($('#current_quantity').attr('max')) - Number(currentQuantity));
                if (rsMax == 0) {
                    $('#current_quantity').val(0);
                    $('#current_quantity').attr('min', 0);
                    $('#current_quantity').attr('max', 0);

                    $('#soldOut').attr('style', 'display: inline-block;'); // hien nut soulout
                    $('#addToCart').hide(); // an di nut dat hang
                } else {
                    if (rsMax > 0) {
                        $('#current_quantity').val(1);
                        $('#current_quantity').attr('max', rsMax);

                        $('#addToCart').show(); // hien nut dat hang
                        $('#soldOut').attr('style', 'display: none;'); // an di nut soulout
                    }
                }
                let totalCurrentQuantity = 0;
                let item = '';
                for (const [key, value] of Object.entries(response)) {
                    totalCurrentQuantity += Number(value.current_quantity);
                    item += `
            <li>
                <a class="aa-cartbox-img" href="#"><img src="${window.location.origin + '/customer/img/' + value.image}" alt="img"></a>
                    <div class="aa-cartbox-info">
                    <h4><strong><a href="#">${value.name}</a>-size:<span><a href="#">${value.size}</a><span></strong></h4>
                        <p>${value.current_quantity} x ${value.price}</p>
                    </div>
                <a onclick="removeItem(${key})" class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
            </li>
            `;

                }

                $('#cartHeader').html(item);
                $('#currentQuantity').text(totalCurrentQuantity);
            }
        });
    }
}

function fetchCart() {
    $.ajax({
        type: "GET",
        url: window.location.origin + "/api/ajaxGetAllItem",
        success: function(response) {
            let totalCurrentQuantity = 0;
            let item = '';
            for (const [key, value] of Object.entries(response)) {
                totalCurrentQuantity += Number(value.current_quantity);
                item += `
                <li>
                    <a class="aa-cartbox-img" href="#"><img src="${window.location.origin + '/customer/img/' + value.image}" alt="img"></a>
                        <div class="aa-cartbox-info">
                        <h4><strong><a href="#">${value.name}</a>-size:<span><a href="#">${value.size}</a><span></strong></h4>
                            <p>${value.current_quantity} x ${value.price}</p>
                        </div>
                    <a onclick="removeItem(${key})" class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                </li>
                `;
            }

            $('#cartHeader').html(item);
            $('#currentQuantity').text(totalCurrentQuantity);
        }
    }).done(function(data) {
        $('#loadGif').attr('style', 'display: none;');
        $('#shopCart').attr('style', 'display: inline-block;');
    });
}
fetchCart();


function removeItem(id) {
    let ok = confirm("Are you sure about that!!!!");
    if (ok) {
        $.ajax({
            type: "delete",
            url: window.location.origin + "/api/ajaxRemoveItemById",
            data: {
                id: id
            },
            success: function(response) {
                fetchCart();
                location.reload();
            }
        });
    }
}

function updateCart() {
    let dataToPost = $('#formCart').serialize();
    $.ajax({
        type: "post",
        url: window.location.origin + "/api/ajaxUpdateCart",
        data: dataToPost,
        success: function(response) {
            location.reload();
        },
        error: function(error) {
            alert("ERR");
            location.reload();
        }
    });
}

function removeCart(id) {
    removeItem(id);
}