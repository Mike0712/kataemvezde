var modal = {
    'open': function (el, err, old) {
        $('.modal-backdrop').remove();
        $("#myModal").remove();
        $.get(el, {errors: err, old: old}, function (data) {
            $('body').append(data);
            $(document).ready(function () {
                $("#myModal").modal('show');
                $("#myModal form").on('submit', function (event) {
                    var form = $(this);
                    var items = form.serialize();
                    var action = ($(this).attr('action'));

                    $.post(action, items, function (data) {
                        if (data['auth']) {
                            document.location.href = '/profile';
                        }
                        if (data['errors']) {
                            var  errors = data['errors'];
                            modal.open(el, errors, items); // рекурсия
                        }
                }, 'json');
                return false;
            })
        });
    }
)
},

'close': function () {
    $('.modal-backdrop').remove();
    $("#myModal").remove();
},

'zbox'
:
function (el) {
    $(el).fadeIn();
}
,

'zboxClose'
:
function (el) {
    $(el).fadeOut();
}
}