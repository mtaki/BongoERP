<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_account_posting_type".
 *
 * @property string $Doc_type_code
 * @property string $Doc_type_code_description
 */
class AccountPostingType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_account_posting_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Doc_type_code', 'Doc_type_code_description'], 'required'],
            [['Doc_type_code'], 'string', 'max' => 3],
            [['Doc_type_code_description'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Doc_type_code' => Yii::t('app', 'Doc Type Code'),
            'Doc_type_code_description' => Yii::t('app', 'Doc Type Code Description'),
        ];
    }

    /**
     * @inheritdoc
     * @return AccountPostingTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccountPostingTypeQuery(get_called_class());
    }
}
