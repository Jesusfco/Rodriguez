$(document).ready(function() {
    var can1 = document.getElementById("cav1");
    var can2 = document.getElementById("cav2");
    var can3 = document.getElementById("cav3");
    var can4 = document.getElementById("cav4");

    generateCirclesCanvas(can1, 85, "#dd590d", "Ai");
    generateCirclesCanvas(can2, 90, "#0d6edd", "Ps");
    generateCirclesCanvas(can3, 75, "#be0ddd", "Pr");
    generateCirclesCanvas(can4, 60, "#6504c0", "Ae");

    // we are firing function on waypoints
});




function generateCirclesCanvas(can, percentage, color, text) {

    can.width = 120;
    can.height = 120;

    var c = can.getContext('2d');

    var initPath = .35 * Math.PI;
    var percentageCircle = initPath + (((Math.PI * 2) / 100) * percentage);
    c.beginPath();
    c.arc(60, 60, 55, 0, 2 * Math.PI);
    c.lineWidth = 10;
    c.strokeStyle = "white";
    c.stroke();

    c.beginPath();
    c.arc(60, 60, 55, initPath, percentageCircle, false);
    c.lineWidth = 10;
    c.strokeStyle = color;
    c.stroke();


    c.font = "30px Open Sans";
    c.fillStyle = color;
    c.textAlign = "center";
    c.fillText(text, can.width / 2, can.height / 2);

    c.font = "15px Open Sans";
    c.fillStyle = color;
    c.textAlign = "center";
    c.fillText(percentage + "%", can.width / 2, 80);
}

function generateBarProgressLenguages(can, percentage) {

    var progress = 0;

    can.width = can.offsetWidth;
    can.height = can.offsetHeight;
    var c = can.getContext("2d");

    setInterval(function() {

        if (progress >= percentage) return;

        c.clearRect(0, 0, can.width, can.height);
        var fillableArea = ((can.width - 75) / 100) * progress;
        c.fillStyle = "#fccc00";
        c.fillRect(0, 0, fillableArea, can.height);

        c.font = "15px Open Sans";
        c.fillStyle = "black";
        c.textAlign = "right";
        c.fillText(Math.round(progress) + "%", fillableArea + 38, 15);

        if (progress >= percentage - 20) {
            progress += .5;
            if (progress >= percentage - 8)
                progress -= .25;
            return;
        }

        progress++;

    }, 10);

}

function progressInterval() {

}