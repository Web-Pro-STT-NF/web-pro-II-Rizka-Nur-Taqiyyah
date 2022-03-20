<?php
   
    function kelulusan($nilai_akhir) {
        if ($nilai_akhir > 55 ){
        return 'LULUS';
        }else {
        return 'TIDAK LULUS';
        }
    }

    function grade($nilai_akhir){
        if ($nilai_akhir>=85){
            return 'A';
        }elseif ($nilai_akhir>=70){
            return 'B';
        }elseif ($nilai_akhir>=56){
            return 'C';
        }elseif ($nilai_akhir>=36){
            return 'D';
        }elseif ($nilai_akhir>=0){
            return 'E';
        }else{
            return 'I';
        }
    }
    
    function predikat($_grade)
    {
        if ($_grade == 'A') {
            return 'Sangat Memuaskan';
        } elseif ($_grade == 'B') {
            return 'Memuaskan';
        } elseif ($_grade == 'C') {
            return 'Cukup';
        } elseif ($_grade == 'D') {
            return 'Kurang';
        } elseif ($_grade == 'E') {
            return 'Sangat Kurang';
        } else {
            return 'Tidak Ada';
        }
    }