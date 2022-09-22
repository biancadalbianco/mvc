<?php

class HomeModel extends MainModel{ 

    public function listAno($dateStart, $dateEnd){
        $sql="SELECT value, date FROM moviment WHERE (date BETWEEN '2022-01-01 23:59:59' AND '2022-12-12 23:59:59') order by date";
		$retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
		}
		return $resultado;
    }
    public function listMes($dateStart, $dateEnd){
        $sql="SELECT value, date FROM moviment WHERE (date BETWEEN '2022-10-01 23:59:59' AND '2022-10-31 23:59:59') order by date";
		$retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
		}
		return $resultado;
    }
    public function listDia($dateStart, $dateEnd){
        $sql="SELECT value, date FROM moviment WHERE (date BETWEEN '2022-05-02 00:00:00' AND '2022-05-02 23:59:59') order by date";
		$retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
		}
		return $resultado;
    }

    public function cash_balance(){
        $sql = "SELECT sum(value) AS input FROM moviment WHERE type='input'";
        $result=$this->db->query($sql, null);
        $input=$result->fetch(PDO::FETCH_ASSOC);
        $sql = "SELECT sum(value) AS output FROM moviment WHERE type='output'";
        $result=$this->db->query($sql, null);
        $output=$result->fetch(PDO::FETCH_ASSOC);
        return $input['input']-$output['output'];
    }   

    public function input(){
        $sql = "SELECT sum(value) AS input FROM moviment WHERE type='input'";
        $result=$this->db->query($sql, null);
        $input=$result->fetch(PDO::FETCH_ASSOC);
        return $input ['input'];
    }

    public function output(){
        $sql = "SELECT sum(value) AS output FROM moviment WHERE type='output'";
        $result=$this->db->query($sql, null);
        $output=$result->fetch(PDO::FETCH_ASSOC);
        return $output ['output'];
    }


    



}