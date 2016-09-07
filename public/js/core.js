$('body').ready(function () {
    $('#deleteModal').on('shown.bs.modal', function (e) {
        var id = $(e.relatedTarget).attr('news');
        $('#newsID').val(id);
    });
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
    $('.reply').click(function (e) {
        var el = $(e.target);
        $('.comment .form').remove();
        $('#replyForm form [name=aid]').val(el.attr('aid'));
        el.parent('.actions').after($('#replyForm').html());
    });
//    $('#newsTextarea').tinymce('init');

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
    $('#toPDF').click(function () {

        var el = $('#makePDF');
        var width = el.width();
        var doc = new jsPDF();
        var text = $('.newsText').text();
        var documents = text;
        doc.text(15, 15, doc.splitTextToSize(documents, 180)
                );
        doc.save($('title').text() + ".pdf");



    });
});

function getBase64Image(img) {

    var canvas = document.createElement("canvas");
    var q = img.width / img.height;
    canvas.width = 300;
    canvas.height = 700;
    var ctx = canvas.getContext("2d");

    ctx.drawImage(img, 0, 0);

    var dataURL = canvas.toDataURL("image/jpeg");

    return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");

}
