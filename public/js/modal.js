var modal={
    'open': function (el) {
        $("#myModal").remove();
        $.get(el, {}, function (data) {
            $('body').append(data);
            $(document).ready(function(){
                $("#myModal").modal('show');
            });
        })
    },

    'close': function (el) {
        $(el).fadeOut();
    },

    'zbox': function (el) {
        $(el).fadeIn();
    },

    'zboxClose': function (el) {
        $(el).fadeOut();
    }
}