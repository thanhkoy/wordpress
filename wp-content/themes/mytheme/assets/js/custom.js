window.onload = function () {
    onLoadHandle.init();
};

let onLoadHandle = function() {
    let scrollTop = () => {
        $('.back-top').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 500, 'linear');
        });
    };

    let showHideScrollTop = () => {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('#menu').addClass('scroll-active');
                $(".back-top").addClass('d-block');
            } else {
                $('#menu').removeClass('scroll-active');
                $(".back-top").removeClass('d-block');
            }
        });
    };

    let loadMorePost = () => {
        $('.btn-load-more').on('click', function () {
            var _this = this;
            $(_this).html('Đang tải thêm tin tức ...');
            let id = $(_this).attr('data-id');
            let type = $(_this).attr('data-type');
            let limit = $(_this).attr('data-limit');
            let offset = $(_this).attr('data-offset');
            let next_offset = parseInt(offset) + parseInt(limit);
            $.ajax({
                data: {
                    id, type, limit, offset
                },
                url: '/load-more-post',
                type: 'POST'
            }).done(function (data) {
                if (data != '') {
                    $('.list-more-posts').append(data);
                    $(_this).html('Tải thêm bài viết');
                    $(_this).attr('data-offset', next_offset);
                } else {
                    $(_this).html('Không còn bài viết phù hợp');
                }
            });
            return false;
        });
    };

    let loadFbComment = () => {
        let js = document.createElement('script');
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=176431129621848&autoLogAppEvents=1';
        js.crossorigin = 'anonymous';
        js.nonce = 'bcYsEifk';
        document.body.appendChild(js);
    };

    function loadGA() {
        let js = document.createElement('script');
        js.src = 'https://www.googletagmanager.com/gtag/js?id=UA-171251055-2';
        document.body.appendChild(js);
        window.dataLayer = window.dataLayer || [];
        function gtag(){
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-171251055-2');
    }

    return {
        init: function() {
            scrollTop();
            showHideScrollTop();
            loadGA();
            setTimeout(function() {
                loadMorePost();
                loadFbComment();
            }, 5000);
        }
    }
}();