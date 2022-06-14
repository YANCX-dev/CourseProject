let dest = [];

async function getDest() {
    let response = await fetch('/cruises/all');
    let data = await response.json();

    return data;
}

function sortArray(array, property) {
    array.sort((item1, item2) => {
        if (item1[property] > item2[property]) return 1;
        if (item2[property] > item1[property]) return -1;
        return 0;
    })
}

async function loadDestination() {

    dest = await getDest();

    return dest;
}


async function start() {
    dest = loadDestination();
    renderTable(dest);
}

function createRow({id,departurePoint, destination, departureTime, departureDate, arrivalTime, arrivalDate, ticketPrice}) {
    return `
    <tr>
        <th scope="col">${departurePoint}</th>
        <td>${departureDate}</td>
        <td>${departureTime}</td>
        <td>${destination}</td>
        <td>${arrivalDate}</td>
        <td>${arrivalTime}</td>
        <td>${ticketPrice}</td>
        <td><a href="/order/${id}" class="btn btn-dark">Купить</a></td>
    </tr>`
}

function renderTable(dest) {
    let table = document.querySelector("#tableCruise");
    let result = '';
    dest.forEach((dest) => {
        result += createRow(dest);
    })
    table.innerHTML = result;
}


let destFlag = true;
let ArrTimeFlag = true;
let DepTimeFlag = true;

document.querySelector('#sortByDest').addEventListener('click', (e) => {
    e.target.innerHTML = destFlag ? 'Sort &darr;' : 'Sort &uarr;';
    destFlag ? sortArray(dest, 'destination') : dest.reverse();
    renderTable(dest);
    destFlag = !destFlag;
});

document.querySelector('#sortByArrTime').addEventListener('click', (e) => {
    e.target.innerHTML = ArrTimeFlag ? 'Sort &darr;' : 'Sort &uarr;';
    ArrTimeFlag ? sortArray(dest, 'departureTime') : dest.reverse();
    renderTable(dest);
    ArrTimeFlag = !ArrTimeFlag;
});

document.querySelector('#sortByDepTime').addEventListener('click', (e) => {
    e.target.innerHTML = DepTimeFlag ? 'Sort &darr;' : 'Sort &uarr;';
    DepTimeFlag ? sortArray(dest, 'arrivalTime') : dest.reverse();
    renderTable(dest);
    DepTimeFlag = !DepTimeFlag;
});
start();
