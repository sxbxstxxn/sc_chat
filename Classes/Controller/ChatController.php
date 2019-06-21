<?php
namespace SebastianChristoph\ScChat\Controller;


/**
 * Class ChatController
 *
 * * @package SebastianChristoph\ScChat\Controller
 */
class ChatController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * FeRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $feRepository;

    /**
     * FeGroupRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserGroupRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $feGroupRepository;

    /**
     * list action
     *
     * @return void
     */
    public function chatAction()
    {
        $this->view->assignMultiple([
            'test' => $GLOBALS['TSFE']->fe_user->user['username'],
            'testtest' => $GLOBALS['TSFE']->fe_user->user
        ]);
    }

}