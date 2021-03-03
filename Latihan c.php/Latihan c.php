<!-- Nama  : Malik Fajar 
Kelas : IF -C 
Npm : 203040092 -->
<!-- Praktikum : Pemorgraman Web -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .lingkaran {
            width: 80px;
            height: 80px;
            border: 2px solid black;
            border-radius: 50px;
            background-color: salmon;
            
        }
        
        span {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            padding-top: 25px;  
        }
    </style>
</head>
<body>
    <table border="0" cellspacing="0" cellpadding="10">

        <?php for ($baris = 1; $baris <= 3; $baris++) : ?>
                <tr>
                    <?php for ($kolom = 1; $kolom <= $baris; $kolom++) : ?>
                        <td>
                            <div class="lingkaran">
                                <span><?= $baris; ?></span>
                            </div>
                        </td>
                    <?php endfor; ?>
                </tr>
            </>
        <?php endfor; ?>
    </table>
</body>
</html>