
<?php

$app.put('/api/horoscope', (req, res) => {
    res.setHeader("Content-Type", "application/json")
    res.send(horoscope)
})

?>