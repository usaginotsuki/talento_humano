// valor del radioButton 
function exportPDF(ctrl) {
    var radio = undefined;
        
    ctrl.forEach(element => {
        if(element.checked) radio = element.value;
    });
}

function changeBackground() {
    let registros = document.querySelectorAll('.opts');

    registros.forEach(element => {
        if (element.children[0]) {
            if (element.children[0].className === 'text-1') {
                element.classList.add('table-secondary');
                element.children[0].innerHTML = '';
            }
        }
    });
}

function changeText() {
    let registros = document.querySelectorAll('.opts');

    registros.forEach(element => {
        if (element.children[0]) {
            if (element.children[0].className === 'text-1') {
                element.classList.remove('table-secondary');
                element.children[0].innerHTML = '(O)';
            }
        }
    });
}