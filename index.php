<?php 

// Fungsi kiraan dimasukkan dalam fail yang sama
function kiraElektrik($voltan, $arus, $jam, $kadar) 
{
    $power = $voltan * $arus;
    $energy = ($power * $jam) / 1000;
    $total = $energy * ($kadar / 100);

    return [
        'power'  => $power,
        'energy' => $energy,
        'total'  => $total
    ];
}

?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Elektrik</title>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container mt-5">

<h3 class="mb-4">Kalkulator Penggunaan Elektrik</h3>

<form method="post">
    <div class="form-group">
        <label>Voltan (V)</label>
        <input type="number" step="any" name="voltan" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Arus (A)</label>
        <input type="number" step="any" name="arus" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Kadar (sen/kWh)</label>
        <input type="number" step="any" name="kadar" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Kira</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $voltan = $_POST['voltan'];
    $arus   = $_POST['arus'];
    $kadar  = $_POST['kadar'];

    $sejam  = kiraElektrik($voltan, $arus, 1, $kadar);
    $sehari = kiraElektrik($voltan, $arus, 24, $kadar);
?>
<hr>

<h4>Keputusan</h4>

<p><strong>Kuasa:</strong> <?php echo $sejam['power']; ?> Watt</p>

<h5>Penggunaan Sejam</h5>
<ul>
    <li>Tenaga: <?php echo number_format($sejam['energy'], 4); ?> kWh</li>
    <li>Jumlah Caj: RM <?php echo number_format($sejam['total'], 2); ?></li>
</ul>

<h5>Penggunaan Sehari (24 Jam)</h5>
<ul>
    <li>Tenaga: <?php echo number_format($sehari['energy'], 4); ?> kWh</li>
    <li>Jumlah Caj: RM <?php echo number_format($sehari['total'], 2); ?></li>
</ul>

<?php } ?>

</body>
</html>
