$("#clients").click(() => {
    $.ajax({
        url: 'app/classes/DataRequest.php',
        method: 'GET',
        data: { action: 'dadosClientes' },
        dataType: 'json',
        success: data => {
            insertTable(data)
        },
        error: err => {
            console.log(err)
        }
    })
})

$("#users").click(() => {
    $.ajax({
        url: 'app/classes/DataRequest.php',
        method: 'GET',
        data: { action: 'dadosUsuarios' },
        dataType: 'json',
        success: data => {
            insertTable(data)
        },
        error: err => {
            console.log(err)
        }
    })
})

$("#vendors").click(() => {
    $.ajax({
        url: 'app/classes/DataRequest.php',
        method: 'GET',
        data: { action: 'dadosFornecedores' },
        dataType: 'json',
        success: data => {
            insertTable(data)
        },
        error: err => {
            console.log(err)
        }
    })
})

function insertTable(data) {

    $('#trHead').html('')
    $('#tableBody').html('')

    $('#trHead').append(
        `
      <th>
        #
      </th>`
    )

    Object.keys(data[0]).forEach(e => {
        $('#trHead').append(
            `<th>
        ${capitalizeFirstLetter(e)}
    </th>`)
    })

    for (let i = 0; i < data.length; i++) {

        const tr = document.createElement('tr');
        const idTd = document.createElement('td');

        idTd.innerText = i + 1;

        tr.append(idTd)

        Object.values(data[i]).forEach(e => {
            const td = document.createElement('td');
            td.innerText = e;

            tr.append(td)
        })
        
        $('#tableBody').append(tr)

    }
}

function capitalizeFirstLetter(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}