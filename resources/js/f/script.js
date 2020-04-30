$(function() {
    function count($this) {
        var current = parseInt($this.html(), 10);
        current = current + 250; /* Where 50 is increment */

        $this.html(++current);
        if (current > $this.data("count")) {
            $this.html($this.data("count"));
        } else {
            setTimeout(function() {
                count($this);
            }, 5);
        }
    }

    $(".numero").each(function() {
        $(this).data("count", parseInt($(this).html(), 10));
        $(this).html("0");
        count($(this));
    });

    var lightbox = GLightbox({
        loop: true
    });
    var lightboxDescription = GLightbox({
        selector: "glightbox2"
    });
    var lightboxVideo = GLightbox({
        selector: "glightbox3"
    });
    var lightboxInlineIframe = GLightbox({
        selector: "glightbox4"
    });
});
