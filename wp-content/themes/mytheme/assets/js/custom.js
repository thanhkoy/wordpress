$(document).ready(function () {
    $('.download').click(function (e) {
        e.preventDefault();
        let _this = this;
        $(_this).off();
        var timeleft = 5;
        var downloadTimer = setInterval(function(){
            if(timeleft <= 0){
                clearInterval(downloadTimer);
                $(_this).html("Download now");
            } else {
                $(_this).html(timeleft + " seconds remaining");
            }
            timeleft -= 1;
        }, 1000);
    })

    $(".cat_des_small .read-more a").click(function() {
        var $el, $ps, $up, totalHeight;
        totalHeight = 0
        $el = $(this);
        $p = $el.parent();
        $up = $p.parent();
        $ps = $up.find("p:not('.read-more')");
        // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
        $ps.each(function() {
            totalHeight += $(this).outerHeight();
        });
        $up.css({
            // Set height to prevent instant jumpdown when max height is removed
            "height": 'auto',
            "max-height": 9999
        }).animate({
            "height": 'auto'
        });
        // fade out read-more
        $p.fadeOut();
        // prevent jump-down
        return false;
    });
})