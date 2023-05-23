let userChosen
let computerChosen
let result
const randomNumber = Math.round(Math.random()*2+1)

document.body.addEventListener('keyup' ,(event) => {
    const {
        key,keyCode
    } = event;
    switch(keyCode){
        case 49 :
            userChosen = 'Sten'
            break;
        case 50 :
            userChosen = 'Sax'
            break;
        case 51 :
            userChosen = 'Påse'
            break;

    }
    genDataVal()
    resultat()
    document.write(result);
    document.body.innerHTML += "<br>";
    document.write(`Du valde ${userChosen}`);
    document.body.innerHTML += "<br>";
    document.write(`Datoren valde ${computerChosen}`);
       setTimeout(() => {
           location.reload();
    }, 3000);

})

function genDataVal (){
    if (randomNumber ===1){
        return computerChosen = 'Sten'
    }
    if (randomNumber===2){
        return computerChosen = 'Sax'
    }
    if (randomNumber===3){
        return computerChosen = 'Påse'
    }
}

function resultat (){
    if (computerChosen === userChosen){
        return result = 'Tie'

    }
    else if (computerChosen === 'Sten' && userChosen=== 'Påse'){
        return result = 'Du vann :)'
    }
    else if (computerChosen === 'Sten' && userChosen ==='Sax'){
        return result = 'Hahaha du förlorade'
    }
    else if (computerChosen === 'Påse' && userChosen === 'Sten'){
        return result = 'Hahaha du förlorade'
    }
    else if (computerChosen === 'Påse' && userChosen === 'Sax'){
        return result = 'Du vann :)'
    }
    else if (computerChosen === 'Sax' && userChosen ==='Sten'){
        return result = 'Du vann :)'
    }
    else if (computerChosen === 'Sax' && userChosen ==='Påse'){
        return result = 'Hahaha du förlorade'

    }
}
