document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form');
    const tableBody = document.getElementById('table-body');
    const searchInput = document.getElementById('search');
    let editIndex = null;
    let data = [];

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const age = document.getElementById('age').value;

        if (editIndex !== null) {
            data[editIndex] = { name, age };
            editIndex = null;
        } else {
            data.push({ name, age });
        }

        renderTable();
        form.reset();
    });

    searchInput.addEventListener('input', () => {
        renderTable(searchInput.value);
    });

    function renderTable(searchTerm = '') {
        tableBody.innerHTML = '';
        data
            .filter(item => item.name.toLowerCase().includes(searchTerm.toLowerCase()))
            .forEach((item, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>${item.age}</td>
                    <td class="actions">
                        <button class="edit" onclick="editRow(${index})">Edit</button>
                        <button class="delete" onclick="deleteRow(${index})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
    }

    window.editRow = (index) => {
        const item = data[index];
        document.getElementById('name').value = item.name;
        document.getElementById('age').value = item.age;
        editIndex = index;
    };

    window.deleteRow = (index) => {
        data.splice(index, 1);
        renderTable();
    };
});
