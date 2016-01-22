<?php

$root = $_SERVER['DOCUMENT_ROOT'];

/**
 * Includes the file /models/front/Layout_Model.php 
 * in order to interact with the database
 */
require_once $root.'/models/front/Layout_Model.php';


/**
 * Contains the classes for access to the basic app info without log-in
 *
 * @package    Reservation System
 * @subpackage Tropical Casa Blanca Hotel
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Raul Castro <rd.castro.silva@gmail.com>
 */
class generalFrontBackend
{
	protected  $model;
	
	/**
	 * Initialize a class, the model one
	 */
	public function __construct()
	{
		$this->model = new Layout_Model();
	}
	
	/**
	 * Based on the section it returns the right info that could be propagated along the application
	 * 
	 * @param string $section
	 * @return array Array with the asked info of the application 
	 */
	public function loadBackend($section = '')
	{
		$data 		= array();
		
// 		Info of the Application
		
		$appInfoRow = $this->model->getGeneralAppInfo();
		
		$appInfo = array( 
				'title' 		=> $appInfoRow['title'],
				'siteName' 		=> $appInfoRow['site_name'],
				'url' 			=> $appInfoRow['url'],
				'content' 		=> $appInfoRow['content'],
				'description'	=> $appInfoRow['description'],
				'keywords' 		=> $appInfoRow['keywords'],
				'location'		=> $appInfoRow['location'],
				'creator' 		=> $appInfoRow['creator'],
				'creatorUrl' 	=> $appInfoRow['creator_url'],
				'twitter' 		=> $appInfoRow['twitter'],
				'facebook' 		=> $appInfoRow['facebook'],
				'googleplus' 	=> $appInfoRow['googleplus'],
				'pinterest' 	=> $appInfoRow['pinterest'],
				'linkedin' 		=> $appInfoRow['linkedin'],
				'youtube' 		=> $appInfoRow['youtube'],
				'instagram'		=> $appInfoRow['instagram'],
				'email'			=> $appInfoRow['email'],
				'lang'			=> $appInfoRow['lang']
		);
		
		$data['appInfo'] = $appInfo;
		
		switch ($section)
		{
			case 'mainSection':
// 				get Reviews for the index
				$reviewsArray = $this->model->getIndexReviews();
				$data['reviews'] = $reviewsArray;
			break;
		
			case 'reviews':
				// 				get Reviews for the section
				$reviewsArray = $this->model->getSectionReviews();
				$data['reviews'] = $reviewsArray;
				
				$testimonials = $this->model->getGalleryBySection('Testimonials');
				$data['testimonials'] = $testimonials;
			break;
			
			case 'the-rooms':
				$bedrooms = $this->model->getGalleryBySection('master-bedroom');
				$data['master-bedroom'] = $bedrooms;
				
				$bedrooms = $this->model->getGalleryBySection('bedroom-two');
				$data['bedroom-two'] = $bedrooms;
				
				$bedrooms = $this->model->getGalleryBySection('bedroom-three');
				$data['bedroom-three'] = $bedrooms;
				
				$bedrooms = $this->model->getGalleryBySection('bedroom-four');
				$data['bedroom-four'] = $bedrooms;
				
				$bedrooms = $this->model->getGalleryBySection('bedroom-five');
				$data['bedroom-five'] = $bedrooms;
				
			break;		

			case 'living':
				$info = $this->model->getGalleryBySection('living-room');
				$data['living-room'] = $info;
				
				$info = $this->model->getGalleryBySection('dining-room');
				$data['dining-room'] = $info;
				
				$info = $this->model->getGalleryBySection('family-room');
				$data['family-room'] = $info;
				
				$info = $this->model->getGalleryBySection('library-room');
				$data['library-room'] = $info;
				
				$info = $this->model->getGalleryBySection('kitchen');
				$data['kitchen'] = $info;
			break;
			
			case 'pool':
				$info = $this->model->getGalleryBySection('pool');
				$data['pool'] = $info;
				
				$info = $this->model->getGalleryBySection('jacuzzy');
				$data['jacuzzy'] = $info;
				
				$info = $this->model->getGalleryBySection('oven');
				$data['oven'] = $info;
				
				$info = $this->model->getGalleryBySection('gym');
				$data['gym'] = $info;
				
				$info = $this->model->getGalleryBySection('squash');
				$data['squash'] = $info;
			break;
			
			case 'what':
				$info = $this->model->getGalleryBySection('activities');
				$data['activities'] = $info;
			break;
			
			case 'arriving':
				$info = $this->model->getGalleryBySection('playacar');
				$data['playacar'] = $info;
			break;
			
			case 'weddings':
				$info = $this->model->getGalleryBySection('weddings');
				$data['weddings'] = $info;
			break;
			
			case 'corporate':
				$info = $this->model->getGalleryBySection('corporate');
				$data['corporate'] = $info;
			break;
			
			case 'private':
				$info = $this->model->getGalleryBySection('private-events');
				$data['private-events'] = $info;
			break;
			
			case 'photo':
				$info = $this->model->getGalleryBySection('photoshoots');
				$data['photoshoots'] = $info;
			break;
			
			case 'gallery':
				$bedrooms = $this->model->getGalleryBySection('master-bedroom');
				$data['master-bedroom'] = $bedrooms;
				
				$bedrooms = $this->model->getGalleryBySection('bedroom-two');
				$data['bedroom-two'] = $bedrooms;
				
				$bedrooms = $this->model->getGalleryBySection('bedroom-three');
				$data['bedroom-three'] = $bedrooms;
				
				$bedrooms = $this->model->getGalleryBySection('bedroom-four');
				$data['bedroom-four'] = $bedrooms;
				
				$bedrooms = $this->model->getGalleryBySection('bedroom-five');
				$data['bedroom-five'] = $bedrooms;
				
				$info = $this->model->getGalleryBySection('living-room');
				$data['living-room'] = $info;
				
				$info = $this->model->getGalleryBySection('dining-room');
				$data['dining-room'] = $info;
				
				$info = $this->model->getGalleryBySection('family-room');
				$data['family-room'] = $info;
				
				$info = $this->model->getGalleryBySection('library-room');
				$data['library-room'] = $info;
				
				$info = $this->model->getGalleryBySection('kitchen');
				$data['kitchen'] = $info;
				
				$info = $this->model->getGalleryBySection('pool');
				$data['pool'] = $info;
				
				$info = $this->model->getGalleryBySection('jacuzzy');
				$data['jacuzzy'] = $info;
				
				$info = $this->model->getGalleryBySection('oven');
				$data['oven'] = $info;
				
				$info = $this->model->getGalleryBySection('gym');
				$data['gym'] = $info;
				
				$info = $this->model->getGalleryBySection('squash');
				$data['squash'] = $info;
				
			break;
			
		}

		return $data;
	}
}

$backend = new generalFrontBackend();

