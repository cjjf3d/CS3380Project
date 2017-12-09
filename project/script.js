// rotates right image carosel
$(function () {
    imgsrc1 = ["images/pic1.jpg", "images/pic4.jpg", "images/pic6.jpg"];

    $("#image1").attr("src", imgsrc1[0]);
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
$(function () {
    imgsrc2 = ["images/pic2.jpg", "images/pic5.jpg", "images/pic3.jpg"];

    $("#image2").attr("src", imgsrc2[0]);
    i = 0;

    function switchImage() {
        setTimeout(switchImage, 10500);

        i++;
        if (i == imgsrc2.length) {
            i = 0;
        }
        $("#image2").attr("src", imgsrc2[i]);


    }
    switchImage();
})

$(function () {
        $.get("songs.php").then(function (result) {
            create_table(JSON.parse(result), "playTable");

        }, function (err) {
            alert("ERROR");

        })
    }

)
//add for playlist table 

/*
 * Pass in an array of objects, and the ID of a TABLE, and this function will fill the table with the data
 */
function create_table(data, id) {
    var e = "";
    var headers = data[0];
    var k = Object.keys(headers);
    e += "<tr>"
    $.each(k, function (h, j) {
        e += "<th>" + j + "</th>";
    })
    e += "</tr>";
    $.each(data, function (i, d) {
        e += "<tr>";
        var v = Object.values(d);
        $.each(v, function (h, j) {
            e += "<td>" + j + "</td>";
        })
        e += "</tr>";
    })
    $("#" + id).html(e);
}

var createArray = new Promise(function (resolve, reject) {
    $.get("songs.php").then(function (result) {
        data = JSON.parse(result);
        var f = [];
        data.forEach(function (b) {
            f.push(b.FilePath);
        });

        resolve(f);

    }, function (err) {
        alert("ERROR");
        reject(err);
    });
});

$(function () {

    createArray.then(function (playlist) {
        console.log(playlist);
        var audio = document.getElementById("music_audio");
        var i = 0;
        var source = document.getElementById("music_source");
        audio.addEventListener('ended', function () {
            i++;
            if (i == playlist.length) {
                i = 0;
            }
            source.src = playlist[i];
            alert(playlist[i]);
            console.log("i=" + i);
            audio.load();
            audio.play();
        }, true);
        audio.loop = false;
        source.src = playlist[0];
        audio.load();
        //            audio.play();

    })
})





$(function () {
    $('#login').click(function () {
        $.post('index.php', {
                action: 'login',
                username: $('#username').val(),
                password: $('#password').val()
            },
            function (data) {
                $('#utility').html(data);
            });
    })
});

$(document).ready(function () {
    $('input.search').typeahead({
        name: 'search',
        remote: 'search.php?key=%QUERY',
        limit: 10
    });
});