<?php

/**
 * This is the model class for table "inoutdata".
 *
 * The followings are the available columns in table 'inoutdata':
 * @property integer $id_data
 * @property string $department
 * @property string $nama
 * @property string $no
 * @property string $date_time
 * @property string $status
 * @property integer $location_id
 * @property string $id_number
 * @property string $verify_code
 * @property string $no_kartu
 */
class InOutData extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InOutData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inoutdata';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('location_id', 'numerical', 'integerOnly'=>true),
			array('department, nama, no, date_time, id_number, verify_code, no_kartu', 'length', 'max'=>75),
			array('status', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_data, department, nama, no, date_time, status, location_id, id_number, verify_code, no_kartu', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_data' => 'Id Data',
			'department' => 'Department',
			'nama' => 'Nama',
			'no' => 'No',
			'date_time' => 'Date Time',
			'status' => 'Status',
			'location_id' => 'Location',
			'id_number' => 'Id Number',
			'verify_code' => 'Verify Code',
			'no_kartu' => 'No Kartu',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_data',$this->id_data);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('no',$this->no,true);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('id_number',$this->id_number,true);
		$criteria->compare('verify_code',$this->verify_code,true);
		$criteria->compare('no_kartu',$this->no_kartu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}