
$(function() {
    imgsrc1 = ["images/pic1.jpg", "images/pic4.jpg", "images/pic6.jpg"];

    $("#image1").attr("src",imgsrc1[0] );
    i = 0;
    function switchImage() {
        setTimeout(switchImage, 10000);
        
        i++;
        if (i == imgsrc1.length) {
            i = 0;
        }
        $("#image1").attr("src", imgsrc1[i]);


    }
        switchImage();
})

$(function() {
    imgsrc2 = ["images/pic2.jpg", "images/pic5.jpg", "images/pic3.jpg"];

    $("#image2").attr("src",imgsrc2[0] );
    i = 0;
    function switchImage(){
        setTimeout(switchImage, 10000);
        
        i++;
        if (i == imgsrc2.length) {
            i = 0;
        }
        $("#image2").attr("src", imgsrc2[i]);


    }
        switchImage();
})