# Horoscope
Horoskopet är byggt av REST api:er med fem olika PHP-filer, Javascript-fil,  CSS-fil och HTML-fil.
När man väljer ett datum i input-fältet och trycker på "Save-knappen" begärs horoskopet för det datumet via ett POST anrop och sparas i SESSION, likaså när man trycker på "Update-knappen" och uppdaterar till ett annat datum. Via GET anrop skrivs det sparade horoskopet i SESSION ut stjärntecknet i output och via DELETE anrop tas det sparade horoskopet bort från SESSION.
