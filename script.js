listStudents = ['Anthony', 'Stephane', 'Loic', 'Quentin', 'Dimitri', 'Thibaud', 'Maxime', 'Deborah', 'Mehdi'];
    

let saveData = () => {

    var chosen = Math.floor(Math.random() * listStudents.length);
    listStudents.forEach(function (element) {
        if (element == listStudents[chosen]) {
            textChosen.innerHTML = `La personne pour le sacrifice est...`;
            nameChosen.innerHTML = element;
        }
    });
    
console.log(listStudents[chosen]);

}

btnChoose.addEventListener('click', saveData);