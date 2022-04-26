var App = function () {

    var isIE8 = false; // IE8 mode
    var currentPage = ''; // current page

    // this function handles responsive layout on screen size resize or mobile device rotate.
    var handleResponsive = function () {
        if (jQuery.browser.msie && jQuery.browser.version.substr(0, 1) == 8) {
            isIE8 = true; // checkes for IE8 browser version
            $('.visible-ie8').show(); //
        }

        var isIE10 = !! navigator.userAgent.match(/MSIE 10/);

        if (isIE10) {
            jQuery('html').addClass('ie10'); // set ie10 class on html element.
        }

        // loops all page elements with "responsive" class and applied classes for tablet mode
        // For metornic  1280px or less set as tablet mode to display the content properly
        var handleTabletElements = function () {
            if ($(window).width() <= 1280) {
                $(".responsive").each(function () {
                    var forTablet = $(this).attr('data-tablet');
                    var forDesktop = $(this).attr('data-desktop');
                    if (forTablet) {
                        $(this).removeClass(forDesktop);
                        $(this).addClass(forTablet);
                    }
                });
                handleTooltip();
            }
        }

        // loops all page elements with "responsive" class and applied classes for desktop mode
        // For metornic  higher 1280px set as desktop mode to display the content properly
        var handleDesktopElements = function () {
            if ($(window).width() > 1280) {
                $(".responsive").each(function () {
                    var forTablet = $(this).attr('data-tablet');
                    var forDesktop = $(this).attr('data-desktop');
                    if (forTablet) {
                        $(this).removeClass(forTablet);
                        $(this).addClass(forDesktop);
                    }
                });
                handleTooltip();
            }
        }

        // handle all elements which requires to re-initialize on screen width change(on resize or on rotate mobile device)
        var handleElements = function () {
            if (App.isPage("index")) {
                handleDashboardCalendar(); // handles full calendar for main page
                jQuery('.vmaps').each(function () {
                    var map = jQuery(this);
                    map.width(map.parent().width());
                });
            }

            if (App.isPage("charts")) {
                handleChartGraphs();
            }

            if (App.isPage("maps_vector")) { // jqvector maps requires to fix the width on screen resized.
                jQuery('.vmaps').each(function () {
                    var map = jQuery(this);
                    map.width(map.parent().width());
                });
            }

            if (App.isPage("calendar")) { // full calendar requires to fix the width on screen resized.
                handleCalendar();
            }

            handleTabletElements();
            handleDesktopElements();
        }

        // handles responsive breakpoints.
        $(window).setBreakpoints({
            breakpoints: [320, 480, 768, 1024, 1280]
        });

        $(window).bind('exitBreakpoint320', function () {
            handleElements();
        });
        $(window).bind('enterBreakpoint320', function () {
            handleElements();
        });

        $(window).bind('exitBreakpoint480', function () {
            handleElements();
        });
        $(window).bind('enterBreakpoint480', function () {
            handleElements();
        });

        $(window).bind('exitBreakpoint768', function () {
            handleElements();
        });
        $(window).bind('enterBreakpoint768', function () {
            handleElements();
        });

        $(window).bind('exitBreakpoint1024', function () {
            handleElements();
        });
        $(window).bind('enterBreakpoint1024', function () {
            handleElements();
        });

        $(window).bind('exitBreakpoint1280', function () {
            handleElements();
        });
        $(window).bind('enterBreakpoint1280', function () {
            handleElements();
        });
    }

    /*var handleJQVMAP = function () {
        var showMap = function (name) {
            jQuery('.vmaps').hide();
            jQuery('#vmap_' + name).show();
        }

        var setMap = function (name) {
            var data = {
                map: 'world_en',
                backgroundColor: null,
                borderColor: '#333333',
                borderOpacity: 0.5,
                borderWidth: 1,
                color: '#c6c6c6',
                enableZoom: true,
                hoverColor: '#c9dfaf',
                hoverOpacity: null,
                values: sample_data,
                normalizeFunction: 'linear',
                scaleColors: ['#b6da93', '#909cae'],
                selectedColor: '#c9dfaf',
                selectedRegion: null,
                showTooltip: true,
                onLabelShow: function (event, label, code) {

                },
                onRegionOver: function (event, code) {
                    if (code == 'ca') {
                        event.preventDefault();
                    }
                },
                onRegionClick: function (element, code, region) {
                    var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
                    alert(message);
                }
            };

            data.map = name + '_en';
            var map = jQuery('#vmap_' + name);
            map.width(map.parent().parent().width());
            map.show();
            map.vectorMap(data);
            map.hide();
        }

        setMap("world");
        setMap("usa");
        setMap("europe");
        setMap("russia");
        setMap("germany");

        showMap("world");

        jQuery('#regional_stat_world').click(function () {
            showMap("world");
        });

        jQuery('#regional_stat_usa').click(function () {
            showMap("usa");
        });

        jQuery('#regional_stat_europe').click(function () {
            showMap("europe");
        });
        jQuery('#regional_stat_russia').click(function () {
            showMap("russia");
        });
        jQuery('#regional_stat_germany').click(function () {
            showMap("germany");
        });

        $('#region_statistics_loading').hide();
        $('#region_statistics_content').show();
    }

    var handleAllJQVMAP = function () {
        var setMap = function (name) {
            var data = {
                map: 'world_en',
                backgroundColor: null,
                borderColor: '#333333',
                borderOpacity: 0.5,
                borderWidth: 1,
                color: '#c6c6c6',
                enableZoom: true,
                hoverColor: '#c9dfaf',
                hoverOpacity: null,
                values: sample_data,
                normalizeFunction: 'linear',
                scaleColors: ['#b6da93', '#427d1a'],
                selectedColor: '#c9dfaf',
                selectedRegion: null,
                showTooltip: true,
                onRegionOver: function (event, code) {
                    //sample to interact with map
                    if (code == 'ca') {
                        event.preventDefault();
                    }
                },
                onRegionClick: function (element, code, region) {
                    //sample to interact with map
                    var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
                    alert(message);
                }
            };

            data.map = name + '_en';
            var map = jQuery('#vmap_' + name);
            map.width(map.parent().width());
            map.vectorMap(data);
        }

        setMap("world");
        setMap("usa");
        setMap("europe");
        setMap("russia");
        setMap("germany");
    }*/

    var handleDashboardCalendar = function () {

        if (!jQuery().fullCalendar) {
            return;
        }

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        var h = {};

        if ($('#calendar').width() <= 500) {
            $('#calendar').addClass("mobile");
            h = {
                left: 'title, prev, next',
                center: '',
                right: 'today,month,agendaWeek,agendaDay'
            };
        } else {
            console.log("www");
            $('#calendar').removeClass("mobile");
            h = {
                left: 'title',
                center: '',
                right: 'prev,next,today,month,agendaWeek,agendaDay'
            };
        }

        $('#calendar').html("");
        $('#calendar').fullCalendar({
            header: h,
            editable: true,
            events: [{
                title: 'All Day Event',
                start: new Date(y, m, 1),
            }, {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2),
            }, {
                title: 'Repeating Event',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false,
            }, {
                title: 'Repeating Event',
                start: new Date(y, m, d + 4, 16, 0),
                allDay: false,
            }, {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false,
            }, {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
            }, {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false,
            }, {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/',
            }]
        });

    }

    var handleCalendar = function () {

        if (!jQuery().fullCalendar) {
            return;
        }

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        var h = {};
        if ($('#calendar').parents(".portlet").width() <= 720) {
            $('#calendar').addClass("mobile");
            h = {
                left: 'title, prev,next',
                center: '',
                right: 'today,month,agendaWeek,agendaDay'
            };
        } else {
            $('#calendar').removeClass("mobile");
            h = {
                left: 'title',
                center: '',
                right: 'prev,next,today,month,agendaWeek,agendaDay'
            };
        }

        var initDrag = function (el) {
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim(el.text()) // use the element's text as the event title
            };
            // store the Event Object in the DOM element so we can get to it later
            el.data('eventObject', eventObject);
            // make the event draggable using jQuery UI
            el.draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0 //  original position after the drag
            });
        }

        var addEvent = function (title) {
            title = title.length == 0 ? "Untitled Event" : title;
            var html = $('<div class="external-event label">' + title + '</div>');
            jQuery('#event_box').append(html);
            initDrag(html);
        }

        $('#external-events div.external-event').each(function () {
            initDrag($(this))
        });

        $('#event_add').unbind('click').click(function () {
            var title = $('#event_title').val();
            addEvent(title);
        });

        //predefined events
        $('#event_box').html("");
        addEvent("My Event 1");
        addEvent("My Event 2");
        addEvent("My Event 3");
        addEvent("My Event 4");
        addEvent("My Event 5");
        addEvent("My Event 6");

        $('#calendar').html("");
        $('#calendar').fullCalendar({
            header: h,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                copiedEventObject.className = $(this).attr("data-class");

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [{
                title: 'All Day Event',
                start: new Date(y, m, 1)
            }, {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2)
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d + 4, 16, 0),
                allDay: false
            }, {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false
            }, {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false
            }, {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false
            }, {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/'
            }]
        });

    }

    var handleMainMenu = function () {
        jQuery('.page-sidebar .has-sub > a').click(function () {
            var last = jQuery('.has-sub.open', $('.page-sidebar'));
            last.removeClass("open");
            jQuery('.arrow', last).removeClass("open");
            jQuery('.sub', last).slideUp(200);
                
            var sub = jQuery(this).next();
            if (sub.is(":visible")) {
                jQuery('.arrow', jQuery(this)).removeClass("open");
                jQuery(this).parent().removeClass("open");
                sub.slideUp(200);
            } else {
                jQuery('.arrow', jQuery(this)).addClass("open");
                jQuery(this).parent().addClass("open");
                sub.slideDown(200);
            }
        });
    }

    var handlePortletTools = function () {
        jQuery('.portlet .tools a.remove').click(function () {
            var removable = jQuery(this).parents(".portlet");
            if (removable.next().hasClass('portlet') || removable.prev().hasClass('portlet')) {
                jQuery(this).parents(".portlet").remove();
            } else {
                jQuery(this).parents(".portlet").parent().remove();
            }
        });

        jQuery('.portlet .tools a.reload').click(function () {
            var el = jQuery(this).parents(".portlet");
            App.blockUI(el);
            window.setTimeout(function () {
                App.unblockUI(el);
            }, 1000);
        });

        jQuery('.portlet .tools .collapse, .portlet .tools .expand').click(function () {
            var el = jQuery(this).parents(".portlet").children(".portlet-body");
            if (jQuery(this).hasClass("collapse")) {
                jQuery(this).removeClass("collapse").addClass("expand");
                el.slideUp(200);
            } else {
                jQuery(this).removeClass("expand").addClass("collapse");
                el.slideDown(200);
            }
        });
    }

    

    var handleFancyBox = function () {
        if (!jQuery().fancybox) {
            return;
        }

        if (jQuery(".fancybox-button").size() > 0) {
            jQuery(".fancybox-button").fancybox({
                groupAttr: 'data-rel',
                prevEffect: 'none',
                nextEffect: 'none',
                closeBtn: true,
                helpers: {
                    title: {
                        type: 'inside'
                    }
                }
            });
        }
    }

    var handleLoginForm = function () {

        jQuery('#forget-password').click(function () {
            jQuery('.login-form').hide();
            jQuery('.forget-form').show(200);
        });

        jQuery('#forget-btn, #back-btn').click(function () {
            jQuery('.login-form').slideDown(200);
            jQuery('.forget-form').slideUp(200);
        });
    }

    var handleFixInputPlaceholderForIE = function () {
        //fix html5 placeholder attribute for ie7 & ie8
        if (jQuery.browser.msie && jQuery.browser.version.substr(0, 1) <= 9) { // ie7&ie8
            jQuery('input[placeholder], textarea[placeholder]').each(function () {

                var input = jQuery(this);

                jQuery(input).val(input.attr('placeholder'));

                jQuery(input).focus(function () {
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });

                jQuery(input).blur(function () {
                    if (input.val() == '' || input.val() == input.attr('placeholder')) {
                        input.val(input.attr('placeholder'));
                    }
                });
            });
        }
    }

    var handlePulsate = function () {
        if (!jQuery().pulsate) {
            return;
        }

        if (isIE8 == true) {
            return; // pulsate plugin does not support IE8 and below
        }

        if (jQuery().pulsate) {
            jQuery('#pulsate-regular').pulsate({
                color: "#bf1c56"
            });

            jQuery('#pulsate-once').click(function () {
                $(this).pulsate({
                    color: "#399bc3",
                    repeat: false
                });
            });

            jQuery('#pulsate-hover').pulsate({
                color: "#5ebf5e",
                repeat: false,
                onHover: true
            });

            jQuery('#pulsate-crazy').click(function () {
                $(this).pulsate({
                    color: "#fdbe41",
                    reach: 50,
                    repeat: 10,
                    speed: 100,
                    glow: true
                });
            });
        }
    }

    
    var handleTooltip = function () {
        if (App.isTouchDevice()) { // if touch device, some tooltips can be skipped in order to not conflict with click events
            jQuery('.tooltips:not(.no-tooltip-on-touch-device)').tooltip();
        } else {
            jQuery('.tooltips').tooltip();
        }
    }

    var handlePopover = function () {
        jQuery('.popovers').popover();
    }

    var handleChoosenSelect = function () {
        if (!jQuery().chosen) {
            return;
        }
        $(".chosen").chosen();
        $(".chosen-with-diselect").chosen({
            allow_single_deselect: true
        });
    }

    var handleUniform = function (el) {
    	if( !el ) el = $('html')
        if (!jQuery().uniform) {
            return;
        }
        var test = $("input[type=checkbox]:not(.toggle), input[type=radio]:not(.toggle)", el);
        if (test) {
            test.uniform();
        }
    }

    var handleWysihtml5 = function () {
        if (!jQuery().wysihtml5) {
            return;
        }

        if ($('.wysihtml5').size() > 0) {
            $('.wysihtml5').wysihtml5();
        }
    }

    var handleToggleButtons = function (parent) {
    	if( !parent ) parent = $('html');
        if (!jQuery().toggleButtons) {
            return;
        }
        $('.basic-toggle-button', parent).toggleButtons();
        $('.text-toggle-button', parent).toggleButtons({
            width: 200,
            label: {
                enabled: "Lorem Ipsum",
                disabled: "Dolor Sit"
            }
        });
        $('.danger-toggle-button', parent).toggleButtons({
            style: {
                // Accepted values ["primary", "danger", "info", "success", "warning"] or nothing
                enabled: "danger",
                disabled: "info"
            }
        });
        $('.info-toggle-button', parent).toggleButtons({
            style: {
                enabled: "info",
                disabled: ""
            }
        });
        $('.success-toggle-button', parent).toggleButtons({
            style: {
                enabled: "success",
                disabled: "info"
            }
        });
        $('.warning-toggle-button', parent).toggleButtons({
            style: {
                enabled: "warning",
                disabled: "info"
            }
        });

        $('.height-toggle-button', parent).toggleButtons({
            height: 100,
            font: {
                'line-height': '100px',
                'font-size': '20px',
                'font-style': 'italic'
            }
        });
    }

    var handleTables = function () {
        if (!jQuery().dataTable) {
            return;
        }

        // begin first table
        $('#sample_1').dataTable({
            "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page",
                "oPaginate": {
                    "sPrevious": "Prev",
                    "sNext": "Next"
                }
            },
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [0]
            }]
        });

        jQuery('#sample_1 .group-checkable').change(function () {
            var set = jQuery(this).attr("data-set");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).attr("checked", true);
                } else {
                    $(this).attr("checked", false);
                }
            });
            jQuery.uniform.update(set);
        });

        jQuery('#sample_1_wrapper .dataTables_filter input').addClass("m-wrap medium"); // modify table search input
        jQuery('#sample_1_wrapper .dataTables_length select').addClass("m-wrap xsmall"); // modify table per page dropdown

        // begin second table
        $('#sample_2').dataTable({
            "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ per page",
                "oPaginate": {
                    "sPrevious": "Prev",
                    "sNext": "Next"
                }
            },
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [0]
            }]
        });

        jQuery('#sample_2 .group-checkable').change(function () {
            var set = jQuery(this).attr("data-set");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).attr("checked", true);
                } else {
                    $(this).attr("checked", false);
                }
            });
            jQuery.uniform.update(set);
        });

        jQuery('#sample_2_wrapper .dataTables_filter input').addClass("m-wrap small"); // modify table search input
        jQuery('#sample_2_wrapper .dataTables_length select').addClass("m-wrap xsmall"); // modify table per page dropdown

        // begin: third table
        $('#sample_3').dataTable({
            "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ per page",
                "oPaginate": {
                    "sPrevious": "Prev",
                    "sNext": "Next"
                }
            },
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [0]
            }]
        });

        jQuery('#sample_3 .group-checkable').change(function () {
            var set = jQuery(this).attr("data-set");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).attr("checked", true);
                } else {
                    $(this).attr("checked", false);
                }
            });
            jQuery.uniform.update(set);
        });

        jQuery('#sample_3_wrapper .dataTables_filter input').addClass("m-wrap small"); // modify table search input
        jQuery('#sample_3_wrapper .dataTables_length select').addClass("m-wrap xsmall"); // modify table per page dropdown
    }

    var handleTagsInput = function () {
        if (!jQuery().tagsInput) {
            return;
        }
        $('#tags_1').tagsInput({
            width: 'auto'
        });
        $('#tags_2').tagsInput({
            width: 240
        });
    }

    var handleDateTimePickers = function () {

        if (!jQuery().daterangepicker) {
            return;
        }

        $('.date-range').daterangepicker();

        $('#dashboard-report-range').daterangepicker({
            ranges: {
                'Today': ['today', 'today'],
                'Yesterday': ['yesterday', 'yesterday'],
                'Last 7 Days': [Date.today().add({
                    days: -6
                }), 'today'],
                'Last 30 Days': [Date.today().add({
                    days: -29
                }), 'today'],
                'This Month': [Date.today().moveToFirstDayOfMonth(), Date.today().moveToLastDayOfMonth()],
                'Last Month': [Date.today().moveToFirstDayOfMonth().add({
                    months: -1
                }), Date.today().moveToFirstDayOfMonth().add({
                    days: -1
                })]
            },
            opens: 'left',
            format: 'MM/dd/yyyy',
            separator: ' to ',
            startDate: Date.today().add({
                days: -29
            }),
            endDate: Date.today(),
            minDate: '01/01/2012',
            maxDate: '12/31/2014',
            locale: {
                applyLabel: 'Submit',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom Range',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            },
            showWeekNumbers: true,
            buttonClasses: ['btn-danger']
        },

        function (start, end) {
            App.blockUI(jQuery("#dashboard"));
            setTimeout(function () {
                App.unblockUI(jQuery("#dashboard"));
                $.gritter.add({
                    title: 'Dashboard',
                    text: 'Dashboard date range updated.'
                });
                App.scrollTo();
            }, 1000);
            $('#dashboard-report-range span').html(start.toString('MMMM d, yyyy') + ' - ' + end.toString('MMMM d, yyyy'));

        });

        $('#dashboard-report-range').show();

        $('#dashboard-report-range span').html(Date.today().add({
            days: -29
        }).toString('MMMM d, yyyy') + ' - ' + Date.today().toString('MMMM d, yyyy'));

        $('#form-date-range').daterangepicker({
            ranges: {
                'Today': ['today', 'today'],
                'Yesterday': ['yesterday', 'yesterday'],
                'Last 7 Days': [Date.today().add({
                    days: -6
                }), 'today'],
                'Last 30 Days': [Date.today().add({
                    days: -29
                }), 'today'],
                'This Month': [Date.today().moveToFirstDayOfMonth(), Date.today().moveToLastDayOfMonth()],
                'Last Month': [Date.today().moveToFirstDayOfMonth().add({
                    months: -1
                }), Date.today().moveToFirstDayOfMonth().add({
                    days: -1
                })]
            },
            opens: 'right',
            format: 'MM/dd/yyyy',
            separator: ' to ',
            startDate: Date.today().add({
                days: -29
            }),
            endDate: Date.today(),
            minDate: '01/01/2012',
            maxDate: '12/31/2014',
            locale: {
                applyLabel: 'Submit',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom Range',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            },
            showWeekNumbers: true,
            buttonClasses: ['btn-danger']
        },

        function (start, end) {
            $('#form-date-range span').html(start.toString('MMMM d, yyyy') + ' - ' + end.toString('MMMM d, yyyy'));
        });

        $('#form-date-range span').html(Date.today().add({
            days: -29
        }).toString('MMMM d, yyyy') + ' - ' + Date.today().toString('MMMM d, yyyy'));


        if (!jQuery().datepicker || !jQuery().timepicker) {
            return;
        }

        $('.date-picker').datepicker();

        $('.timepicker-default').timepicker();

        $('.timepicker-24').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false
        });
    }

    var handleClockfaceTimePickers = function () {

        if (!jQuery().clockface) {
            return;
        }

        $('#clockface_1').clockface();

        $('#clockface_2').clockface({
            format: 'HH:mm',
            trigger: 'manual'
        });

        $('#clockface_2_toggle-btn').click(function (e) {
            e.stopPropagation();
            $('#clockface_2').clockface('toggle');
        });

        $('#clockface_3').clockface({
            format: 'H:mm'
        }).clockface('show', '14:30');
    }

    var handleColorPicker = function () {
        if (!jQuery().colorpicker) {
            return;
        }
        $('.colorpicker-default').colorpicker({
            format: 'hex'
        });
        $('.colorpicker-rgba').colorpicker();
    }

    var handleAccordions = function () {
        $(".accordion").collapse().height('auto');
    }

    var handleScrollers = function () {
        if (!jQuery().slimScroll) {
            return;
        }

        $('.scroller').each(function () {
            $(this).slimScroll({
                //start: $('.blah:eq(1)'),
                size: '7px',
                color: '#a1b2bd',
                height: $(this).attr("data-height"),
                alwaysVisible: ($(this).attr("data-always-visible") == "1" ? true : false),
                railVisible: ($(this).attr("data-rail-visible") == "1" ? true : false),
                disableFadeOut: true
            });
        });
    }

    var handleGoTop = function () {
        /* set variables locally for increased performance */
        jQuery('.footer .go-top').click(function () {
            App.scrollTo();
        });
    }

    var handleChat = function () {
        var cont = $('#chats');
        var list = $('.chats', cont);
        var form = $('.chat-form', cont);
        var input = $('input', form);
        var btn = $('.btn', form);

        var handleClick = function () {
            var text = input.val();
            if (text.length == 0) {
                return;
            }

            var time = new Date();
            var time_str = time.toString('MMM dd, yyyy HH:MM');
            var tpl = '';
            tpl += '<li class="out">';
            tpl += '<img class="avatar" alt="" src="assets/img/avatar1.jpg"/>';
            tpl += '<div class="message">';
            tpl += '<span class="arrow"></span>';
            tpl += '<a href="#" class="name">Bob Nilson</a>&nbsp;';
            tpl += '<span class="datetime">at ' + time_str + '</span>';
            tpl += '<span class="body">';
            tpl += text;
            tpl += '</span>';
            tpl += '</div>';
            tpl += '</li>';

            var msg = list.append(tpl);
            input.val("");
            $('.scroller', cont).slimScroll({
                scrollTo: list.height()
            });
        }

        btn.click(handleClick);
        input.keypress(function (e) {
            if (e.which == 13) {
                handleClick();
                return false; //<---- Add this line
            }
        });
    }

    var handleStyler = function () {
        var scrollHeight = '50px';
        var panel = $('.styler-panel');

        panel.click(function () {
            if (!panel.attr("closing") && !panel.attr("opening")) {
                panel.attr("opening", "1");
                panel.css("overflow", "visible").animate({
                    width: '180px',
                    height: scrollHeight,
                    'padding-top': '5px'
                }, {
                    complete: function () {
                        panel.removeAttr("opening");
                        panel.attr("opened", 1);
                        $('.icon-remove', panel).show();
                        $('.icon-cog', panel).hide();
                    }
                });
                panel.children('.settings').show();
            }
        });

        $('.icon-remove', panel).click(function () {
            if (panel.attr("opened") && !panel.attr("opening") && !panel.attr("closing")) {
                panel.removeAttr("opened");
                panel.attr("closing", "1");
                panel.css('overflow', 'hidden').animate({
                    width: '20px',
                    height: '22px',
                    'padding-top': '5px'
                }, {
                    complete: function () {
                        panel.removeAttr('closing');
                        $('.settings', panel).hide();
                        $('.icon-remove', panel).hide();
                        $('.icon-cog', panel).show();
                    }
                });
            }
        });

        $('.colors span', panel).click(function () {
            var color = $(this).attr("data-style");
            setColor(color);
        });

        $('.layout input', panel).change(function () {
            setLayout();
        });

        var setColor = function (color) {
            $('#style_color').attr("href", "assets/css/style_" + color + ".css");
        }

        var setLayout = function () {
            if ($('.layout input.header', panel).is(":checked")) {
                $("body").addClass("fixed-top");
                $(".header").addClass("navbar-fixed-top");
            } else {
                $("body").removeClass("fixed-top");
                $(".header").removeClass("navbar-fixed-top");
            }
        }
    }

    var handleFormWizards = function () {
        if (!jQuery().bootstrapWizard) {
            return;
        }

        $('#form_wizard_1').bootstrapWizard({
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
            onTabClick: function (tab, navigation, index) {
                alert('on tab click disabled');
                return false;
            },
            onNext: function (tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;
                // set wizard title
                $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
                // set done steps
                jQuery('li', $('#form_wizard_1')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }

                if (current == 1) {
                    $('#form_wizard_1').find('.button-previous').hide();
                } else {
                    $('#form_wizard_1').find('.button-previous').show();
                }

                if (current >= total) {
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.button-submit').show();
                } else {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                }
                App.scrollTo($('.page-title'));
            },
            onPrevious: function (tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;
                // set wizard title
                $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
                // set done steps
                jQuery('li', $('#form_wizard_1')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }

                if (current == 1) {
                    $('#form_wizard_1').find('.button-previous').hide();
                } else {
                    $('#form_wizard_1').find('.button-previous').show();
                }

                if (current >= total) {
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.button-submit').show();
                } else {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                }

                App.scrollTo($('.page-title'));
            },
            onTabShow: function (tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;
                var $percent = (current / total) * 100;
                $('#form_wizard_1').find('.bar').css({
                    width: $percent + '%'
                });
            }
        });

        $('#form_wizard_1').find('.button-previous').hide();
        $('#form_wizard_1 .button-submit').click(function () {
            alert('Finished! Hope you like it :)');
        }).hide();
    }
	var handleDashboardCharts = function () {

        if (!jQuery.plot) {
            return;
        }

        var data = [];
        var totalPoints = 250;

        // random data generator for plot charts
        function getRandomData() {
            if (data.length > 0) data = data.slice(1);
            // do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0) y = 0;
                if (y > 100) y = 100;
                data.push(y);
            }
            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
            return res;
        }

        function showTooltip(title, x, y, contents) {
            $('<div id="tooltip" class="chart-tooltip"><div class="date">' + title + '<\/div> Просмотров: <div class="label label-success">' + contents + '<\/div><\/div>').css({
                position: 'absolute',
                display: 'none',
                top: y - 100,
                width: 115,
                left: x - 40,
                border: '0px solid #ccc',
                padding: '2px 6px',
                'background-color': '#fff',
            }).appendTo("body").fadeIn(200);
        }

        function randValue() {
            return (Math.floor(Math.random() * (1 + 50 - 20))) + 10;
        }


        $('#site_statistics_loading').hide();
        $('#site_statistics_content').show();

        var plot_statistics = $.plot($("#site_statistics"), [{
            data: pageviews,
            label: "Уникальные посещения"
        }, {
            data: visitors,
            label: "Просмотров страниц"
        }], {
            series: {
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 0.05
                        }, {
                            opacity: 0.01
                        }]
                    }
                },
                points: {
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: "#eee",
                borderWidth: 0
            },
            colors: ["#d12610", "#37b7f3", "#52e136"],
            xaxis: {
                ticks: 11,
                tickDecimals: 0
            },
            yaxis: {
                ticks: 11,
                tickDecimals: 0
            }
        });

        var previousPoint = null;
        $("#site_statistics").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
					console.log(item);
                    showTooltip('', item.pageX, item.pageY, item.datapoint[1]);
                }
            } else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

        //server load
        $('#load_statistics_loading').hide();
        $('#load_statistics_content').show();

        
    }
    return {

        //main function to initiate template pages
        init: function () {
            handleResponsive(); // set and handle responsive

            if (App.isPage("index")) {
            	if (typeof(handleDashboardCharts) != "undefined") { 
            		handleDashboardCharts();
            	}
                // handles plot charts for main page
                //handleJQVMAP(); // handles vector maps for home page
                handleDashboardCalendar(); // handles full calendar for main page
                //handleChat(); // handles chat samples
                //handleIntro(); // this is for demo purpose. you may remove handleIntro function for your project
            }

            if (App.isPage("grids")) {
                handlePortletSortable(); // handles full calendars
            }

            if (App.isPage("calendar")) {
                handleCalendar(); // handles full calendars
            }

            if (App.isPage("maps_vector")) {
                handleAllJQVMAP(); // handles vector maps for interactive map page
            }

            if (App.isPage("charts")) {
                handleCharts(); // handles plot charts
                handleChartGraphs();
            }

            handleChoosenSelect(); // handles bootstrap chosen dropdowns
            handleScrollers(); // handles slim scrolling contents
            handleUniform(); // handles uniform elements
            handleTagsInput() // handles tag input elements
            handleDateTimePickers(); //handles form timepickers
            handleClockfaceTimePickers(); //handles form clockface timepickers
            handleColorPicker(); // handles form color pickers
            handleTables(); // handles data tables
            handlePortletTools(); // handles portlet action bar functionality(refresh, configure, toggle, remove)
            handlePulsate(); // handles pulsate functionality on page elements
            //handleGritterNotifications(); // handles gritter notifications
            handleTooltip(); // handles bootstrap tooltips
            handlePopover(); // handles bootstrap popovers
            handleToggleButtons(); // handles form toogle buttons
            handleWysihtml5(); //handles WYSIWYG Editor           
            handleFancyBox(); // handles fancy box image previews
            handleStyler(); // handles style customer tool
            handleMainMenu(); // handles main menu
            handleFixInputPlaceholderForIE(); // fixes/enables html5 placeholder attribute for IE9, IE8
            handleGoTop(); //handles scroll to top functionality in the footer
            handleAccordions();
            handleFormWizards();
        },

        hadleResponsiveElements: function () {

        },

        // login page setup
        initLogin: function () {
            handleLoginForm();
            handleUniform();
            handleFixInputPlaceholderForIE();
        },

        // wrapper function for page element pulsate
        pulsate: function (el, options) {
            var opt = jQuery.extend(options, {
                color: '#d12610', // set the color of the pulse
                reach: 15, // how far the pulse goes in px
                speed: 300, // how long one pulse takes in ms
                pause: 0, // how long the pause between pulses is in ms
                glow: false, // if the glow should be shown too
                repeat: 1, // will repeat forever if true, if given a number will repeat for that many times
                onHover: false // if true only pulsate if user hovers over the element
            });

            jQuery(el).pulsate(opt);
        },

        // wrapper function to scroll to an element
        scrollTo: function (el, offeset) {
            pos = el ? el.offset().top : 0;
            jQuery('html,body').animate({
                scrollTop: pos + (offeset ? offeset : 0)
            }, 'slow');
        },

        // wrapper function to  block element(indicate loading)
        blockUI: function (el, loaderOnTop) {
            lastBlockedUI = el;
            jQuery(el).block({
                message: '<img src="/components/admin/templates/default/assets/img/loading.gif" align="absmiddle">',
                css: {
                    border: 'none',
                    padding: '2px',
                    backgroundColor: 'none'
                },
                overlayCSS: {
                    backgroundColor: '#000',
                    opacity: 0.05,
                    cursor: 'wait'
                }
            });
        },

        // wrapper function to  un-block element(finish loading)
        unblockUI: function (el) {
            jQuery(el).unblock({
                onUnblock: function () {
                    jQuery(el).removeAttr("style");
                }
            });
        },

        // set map page
        setPage: function (name) {
            currentPage = name;
        },

        isPage: function (name) {
            return currentPage == name ? true : false;
        },

        toggleButtonInit: function(parent){
        	handleToggleButtons(parent);
        },
        handleFormElementsInit: function(el){
        	handleChoosenSelect();
        	handleUniform(el);
        },

        isTouchDevice: function () {
            try {
                document.createEvent("TouchEvent");
                return true;
            } catch (e) {
                return false;
            }
        }

    };

}();