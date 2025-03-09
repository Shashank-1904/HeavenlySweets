
window.onload = function() {
    // Get the toast element
    var toast = document.getElementById('toast');
    var closeBtn = document.getElementById('closeToast');
    
    // Check if there's a toast to show
    if (toast) {
        toast.classList.add('show');

        // Hide toast after 3 seconds if not closed manually
        setTimeout(function() {
            if (toast.classList.contains('show')) {
                toast.classList.remove('show');
            }
        }, 8000);
    }

    // Close the toast manually when the close button is clicked
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            toast.classList.remove('show');
        });
    }
   

    // JS for product like button

    
    $(document).ready(function() {
        $(".like-btn").click(function(e) {
            e.preventDefault();
    
            let button = $(this);
            let productId = button.data("product-id");
            let icon = button.find("i");
            let isLiked = icon.hasClass("fa-solid");
    
            if (isLiked) {
                icon.removeClass("fa-solid fa-heart").addClass("fa-regular fa-heart");
            } else {
                icon.removeClass("fa-regular fa-heart").addClass("fa-solid fa-heart");
            }
    
            $.ajax({
                url: "../handler/add_liked_product.php",
                type: "POST",
                data: { product_id: productId, action: isLiked ? "unlike" : "like" },
                dataType: "json",
                success: function(response) {
                    console.log("Server Response:", response);
    
                    if (!response.success) {
                        // Revert UI if request failed
                        if (isLiked) {
                            icon.removeClass("fa-regular fa-heart").addClass("fa-solid fa-heart");
                        } else {
                            icon.removeClass("fa-solid fa-heart").addClass("fa-regular fa-heart");
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    console.error("Server Response:", xhr.responseText);
    
                    if (isLiked) {
                        icon.removeClass("fa-regular fa-heart").addClass("fa-solid fa-heart");
                    } else {
                        icon.removeClass("fa-solid fa-heart").addClass("fa-regular fa-heart");
                    }
                }
            });
        });
    });
    
    
    
};

