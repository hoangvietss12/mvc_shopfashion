<?php
trait QueryBuilder{
    public $tableName = '';
    public $where = '';
    public $operator = '';
    public $selectField = '*';
    public $limit = '';
    public $orderBy = '';
    public $innerJoin = '';
    public function table($table) {
        $this->tableName = $table;
        return $this;
    }

    public function select($field='*') {
        $this->selectField = $field;
        return $this;
    }

    public function limit($number, $offset=0){
        $this->limit = "LIMIT $offset, $number";
        return $this;
    }

    // select 
    public function first(){
        $sqlQuery = "SELECT $this->selectField FROM $this->tableName $this->where $this->limit";

        $query = $this->query($sqlQuery);

        //Reset field
        $this->resetQuery();

        if (!empty($query)){

            return $query->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }

    public function get() {
        $sqlQuery = "SELECT $this->selectField FROM $this->tableName $this->innerJoin $this->where $this->orderBy $this->limit";
        $sqlQuery = trim($sqlQuery);

        $query = $this->query($sqlQuery);

        $this->resetQuery();

        if(!empty($query)) {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        return false;
    }

    // where conditions
    public function where($field, $compare, $value) {
        if(empty($this->where)) {
            $this->operator = ' WHERE ';
        }else {
            $this->operator = ' AND ';
        }
        $this->where.="$this->operator $field $compare '$value'";
        return $this;
    }

    public function orWhere($field, $compare, $value) {
        if(empty($this->where)) {
            $this->operator = ' WHERE ';
        }else {
            $this->operator = ' OR ';
        }
        $this->where.="$this->operator $field $compare '$value'";
        return $this;
    }

    public function whereLike($field, $value){

        if (empty($this->where)){
            $this->operator = ' WHERE ';
        }else{
            $this->operator = ' AND ';
        }
        $this->where.="$this->operator $field LIKE '$value'";

        return $this;
    }

    // oderby conditions
    public function orderBy($field, $type='ASC'){
        $fieldArr = array_filter(explode(',', $field));
        if(!empty($fieldArr) && count($fieldArr)>=2){
            $this->orderBy = "ORDER BY " . implode(', ', $fieldArr);
        }else {
            $this->orderBy = "ORDER BY " .$field." ".$type;
        }

        return $this;
    }

    // join
    public function join($tableName, $relationship) {
        $this->innerJoin.='INNER JOIN ' .$tableName. ' ON ' .$relationship.' ';
        return $this;
    }

    // insert, update, delete
    public function insert($data) {
        $tableName = $this->tableName;
        $insertStatus = $this->insertData($tableName, $data);
        return $insertStatus;
    }

    public function update($data) {
        $whereUpdate = str_replace('WHERE', '', $this->where);
        $whereUpdate = trim($whereUpdate);
        $tableName = $this->tableName;
        $statusUpdate = $this->updateData($tableName, $data, $whereUpdate);
        return $statusUpdate;
    }

    public function delete() {
        $whereDelete = str_replace('WHERE', '', $this->where);
        $whereDelete = trim($whereDelete);
        $tableName = $this->tableName;

        $statusDelete = $this->deleteData($tableName, $whereDelete);
        return $statusDelete;
    }
    
    public function lastId(){
        return $this->lastInsertId();
    }

    public function resetQuery(){
        $this->tableName = '';
        $this->where = '';
        $this->operator = '';
        $this->selectField = '*';
        $this->limit = '';
        $this->orderBy = '';
        $this->innerJoin = '';
    }
}