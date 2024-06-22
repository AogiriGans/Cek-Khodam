<!DOCTYPE html>
<html>
<head>
    <title>Hasil Cek Khodam</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hasil Cek Khodam</h2>
        <?php
        $nama_pengguna = $_POST['nama'];
        $daftar_khodam = array("Gajah Gembrot", "Kucing Kepo", "Ayam Geprek Bensu", "Bebek Gosip", "Kuda Poni Mager",
	"Singa Galau", "Zebra Zonk", "Sapi Santuy", "Kambing Gaul", "Kelinci Klepto",
	"Monyet Gabut", "Unta Overthinking", "Jerapah Jenius", "Panda Pemalas", "Beruang Baper",
	"Harimau Halu", "Serigala Salting", "Kanguru Kudet", "Koala Koplak", "Ular Julid",
	"Kadal Kece", "Kura-kura Kepo", "Bunglon Bucin", "Iguana Introvert", "Komodo Kemayu",
	"Anjing Agresif", "Kucing Belagu", "Hamster Hedon", "Kelinci Playboy", "Marmut Miskin",
	"Burung Hantu Baper", "Merpati Bucin", "Elang Mokondo", "Gagak Galau", "Burung Unta Overthinking",
	"Ikan Lele Lapar", "Ikan Mas Manja", "Ikan Cupang Centil", "Ikan Hiu Halu", "Ikan Pari Pemalu",
	"Udang Galau", "Kepiting Kepo", "Lobster Lebay", "Cumi-cumi Cemburu", "Gurita Grumpy",
	"Lebah Baper", "Semut Santuy", "Kupu-kupu Kemayu", "Belalang Bucin", "Capung Centil",
	"Nyamuk Nakal", "Lalat Lebay", "Kecoa Kepo", "Jangkrik Jones", "Kumbang Koplak",
	"Ulat Bulu Baper", "Belut Bucin", "Lintah Mokondo", "Cacing Galau", "Bekicot Baper",
	"Katak Gaul", "Kodok Kepo", "Cicak Centil", "Tokek Tukang Tidur", "Kadal Pemalas",
	"Laba-laba Lucu", "Kalajengking Kece", "Kelabang Klepto", "Lipan Lenjeh", "Kucing Oren Barbar",
	"Anjing Pug Pemalas", "Hamster Gemoy", "Burung Beo Bawel", "Monyet Usil", "Kura-kura Lamban",
	"Singa Pemberani", "Zebra belang-bentong", "Sapi Gendut", "Kambing Kurus", "Kelinci Imut",
	"Monyet Nakal", "Unta Bongkok", "Jerapah Tinggi", "Panda Lucu", "Beruang Coklat",
	"Harimau Loreng", "Serigala Liar", "Kanguru Melompat", "Koala Tidur", "Ular Berbisa",
	"Kadal Hijau", "Kura-kura Tua", "Bunglon Berubah Warna", "Iguana Besar", "Komodo Langka",
	"Anjing Lucu", "Kucing Manja", "Hamster Kecil", "Burung Cantik", "Monyet Lucu", "Udin Sleman", "Asgar Bekasi", "Narji Depok", "Jarwo Klaten", "Sule Subang",
	"Parto Purwokerto", "Nunung Nganjuk", "Andre Taulany Tangerang", "Wendy Cagur Cianjur", "Denny Sumargo Sragen",
	"Komeng Kuningan", "Tessy Tegal", "Tarzan Tabanan", "Doyok Demak", "Kadir Kudus",
	"Mandra Magelang", "Bolot Bogor", "Gogon Grobogan", "Sapri Salatiga", "Azis Gagap Garut",
	"Nunung Nurbaiti Ngawi", "Parto Patrio Pati", "Wendy Walters Wonogiri", "Sule Sutisna Sumedang", "Andre Stinky Salatiga",
	"Komeng Kumis Klaten", "Tessy Srimulat Surabaya", "Tarzan Tarzan Srimulat Solo", "Doyok Sudarmaji Depok", "Kadir Mubarak Kediri",
	"Mandra Naih Magelang", "Bolot Bintang Betawi Bekasi", "Gogon Margono Gresik", "Sapri Pantun Purworejo", "Azis Stuttering Garut",
	"Nunung Alvi Oktaviani Ngawi", "Parto Tegalrejo Pati", "Wendy Wilson Wonosobo", "Sule Priatna Subang", "Andre Hariyanto Tangerang",
	"Komeng Spontan Klaten", "Tessy Wahyuni Surabaya", "Tarzan Srimulat Solo", "Doyok Otoy Depok", "Kadir Asmorom Kediri",
	"Mandra Anggara Magelang", "Bolot Jim Betawi Bekasi", "Gogon Srimulat Gresik", "Sapri Metro Purworejo", "Azis Nurjaman Garut",
	"Ucup Surabayan", "Asep Bandung", "Mamat Tasikmalaya", "Dadang Sukabumi", "Entis Sumedang",
	"Mimin Majalengka", "Euis Garut", "Oom Karawang", "Cecep Ciamis", "Otong Indramayu",
	"Ucup Klaten", "Asep Brebes", "Mamat Tegal", "Dadang Cirebon", "Entis Banjar",
	"Mimin Subang", "Euis Purwakarta", "Oom Kuningan", "Cecep Majalengka", "Otong Sukabumi",
	"Ujang Banten", "Anah Bogor", "Emak Ciamis", "Abah Karawang", "Kang Emed Sumedang",
	"Neng Iis Garut", "Mang Udin Cianjur", "Bi Inah Sukabumi", "Deni Bandung", "Icang Tasikmalaya",
	"Ujang Bekasi", "Anah Depok", "Emak Tangerang", "Abah Bogor", "Kang Emed Cianjur",
	"Neng Iis Subang", "Mang Udin Purwakarta", "Bi Inah Majalengka", "Deni Sumedang", "Icang Garut",
	"Komar Sukabumi", "Jajang Cimahi", "Odah Bandung", "Acong Garut", "Eman Sukabumi",
	"Iroh Cianjur", "Udin Majalengka", "Esih Subang", "Onah Purwakarta", "Amat Karawang");
        $khodam_random = $daftar_khodam[array_rand($daftar_khodam)];

        echo "<p>Selamat " . $nama_pengguna . " Kamu Memiliki Khodam " . $khodam_random . " </p>";
        ?>
    </div>
</body>
</html>