$(document).ready(function() {

    var origSource
    $(".hoverChange")
        .mouseover(function() {
            origSource = $(this).attr("src")
            var src = "images/hover.jpg"
            $(this).attr("src", src)
        })

        .mouseout(function() {
            $(this).attr("src", origSource)
        })

    $(".hoverChange")
        .click(function() {
            $("#bigImage").css("display", "block")
            $("#popUpBox").attr("src", origSource)
        })

    $("#close-button")
        .click(function() {
            $('#bigImage').css("display", "none")
        })

    $(document).keydown(function(e) {
        if (e.keyCode == 27) {
            $("#bigImage").css("display", "none")
        }
    })


})