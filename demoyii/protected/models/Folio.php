<?php

/**
 * This is the model class for table "folio".
 *
 * The followings are the available columns in table 'folio':
 * @property string $id
 * @property string $lugar
 * @property string $psicologica
 * @property string $tecnica
 * @property string $entrevista
 * @property string $puntaje
 * @property string $usuario_id
 *
 * The followings are the available model relations:
 * @property Usuarios $usuario
 */
class Folio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Folio the static model class
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
		return 'folio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_id', 'required'),
			array('lugar', 'length', 'max'=>200),
			array('psicologica, tecnica, entrevista, puntaje, usuario_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lugar, psicologica, tecnica, entrevista, puntaje, usuario_id', 'safe', 'on'=>'search'),
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
			'lugar' => 'Lugar',
			'psicologica' => 'Psicologica',
			'tecnica' => 'Tecnica',
			'entrevista' => 'Entrevista',
			'puntaje' => 'Puntaje',
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
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('psicologica',$this->psicologica,true);
		$criteria->compare('tecnica',$this->tecnica,true);
		$criteria->compare('entrevista',$this->entrevista,true);
		$criteria->compare('puntaje',$this->puntaje,true);
		$criteria->compare('usuario_id',$this->usuario_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}