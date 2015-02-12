<?php

namespace Backend\Modules\GoogleMaps\Actions;

use Backend\Core\Engine\Base\ActionEdit as BackendBaseActionEdit;
use Backend\Core\Engine\Model as BackendModel;
use Backend\Core\Engine\Form as BackendForm;
use Backend\Core\Engine\Language as BL;

/**
 * This is the settings-action, it will display a form to fill in an address
 *
 * @author Lander Vanderstraeten <lander.vanderstraeten@wijs.be>
 */
class Settings extends BackendBaseActionEdit
{

    /**
     * Execute the action
     */
    public function execute()
    {
        parent::execute();
        $this->loadForm();
        $this->validateForm();
        $this->parse();
        $this->display();
    }

    /**
     * Loads the settings form
     */
    private function loadForm()
    {
        $this->frm = new BackendForm('settings');

        // add field for address
        $this->frm->addText('address', BackendModel::getModuleSetting(
            $this->URL->getModule(), 'address_' . BL::getWorkingLanguage()))
            ->setAttribute('style', 'width:98%;');
    }

    /**
     * Parse the form
     */
    protected function parse()
    {
        parent::parse();
    }

    /**
     * Validates the settings form
     */
    private function validateForm()
    {
        if ($this->frm->isSubmitted()) {
            // validation
            $this->frm->getField('address')->isFilled(BL::err('FieldIsRequired'));

            if ($this->frm->isCorrect()) {
                // set our settings
                BackendModel::setModuleSetting($this->URL->getModule(), 'address_' .
                    BL::getWorkingLanguage(), $this->frm->getField('address')->getValue());

                // trigger event
                BackendModel::triggerEvent($this->getModule(), 'after_saved_settings');

                // redirect to the settings page
                $this->redirect(BackendModel::createURLForAction('Settings') . '&report=saved');
            }
        }
    }
}
