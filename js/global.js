! function(i) {
    jQuery.fn.scrolla = function(t) {
        function a() {
            var a = i(window).height(),
                s = i(window).scrollTop(),
                o = s + a;
            i.each(n, function() {
                var a = i(this).data("animate"),
                    n = i(this).data("offset"),
                    e = i(this).data("duration"),
                    r = i(this).data("delay"),
                    d = i(this).data("iteration"),
                    h = i(this).outerHeight(),
                    l = i(this).offset().top,
                    c = l + h;
                n && (l += n, c -= n), i(this).css({
                    "-webkit-animation-duration": e,
                    "animation-duration": e
                }), i(this).css({
                    "-webkit-animation-delay": r,
                    "animation-delay": r
                }), i(this).css({
                    "-webkit-animation-iteration-count": d,
                    "animation-iteration-count": d
                }), c >= s && l <= o ? (i(this).css("visibility", "visible"), i(this).addClass(a), i(this).addClass("animated")) : t.once === !1 && (i(this).css("visibility", "hidden"), i(this).removeClass(a), i(this).removeClass("animated"))
            })
        }
        if (t = i.extend({
                mobile: !1,
                once: !1
            }, t), t.mobile === !1 && /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) return !1;
        var n = this;
        i(window).on("scroll", a), i(window).trigger("scroll")
    }
}(jQuery);




$(window).scroll(function() {
    if ($(window).scrollTop() > 200) {
        $(".header11").hide();
		$(".header1").hide();
        $(".header2").show();
    }
});
$(window).scroll(function() {
    if ($(window).scrollTop() < 100) {
        $(".header11").show();
		$(".header1").show();
        $(".header2").hide();
    }
});

  $(function() {
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1700);
                        return false;
                    }
                }
            });
        });