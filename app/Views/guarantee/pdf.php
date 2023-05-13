<?= $this->extend('template/page_admin'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">
        <div class="text-center">
            <button type="button" class="btn btn-danger">PDF</button>
        </div>
    </div>
</div>
<?php
function parse(string $string)
{
    $result = array();
    preg_match_all('/<(.*)>(.*?)<\/\1>|([^<>]+)/', $string, $matches, PREG_SET_ORDER);
    foreach ($matches as $mc) {
        $style = array(
            'b' => 'bold',
            'i' => 'italics',
            'bi' => 'bolditalics'
        );
        if ($mc[1] == '') {
            $result[] = $mc[3];
        } elseif (array_key_exists($mc[1], $style)) {
            $result[] = array('text' => $mc[2], $style[$mc[1]] => true);
        } else {
            $result[] = $mc[0];
        }
    }
    // return $result;
    return array('text' => $result);
}

$fonts = array(
    'TimesNewRoman' => [
        'normal' => base_url('asset/font/times.ttf'),
        'bold' => base_url('asset/font/timesbd.ttf'),
        'italics' => base_url('asset/font/timesi.ttf'),
        'bolditalics' => base_url('asset/font/timesbi.ttf')
    ]
);
$docs = array(
    'pageOrientation' => 'potrait',
    'pageSize' => 'LETTER',
    'pageMargins' => array(65, 86, 65, 10),
    'defaultStyle' => array(
        'font' => 'TimesNewRoman',
        'fontSize' => 9
    )
);
$docs['content'] = array(
    array(
        'text' => 'JAMINAN PELAKSANAAN',
        'alignment' => 'center',
        'fontSize' => 12,
        'bold' => true,
        'margin' => [0, 0, 0, 20]
    ),
    array(
        'text' => 'Nomor Jaminan : 1234567',
        'margin' => [0, 0, 0, 10]
    ),
    array(
        'ol' => array(
            'Dengan ini dinyatakan, bahwa kami CV. GARDENIA BAYANGKARA, Jl. Sonokembang Raya No. 15 A RT 07 RW 011 Kel. Bakti Jaya Kec. Sukmajaya Depok, Jawa Barat sebagai Penyedia selanjutnya disebut TERJAMIN dan PT. ASURANSI MAXIMUS GRAHA PERSADA Tbk, Kantor Cabang Bogor, Ruko VIP No. 88 B Jl. Raya Pajajaran, Bogor 16128 sebagai Penjamin selanjutnya disebut sebagai PENJAMIN bertanggung jawab dan dengan tegas terikat pada PEJABAT PEMBUAT KOMITMEN KORPS BRIMOB POLRI, Jl. Komjen Pol M Jasin Kelapa Dua Depok sebagai Pemilik Pekerjaan selanjutnya disebut PENERIMA JAMINAN atas uang sejumlah Rp. 99,940,000.00 (Sembilan Puluh Sembilan Juta Sembilan Ratus Empat Puluh Ribu Rupiah).'
        ),
        'alignment' => 'justify',
        'lineHeight' => 1.3
    ),
    array(
        'layout' => 'noBorders',
        'table' => array(
            'body' => array(
                ['1.', 'Dengan ini dinyatakan, bahwa kami CV. GARDENIA BAYANGKARA, Jl. Sonokembang Raya No. 15 A RT 07 RW 011 Kel. Bakti Jaya Kec. Sukmajaya Depok, Jawa Barat sebagai Penyedia selanjutnya disebut TERJAMIN dan PT. ASURANSI MAXIMUS GRAHA PERSADA Tbk, Kantor Cabang Bogor, Ruko VIP No. 88 B Jl. Raya Pajajaran, Bogor 16128 sebagai Penjamin selanjutnya disebut sebagai PENJAMIN bertanggung jawab dan dengan tegas terikat pada PEJABAT PEMBUAT KOMITMEN KORPS BRIMOB POLRI, Jl. Komjen Pol M Jasin Kelapa Dua Depok sebagai Pemilik Pekerjaan selanjutnya disebut PENERIMA JAMINAN atas uang sejumlah Rp. 99,940,000.00 (Sembilan Puluh Sembilan Juta Sembilan Ratus Empat Puluh Ribu Rupiah).'],
                ['2.', 'Maka kami <b>TERJAMIN</b> dan <b>PENJAMIN</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana TERJAMIN tidak memenuhi kewajiban dalam melaksanakan Pekerjaan Pengadaan Makan dan Ekstra Fooding Pelatihan Pertempuran Hutan (Jungle Warfare) Gelombang I dan II di Satlat Brimob T.A. 2023 sebagaimana ditetapkan berdasarkan Surat Penunjukan Penyedia Barang / Jasa No.: B/31/II/LOG.4.21./2023 Tanggal 9 Februari 2023']
            )
        )
    )
);
?>

<?= $this->endSection(); ?>
<?= $this->section('jscript'); ?>
<script>
    pdfMake.fonts = <?= json_encode($fonts); ?>;
    $(function() {
        $('button.btn-danger').click(function() {
            pdfMake.createPdf(<?= json_encode($docs); ?>).open();
        });
    });
</script>
<?= $this->endSection(); ?>