jQuery(document).ready(function($) {

    /*
     * Fetch list of taxonomy from post type
     */
    $('.et-post-type').on('change', function() {
        var select_post = $(this).val();
        $.ajax({
            url: et_backend_js_params.ajax_url,
            data: {
                select_post: select_post,
                _wpnonce: et_backend_js_params.ajax_nonce,
                action: 'et_selected_post_taxonomy',
                beforeSend: function() {
                    // $(".et-loader-preview").show();
                }
            },
            type: "POST",
            success: function(response) {
                $(".et-select-taxonomy").html(response);
                $(".et-filter-taxonomy").html(response);
//                    $(".et-loader-preview").hide();
            }
        });
    });
    /*
     * Fetch list of terms from taxonomy
     */
    $('.et-select-taxonomy').on('change', function() {
        var select_tax = $(this).val();
        var tax_type = $('.et-taxonomy-queries-type').val();
        $.ajax({
            url: et_backend_js_params.ajax_url,
            data: {
                select_tax: select_tax,
                tax_type: tax_type,
                _wpnonce: et_backend_js_params.ajax_nonce,
                action: 'et_selected_taxonomy_terms',
                beforeSend: function() {
                    // $(".et-loader-preview").show();
                }
            },
            type: "POST",
            success: function(response) {
                if (tax_type == 'multiple-taxonomy') {
                    $(".et-multiple-taxonomy-term").html(response);
                } else if (tax_type == 'simple-taxonomy') {
                    $(".et-simple-taxonomy-term").html(response);
//                    $(".et-loader-preview").hide();
                }
            }
        });
    });
    /*
     * Fetch list of terms for multiple taxonomy condition
     */
    $('body').on('change', '.et-multiple-taxonomy', function() {
        var select_tax = $(this).val();
        var nam = $(this);
        //alert(select_tax);
        $.ajax({
            url: et_backend_js_params.ajax_url,
            data: {
                select_tax: select_tax,
                _wpnonce: et_backend_js_params.ajax_nonce,
                action: 'et_hierarchy_terms',
                beforeSend: function() {
                    // $(".et-loader-preview").show();
                }
            },
            type: "POST",
            success: function(response) {

                $(nam).closest('.et-each-taxonomy-wrap').find(".et-hierarchy-taxonomy-term").html(response);
            }
        });
    });
    /*
     * Insert meta condition for
     *  multiple custom field query
     */
    $('.et-add-meta-query').click(function() {
        $.ajax({
            url: et_backend_js_params.ajax_url,
            data: {
                _wpnonce: et_backend_js_params.ajax_nonce,
                action: 'et_add_meta_condition',
                beforeSend: function() {
                    // $(".et-loader-preview").show();
                }
            },
            type: "POST",
            success: function(response) {
                // alert(response);
                $(".et-custom-field-inner-wrap").append(response);
//                    $(".et-loader-preview").hide();
            }
        });
    });
    /*
     * Insert multiple taxonomy condition
     */
    $('.et-add-tax-condition').click(function() {
        var post_type = $('.et-post-type').val();
        $.ajax({
            url: et_backend_js_params.ajax_url,
            data: {
                _wpnonce: et_backend_js_params.ajax_nonce,
                action: 'et_add_tax_condition',
                post_type: post_type

            },
            type: "POST",
            success: function(response) {
                $(".et-tax-inner-wrap").append(response);
            }
        });
    });
//radio button show and hide for post type's post
    $('.et-select-post-type').click(function() {
        var value = $(this).val();
        if (value == 'single_post_type') {
            $('.et-single-post-type-wrap').show();
            $('.et-multiple-post-type-wrap').hide();
        } else {
            $('.et-single-post-type-wrap').hide();
            $('.et-multiple-post-type-wrap').show();
        }
    });
    //radio button show and hide for button link
    $('body').on('click', '.et-select-post-link', function() {
        var value = $(this).val();
        if (value === 'post_link')
        {
            $(this).closest('.et-blog-wrap').find('.et-custom-link').hide();
        } else
        {
            $(this).closest('.et-blog-wrap').find('.et-custom-link').show();
        }
    });
    //show and hide for video type
    $('body').on('change', '.et-video-type', function() {
        var value = $(this).val();
        if (value === 'youtube' || value === 'vimeo')
        {
            $(this).closest('.et-blog-wrap').find('.et-video-url-wrap').show();
            $(this).closest('.et-blog-wrap').find('.et-upload-video-wrap').hide();
            $(this).closest('.et-post-video-wrap').find('.et-upload-poster-wrap').hide();
        } else
        {
            $(this).closest('.et-blog-wrap').find('.et-video-url-wrap').hide();
            $(this).closest('.et-blog-wrap').find('.et-upload-video-wrap').show();
            $(this).closest('.et-post-video-wrap').find('.et-upload-poster-wrap').show();
        }
    });
    var selected_video = $(".et-video-type option:selected").val();
    if (selected_video === "html_video")
    {
        $(this).closest('.et-blog-wrap').find('.et-video-url-wrap').hide();
        $(this).closest('.et-blog-wrap').find('.et-upload-video-wrap').show();
        $(this).closest('.et-post-video-wrap').find('.et-upload-poster-wrap').show();
    } else {
        $(this).closest('.et-blog-wrap').find('.et-video-url-wrap').show();
        $(this).closest('.et-blog-wrap').find('.et-upload-video-wrap').hide();
        $(this).closest('.et-post-video-wrap').find('.et-upload-poster-wrap').hide();
    }

//show and hide for media type
    $('.et-media-type').change(function() {
        var value = $(this).val();
        if (value === 'image')
        {
            $('.et-post-image-wrap').show();
            $('.et-post-image-wrap').show();
            $('.et-post-slider-wrap').hide();
            $('.et-post-video-wrap').hide();
            $('.et-sound-cloud-wrap').hide();
        } else if (value === 'slider') {
            $('.et-post-slider-wrap').show();
            $('.et-post-video-wrap').hide();
            $('.et-sound-cloud-wrap').hide();
            $('.et-post-image-wrap').hide();
            $('.et-post-image-wrap').hide();
        } else if (value === 'video')
        {
            $('.et-post-slider-wrap').hide();
            $('.et-post-video-wrap').show();
            $('.et-sound-cloud-wrap').hide();
            $('.et-post-image-wrap').hide();
            $('.et-post-image-wrap').hide();
        } else {
            $('.et-post-slider-wrap').hide();
            $('.et-post-video-wrap').hide();
            $('.et-sound-cloud-wrap').show();
            $('.et-post-image-wrap').hide();
            $('.et-post-image-wrap').hide();
        }

    });
    var media_type = $(".et-media-type option:selected").val();
    if (media_type === 'image')
    {
        $('.et-post-slider-wrap').hide();
        $('.et-post-video-wrap').hide();
        $('.et-sound-cloud-wrap').hide();
        $('.et-post-image-wrap').show();
    } else if (media_type === 'slider') {
        $('.et-post-slider-wrap').show();
        $('.et-post-video-wrap').hide();
        $('.et-sound-cloud-wrap').hide();
        $('.et-post-image-wrap').hide();
    } else if (media_type === 'video')
    {
        $('.et-post-slider-wrap').hide();
        $('.et-post-video-wrap').show();
        $('.et-sound-cloud-wrap').hide();
        $('.et-post-image-wrap').hide();
    } else {
        $('.et-post-slider-wrap').hide();
        $('.et-post-video-wrap').hide();
        $('.et-sound-cloud-wrap').show();
        $('.et-post-image-wrap').hide();
    }

    /*
     * Upload Video
     */
    $('body').on('click', '.et-upload-video-button', function(e) {
        e.preventDefault();
        var btnClicked = $(this);
        var video = wp.media({
            title: 'Insert Video',
            button: {text: 'Insert Video'},
            library: {type: 'video'},
            multiple: false
        }).open()
                .on('select', function(e) {
                    var uploaded_video = video.state().get('selection').first();
                    console.log(uploaded_video);
                    var video_url = uploaded_video.toJSON().url;
                    $(btnClicked).closest('.et-post-video-wrap').find('.et-upload-video-button').attr('src', video_url);
                    $(btnClicked).closest('.et-post-video-wrap').find('.et-upload-url').val(video_url);
                });
    });
    /*
     * Uplaod slider image
     */
    $('body').on('click', '.et-upload-slider-button', function(e) {
        e.preventDefault();
        var btnClicked = $(this);
        var image = wp.media({
            title: 'Insert Slider Images',
            button: {text: 'Insert Slider Images'},
            library: {type: 'image'},
            multiple: "toggle"
        }).open()
                .on('select', function() {
                    var uploaded_image = image.state().get('selection');
                    uploaded_image.map(function(attachment) {
                        attachment = attachment.toJSON();
                        var image_url = attachment.url;
                        //var post_key = $(btnClicked).closest('.et-each-post-wrap').data('post-key');
                        var data = {
                            'action': 'et_slider_images',
                            '_wpnonce': et_backend_js_params.ajax_nonce,
                            'image_url': image_url

                        };
                        $.ajax({
                            url: et_backend_js_params.ajax_url,
                            data: data,
                            type: "POST",
                            success: function(response) {
                                $('.et-slider-image-collection').append(response);
                                $('.et-slider-image-collection').sortable({
                                    handle: ".et-sort-slider-image",
                                    containment: "parent"
                                });
                            }
                        });
                    });
                });
    });
    $('.et-slider-image-collection').sortable({
        handle: ".et-sort-slider-image",
        containment: "parent"
    });
    /*
     * Show && hide custom field query
     */
    $('.et-custom-field-type').change(function() {

        if ($(this).val() === "single_field") {
            $(".et-single-custom-wrapper").show();
            $(".et-multiple-custom-field-wrap").hide();
        } else {
            $(".et-multiple-custom-field-wrap").show();
            $(".et-single-custom-wrapper").hide();
        }
    }
    );
    var selected_field = $(".et-custom-field-type option:selected").val();
    if (selected_field === "single_field") {
        $(".et-multiple-custom-field-wrap").hide();
        $(".et-single-custom-wrapper").show();
    } else {
        $(".et-multiple-custom-field-wrap").show();
        $(".et-single-custom-wrapper").hide();
    }

    /*
     * Show && hide meta value type
     */
    $('.et-meta-value-type').change(function() {
        if ($(this).val() === "string")
        {
            $('.et-meta-value-wrap').show();
            $(".et-meta-number-wrap").hide();
        } else {
            $(".et-meta-number-wrap").show();
            $('.et-meta-value-wrap').hide();
        }
    }
    );
    var selected_meta = $(".et-meta-value-type option:selected").val();
    if (selected_meta === "string")
    {
        $('.et-meta-value-wrap').show();
        $(".et-meta-number-wrap").hide();
    } else {
        $(".et-meta-number-wrap").show();
        $('.et-meta-value-wrap').hide();
    }
    /*
     * Menu Tab
     */
    $('.et-tab-tigger').click(function() {
        $('.et-tab-tigger').removeClass('et-active');
        $(this).addClass('et-active');
        var active_tab_key = $('.et-tab-tigger.et-active').data('menu');
        $('.et-settings-wrap').removeClass('et-active-container');
        $('.et-settings-wrap[data-menu-ref="' + active_tab_key + '"]').addClass('et-active-container');
    });
    /*
     * Fb Menu Tab
     */
    $('.et-fb-tab-tigger').click(function() {
//alert('hi');
        $('.et-fb-tab-tigger').removeClass('et-fb-active');
        $(this).addClass('et-fb-active');
        var active_tab_key = $('.et-fb-tab-tigger.et-fb-active').data('menu');
        $('.et-fb-settings-wrap').removeClass('et-fb-active-container');
        $('.et-fb-settings-wrap[data-menu-ref="' + active_tab_key + '"]').addClass('et-fb-active-container');
    });
    /*
     * Twitter Menu Tab
     */
    $('.et-twitter-tab-tigger').click(function() {
        $('.et-twitter-tab-tigger').removeClass('et-twitter-active');
        $(this).addClass('et-twitter-active');
        var active_tab_key = $('.et-twitter-tab-tigger.et-twitter-active').data('menu');
        $('.et-twitter-settings-wrap').removeClass('et-twitter-active-container');
        $('.et-twitter-settings-wrap[data-menu-ref="' + active_tab_key + '"]').addClass('et-twitter-active-container');
    });
    /*
     * Other Settings Menu Tab
     */
    $('.et-other-tab-tigger').click(function() {
        $('.et-other-tab-tigger').removeClass('et-other-active');
        $(this).addClass('et-other-active');
        var active_tab_key = $('.et-other-tab-tigger.et-other-active').data('menu');
        $('.et-other-settings-wrap').removeClass('et-other-active-container');
        $('.et-other-settings-wrap[data-menu-ref="' + active_tab_key + '"]').addClass('et-other-active-container');
    });
    /*
     * Post Menu Tab
     */
    $('.et-query-tigger').click(function() {
        $('.et-query-tigger').removeClass('et-query-active');
        $(this).addClass('et-query-active');
        var active_post_key = $('.et-query-tigger.et-query-active').data('menu');
        $('.et-query-setting-wrap').removeClass('et-active-field');
        $('.et-query-setting-wrap[data-menu-ref="' + active_post_key + '"]').addClass('et-active-field');
    });
    /*
     * Usage Tab
     */
    $('.et-usage-trigger').click(function() {
        $('.et-usage-trigger').removeClass('et-usage-active');
        $(this).addClass('et-usage-active');
        var active_tab_key = $('.et-usage-trigger.et-usage-active').data('usage');
        $('.et-usage-post').hide();
        $('.et-usage-post[data-usage-ref="' + active_tab_key + '"]').show();
    });
    /*
     * Checked button for metadata
     */

    $('.et-show-category').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-title-link').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-tag').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-author').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-comment').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-date').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-date-wrapper').show();
        } else
        {
            $(this).val('0');
            $('.et-date-wrapper').hide();
        }
    });
    $('.et-show-read-more').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-read-more-wrap').show();
        } else
        {
            $(this).val('0');
            $('.et-read-more-wrap').hide();
        }
    });
    $('.et-show-custom-relation').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-relation-main-wrap').show();
        } else
        {
            $(this).val('0');
            $('.et-relation-main-wrap').hide();
        }
    });
    $('.et-show-taxonomy-relation').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-taxonomy-main-wrap').show();
        } else
        {
            $(this).val('0');
            $('.et-taxonomy-main-wrap').hide();
        }
    });
    $('.et-display-filter').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-filter-enable-wrap').show();
        } else
        {
            $(this).val('0');
            $('.et-filter-enable-wrap').hide();
        }
    });
    $('.et-display-pagination').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-pagination-wrapper').show();
        } else
        {
            $(this).val('0');
            $('.et-pagination-wrapper').hide();
        }
    });
    $('.et-fetch-custom-field-post').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-custom-field-wrapper').show();
        } else
        {
            $(this).val('0');
            $('.et-custom-field-wrapper').hide();
        }
    });
    $('.et-show-popular-relation').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-popular-inner-wrap').show();
        } else
        {
            $(this).val('0');
            $('.et-popular-inner-wrap').hide();
        }
    });
    $('.et-show-keyword-relation').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-keyword-inner-wrap').show();
        } else
        {
            $(this).val('0');
            $('.et-keyword-inner-wrap').hide();
        }
    });
    $('body').on('click', '.et-show-type-filter', function() {
        if ($(this).is(':checked'))
        {
            $(this).closest('.et-post-field-wrap').find('.et-show-type-filter').val('1');
            $(this).closest('.et-post-field-wrap').find('.et-type-filter-wrap').show();
        } else

        {
            $(this).closest('.et-post-field-wrap').find('.et-show-type-filter').val('0');
            $(this).closest('.et-post-field-wrap').find('.et-type-filter-wrap').hide();
        }

    });
    $('body').on('click', '.et-show-operator', function() {
        if ($(this).is(':checked'))
        {
            $(this).closest('.et-post-field-wrap').find('.et-show-operator').val('1');
            $(this).closest('.et-post-field-wrap').find('.et-operator-inner-wrap').show();
        } else

        {
            $(this).closest('.et-post-field-wrap').find('.et-show-operator').val('0');
            $(this).closest('.et-post-field-wrap').find('.et-operator-inner-wrap').hide();
        }

    });
    /*
     *  Social media share checked value
     */

    $('.et-show-facebook-share').click(function() {
        if ($(this).is(':checked'))
        {
            $('.et-show-facebook-value').val('1');
        } else
        {
            $('.et-show-facebook-value').val('0');
        }
    });
    $('.et-show-twitter-share').click(function() {
        if ($(this).is(':checked'))
        {
            $('.et-show-twitter-value').val('1');
        } else
        {
            $('.et-show-twitter-value').val('0');
        }
    });
    $('.et-show-google-share').click(function() {
        if ($(this).is(':checked'))
        {
            $('.et-show-google-value').val('1');
        } else
        {
            $('.et-show-google-value').val('0');
        }
    });
    $('.et-show-linkedin-share').click(function() {
        if ($(this).is(':checked'))
        {
            $('.et-show-linkedin-value').val('1');
        } else
        {
            $('.et-show-linkedin-value').val('0');
        }
    });
    $('.et-show-mail-share').click(function() {
        if ($(this).is(':checked'))
        {
            $('.et-show-mail-value').val('1');
        } else
        {
            $('.et-show-mail-value').val('0');
        }
    });
    /*
     * Show && hide taxonomy query  value type
     */
    $('.et-taxonomy-queries-type').change(function() {
        if ($(this).val() === "simple-taxonomy") {
            $('.et-select-taxonomy').val('select');
            $('.et-terms-wrap').show();
            $('.et-multiple-terms-wrap').hide();
            $('.et-simple-terms-wrap').show();
        } else {
            $('.et-select-taxonomy').val('select');
            $('.et-terms-wrap').show();
            $('.et-multiple-terms-wrap').show();
            $('.et-simple-terms-wrap').hide();
        }

    });
    var query_type = $(".et-taxonomy-queries-type option:selected").val();
    if (query_type === "simple-taxonomy") {
        $('.et-terms-wrap').show();
        $('.et-multiple-terms-wrap').hide();
        $('.et-simple-terms-wrap').show();
    } else {
        $('.et-terms-wrap').show();
        $('.et-multiple-terms-wrap').show();
        $('.et-simple-terms-wrap').hide();
    }

    /**
     * blog query remove
     *
     */

    $('body').on('click', '.et-delete-query', function() {
        var delete_term = confirm('Are you sure you want to delete this taxonomy condition?');
        if (delete_term) {
            $(this).closest('.et-each-taxonomy-wrap').fadeOut(500, function() {
                $(this).remove();
            });
        }
    });
    $('body').on('click', '.et-delete-meta-query', function() {
        var delete_term = confirm('Are you sure you want to delete this meta condition?');
        if (delete_term) {
            $(this).closest('.et-each-meta-container-wrap').fadeOut(500, function() {
                $(this).remove();
            });
        }
    });
    $('body').on('click', '.et-multiple-meta-keys', function() {
        var value = $(this).val();
        if (value === 'pre-available') {
            $(this).closest('.et-post-field-wrap').find('.et-pre-multiple-key-wrap').show();
            $(this).closest('.et-post-field-wrap').find('.et-multiple-other-key-wrap').hide();
        } else {
            $(this).closest('.et-post-field-wrap').find('.et-pre-multiple-key-wrap').hide();
            $(this).closest('.et-post-field-wrap').find('.et-multiple-other-key-wrap').show();
        }
    });
    //radio button show and hide for meta keys
    $('.et-meta-key-type').click(function() {
        var value = $(this).val();
        if (value === 'pre-available') {
            $('.et-pre-meta-key-wrap').show();
            $('.et-other-meta-wrap').hide();
        } else {
            $('.et-pre-meta-key-wrap').hide();
            $('.et-other-meta-wrap').show();
        }
    });
    //radio button show and hide for meta keys
    $('.et-post-content').click(function() {
        var value = $(this).val();
        if (value === 'full-text') {
            $('.et-excerpt-wrap').hide();
        } else {
            $('.et-excerpt-wrap').show();
        }
    });
    //radio button show and hide for filter terms
    $('.et-filter-terms-type').click(function() {
        var value = $(this).val();
        if (value === 'all') {
            $('.et-specific-wrap').hide();
        } else {
            $('.et-specific-wrap').show();
        }
    });
    //ajax call in post type thickbox
    $('.et-filter-taxonomy').on('change', function() {
        var select_type = $(this).val();
        var term_type = $('.et-filter-terms-type:checked').val();
        $.ajax({
            url: et_backend_js_params.ajax_url,
            data: {
                select_type: select_type,
                //  term_type: term_type,
                _wpnonce: et_backend_js_params.ajax_nonce,
                action: 'et_filter_tax_terms'
//                    beforeSend: function() {
//                        $(".wp1s-post-loader-preview").show();
//                    },
            },
            type: "POST",
            success: function(response) {
                //alert(response);
                if (term_type == 'specific') {
                    $(".et-specific-wrap").html(response);
                } else {

                }

            }
        });
    });
//radio button show and hide for post type's post
    $('.et-post-link').click(function() {
        var value = $(this).val();
        if (value == 'post_link') {
            $('.et-custom-link-wrap').hide();
        } else {
            $('.et-custom-link-wrap').show();
        }
    });
    /*
     * Show and hide timeline template
     */
    $('.et-timeline-layout').change(function() {
        if ($(this).val() === "vertical") {
            $('.et-vertical-wrap').show();
            $('.et-horizontal-wrap').hide();
            $('.et-one-side-wrap').hide();
        } else if ($(this).val() === "horizontal") {
            $('.et-vertical-wrap').hide();
            $('.et-horizontal-wrap').show();
            $('.et-one-side-wrap').hide();
        } else {
            $('.et-vertical-wrap').hide();
            $('.et-horizontal-wrap').hide();
            $('.et-one-side-wrap').show();
        }
    });
    var timeline_type = $(".et-timeline-layout option:selected").val();
    if (timeline_type === "vertical") {
        $('.et-vertical-wrap').show();
        $('.et-horizontal-wrap').hide();
        $('.et-one-side-wrap').hide();
    } else if (timeline_type === "horizontal") {
        $('.et-vertical-wrap').hide();
        $('.et-horizontal-wrap').show();
        $('.et-one-side-wrap').hide();
    } else {
        $('.et-vertical-wrap').hide();
        $('.et-horizontal-wrap').hide();
        $('.et-one-side-wrap').show();
    }

    $('.et-show-social-share').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-social-container').show();
        } else
        {
            $(this).val('0');
            $('.et-social-container').hide();
        }
    });
    $('.et-show-facebook-share').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-twitter-share').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-google-share').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-linkedin-share').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-mail-share').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-pinterest-share').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-select-pagination').change(function() {
        if ($(this).val() === "standard_pagination") {
            $('.et-standard-page-block').show();
            $('.et-load-setting-block').hide();
            $('.et-loader-block').hide();
        } else if ($(this).val() === "load_more_button") {
            $('.et-standard-page-block').hide();
            $('.et-load-setting-block').show();
            $('.et-loader-block').show();
        } else {
            $('.et-standard-page-block').hide();
            $('.et-load-setting-block').hide();
            $('.et-loader-block').show();
        }
    });
    var pagination_type = $(".et-select-pagination option:selected").val();
    if (pagination_type === "standard_pagination") {
        $('.et-standard-page-block').show();
        $('.et-load-setting-block').hide();
        $('.et-loader-block').hide();
    } else if (pagination_type === "load_more_button") {
        $('.et-standard-page-block').hide();
        $('.et-load-setting-block').show();
        $('.et-loader-block').show();
    } else {
        $('.et-standard-page-block').hide();
        $('.et-load-setting-block').hide();
        $('.et-loader-block').show();
    }

    /**
     * logo Item Remove
     *
     */

    $('body').on('click', '.et-delete-slider-image', function() {
        var delete_image = confirm('Are you sure you want to delete this image?');
        if (delete_image) {
            $(this).closest('.et-slider-wrap').fadeOut(500, function() {
                $(this).remove();
            });
        }
    });
    //vertical timeline preview
    $(".et-vertical-timeline-common").first().addClass("vertical-active");
    $('.et-vertical-template').on('change', function() {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.et-vertical-timeline-common').hide();
        $('#et-vertical-timeline-demo-' + current_id).show();
    });
    if ($(".et-vertical-template option:selected").length > 0) {
        var grid_view = $(".et-vertical-template option:selected").val();
        var array_break = grid_view.split('-');
        var current_id1 = array_break[1];
        $('.et-vertical-timeline-common').hide();
        $('#et-vertical-timeline-demo-' + current_id1).show();
    }

//horizontal timeline preview
    $(".et-horizontal-timeline-common").first().addClass("horizontal-active");
    $('.et-horizontal-template').on('change', function() {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.et-horizontal-timeline-common').hide();
        $('#et-horizontal-timeline-demo-' + current_id).show();
    });
    if ($(".et-horizontal-template option:selected").length > 0) {
        var grid_view = $(".et-horizontal-template option:selected").val();
        var array_break = grid_view.split('-');
        var current_id1 = array_break[1];
        $('.et-horizontal-timeline-common').hide();
        $('#et-horizontal-timeline-demo-' + current_id1).show();
    }
//one-side timeline preview
    $(".et-one-side-timeline-common").first().addClass("horizontal-active");
    $('.et-one-side-template').on('change', function() {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.et-one-side-timeline-common').hide();
        $('#et-one-side-timeline-demo-' + current_id).show();
    });
    if ($(".et-one-side-template option:selected").length > 0) {
        var grid_view = $(".et-one-side-template option:selected").val();
        var array_break = grid_view.split('-');
        var current_id1 = array_break[1];
        $('.et-one-side-timeline-common').hide();
        $('#et-one-side-timeline-demo-' + current_id1).show();
    }

//Standard pagination preview
    $(".et-standard-pagination-common").first().addClass("standard-pagination-active");
    $('.et-standard-template').on('change', function() {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.et-standard-pagination-common').hide();
        $('#et-standard-pagination-demo-' + current_id).show();
    });
    if ($(".et-standard-template option:selected").length > 0) {
        var carousel_view = $(".et-standard-template option:selected").val();
        var array_break = carousel_view.split('-');
        var current_id1 = array_break[1];
        $('.et-standard-pagination-common').hide();
        $('#et-standard-pagination-demo-' + current_id1).show();
    }

//Load more pagination preview
    $(".et-load-more-common").first().addClass("load-active");
    $('.et-load-more-template').on('change', function() {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.et-load-more-common').hide();
        $('#et-load-more-demo-' + current_id).show();
    });
    if ($(".et-load-more-template option:selected").length > 0) {
        var carousel_view = $(".et-load-more-template option:selected").val();
        var array_break = carousel_view.split('-');
        var current_id1 = array_break[1];
        $('.et-load-more-common').hide();
        $('#et-load-more-demo-' + current_id1).show();
    }

//Filter preview
    $(".et-filter-common").first().addClass("filter-active");
    $('.et-filter-template').on('change', function() {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.et-filter-common').hide();
        $('#et-filter-demo-' + current_id).show();
    });
    if ($(".et-filter-template option:selected").length > 0) {
        var carousel_view = $(".et-filter-template option:selected").val();
        var array_break = carousel_view.split('-');
        var current_id1 = array_break[1];
        $('.et-filter-common').hide();
        $('#et-filter-demo-' + current_id1).show();
    }


    $('.et-fetch-post').change(function() {
        if ($(this).val() === "wp-post") {
            $('.et-backend-outer-wrap').show();
            $('.et-fb-outer-wrapper').hide();
            $('.et-twitter-outer-wrapper').hide();
        } else if ($(this).val() === "twitter-feed") {
            $('.et-backend-outer-wrap').hide();
            $('.et-fb-outer-wrapper').hide();
            $('.et-twitter-outer-wrapper').show();
        } else {
            $('.et-backend-outer-wrap').hide();
            $('.et-fb-outer-wrapper').show();
            $('.et-twitter-outer-wrapper').hide();
        }
    });
    var fetch_type = $(".et-fetch-post option:selected").val();
    if (fetch_type === "wp-post") {
        $('.et-backend-outer-wrap').show();
        $('.et-fb-outer-wrapper').hide();
        $('.et-twitter-outer-wrapper').hide();
    } else if (fetch_type === "twitter-feed") {
        $('.et-backend-outer-wrap').hide();
        $('.et-fb-outer-wrapper').hide();
        $('.et-twitter-outer-wrapper').show();
    } else {
        $('.et-backend-outer-wrap').hide();
        $('.et-fb-outer-wrapper').show();
        $('.et-twitter-outer-wrapper').hide();
    }

    $('.et-show-fb-like').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-fb-comment').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-fb-share').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-show-fb-read-more').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-fb-read-more-wrap').show();
        } else
        {
            $(this).val('0');
            $('.et-fb-read-more-wrap').hide();
        }
    });
    //radio button show and hide for icon
    $('.et-icon-type').click(function() {
        var value = $(this).val();
        if (value === 'image') {
            $('.et-image-container').show();
            $('.et-icon-inner-container').hide();
        } else {
            $('.et-image-container').hide();
            $('.et-icon-inner-container').show();
        }
    });
    /*
     * Uplaod slider image
     */

    $('body').on('click', '.et-upload-icon-image', function(e) {
        e.preventDefault();
        var btnClicked = $(this);
        var image = wp.media({
            title: 'Insert Icon Image',
            button: {text: 'Insert Icon Image'},
            library: {type: 'image'},
            multiple: false

        }).open()
                .on('select', function() {
                    var uploaded_image = image.state().get('selection').first();
                    console.log(uploaded_image);
                    var image_url = uploaded_image.toJSON().url;
                    $('.et-icon-img-wrap').attr('src', image_url);
                    $('.et-icon-image-url').val(image_url);
                    if ($('.et-icon-image-url').val(image_url) !== '') {
                        $('.et-icon-image-preview').show();
                    } else {
                        $('.et-icon-image-preview').hide();
                    }
                });
    });
    $('body').on('click', '.et-upload-poster-image', function(e) {
        e.preventDefault();
        var btnClicked = $(this);
        var image = wp.media({
            title: 'Insert Poster Image',
            button: {text: 'Insert Poster Image'},
            library: {type: 'image'},
            multiple: false

        }).open()
                .on('select', function() {
                    var uploaded_image = image.state().get('selection').first();
                    console.log(uploaded_image);
                    var image_url = uploaded_image.toJSON().url;
                    $('.et-poster-img-wrap').attr('src', image_url);
                    $('.et-poster-image-url').val(image_url);
                    if ($('.et-poster-image-url').val(image_url) !== '') {
                        $('.et-poster-image-preview').show();
                    } else {
                        $('.et-poster-image-preview').hide();
                    }
                });
    });
    $('.et-icon-picker').iconPicker();
    $('.et-show-lightbox').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            //   $('.et-taxonomy-main-wrap').show();
        } else
        {
            $(this).val('0');
            // $('.et-taxonomy-main-wrap').hide();
        }
    });
    $('.et-show-animation').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            //   $('.et-taxonomy-main-wrap').show();
        } else
        {
            $(this).val('0');
            // $('.et-taxonomy-main-wrap').hide();
        }
    });
    $('.et-show-scrolling').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            //   $('.et-taxonomy-main-wrap').show();
        } else
        {
            $(this).val('0');
            // $('.et-taxonomy-main-wrap').hide();
        }
    });
    //Scrolling navigation preview
    $(".et-nav-common").first().addClass("nav-active");
    $('.et-nav-template').on('change', function() {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.et-nav-common').hide();
        $('#et-nav-demo-' + current_id).show();
    });
    if ($(".et-nav-template option:selected").length > 0) {
        var grid_view = $(".et-nav-template option:selected").val();
        var array_break = grid_view.split('-');
        var current_id1 = array_break[1];
        $('.et-nav-common').hide();
        $('#et-nav-demo-' + current_id1).show();
    }
//twitter  preview
    $(".et-twitter-timeline-common").first().addClass("twitter-active");
    $('.et-twitter-template').on('change', function() {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.et-twitter-timeline-common').hide();
        $('#et-twitter-timeline-demo-' + current_id).show();
    });
    if ($(".et-twitter-template option:selected").length > 0) {
        var grid_view = $(".et-twitter-template option:selected").val();
        var array_break = grid_view.split('-');
        var current_id1 = array_break[1];
        $('.et-twitter-timeline-common').hide();
        $('#et-twitter-timeline-demo-' + current_id1).show();
    }
//facebook  preview
    $(".et-fb-timeline-common").first().addClass("fb-active");
    $('.et-fb-template').on('change', function() {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.et-fb-timeline-common').hide();
        $('#et-fb-timeline-demo-' + current_id).show();
    });
    if ($(".et-fb-template option:selected").length > 0) {
        var grid_view = $(".et-fb-template option:selected").val();
        var array_break = grid_view.split('-');
        var current_id1 = array_break[1];
        $('.et-fb-timeline-common').hide();
        $('#et-fb-timeline-demo-' + current_id1).show();
    }
//show and hide for media type
    $('.et-custom-link-type').change(function() {
        var value = $(this).val();
        if (value === 'common_link')
        {
            $('.et-common-custom-link-wrap').show();
        } else {
            $('.et-common-custom-link-wrap').hide();
        }
    });
    var custom_link_type = $(".et-custom-link-type option:selected").val();
    if (custom_link_type === 'common_link')
    {
        $('.et-common-custom-link-wrap').show();
    } else {
        $('.et-common-custom-link-wrap').hide();
    }
    $('.et-display-price').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-display-cart').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-display-wishlist').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
        } else
        {
            $(this).val('0');
        }
    });
    $('.et-display-custom-color').click(function() {
        if ($(this).is(':checked'))
        {
            $(this).val('1');
            $('.et-custom-color-wrapper').show();
        } else
        {
            $(this).val('0');
            $('.et-custom-color-wrapper').hide();
        }
    });
});
function etFbinit(data) {
    var el = document.querySelector('#et-fetch-facebook-wrap');
    if (!el)
        return;
    var fbConnectBtn = el.querySelector('#et_fb_connect');
    WPacFastjs.on(fbConnectBtn, 'click', function() {
        etfb_connect(el, data);
        return false;
    });
}

function etfb_popup(url, width, height, cb) {
    var top = top || (screen.height / 2) - (height / 2),
            left = left || (screen.width / 2) - (width / 2),
            win = window.open(url, '', 'location=1,status=1,resizable=yes,width=' + width + ',height=' + height + ',top=' + top + ',left=' + left);
    function check() {
        if (!win || win.closed != false) {
            cb();
        } else {
            setTimeout(check, 100);
        }
    }
    setTimeout(check, 100);
}

function etfb_connect(el, data) {

    etfb_popup('https://app.widgetpack.com/auth/fbrev?scope=manage_pages,pages_show_list', 670, 520, function() {
        WPacXDM.get('https://embed.widgetpack.com', 'https://app.widgetpack.com/widget/facebook/accesstoken', {}, function(res) {
            WPacFastjs.jsonp('https://graph.facebook.com/me/accounts', {access_token: res.accessToken, limit: 250}, function(res) {

                var pagesEl = el.querySelector('.et-fb-pages'),
                        idEl = el.querySelector('.et-fb-profile-id'),
                        nameEl = el.querySelector('.et-fb-profile-name'),
                        tokenEl = el.querySelector('.et-fb-access-token'),
                        businessPhoto = el.querySelector('.et-business-photo'),
                        businessPhotoImg = el.querySelector('.et-business-photo-img');

                WPacFastjs.each(res.data, function(page) {

                    var pageEL = WPacFastjs.create('div', 'et-fb-page');
                    pageEL.innerHTML = '<img src="https://graph.facebook.com/' + page.id + '/picture" class="et-page-photo">' +
                            '<div class="et-fb-profile-name">' + page.name + '</div>';
                    pagesEl.appendChild(pageEL);
                    WPacFastjs.on(pageEL, 'click', function() {
                        idEl.value = page.id;
                        nameEl.value = page.name;
                        tokenEl.value = page.access_token;
                        jQuery(tokenEl).change();
                        if (businessPhoto)
                        {
                            businessPhoto.value = '';
                            businessPhotoImg.src = 'https://graph.facebook.com/' + page.id + '/picture';
                            WPacFastjs.show2(businessPhotoImg);
                        }

                        WPacFastjs.remcl(pagesEl.querySelector('.active'), 'active');
                        WPacFastjs.addcl(pageEL, 'active');
                        data.cb && data.cb();
                        return false;
                    });
                });
            });
        });
    }
    );
    return false;
}
