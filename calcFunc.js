function display(text){
    let number = text.innerHTML;
    let current = document.getElementById('result').innerHTML;
    if(current == '0')
        document.getElementById('result').innerHTML = number;
    else
        document.getElementById('result').innerHTML += number;
}

function sign(){
    let current = document.getElementById('result').innerHTML;
    if(current > 0)
        document.getElementById('result').innerHTML = '-' + current;
    else if (current < 0)
        document.getElementById('result').innerHTML = current.substr(1);
    else
        document.getElementById('result').innerHTML = '0';

}
function percent() {
    document.getElementById('result').innerHTML =
        document.getElementById('result').innerHTML / 100;
}
