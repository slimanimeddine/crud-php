var loadFile = function(event) {
    var output = document.getElementById("output");
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style = "display: block; margin-left: 150px; width:128px; height:128px;";
    output.onload = function() {
        URL.revokeObjectURL(output.src)
    }
};