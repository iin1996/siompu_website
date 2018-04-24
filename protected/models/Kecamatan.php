<?php

/**
 * This is the model class for table "kecamatan".
 *
 * The followings are the available columns in table 'kecamatan':
 * @property integer $id
 * @property string $nama_kecamatan
 * @property string $visi_misi
 * @property string $sejarah
 * @property integer $total_penduduk
 *
 * The followings are the available model relations:
 * @property Desa[] $desas
 */
class Kecamatan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kecamatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('total_penduduk', 'numerical', 'integerOnly'=>true),
			array('nama_kecamatan', 'length', 'max'=>50),
			array('visi_misi, sejarah', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama_kecamatan, visi_misi, sejarah, total_penduduk', 'safe', 'on'=>'search'),
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
			'desas' => array(self::HAS_MANY, 'Desa', 'kecamatan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_kecamatan' => 'Nama Kecamatan',
			'visi_misi' => 'Visi Misi',
			'sejarah' => 'Sejarah',
			'total_penduduk' => 'Total Penduduk',
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
		$criteria->compare('nama_kecamatan',$this->nama_kecamatan,true);
		$criteria->compare('visi_misi',$this->visi_misi,true);
		$criteria->compare('sejarah',$this->sejarah,true);
		$criteria->compare('total_penduduk',$this->total_penduduk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kecamatan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
