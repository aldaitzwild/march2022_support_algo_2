let tds = document.getElementsByTagName('td');
let player = 'X';

for (const td of tds) {
    td.addEventListener('click', function () {
        td.innerHTML = player;

        if(player == 'X')
            player = 'O';
        else
            player = 'X';
    });
}