listStudents = ['Anthony', 'Stephane', 'Loic', 'Quentin', 'Dimitri', 'Thibaud', 'Maxime', 'Deborah', 'Mehdi'];


let saveData = () => {

    var chosen = Math.floor(Math.random() * listStudents.length);
    listStudents.forEach(function (element) {
        if (element == listStudents[chosen]) {
            document.getElementById('textChosen').classList.remove('textChosen');
            document.getElementById('nameChosen').classList.remove('nameChosen');
            void document.getElementById('nameChosen').offsetWidth;
            document.getElementById('textChosen').classList.add('textChosen');
            document.getElementById('nameChosen').classList.add('nameChosen');
            textChosen.innerHTML = `La personne pour le sacrifice est...`;
            nameChosen.innerHTML = element;
        }
    });

    console.log(listStudents);
    console.log(listStudents[chosen]);

}

btnChoose.addEventListener('click', saveData);


//set default degree (360*5)
var degree = 1800;
//number of clicks = 0
var clicks = 0;

$(document).ready(function () {

    /*WHEEL SPIN FUNCTION*/
    $('#spin').click(function () {

        //add 1 every click
        clicks++;

        /*multiply the degree by number of clicks
      generate random number between 1 - 360, 
    then add to the new degree*/
        var newDegree = degree * clicks;
        var extraDegree = Math.floor(Math.random() * (360 - 1 + 1)) + 1;
        totalDegree = newDegree + extraDegree;

        /*let's make the spin btn to tilt every
        time the edge of the section hits 
        the indicator*/
        $('#wheel .sec').each(function () {
            var t = $(this);
            var noY = 0;

            var c = 0;
            var n = 700;
            var interval = setInterval(function () {
                c++;
                if (c === n) {
                    clearInterval(interval);
                }

                var aoY = t.offset().top;
                $("#txt").html(aoY);
                console.log(aoY);

                /*23.7 is the minumum offset number that 
                each section can get, in a 30 angle degree.
                So, if the offset reaches 23.7, then we know
                that it has a 30 degree angle and therefore, 
                exactly aligned with the spin btn*/
                if (aoY < 23.89) {
                    console.log('<<<<<<<<');
                    $('#spin').addClass('spin');
                    setTimeout(function () {
                        $('#spin').removeClass('spin');
                    }, 100);
                }
            }, 10);

            $('#inner-wheel').css({
                'transform': 'rotate(' + totalDegree + 'deg)'
            });

            noY = t.offset().top;

        });
    });



});//DOCUMENT READY


