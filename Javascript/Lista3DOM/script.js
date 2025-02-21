var div = document.createElement('div');
div.id = 'area';
a.style.height = '300px';
a.style.width = '300px';
div.style.backgroundColor = 'green';
document.body.appendChild(div)

var a = window.document.getElementById('area')
a.addEventListener('mouseenter', entrar)
a.addEventListener('mouseout', sair)
        function entrar(){
        a.innerText = 'Entrou!'
        a.style.background = 'red';
        a.style.height = '400px';
        a.style.width = '400px';
    }
    function sair()
    {
        a.innerText = 'Saiu!'
        a.style.background = 'blue';
        a.style.height = '300px';   
        a.style.width = '300px';
}