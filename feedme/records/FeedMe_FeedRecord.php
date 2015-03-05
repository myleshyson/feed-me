<?php
namespace Craft;

class FeedMe_FeedRecord extends BaseRecord
{
	public function getTableName()
	{
		return 'feedme_feeds';
	}

	protected function defineAttributes()
	{
		return array(
			'name'				=> array(AttributeType::String, 'required' => true),
			'feedUrl'			=> array(AttributeType::Url, 'required' => true),
			'feedType'          => array(AttributeType::Enum, 'required' => true, 'values' => array(
			    FeedMe_FeedType::XML,
			    FeedMe_FeedType::RSS,
			    FeedMe_FeedType::ATOM,
			    FeedMe_FeedType::JSON,
			)),
			'primaryElement'	=> array(AttributeType::String, 'required' => true),
			'section'			=> array(AttributeType::String, 'required' => true),
			'entrytype'			=> array(AttributeType::String, 'required' => true),
			'duplicateHandle'	=> array(AttributeType::Enum, 'required' => true, 'values' => array(
			    FeedMe_Duplicate::Add,
			    FeedMe_Duplicate::Update,
			    FeedMe_Duplicate::Delete,
			)),
			'fieldMapping'		=> array(AttributeType::Mixed),
			'fieldUnique'		=> array(AttributeType::Mixed),
		);
	}

	public function scopes()
	{
		return array(
			'ordered' => array('order' => 'name'),
		);
	}
}



