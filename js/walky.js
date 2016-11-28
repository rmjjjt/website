$(document).ready(function() {

    var canvas = $("#walkyArea")
    var newImage = new Image
    var ctx = canvas[0].getContext("2d")
    var startingPositionX = 0
    var startingPositionY = 0
    newImage.src = ""

    function fillCanvas() {
        ctx.fillStyle = "white"
        ctx.fillRect(0, 0, 600, 400)
    }

    function drawGame() {
        newImage.src = "images/mega-man-right.png"
        fillCanvas()
        canvas.keypress(keyPresses())
        // newImage.onload = drawMan(newImage, startingPositionX, startingPositionY)

    }

    function drawMan(newImage, startingPositionX, startingPositionY)
    {
        ctx.drawImage(newImage, startingPositionX, startingPositionY, 40, 40)
    }

    drawGame()
    drawMan(newImage, startingPositionX, startingPositionY)
    keyPresses()

    function keyPresses() {
        $(this).keydown(function (e) {
            if (e.keyCode == 37 && (startingPositionX >= 0)) {
                startingPositionX = startingPositionX -= 5
                startingPositionY = startingPositionY
                newImage.src = "images/mega-man-left.png"
            } else {
                startingPositionX = startingPositionX += 0
                startingPositionY = startingPositionY += 0
            }

            if (e.keyCode == 39 && (startingPositionX <= 560)) {
                startingPositionX = startingPositionX + 5
                startingPositionY = startingPositionY
                newImage.src = "images/mega-man-right.png"
            } else {
                    startingPositionX = startingPositionX += 0
                    startingPositionY = startingPositionY += 0
                }

            if (e.keyCode == 40 && (startingPositionY <= 360)) {
                startingPositionY = startingPositionY += 5
                startingPositionX = startingPositionX
                newImage.src = "images/mega-man-down.png"
            } else {
                startingPositionX = startingPositionX += 0
                startingPositionY = startingPositionY += 0
            }

            if (e.keyCode == 38 && (startingPositionY >= 0)) {
                startingPosition = startingPositionY -= 5
                startingPositionX = startingPositionX
                newImage.src = "images/mega-man-up.png"

            } else {
                startingPositionX = startingPositionX += 0
                startingPositionY = startingPositionY += 0
            }
            fillCanvas()
            drawMan(newImage, startingPositionX, startingPositionY)

        })
    }





























})