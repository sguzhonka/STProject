<?php

namespace common\models;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use yii\base\Model;

class Partners extends ActiveRecord
{
	    public function rules()
    {
        return [
            [['href',  'img'], 'required'],
            [['href'], 'string', 'max' => 148],
            [['img'], 'string']
        ];
    }
	
	 public function attributeLabels()
    {
        return [
            'id' => 'id',
            'img' => 'img',
			'href' => 'href'
        ];
    }
	
	public function search($params)
    {
        $query = Partners::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'img' => $this->img,
			 'href' => $this->href,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'href', $this->header]);

        return $dataProvider;
    }
}
