$(".tab_item").not(":first").hide();
$("#users-page .tab").click(function() {
    $("#users-page .tab").removeClass("active").eq($(this).index()).addClass("active");
    $(".tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");