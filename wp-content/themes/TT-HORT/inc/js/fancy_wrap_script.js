if($(".gallery").length) {
    $(".gallery img").wrap(function () {
        return "<a data-fancybox=\"gallery\" href='" + $(this).attr('src') + "'></a>";
    })
}
else {
    $("article img").wrap(function () {
        return "<a data-fancybox=\"gallery\" href='" + $(this).attr('src') + "'></a>";
    })
}