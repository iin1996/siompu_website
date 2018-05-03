<?php

/**
 * This is the model class for table "desa".
 *
 * The followings are the available columns in table 'desa':
 * @property integer $id
 * @property string $potensi_desa
 * @property string $nama_desa
 * @property integer $kecamatan_id
 * @property integer $wisata_id
 * @property string $luas_wilayah
 * @property string $nama_kepdes
 *
 * The followings are the available model relations:
 * @property Kecamatan $kecamatan
 * @property Wisata $wisata
 * @property Dusun[] $dusuns
 */
class Desa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'desa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kecamatan_id, wisata_id', 'numerical', 'integerOnly'=>true),
			array('nama_desa, luas_wilayah, nama_kepdes', 'length', 'max'=>50),
			array('potensi_desa', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, potensi_desa, nama_desa, kecamatan_id, wisata_id, luas_wilayah, nama_kepdes', 'safe', 'on'=>'search'),
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
			'kecamatan' => array(self::BELONGS_TO, 'Kecamatan', 'kecamatan_id'),
			'wisata' => array(self::BELONGS_TO, 'Wisata', 'wisata_id'),
			'dusuns' => array(self::HAS_MANY, 'Dusun', 'desa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'potensi_desa' => 'Potensi Desa',
			'nama_desa' => 'Nama Desa',
			'kecamatan_id' => 'Kecamatan',
			'wisata_id' => 'Wisata',
			'luas_wilayah' => 'Luas Wilayah',
			'nama_kepdes' => 'Nama Kepdes',
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
		$criteria->compare('potensi_desa',$this->potensi_desa,true);
		$criteria->compare('nama_desa',$this->nama_desa,true);
		$criteria->compare('kecamatan_id',$this->kecamatan_id);
		$criteria->compare('wisata_id',$this->wisata_id);
		$criteria->compare('luas_wilayah',$this->luas_wilayah,true);
		$criteria->compare('nama_kepdes',$this->nama_kepdes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Desa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
