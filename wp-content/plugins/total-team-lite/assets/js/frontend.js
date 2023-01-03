/* 
 * The Team Frontend js 
 * global totalteam_frontend_colorbox_params 
 * 
 */

(function ($) {
    $(function () {
        $('.ttp-content-skill-list').find(".ttp-bar-skill-title").each(function () {
            $this = $(this);
            var progressBarColor = $(this).data('bar-rated-fill');
            progressBarColor = (progressBarColor !== '') ? progressBarColor : '#F39C12';

            $(this).simpleSkillbar({

            });
        });

        //$(window).load(function () {
        $('.ttp-carousal-grid-content').each(function () {
            var element_per_row = $(this).data('element-per-row');

            var speed = $(this).data('speed');

            var nextprev_control = $(this).attr('data-show-hide-nextprev');

            if (nextprev_control === 'true') {
                nextprev_control_val = true;
            } else {
                nextprev_control_val = false;
            }

            var auto = $(this).attr('data-auto');
            if (auto === 'true') {
                auto_val = true;
            } else {
                auto_val = false;
            }
            var autoplay_pause_duration = $(this).data('pause-duration');

            $(this).owlCarousel({
                addClassActive: true,
                smartSpeed: 450,
                loop: true,
                rewind: false,
                margin: 10,
                items: element_per_row,
                nav: true,
                dots: nextprev_control_val,

                autoplay: auto_val,
                autoplaySpeed: speed,
                autoplayTimeout: autoplay_pause_duration,
                autoplayHoverPause: false,
                navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                responsive: true,
                responsiveClass: true,
                responsive: {
                    500: {
                        items: 1,
                    },
                    '780': {
                        items: 2,
                    },
                    '935': {
                        items: element_per_row,
                    }
                }
            });
        });
        //});

        $('body').on("click", ".ttp-expand-popup-click-action, .ttp-expand-slide-out-click-action", function (e) {
            //e.preventDefault();
            var disp_type = $(this).attr('data-disp-type');
            var disp_pos = $(this).attr('data-disp-pos');
            var disp_id = $(this).attr('data-id');
            var oself = $(this);
            if (disp_type == 'popup') {
                $(this).parents('.ttp-wrapper').find('.ttp-popup-content-overlay').fadeIn();
                if (disp_pos == 'left') {
                    $(this).parents('.ttp-team-content-outer-wrap').find('#ttp-inner-content-' + disp_id).fadeIn().addClass('ttp-visible');
                    $(this).parents('.ttp-team-content-outer-wrap').find('#ttp-inner-content-' + disp_id + ' .mCustomScrollBox').show();
                } else if (disp_pos == 'right') {
                    $(this).parents('.ttp-team-content-outer-wrap').find('#ttp-inner-content-' + disp_id).fadeIn().addClass('ttp-visible');
                    $(this).parents('.ttp-team-content-outer-wrap').find('#ttp-inner-content-' + disp_id + ' .mCustomScrollBox').show();
                } else {
                    $(this).parents('.ttp-team-content-outer-wrap').find('#ttp-inner-content-' + disp_id).fadeIn().addClass('ttp-visible');
                    $(this).parents('.ttp-team-content-outer-wrap').find('#ttp-inner-content-' + disp_id + ' .mCustomScrollBox').show();
                }
            } else if (disp_type == 'slide-out') {
                e.preventDefault();
                var alldispin = $(".team-info-block");
                var dispin = oself.parents('.grid-row-wrapper').find('.team-info-block');
                oself.parents('.ttp-layout-contents').find('.ttp-primary-content').removeClass('active');
                dispin.parents('.ttp-layout-contents').find('.team-info-block').html('').hide();
                var teaminfo = oself.parents('.ttp-inner-whole-wrapper').find('.ttp-team-inner-hidden').html();
                //$.scrollTo('#team-infos-block', 800);

                //alldispin.slideUp(1500);
                //$(".team-all-members .team-member").removeClass('active');
                oself.parents('.ttp-layout-contents').find('.ttp-primary-content').toggleClass('active inactive');
//                oself.siblings('.ttp-primary-content').toggleClass('inactive');
//                oself.parents('.team-list-block').siblings('.team-list-block').find('.team-member').toggleClass('inactive');
//                oself.parents('.letter-group').siblings('.letter-group').find('.team-member').toggleClass('inactive');
                if (oself.parents('.ttp-layout-contents').find('.ttp-primary-content').hasClass('inactive')) {
                    dispin.html(teaminfo).slideDown(300); //.addClass('active');
                    dispin.find('.ttp-team-member-slide-content-left').mCustomScrollbar({
                        theme: 'dark-3',
                        mouseWheel: {
                            enable: true
                        },
                        axis: 'yx',
                        setHeight: '300px',
                        advanced: {

                            updateOnBrowserResize: false,

                            updateOnContentResize: false,

                            autoExpandHorizontalScroll: false,

                            autoScrollOnFocus: false

                        },
                    });
                    dispin.find('.ttp-team-member-slide-content-left').each(function () {
                        $(this).find('.gallery a[href$=".jpg"], .gallery a[href$=".jpeg"], .gallery a[href$=".png"], .gallery a[href$=".gif"]').colorbox(cbSettings);
                    });
                    var offset = dispin.parents('.grid-row-wrapper').find('.team-info-block').offset();
                    $('html, body').animate({
                        scrollTop: offset.top
                    }, 1000);
                } else {
                    //dispin.children('.ttp-team-member-slide-content-left').mCustomScrollbar("destroy");
                    dispin.html(teaminfo).slideUp(300);
                }
            } else {

            }
        });

        $('body').on("click", "span.ttp-additional-detail-close", function () {
            var disp_type = $(this).attr('data-disp-type');
            $(this).parents('.ttp-team-inner-hidden').hide();
            if (disp_type == 'popup') {
                $(this).parents('.ttp-wrapper').find('.ttp-popup-content-overlay').fadeOut();
                $(this).parents('.ttp-wrapper').find('.mCustomScrollBox').fadeOut();
            } else if (disp_type == 'slide-out') {
                $(this).parents('.ttp-wrapper').find('.team-info-block').slideUp();
            }
        });

        $('body').on("click", ".ttp-popup-content-overlay", function () {
            var disp_type = $(this).attr('data-disp-type');
            $(this).fadeOut();
            if (disp_type == 'popup' || (e.keyCode == 27)) {
                $(this).parents('.ttp-wrapper').find('.ttp-team-inner-hidden').hide();
                $(this).parents('.ttp-wrapper').find('.mCustomScrollBox').fadeOut();
            }
        });

        $(document).keyup(function (e) {
            if (e.keyCode == 27) {
                $('body').find('.ttp-team-inner-hidden').hide();
                //$('body').find('.mCustomScrollBox').fadeOut();
                $('body').find('.ttp-popup-content-overlay').fadeOut();
                $('body').find('.team-info-block').slideUp();
            }
        });

        var ttpWindowWidth = $(window).width();
        $(window).resize(function () {
            ttpWindowWidth = $(window).width();
            $('.ttp-grid-layout-content').each(function () {
                var per_row = $(this).data('per-row');
                var per_row_id = $(this).attr("id");
                var per_row_id_arr = per_row_id.split('-');
                if (ttpWindowWidth <= 480) {
                    $(this).attr("id", "ttp-column-1");
                } else if (ttpWindowWidth > 480 && ttpWindowWidth <= 768 && per_row >= per_row_id_arr[2]) {
                    $(this).attr("id", "ttp-column-2");
                } else if (ttpWindowWidth > 768 && ttpWindowWidth <= 934 && per_row >= per_row_id_arr[2]) {
                    $(this).attr("id", "ttp-column-3");
                } else {
                    $(this).attr("id", "ttp-column-" + per_row);
                }
            });
            $('.ttp-thumbnail-layout-content').each(function () {
                var per_row = $(this).data('per-row');
                var per_row_id = $(this).attr("id");
                var per_row_id_arr = per_row_id.split('-');
                if (ttpWindowWidth <= 480) {
                    $(this).attr("id", "ttp-column-1");
                } else if (ttpWindowWidth > 480 && ttpWindowWidth <= 580 && per_row >= per_row_id_arr[2]) {
                    $(this).attr("id", "ttp-column-2");
                } else if (ttpWindowWidth > 580 && ttpWindowWidth <= 768 && per_row >= per_row_id_arr[2]) {
                    $(this).attr("id", "ttp-column-4");
                } else if (ttpWindowWidth > 768 && ttpWindowWidth <= 934 && per_row >= per_row_id_arr[2]) {
                    $(this).attr("id", "ttp-column-6");
                } else {
                    $(this).attr("id", "ttp-column-" + per_row);
                }
            });
        }).resize();

//        $('.ttp-filter-layout-content').each(function () {
//            if (ttpWindowWidth <= 740) {
//                $('.ttp-inner-whole-wrapper').css('width', '230');
//                $('.ttp-inner-whole-wrapper').css('height', '230');
//            } else if (ttpWindowWidth > 740 && ttpWindowWidth <= 1024) {
//                $('.ttp-inner-whole-wrapper').css('width', '350');
//                $('.ttp-inner-whole-wrapper').css('height', '350');
//            } else {
//                $('.ttp-inner-whole-wrapper').css('width', '350');
//                $('.ttp-inner-whole-wrapper').css('height', '350');
//            }
//        });



//        $('.ttp-filter-layout-content').each(function () {
//            var selector = $(this);
//            // init Isotope
//            var $grid = $(this).isotope({
//
//            });
//            // filter items on button click
//           selector.parent().find('.ttp-filter-header').on('click', 'button', function () {
//                var filterValue = $(this).attr('data-filter');
//                $grid.isotope({
//                    filter: filterValue,
//                    masonry: {
//                        //columnWidth: 250,
//                        hiddenStyle: {
//                            opacity: 0
//                        },
//                        visibleStyle: {
//                            opacity: 1
//                        }
//                    }
//                });
//
//            });
//        });

        $('.ttp-filter-layout-content').each(function () {
            var main_selector = $(this);
            // init Isotope
            var iso = function () {
                var $container = main_selector,
                        qsRegex,
                        filters = {};

                $container.isotope({
                    itemSelector: '.element',
                    masonry: {
                        //columnWidth: 120
                    },
//                getSortData: {
//                name: function ($elem) {
//                console.log($elem);
//                return $elem.find('.ttp-content-header').text();
//                }
//                },
                    filter: function () {
                        return qsRegex ? $(this).text().match(qsRegex) : true;
                    }
                });

                function searchFilter() {
                    qsRegex = new RegExp($quicksearch.val(), 'gi');
                    $container.isotope();
                }

                // use value of search field to filter
                var $quicksearch = main_selector.parent().find('#ttp-filter-quicksearch').keyup(debounce(searchFilter));

                main_selector.parent().find('#ttp-filter-reset').on('click', function (e) {
                    e.preventDefault();
                    $quicksearch.val('');
                    searchFilter();
                });

                main_selector.parent().find('.ttp-filter-header').on('click', 'button', function () {
                    var $this = $(this);
                    // get group key
                    var $buttonGroup = $this.parents('.ttp-filter-header');
                    var filterGroup = $buttonGroup.attr('data-filter-group');
                    // set filter for group
                    filters[filterGroup] = $this.attr('data-filter');
                    // combine filters
                    var filterValue = '';
                    for (var prop in filters) {
                        filterValue += filters[prop];
                    }

                    // convert object into array
                    var isoFilters = [];
                    for (prop in filters) {
                        isoFilters.push(filters[prop]);
                    }
                    // set filter for Isotope
                    $container.isotope({
                        filter: filterValue
                    });
                    var selector = isoFilters.join('');
                    $container.isotope({
                        filter: selector
                    }, function noResultsCheck() {
                        var noItems = $('<div class="element no-results large"><p class="type">Oops!</p><p class="strain-info">We do not show a strain of this combination. Please try another combination.</p></div>');
//                        var yesItems = $('.no-results');
//                        var numItems = $('.element:not(.isotope-hidden)').length;
//                        if (numItems === 0) {
//                        $container.append(noItems).isotope('appended', noItems);
//                        } else {
//                        $container.isotope('remove', yesItems);
//                        }
                    });
                });

                // change is-checked class on buttons
                main_selector.parent().find('.ttp-filter-header').each(function (i, buttonGroup) {
                    var $buttonGroup = $(buttonGroup);
                    $buttonGroup.on('click', '.button', function () {
                        $buttonGroup.find('.active').removeClass('active');
                        $(this).addClass('active');
                    });
                });

                function debounce(fn, threshold) {
                    var timeout;
                    return function debounced() {
                        if (timeout) {
                            clearTimeout(timeout);
                        }

                        function delayed() {
                            fn();
                            timeout = null;
                        }
                        setTimeout(delayed, threshold || 100);
                    };
                }
            };
            $(function () {
                iso();
                $('.iso').click(function () {
                    setTimeout(iso, 500);
                });
            });
        });


        $('.ttp-flipster-grid-content').each(function () {
            var speed = $(this).attr('data-speed');

            var style = $(this).attr('data-style');

            var nextprev_control = $(this).attr('data-show-hide-nextprev');

            if (nextprev_control == 'true') {
                nextprev_control_val = true;
            } else {
                nextprev_control_val = false;
            }

            var paginate = $(this).attr('data-paginate');
            if (paginate && paginate != 'false') {
                var paginate_val = paginate;
            } else {
                var paginate_val = false;
            }
            var flat = $(this).flipster({
                buttons: true,
                loop: true,
                scrollwheel: false,
                style: style,
                click: true,
                autoplay: false,
                fadeIn: speed,
                nav: paginate_val,
                buttons: true,
                pauseOnHover: true,
                buttonPrev: 'Previous',
                buttonNext: 'Next',
            });
        });

        $(window).on("load", function () {
            // If left or right popup 
            $('body').find('.ttp-popup-content-right, .ttp-popup-content-left, .ttp-popup-content-center').each(function () {
                var scroll = $('.ttp-popup-content-right, .ttp-popup-content-left, .ttp-popup-content-center');
                scroll.mCustomScrollbar({
                    theme: 'dark-3',
                    mouseWheel: {
                        enable: true
                    },
                    axis: 'y',
                    scrollbarPosition: 'inside'
                });
            });

//            // If center popup
//            $('body').find('.ttp-popup-content-center .ttp-team-member-content').each(function () {
//                var scroll = $(this);
//                console.log(scroll);
//                scroll.mCustomScrollbar({
//                    theme: 'dark-1',
//                    mouseWheel: {
//                        enable: true
//                    },
//                    axis: 'y',
//                    scrollbarPosition: 'inside'
//                });
//            });

        });

        //CBS setting for gallery
        var cbSettings = {
            rel: 'cboxElement',
            width: '95%',
            height: 'auto',
            maxWidth: '550',
            maxHeight: '550',
            title: function () {
                return $(this).find('img').attr('alt');
            },
            current: totalteam_frontend_colorbox_params.current,
            previous: totalteam_frontend_colorbox_params.previous,
            next: totalteam_frontend_colorbox_params.next,
            close: totalteam_frontend_colorbox_params.close,
            xhrError: totalteam_frontend_colorbox_params.xhrError,
            imgError: totalteam_frontend_colorbox_params.imgError
        };

        $('.ttp-popup-content-right,.ttp-popup-content-left, .ttp-popup-content-center').each(function () {
            $(this).find('.gallery a[href$=".jpg"], .gallery a[href$=".jpeg"], .gallery a[href$=".png"], .gallery a[href$=".gif"]').colorbox(cbSettings);
        });

        if ($('.gallery').parents('body').hasClass('totalteam-template-default')) {
            $('.gallery').each(function () {
                $(this).find('a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]').colorbox(cbSettings);
            });
        }

    }); /** Function ends */

}(jQuery));