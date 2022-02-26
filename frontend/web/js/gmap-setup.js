$(document).ready(function () {
    function t(t) {
        $(t).on({
            mouseenter: function () {
                this.classList.add('hoverz');
            },
            mouseleave: function () {
                this.classList.remove('hoverz');
            }
        })
    }

    $(".land").on("click", function () {
        let t = $(this).attr("id");
        let block = $("#block-views-territorial-view-block");
        block.find("path").each(function () {
            let t = $(this)
                , a = t.attr("class");
            if (-1 != a.indexOf("hhover")) {
                let i = a.replace("hhover", "");
                t.attr("class", i)
            }
        }),
        -1 != $(this).attr("class").indexOf("vadiy") && block.find("path").each(function () {
            let t = $(this)
                , a = t.attr("class");
            if (-1 != a.indexOf("vadiy")) {
                let i = a + " hhover";
                t.attr("class", i)
            }
        }),
        -1 != $(this).attr("class").indexOf("tash") && block.find("path").each(function () {
            let t = $(this)
                , a = t.attr("class");
            if (-1 != a.indexOf("tash")) {
                let i = a + " hhover";
                t.attr("class", i)
            }
        }),
        -1 != $(this).attr("class").indexOf("sam") && block.find("path").each(function () {
            let t = $(this)
                , a = t.attr("class");
            if (-1 != a.indexOf("sam")) {
                let i = a + " hhover";
                t.attr("class", i)
            }
        });
        let a = $(this).attr("class");
        if (-1 == a.indexOf("sam") && -1 == a.indexOf("tash") && -1 == a.indexOf("sam")) {
            let i = $(this).attr("class")
                , n = i + " hhover";
            $(this).attr("class", n)
        }
        $(".view-territorial-view .views-row").each(function () {
            $(this).find(".nid").text() == t && ($(".view-territorial-view .views-row").hide(),
                $(this).fadeIn())
        })
    });

    $(".toolb_second").each(function () {
        $(this).appendTo("#block-block-6 .content").wrap('<div class="links">')
    });

    $("#style_select").appendTo("#block-block-6 .content").wrap('<div class="links">');
    t(".tash");
    t(".vadiy");
    t(".sam");
});

/* Accessibility */

$(document).mouseup(function (e) {
    var specialFeatured = $('body .specialFeatured .specialFeaturedBlock');
    if (specialFeatured.has(e.target).length === 0){
        $('#top-bar .container .col_half.fright.col_last.nobottommargin .top-links .col-middle a').removeClass('active');
        $('body .specialFeatured .specialFeaturedBlock').removeClass('active');
    }
});

$(document).ready(function(){
    $('.specialFeatured').hover(function(){
        $(this).find('a').addClass('active');
        $(this).parent().find('.specialFeaturedBlock').addClass('active');
    }, function(){
        $(this).find('a').removeClass('active');
        $(this).parent().find('.specialFeaturedBlock').removeClass('active');
    });

    // $('a.js-lightbox').simpleLightbox();

    $('.specialFeatured .specialFeaturedBlock .specialFeaturedBlockWraps .typeView a.blackWhite').click(function(){
        $('.specialFeatured .specialFeaturedBlock .specialFeaturedBlockWraps .typeView a').removeClass('active');
        $(this).addClass('active');
        $('body').addClass('modeBlackWhite');
        window.localStorage.setItem('modeBlackWhite', '1');
    });
    $('.specialFeatured .specialFeaturedBlock .specialFeaturedBlockWraps .typeView a.default').click(function(){
        $('.specialFeatured .specialFeaturedBlock .specialFeaturedBlockWraps .typeView a').removeClass('active');
        $(this).addClass('active');
        $('body').removeClass('modeBlackWhite');
        window.localStorage.removeItem('modeBlackWhite', '1');
    });
    let modeBW = window.localStorage.getItem('modeBlackWhite');
    if(modeBW == 1){
        $('body').addClass('modeBlackWhite');
    }else{
        $('body').removeClass('modeBlackWhite');
    }
});
jQuery(window).on("load", function(){

    // Font size change
    var $selectedItems = $("a, p, strong, span, address, h4, h5, h6");
    $selectedItems.each( function(){
        var $this = $(this);
        $this.data("orig-size", $this.css("font-size") );
    });

    $('.typeSizeFonts ul.icnList li.inc2 label').click(function(e){
        //e.preventDefault();
        changeFontSize(16);
    });
    $('.typeSizeFonts ul.icnList li.inc3 label').click(function(e){
        //e.preventDefault();
        changeFontSize(17);
    });
    $('.typeSizeFonts ul.icnList li.inc4 label').click(function(e){
        //e.preventDefault();
        changeFontSize(18);
    });
    $('.typeSizeFonts ul.icnList li.inc5 label').click(function(e){
        //e.preventDefault();
        changeFontSize(19);
    });

    $('.typeSizeFonts ul.icnList li.inc1 label').click(function(e){
        $selectedItems.each( function(){
            var $this = $(this);
            $this.css( "font-size" , $this.data("orig-size") );
            $this.css( "line-height" , '' );
        });
    });

    function changeFontSize(direction){
        $selectedItems.each( function(){
            var $this = $(this);
            $this.css('font-size', parseInt($this.css('font-size', direction)));
            $this.css('line-height', parseInt($this.css('line-height', direction+'px')));
        });
    }

});

