

window.onload = main

function main() {
}

function saveButton() {
    const date = document.getElementById("input").value
    const h1 = document.querySelector("h1")

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
    }).catch((err) => {
        console.log("Error: ", err)
    })
    
}

function updateButton() {
    const update = document.getElementById("input").value
    input.value = ""
    console.log(update)
    update()
}

function update() {
    let url = "./server/updateHoroscope.php"
    let method = "POST"

    formData = new FormData()
    formData.set = ("date", date)

    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
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

    formData = new FormData()
    formData.set = ("date", date)

    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
    }).catch((err) => {
        console.log("Error: ", err)
    })
}
function get() {
    let url = "./server/viewHoroscope.php"
    let method = "GET"

    formData = new FormData()
    formData.set = ("date", "03-21")

    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
    }).catch((err) => {
        console.log("Error: ", err)
    })
}

