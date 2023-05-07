<?php

class pemesanan {

    private $id_pesanan;
    private $nama_pemesan;
    private $id_barang;
    private $jumlah_pesanan;
	private $satuan;
	private $konversi;
	private $lead_time;
	private $pakai;
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function setId_Pesanan($id_pesanan) {
        $this->id_pesanan = $id_pesanan;
    }

    function setNama_Pemesan($nama_pemesan) {
        $this->nama_pemesan = $nama_pemesan;
    }

    function setId_Barang($id_barang) {
        $this->id_barang = $id_barang;
    }

    function setJumlah_Pesanan($jumlah_pesanan) {
        $this->jumlah_pesanan = $jumlah_pesanan;
    }
		
	function setLead_Time($lead_time) {
        $this->lead_time = $lead_time;
    }
	function setPakai($pakai) {
        $this->pakai = $pakai;
    }

    function getId_Pesanan() {
        return $id_pesanan;
    }

    function getNama_Pemesan() {
        return $nama_pemesan;
    }

    function getId_Barang() {
        return $id_barang;
    }

    function getJumlah_Pesanan() {
        return $jumlah_pesanan;
    }
	
	function getSatuan() {
        return $jumlah_pesanan;
    }
	function getLead_Time() {
        return $lead_time;
    }
	function getPakai() {
        return $pakai;
    }

    function PesananTambah() {
        $sqlPesananTambah = $this->conn->query("INSERT INTO pemesanan VALUES ('$this->id_pesanan', '$this->nama_pemesan', '$this->id_barang', '$this->jumlah_pesanan', '$this->lead_time','$this->pakai')");
    }

    function PesananList() {
        $sqlPesananList = $this->conn->query("SELECT
									pemesanan.id_pesanan,
									pemesanan.nama_pemesan,
									barang.nama_barang,
									pemesanan.jumlah_pesanan,
									barang.satuan,
									barang.konversi,
									pemesanan.lead_time,
									pemesanan.pakai,
									pemesanan.jumlah_pesanan * barang.konversi AS 'jumlah_total'
									FROM pemesanan JOIN barang USING (id_barang)");
        while ($row = $sqlPesananList->fetch_assoc()) {
            $data [] = $row;
        }
        return $data;
    }
	function GunaBarang ()
	{
		$sqlGunaBarang = $this->conn->query ("SELECT * FROM pemesanan");
		while ($row = $sqlGunaBarang->fetch_assoc())
			{
				$data [] = $row;
			}
	}
	

    function PakaiBarangById($id) 
	{
        $sqlPakaiBarang = $this->conn->query("SELECT * FROM pemesanan WHERE id_pesanan = '$id'");
        while ($row = $sqlPakaiBarang->fetch_assoc()) {
            $data [] = $row;
        }
        return $data;
    }
	function PakaiBarangUpdate ()
	{
		$sqlPakaiUpdate = $this->conn->query ("UPDATE pemesanan SET pakai = '$this->pakai' WHERE id_pesanan = '$this->id_pesanan'");
	}

}

?>