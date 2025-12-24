    function updateQty(itemId, change) {
        // alert(itemId); return false;
        $.ajax({
            url: window.APP_URL + "/update-cart-qty",
            type: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                item_id: itemId,
                change: change
            },
            success: function(res) {
                if(res.success) {
                    // location.reload();
                    $('#cart-count').text(res.cart_count);
                    $('#qty-' + itemId).text(res.newQty);
                    $('#subtotal-' + itemId).text('$' + res.newSubtotal);
                    $('#total').text('$' + res.newTotal); 
                }else if(res.nostock){
                    alert('Stock limit reached');
                } else {
                    alert('Failed to update quantity');
                }
            },
            error: function() {
                alert('Something went wrong!');
            }
        });
    }
    $(document).on('click', '.toggle-password', function () {

        let input = $(this).siblings('input');
        
        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            $(this).removeClass('fa-eye-slash').addClass('fa-eye');
        } else {
            input.attr('type', 'password');
            $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        }

    });
    $(".addToCart").click(function(){
        let btn = $(this);
        let productBox = btn.closest('.product-actions');
        let wrapper = productBox.find('.qty-wrapper');

        let pro_id = $(this).data('pro_id');
        // let qty = $(this).data('qty');
        let qty = parseInt(productBox.find('.qty-value').text());

        $.ajax({
            url: window.APP_URL + "/add_to_cart",
            type: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            
            data: {
                pro_id: pro_id,
                qty: qty,
                
            },
            success: function(response) {
                if (response.success) {
                    wrapper.find('.qty-value').text(1);
                    btn.attr('data-qty', 1);

                    $('#cart-count').text(response.cart_count);
                    $("#cart-icon").attr('href',response.checkoutUrl);
                    toastr.success("Product added into cart");
                }else{
                    toastr.error("Soory, Something went wrong!");
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });
    $(document).on('click', '.increment', function () {
        let wrapper = $(this).closest('.qty-wrapper');
        let qtyEl = wrapper.find('.qty-value');
        let qty = parseInt(qtyEl.text());
        let stock = parseInt(wrapper.data('stock'));

        if (qty <= stock) {
            qty++;
            qtyEl.text(qty);

            wrapper.next('.addToCart').attr('data-qty', qty);
        } else {
            alert('Stock limit reached');
        }
    });

    $(document).on('click', '.decrement', function () {
        let wrapper = $(this).closest('.qty-wrapper');
        let qtyEl = wrapper.find('.qty-value');
        let qty = parseInt(qtyEl.text());

        if (qty > 1) {
            qty--;
            qtyEl.text(qty);

            wrapper.next('.addToCart').attr('data-qty', qty);
        }
    });
/************************************************************************* */
$(document).ready(function () {
    $('.tab-header a').on('click', function () {
        $('.tab-header a.event_active').removeClass('event_active');
        $(this).addClass('event_active');
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 10) {
            $('.header').addClass('fixed-header');
        } else {
            $('.header').removeClass('fixed-header');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 10) {
            $('.tab-header').addClass('fixed-tab-header');
        } else {
            $('.tab-header').removeClass('fixed-tab-header');
        }

    });
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right", // top-left, bottom-right etc.
        "timeOut": "3000"
    };

});


