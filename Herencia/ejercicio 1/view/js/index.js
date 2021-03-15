$("#type").change(function () {
    let type = $(this).val();
    hideAll();
    $("#custom-"+type).fadeIn();
});

function hideAll(){
    $("#custom-auto").hide();
    $("#custom-vagoneta").hide();
    $("#custom-camioneta").hide();
}