<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// 1. Tablica zawierająca 20 samochodów
$samochody = [
    [
        'marka' => 'Toyota',
        'model' => 'Corolla',
        'rok' => 2021,
        'cena' => 89000,
        'przebieg' => 45000,
        'paliwo' => 'benzyna',
        'moc' => 132
    ],
    [
        'marka' => 'Volkswagen',
        'model' => 'Golf VII',
        'rok' => 2017,
        'cena' => 65000,
        'przebieg' => 135000,
        'paliwo' => 'diesel',
        'moc' => 150
    ],
    [
        'marka' => 'BMW',
        'model' => '320d',
        'rok' => 2018,
        'cena' => 85000,
        'przebieg' => 120000,
        'paliwo' => 'diesel',
        'moc' => 190
    ],
    [
        'marka' => 'Audi',
        'model' => 'A4',
        'rok' => 2020,
        'cena' => 110000,
        'przebieg' => 80000,
        'paliwo' => 'benzyna',
        'moc' => 150
    ],
    [
        'marka' => 'Skoda',
        'model' => 'Octavia',
        'rok' => 2019,
        'cena' => 78000,
        'przebieg' => 95000,
        'paliwo' => 'diesel',
        'moc' => 150
    ],
    [
        'marka' => 'Ford',
        'model' => 'Focus',
        'rok' => 2016,
        'cena' => 49000,
        'przebieg' => 160000,
        'paliwo' => 'benzyna',
        'moc' => 125
    ],
    [
        'marka' => 'Hyundai',
        'model' => 'i30',
        'rok' => 2023,
        'cena' => 98000,
        'przebieg' => 25000,
        'paliwo' => 'benzyna',
        'moc' => 140
    ],
    [
        'marka' => 'Kia',
        'model' => 'Ceed',
        'rok' => 2020,
        'cena' => 82000,
        'przebieg' => 70000,
        'paliwo' => 'benzyna',
        'moc' => 120
    ],
    [
        'marka' => 'Renault',
        'model' => 'Megane',
        'rok' => 2015,
        'cena' => 42000,
        'przebieg' => 180000,
        'paliwo' => 'diesel',
        'moc' => 110
    ],
    [
        'marka' => 'Opel',
        'model' => 'Astra',
        'rok' => 2018,
        'cena' => 59000,
        'przebieg' => 115000,
        'paliwo' => 'benzyna',
        'moc' => 125
    ],
    [
        'marka' => 'Mercedes-Benz',
        'model' => 'Klasa C',
        'rok' => 2019,
        'cena' => 135000,
        'przebieg' => 90000,
        'paliwo' => 'diesel',
        'moc' => 194
    ],
    [
        'marka' => 'Volvo',
        'model' => 'XC60',
        'rok' => 2017,
        'cena' => 105000,
        'przebieg' => 140000,
        'paliwo' => 'diesel',
        'moc' => 190
    ],
    [
        'marka' => 'Mazda',
        'model' => '6',
        'rok' => 2021,
        'cena' => 115000,
        'przebieg' => 40000,
        'paliwo' => 'benzyna',
        'moc' => 165
    ],
    [
        'marka' => 'Nissan',
        'model' => 'Qashqai',
        'rok' => 2016,
        'cena' => 55000,
        'przebieg' => 150000,
        'paliwo' => 'diesel',
        'moc' => 130
    ],
    [
        'marka' => 'Peugeot',
        'model' => '3008',
        'rok' => 2020,
        'cena' => 99000,
        'przebieg' => 65000,
        'paliwo' => 'benzyna',
        'moc' => 130
    ],
    [
        'marka' => 'Fiat',
        'model' => 'Tipo',
        'rok' => 2019,
        'cena' => 52000,
        'przebieg' => 85000,
        'paliwo' => 'benzyna',
        'moc' => 95
    ],
    [
        'marka' => 'Honda',
        'model' => 'Civic',
        'rok' => 2018,
        'cena' => 76000,
        'przebieg' => 105000,
        'paliwo' => 'benzyna',
        'moc' => 182
    ],
    [
        'marka' => 'Seat',
        'model' => 'Leon',
        'rok' => 2017,
        'cena' => 61000,
        'przebieg' => 125000,
        'paliwo' => 'diesel',
        'moc' => 150
    ],
    [
        'marka' => 'Alfa Romeo',
        'model' => 'Giulia',
        'rok' => 2020,
        'cena' => 125000,
        'przebieg' => 75000,
        'paliwo' => 'diesel',
        'moc' => 190
    ],
    [
        'marka' => 'BMW',
        'model' => 'Seria 5',
        'rok' => 2008,
        'cena' => 39000,
        'przebieg' => 230000,
        'paliwo' => 'diesel',
        'moc' => 235
    ]
];

    //funkcja z wiekiem
    function obliczWiek($rokProdukcji){
        $aktualnyRok = (int)date('Y'); 
    return $aktualnyRok - $rokProdukcji;
    }

    //funckja kategoria na podstawie wieku 
    function kategoriaWiekowa($wiek) {
        if ($wiek <= 3) {
            return 'samochód prawie nowy';
        } elseif ($wiek >= 4 && $wiek <= 7) {
            return 'samochód kilkuletni';
        } elseif ($wiek >= 8 && $wiek <= 15) {
            return 'samochód używany';
        } else {
            return 'samochód zabytkowy lub starszy';
        }
    }
    usort($samochody, function($a, $b) {
        return $a['cena'] <=> $b['cena'];
    });
    
    // Nagłówek komisu
    echo "================================<br>";
    echo "        Komis samochodowe<br>";
    echo "================================<br><br>";
    
    // Wyświetlenie samochodow przy uzyciu foreach
    foreach ($samochody as $auto) {
        $wiek = obliczWiek($auto['rok']);
        $kategoria = kategoriaWiekowa($wiek);
    
        echo $auto['marka'] . " " . $auto['model'] . "<br>";
        echo "Rok produkcji: " . $auto['rok'] . "<br>";
        echo "Cena: " . number_format($auto['cena'], 0, '', ' ') . " zł<br>";
        echo "Przebieg: " . number_format($auto['przebieg'], 0, '', ' ') . " km<br>";
        echo "Paliwo: " . $auto['paliwo'] . "<br>";
        echo "Moc: " . $auto['moc'] . " KM<br>";
        echo "Wiek: " . $wiek . " lat<br>";
        echo "Kategoria: " . $kategoria . "<br>";
        echo "<br>--------------------------------<br><br>";
    }
    
    // Funkcja do wyszukiwania samochodów
    function wyszukajSamochody($samochody, $maksymalnaCena) {
        echo "================================<br>";
        echo " Wyniki wyszukiwania (do " . number_format($maksymalnaCena, 0, '', ' ') . " zł)<br>";
        echo "================================<br>";
    
        $znalezione = false;
        foreach ($samochody as $auto) {
            if ($auto['cena'] <= $maksymalnaCena) {
                echo $auto['marka'] . " " . $auto['model'] . " - " . number_format($auto['cena'], 0, '', ' ') . " zł<br>";
                $znalezione = true;
            }
        }
    
        if (!$znalezione) {
            echo "Nie znaleziono żadnego samochodu spełniającego kryteria.<br>";
        }
        echo "================================<br><br>";
    }
    
    // Funkcje analizy cen
    function najdrozszySamochod($samochody) {
        if (empty($samochody)) return null;
        $najdrozszy = $samochody[0];
        foreach ($samochody as $auto) {
            if ($auto['cena'] > $najdrozszy['cena']) {
                $najdrozszy = $auto;
            }
        }
        return $najdrozszy;
    }
    
    function najtanszySamochod($samochody) {
        if (empty($samochody)) return null;
        $najtanszy = $samochody[0];
        foreach ($samochody as $auto) {
            if ($auto['cena'] < $najtanszy['cena']) {
                $najtanszy = $auto;
            }
        }
        return $najtanszy;
    }
    
    function obliczSredniaCene($samochody) {
        if (empty($samochody)) return 0;
        $suma = 0;
        foreach ($samochody as $auto) {
            $suma += $auto['cena'];
        }
        return $suma / count($samochody);
    }
    
    // Przykladowe wywolanie funkcji
    wyszukajSamochody($samochody, 70000);
    
    // Zbieranie statystyk
    $liczbaSamochodow = count($samochody);
    $sredniaCena = obliczSredniaCene($samochody);
    $autoNajdrozsze = najdrozszySamochod($samochody);
    $autoNajtansze = najtanszySamochod($samochody);
    
    $liczbaDiesel = 0;
    $liczbaPo2020 = 0;
    $liczbaNiskiPrzebieg = 0;
    
    foreach ($samochody as $auto) {
        if (strtolower($auto['paliwo']) === 'diesel') {
            $liczbaDiesel++;
        }
        if ($auto['rok'] > 2020) {
            $liczbaPo2020++;
        }
        if ($auto['przebieg'] < 100000) {
            $liczbaNiskiPrzebieg++;
        }
    }
    
    // Wyswietlenie statystyk komisu
    echo "================================<br>";
    echo "           Statystyki<br>";
    echo "================================<br>";
    echo "Liczba samochodów: " . $liczbaSamochodow . "<br>";
    echo "Średnia cena: " . number_format($sredniaCena, 0, '', ' ') . " zł<br>";
    echo "Najdroższy: " . $autoNajdrozsze['marka'] . " " . $autoNajdrozsze['model'] . " (" . number_format($autoNajdrozsze['cena'], 0, '', ' ') . " zł)<br>";
    echo "Najtańszy: " . $autoNajtansze['marka'] . " " . $autoNajtansze['model'] . " (" . number_format($autoNajtansze['cena'], 0, '', ' ') . " zł)<br>";
    echo "Samochody diesel: " . $liczbaDiesel . "<br>";
    echo "Samochody po 2020 roku: " . $liczbaPo2020 . "<br>";
    echo "Przebieg poniżej 100 000 km: " . $liczbaNiskiPrzebieg . "<br>";
    echo "================================<br>";
    
    ?>
</body>
</html>