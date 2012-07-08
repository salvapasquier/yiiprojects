<?php

/**
 * This is the model class for table "estudios".
 *
 * The followings are the available columns in table 'estudios':
 * @property string $id
 * @property string $institucion
 * @property integer $anio_graduacion
 * @property string $titulo
 * @property string $usuario_id
 *
 * The followings are the available model relations:
 * @property Usuarios $usuario
 */
class Estudios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estudios the static model class
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
		return 'estudios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institucion, anio_graduacion, titulo, usuario_id', 'required'),
			array('anio_graduacion', 'numerical', 'integerOnly'=>true),
			array('institucion, titulo', 'length', 'max'=>255),
			array('usuario_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, institucion, anio_graduacion, titulo, usuario_id', 'safe', 'on'=>'search'),
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
			'usuario' => array(self::BELONGS_TO, 'Usuarios', 'usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institucion' => 'Institucion',
			'anio_graduacion' => 'Anio Graduacion',
			'titulo' => 'Titulo',
			'usuario_id' => 'Usuario',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('institucion',$this->institucion,true);
		$criteria->compare('anio_graduacion',$this->anio_graduacion);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('usuario_id',$this->usuario_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}