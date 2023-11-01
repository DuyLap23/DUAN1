<?php
class QuestionModel extends BaseModel {
    const TABLE="questions";
    public function getAll($select,$orderBy=[],$limit=10){
        return $this->all($select,self::TABLE,$orderBy,$limit);
    }
}