let mymap = L.map('map').setView([44.532741, 18.699754], 16);
L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?access-token=FocuBwiQ14IcUAP56snE5exm3R4iC9vWnNajYEVTcHzAWu5SblkEpqEIbbeMuK5H', {}).addTo(mymap);

let marker = L.marker([44.532741, 18.699754]).addTo(mymap);