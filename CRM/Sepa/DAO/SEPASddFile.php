<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from org.project60.sepa/xml/schema/CRM/Sepa/File.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:f68edd439d762c8e12a4863d56d0a709)
 */
use CRM_Sepa_ExtensionUtil as E;

/**
 * Database access object for the SEPASddFile entity.
 */
class CRM_Sepa_DAO_SEPASddFile extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_sdd_file';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * ID
   *
   * @var int
   */
  public $id;

  /**
   * End-to-end reference for this sdd file.
   *
   * @var string
   */
  public $reference;

  /**
   * Name of the generated file
   *
   * @var string
   */
  public $filename;

  /**
   * Latest submission date
   *
   * @var datetime
   */
  public $latest_submission_date;

  /**
   * When was this item created
   *
   * @var datetime
   */
  public $created_date;

  /**
   * FK to Contact ID of creator
   *
   * @var int
   */
  public $created_id;

  /**
   * fk to Batch Status options in civicrm_option_values
   *
   * @var int
   */
  public $status_id;

  /**
   * Comments about processing of this file
   *
   * @var text
   */
  public $comments;

  /**
   * Tag used to group multiple creditors in this XML file.
   *
   * @var string
   */
  public $tag;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_sdd_file';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('SEPASdd Files') : E::ts('SEPASdd File');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'created_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('ID'),
          'required' => TRUE,
          'where' => 'civicrm_sdd_file.id',
          'export' => TRUE,
          'table_name' => 'civicrm_sdd_file',
          'entity' => 'SEPASddFile',
          'bao' => 'CRM_Sepa_DAO_SEPASddFile',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'reference' => [
          'name' => 'reference',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Reference'),
          'description' => E::ts('End-to-end reference for this sdd file.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_sdd_file.reference',
          'table_name' => 'civicrm_sdd_file',
          'entity' => 'SEPASddFile',
          'bao' => 'CRM_Sepa_DAO_SEPASddFile',
          'localizable' => 0,
          'add' => NULL,
        ],
        'filename' => [
          'name' => 'filename',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Filename'),
          'description' => E::ts('Name of the generated file'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_sdd_file.filename',
          'table_name' => 'civicrm_sdd_file',
          'entity' => 'SEPASddFile',
          'bao' => 'CRM_Sepa_DAO_SEPASddFile',
          'localizable' => 0,
          'add' => NULL,
        ],
        'latest_submission_date' => [
          'name' => 'latest_submission_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => E::ts('Latest Submission Date'),
          'description' => E::ts('Latest submission date'),
          'where' => 'civicrm_sdd_file.latest_submission_date',
          'table_name' => 'civicrm_sdd_file',
          'entity' => 'SEPASddFile',
          'bao' => 'CRM_Sepa_DAO_SEPASddFile',
          'localizable' => 0,
          'add' => NULL,
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => E::ts('Created Date'),
          'description' => E::ts('When was this item created'),
          'where' => 'civicrm_sdd_file.created_date',
          'table_name' => 'civicrm_sdd_file',
          'entity' => 'SEPASddFile',
          'bao' => 'CRM_Sepa_DAO_SEPASddFile',
          'localizable' => 0,
          'add' => NULL,
        ],
        'created_id' => [
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('FK to Contact ID of creator'),
          'where' => 'civicrm_sdd_file.created_id',
          'table_name' => 'civicrm_sdd_file',
          'entity' => 'SEPASddFile',
          'bao' => 'CRM_Sepa_DAO_SEPASddFile',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => NULL,
        ],
        'status_id' => [
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('fk to Batch Status options in civicrm_option_values'),
          'required' => TRUE,
          'where' => 'civicrm_sdd_file.status_id',
          'table_name' => 'civicrm_sdd_file',
          'entity' => 'SEPASddFile',
          'bao' => 'CRM_Sepa_DAO_SEPASddFile',
          'localizable' => 0,
          'add' => NULL,
        ],
        'comments' => [
          'name' => 'comments',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Comments'),
          'description' => E::ts('Comments about processing of this file'),
          'where' => 'civicrm_sdd_file.comments',
          'table_name' => 'civicrm_sdd_file',
          'entity' => 'SEPASddFile',
          'bao' => 'CRM_Sepa_DAO_SEPASddFile',
          'localizable' => 0,
          'add' => NULL,
        ],
        'tag' => [
          'name' => 'tag',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Tag'),
          'description' => E::ts('Tag used to group multiple creditors in this XML file.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_sdd_file.tag',
          'table_name' => 'civicrm_sdd_file',
          'entity' => 'SEPASddFile',
          'bao' => 'CRM_Sepa_DAO_SEPASddFile',
          'localizable' => 0,
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'sdd_file', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'sdd_file', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_reference' => [
        'name' => 'UI_reference',
        'field' => [
          0 => 'reference',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_sdd_file::1::reference',
      ],
      'UI_filename' => [
        'name' => 'UI_filename',
        'field' => [
          0 => 'filename',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_sdd_file::1::filename',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
