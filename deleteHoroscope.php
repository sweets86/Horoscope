

<?php

app.delete('/api/horoscope', (req, res) => {

let indexToRemove

horoscopes.forEach((horoscope, index) => {
    if (horoscope == req.body.horoscope) {
        indexTORemove = index
        return
    }
    horoscopes.splice(indexToRemove, 1)
    res.status(200)
    res.send()
})


})

?>