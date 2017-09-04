jQuery.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    var marker = true;

    function count() {
        marker = false;
    }

    $('#form-profile').on('click', '.profile-value', function () {
        var $this = $(this);
        var name = $this.data('name');
        if(marker){
            count();
            $.post('/profile', {get_field: true, name: name}, function (data) {
                $this.children('strong').hide();
                $this.prepend(data);
                $('#form-profile').bind('focusout change', '.field', function () {
                    var fieldValue = $this.children('.field').val();
                    if(fieldValue === '') {fieldValue = 'не указано' }
                    $this.children('strong').text(fieldValue);
                    $('#form-profile').submit();
                    $this.children('.field').remove();
                    $this.children('strong').show();
                    marker = true;
                })
            });
        }
    });

    $('#form-profile').submit(function (event) {
        event.preventDefault();
        $.post('/profile', $(this).serialize(), function (data) {

        });
    });

    $('.birtday_flatpickr').flatpickr({
        enableTime: true,
        dateFormat: 'Y-m-d',
        time_24hr: true,
        locale: 'ru',
        wrap: true,
        allowInput: true
    });
});