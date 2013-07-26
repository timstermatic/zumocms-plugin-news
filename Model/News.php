<?php   
/**
 * News Model
 */
class News extends AppModel {
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
}
