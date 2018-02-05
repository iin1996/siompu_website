<?php

/**
 * This is the model class for table "dusun".
 *
 * The followings are the available columns in table 'dusun':
 * @property integer $id
 * @property integer $nama_dusun
 * @property integer $desa_id
 * @property integer $jumlah_rt
 * @property integer $jumlah_rw
 *
 * The followings are the available model relations:
 * @property Desa $desa
 * @property Penduduk[] $penduduks
 */
class Dusun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dusun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_dusun, desa_id, jumlah_rt, jumlah_rw', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama_dusun, desa_id, jumlah_rt, jumlah_rw', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'desa' => array(self::BELONGS_TO, 'Desa', 'desa_id'),
			'penduduks' => array(self::HAS_MANY, 'Penduduk', 'dusun_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_dusun' => 'Nama Dusun',
			'desa_id' => 'Desa',
			'jumlah_rt' => 'Jumlah Rt',
			'jumlah_rw' => 'Jumlah Rw',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama_dusun',$this->nama_dusun);
		$criteria->compare('desa_id',$this->desa_id);
		$criteria->compare('jumlah_rt',$this->jumlah_rt);
		$criteria->compare('jumlah_rw',$this->jumlah_rw);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dusun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
