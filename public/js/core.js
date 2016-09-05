$('body').ready(function () {
    console.log('token set');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.image').dimmer({'on': 'hover'});
    $(document).on('change', ':file', function () {
        var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
    $('#openAvatarDialog').click(function () {
        $('#avatarFile').click();

    });
    $('#newsTextarea').tinymce('init');


});


$(document).ready(function () {
    $(':file').on('fileselect', function (event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

        if (input.length) {
            input.val(log);
        } else {
            if (log)
                alert(log);
        }

    });

    $('#avatarFile:file').off('fileselect');
    $('#avatarFile:file').on('fileselect', function (event, numFiles, label) {
        $('#avatarForm').submit();

    });
});