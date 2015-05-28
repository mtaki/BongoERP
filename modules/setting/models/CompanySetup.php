<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_admin_company_setup".
 *
 * @property string $Parameter_ID
 * @property string $CompanyName
 * @property string $Company_abreviation
 * @property string $PostalAddress
 * @property string $Residence
 * @property string $PhoneAndFax
 * @property string $EmailAndWebsite
 * @property string $CompanyLogo
 * @property string $ReportFooter
 * @property string $default_currency
 * @property double $current_value_per_share
 * @property string $loan_computation_method
 * @property integer $monthly_rate_for_Basic_method
 * @property string $chairman
 * @property string $secretary
 * @property string $treasurer
 */
class CompanySetup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_admin_company_setup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Parameter_ID', 'CompanyName', 'Company_abreviation', 'PostalAddress', 'Residence', 'PhoneAndFax', 'EmailAndWebsite', 'CompanyLogo', 'ReportFooter'], 'required'],
            [['current_value_per_share'], 'number'],
            [['monthly_rate_for_Basic_method'], 'integer'],
            [['Parameter_ID', 'chairman', 'secretary', 'treasurer'], 'string', 'max' => 20],
            [['CompanyName', 'CompanyLogo'], 'string', 'max' => 50],
            [['Company_abreviation'], 'string', 'max' => 30],
            [['PostalAddress', 'Residence', 'PhoneAndFax', 'ReportFooter'], 'string', 'max' => 60],
            [['EmailAndWebsite'], 'string', 'max' => 100],
            [['default_currency'], 'string', 'max' => 10],
            [['loan_computation_method'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Parameter_ID' => Yii::t('app', 'Parameter  ID'),
            'CompanyName' => Yii::t('app', 'Company Name'),
            'Company_abreviation' => Yii::t('app', 'Company Abreviation'),
            'PostalAddress' => Yii::t('app', 'Postal Address'),
            'Residence' => Yii::t('app', 'Residence'),
            'PhoneAndFax' => Yii::t('app', 'Phone And Fax'),
            'EmailAndWebsite' => Yii::t('app', 'Email And Website'),
            'CompanyLogo' => Yii::t('app', 'Company Logo'),
            'ReportFooter' => Yii::t('app', 'Report Footer'),
            'default_currency' => Yii::t('app', 'Default Currency'),
            'current_value_per_share' => Yii::t('app', 'Current Value Per Share'),
            'loan_computation_method' => Yii::t('app', 'Loan Computation Method'),
            'monthly_rate_for_Basic_method' => Yii::t('app', 'Monthly Rate For  Basic Method'),
            'chairman' => Yii::t('app', 'Chairman'),
            'secretary' => Yii::t('app', 'Secretary'),
            'treasurer' => Yii::t('app', 'Treasurer'),
        ];
    }

    /**
     * @inheritdoc
     * @return CompanySetupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanySetupQuery(get_called_class());
    }
}
