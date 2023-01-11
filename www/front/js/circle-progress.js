(function($) {
    function isElementInViewport(el) {

        //special bonus for those using jQuery
        if (typeof jQuery === "function" && el instanceof jQuery) {
            el = el[0];
        }

        var rect = el.getBoundingClientRect();

        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
            rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
        );

    }
    var isAnimated = false;
    window.onscroll = function() {
        if (isElementInViewport($('#skills')) && !isAnimated) {
            /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> row 1 <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
            /*
             * Example 1:
             *
             * - default gradient
             * - listening to `circle-animation-progress` event and display the animation progress: from 0 to 100%
             */
            $('.first.circle').circleProgress({
                value: 0.95,
                animation: {
                    duration: 2200,
                    easing: 'circleProgressEasing'
                },
            }).on('circle-animation-progress', function(event, progress) {
                $(this).find('strong').html(Math.round(95 * progress) + '<i>%</i>');
            });

            /*
             * Example 2:
             *
             * - default gradient
             * - listening to `circle-animation-progress` event and display the animation progress: from 0 to 100%
             */
            $('.second.circle').circleProgress({
                value: 0.8,
            }).on('circle-animation-progress', function(event, progress) {
                $(this).find('strong').html(Math.round(80 * progress) + '<i>%</i>');
            });
            /*
             * Example 3:
             *
             * - no animation
             * - custom gradient
             *
             * By the way - you may specify more than 2 colors for the gradient
             */
            $('.third.circle').circleProgress({
                value: 0.85,
                animation: false,
                fill: {
                    gradient: ['#ff1e41', '#1784E9']
                }
            });

            /*
             * Example 4:
             *
             * - solid color fill
             * - custom start angle
             * - custom line cap
             * - dynamic value set
             */
            var c4 = $('.forth.circle');

            c4.circleProgress({
                startAngle: -Math.PI / 4 * 3,
                value: 0.9,
                lineCap: 'round',
                fill: {
                    color: '#ffa500'
                }
            });

            // Let's emulate dynamic value update
            setTimeout(function() {
                c4.circleProgress('value', 0.7);
            }, 1000);
            setTimeout(function() {
                c4.circleProgress('value', 1.0);
            }, 1100);
            setTimeout(function() {
                c4.circleProgress('value', 0.9);
            }, 2100);

            /*
             * Example 5:
             *
             * - image fill; image should be squared; it will be stretched to SxS size, where S - size of the widget
             * - fallback color fill (when image is not loaded)
             * - custom widget size (default is 100px)
             * - custom circle thickness (default is 1/14 of the size)
             * - reverse drawing mode
             * - custom animation start value
             * - usage of "data-" attributes
             */
            $('.fifth.circle').circleProgress({
                value: 0.85,
                // all other config options were taken from "data-" attributes
                // options passed in config object have higher priority than "data-" attributes
                // "data-" attributes are taken into account only on init (not on update/redraw)
                // "data-fill" (and other object options) should be in valid JSON format
                fill: {
                    gradient: [
                        ['#0681c4', .5],
                        ['#4ac5f8', .5]
                    ],
                    gradientAngle: Math.PI / 4
                }
            }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).find('strong').text(stepValue.toFixed(2).substr(1));
            });
            /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> row 2 <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
            /*
             * Example 6:
             *
             * - solid color fill
             * - custom start angle
             * - custom line cap
             * - dynamic value set
             */
            var c4 = $('.sixth.circle');

            c4.circleProgress({
                startAngle: -Math.PI / 4 * 3,
                value: 0.8,
                lineCap: 'round',
                fill: {
                    color: '#ffa500'
                }
            });

            // Let's emulate dynamic value update
            setTimeout(function() {
                c4.circleProgress('value', 0.7);
            }, 1000);
            setTimeout(function() {
                c4.circleProgress('value', 0.8);
            }, 1100);
            setTimeout(function() {
                c4.circleProgress('value', 0.5);
            }, 2100);

            /*
             * Example 7:
             *
             * - default gradient
             * - listening to `circle-animation-progress` event and display the animation progress: from 0 to 100%
             */
            $('.seventh.circle').circleProgress({
                value: 0.7
            }).on('circle-animation-progress', function(event, progress) {
                $(this).find('strong').html(Math.round(70 * progress) + '<i>%</i>');
            });

            /*
             * Example 8:
             *
             * - very custom gradient
             * - listening to `circle-animation-progress` event and display the dynamic change of the value: from 0 to 0.8
             */
            $('.eighth.circle').circleProgress({
                value: 0.95,
                fill: {
                    gradient: [
                        ['#0681c4', .5],
                        ['#4ac5f8', .5]
                    ],
                    gradientAngle: Math.PI / 4
                }
            }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).find('strong').text(stepValue.toFixed(2).substr(1));
            });


            /*
             * Example 10:
             *
             * - solid color fill
             * - custom start angle
             * - custom line cap
             * - dynamic value set
             */
            var c4 = $('.tenth.circle');

            c4.circleProgress({
                startAngle: -Math.PI / 4 * 3,
                value: 0.5,
                lineCap: 'round',
                fill: {
                    color: '#ffa500'
                }
            });

            // Let's emulate dynamic value update
            setTimeout(function() {
                c4.circleProgress('value', 0.7);
            }, 1000);
            setTimeout(function() {
                c4.circleProgress('value', 1.0);
            }, 1100);
            setTimeout(function() {
                c4.circleProgress('value', 0.5);
            }, 2100);
            /*
             * Example 11:
             *
             * - no animation
             * - custom gradient
             *
             * By the way - you may specify more than 2 colors for the gradient
             */
            $('.eleventh.circle').circleProgress({
                value: 0.5,
                animation: false,
                fill: {
                    gradient: ['#ff1e41', '#1784E9']
                }
            });

            /*
             * Example 12:
             *
             * - default gradient
             * - listening to `circle-animation-progress` event and display the animation progress: from 0 to 100%
             */
            $('.twelfth.circle').circleProgress({
                value: 0.6
            }).on('circle-animation-progress', function(event, progress) {
                $(this).find('strong').html(Math.round(95 * progress) + '<i>%</i>');
            });
            /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> row 3 <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
            /*
             * Example 13:
             *
             * - very custom gradient
             * - listening to `circle-animation-progress` event and display the dynamic change of the value: from 0 to 0.8
             */
            $('.thirteenth.circle').circleProgress({
                value: 0.90,
                fill: {
                    gradient: [
                        ['#0681c4', .5],
                        ['#4ac5f8', .5]
                    ],
                    gradientAngle: Math.PI / 4
                }
            }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).find('strong').text(stepValue.toFixed(2).substr(1));
            });

            /*
             * Example 14:
             *
             * - solid color fill
             * - custom start angle
             * - custom line cap
             * - dynamic value set
             */
            var c4 = $('.fourteenth.circle');

            c4.circleProgress({
                startAngle: -Math.PI / 4 * 3,
                value: 1.0,
                lineCap: 'round',
                fill: {
                    color: '#ffa500'
                }
            });

            // Let's emulate dynamic value update
            setTimeout(function() {
                c4.circleProgress('value', 0.7);
            }, 1000);
            setTimeout(function() {
                c4.circleProgress('value', 1.0);
            }, 1100);
            setTimeout(function() {
                c4.circleProgress('value', 0.5);
            }, 2100);

            /*
             * Example 15:
             *
             * - image fill; image should be squared; it will be stretched to SxS size, where S - size of the widget
             * - fallback color fill (when image is not loaded)
             * - custom widget size (default is 100px)
             * - custom circle thickness (default is 1/14 of the size)
             * - reverse drawing mode
             * - custom animation start value
             * - usage of "data-" attributes
             */
            $('.fifteenth.circle').circleProgress({
                value: 0.8,
                // all other config options were taken from "data-" attributes
                // options passed in config object have higher priority than "data-" attributes
                // "data-" attributes are taken into account only on init (not on update/redraw)
                // "data-fill" (and other object options) should be in valid JSON format
                fill: {
                    gradient: [
                        ['#0681c4', .5],
                        ['#4ac5f8', .5]
                    ],
                    gradientAngle: Math.PI / 4
                }
            }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).find('strong').text(stepValue.toFixed(2).substr(1));
            });
            isAnimated = true;
        }
    }
})(jQuery);