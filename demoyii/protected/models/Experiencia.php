<?php

/**
 * This is the model class for table "experiencia".
 *
 * The followings are the available columns in table 'experiencia':
 * @property string $id
 * @property string $empresa
 * @property string $inicio
 * @property string $finalizacion
 * @property string $jefe
 * @property string $usuario_id
 *
 * The followings are the available model relations:
 * @property Usuarios $usuario
 */
class Experiencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Experiencia the static model class
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
		return 'experiencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa, inicio, finalizacion, jefe, usuario_id', 'required'),
			array('empresa', 'length', 'max'=>200),
			array('jefe', 'length', 'max'=>255),
			array('usuario_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, empresa, inicio, finalizacion, jefe, usuario_id', 'safe', 'on'=>'search'),
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
			'empresa' => 'Empresa',
			'inicio' => 'Inicio',
			'finalizacion' => 'Finalizacion',
			'jefe' => 'Jefe',
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
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('inicio',$this->inicio,true);
		$criteria->compare('finalizacion',$this->finalizacion,true);
		$criteria->compare('jefe',$this->jefe,true);
		$criteria->compare('usuario_id',$this->usuario_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}