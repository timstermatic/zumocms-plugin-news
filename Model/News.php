<?php   
/**
 * News Model
 */
class News extends AppModel {

/**
 * default order
 */
    public $order = array('release_date'=>'desc');



/**
 * validate property
 */
	var $validate = array(
		'headline' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a headline'
		),
		'slug' => array(
			'rule1' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a slug'
			),
			'rule2' => array(
				'rule' => 'isUnique',
				'message' => 'This slug is aready in use'
			)
		)
	);


/**
 * recent news
 */
        public function _recent($limit=3) 
        {
            return $this->find('all', array(
                'conditions'=>array(
                   'release_date'<=date('Y-m-d'), 
                   'archive_date'>date('Y-m-d'), 
                   'published'=>1
                ),
                'limit'=>$limit
            ));
        }

}
