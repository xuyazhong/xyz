<?php

/**
 * This is the model class for table "books".
 *
 * The followings are the available columns in table 'books':
 * @property integer $book_id
 * @property string $title
 * @property string $author_or_editor
 * @property string $isbn
 * @property string $publisher
 * @property string $copyright_year
 * @property string $categories
 * @property string $audience
 * @property string $media
 * @property string $thumbnail_url
 * @property string $info_url
 * @property string $reference_url
 * @property string $reference_no
 * @property string $notes
 * @property string $status
 * @property integer $borrower_id
 * @property string $due_date
 * @property string $date_created
 * @property string $date_modified
 * @property string $created_by
 * @property string $modified_by
 */
class Books extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Books the static model class
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
		return 'books';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('borrower_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>128),
			array('author_or_editor, isbn, publisher, copyright_year, categories, audience, media, thumbnail_url, info_url, reference_url, reference_no, notes, status', 'length', 'max'=>64),
			array('created_by, modified_by', 'length', 'max'=>32),
			array('due_date, date_created, date_modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('book_id, title, author_or_editor, isbn, publisher, copyright_year, categories, audience, media, thumbnail_url, info_url, reference_url, reference_no, notes, status, borrower_id, due_date, date_created, date_modified, created_by, modified_by', 'safe', 'on'=>'search'),
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
			'book_id' => '编号',
			'title' => '书名',
			'author_or_editor' => '作者',
			'isbn' => 'ISBN',
			'publisher' => '出版社',
			'copyright_year' => '出版时间',
			'categories' => '类型',
			'audience' => 'Audience',
			'thumbnail_url' => 'Thumbnail Url',
			'info_url' => 'Info Url',
			'reference_url' => 'Reference Url',
			'reference_no' => 'Reference No',
			'notes' => 'Notes',
			'status' => '状态',
			'borrower_id' => '借书人',
			'due_date' => 'Due Date',
			'date_created' => 'Date Created',
			'date_modified' => 'Date Modified',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
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

		$criteria->compare('book_id',$this->book_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('author_or_editor',$this->author_or_editor,true);
		$criteria->compare('isbn',$this->isbn,true);
		$criteria->compare('publisher',$this->publisher,true);
		$criteria->compare('copyright_year',$this->copyright_year,true);
		$criteria->compare('categories',$this->categories,true);
		$criteria->compare('audience',$this->audience,true);
		$criteria->compare('media',$this->media,true);
		$criteria->compare('thumbnail_url',$this->thumbnail_url,true);
		$criteria->compare('info_url',$this->info_url,true);
		$criteria->compare('reference_url',$this->reference_url,true);
		$criteria->compare('reference_no',$this->reference_no,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('borrower_id',$this->borrower_id);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('date_modified',$this->date_modified,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified_by',$this->modified_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}