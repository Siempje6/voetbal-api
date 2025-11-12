const API_URL = 'http://127.0.0.1:8000/api'; // Pas aan als je Railway URL gebruikt

async function fetchOverzicht(type) {
    const res = await fetch(`${API_URL}/${type}`);
    const data = await res.json();
    const lijst = document.getElementById('lijst');
    lijst.innerHTML = '';
    data.forEach(item => {
        const li = document.createElement('li');
        li.innerHTML = `
            ${item.naam} 
            <button onclick="window.location.href='detail.html?type=${type}&id=${item.id}'">Bekijk</button>
            <button onclick="window.location.href='edit.html?type=${type}&id=${item.id}'">Bewerk</button>
            <button onclick="deleteItem('${type}', ${item.id})">Verwijder</button>
        `;
        lijst.appendChild(li);
    });
}

function createFormFields(type, item = {}) {
    const fields = document.getElementById('fields');
    fields.innerHTML = '';
    if (type === 'clubs') {
        fields.innerHTML = `
            <label>Naam: <input name="naam" value="${item.naam || ''}" required></label><br>
            <label>Stad: <input name="stad" value="${item.stad || ''}" required></label>
        `;
    } else {
        fields.innerHTML = `
            <label>Naam: <input name="naam" value="${item.naam || ''}" required></label><br>
            <label>Leeftijd: <input name="leeftijd" type="number" value="${item.leeftijd || ''}" required></label><br>
            <label>Positie: <input name="positie" value="${item.positie || ''}" required></label>
        `;
    }
}

async function addItem(type) {
    const form = document.getElementById('addForm');
    const data = Object.fromEntries(new FormData(form).entries());
    await fetch(`${API_URL}/${type}`, {
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify(data)
    });
    window.location.href = `overzicht.html?type=${type}`;
}

async function loadItem(type, id) {
    const res = await fetch(`${API_URL}/${type}/${id}`);
    const item = await res.json();
    createFormFields(type, item);
}

async function editItem(type, id) {
    const form = document.getElementById('editForm');
    const data = Object.fromEntries(new FormData(form).entries());
    await fetch(`${API_URL}/${type}/${id}`, {
        method: 'PUT',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify(data)
    });
    window.location.href = `overzicht.html?type=${type}`;
}

async function loadDetail(type, id) {
    const res = await fetch(`${API_URL}/${type}/${id}`);
    const item = await res.json();
    const div = document.getElementById('detail');
    div.innerHTML = JSON.stringify(item, null, 2);
}

async function deleteItem(type, id) {
    if (!confirm('Weet je het zeker?')) return;
    await fetch(`${API_URL}/${type}/${id}`, { method: 'DELETE' });
    fetchOverzicht(type);
}
