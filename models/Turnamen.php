<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "turnamen".
 *
 * @property integer $team_id
 * @property integer $user_id
 * @property string $nama_captain
 * @property integer $tlp_captain
 * @property string $gender_captain
 * @property string $nama_1
 * @property integer $tlp_1
 * @property string $gender_1
 * @property string $nama_2
 * @property integer $tlp_2
 * @property string $gender_2
 * @property string $nama_3
 * @property integer $tlp_3
 * @property string $gender_3
 * @property string $created_date
 *
 * @property User $user
 */
class Turnamen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'turnamen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_captain', 'tlp_captain', 'nama_1', 'tlp_1', 'nama_2', 'tlp_2', 'nama_3', 'tlp_3','nama_team'], 'required'],
            [['team_id', 'user_id'], 'integer'],
            [['tlp_captain', 'tlp_1', 'tlp_2', 'tlp_3'],'number'],
           
            [['nama_captain', 'nama_1', 'nama_2', 'nama_3','nama_team'], 'string', 'max' => 255],
            [['gender_captain', 'gender_1', 'gender_2', 'gender_3'], 'string', 'max' => 1],
            [['tlp_1'], 'unique'],
            [['tlp_2'], 'unique'],
            [['tlp_3'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_id' => 'Team ID',
            'user_id' => 'User ID',
            'nama_captain' => 'Nama Captain',
            'tlp_captain' => 'Tlp Captain',
            'gender_captain' => 'Gender Captain',
            'nama_1' => 'Nama 1',
            'tlp_1' => 'Tlp 1',
            'gender_1' => 'Gender 1',
            'nama_2' => 'Nama 2',
            'tlp_2' => 'Tlp 2',
            'gender_2' => 'Gender 2',
            'nama_3' => 'Nama 3',
            'tlp_3' => 'Tlp 3',
            'gender_3' => 'Gender 3',
            'created_date' => 'Created Date',
            'nama_team' => 'nama team',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
