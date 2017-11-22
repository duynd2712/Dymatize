$(document).ready(function () {
    addFixed();
    $(window).scroll(function() {
        addFixed();
    });

    //get html select option or span
    $('.select_box select').on('change', function() {
        var span = $(this).parent().find('span');
        span.html()
    });
    $(".drop_sl").change(function() {
        var str = "";
        $(this).find( "option:selected" ).each(function() {
          str += $( this ).text() + " ";
        });
        $(this).parent().find('span').text( str );
    }).trigger( "change" );


    // MODAL VIDEO
    var modal = UIkit.modal("#modal-video", {
        center: true,
        modal: true
    });

    modal.on('hide.uk.modal', function() {
        $("#modal-video .media").attr('src', '');
    });

    $('.listVideo .video').each(function() {
        $(this).click(function() {
            $('#modal-video .media').attr('src', $(this).data('video'));
            modal.show();
        });
    });

});

function addFixed(){
    if ($(this).scrollTop() > 1){  
        $('.navTop').addClass("uk-navbar-attached");
      }
      else{
        $('.navTop').removeClass("uk-navbar-attached");
      }
}