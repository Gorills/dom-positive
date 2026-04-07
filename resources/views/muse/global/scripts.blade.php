<?php
/**
 * Created by PhpStorm.
 * User: kodix
 * Date: 20.09.2018
 * Time: 11:50
 */
?>

<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

<!-- Object fit polyfill -->
<script>
    if ('objectFit' in document.documentElement.style === false) {
        document.addEventListener('DOMContentLoaded', function () {
            Array.prototype.forEach.call(document.querySelectorAll('img[data-object-fit]'), function (image) {
                (image.runtimeStyle || image.style).background = 'url("' + image.src + '") no-repeat 50%/' + (image.currentStyle ? image.currentStyle['object-fit'] : image.getAttribute('data-object-fit'));
                image.setAttribute("data-old-src", image.src);
                image.src = 'data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'' + image.width + '\' height=\'' + image.height + '\'%3E%3C/svg%3E';
            });
        });
    }
</script>

<!-- Mutation Observer -->
<script>
    let whatToObserve = {childList: true, subtree: true};
    let mutationObserver = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            <!-- Callkeeper fix -->
            if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
                if (mutation.target === document.querySelector('.container-callkeeper-global')) {
                    let img = $('.ck_image_show');
                    img.attr('src', 'http:' + img.attr('src'));
                }
                if (mutation.target === document.head && mutation.addedNodes[0].tagName === 'LINK' && mutation.addedNodes[0].href.indexOf('https') < 0) {
                    mutation.addedNodes[0].href = 'https:' + mutation.addedNodes[0].href.slice(5);
                }
            }
        });
    });
    mutationObserver.observe(document, whatToObserve);
</script>

<!-- Callkeeper -->
{{--<script type="text/javascript" src="https://callkeeper.ru/modules/widget/db/?callkeeper_code=174218fabd3b101b146e2b600fc43ffc" charset="UTF-8"></script>--}}
{{--<script type="text/javascript" src="https://callkeeper.ru/modules/widget/callkeeper.js" charset="UTF-8"></script>--}}

