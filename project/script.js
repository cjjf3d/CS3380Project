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
    console.log(data);
    $.each(data, function (i, d) {
        e += "<tr>";
        console.log(d)
        var v = Object.values(d);
        console.log(v.length);
        $.each(v, function (h, j) {
            e += "<td>" + j + "</td>";
            console.log(j);
        })
        e += "</tr>";
    })
    $("#" + id).html(e);
}

function createArray() {
    var p = new Promise();
    $.get("songs.php").then(function (result) {
        data = JSON.parse(result);
        var f = [];
        data.forEach(function (b) {
            f.push(b.FilePath);
        });

        p.resolve(f);

    }, function (err) {
        alert("ERROR");
        p.reject(err);
    });
    return p;
};

$(function () {

    createArray().then(function (playlist) {
        var audio = new Audio(),
            i = 0;
        audio.addEventListener('ended', function () {
            i = ++i < playlist.length ? i : 0;
            console.log(i);
            audio.src = playlist[i];
            audio.play();
        }, true);
        audio.loop = false;
        audio.src = playlist[0];
        audio.play();

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