

<?php

$app.post('/api/horoscope', (req, res) => {
    horoscope.push(req.body.todo)
    res.send()
})

?>