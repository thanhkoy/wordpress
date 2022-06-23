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
})