<?php

class Perusahaan
{

    final function bos()
    {
        return "CEO";
    }

}

class Karyawan extends Perusahaan
{

    /**
     * Error
     * @return string
     */
//    public function bos()
//    {
//        return "MANAGER";
//    }

}

var_dump((new Karyawan())->bos());
