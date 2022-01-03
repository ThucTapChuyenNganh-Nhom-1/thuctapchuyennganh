export default class LoadMoreAjax {
    constructor() { }
    init() {
        this.loadMore();
    }
    loadMore() {
        $('.btn-loadmore').on('click', function (e) {
            var currentPage = $('.btn-loadmore').attr('data-page');
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'load_more_member',
                    page: currentPage
                },
                success: function (response) {
                    if (response.success) {
                        if (response.data.result) {
                            $('.list-posts').html(
                                $('.list-posts').html() + response.data.result
                            );
                            $('.btn-loadmore').attr('data-page', parseInt(currentPage) + 1);
                        } else {
                            $('.btn-loadmore').css('display', 'none');
                        }
                    } else {
                        alert('Error');
                    }
                }
            });
        });
    }
}

new LoadMoreAjax().init();