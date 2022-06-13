

function getRandomStudent() {

    listStudents = ['Anthony', 'Stéphane', 'Loïc', 'Quentin', 'Dimitri', 'Thibaud', 'Maxime', 'Déborah', 'Mehdi'];
    var chosen = Math.floor(Math.random() * listStudents.length);
    listStudents.forEach(function (element) {
        if (element == listStudents[chosen]) {
            returnChosen.innerHTML = `La personne sacrifiée est : ${element}`;
        }
    });
    
console.log(listStudents[chosen]);
console.log(listStudents[Math.floor(Math.random() * listStudents.length)]);

}
btnChoose = document.getElementById('btnChoose');
btnChoose.addEventListener('click', getRandomStudent());