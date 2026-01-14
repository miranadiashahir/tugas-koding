Kalkulator Penggunaan Elektrik (PHP)

Projek ini merupakan aplikasi web ringkas menggunakan PHP vanila untuk mengira kuasa (Watt), tenaga (kWh) dan jumlah caj elektrik (RM) berdasarkan input pengguna iaitu voltan, arus dan kadar semasa (sen/kWh).

Pengiraan dilakukan menggunakan fungsi kiraElektrik() di dalam fail yang sama.

Objektif

1.Mengira kuasa elektrik dalam Watt

2.Mengira tenaga penggunaan elektrik sejam dan sehari (24 jam)

3.Mengira jumlah caj elektrik berdasarkan kadar semasa (sen/kWh)

Formula yang digunakan

Kuasa (W)
Kuasa = Voltan (V) × Arus (A)

Tenaga (kWh)
Tenaga = (Kuasa × Jam) ÷ 1000

Jumlah Caj (RM)
Jumlah Caj = Tenaga(kWh) × (kadar ÷ 100)

Kadar diberikan dalam sen/kWh, kemudian ditukar kepada Ringgit Malaysia (RM).
