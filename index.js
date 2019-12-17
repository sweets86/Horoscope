

window.onload = main

function main() {
}

function saveButton() {
    const date = document.getElementById("input").value

    console.log(date)

    post(date)

}

function post(date) {

    let url = "./server/addHoroscope.php"
    let method = "POST"

    let formData = new FormData()
    formData.set("date", date)

    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
        if (result) {
            viewHoroscope()
        }
    }).catch((err) => {
        console.log("Error: ", err)
    })

}

function updateButton() {
    const clear = document.getElementById("input").value
    input.value = ""

    update()
}

function update() {
    let url = "./server/updateHoroscope.php"
    let method = "POST"

    fetch(url, {
        method: method,
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
        if (result) {
            viewHoroscope()
        }
    }).catch((err) => {
        console.log("Error: ", err)
    })
}

function deleteButton() {
    const removeH1 = document.querySelector("h1")
    removeH1.innerHTML = ""
    remove()
    console.log("delete")
}

function remove() {
    let url = "./server/deleteHoroscope.php"
    let method = "DELETE"
    
    fetch(url, {
        method: method
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((body) => {
        console.log(body)
    }).catch((err) => {
        console.log("Error: ", err)
    })
}
function viewHoroscope() {
    let url = "./server/viewHoroscope.php"
    let method = "GET"
    
    fetch(url, {
        method: method
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        const h1 = document.querySelector("h1")
        h1.innerHTML = result
        console.log(result)
    }).catch((err) => {
        console.log("Error: ", err)
    })
}


/* let formData = new FormData()
formData.set("date", date) */