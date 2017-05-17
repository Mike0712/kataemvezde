var modal = {
    'open': function (el) {
        $("#myModal").remove();
        $.get(el, {}, function (data) {
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
                            $.get(el, {errors: data['errors']}, function (data) {
                               //  console.log(data.content);
                                $('#myModal .modal-body').html(data);
                            })
                        }
                }, 'json');
                return false;
            })
        });
    }
)
},

'close'
:
function (el) {
    $(el).fadeOut();
}
,

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