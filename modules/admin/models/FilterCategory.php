<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "filter_category".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property string $alias
 * @property string $intString
 * @property string $number
 * @property int $position
 */
class FilterCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'filter_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'parent_id', 'alias', 'intString'], 'required'],
            [['parent_id', 'position'], 'integer'],
            [['intString'], 'string'],
            [['name', 'alias', 'number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent_id' => 'Parent ID',
            'alias' => 'Alias',
            'intString' => 'Int String',
            'number' => 'Number',
            'position' => 'Position',
        ];
    }
}
