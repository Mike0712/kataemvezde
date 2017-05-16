var modal={
    'open': function (el) {
        console.log(el);
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