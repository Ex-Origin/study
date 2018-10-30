
$(document).ready(function () {
    $(".false").click(function () {
        $(this).css("color","red");
    });

    $(".true").click(function () {
        $(this).css("color","green");
    });


    $(".explain").click(function () {
        $(this).css("color","green");
    });

    $(".answer").click(function () {
        $(this).css("color","green");
    });

    $(".answer-code").click(function () {
        $(this).children("code").removeClass("nohighlight");
        $(this).children("code").each(function(i, block) {
            hljs.highlightBlock(block);
          });
    });

    $(".gap-filling-answer").click(function () {
        $(this).css("color","green");
    });

    $(".container-nav").each(function(){
        $(this).addClass("list-group");
        $(this).children("li").addClass("list-group-item");
    });

    $(".baidu").each(function(){
        $(this).addClass("btn");
        $(this).addClass("btn-primary");
    });

    $(".container-table-center").each(function(){
        $(this).children("table").addClass("table");
        $(this).children("table").addClass("table-bordered");
    });
});



$( document ).ready(function() {
	$.ajaxSetup({
		cache: false
	});
	$( '.sidebar' ).simpleSidebar({
		settings: {
			opener: '#open-sb',
			wrapper: '.wrapper',
			animation: {
				duration: 500,
				easing: 'easeOutQuint'
			}
		},
		sidebar: {
			align: 'right',
			width: 200,
			closingLinks: 'a',
		}
	});
});

$(function (o) {
    var n = (o('#static_url').val(), o('.fixed_tool'));
    n.find('.fixed_tool_scrolltop').click(function () {
        o(window).scrollTop(0)
    });
    var i = !1,
        l = function (o) {
            i || (i = !0, setTimeout(function () {
                i = !1,
                    o()
            }, 500))
        },
        c = o(window);
    c.bind('scroll', function () {
        l(function () {
            c.scrollTop() > 500 ? n.addClass('show')  : n.removeClass('show')
        })
    })
});

$(function() {
    $( ".my-option-a" ).tooltip({
        show: {
          effect: "slideDown",
          delay: 250
        },
        position: {
            my: "center bottom-20",
            at: "center top",
            using: function( position, feedback ) {
              $( this ).css( position );
              $( "<div>" )
                .addClass( "arrow" )
                .addClass( feedback.vertical )
                .addClass( feedback.horizontal )
                .appendTo( this );
            }
        }
    });
});
