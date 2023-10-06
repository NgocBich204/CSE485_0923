<?php
class benhNhan{
    private $id ;
    private $tenBenhNhan;
    private $ngayKham;
    private $trieuChung;
    private $idBacSi;

    /**
     * @param $id
     * @param $tenBenhNhan
     * @param $ngayKham
     * @param $trieuChung
     * @param $idBacSi
     */
    public function __construct($id, $tenBenhNhan, $ngayKham, $trieuChung, $idBacSi)
    {
        $this->id = $id;
        $this->tenBenhNhan = $tenBenhNhan;
        $this->ngayKham = $ngayKham;
        $this->trieuChung = $trieuChung;
        $this->idBacSi = $idBacSi;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTenBenhNhan()
    {
        return $this->tenBenhNhan;
    }

    /**
     * @param mixed $tenBenhNhan
     */
    public function setTenBenhNhan($tenBenhNhan)
    {
        $this->tenBenhNhan = $tenBenhNhan;
    }

    /**
     * @return mixed
     */
    public function getNgayKham()
    {
        return $this->ngayKham;
    }

    /**
     * @param mixed $ngayKham
     */
    public function setNgayKham($ngayKham)
    {
        $this->ngayKham = $ngayKham;
    }

    /**
     * @return mixed
     */
    public function getTrieuChung()
    {
        return $this->trieuChung;
    }

    /**
     * @param mixed $trieuChung
     */
    public function setTrieuChung($trieuChung)
    {
        $this->trieuChung = $trieuChung;
    }

    /**
     * @return mixed
     */
    public function getIdBacSi()
    {
        return $this->idBacSi;
    }

    /**
     * @param mixed $idBacSi
     */
    public function setIdBacSi($idBacSi)
    {
        $this->idBacSi = $idBacSi;
    }


}
