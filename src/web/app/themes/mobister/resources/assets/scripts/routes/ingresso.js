export default {
    init() {
        // JavaScript to be fired on the home page
        if (window.location.hash) {
            // console.log('tem hash', window.location.hash);
            var $target = $('body').find(window.location.hash),
                $root = $('html, body');

            $root.animate({
                scrollTop: ( $($target).offset().top - 450),
            }, 500);

            $target.click();
        }
    },
    finalize() {
        // JavaScript to be fired on the home page, after the init JS
    },
};
