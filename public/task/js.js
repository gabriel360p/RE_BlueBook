document.querySelector('a#btn-subtask').addEventListener('click', (() => {

    let value = document.querySelector("div#div-master").style.height;

    value = value.replace("px", '')
    value = parseInt(value)
    value += 100;
    document.querySelector('div#div-master').style.height = "" + `${value}px` + ""

    let div1 = document.createElement("div")
    div1.setAttribute('class', "mb-3");


    let input = document.createElement("input")
    input.setAttribute('class', "form-control")
    input.setAttribute('placeholder', "Subtarefa")
    input.name = "subtask[]";
    input.type = "text";

    div1.appendChild(input)
    document.querySelector('div#div-subtask').appendChild(div1)

}));

