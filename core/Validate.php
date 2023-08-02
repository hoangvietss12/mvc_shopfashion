<?php
class Validate{

    private $rules = [], $messages = [], $errors = [];

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isPost(){
        if ($this->getMethod()=='post'){
            return true;
        }

        return false;
    }

    public function isGet(){
        if ($this->getMethod()=='get'){
            return true;
        }

        return false;
    }

    public function getFields(){

        $dataFields = [];

        if ($this->isGet()){
            //Xử lý lấy dữ liệu với phương thức get
            if (!empty($_GET)){
                foreach ($_GET as $key=>$value){
                    if (is_array($value)){
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    }else{
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }


        if ($this->isPost()){
            //Xử lý lấy dữ liệu với phương thức post
            if (!empty($_POST)){
                foreach ($_POST as $key=>$value){
                    if (is_array($value)){
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    }else{
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }

        return $dataFields;
    }

    //set rules
    public function setRules($rules=[]){
        $this->rules = $rules;

    }

    //set message
    public function setMessage($messages=[]){
        $this->messages = $messages;
    }

    //Run validate
    public function validate(){

        $this->rules = array_filter($this->rules);

        $checkValidate = true;

        if (!empty($this->rules)){

            $dataFields = $this->getFields();

            foreach ($this->rules as $fieldName=>$ruleItem){
                $ruleItemArr = explode('|', $ruleItem);

                foreach ($ruleItemArr as $rules){

                    $ruleName = null;
                    $ruleValue = null;

                    $rulesArr = explode(':', $rules);

                    $ruleName = reset($rulesArr);

                    if (count($rulesArr)>1){
                        $ruleValue = end($rulesArr);
                    }

                    if ($ruleName=='required'){
                        if (empty(trim($dataFields[$fieldName]))){
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName=='min'){
                        if (strlen(trim($dataFields[$fieldName]))<$ruleValue){
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName=='max'){
                        if (strlen(trim($dataFields[$fieldName]))>$ruleValue){
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName=='email'){
                        if (!filter_var($dataFields[$fieldName], FILTER_VALIDATE_EMAIL)){
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName=='match'){
                        if (trim($dataFields[$fieldName])!=trim($dataFields[$ruleValue])){
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }
                }
            }
        }

        return $checkValidate;
    }

    //get errors
    public function errors($fieldName=''){
        if (!empty($this->errors)){
            if (empty($fieldName)){
                $errorsArr = [];
                foreach ($this->errors as $key=>$error){
                    $errorsArr[$key] = reset($error);
                }
                return $errorsArr;
            }

            return reset($this->errors[$fieldName]);
        }

        return false;
    }

    //set errors
    public function setErrors($fieldName, $ruleName){
        $this->errors[$fieldName][$ruleName] = $this->messages[$fieldName.'.'.$ruleName];
    }
}