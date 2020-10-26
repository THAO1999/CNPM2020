<?php
namespace frontend\models;
use backend\models\Student;
use Yii;
use yii\helpers\Url;
use frontend\models\StudentSkillProfile;
use common\models\CapacityDictionary;
class Students extends Student
{ 
        public function getStudentProfiles($id)
        { 

            if (($model = Students::findOne($id)) !== null) {
                return $model;
            }
        }
        public function getImageStudent($id)
        {
              // lay organization_id doanh nghiep
           $student= Students::findOne($id);
     
           return  Url::base(true). '/../../uploads/'.$student->imageFile; // getpathImg
     
        } 
        public function BeforeSave($insert)
        {
           
                $old_user = Student::findOne(($this->id));
                if ($this->imageFile==null) { // neu != password old thi ma hoa password dc update
                    $this->imageFile= $old_user->imageFile;
                }
            
            
            return parent::beforeSave($insert);
        }
         // lay thong tin student theo id
        public function getStudent($id)
        {
            return  $model=Students::findOne($id);

        }
      
        

}