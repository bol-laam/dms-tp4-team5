<?php

class produksi {

    private $id_produksi;
    private $id_pesanan;
    private $id_barang;
    private $jumlah_produksi;
    private $lead_time;
    private $proses;
    
	private $conn;

	function __construct($conn) {
		$this->conn = $conn;
	}

    function setId_Produksi($id_produksi) {
        $this->id_produksi = $id_produksi;
    }

    function setId_Pesanan($id_pesanan) {
        $this->id_pesanan = $id_pesanan;
    }

    function setId_Barang($id_barang) {
        $this->id_barang = $id_barang;
    }

    function setJumlah_Produksi($jumlah_produksi) {
        $this->jumlah_produksi = $jumlah_produksi;
    }

    function setLead_Time($lead_time) {
        $this->lead_time = $lead_time;
    }

    function setProses($proses) {
        $this->proses = $proses;
    }

    function getId_Produksi() {
        return $id_produksi;
    }

    function getId_Pesanan() {
        return $id_pesanan;
    }

    function getId_Barang() {
        return $id_barang;
    }

    function getJumlah_Produksi() {
        return $jumlah_produksi;
    }

    function getLead_Time() {
        return $lead_time;
    }

    function getProses() {
        return $proses;
    }

    function LihatPesanan() {
        $sqlLihatPesanan = $this->conn->query("SELECT pemesanan.id_pesanan, pemesanan.nama_pemesan, pemesanan.proses,
											barang.nama_barang, pemesanan.jumlah_pesanan FROM
											barang INNER JOIN pemesanan ON barang.id_barang = pemesanan.id_barang
											WHERE id_pesanan ORDER BY id_pesanan");
        while ($row = $sqlLihatPesanan->fetch_assoc()) {
            $data [] = $row;
        }
        return $data;
    }

    function LihatPesananBelumProses() {
        $sqlLihatPesanan = $this->conn->query("SELECT pemesanan.id_pesanan, pemesanan.nama_pemesan, pemesanan.proses, 
					barang.nama_barang, pemesanan.jumlah_pesanan FROM
					barang INNER JOIN pemesanan ON barang.id_barang = pemesanan.id_barang
					WHERE proses = 0 ORDER BY id_pesanan DESC");
        while ($row = $sqlLihatPesanan->fetch_assoc()) {
            $data [] = $row;
        }
        return $data;
    }

    function findPesananById($id) {
        $sqlProduksi = $this->conn->query("SELECT * FROM pemesanan WHERE id_pesanan = '$id'");
        while ($row = $sqlProduksi->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function ProduksiTambah() {
        $sqlProduksiTambah = $this->conn->query("INSERT INTO produksi VALUES('$this->id_produksi', '$this->id_pesanan', '$this->id_barang', '$this->jumlah_produksi','$this->lead_time')");
        // ini untuk set proses ke 1
        $updateProsesPesanan = $this->conn->query("UPDATE `bullwhip`.`pemesanan` SET `proses` = '1' WHERE `pemesanan`.`id_pesanan` = '$this->id_pesanan';");
    }

    function DaftarProduksi() {
        $sqlDaftarProduksi = $this->conn->query("SELECT
	produksi.id_produksi,
	produksi.id_pesanan,
	pemesanan.nama_pemesan,
	barang.nama_barang,
	pemesanan.jumlah_pesanan,
	produksi.jumlah_produksi,
	produksi.lead_time,
	pemesanan.proses
FROM
	barang
INNER JOIN produksi ON produksi.id_barang = barang.id_barang
INNER JOIN pemesanan ON pemesanan.id_barang = barang.id_barang
AND pemesanan.id_pesanan = produksi.id_pesanan");
        while ($row = $sqlDaftarProduksi->fetch_assoc()) {
            $data [] = $row;
        }
        return $data;
    }

}

?>