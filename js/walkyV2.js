$(document).ready(function() {

    var canvas = document.getElementById("walkyAreaTwo")
    var newImage = new Image
    newImage.onload = function() {
        ctx.drawImage(newImage, startingPositionX, startingPositionY, manSize, manSize)
    }
    newImage.src = "images/mega-man-right.png"
    var ctx = canvas.getContext("2d")
    var startingPositionX = 0
    var startingPositionY = 0
    var manSize = canvas.width / 15
    var moveDistance = 5

    function fillCanvas(cb)
    {
        ctx.fillStyle = '#FFFFFF'
        ctx.fillRect(0, 0, canvas.width, canvas.height)
    }

    function drawMan(newImage, startingPositionX, startingPositionY, manSize)
    {
        fillCanvas()
        ctx.drawImage(newImage, startingPositionX, startingPositionY, manSize, manSize)
    }

    function keyPresses()
    {
        $(this).keydown(function (e)
        {
            if (e.keyCode == 37 && (startingPositionX >= 1))
            {
                newImage.src = "images/mega-man-left.png"
                startingPositionX = startingPositionX -= moveDistance
            }
            else if (e.keyCode == 39 && (startingPositionX <= canvas.width - manSize - 1))
            {
                newImage.src = "images/mega-man-right.png"
                startingPositionX += moveDistance
            }
            else if (e.keyCode == 40 && (startingPositionY <= canvas.height - manSize - 1))
            {
                newImage.src = "images/mega-man-down.png"
                startingPositionY += moveDistance
            }
            else if (e.keyCode == 38 && (startingPositionY >= 1))
            {
                newImage.src = "images/mega-man-up.png"
                startingPositionY -= moveDistance
            }
            drawMan(newImage, startingPositionX, startingPositionY, manSize)
        })
    }

    fillCanvas()
    drawMan(newImage, startingPositionX, startingPositionY, manSize)
    keyPresses()
})