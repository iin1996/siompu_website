<?php

/**
 * This is the model class for table "penduduk".
 *
 * The followings are the available columns in table 'penduduk':
 * @property integer $id
 * @property string $nama_penduduk
 * @property integer $dusun_id
 * @property integer $no_kk
 * @property integer $no_ktp
 * @property string $alamat
 * @property string $tempat_lahir
 * @property string $status_menikah
 * @property string $pekerjaan
 * @property integer $agama_id
 * @property string $tgl_lahir
 * @property string $jenis_kelamin
 * @property string $no_hp
 * @property string $pendidikan_terakhir
 *
 * The followings are the available model relations:
 * @property Dusun $dusun
 * @property Agama $agama
 */
class Penduduk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'penduduk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dusun_id, no_kk, no_ktp, agama_id', 'numerical', 'integerOnly'=>true),
			array('nama_penduduk, alamat, tempat_lahir, pekerjaan, no_hp, pendidikan_terakhir', 'length', 'max'=>50),
			array('status_menikah, jenis_kelamin', 'length', 'max'=>1),
			array('tgl_lahir', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama_penduduk, dusun_id, no_kk, no_ktp, alamat, tempat_lahir, status_menikah, pekerjaan, agama_id, tgl_lahir, jenis_kelamin, no_hp, pendidikan_terakhir', 'safe', 'on'=>'search'),
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
			'dusun' => array(self::BELONGS_TO, 'Dusun', 'dusun_id'),
			'agama' => array(self::BELONGS_TO, 'Agama', 'agama_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_penduduk' => 'Nama Penduduk',
			'dusun_id' => 'Dusun',
			'no_kk' => 'No Kk',
			'no_ktp' => 'No Ktp',
			'alamat' => 'Alamat',
			'tempat_lahir' => 'Tempat Lahir',
			'status_menikah' => 'Status Menikah',
			'pekerjaan' => 'Pekerjaan',
			'agama_id' => 'Agama',
			'tgl_lahir' => 'Tgl Lahir',
			'jenis_kelamin' => 'Jenis Kelamin',
			'no_hp' => 'No Hp',
			'pendidikan_terakhir' => 'Pendidikan Terakhir',
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
		$criteria->compare('nama_penduduk',$this->nama_penduduk,true);
		$criteria->compare('dusun_id',$this->dusun_id);
		$criteria->compare('no_kk',$this->no_kk);
		$criteria->compare('no_ktp',$this->no_ktp);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('status_menikah',$this->status_menikah,true);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);
		$criteria->compare('agama_id',$this->agama_id);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('no_hp',$this->no_hp,true);
		$criteria->compare('pendidikan_terakhir',$this->pendidikan_terakhir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Penduduk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
