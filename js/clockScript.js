$(document).ready(function()
{
    var canvas = $("#clockCanvas")
    var ctx = canvas[0].getContext("2d")
    var canvasWidth= canvas.width()
    var canvasHeight = canvas.height()
    var digitColor = "#00ff00"
    var funcToCall

    function fillCanvas() {
        ctx.fillStyle = "#000000"
        ctx.fillRect(0, 0, canvasWidth, canvasHeight)
    }

    function clearCanvas() {
        ctx.clearRect(0,0, canvasWidth, canvasHeight)
    }

    function drawSeparators(digitColor) {
        ctx.fillStyle = digitColor
        ctx.fillRect(123,40,3,3)
        ctx.fillRect(123,60,3,3)
        ctx.fillRect(243,40,3,3)
        ctx.fillRect(243,60,3,3)
    }

    function drawDigit0(adjust) {
        ctx.fillStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((10 + adjust), 10)
        ctx.lineTo((60 + adjust), 10)
        ctx.lineTo((60 + adjust), 90)
        ctx.lineTo((10 + adjust), 90)
        ctx.lineTo((10 + adjust), 10)
        ctx.stroke()
    }

    function drawDigit1(adjust) {
        ctx.strokeStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((60 + adjust), 10)
        ctx.lineTo((60 + adjust), 90)
        ctx.stroke()
    }

    function drawDigit2(adjust) {
        ctx.strokeStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((10 + adjust), 10)
        ctx.lineTo((60 + adjust), 10)
        ctx.lineTo((60 + adjust), 50)
        ctx.lineTo((10 + adjust), 50)
        ctx.lineTo((10 + adjust), 90)
        ctx.lineTo((60 + adjust), 90)
        ctx.stroke()
    }

    function drawDigit3(adjust) {
        ctx.strokeStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((10 + adjust), 10)
        ctx.lineTo((60 + adjust), 10)
        ctx.lineTo((60 + adjust), 50)
        ctx.lineTo((10 + adjust), 50)
        ctx.moveTo((60 + adjust), 50)
        ctx.lineTo((60 + adjust), 90)
        ctx.lineTo((10 + adjust), 90)
        ctx.stroke()
    }

    function drawDigit4(adjust) {
        ctx.strokeStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((10 + adjust), 10)
        ctx.lineTo((10 + adjust), 50)
        ctx.lineTo((60 + adjust), 50)
        ctx.lineTo((60 + adjust), 10)
        ctx.moveTo((60 + adjust), 50)
        ctx.lineTo((60 + adjust), 90)
        ctx.stroke()
    }

    function drawDigit5(adjust) {
        ctx.strokeStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((60 + adjust), 10)
        ctx.lineTo((10 + adjust), 10)
        ctx.lineTo((10 + adjust), 50)
        ctx.lineTo((60 + adjust), 50)
        ctx.lineTo((60 + adjust), 90)
        ctx.lineTo((10 + adjust), 90)
        ctx.stroke()
    }

    function drawDigit6(adjust) {
        ctx.strokeStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((60 + adjust), 10)
        ctx.lineTo((10 + adjust), 10)
        ctx.lineTo((10 + adjust), 50)
        ctx.lineTo((60 + adjust), 50)
        ctx.lineTo((60 + adjust), 90)
        ctx.lineTo((10 + adjust), 90)
        ctx.lineTo((10 + adjust), 50)
        ctx.stroke()
    }

    function drawDigit7(adjust) {
        ctx.strokeStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((10 + adjust), 10)
        ctx.lineTo((60 + adjust), 10)
        ctx.lineTo((60 + adjust), 90)
        ctx.stroke()
    }

    function drawDigit8(adjust) {
        ctx.strokeStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((10 + adjust), 10)
        ctx.lineTo((60 + adjust), 10)
        ctx.lineTo((60 + adjust), 90)
        ctx.lineTo((10 + adjust), 90)
        ctx.lineTo((10 + adjust), 10)
        ctx.moveTo((10 + adjust), 50)
        ctx.lineTo((60 + adjust), 50)
        ctx.stroke()
    }

    function drawDigit9(adjust) {
        ctx.strokeStyle = digitColor
        ctx.beginPath()
        ctx.moveTo((60 + adjust), 90)
        ctx.lineTo((60 + adjust), 10)
        ctx.lineTo((10 + adjust), 10)
        ctx.lineTo((10 + adjust), 50)
        ctx.lineTo((60 + adjust), 50)
        ctx.stroke()
    }

    function numberSelector(number, adjust) {
        switch (number) {
            case 0:
                drawDigit0(adjust)
                break;
            case 1:
                drawDigit1(adjust)
                break;
            case 2:
                drawDigit2(adjust)
                break
            case 3:
                drawDigit3(adjust)
                break
            case 4:
                drawDigit4(adjust)
                break
            case 5:
                drawDigit5(adjust)
                break
            case 6:
                drawDigit6(adjust)
                break
            case 7:
                drawDigit7(adjust)
                break
            case 8:
                drawDigit8(adjust)
                break;
            case 9:
                drawDigit9(adjust)
                break;
        }
    }

    function hourOne() {
        adjust = 0
        var now = new Date()
        var hour = now.getHours()
        var number = (hour - (hour % 10)) / 10
        numberSelector(number, adjust)
    }

    function hourTwo() {
        adjust = 60
        var now = new Date()
        var hour = now.getHours()
        var number = (hour % 10)
        numberSelector(number, adjust)
    }

    function minutesOne() {
        adjust = 120
        var now = new Date()
        var minute = now.getMinutes()
        var number = (minute - (minute % 10)) / 10
        numberSelector(number, adjust)
    }

    function minutesTwo() {
        adjust = 180
        var now = new Date()
        var minute = now.getMinutes()
        var number = (minute % 10)
        numberSelector(number, adjust)
    }

    function secondsOne() {
        adjust = 240
        var now = new Date()
        var second = now.getSeconds()
        var number = (second - (second % 10)) / 10
        numberSelector(number, adjust)
    }

    function secondsTwo() {
        var now = new Date()
        var second = now.getSeconds()
        adjust = 300
        var number = second % 10
        numberSelector(number, adjust)

    }

    function drawClock() {
        fillCanvas()
        drawSeparators(digitColor)
        hourOne()
        hourTwo()
        minutesOne()
        minutesTwo()
        secondsOne()
        secondsTwo()
        ctx.restore()
    }

    function refreshTime() {
        setInterval(drawClock, 1000)
    }

    refreshTime()

})