<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Framework/Front_Default_Header.php';

/**
 * Get the general info of the application
 *
 * @package    Reservation System
 * @subpackage Tropical Casa Blanca Hotel
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Raul Castro <rd.castro.silva@gmail.com>
 */
class Layout_Model
{
    private $db; 
	
	public function __construct()
	{
		$this->db = new Mysqli_Tool(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	}
	
	/**
	 * getGeneralAppInfo
	 *
	 * get all the info that from the table app_info, this is about the application
	 * the name, url, creator and so
	 *
	 * @return array row containing the info
	 */
	
	public function getGeneralAppInfo()
	{
		try {
			$query = 'SELECT * FROM app_info';
	
			return $this->db->getRow($query);
	
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function getIndexReviews()
	{
		try {
			$query = 'SELECT * FROM reviews WHERE onIndex = 1 ORDER BY date DESC';
			
			return $this->db->getArray($query);
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function getSectionReviews()
	{
		try {
			$query = 'SELECT * FROM reviews WHERE onSection = 1 ORDER BY date DESC';
				
			return $this->db->getArray($query);
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function addGallery($sectionName, $name)
	{
		try
		{
			$query = 'INSERT INTO gallery(section_name, picture)
	                VALUES("'.$sectionName.'", "'.$name.'")';
			if ($this->db->run($query))
				return $this->db->insert_id;
		}
		catch (Exception $e)
		{
			return false;
		}
	}
	
	public function getGalleryBySection($sectionName)
	{
		try {
			$query = 'SELECT * FROM gallery WHERE section_name = "'.$sectionName.'" ORDER BY picture_id DESC';
			return $this->db->getArray($query);
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function getPolicies()
	{
		try {
			$query = 'SELECT policy, policy_esp FROM properties WHERE id = 1';
			return $this->db->getRow($query);
			
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function deleteGallery($picture_id)
	{
		try
		{
			$picture_id = (int) $picture_id;
	
			$query = 'DELETE FROM gallery
					WHERE picture_id = '.$picture_id;
			return $this->db->run($query);
		}
		catch (Exception $e)
		{
			return false;
		}
	}
}
