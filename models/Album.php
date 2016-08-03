<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "album".
 *
 * @property integer $id
 * @property integer $author_id
 * @property string $name
 * @property integer $year
 * @property string $label
 * @property string $producer
 * @property string $art_direction
 * @property string $nationality
 * @property string $running_time
 * @property string $description
 * @property string $image
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'album';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'name', 'year', 'label', 'producer', 'art_direction', 'nationality', 'running_time'], 'required'],
            [['author_id', 'year'], 'integer'],
            [['running_time'], 'safe'],
            [['description'], 'string'],
            [['name', 'label', 'producer', 'art_direction', 'nationality', 'image'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'name' => 'Name',
            'year' => 'Year',
            'label' => 'Label',
            'producer' => 'Producer',
            'art_direction' => 'Art Direction',
            'nationality' => 'Nationality',
            'running_time' => 'Running Time',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
