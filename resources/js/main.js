$(function () {
    $(".alert").delay(3000).fadeOut();

    $(".price-btn").on("click", function () {
        let id = $(this).attr("data-id");
        $.ajax({
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "/get-price",
            data: { id: id },
            success: function (data) {
                $("div[data-id=" + id + "]").replaceWith(
                    "<p>" + data["price"] + "€</p>"
                );
            },
            error: function () {},
        });
    });
});
