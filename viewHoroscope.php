

<?php

$app.get('/api/horoscope', (req, res) => {
    res.setHeader("Content-Type", "application/json")
    res.send(horoscope)
})

?>