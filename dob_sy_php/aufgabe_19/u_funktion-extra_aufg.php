<?php
function generateTableEntry($developerName) {
    // Erstelle eine Tabelle mit Rahmen
    echo '<table border="1">';
    echo '<tr>';
    
    // Füge eine Zelle mit dem Entwicklernamen hinzu
    echo '<td style="width: 150px; height: 50px; text-align: center; border: 1px solid black;">';
    echo $developerName;
    echo '</td>';
    
    echo '</tr>';
    echo '</table>';
}

// Teste die Funktion mit verschiedenen Entwicklernamen
generateTableEntry("Entwickler 1");
generateTableEntry("Entwickler 2");
generateTableEntry("Entwickler 3");