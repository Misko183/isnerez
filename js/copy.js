const tooltip = document.querySelector(".tooltip")

function copyText(htmlElement){
    if (!htmlElement){
       return; 
    }

    let elementText = htmlElement.innerText;
    let inputElement = document.createElement('input');
    inputElement.setAttribute('value', elementText);
    document.body.appendChild(inputElement);
    inputElement.select();
    document.execCommand('copy');
    inputElement.parentNode.removeChild(inputElement);
}

document.querySelector('#btnCopy1').onclick = function (){

    copyText(document.querySelector('#copyText1'));
    tooltip.classList.add("show");

}

document.querySelector('#btnCopy2').onclick = function (){

    copyText(document.querySelector('#copyText2'));
    tooltip.classList.add("show");
}

document.querySelector('#btnCopy3').onclick = function (){

    copyText(document.querySelector('#copyText3'));
    tooltip.classList.add("show");
}