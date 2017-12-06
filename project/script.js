
// rotates right image carosel
$(function() {
    imgsrc1 = ["images/pic1.jpg", "images/pic4.jpg", "images/pic6.jpg"];

    $("#image1").attr("src",imgsrc1[0] );
    i = 0;
    function switchImage() {
        setTimeout(switchImage, 9750);
        
        i++;
        if (i == imgsrc1.length) {
            i = 0;
        }
        $("#image1").attr("src", imgsrc1[i]);


    }
        switchImage();
})

// bottom image carosel
$(function() {
    imgsrc2 = ["images/pic2.jpg", "images/pic5.jpg", "images/pic3.jpg"];

    $("#image2").attr("src",imgsrc2[0] );
    i = 0;
    function switchImage(){
        setTimeout(switchImage, 10500);
        
        i++;
        if (i == imgsrc2.length) {
            i = 0;
        }
        $("#image2").attr("src", imgsrc2[i]);


    }
        switchImage();
})

$(function() {
    $.get("songs.php").then(function(result) {
       	create_table(JSON.parse(result), "playTables");
        alert("DONE");
    }, function(err) {
        alert("ERROR");
    })


}

)

function create_table(data, id) {
	var e = "";
	var d = data[0];	
	var k = Object.keys(d);
	e += "<tr>"
	$.each(k, function(h, j) {
		e += "<th>" + j + "</th>";
	})
	e += "</tr>";
	$.each(data, function(d) {
		e += "<tr>";
		
		e += "</tr>";
	})
	$("#" + id).html(e);
}	
