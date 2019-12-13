

window.onload = main

function main() {
}

function saveButton() {
    const save = document.getElementById("input").value
    const h1 = document.querySelector("h1")


    console.log(save)

    printSave(save, h1)
}

function printSave(save, h1) {
    const date = document.createElement("p")
    date.innerHTML = save

    h1.append(date)
}

function updateButton() {
    const update = document.getElementById("input").value
    input.value = ""
    console.log(update)
}

function deleteButton() {
    const removeH1 = document.querySelector("h1")
    removeH1.innerHTML = ""
    console.log("delete")
}

