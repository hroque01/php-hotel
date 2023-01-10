<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<!-- ## Todo
Partiamo dall'array nella sezione *Data*, stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

## Bonus
1. aggiungere un `form` ad inizio pagina che tramite una richiesta `GET` permetta di filtrare gli *hotel* che hanno un parcheggio (utilizzare una `checkbox`)
2. aggiungere un secondo campo al form che permetta di filtrare gli *hotel* per *voto* (es: inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

**NOTA**
Deve essere possibile utilizzare entrambi i filtri contemporaneamente (es: ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore). Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli *hotel*. -->

<body>
    <?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    ?>

    <!-- "<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>" -->

    <table class="table">
        <thead class="table-info">
            <tr>
                <th scope="col">Hotel Name</th>
                <th scope="col">Hotel Description</th>
                <th scope="col">Hotel Parking</th>
                <th scope="col">Hotel Vote</th>
                <th scope="col">Hotel distance to center</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($hotels as $singleHotel) {
                $name = $singleHotel['name'];
                $description = $singleHotel['description'];
                $parking = $singleHotel['parking'];
                $vote = $singleHotel['vote'];
                $distanceToCenter = $singleHotel['distance_to_center'];

                if ($parking == true) {
                    $parkingString = "disponibile";
                } else {
                    $parkingString = "non disponibile";
                }

                // echo "<h1> $name </h1>" . "<br>" . $description . "<br>" . "parking: $parkingString" . "<br>" . "vote: $vote /5" . "<br>" . "$distanceToCenter km" . "<br> <br> <hr>";
            
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $name ?>
                    </th>
                    <td>
                        <?php echo $description ?>
                    </td>

                    <td>
                        <?php echo $parkingString ?>
                    </td>

                    <td>
                        <?php echo $vote . "/5" ?>
                    </td>
                    <td>
                        <?php echo $distanceToCenter . ' km' ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>