<?php

/**
 * Model of module.
 *
 * @package Model
 *
 * @copyright YetiForce Sp. z o.o
 * @license YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author Tomasz Kur <t.kur@yetiforce.com>
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class KnowledgeBase_Module_Model extends Vtiger_Module_Model
{
	/**
	 * {@inheritdoc}
	 */
	public function getKnowledgeBaseViewName()
	{
		return 'KnowledgeBase';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getKnowledgeBaseViewUrl()
	{
		return 'index.php?module=' . $this->get('name') . '&view=' . $this->getKnowledgeBaseViewName();
	}

	/**
	 * {@inheritdoc}
	 */
	public function getSideBarLinks($linkParams)
	{
		$links = parent::getSideBarLinks($linkParams);
		$links['SIDEBARLINK'][] = Vtiger_Link_Model::getInstanceFromValues([
			'linktype' => 'SIDEBARLINK',
			'linklabel' => 'LBL_VIEW_KNOWLEDGE_BASE',
			'linkurl' => $this->getKnowledgeBaseViewUrl(),
			'linkicon' => 'fas fa-tree',
		]);
		return $links;
	}
}
