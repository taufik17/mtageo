<?php
/**
 * Created by PhpStorm.
 * User: Yulianto Pambudi
 * Date: 4/22/2019
 * Time: 12:13 AM
 */

class Model_PermohonanBimbingan extends CI_Model
{
    public function terima($id,$value){
        $sql="update tugas_akhir SET status_ta ='1', note = '$value'  WHERE id_ta='$id' ";
        return $this->db->query($sql);
    }
}
