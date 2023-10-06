<?php
class bacSi{
    private $id ;
    private $tenBacSi ;
    private $chuyenKhoa;

    /**
     * @param $id
     * @param $tenBacSi
     * @param $chuyenKhoa
     */
    public function __construct($id, $tenBacSi, $chuyenKhoa)
    {
        $this->id = $id;
        $this->tenBacSi = $tenBacSi;
        $this->chuyenKhoa = $chuyenKhoa;
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
    public function getTenBacSi()
    {
        return $this->tenBacSi;
    }

    /**
     * @param mixed $tenBacSi
     */
    public function setTenBacSi($tenBacSi)
    {
        $this->tenBacSi = $tenBacSi;
    }

    /**
     * @return mixed
     */
    public function getChuyenKhoa()
    {
        return $this->chuyenKhoa;
    }

    /**
     * @param mixed $chuyenKhoa
     */
    public function setChuyenKhoa($chuyenKhoa)
    {
        $this->chuyenKhoa = $chuyenKhoa;
    }


}