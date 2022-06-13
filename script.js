listStudents = ['Anthony', 'Stéphane', 'Loïc', 'Quentin', 'Dimitri', 'Thibaud', 'Maxime', 'Déborah', 'Mehdi'];
    

let saveData = () => {

    var chosen = Math.floor(Math.random() * listStudents.length);
    listStudents.forEach(function (element) {
        if (element == listStudents[chosen]) {
            returnChosen.innerHTML = `La personne sacrifiée est : ${element}`;
        }
    });
    
console.log(listStudents[chosen]);

}

btnChoose.addEventListener('click', saveData);